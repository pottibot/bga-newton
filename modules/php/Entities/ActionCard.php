<?php

namespace Newton\Entities;

use Newton\Entities\ABS\Entity;

class ActionCard extends Entity {

    protected $table = 'action_card';
    protected $primary = 'action_card_id';

    protected static $attributes = [
        'id' => 'action_card_id',
        'color' => 'action_card_color',
        'action' => 'action_card_action',
        'location' => 'action_card_location',
        'position' => 'action_card_position',
        'state' => 'action_card_state',
        'data' => 'action_card_data',
    ];
}