<?php
/**
 * @author Eugene Babushkin
 */

namespace PaymentProto;

use PaymentProto\Command\CommandInterface;

class Factory
{
    private static function getClassInstance($paySystem, $className)
    {
        $className = __NAMESPACE__ . '\PaySystem\\' . ucfirst($paySystem) . '\\' . $className;

        if (!class_exists($className)) {
            // throw fatal !
        }

        return new $className();
    }

    /**
     * @param $handlerString
     *
     * @return HandlerInterface
     */
    public static function getHandlerByParam($handlerString)
    {
        return self::getClassInstance($handlerString, 'Handler');
    }

    /**
     * @param $managerString
     *
     * @return ManagerInterface
     */
    public static function getManagerByParam($managerString)
    {
        return self::getClassInstance($managerString, 'Manager');
    }

    /**
     * @param string $commandName
     * @param HandlerInterface $handler
     *
     * @return CommandInterface
     */
    public static function getCommandByName($commandName, HandlerInterface $handler)
    {
        $className = __NAMESPACE__ . '\Command\\' . ucfirst($commandName) . 'Command';

        if (!class_exists($className)) {
            // throw fatal !
        }

        return new $className($handler);
    }
}