<?php

class Channel {
    private string $name;
    private int $latestReceivedPacketTime;
    private int $receivedCount;
    private int $sendCount;

    public function __construct(string $name) {
        $this->name = $name;
        $this->latestReceivedPacketTime = 0;
        $this->sendCount = 0;
        $this->receivedCount = 0;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getReceivedCount(): int {
        return $this->receivedCount;
    }

    public function getSendCount(): int {
        return $this->sendCount;
    }

    public function getLatestReceivedPacketTime(): int {
        return $this->latestReceivedPacketTime;
    }

    public function setLatestReceivedPacketTime(int $latestReceivedPacketTime) {
        $this->latestReceivedPacketTime = $latestReceivedPacketTime;
    }

    public function setReceivedCount(int $receivedCount) {
        $this->receivedCount = $receivedCount;
    }

    public function setSendCount(int $sendCount) {
        $this->sendCount = $sendCount;
    }

    public function incrementReceivedCount() {
        $this->receivedCount++;
    }

    public function incrementSendCount() {
        $this->sendCount++;
    }
}
