---------------------------------
-- TP1 - Partie 2 - Exercices BDD
---------------------------------

----------------
-- Séquence 1 --
----------------

-- #1 - Sélectionnez toutes les informations de la table utilisateur
SELECT * FROM `utilisateur`

-- #2 - Afficher le nom, le prénom et l'email des utilisateurs
-- ~~~~
SELECT nom,prenom,email FROM `utilisateur`;


-- #3 - Listez tous les noms et les calories associées pour chaque aliment
SELECT nom,calories FROM `aliment`;


----------------
-- Séquence 2 --
----------------

-- #4 - Afficher l'aliment ayant l'id 4
SELECT * FROM aliment WHERE id=4;

-- #5 - Afficher l'aliment dont le nom est poire
SELECT * FROM aliment WHERE nom LIKE "poire";
-- OU
SELECT * FROM aliment WHERE nom="poire";


-- #6 - Afficher les aliments ayant moins de 90 kcal
SELECT * FROM aliment WHERE calories < 90;

-- #7 - Sélectionnez les utilisateurs utilisant Gmail
SELECT * FROM utilisateur WHERE email LIKE "%@gmail.com"

-- #8 - Afficher tous les aliments triés par le nombre de calories croissant
SELECT * FROM aliment ORDER BY calories;


-- #9 - Afficher les aliments ayant moins de 90 kcal et triés par ordre décroissant
SELECT * FROM aliment WHERE calories < 90  ORDER BY calories DESC;

-- #10 - Afficher les aliments ayant moins de 90 kcal et dont le taux de sucre est supérieur à 10 et triés par ordre décroissant
SELECT * FROM aliment WHERE calories < 90 AND sucre > 10  ORDER BY sucre;


----------------
-- Séquence 3 --
----------------
-- # 11 - Afficher toutes les marques disponibles dans la table aliment, puis afficher le nombre d'éléments
<Votre 1ère requête ici>
SELECT DISTINCT marque FROM aliment;

<Votre 2ème requête ici>
SELECT COUNT(DISTINCT marque)  FROM aliment;



-- #12 - Affichez le résultat précédent en utilisant l'alias suivant : "marques différentes"
<Votre requête ici>
SELECT COUNT(DISTINCT marque) AS "marques différentes" FROM aliment;

-- #13 - Affichez le taux de sucre maximum en utilisant l'alias "taux de sucre maximum"
<Votre requête ici>
SELECT MAX(sucre) AS "taux de sucre maximum" FROM aliment;


-- #14 - Quelle est la teneur moyenne en calories des aliments de 30 kcal ou plus. Utilisez l'alias "calories moyennes des aliments > 30kcal".
<Votre requête ici>
SELECT AVG(calories) AS "calories moyennes des aliments > 30kcal" FROM aliment WHERE calories >= 30

-- #15 - Arrondir cette teneur en calories précédente
<Votre requête ici>
SELECT ROUND(AVG(calories)) AS "calories moyennes des aliments > 30kcal" FROM aliment WHERE calories >= 30
