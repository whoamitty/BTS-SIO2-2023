------------------------------------------------
-- Relation plusieurs à plusieurs (many-to-many)
------------------------------------------------

-- Un même utilisateur peut stocker plusieurs aliments scannés ;
-- Un aliment peut lui-même être scanné par plusieurs utilisateurs.

-- Voici la commande pour relier tous les utilisateurs aux aliments qu’ils ont scannés :

SELECT *
FROM utilisateur
JOIN utilisateur_aliment 
	ON utilisateur.id = utilisateur_aliment.utilisateur_id
JOIN aliment
	ON aliment.id = utilisateur_aliment.aliment_id


-- Exercice : 
-- voir tous les aliments sélectionnés par les utilisateurs dont l’adresse e-mail est une adresse Gmail (Utilisez votre vue crée lors des exercices précédents).
-- Informations 
-- utilisateur: nom, prenom, email
-- aliment: nom, marque, proteines (arrondi), bio
-- langue : nom
