/*
   On travaille ici sur la base de données "foodly"
*/

-----------------------
-- Renommer un champ --
-----------------------

/*
  Ce coup-ci, c’est la designer de Foodly qui revient vers vous : les utilisateurs sont perturbés… 😨 Pour chaque aliment, la valeur en protéines, vitamines, matières grasses est mentionnée au pluriel. Alors que les sucres, eux, sont mentionnés au singulier. Ce qui perturbe la compréhension des aliments par les utilisateurs.

  Comment renommer cette colonne dans la BDD ?
*/


-- Voici la commande à effectuer :
ALTER TABLE aliment CHANGE sucre sucres FLOAT;

/*
Voici les explications de cette commande :
  - On modifie toujours la structure d’une table avec ALTER TABLE
  - On lui signale à nouveau quelle table modifier (ici, “aliment”)
  - On lui indique que la modification va modifier le nom d’une colonne avec CHANGE
  - On mentionne le nom de la colonne à renommer, ainsi que son nouveau nom (ici, “sucre” devient “sucres”)
  - On indique le nouveau type de la colonne (ici, FLOAT)

C’est une spécificité propre à MySQL : pour renommer une colonne, il faut aussi indiquer son type.

Ce qui n’est pas nécessaire si vous utilisez un autre SGBD. Cela permet de modifier à la fois le nom et le type d’une colonne dans une seule commande. Et ce, même si vous ne souhaitez pas le modifier (réutilisez alors le même type 😉).
*/


--------------
-- Exercice --
--------------

/* À présent, les développeurs trouvent que le nom “code” dans la table des langues est peu explicite. Ils aimeraient qu’elle s’appelle “code_pays”.

   Pouvez-vous implémenter ce changement ?
*/

