DROP DATABASE IF EXISTS mySQL;

CREATE DATABASE mySQL;
use mySQL;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `userid` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(64) NOT NULL,
  `super` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `userdata` (
  `tag_id` int NOT NULL PRIMARY KEY,
  `user_name` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `email` varchar(64) NOT NULL,
  `discord_id` varchar(20)  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `lendingstatus` (
  `log_no` int NOT NULL PRIMARY KEY,
  `tag_id` varchar(20) NOT NULL,
  `is_rent` TINYINT(1) NOT NULL,
  `remaining` INT(2) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- テストデータを挿入
INSERT INTO users (`id`, `userid`, `password`, `email`) VALUES
(1, 'admin', 'pass', 'root@example.jp'),
(2, 'user', 'pass', 'ERUTONE@example.jp');


INSERT INTO userdata (`tag_id`, `user_name`, `user_id`, `email`, `discord_id`) VALUES
(1, 'hatomato', '1230400', 'hatomato@example.com', 'hatomato_discord'),
(2, 'KURAkas', '1230300', 'KURAkas.com', 'URAkas_discord');


INSERT INTO lendingstatus (`log_no`, `tag_id`, `is_rent`, `remaining`, `time`) VALUES
(1, '1230400', 1, 5, '2024-01-19'),
(2, '1230300', 0, 8, '2024-01-20');
