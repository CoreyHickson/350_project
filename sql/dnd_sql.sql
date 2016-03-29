# The MySQL code to create our database

# DROP TABLE characters;
# DROP TABLE classes;
# DROP TABLE class_features;
# DROP TABLE backgrounds;
# DROP TABLE races;
# DROP DATABASE dnd;

CREATE DATABASE dnd;
USE dnd;

CREATE TABLE races
(
	race 		VARCHAR(20) PRIMARY KEY,
	size		ENUM('small','medium','large') NOT NULL,
	base_speed	SMALLINT NOT NULL
);

CREATE TABLE backgrounds
(
	background VARCHAR(20),
	proficiency ENUM('Acrobatics', 'Animal Handling', 'Arcana', 'Athletics',
					 'Deception', 'History', 'Insight', 'Intimidation',
					 'Investigation', 'Medicine', 'Nature', 'Perception',
					 'Performance', 'Persuasion', 'Religion', 'Sleight of Hand',
					 'Stealth', 'Survival'),
	PRIMARY KEY (background, proficiency)
);

CREATE TABLE class_features
(
	feature 	VARCHAR(20) PRIMARY KEY,
	class 		VARCHAR(20) NOT NULL,
	description TEXT NOT NULL
);

CREATE TABLE classes
(
	class 				VARCHAR(20) PRIMARY KEY REFERENCES class_features(class),
	hit_die 			ENUM('d6','d8','d10','d12'),
	primary_ability		ENUM('Strength', 'Dexterity', 'Constitution',
							 'Intelligence', 'Wisdom', 'Charisma'),
	spellcasting		BOOLEAN
);

CREATE TABLE characters
(
	id 			SMALLINT PRIMARY KEY AUTO_INCREMENT,
	name		VARCHAR(30) NOT NULL,
	class		VARCHAR(20) REFERENCES classes(class),
	charlevel	SMALLINT NOT NULL,
	background	VARCHAR(20) REFERENCES backgrounds(background),
	race		VARCHAR(20) REFERENCES races(race)
);