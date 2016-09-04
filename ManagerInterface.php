<?php
/**
 * @author Eugene Babushkin
 */

namespace PaymentProto;

use PaymentProto\Command\CommandInterface;

interface ManagerInterface
{
    /**
     * @param HandlerInterface $handler
     * @param string $currentCommandName
     *
     * @return CommandInterface
     */
    public function getCurrentCommand($currentCommandName, HandlerInterface $handler);

    /**
     * @param HandlerInterface $handler
     * @param string $currentCommandName
     *
     * @return CommandInterface
     */
    public function getPrevCommand($currentCommandName, HandlerInterface $handler);
}