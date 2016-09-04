<?php
/**
 * @author Eugene Babushkin
 */

$loader = require_once __DIR__.'/vendor/autoload.php';

$invoker = new \PaymentProto\Invoker();
$response = $invoker->invoke();

var_dump(\PaymentProto\Response\JsonResponse::convertFromResponse($response));