<?php
/**
 * @author Eugene Babushkin
 */

namespace PaymentProto\Command;

use PaymentProto\HandlerInterface;

abstract class AbstractCommand
{
    /**
     * @var HandlerInterface
     */
    private $handler;

    public function __construct(HandlerInterface $handler)
    {
        $this->handler = $handler;
    }

    /**
     * @return HandlerInterface
     */
    protected function getHandler()
    {
        return $this->handler;
    }
}