/*
   On travaille ici sur la base de données "foodly"
*/

----------------------
-- Ajouter un champ --
----------------------

/*
Le dernier rapport sur l’utilisation de Foodly vient de tomber. Dans celui-ci, les utilisateurs ont pu voter pour les améliorations qu’ils souhaiteraient voir apparaître dans l’application.

La plus demandée était celle de voir la contenance en vitamines de chaque aliment.

Sachant cela, l’équipe de Foodly organise une réunion concernant l’implémentation d’une telle fonctionnalité. Le design est prêt, les développeurs ont codé l’interface, mais il manque une chose cruciale pour récupérer la contenance en vitamines dans l’application : l’ajout de cette donnée dans la BDD.

Prenons l’exemple de la vitamine C.

Cette colonne n’apparaît nulle part dans le schéma de la table aliment. Il nous faut la créer.
*/


-- Avant d'ajouter un champ dans une table, regardons la structure de notre table aliment.
SHOW COLUMNS FROM aliment;

-- La commande pour ajouter un nouveau champ :
ALTER TABLE aliment ADD vitamines_c FLOAT;

/*
Ici, on signale à MySQL :
  - De modifier la structure d’une table avec ALTER TABLE
  - Quelle table modifier (ici “aliment”)
  - Que la modification va faire ajouter une colonne avec ADD
  - Le nom de cette nouvelle colonne (ici “vitamines_c”)
  - Enfin, le type de la colonne (ici,FLOAT, car les vitamines sont stockées usuellement en mg/100g, valeur décimale)
  
À noter que le type n’est parfois pas seul. On peut aussi, mentionner à MySQL qu’on rajoute une colonne qui est :
  - Une clé primaire (PRIMARY KEY) ;
  - Avec une valeur par défaut (DEFAULT valeur_par_défaut) ;
  - Non nulle (NOT NULL). Auquel cas il faudra préciser une valeur par défaut, MySQL créant la colonne avec la valeur “NULL” pour tous les objets existants dans cette table ;
  - etc.
  
Finalement la commande ALTER TABLE ressemble grandement à la commande CREATE TABLE. Quelque part, c'est totalement normal d'ailleurs. On doit spécifier systématiquement le type de la variable, et éventuellement les options.
*/

--------------
-- Exercice --
--------------

/* Admettons que l’on souhaite rajouter une colonne à la table “langue”.
   Cette colonne, c’est le code ISO des langues (par exemple : “fr-fr” pour le Français de France).

   Comment feriez-vous cela ?

   Tentez de créer la colonne et de la remplir par vous-même pour le Français et l’Anglais.
*/

ALTER TABLE langue ADD iso VARCHAR(20) NOT NULL;

UPDATE langue SET iso = "fr-fr" WHERE id = 1;
UPDATE langue SET iso = "en-uk" WHERE id = 2;

INSERT INTO langue(nom, code)  VALUES("espagnol","es-es");