CREATE DATABASE `postDB`;

CREATE TABLE `post` 
(
    `id`     int(11) NOT NULL AUTO_INCREMENT,
    `name`   varchar(80) NOT NULL,
    `firstPost`   varchar(80) NOT NULL,
    `email`	 text NOT NULL, 
    PRIMARY KEY (`id`)
);

INSERT INTO post (name, firstPost, email)
VALUES ('Ivette Sanchez', 'I go to Fordham University', 'isanchezp@fordham.edu');

INSERT INTO post (name, firstPost, email)
VALUES ('Geaorges Mendez', 'I like dogs', 'George@gmail.com');

INSERT INTO post (name, firstPost, email)
VALUES ('Gigi Melendez', 'I work at a hospital', 'Giselle@gmail.com');
