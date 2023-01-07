<?php

abstract class RequestPacket extends Packet {
  private int $callbackId;
  private string $replyChannel;
  private string $errorMessage;

  public function __construct() {
    $this->callbackId = mt_rand(PHP_INT_MIN, PHP_INT_MAX);
    $this->errorMessage = "";
  }

  public function getErrorMessage(): string {
    return $this->errorMessage;
  }

  public function getCallbackId(): int {
    return $this->callbackId;
  }

  public function setCallbackId(int $callbackId) {
    $this->callbackId = $callbackId;
  }

  public function setErrorMessage(string $errorMessage) {
    $this->errorMessage = $errorMessage;
  }

  public function getReplyChannel(): string {
    return $this->replyChannel;
  }

  public function setReplyChannel(string $replyChannel) {
    $this->replyChannel = $replyChannel;
  }
}