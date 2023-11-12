/*
   On travaille ici sur la base de données "foodly"
*/

-----------------------
-- Modifier un champ --
-----------------------

/*
  Le management de Foodly revient encore une fois vers vous !

  Après avoir regardé des utilisateurs se servir de Foodly, ils se sont rendu compte que les utilisateurs souhaiteraient pouvoir filtrer les aliments selon leurs apports calorifiques avec plus de précision.

  Pour ce faire, les développeurs vous indiquent qu’ils vont devoir comparer les calories de deux aliments entre eux, et ce, à la virgule près.

  Or, les calories sont actuellement stockées sous forme d’entiers (sans décimales, du coup). Comment les modifier ?
*/


-- Voici la commande pour effectuer cette opération :
ALTER TABLE aliment MODIFY calories FLOAT;

/*
Analysons cette commande :
  - On modifie toujours la structure d’une table avecALTER TABLE
  - On lui signale à nouveau quelle table modifier (ici, “aliment”)
  - On lui indique que la modification va modifier le type d’une colonne avec MODIFY
  - On mentionne le nom de la colonne à modifier (ici, “calories”)
  - On indique le nouveau type de la colonne (ici, FLOAT)


--------------
-- Exercice --
--------------

/* Les développeurs viennent vous voir affolés ! Certains utilisateurs ne peuvent pas s’inscrire car leur e-mail dépasse les 255 caractères.

   Pourriez-vous augmenter la limite à 500 ?
   
   Ne pas oublier que l'email ne peut être nul. Il faut le préciser lors de votre modification.

   Tentez par vous-même.
*/

