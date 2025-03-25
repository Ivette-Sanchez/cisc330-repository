-- 5. Write statements to: 
-- 5a. create homework8 shop database
CREATE DATABASE `notesdatabase`;

-- 5b. create a notes table
CREATE TABLE `notes`
(
    `id`     int(11) NOT NULL AUTO_INCREMENT,
    `title`   varchar(80) NOT NULL,
    `description`	 text NOT NULL, 
    PRIMARY KEY (`id`)
);

--6. Write statements to 
--6a. insert some  data
INSERT INTO notes (title, description)
VALUES ('Theory of Computation', 'Class requirement for Computer Science Majors');

INSERT INTO notes (title, description)
VALUES ('Internet and Web Programming', 'Computer Science elective level 3000+ required');

INSERT INTO notes (title, description)
VALUES ('Java Programming', 'Computer Science elective level 3000+ required');

INSERT INTO notes (title, description)
VALUES ('Introduction to Archaeology', 'Class requirement for Anthropology Minor');

--6b. update some data 
UPDATE notes SET title = 'Theory of Computation Level 4090' 
WHERE id = 1;

UPDATE notes SET title = 'Internet and Web Programming Level 3300' 
WHERE id = 2;

UPDATE notes SET title = 'Java Programming Level 3400' 
WHERE id = 3;

UPDATE notes SET title = 'Introduction to Archaeology Level 1300' 
WHERE id = 4;

--6c. delete some data
DELETE FROM notes 
WHERE title = 'Introduction to Archaeology Level 1300';

--7. Write queries to 
-- 7a. select all from students order by name, order by name descending(last to first)
SELECT * FROM notes 
ORDER BY title desc;

--7b. select the second note in the table only, assume that you don’t know the ID number of it 
SELECT * FROM notes 
LIMIT 1 OFFSET 1;

--7c. select all notes that have descriptions which contain vowels 
-- select all from notes where title contains aeiou--> will check each letter one by one 
SELECT * FROM notes 
WHERE title LIKE '%a%' 
    OR title LIKE '%e%' 
    OR title LIKE '%i%' 
    OR title LIKE '%o%' 
    OR title LIKE '%u%';
