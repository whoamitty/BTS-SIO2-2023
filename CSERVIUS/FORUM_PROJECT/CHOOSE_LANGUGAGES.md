

Nous devons coder un forum
Et pour ça il faut commencer par choisir quels Framework utiliser

Je doit pour le moment chercher quels Frameworks BACKEND on utiliseras

Petite ébauche sur l'orientation de la recherche:
- HTML / CSS / JS
    
- Framework JS : Vanilla JS, React.js (Nextjs) / Vue.js / Angular.js / etc..
    
- Framework PHP : Symfony / Laravel / Codeigniter / Slim
    
- Framework Python : Django / Flask

<br>
<br>


# Voici un comparatif en tableau qui traite finallement de différents frameworks BACK + FRONT


Je ne mentirais pas sur le fait que chatgpt m'as beaucoup aidé


|                 | Langage    | Front-end             | Back-end          | Spécial F/B ? | Base de données         | Évolutivité | Documentation                                                                            |
| --------------- | ---------- | --------------------- | ----------------- |:-------------:| ----------------------- | ----------- | ---------------------------------------------------------------------------------------- |
| **Vanilla JS**  | JavaScript | HTML, CSS, JavaScript | Aucun             |       F       | Aucune                  | Limitée     | [Documentation Vanilla JS(JS pur)](https://developer.mozilla.org/fr/docs/Web/JavaScript) |
| **React.js**    | JavaScript | JSX, CSS              | Node.js (Express) |       F       | MySQL, PostgreSQL, etc. | Élevée      | [Documentation React.js](https://fr.legacy.reactjs.org/docs/getting-started.html)        |
| **Vue.js**      | JavaScript | Vue, CSS              | Node.js (Express) |       F       | MySQL, PostgreSQL, etc. | Modérée     | [Documentation Vue.js](https://fr.vuejs.org/guide/introduction.html)                     |
| **Angular**     | TypeScript | Angular, CSS          | Node.js (Express) |       F       | MySQL, PostgreSQL, etc. | Élevée      | [Documentation Angular](https://angular.io/docs)                                         |
| **Node.js**     | JavaScript | N/A                   | Node.js (Express) |       B       | MySQL, PostgreSQL, etc. | Élevée      | [Documentation Node.js](https://nodejs.org/fr/docs/)                                     |
| **Symfony**     | PHP        | Twig, CSS             | PHP               |       B       | MySQL, PostgreSQL, etc. | Élevée      | [Documentation Symfony](https://symfony.com/doc/current/index.html)                      |
| **Laravel**     | PHP        | Blade, CSS            | PHP               |       B       | MySQL, PostgreSQL, etc. | Élevée      | [Documentation Laravel](https://laravel.com/docs)                                        |
| **CodeIgniter** | PHP        | HTML, CSS             | PHP               |       B       | MySQL, PostgreSQL, etc. | Limitée     | [Documentation CodeIgniter](https://codeigniter.com/user_guide/)                         |
| **Slim**        | PHP        | HTML, CSS             | PHP               |       B       | MySQL, PostgreSQL, etc. | Modérée     | [Documentation Slim](http://www.slimframework.com/docs/v4/)                              |
| **Django**      | Python     | HTML, CSS, JavaScript | Python            |       B       | PostgreSQL, MySQL, etc. | Élevée      | [Documentation Django](https://docs.djangoproject.com/)                                  |
| **Flask**       | Python     | HTML, CSS, JavaScript | Python            |       B       | PostgreSQL, MySQL, etc. | Modérée     | [Documentation Flask](https://flask.palletsprojects.com/en/2.1.x/)                       |

<br>

# Synthétique +++

| Framework             | HTML/CSS/JS | Front-end | Back-end | BDD | Évolutivité | Documentation | Maintenance facile | Pour débutant |
| --------------------- |:-----------:|:---------:|:--------:|:---:|:-----------:|:-------------:|:------------------:|:-------------:|
| 1 Vanilla JS (JS pur) |     ✅      |    ❌     |    ❌    | ❌  |     ❌      |      ✅       |         ✅         |      ✅       |
| 2 React.js            |     ✅      |    ✅     |    ✅    | ✅  |     ✅      |      ✅       |         ✅         |      ❌       |
| 3 Vue.js              |     ✅      |    ✅     |    ✅    | ✅  |     ❌      |      ✅       |         ✅         |      ✅       |
| 4 Angular.js          |     ❌      |    ✅     |    ✅    | ✅  |     ✅      |      ✅       |         ✅         |      ❌       |
| 5 Node.js             |     ✅      |    ❌     |    ✅    | ✅  |     ✅      |      ✅       |         ✅         |      ✅       |
| 6 Symfony             |     ✅      |    ✅     |    ✅    | ✅  |     ✅      |      ✅       |         ✅         |      ❌       |
| 7 Laravel             |     ✅      |    ✅     |    ✅    | ✅  |     ✅      |      ✅       |         ✅         |      ❌       |
| 8 CodeIgniter         |     ✅      |    ✅     |    ✅    | ✅  |     ❌      |      ❌       |         ❌         |      ✅       |
| 9 Slim                |     ✅      |    ✅     |    ✅    | ✅  |     ❌      |      ❌       |         ❌         |      ✅       |
| 10 Django             |     ✅      |    ✅     |    ✅    | ✅  |     ✅      |      ✅       |         ✅         |      ❌       |
| 11 Flask              |     ✅      |    ✅     |    ✅    | ✅  |     ❌      |      ❌       |         ❌         |      ✅       |





<br>
<br>

Nombre de Points

| FrameWork                  | Count ✅ | SPÉCIAL FRONT/BACK ? |
|:-------------------------- |:--------:|:--------------------:|
| 1  Vanilla     JS (JS pur) |    4     |          F           |
| 2  React.js    JS          |    7     |          F           |
| 3  Vue.js      JS          |    7     |          F           |
| 4  Angular.js  JS          |    6     |          F           |
| 5  Node.js     JS          |    8     |          B           |
| 6  Symfony     PHP         |    7     |          B           |
| 7  Laravel     PHP         |    7     |          B           |
| 8  CodeIgniter PHP         |    5     |          B           |
| 9  Slim        PHP         |    5     |          B           |
| 10 Django      Python      |    7     |          B           |
| 11 Flask       Python      |    5     |          B           |


Le top 

| FrameWork           | Count ✅ | SPÉCIAL FRONT/BACK ? |
| ------------------- |:--------:|:--------------------:|
| 2  React.js   JS    |    7     |          F           | 
| 3  Vue.js     JS    |    7     |          F           |
| 5  Node.js    JS    |    8     |          B           |
| 6  Symfony    PHP   |    7     |          B           |
| 7  Laravel    PHP   |    7     |          B           |
| 10 Django    Python |    7     |          B           |


# Explications linéaire

1. JavaScript **Vanilla JS** :
    - HTML/CSS/JS : ✅ - Vanilla JS est du JavaScript pur, donc il est nécessaire d'utiliser du HTML et CSS avec.
    - Front-end : ❌ - Vanilla JS n'est pas un framework front-end, vous devez gérer le front-end vous-même.
    - Back-end : ❌ - Il n'est pas destiné à la gestion du back-end.
      
    - BDD : ❌ - Vanilla JS n'inclut pas de fonctionnalités de base de données, cela dépendra du back-end que vous utilisez.
    - Évolutivité : ❌ - L'évolutivité dépendra entièrement de la manière dont vous structurez votre code.
      
    - Documentation : ✅ - Étant une technologie de base du web, il existe une documentation exhaustive pour JavaScript.
    - Maintenance : ✅ - Vanilla JS n'a pas de dépendances externes ni de structure de framework, ce qui le rend facile à entretenir car il n'y a pas de mises à jour de framework à gérer.
    - Débutant : ✅ - Il s'agit de JavaScript pur, ce qui en fait une bonne option pour les débutants qui maîtrisent déjà HTML/CSS.
    

3. JavaScript **React.js** :
    - Front-end : ✅ - C'est un framework front-end populaire.
    - Back-end : ✅ - Vous pouvez l'utiliser avec un back-end de votre choix.
    - BDD : ✅ - Il peut être intégré à diverses bases de données.
    - Évolutivité : ✅ - React est utilisé dans de nombreuses applications évolutives.
    - Documentation : ✅ - React a une documentation abondante.
    - Maintenance : ✅ - populaire et bien documenté, ce qui facilite la maintenance. De plus, il bénéficie d'une forte communauté et d'une grande adoption, ce qui signifie que les problèmes sont rapidement résolus.
    - Débutant : ❌ - Bien que React soit largement utilisé et bien documenté, sa gestion d'état complexe et son utilisation d'un langage JSX peuvent rendre son apprentissage moins adapté aux débutants.


4. TypeScript **Angular.js** :    
    - HTML/CSS/JS : ❌ - Angular nécessite une syntaxe spécifique pour les modèles HTML et utilise TypeScript.
    - Front-end : ✅ - Il s'agit d'un framework front-end complet.
    - Back-end : ✅ - Il peut être utilisé avec divers back-ends.
    - BDD : ✅ - Il est compatible avec différentes bases de données.
    - Évolutivité : ✅ - Il est bien adapté aux applications de grande envergure.
    - Documentation : ✅ - La documentation d'Angular est riche.
    - Maintenance : ✅ - framework complet avec une structure solide, ce qui le rend facile à entretenir pour les grandes applications. Cependant, cela peut être un peu plus complexe pour de petits projets.
    - Angular: ❌  - courbe d'apprentissage plus raide en raison de sa complexité, ce qui le rend moins adapté aux débutants.


5. JavaScript **Vue.js** :    
    - Front-end : ✅ - Il est principalement destiné au front-end.
    - Back-end : ✅ - Vous pouvez le coupler avec divers back-ends.
    - BDD : ✅ - Il est compatible avec plusieurs bases de données.
    - Évolutivité : ❌ - Il peut être moins adapté à de très grandes applications.
    - Documentation : ✅ - Documentation complète.
    - Maintenance : ✅ - bien documenté et offre une courbe d'apprentissage douce, ce qui facilite la maintenance, en particulier pour les petites et moyennes applications.
    - Débutant : ✅ - Vue.js réputé pour sa simplicité, ce qui le rend adapté aux débutants.

6. **Node.js** :
    - HTML/CSS/JS : ✅ - Node.js est principalement utilisé pour le développement back-end mais peut être utilisé pour gérer des applications web complètes avec HTML, CSS et JavaScript.
    - Front-end : ❌ - Node.js n'est pas un framework front-end, il est utilisé pour le développement back-end.
    - Back-end : ✅ - Node.js est un environnement d'exécution côté serveur qui permet de créer des applications back-end JavaScript.
    - BDD : ✅ - Il peut être utilisé avec diverses bases de données, offrant ainsi une grande flexibilité.
    - Évolutivité : ✅ - Node.js est connu pour sa capacité à gérer de grandes charges de travail et à s'échelonner efficacement.
    - Documentation : ✅ - Node.js dispose d'une documentation complète et d'une large communauté de développeurs.
    - Maintenance : ✅ - Node.js est généralement facile à maintenir, en particulier pour les applications qui suivent les bonnes pratiques de développement.
    - Débutant : ✅ - Node.js peut être adapté aux débutants, en particulier pour ceux qui ont déjà des connaissances en JavaScript.

7. PHP **Symfony** :
    - Front-end : ✅ - Il peut être associé à n'importe quel framework front-end.
    - Back-end : ✅ - C'est un framework back-end puissant.
    - BDD : ✅ - Il prend en charge diverses bases de données.
    - Évolutivité : ✅ - Il est adapté aux projets de toutes tailles.
    - Documentation : ✅ - Symfony a une documentation complète.
    - Maintenance : ✅ - Symfony est reconnu pour sa robustesse et sa maintenabilité. Il est livré avec des outils de débogage puissants et une documentation détaillée, ce qui en fait un choix solide pour les applications PHP.
    -  Débutant : ❌ - bien que robuste, peut être complexe pour les débutants en PHP. <br>(mais c'est par la difficulté qu'on apprend non ?)

8. PHP **Laravel** :    
    - Front-end : ✅ - Vous pouvez le coupler avec n'importe quel framework front-end.
    - Back-end : ✅ - C'est un framework back-end moderne.
    - BDD : ✅ - Il prend en charge diverses bases de données.
    - Évolutivité : ✅ - Laravel est bien adapté aux projets en croissance.
    - Documentation : ✅ - Laravel propose une documentation approfondie.
    - Maintenance : ✅ - Laravel est également bien documenté et bénéficie d'une communauté active. Il offre des outils conviviaux pour la maintenance, y compris la gestion des migrations de base de données.
    - Débutant : ❌ - Laravel, bien qu'offrant une excellente documentation, peut être complexe pour les débutants en PHP.



9. PHP **CodeIgniter** :    
    - Front-end : ✅ - Il peut être associé à n'importe quel framework front-end.
    - Back-end : ✅ - C'est un framework back-end léger.
    - BDD : ✅ - Il prend en charge diverses bases de données.
    - Évolutivité : ❌ - CodeIgniter peut être moins adapté aux applications très complexes.
    - Documentation : ❌ - Sa documentation est moins complète que celle d'autres frameworks.
    - Maintenance : ❌ CodeIgniter est marqué négativement en raison de sa documentation moins complète et de sa communauté plus restreinte par rapport à Symfony et Laravel, ce qui peut rendre la maintenance plus difficile dans certaines situations.
    - Débutant : ✅  Considéré comme l'un des frameworks PHP les plus simples à apprendre, ce qui le rend adapté aux débutants.
      
9. PHP **Slim** :
    - Front-end : ✅ - Il peut être utilisé avec n'importe quel framework front-end.
    - Back-end : ✅ - C'est un micro-framework back-end.
    - BDD : ✅ - Il est compatible avec différentes bases de données.
    - Évolutivité : ❌ - Slim est conçu pour des applications simples à moyennes.
    - Documentation : ❌ - Sa documentation est plus limitée que celle de certains autres frameworks.
    -   Maintenance : ❌ Slim est un micro-framework, ce qui signifie qu'il offre moins de fonctionnalités par rapport à des frameworks plus complets comme Symfony ou Laravel. Cela peut rendre la maintenance plus complexe pour les applications plus importantes.
    - Débutant : ✅  minimaliste et facile à appréhender, ce qui en fait un bon choix pour les débutants.
    
10. Python **Django** :
    - Front-end : ✅ - Vous pouvez le coupler avec n'importe quel framework front-end.
    - Back-end : ✅ - C'est un framework back-end complet.
    - BDD : ✅ - Il est livré avec un ORM et prend en charge diverses bases de données.
    - Évolutivité : ✅ - Django est adapté aux projets de toutes tailles.
    - Documentation : ✅ - Il dispose d'une documentation complète.
    - Maintenance : ✅ - Django est bien documenté, suit des bonnes pratiques de développement et offre des outils pour la gestion de base de données et la sécurité. Il est donc considéré comme facile à maintenir.
    - Débutant : ❌ - bien que puissant, peut être complexe pour les débutants en Python.


12. Python **Flask**:
    - Front-end : ✅ - Vous pouvez l'utiliser avec n'importe quel framework front-end.
    - Back-end : ✅ - C'est un micro-framework back-end.
    - BDD : ✅ - Il est compatible avec différentes bases de données.
    - Évolutivité : ❌ - Flask est conçu pour des applications simples à moyennes.
    - Documentation : ❌ - Sa documentation est plus limitée que celle de certains autres frameworks.
    - Maintenance : ❌ - Micro-framework qui laisse plus de liberté aux développeurs. Cela signifie qu'il peut être facile à maintenir pour les personnes expérimentées, mais peut devenir plus compliqué à gérer pour les projets importants en l'absence de directives claires.
    - Débutant : ✅ - Connu pour sa simplicité et son approche "micro", ce qui en fait un excellent choix pour les débutants en Python.








