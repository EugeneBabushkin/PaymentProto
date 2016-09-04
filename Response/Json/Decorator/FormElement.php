<?php
/**
 * @author Eugene Babushkin
 */

namespace PaymentProto\Response\Json\Decorator;

class FormElement
{
    private $formElement;

    public function __construct(\PaymentProto\Response\Element\FormElement $formElement)
    {
        $this->formElement = $formElement;
    }

    public function out()
    {
        $items = [];
        foreach ($this->formElement->getElements() as $element) {
            $items[] = (new FormInputElement($element))->out();
        }

        return [
            'form' => [
                'items' => $items
            ]
        ];
    }
}