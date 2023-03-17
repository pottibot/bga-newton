
-- ------
-- BGA framework: © Gregory Isabelli <gisabelli@boardgamearena.com> & Emmanuel Colin <ecolin@boardgamearena.com>
-- pasboilerplate implementation : © <Pietro Luigi Porcedda> <pietro.l.porcedda@gmail.com>
-- 
-- This code has been produced on the BGA studio platform for use on http://boardgamearena.com.
-- See http://en.boardgamearena.com/#!doc/Studio for more information.
-- -----

ALTER TABLE `player`
ADD `player_turn_position` TINYINT UNSIGNED,
ADD `player_coins` TINYINT UNSIGNED NOT NULL DEFAULT 0,
ADD `player_potion` TINYINT UNSIGNED NOT NULL DEFAULT 0,
ADD `player_first` BIT NOT NULL DEFAULT 0;

-- // !! DB DESIGN REALIZATION: DATA THAT IS STATIC AND ISN'T USEFUL FOR OBJECT DISCRIMINATION (es. IT'S PROPERTIES. "GET ALL THAT ARE RED"), DOESN'T NEED TO BE STORED;

-- // CARDS // --

CREATE TABLE IF NOT EXISTS `action_card` (
  `action_card_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `action_card_color` varchar(16) NOT NULL,
  `action_card_action` varchar(16) NOT NULL,
  `action_card_location` varchar(16) NOT NULL,
  `action_card_position` varchar(16) NOT NULL,
  `action_card_state` varchar(16) NOT NULL,
  `action_card_data` varchar(256) NOT NULL,
  PRIMARY KEY (`action_card_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `master_card` (
`master_card_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`master_card_name` varchar(16) NOT NULL,
`master_card_location` varchar(16) NOT NULL,
`master_card_position` varchar(16) NOT NULL,
`master_card_state` varchar(16) NOT NULL,
`master_card_data` varchar(256) NOT NULL,
PRIMARY KEY (`master_card_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-- // MEEPLES / TRACKERS // --

CREATE TABLE IF NOT EXISTS `scientist` (
`scientist_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`scientist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `student` (
`student_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `work_tracker` (
`work_tracker_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`work_tracker_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `travel_cube` (
`travel_cube_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`travel_cube_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE TABLE IF NOT EXISTS `bookshelf_tile` (
`travel_cube_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
PRIMARY KEY (`travel_cube_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

-- // TILES // --