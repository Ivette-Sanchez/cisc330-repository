-- create cake shop database
CREATE DATABASE `cakeshop`;

-- create cake table
CREATE TABLE `cake`
(
    `id`     int(11) NOT NULL AUTO_INCREMENT,
    `name`   varchar(80) NOT NULL,
    `price`	 int(11) NOT NULL,
    `flavor` varchar(80) NOT NULL,
    primary key (`id`)
);

-- ALTER TABLE cake ADD rating varchar(80) NOT NULL;

-- seed some test data
insert into cake (name, price, flavor)
values ('Chocolate Cake', 25, 'Milk Chocolate');
insert into cake (name, price, flavor)
values ('Ice Cream Cake', 35, 'Cookies and Cream');
insert into cake (name, price, flavor)
values ('Vanilla Cake', 20, 'Funfetti');
insert into cake (name, price, flavor)
values ('Tres Leches Cake', 60, 'Caramel');
