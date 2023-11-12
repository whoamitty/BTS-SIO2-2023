---------------------------------------
-- Ajoutez une nouvelle table “lieu”
---------------------------------------


/*
  Un lieu de vente, c’est :

    - Un nom (exemple : Carrefour City) ;

    - Un type (exemple : supermarché).
*/

CREATE TABLE lieu (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL,
  type VARCHAR(100) NOT NULL
);


SHOW TABLES;


INSERT INTO `lieu` (`nom`, `type`) VALUES ('Carrefour City', 'supermarché');


------------------------------
-- Ajoutez la table de liaison
------------------------------

/*
  MySQL (et les bases de données SQL en général) ne sait techniquement pas stocker autre chose que des relations un à plusieurs.

  Pour les relations plusieurs à plusieurs, on “triche”, via une table de liaison où on va stocker chaque relation, comme si c’était une double relation un à plusieurs.
  
  En fait, les aliments vont avoir des relations un à plusieurs avec la table de liaison. Les lieux, eux aussi, vont disposer de telles relations avec cette table. Et c’est en reliant ces deux tables via cette table de liaison que vous allez pouvoir ressortir les relations entre lieux et aliments.
  
  Pour ce faire, une table de liaison doit être créée. Par convention, elle doit toujours avoir cette forme :
  
    - Son nom doit regrouper les deux tables qu’elle relie, sous la forme : “table1_table2”
    
    - Elle n’a que deux champs à stocker : “table1_id” et “table2_id”. Soit les id de chaque objet qu’elle relie
    
      - Ces id sont donc des références aux id des autres tables
      
    - Sa clé primaire n’est autre que l’association de ces deux id (association qui doit toujours être unique)
*/

CREATE TABLE aliment_lieu (
  aliment_id INT NOT NULL,
  lieu_id INT NOT NULL,
  FOREIGN KEY (aliment_id) REFERENCES aliment (id) ON DELETE RESTRICT ON UPDATE CASCADE,
  FOREIGN KEY (lieu_id) REFERENCES lieu (id) ON DELETE RESTRICT ON UPDATE CASCADE,
  PRIMARY KEY (aliment_id, lieu_id)
);

/*
  Décortiquons cette commande ensemble :

    - On crée une nouvelle table avec le nom des deux tables qu’elle relie (ici la table “aliment”, ainsi que la table “lieu”).

    - On ajoute les références aux id de ces deux tables :

      - “aliment_id”, qui est une référence aux id de la table “aliment” ;

      - “lieu_id”, qui est une référence aux id de la table “lieu” ;

      - on signale à MySQL comment mettre à jour la BDD en cas de suppression ou de mise à jour d’un objet de “aliment_lieu”.

    - On explique à MySQL que l’id de cette table sera l’association entre les deux id précédents.
    
  Il peut y avoir quelque chose de très perturbant dans cette commande :
  
    - La table créée est composée de deux colonnes, qui sont toutes deux FOREIGN KEY.
      Cela est logique puisque ces deux colonnes pointent vers des clés étrangères, l'une pour la table aliment et l'autre pour la table lieu.
      Ces deux FOREIGN KEY sont par ailleurs des PRIMARY KEY dans leurs tables respectives.
      
    - L'association de ses deux colonnes forme une PRIMARY KEY. Cela est logique également.
      En effet, il n'est pas possible d'avoir un doublon sur une paire (aliment_id, lieu_id)
*/


INSERT INTO `aliment_lieu` (`aliment_id`, `lieu_id`) VALUES ('11', '1');


--------------------------------------------------
-- Requêtez facilement grâce à la table de liaison
--------------------------------------------------

SELECT *
FROM  aliment
JOIN aliment_lieu ON aliment.id = aliment_lieu.aliment_id
JOIN lieu ON lieu.id = aliment_lieu.lieu_id
WHERE aliment.id = 11;

/*
  Ici, on joint la table aliment à la table lieu via la table de liaison, comme si c’était une simple relation un à plusieurs répétée.
*/



-----------
-- Exercice
-----------

/*
  On souhaite savoir quels sont les appareils sur lesquels les utilisateurs ont installé Foodly (par exemple : mac, pc, android, etc).

  Un utilisateur peut utiliser Foodly sur plusieurs appareils, et un même appareil peut être commun à plusieurs utilisateurs. Il s’agit d’une relation plusieurs à plusieurs.

  Un appareil est uniquement constitué de son type au format texte.
  
  Comment feriez-vous pour créer cette table et la lier aux utilisateurs ?
*/

CREATE TABLE appareil(
	  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	  type VARCHAR(100) NOT NULL
);

CREATE TABLE utilisateur_apareil (
	  utilisateur_id INT NOT NULL,
	  apareil_id INT NOT NULL,
	  FOREIGN KEY (utilisateur_id) REFERENCES utilisateur (id) ON DELETE RESTRICT ON UPDATE CASCADE,
	  FOREIGN KEY (apareil_id) REFERENCES lieu (id) ON DELETE RESTRICT ON UPDATE CASCADE,
PRIMARY KEY (utilisateur_id, apareil_id)
);




