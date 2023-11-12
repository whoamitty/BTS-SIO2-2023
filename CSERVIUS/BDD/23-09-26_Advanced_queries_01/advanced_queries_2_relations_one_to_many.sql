---------------------------------------
-- Relation 1 à plusieurs (one-to-many)
---------------------------------------

--  User1   - Langue 1
--  User2   /
--  UserX   - Langue 2


-- Exercice 1
-- Ressortir toutes les langues utilisées par les 5 premiers utilisateurs

SELECT * 
FROM utilisateur
JOIN langue
ON utilisateur.langue_id = langue.id
LIMIT 5;


-- Exercice 2
-- Tous les utilisateurs ayant configuré Foodly en anglais

SELECT * 
FROM utilisateur
JOIN langue
ON utilisateur.langue_id = langue.id
WHERE langue.nom = "anglais";
-- WHERE langue_id = 2;
-- WHERE langue.id = 2;


-- Exercice 3
-- Liste des utilisateurs qui utilisent Gmail et qui parlent français
-- Soluce 1
SELECT * FROM utilisateur
WHERE email LIKE "%@gmail.com"
AND langue_id="1";

-- Soluce 2
SELECT * FROM utilisateur
JOIN langue ON langue.id=langue_id      -- utilisateur.langue_id = langue_id l'un ou l'autre marche
WHERE langue.nom="francais"  AND utilisateur.email LIKE "%@gmail.com";


-- Exercice 4
-- Formater les colonnes et les résultats de l'exercice précédent comme dans le tableau ci-dessous. Le résultat doit être trié par id utilisateur décroissant.
SELECT * FROM utilisateur
WHERE email LIKE "%@gmail.com"
AND langue_id="1"

ORDER BY id DESC; --ligne ajoutée

-- +----+-------------+---------+------------------+-----------+
-- | id | NOM         | prenom  | email            | LANGUE    |
-- +----+-------------+---------+------------------+-----------+
-- |  6 | DE VAUCLERC | lisa    | lisadv@gmail.com | français  |
-- |  1 | DURANTAY    | quentin | qentin@gmail.com | français  |
-- +----+-------------+---------+------------------+-----------+


-- Exercice 5 : Simplifier la requête précédente en créant et utilisant une vue.
CREATE VIEW `french_user_gmail_vw` AS
(SELECT * FROM `utilisateur`
WHERE email LIKE "%@gmail.com"
AND langue_id="1"

ORDER BY id DESC);


SELECT * FROM `french_user_gmail_vw` -- requête simplifié

-- Exercice 6 : Donner tous les noms de famille des utilisateurs ayant sélectionné le français
SELECT utilisateur.nom, langue_id
FROM `utilisateur`
JOIN langue ON langue_id=langue.id;


