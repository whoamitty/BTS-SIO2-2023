/*
   On travaille ici sur la base de données "foodly"
*/

------------------------
-- Supprimer un champ --
------------------------

/*
Le management de chez Foodly nous mentionne d’autres changements à effectuer sur l’application, qui impliquent la BDD. C’est une nouvelle surprenante !

Les utilisateurs de Foodly n’utilisent que très rarement la fonctionnalité pour savoir si un aliment est bio ou non. 😢

Les développeurs, dans leur volonté de toujours diminuer la dette technique (à savoir, le code à maintenir), souhaitent retirer l’affichage bio de la fiche des aliments sur Foodly.

En tant que gestionnaire de la BDD, vous pensez qu’il serait pratique de faire de même de votre côté, pour éviter de maintenir un champ qui ne sera plus mis à jour.

Pour ce faire, rien de plus simple : supprimons la colonne “bio” de la table “aliment” avec DROP.
*/


-- Voici la commande SQL pour le faire :
ALTER TABLE aliment DROP bio;

/*
Décomposons cette commande ensemble :
  - On modifie toujours la structure d’une table avec ALTER TABLE;
  - On lui signale à nouveau quelle table modifier (ici, “aliment”) ;
  - On lui indique que la modification va supprimer une colonne avec DROP;
  - On mentionne le nom de la colonne à supprimer (ici, “bio”).

/!\
Il faut néanmoins faire attention lorsqu’on utilise cette commande. Une fois la colonne supprimée, celle-ci est définitivement détruite et ne peut plus être récupérée. Vous perdez l’information pour tous les objets présents en base. À utiliser avec parcimonie !
*/


--------------
-- Exercice --
--------------

/* Maintenant, admettons que le service légal de Foodly vous dise que stocker des noms de famille va à l’encontre des conditions de protection des données des utilisateurs.

   Comment feriez-vous pour supprimer les noms de famille ?

   Essayez de la faire.
*/

