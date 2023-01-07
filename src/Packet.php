<?php

abstract class Packet {
  private $action;

  public function getAction(): callable {
    return $this->action;
  }

  public function setAction(callable $action) {
    $this->action = $action;
  }

  public function apply(PacketAction $packet) {
    ($this->action)($packet);
  }
}