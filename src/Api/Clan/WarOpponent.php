<?php

namespace ClashOfClans\Api\Clan;

use ClashOfClans\Api\AbstractResource;

/**
 * @method string name()
 * @method string tag()
 * @method int clanLevel()
 * @method int stars()
 * @method float destructionPercentage()
 */
class WarOpponent extends AbstractResource
{
    protected $casts = [
      'badgeUrls' => Badge::class,
    ];
}
