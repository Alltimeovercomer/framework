<?php

namespace Kraken\Runtime\Container;

use Dazzle\Channel\Protocol\ProtocolInterface;
use Dazzle\Channel\Channel;
use Dazzle\Promise\PromiseInterface;

interface AbstractManagerInterface
{
    /**
     * Send request to specified Runtime Container.
     *
     * @param string $alias
     * @param string|ProtocolInterface $message
     * @param mixed[] $params
     * @return PromiseInterface
     */
    public function sendRequest($alias, $message, $params = []);

    /**
     * Send async message to specified Runtime Container.
     *
     * @param string $alias
     * @param string|ProtocolInterface $message
     * @param int $flags
     * @return PromiseInterface
     */
    public function sendMessage($alias, $message, $flags = Channel::MODE_DEFAULT);

    /**
     * Invoke remote command using specified Runtime Container.
     *
     * @param string $alias
     * @param string $command
     * @param mixed[] $params
     */
    public function sendCommand($alias, $command, $params = []);
}