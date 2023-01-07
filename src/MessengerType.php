<?php

abstract class MessengerType {
  const REDIS = [3000, "https://redis.io"];
  const NATS = [2000, "nats://"];
  const SOCKET = [1000, "unknown"];

  public static function getTimeoutConnection(string $type): int {
    return self::${$type}[0];
  }

  public static function getHostUrl(string $type): string {
    return self::${$type}[1];
  }
}
