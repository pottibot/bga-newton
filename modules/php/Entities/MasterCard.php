<?php

namespace Newton\Entities;

use Newton\Entities\ABS\Entity;

class MasterCard extends Entity {

    protected $table = 'master_card';
    protected $primary = 'master_card_id';

    protected static $attributes = [

        'id' => 'master_card_id',
        'name' => 'master_card_name',
        'data' => 'master_card_data',
        'points' => 'master_card_points',
        'tooltip' => 'master_card_tooltip'
    ];
}