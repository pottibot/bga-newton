<?php
/**
 *------
 * BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
 * newton implementation : © <Pietro Luigi Porcedda> <pietro.l.porcedda@gmail.com>
 * 
 * This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
 * See http://en.boardgamearena.com/#!doc/Studio for more information.
 * -----
 *
 * material.inc.php
 *
 * newton game material description
 *
 * Here, you can describe the material of your game with PHP variables.
 *   
 * This file is loaded in your game logic class constructor, ie these variables
 * are available everywhere in your game logic code.
 *
 */

// $this->action_cards = [
//     0 => [
//         'color' => '',/*
//             red
//             green
//             blue
//             yellow
//             reverse (exp)
//         */
// 
//         'action' => '', /* 
//             work
//             technology
//             travel
//             lessons
//             study
//             joker
//         */
// 
// 
//         'location' => '', /*
//             <player_id>_desk
//             <player_id>_hand
//             global_reserve
//         */
// 
//         'position' => '', /* 
//             (desk) column
//         */
// 
//         'state' => '', /*
//             (desk) under / over
//             (global reserve) deck / display
//         */
// 
//         'data' => [
// 
//             'volumes' => [
//                 'green' => 0,
//                 'orange' => 0,
//                 'blue' => 0
//             ],
// 
//             // card activation immediate effect
//             'gain' => [
//                 'coins' => 0,
//                 'points' => 0,
//                 'potions' => 0,
//             ],
// 
//             // gain condition (match case, always volumes)
//             'gain_if' => [
//                 'green_volumes' => 0,
//                 'orange_volumes' => 0,
//                 'blue_volumes' => 0
//             ],
// 
//             // cost of special action
//             'spend' => [
//                 'coins' => 0,
//                 'points' => 0,
//                 'potions' => 0,
//                 'cards' => 0,
//             ],
// 
//             // bonuses of special action
//             'obtain' => [
//                 'coins' => 0,
//                 'points' => 0,
//                 'potions' => 0,
//                 'students' => 0,
//                 'additional_book' => 0, //("... place a second bookshelf tile in the same action. The value of the action must be split.")
//                 'additional_travel_cube' => 0, //("... place more than one Travel cube during this Travel action (you can place a cube in a place you pass through and in the place where you finish your movement).")
//                 'ignore_library_requirements' => 0, //(... ignore the requirements of the book space where you want to play a Study Action.")
//                 'teleport_scientist' => 0, //("... to move your Scientist to any free Village (with a silver or gold border without Bonus tokens)")
//                 'double_bonus_token_effect' => 0, //("Double the effect of the Bonus tokens that you collect performing the Technology action of this card.")
//                 'gain_again' => 0 //("Apply the immediate Special Effect (with a lightening symbol) of an Action card which has already been placed on your desk.")
// 
//             ],
// 
//             //(exp)
// 
//             // 'second_action' => 'action_card_second_action', // second action type (exp)
//             // 'alt_action' => 'action_card_alternative_action', // alternative action type (exp)
// 
//             /* 'special_gain' => [
//                 'coins' => 0,
//                 'points' => 0,
//                 'potions' => 0,
// 
//                 'income_tile' => 0, // owned
//                 'bonus_token' => 0, // owned
//                 'city_bonus' => 0, // visited
//                 
//                 'mater_card' => 0,
// 
//                 'work' => 0,
//                 'technology' => 0,
//                 'travel' => 0,
//                 'lessons' => 0,
//                 'study' => 0,
//                 'joker' => 0,
// 
//                 'card_1' => 0,
//                 'card_2' => 0,
//                 'card_3' => 0,
//                 'card_any' => 0,
//             ],
// 
//             'special_gain_if' => [
//                 'work' => 0,
//                 'technology' => 0,
//                 'travel' => 0,
//                 'lessons' => 0,
//                 'study' => 0,
//                 'joker' => 0,
//             ] */
//         ],
// 
//         'tooltip' => clienttranslate("")
//     ]
// ];

