<?php

class ChannelCache {
  private array $channelMap;

  public function __construct() {
    $this->channelMap = [];
  }

  public function findChannelByName(string $name): ?Channel {
    return $this->channelMap[$name] ?? null;
  }

  public function add(Channel $channel) {
    $this->channelMap[$channel->getName()] = $channel;
  }

  public function getChannelMap(): array {
    return $this->channelMap;
  }
}
