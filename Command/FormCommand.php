<?php
/**
 * @author Eugene Babushkin
 */

namespace PaymentProto\Command;

use PaymentProto\HandlerExecutableFormCommandInterface;

class FormCommand  extends AbstractCommand implements CommandInterface
{
    public function execute()
    {
        /** @var HandlerExecutableFormCommandInterface $handler */
        $handler = $this->getHandler();

        return $handler->formCommand();
    }
}