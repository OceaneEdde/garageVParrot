CREATE TABLE contacts (
  id integer PRIMARY KEY,
  nom VARCHAR(50),
  prenom VARCHAR(50),
  email VARCHAR(100),
  telephone VARCHAR(15),
  commentaire TEXT
);

CREATE TABLE employes (
email VARCHAR(100) PRIMARY KEY,
  mot_de_passe VARCHAR(255),
  administrateur BOOLEAN
);

CREATE TABLE cars (
  id integer PRIMARY KEY,
  marque VARCHAR(50),
  modele VARCHAR(50),
  annee INT,
  prix VARCHAR(50)
);

CREATE TABLE opinions (
  id integer PRIMARY KEY,
   nom VARCHAR(50),
  commentaire TEXT,
  note INT
);

CREATE TABLE schedules (
  id integer PRIMARY KEY,
  jour VARCHAR(10),
  ouverture_AM TIME,
  fermeture_AM TIME,
  ouverture_PM TIME,
  fermeture_PM TIME
);

CREATE TABLE services (
  id integer PRIMARY KEY,
  nom VARCHAR(100),
  descriptions TEXT(100)
);

CREATE TABLE images (
    id INTEGER PRIMARY KEY,
    fichier VARCHAR(255),
    cars_id INTEGER,
    FOREIGN KEY (cars_id) REFERENCES cars(id)
);

CREATE TABLE caracteristiques (
    id INTEGER PRIMARY KEY,
    caracteristiques VARCHAR(100),
    cars_id INTEGER,
    FOREIGN KEY (cars_id) REFERENCES cars(id)
);