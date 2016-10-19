<?php

namespace ClashOfClans\Api\Player;

use ClashOfClans\Api\AbstractResource;

class Player extends AbstractResource
{
    protected $casts = [
        'clan' => Clan::class
    ];
}
