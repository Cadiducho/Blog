CREATE TABLE `posts` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`title`  TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`content` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`date`  INT(11) NOT NULL,
	`author`  TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='utf8_general_ci'