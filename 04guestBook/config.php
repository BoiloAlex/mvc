<?php
define("DB_USER", "root");
define("DB_NAME", "project");
define("DB_HOST", "localhost");
define("DB_PASS", "");




// CREATE TABLE
//     `guestbook` (
//         `id` INT(11) NOT NULL AUTO_INCREMENT,
//         `name` CHAR(60) NOT NULL,
//         `content` TEXT(4000) NOT NULL,
//         `time` DATETIME NOT NULL,
//         PRIMARY KEY(`id`)
//     )

// $stmt = $dbh->prepare("INSERT INTO guestbook (name, content, time) VALUES (:name, :content, :time )");
// $stmt->bindParam(':name', $name);
// $stmt->bindParam(':content', $content);
// $stmt->bindParam(':time', $time);
