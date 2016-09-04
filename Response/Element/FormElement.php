<?php
/**
 * @author Eugene Babushkin
 */

namespace PaymentProto\Response\Element;

class FormElement
{
    /**
     * @var FormInputElement[]
     */
    private $elements;

    public function __construct(...$elements)
    {
        $this->elements = $elements;
    }

    /**
     * @return FormInputElement[]
     */
    public function getElements()
    {
        return $this->elements;
    }
}
