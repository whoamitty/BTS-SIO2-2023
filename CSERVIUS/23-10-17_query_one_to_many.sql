---------------------------------------
-- Ajoutez une nouvelle table “famille”
---------------------------------------

CREATE TABLE famille 
  (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
  );


SHOW TABLES;


INSERT INTO famille (`nom`) VALUES ('légumes');


-----------------------------------------------
-- Ajoutez la relation entre famille et aliment
-----------------------------------------------

/*
  Relation un à plusieurs :
  un aliment peut avoir une seule famille, mais une famille peut être présente sur plusieurs aliments. 
  Par exemple, une poire et une pomme font partie de la famille “fruits”.
  
  ci, les aliments vont donc devoir être mis à jour pour y stocker une référence à leur famille. Cette référence, par convention, sera l’id de la famille.
  
  Voici les étapes que l’on va suivre :

    1. Ajout du champ famille_id sur les aliments

    2. Modification de ce champ pour signaler à MySQL que c’est une référence à la table famille

    3. Modification d’un objet pour y stocker une relation
*/

-- 1. Ajout du champ famille_id sur les aliments

ALTER TABLE aliment
ADD famille_id INT NULL;

-- 2. Modification de ce champ pour signaler à MySQL que c’est une référence à la table famille
-- risqué
ALTER TABLE aliment
ADD FOREIGN KEY (famille_id) REFERENCES famille (id)
ON DELETE CASCADE;

-- Mieux
ALTER TABLE aliment
ADD FOREIGN KEY (famille_id) REFERENCES famille (id)
ON DELETE SET NULL;

/*
  Admettons que je vienne de créer ma famille “fruits”, et qu’elle soit reliée à mes objets “pomme” et “poire”.
  
  Que se passe-t-il si je supprime la famille “fruits” ?
  
  MySQL a besoin de le savoir. Pour cela, on lui indique via la commande ON DELETE :
  
    - RESTRICT ou NO ACTION  : MySQL va empêcher la suppression tant que “fruits” est référencé sur au moins un objet “aliment”.

    - SET NULL: MySQL va autoriser la suppression de “fruits”, et remplacer “famille_id” sur “pomme” et “poire” par la valeur NULL.

    - CASCADE: l’option la plus courante, mais la plus dangereuse. 😨 Ici, MySQL va supprimer “poire” et “pomme” en même temps que “fruits” (il va donc supprimer tous les objets reliés).
*/

-- 3. Modification d’un objet pour y stocker une relation

UPDATE `aliment` SET `famille_id` = '1' WHERE `nom` = 'haricots verts';

SELECT *
FROM aliment
JOIN famille ON aliment.famille_id = famille.id
WHERE aliment.nom = "haricots verts";


--------------
--- Exercice 1
--------------

-- Ajouter les autres familles, puis rajouter sa famille à chaque aliment


--------------
--- Exercice 2
--------------

/*
  On souhaite rajouter les réductions disponibles sur les aliments. 
  
  Une réduction pouvant être la même pour plusieurs aliments mais chaque aliment pouvant n’avoir qu’une seule réduction, il s’agit d’une relation un à plusieurs.
  
  Les réductions sont uniquement constituées d’un champ “valeur”, qui va contenir la réduction au format texte.
  
  Comment feriez-vous pour créer cette table et la lier aux aliments ?
*/


