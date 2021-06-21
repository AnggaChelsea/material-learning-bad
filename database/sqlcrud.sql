-- @block
SELECT * FROM students;

-- @block
--CREATE
INSERT INTO students(name,hoby) VALUES('adik','putsal');


-- @block
--READ
SELECT name FROM students;


-- @block
--UPDATE
UPDATE students SET name = 'lampard' WHERE id = 3;

-- @block
--DELETE
DELETE FROM students WHERE name = 'abdul';