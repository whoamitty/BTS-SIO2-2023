------------------------
-- Création de la vue --
------------------------

SELECT * FROM utilisateur WHERE email like "%@gmail.com";

CREATE VIEW utilisateur_gmail_vw AS SELECT * FROM utilisateur WHERE email like "%@gmail.com";

CREATE VIEW utilisateurs_gmail_vw AS
    (   SELECT * 
        FROM utilisateur 
        WHERE email LIKE "%@gmail.com"
    );


---------------------------
-- Utilisation de la VUE --
---------------------------

SELECT * FROM utilisateurs_gmail_vw;

SELECT *
FROM utilisateurs_gmail_vw 
WHERE prenom LIKE "%m%";

-- Grâce aux vues, vous pouvez “raccourcir” des requêtes SQL complexes et rébarbatives, vous permettant d’aller encore plus loin et plus vite dans vos analyses

---------------
-- Exercices --
---------------

-- Créez une vue reprenant notre liste des aliments non bio, classés par contenance en protéines (de manière décroissante).
-- Ensuite, à partir de la vue précédemment crée, afficher les aliments non bios dont la contenance en protéines est supérieure à 10.



CREATE VIEW aliments_non_bio_vw AS
    (   SELECT * 
        FROM aliment
        WHERE bio = false
        ORDER BY proteines DESC
    );

SELECT * FROM aliments_non_bio_vw WHERE proteines > 10;
