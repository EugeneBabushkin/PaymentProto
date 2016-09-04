<?php
/**
 * @author Eugene Babushkin
 */

namespace PaymentProto\Response\Json\Decorator;

class FormInputElement
{
    private $inputElement;

    public function __construct(\PaymentProto\Response\Element\FormInputElement $inputElement)
    {
        $this->inputElement = $inputElement;
    }

    public function out()
    {
        return [
            'input' => [
                'type' => $this->inputElement->getType(),
                'name' => $this->inputElement->getName(),
                'value' => $this->inputElement->getValue(),
            ]
        ];
    }
}