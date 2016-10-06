<?php

namespace ClashOfClans\Api\Clan;

use ClashOfClans\Api\AbstractResource;

/**
 * @method string name()
 * @method string tag()
 * @method Badge badgeUrls()
 * @method int clanLevel()
 * @method int attacks()
 * @method int stars()
 * @method float destructionPercentage()
 * @method int expEarned()
 */
class WarClan extends AbstractResource
{
    protected $casts = [
      'badgeUrls' => Badge::class,
    ];
}
