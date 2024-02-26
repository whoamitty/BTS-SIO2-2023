/* Initialiser le tableau */


/* Pour suprimer */
drop TABLE contact;

/* Puis corriger */
/* Ajouter une clé etrangère pour gérer l'atribution des formateurs à partir d'un ID*/
CREATE TABLE contact (
  `id` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `lastName` VARCHAR(100) NOT NULL, -- Auto incrementing IDs
  `firstName` VARCHAR(100), -- String column of up to 100 characters
  `phone` VARCHAR(100),
  `mail` VARCHAR(100),
   PRIMARY KEY (id)
);

/* Faire le tableau de liaison */



