<?php
/**
 * @author Eugene Babushkin
 */

namespace PaymentProto;

abstract class AbstractManager implements ManagerInterface
{
    /**
     * @var array
     */
    private $commandList = [];

    /**
     * @var bool
     */
    private $isInitialized = false;

    abstract protected function initCommandSteps();

    /**
     * @param string $commandName
     *
     * @return $this
     */
    protected function addCommand($commandName)
    {
        $this->commandList[] = $commandName;

        return $this;
    }

    private function initialize()
    {
        if ($this->isInitialized) {
            return;
        }

        $this->initCommandSteps();
        $this->isInitialized = true;
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentCommand($currentCommandName, HandlerInterface $handler)
    {
        $this->initialize();
        if (!in_array($currentCommandName, $this->commandList)) {
            // throw exception
        }

        return Factory::getCommandByName($currentCommandName, $handler);
    }

    /**
     * {@inheritdoc}
     */
    public function getPrevCommand($currentCommandName, HandlerInterface $handler)
    {
        $this->initialize();
        $currentCommandIndex = array_search($currentCommandName, $this->commandList);

        if ($currentCommandIndex === false) {
            // throw exception
        }

        $prevCommandIndex = $currentCommandIndex > 0 ? $currentCommandIndex - 1 : 0;

        return Factory::getCommandByName($this->commandList[$prevCommandIndex], $handler);
    }
}