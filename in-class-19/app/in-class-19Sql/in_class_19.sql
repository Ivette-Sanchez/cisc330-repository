CREATE DATABASE `postsDB`;

CREATE TABLE `posts` 
(
    `id`     int(11) NOT NULL AUTO_INCREMENT,
    `title`   varchar(80) NOT NULL,
    `description`	 text NOT NULL, 
    PRIMARY KEY (`id`)
);

INSERT INTO posts (title, description)
VALUES ('First Post', 'This is the first post.');

INSERT INTO posts (title, description)
VALUES ('Second Post', 'This is the second post.');


