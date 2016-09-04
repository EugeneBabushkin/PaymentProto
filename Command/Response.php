<?php
/**
 * @author Eugene Babushkin
 */

namespace PaymentProto\Command;

use PaymentProto\Response\Element\FormElement;

class Response
{
    /**
     * @var FormElement
     */
    private $form;

    public function __construct(FormElement $form)
    {
        $this->form = $form;
    }

    public function validateForm()
    {
        // do something...
        return true;
    }

    /**
     * @return FormElement
     */
    public function getFormAndValidate()
    {
        return $this->form;
    }
}