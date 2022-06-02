create database sqq_joins;

use sql_joins;

CREATE TABLE orders(
order_id INT PRIMARY KEY,
customer_id INT NOT NULL,
order_date DATE NOT NULL
);

CREATE TABLE customers(
customer_id INT PRIMARY KEY AUTO_INCREMENT,
customer_name VARCHAR(200) NOT NULL,
contact_name VARCHAR(255) NOT NULL,
country VARCHAR(255) NOT NULL
);


-- inner join
-- selects metaching records from both tables
-- syntax

SELECT column_name(s)
FROM table1
INNER JOIN table2
ON table1.column_name = table2.column_name;

-- left join
-- selects all records from the left table
-- and  matching records from the right table
SELECT column_name(s)
FROM table1 
LEFT JOIN table2 
ON table1.column_name = table2.column_name;

-- right join
-- selects all records from the right table and matching records from the left table
SELECT column_name(s)
FROM table1 
RIGHT JOIN table2 
ON table1.column_name = table2.column_name;

-- FULL OUTER JOIN  || FULL JOIN
-- RETURNS MATCHING RECORDS IN BOTH TABLES
SELECT column_name(s)
FROM table1 
FULL OUTER JOIN table2 
ON table1.column_name = table2.column_name
WHERE condition;
