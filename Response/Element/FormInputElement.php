<?php
/**
 * @author Eugene Babushkin
 */

namespace PaymentProto\Response\Element;

class FormInputElement
{
    const FORM_TYPE_HIDDEN = 'hidden';
    const FORM_TYPE_TEXT = 'text';
    const FORM_TYPE_SUBMIT = 'submit';

    private $type;
    private $name;
    private $value;

    public function __construct($type, $name, $value)
    {
        $this->type = $type;
        $this->name = $name;
        $this->value = $name;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}