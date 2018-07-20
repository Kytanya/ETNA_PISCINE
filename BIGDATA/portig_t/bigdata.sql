CREATE DATABASE	IF NOT EXISTS `bigdata`;

CREATE TABLE `author` (
  `tweet_author_id` bigint NOT NULL,
  `tweet_author_name` varchar(255),
  `tweet_author_screen_name` varchar(255),
  `tweet_author_location` varchar(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `tweet` (
  `tweet_id` bigint NOT NULL,
  `tweet_author_id` bigint NOT NULL,
  `tweet_created_at` TIMESTAMP,
  `tweet_lang` varchar(32),
  `tweet_place_country` varchar(255),
  `tweet_place_full_name` varchar(255),
  `tweet_text` varchar(300)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
