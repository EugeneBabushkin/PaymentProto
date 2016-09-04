<?php
/**
 * @author Eugene Babushkin
 */

namespace PaymentProto\PaySystem\NamedSystem;

use PaymentProto\AbstractManager;
use PaymentProto\Command\CommandInterface;

class Manager extends AbstractManager
{
    public function initCommandSteps()
    {
        $this
            ->addCommand(CommandInterface::COMMAND_FORM_NAME)
            ->addCommand(CommandInterface::COMMAND_CHECKOUT_NAME);
    }
}