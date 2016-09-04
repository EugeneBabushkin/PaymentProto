<?php
/**
 * @author Eugene Babushkin
 */

namespace PaymentProto;

interface HandlerExecutableFormCommandInterface extends HandlerInterface
{
    public function formCommand();
}