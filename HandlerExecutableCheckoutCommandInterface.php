<?php
/**
 * @author Eugene Babushkin
 */

namespace PaymentProto;

interface HandlerExecutableCheckoutCommandInterface extends HandlerInterface
{
    public function checkoutCommand();
}