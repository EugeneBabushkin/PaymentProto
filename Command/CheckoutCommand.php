<?php
/**
 * @author Eugene Babushkin
 */

namespace PaymentProto\Command;

use PaymentProto\HandlerExecutableCheckoutCommandInterface;

class CheckoutCommand extends AbstractCommand implements CommandInterface
{
    public function execute()
    {
        /** @var HandlerExecutableCheckoutCommandInterface $handler */
        $handler = $this->getHandler();

        return $handler->checkoutCommand();
    }
}