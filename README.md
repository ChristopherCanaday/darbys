# darbys
Advanced Web Dev Competition


darbys.gungoos.com is link to the website. Github doesn't allow PHP files.


This is the SQL that was used on our server to start it up.

/* dog breed table */
CREATE TABLE breed(id INT AUTO_INCREMENT PRIMARY KEY,
    breed TEXT);
    
INSERT INTO breed(breed) VALUES("shiba_inu");
INSERT INTO breed(breed) VALUES("corgi");
INSERT INTO breed(breed) VALUES("dachshund");
INSERT INTO breed(breed) VALUES("siberian_husky");
INSERT INTO breed(breed) VALUES("beagle");

/* dog name table */
CREATE TABLE name(id INT AUTO_INCREMENT PRIMARY KEY, breed_id INTEGER, name TEXT, age INTEGER, sex TEXT);

/* shiba inu dogs */
INSERT INTO name(breed_id, name, age, sex) VALUES("1", "akira", "8 weeks", "male");
INSERT INTO name(breed_id, name, age, sex) VALUES("1", "kevin", "10 weeks", "male");
INSERT INTO name(breed_id, name, age, sex) VALUES("1", "akiko", "9 weeks", "female");
INSERT INTO name(breed_id, name, age, sex) VALUES("1", "sora", "7 weeks", "female");

/* corgi dogs */
INSERT INTO name(breed_id, name, age, sex) VALUES("2", "toby", "11 weeks", "male");
INSERT INTO name(breed_id, name, age, sex) VALUES("2", "mack", "6 weeks", "male");
INSERT INTO name(breed_id, name, age, sex) VALUES("2", "daisy", "14 weeks", "female");
INSERT INTO name(breed_id, name, age, sex) VALUES("2", "darby", "9 weeks", "female");

/* dachshund dogs */
INSERT INTO name(breed_id, name, age, sex) VALUES("3", "buster", "7 weeks", "male");
INSERT INTO name(breed_id, name, age, sex) VALUES("3", "joey", "8 weeks", "male");
INSERT INTO name(breed_id, name, age, sex) VALUES("3", "lucy", "7 weeks", "female");
INSERT INTO name(breed_id, name, age, sex) VALUES("3", "trudy", "7 weeks", "female");

/* siberian husky dogs */
INSERT INTO name(breed_id, name, age, sex) VALUES("4", "snow", "14 weeks", "male");
INSERT INTO name(breed_id, name, age, sex) VALUES("4", "edger", "9 weeks", "male");
INSERT INTO name(breed_id, name, age, sex) VALUES("4", "willow", "10 weeks", "female");
INSERT INTO name(breed_id, name, age, sex) VALUES("4", "dolly", "6 weeks", "female");

/* beagle dogs */
INSERT INTO name(breed_id, name, age, sex) VALUES("5", "austin", "12 weeks", "male");
INSERT INTO name(breed_id, name, age, sex) VALUES("5", "frank", "7 weeks", "male");
INSERT INTO name(breed_id, name, age, sex) VALUES("5", "twiggy", "8 weeks", "female");
INSERT INTO name(breed_id, name, age, sex) VALUES("5", "mia", "11 weeks", "female");

/* customers table */
/* values are temporary just to test and see if the code works---we will have people type their own info in */
CREATE TABLE customers(id INT AUTO_INCREMENT PRIMARY KEY, first_name TEXT, last_name TEXT, dog_choice TEXT); 

INSERT INTO customers(first_name, last_name, dog_choice) VALUES("christopher", "canaday", "kevin");

/* customer contact table */
CREATE TABLE contact(id INT AUTO_INCREMENT PRIMARY KEY, customer_id INTEGER, email VARCHAR(40), phone_number VARCHAR(20));


INSERT INTO contact(customer_id, email, phone_number) VALUES("2", "clc1716@chestercountyschools.org", "731-608-4118");

/* pairs breed with dog name */
CREATE TABLE breed_name AS 
SELECT breed.breed, name.name 
FROM breed 
JOIN name 
WHERE breed.id = breed_id; 


/* pairs customer with contact  */
CREATE TABLE customer_contact AS 
SELECT customers.first_name,
customers.last_name, 
contact.email, 
contact.phone_number, 
customers.dog_choice
FROM customers 
JOIN contact 
WHERE customers.id = customer_id;


/* pairs breed_name with customer_contact and is the final table */
CREATE TABLE adoption_application AS 
SELECT 
breed_name.breed,
breed_name.name, 
customer_contact.first_name, 
customer_contact.last_name, 
customer_contact.email, 
customer_contact.phone_number, 
customer_contact.dog_choice
FROM breed_name 
JOIN customer_contact
WHERE
breed_name.name = customer_contact.dog_choice; 

