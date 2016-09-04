<?php
/**
 * @author Eugene Babushkin
 */

namespace PaymentProto\PaySystem\NamedSystem;

use PaymentProto\Command\Response;
use PaymentProto\HandlerExecutableCheckoutCommandInterface;
use PaymentProto\HandlerExecutableFormCommandInterface;
use PaymentProto\Response\Element\FormElement;
use PaymentProto\Response\Element\FormInputElement;

class Handler implements HandlerExecutableFormCommandInterface, HandlerExecutableCheckoutCommandInterface
{
    public function formCommand()
    {
        // do something...
        return new Response(
            new FormElement(
                new FormInputElement(FormInputElement::FORM_TYPE_HIDDEN, 'field_name1', 'field_value1'),
                new FormInputElement(FormInputElement::FORM_TYPE_TEXT, 'user_name', 'user_name')
            )
        );
    }

    public function checkoutCommand()
    {
        // do something...
        return new Response();
    }
}