<?php

interface PacketAction {
    public function execute(Packet $packet);
}

