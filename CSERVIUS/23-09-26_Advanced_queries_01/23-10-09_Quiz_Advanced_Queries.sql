/*
   Quiz_Advanced_Queries
   Pour répondre aux questions ci-dessous, importez la base de données "moviz" fournie par le professeur.
*/

-------------
-- Question 1
-------------

-- Quelle est la commande qui permet de récupérer uniquement le film Skyfall ?

-- a)
SELECT * FROM film WHERE nom LIKE "Skyfall";
-- b)
SELECT * FROM film WHERE id = 1;
-- c)
SELECT * FROM film ORDER BY nom = "Skyfall";

<Votre réponse ici>
-- a)
SELECT * FROM film WHERE nom LIKE "Skyfall";



-------------
-- Question 2
-------------

-- Quels sont les films dont le budget est supérieur ou égal à 100 000 000 $ ?

-- a) Titanic et Skyfall
-- b) Titanic, Skyfall et La La Land
-- c) Titanic uniquement
   
<Votre réponse ici>
-- a) Titanic et Skyfall

<Votre requête ici>
SELECT * FROM film WHERE budget >= 100000000;




-------------
-- Question 3
-------------

-- Quels sont les films dont le synopsis contient le mot “histoire” ?

-- a) Skyfall uniquement
-- b) Skyfall et La La Land
-- c) Titanic et La La Land

<Votre réponse ici>
-- c) Titanic et La La Land


<Votre requête ici>
SELECT * FROM film WHERE synopsis LIKE "%histoire%";

-------------
-- Question 4
-------------

-- Combien y-a-t-il de films ?

-- a) 1
-- b) 2
-- c) 3

<Votre réponse ici>
-- c) 3

<Votre requête ici>
SELECT MAX(id) FROM film; -- ne fonctionne pas forcément

--correction
SELECT COUNT(*) FROM film; 



-------------
-- Question 5
-------------

-- Quels sont les mots clés permettant d’effectuer des opérations arithmétiques sur des requêtes SQL ?

-- a) SUM, AVG, MAX, MIN
-- b) SOMME, MOYENNE, MAXIMUM, MINIMUM
-- c) SUM, AVE, MAXI, MINI

<Votre réponse ici>
-- a) SUM, AVG, MAX, MIN


-------------
-- Question 6
-------------

-- Combien de films ont une note inférieure à 4 ?

-- a) 1
-- b) 2
-- c) 3

<Votre réponse ici>
-- a) 1

<Votre requête ici>
SELECT COUNT(*) FROM film WHERE note_id < 4;

-- correction
SELECT COUNT(*) FROM film JOIN note ON note.id = note_id WHERE note.id < 4 ;


-------------
-- Question 7
-------------

-- Qu’est-ce qu’une table de liaison ?

-- a) C’est une table qui permet de lier deux tables ayant une relation un à plusieurs entre elles
-- b) C’est une table qui permet de relier deux tables ayant une relation plusieurs à plusieurs entre elles
-- c) C’est une table qui regroupe toutes les vues présentes dans une BDD

<Votre réponse ici>
-- b) C’est une table qui permet de relier deux tables ayant une relation plusieurs à plusieurs entre elles


-------------
-- Question 8
-------------

-- Sélectionnez les bonnes associations de films avec leurs pays de sortie.

-- a) Skyfall en France, Angleterre et USA
-- b) Titanic en France, USA et Allemagne
-- c) La La Land aux USA uniquement

<Votre réponse ici>
-- b) Titanic en France, USA et Allemagne


<Votre requête ici>
select * from film
JOIN film_pays_de_sortie ON film_pays_de_sortie.film_id = film.id
JOIN pays_de_sortie p ON p.id=pays_de_sortie_id;

-- correction mais mas solution fonctionne aussi
-- on peut partir d'une autre table pour faire les jointures
SELECT
   film.nom AS "Nom du film",
   ps.nom AS "Nom du pays"
FROM pays_de_sortie ps
JOIN film_de_sortie fps
   ON ps.id = fps.pays_de_sortie_id
JOIN film
   ON fps.film_id = film.id;