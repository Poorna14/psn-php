<?php

namespace Tustin\PlayStation\Enum;

use MyCLabs\Enum\Enum;

class MessageType extends Enum
{
    private const text = 1;
    private const image = 3;
    private const video = 210;
    private const audio = 1011;
    private const sticker = 1013;
    private const leftGroup = 2002;
    private const changedGroupImage = 2004;
    private const startedVoiceChat = 2020;

    // @TODO: Need to map out all of these events.
    private const unknown = -1;
}
