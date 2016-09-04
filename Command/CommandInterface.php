<?php
/**
 * @author Eugene Babushkin
 */

namespace PaymentProto\Command;

interface CommandInterface
{
    const COMMAND_FORM_NAME = 'form';
    const COMMAND_CHECKOUT_NAME = 'checkout';

    /**
     * @return Response
     */
    public function execute();
}