/* $this->master_cards = [

    // MULTI ACTIONS

    1 => [
        'name' => 'Robert Boyle',

        'data' => [

            'action' => [
                'type' => 'study',
                'value' => 4,
                'bonus' => 'multi',
            ],

            'points' => 0,
        ],

        'tooltip' => clienttranslate("Perform a Study Action with a value of 4. With this action you can place more Bookshelf tiles and divide the value of the action (for example, by placing 1 Bookshelf tile on shelf 1, and another on shelf 3; or 4 Bookshelf tiles on shelf 1, etc.). You must meet the requirements in each book space you wish to fill.")
    ],

    3 => [
        'name' => 'Thomas Browne',

        'data' => [

            'action' => [
                'type' => 'lessons',
                'value' => 4,
                'bonus' => 'multi',
            ],

            'points' => 1,
        ],

        'tooltip' => clienttranslate("Perform a Lessons action with a value of 4. With this action you can take more than one action card by splitting the value of the action (for example, by taking a card with a value of 1 and a card with a value of 3, or 4 cards each with a value of 1, etc.).")
    ],

    10 => [
        'name' => 'Galileo Galilei',

        'data' => [

            'action' => [
                'type' => 'lessons',
                'value' => 3,
                'bonus' => 'multi',
            ],
            
            'points' => 3,
        ],

        'tooltip' => clienttranslate("Perform a Travel action with a value of 3. You can place 1 Travel cube on each place you pass through.")
    ],

    12 => [
        'name' => 'Edmond Halley',

        'data' => [

            'action' => [
                'type' => 'technology',
                'value' => 4,
                'bonus' => 'multi',
            ],

            'points' => 2,
        ],

        'tooltip' => clienttranslate("Perform a Technology action with a value of 4. With this action you can move more than 1 Student by splitting the value of the action (for example, by moving 1 Student by 1 space and another by 3 spaces, or by moving 4 Students by 1 space each).")
    ],

    // VOLUMES
    2 => [
        'name' => 'Tycho Brahe',

        'effect' => [
            'volumes' => [
                'blue' => 2
            ],
        ],

        'points' => 5,

        'tooltip' => clienttranslate("Gives you 2 permanent blue Volumes.")
    ],

    15 => [
        'name' => 'Gottfried Leibniz',

        'data' => [

            'volumes' => [
                'orange' => 2
            ],

            'points' => 5,
        ],

        'tooltip' => clienttranslate("Gives you 2 permanent orange Volumes.")
    ],

    16 => [
        'name' => 'Isaac Newton',

        'data' => [
            'volumes' => [
                'green' => 2
            ],

            'points' => 5,
        ],

        'tooltip' => clienttranslate("Gives you 2 permanent green Volumes.")
    ],

    9 => [
        'name' => 'Daniel Fahrenheit',

        'data' => [

            'volumes' => [
                'any' => 1
            ],

            'points' => 6,
        ],

        'tooltip' => clienttranslate("Gives you 1 permanent Volume. You may choose the color of the Volume each time that you use this Master's power.")
    ],

    // GAIN

    4 => [
        'name' => 'Giordano Bruno',

        'data' => [

            'gain' => [
                'coins' => 6
            ],

            'points' => 4,
        ],

        'tooltip' => clienttranslate("Receive 6 coins.")
    ],

    8 => [
        'name' => 'Nicola Cusano',

        'data' => [

            'gain' => [
                'postions' => 3
            ],

            'points' => 4,
        ],

        'tooltip' => clienttranslate("Receive 3 Potion tokens.")
    ],

    11 => [
        'name' => 'William Gilbert',

        'data' => [

            'gain' => [
                'student' => 1,
            ],

            'points' => 7,
        ],

        'tooltip' => clienttranslate("Place 1 Student at the bottom of the Technology track.")
    ],

    // IGNORE REQUIREMENTS

    13 => [
        'name' => 'Nicolaus Copernicus',

        'data' => [

            'action' => [
                'type' => 'study',
                'value' => '3',
                'bonus' => 'ignore_requirements',
            ],

            'points' => 2,
        ],

        'tooltip' => clienttranslate("Perform a Study Action with a value of 3. Ignore the requirements of the book space you decide to fill.")
    ],

    13 => [
        'name' => 'Christiaan Huygens',

        'data' => [

            'action' => [
                'type' => 'work',
                'value' => '3',
                'bonus' => 'ignore_requirements',
            ],

            'points' => 2,
        ],

        'tooltip' => clienttranslate("Perform a Work action with a value of 3. If, by performing this action, you reach an Objective tile at the end of the track, ignore the requirements necessary to activate it.")
    ],

    19 => [
        'name' => 'Evangelista Torricelli',

        'data' => [

            'action' => [
                'type' => 'technology',
                'value' => '3',
                'bonus' => 'ignore_requirements',
            ],

            'points' => 2,
        ],

        'tooltip' => clienttranslate("Perform a Technology action with a value of 3. If, by performing this action, you reach an Objective tile, ignore the requirements necessary to activate it.")
    ],


    // MISC

    22 => [
        'name' => 'Robert Hooke',

        'data' => [

            'points' => 9,
        ],

        'tooltip' => clienttranslate("No effect.")
    ],
]; */