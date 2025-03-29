CREATE DATABASE assignment2;

USE assignment2;

CREATE table loggedInUsers(
    userID int NOT NULL auto_increment,
    fName varchar(50),
    lName varchar(50),
    fColour varchar(100),
    fAnimal varchar(100),
    username varchar(100),
    password varchar(150),
    PRIMARY KEY(userID)
);

CREATE table friends(
    ID int NOT NULL auto_increment,
    fName varchar(50),
    lName varchar(50),
    fColour varchar(100),
    fAnimal varchar(100),
    username varchar(100),
    password varchar(150),
    PRIMARY KEY(ID)
);

INSERT INTO friends(fName, lName, fColour, fAnimal) 
VALUES
('Matthew', 'Pattel', 'Blue', 'Cat'),
('Aiden', 'Ross', 'Orange', 'Dog'),
('Emma', 'Endstars', 'Light Blue', 'Rat'),
('Allie', 'Hog', 'Pink', 'Hedghog'),
('Walter', 'Suliven', 'Dark Red', 'Bird');