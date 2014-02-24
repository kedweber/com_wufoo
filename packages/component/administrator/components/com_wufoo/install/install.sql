-- ----------------------------
--  Table structure for `#__wufoo_forms`
-- ----------------------------
DROP TABLE IF EXISTS `#__wufoo_forms`;
CREATE TABLE `#__wufoo_forms` (
  `wufoo_form_id` int(11) NOT NULL AUTO_INCREMENT,
  `uuid` char(36) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `show_titles` tinyint(1) NOT NULL DEFAULT '1',
  `message_success` text,
  `message_error` text,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` bigint(20) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` bigint(20) NOT NULL DEFAULT '0',
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`wufoo_form_id`),
  UNIQUE KEY `uuid` (`uuid`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
