<?php
/**
 * Created by PhpStorm.
 * User: 白猫
 * Date: 2019/4/24
 * Time: 13:55
 */

namespace ESD\BaseServer\Server;


use ESD\BaseServer\Server\Beans\Request;
use ESD\BaseServer\Server\Beans\Response;
use ESD\BaseServer\Server\Beans\WebSocketFrame;

interface IServerPort
{
    public function onTcpConnect(int $fd, int $reactorId);

    public function onTcpClose(int $fd, int $reactorId);

    public function onTcpReceive(int $fd, int $reactorId, string $data);

    public function onUdpPacket(string $data, array $client_info);

    public function onHttpRequest(Request $request, Response $response);

    public function onWsMessage(WebSocketFrame $frame);

    public function onWsOpen(Request $request);

    public function onWsPassCustomHandshake(Request $request): bool;
}