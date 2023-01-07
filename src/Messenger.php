<?php

interface Messenger {
  public function connect(MessengerType $type, string $hostName, int $port, string $password);
  public function subscribe(Channel $channel, ChannelHandlerExecutor $executor);
  public function reply(RequestPacket $packet);
  public function send(string $channelName, Packet $packet);
  public function sendRequestPacket(string $channelName, RequestPacket $requestPacket, ResponsePacket $responsePacket);
}
