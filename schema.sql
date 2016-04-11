CREATE TABLE `acos` (
	`id` int NOT NULL AUTO_INCREMENT,
	`parent_id` int NOT NULL,
	`model` varchar(255) NOT NULL,
	`foreign_key` int NOT NULL,
	`alias` varchar(255) NOT NULL,
	`lft` int NOT NULL ,
	`rght` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `aros` (
	`id` int NOT NULL AUTO_INCREMENT,
	`parent_id` int NOT NULL,
	`model` varchar(255) NOT NULL ,
	`foreign_key` varchar(255) NOT NULL ,
	`alias` varchar(255) NOT NULL ,
	`lft` int NOT NULL ,
	`rght` int NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `aros_acos` (
	`id` int NOT NULL AUTO_INCREMENT,
	`aro_id` int NOT NULL,
	`aco_id` int NOT NULL ,
	`_create` varchar(2) NOT NULL ,
	`_read` varchar(2) NOT NULL ,
	`_update` varchar(2) NOT NULL ,
	`_delete` varchar(2) NOT NULL ,
	PRIMARY KEY (`id`)
);

CREATE TABLE `groups` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(100) NOT NULL ,
	`created` DATETIME NOT NULL ,
	`modified` DATETIME NOT NULL ,
	PRIMARY KEY (`id`)
);

CREATE TABLE `users` (
	`id` int NOT NULL AUTO_INCREMENT,
	`group_id` int NOT NULL,
	`first_name` varchar(100) NOT NULL ,
	`last_name` varchar(100) NOT NULL ,
	`username` varchar(100) NOT NULL ,
	`email` varchar(100) NOT NULL ,
	`password` varchar(100) NOT NULL ,
	`brief_info` TEXT NOT NULL ,
	`referal` varchar(100) NOT NULL ,
	`company_name` varchar(100) NOT NULL ,
	`company_web` varchar(100) NOT NULL ,
	`position` varchar(100) NOT NULL ,
	`industry` varchar(100) NOT NULL ,
	`city_town` varchar(100) NOT NULL ,
	`mobile` varchar(15) NOT NULL ,
	`linkedin_link` varchar(255) NOT NULL ,
	`created` DATETIME NOT NULL ,
	`updated` DATETIME NOT NULL ,
	`image` varchar(100) NOT NULL ,
	`reset_token` varchar(255) NOT NULL ,
	`active` bool NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`)
);

CREATE TABLE `events` (
	`id` int NOT NULL AUTO_INCREMENT,
	`event_name` varchar(100) NOT NULL,
	`event_desc` TEXT NOT NULL ,
	`cat_id` int NOT NULL,
	`start_date_time` DATETIME NOT NULL ,
	`end_date_time` DATETIME NOT NULL ,
	`event_timing` varchar(100) NOT NULL ,
	`long_desc` mediumint NOT NULL ,
	`event_banner` varchar(255) NOT NULL ,
	`event_location` varchar(255) NOT NULL ,
	`created` DATETIME NOT NULL ,
	`updated` DATETIME NOT NULL ,
	PRIMARY KEY (`id`)
);

CREATE TABLE `categories` (
	`id` int NOT NULL AUTO_INCREMENT,
	`cat_name` varchar(100) NOT NULL,
	`created` DATETIME NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `schedules` (
	`id` int NOT NULL AUTO_INCREMENT,
	`event_id` int NOT NULL,
	`sch_name` varchar(100) NOT NULL ,
	`sch_description` TEXT NOT NULL ,
	`sch_date` DATETIME NOT NULL ,
	`sch_timing` varchar(100) NOT NULL ,
	PRIMARY KEY (`id`)
);

CREATE TABLE `schedule_tasks` (
	`id` int NOT NULL AUTO_INCREMENT,
	`schedule_id` int NOT NULL,
	`task_description` longtext NOT NULL ,
	PRIMARY KEY (`id`)
);

CREATE TABLE `event_speakers` (
	`id` int NOT NULL AUTO_INCREMENT,
	`user_id` int NOT NULL,
	`full_description` TEXT NOT NULL ,
	`event_id` int NOT NULL ,
	PRIMARY KEY (`id`)
);

CREATE TABLE `event_facilitates` (
	`id` int NOT NULL AUTO_INCREMENT,
	`fc_name` varchar(100) NOT NULL ,
	`short_desc` varchar(255) NOT NULL ,
	`long_desc` TEXT NOT NULL ,
	`event_id` int NOT NULL ,
	`fc_image` varchar(255) NOT NULL ,
	PRIMARY KEY (`id`)
);

CREATE TABLE `tickets` (
	`id` int NOT NULL AUTO_INCREMENT,
	`event_id` int NOT NULL,
	`member_price` DECIMAL(10,3) NOT NULL ,
	`guest_price` DECIMAL(10,3) NOT NULL ,
	PRIMARY KEY (`id`)
);

CREATE TABLE `event_sponsers` (
	`id` int NOT NULL AUTO_INCREMENT,
	`event_id` int NOT NULL,
	`name` varchar(100) NOT NULL ,
	`description` TEXT NOT NULL ,
	`image` varchar(255) NOT NULL ,
	PRIMARY KEY (`id`)
);

CREATE TABLE `users_events` (
	`id` int NOT NULL AUTO_INCREMENT,
	`user_id` int NOT NULL,
	`event_id` int NOT NULL,
	`created` DATETIME NOT NULL ,
	`updated` DATETIME NOT NULL ,
	PRIMARY KEY (`id`)
);

CREATE TABLE `pages` (
	`id` bigint NOT NULL AUTO_INCREMENT,
	`title` varchar(100) NOT NULL ,
	`identifier` varchar(100) NOT NULL ,
	`content` longtext NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `email_templates` (
	`id` bigint NOT NULL AUTO_INCREMENT,
	`subject` varchar(255) NOT NULL ,
	`content` TEXT NOT NULL ,
	PRIMARY KEY (`id`)
);

CREATE TABLE `transaction` (
	`id` int NOT NULL AUTO_INCREMENT,
	`user_id` int NOT NULL,
	`payment_status` varchar(40) NOT NULL ,
	`payment_by` varchar(50) NOT NULL ,
	`payment_response` TEXT NOT NULL,
	`payment_amount` DECIMAL(10,3) NOT NULL ,
	`payment_date` DATETIME NOT NULL ,
	PRIMARY KEY (`id`)
);

CREATE TABLE `membership` (
	`id` int NOT NULL AUTO_INCREMENT,
	`name` varchar(100) NOT NULL ,
	`description` TEXT NOT NULL ,
	`amount` DECIMAL(10,3) NOT NULL ,
	`pay_type` varchar(30) NOT NULL ,
	PRIMARY KEY (`id`)
);

CREATE TABLE `paid_members` (
	`id` int NOT NULL AUTO_INCREMENT,
	`user_id` int NOT NULL,
	`membership_id` int NOT NULL,
	PRIMARY KEY (`id`)
);


