<?php

class Handler {
    private string $channelName;
    private array $receivedPackets;
    private bool $async;

    public function __construct(string $channelName, array $receivedPackets, bool $async = false) {
        $this->channelName = $channelName;
        $this->receivedPackets = $receivedPackets;
        $this->async = $async;
    }

    public function getChannelName(): string {
        return $this->channelName;
    }

    public function getReceivedPackets(): array {
        return $this->receivedPackets;
    }

    public function isAsync(): bool {
        return $this->async;
    }
}

