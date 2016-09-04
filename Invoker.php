<?php
/**
 * @author Eugene Babushkin
 */

namespace PaymentProto;

class Invoker
{
    public function invoke()
    {
        // get from request
        $paySystem = 'namedSystem';
        $currentCommand = 'form';

        $manager = Factory::getManagerByParam($paySystem);
        $handler = Factory::getHandlerByParam($paySystem);

        try {
            $response = $manager->getCurrentCommand($currentCommand, $handler)->execute();
        } catch (\Exception $e) {
            $response = $manager->getPrevCommand($currentCommand, $handler)->execute();
        }

        return $response;
    }
}