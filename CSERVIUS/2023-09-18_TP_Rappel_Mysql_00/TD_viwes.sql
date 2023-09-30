-----------------------------------------------
----- Utilisation
-----------------------------------------------

EXO 1 :
Créer vue reprenant notre liste des aliments non bio,
classés par contenance en protéines(de manière décroissante)

CREATE VIEW non_organic_food_list_vw AS
SELECT *
FROM aliment
WHERE bio = '0'
ORDER BY proteines DESC;

EXO 2 :
Ensuite, à partir de la vue, précédemment crée,
afficher les aliments non bio, dont la contenance en protéines est
superieure à 10.
SELECT * FROM non_organic_food_list_vw WHERE bio='0'


/* Ressortir toutes les langues utilisés par les 5 premiers utilisateurs */
SELECT * FROM utilisateur
JOIN langue
ON utilisateur.langue_id=langue.id
LIMIT 5;



- JOIN / INNER JOIN
- LEFT JOIN
- RIGHT JOIN
- FULL JOIN
- ...

/*
EXO 3 :
Tout les utilisateurs ayant configuré Foodly en anglais
*/
SELECT * FROM `utilisateur` WHERE langue_id= '2';