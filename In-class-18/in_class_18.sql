/*6. Make a new database called in_class_17. 
In it create tables called users and userComments. 
Give them columns that you might think they would need and include a foreign key on 
userComments that will reference the primary key of the users table. 
Give the tables some testing data to create multiple users and user comments for some of the users(but not all). 
*/

CREATE DATABASE `in_class_18`;

-- create a users table
CREATE TABLE `users`
(
    `id`     int(11) NOT NULL AUTO_INCREMENT,
    `username`   varchar(80) NOT NULL,
    `email`	 varchar(80) NOT NULL,
    PRIMARY KEY (`id`)
);


-- create a userComments table
CREATE TABLE `userComments`
(
    `id`     int(11) NOT NULL AUTO_INCREMENT,
    `comment`	 text NOT NULL,

    --foreign key
    `userID`  int(11) NOT NULL,
    PRIMARY KEY('id') -- on mamp only works without quotes not sure why bc users table worked without changing
);

INSERT INTO users (username, email)
VALUES ('Ivette Sanchez', 'isanchezperez@fordham.edu');

INSERT INTO users (username, email)
VALUES ('Giselle Melendez', 'randomEmail@gmail.com');

INSERT INTO users (username, email)
VALUES ('Santiago Melendez', 'Email@gmail.com');

INSERT INTO users (username, email)
VALUES ('Ramon Sanchez', 'Differentemail@gmail.com');


INSERT INTO userComments (userID, comment) 
VALUES (1, 'Ivettes comment--> Favorite color is Green');

INSERT INTO userComments (userID, comment) 
VALUES (2, 'Giselles comment--> Favorite color is Pink');

INSERT INTO userComments (userID, comment) 
VALUES (4, 'Ramons comment--> Favorite color is Yellow');



-- a. Write a query to return all users and their comments if they have comments or not. 
SELECT * 
FROM users 
LEFT JOIN userComments ON users.id = userComments.userID; --LEFT JOIN--> will show all from table 1 even with no comments


--b. Write a query to return all users and their comments only if they have comments.
SELECT *
FROM users 
JOIN userComments ON users.id = userComments.userID; --(inner) JOIN -->only grabbing users if they have comments
