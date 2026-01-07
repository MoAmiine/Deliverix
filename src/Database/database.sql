-- Active: 1764776011492@@127.0.0.1@3306@deliverix
CREATE DATABASE Deliverix;

CREATE TABLE Utilisateurs(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('Administrateur', 'Client', 'Livreur')
);

CREATE TABLE Offres(
    id INT PRIMARY KEY AUTO_INCREMENT,
    description VARCHAR(150),
    duree_estimee DATETIME,
    prix FLOAT,
    commande int ,
    Foreign Key (commande) REFERENCES Commandes(id),
    Livreur VARCHAR(100)
);

CREATE TABLE Commandes(
    id INT PRIMARY KEY AUTO_INCREMENT,
    description VARCHAR(150),
    etat ENUM('Créée','En attente doffres','En cours de traitement','Expédiée','Terminée','Annulée'),
    date_creation DATE
);

CREATE TABLE Notifications(
    id INT PRIMARY KEY AUTO_INCREMENT,
    contenu VARCHAR(100),
    date_notification DATETIME,
    utilisateur int ,
    Foreign Key (utilisateur) REFERENCES Utilisateurs(id)
);

INSERT INTO Utilisateurs (nom, prenom, email, password, role) 
VALUES('Teljaoui', 'Mohamed Amine', 'amine@gmail.com', 'amine1234', 'Administrateur');