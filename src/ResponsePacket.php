<?php

interface ResponsePacket {
    /**
     * @deprecated Method use if handler from request packet will set responsePacket$setDone(true);
     * @param packet
     */
    public function accept(Packet $packet);
}

