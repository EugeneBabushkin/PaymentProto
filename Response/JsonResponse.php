<?php
/**
 * @author Eugene Babushkin
 */

namespace PaymentProto\Response;

use PaymentProto\Command\Response;
use PaymentProto\Response\Json\Decorator\FormElement;

class JsonResponse
{
    public static function convertFromResponse(Response $response)
    {
        $form = $response->getFormAndValidate();

        $decorator = new FormElement($form);
        return json_encode($decorator->out());
    }
}