ECF-202212-OB-Express-React
Présentation de l'examen
Activité – Type 1 : Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
• Maquetter une application.
• Réaliser une interface utilisateur web statique et adaptable.
• Développer une interface utilisateur web dynamique.
• Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce.
Activité – Type 2 : Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurité
• Créer une base de données.
• Développer les composants d’accès aux données.
• Développer la partie back-end d’une application web ou web mobile.
• Élaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce.
Avec les informations du cahier des charges et vos propres connaissances, vous allez réaliser la partie Front et Back du site web ainsi qu’un maquettage complet.
Les objectifs: Réaliser une interface web sécurisée et son administration
• Développer l’interface web présentée ci-dessous ainsi que son interface d’administration.
• Élaborer un dossier d’analyse des besoins qui documente, entre autres, les choix des technologies, UML (Use case, Sequence et Classe), les choix d’architecture logicielle et de configuration, les bonnes pratiques de sécurité implémentées, etc.
• Élaborer un document spécifique sur les mesures et bonnes pratiques de sécurité mises en place et la justification de chacune d’entre elles ainsi que leurs tests unitaires.
Livrables
Le code de l’application sur un dépôt Github. Le dépôt doit également contenir un guide de déploiement et un manuel d’utilisation au format Readme.md pour l’administrateur. Le document « questions et réflexions » rempli et exporté au format pdf. Une version en ligne de l’application pour la présentation déployée grâce à Heroku. Pour connaître la marche à suivre, n’hésitez pas à reprendre votre module « Déployer son application web avec Heroku ». Un lien vers, par exemple, un trello (ou autre système de gestion des tâches).
Contraintes techniques:
• Les contraintes techniques sont liées au serveur et à sa configuration, aussi les technologies choisies pour développer le projet respectent l’architecture du serveur.
• Les contraintes de temps vont nécessiter une épuration du design de façon à offrir une vraie expérience utilisateur et un contenu simplifié et clair afin d’accélérer la phase de développement.
Les annexes:
Vous retrouverez dans les annexes les éléments suivants qui vous serviront d’exemples. Vous pouvez vous en servir ou bien les adapter à vos propres compétences de développeur :
• Analyses des besoins
• Quelques diagrammes UML
• Un début de charte graphique
• Un wireframe
• FAQ

LE PROJET API SALLE DE SPORT
Objectifs:
L’objectif du projet est de mener une étude (Analyse des besoins) et développer l’application web présentée ci-dessous. Il convient également d’élaborer un dossier d’architecture web qui documente entre autres les choix des technologies, les choix d’architecture web et de configuration, les bonnes pratiques de sécurité́ implémentées, etc. Il est également demandé d’élaborer un document spécifique sur les mesures et bonnes pratiques de sécurité́ mises en place et la justification de chacune d’entre elles. Les bases de données et tout autre composant nécessaire pour faire fonctionner le projet sont également accompagnés d’un manuel de configuration et d’utilisation.
1. Exigences:
Notre client est une grande marque de salle de sport et souhaite la création d’une interface simple à destination de ses équipes qui gèrent les droits d'accès à ses applications web de ses franchisés et partenaires qui possèdent des salles de sport. Ainsi, lorsqu'une salle de sport ouvre et prend la franchise de cette marque, on lui donne accès à un outil de gestion en ligne. En fonction de ce qu’il va reverser à la marque et de son contrat, il a droit à des options ou modules supplémentaires. Par exemple, un onglet “faire son mailing” ou encore "gérer le planning équipe" ou bien “promotion de la salle" ou encore “vendre des boissons” peut être activé ou désactivé. Le projet a donc pour but la création et la construction d’une interface cohérente et ergonomique afin d’aider leurs équipes à ouvrir des accès aux modules de leur API auprès des franchisés/partenaires. L’interface devra permettre de donner de la visibilité́ sur les partenaires/franchisés utilisant l’API et quels modules sont accessibles par ces partenaires. Elle doit faciliter l'ajout, la modification ou la suppression des permissions aux modules de chaque partenaire/franchisé.
2. Cible:
L’interface sera utilisée par l’équipe technique de développement de la marque.
3. Périmètre du projet:
L’interface devra avoir un design responsive et être rédigée en Français. Liste des fonctionnalités : - Afficher la liste des partenaires actifs, - Afficher la liste des partenaires désactivés, - Consulter les différentes structures des partenaires (activées et désactivées), - Modifier les permissions des structures, - Ajouter une nouvelle structure à un partenaire avec des permissions prédéfinies entre un technicien du client et le partenaire concerné, - Envoyer automatiquement un email après l’ajout d’une structure au partenaire concerné, - Possibilité de confirmation d’accès aux données de la structure par le partenaire, - Afficher le contenu du mail dans un nouvel onglet.
Pour finir, elle devra être intégrée à l’outil interne et la base de données existante. Vous êtes donc libre d’adapter d'éventuelles données entrantes.

Analyses et Choix techniques:
Une fois l’énoncé et les contraintes analysées, je fais le choix de partir sur un modèle MVC, association la partie Front End et la partie Back End. J’ai fait ce choix après avoir travaillé sur ce type de modèle en stage, et étant facile à déployer et à utiliser. N'ayant que peu d'informations à ce sujet, je me suis dit que les deux parties n’avaient pas forcément besoin d’être séparé pour fonctionner. Elles peuvent également fonctionner séparément. 
J’ai décidé de partir sur un déploiement HTML/CSS/Javascript pour le front End, en utilisant les Framework Bootstrap pour l’HTML et JQuery pour le Javascript. Car je suis bien familiarisé avec ces deux là et qu’ils ont une grosse documentation.  Pour la partie Back End, je suis parti du sur PHP et du MySQL pour les requêtes de la base de données. 
La gestion des données sera confiée à un moteur SQL, plus particulièrement celui de XAMPP.  Ne connaissant que cette méthode et étant familiarisé avec elle. Elle répond parfaitement aux besoins de l'énoncé, donc je fais le choix de passer par l'installation, la configuration et l'exploitation d'un service tiers supplémentaire (Serveur XAMPP, MySql / PostgresSql / MariaDB /). Malgré ça un fichier .sql sera disponible, pour initialiser une base de données utilisable. 
Pour la partie Frontend je suis parti sur la base, HTML/CSS/Javascript, ne m’y connaissant pas assez en ReactJS. Pour ce faire, je me suis aidé de la structure sur laquelle j’ai travaillé en stage chez Lozako. Ce stage m’a fourni l'éco-système nécessaire au développement de l'applications. Idem pour les balises Metas HTML qui ne seront peuplées que d'informations améliorant l'ergonomie de l'interface. L'interface sera MobileFirst et devra être parfaitement complète et fonctionnelle sur tous les types d'écrans.
Le développement se fera sous Windows 11. L'éditeur sera VSCode pour Windows et quelques extensions améliorant le travail de codage.

Un mot sur la sécurité:
La sécurité sur le web est primordiale c'est pourquoi l'application emploie différents mécanismes pour se protéger et protéger l'utilisateur.
Son architecture découpée permet de sécuriser chaque partie de manière optimale.
La partie Backend, ne sera accessible que part les admins. Ainsi aucun risque de modification sur celle-ci. Dans le modèle MVC, la partie Back end, ne peut pas réellement être modifier. Hormis en accédant directement à MyPHPAdmin.
La partie Frontend, sur une connexion avec un mot de passe crypté (Hashage), et les entrées seront protégés par des regex pour éviter d’injecter du code dedans, et utilisera aussi le protocole HTTPS.
La base de donnée MySQL ne sera pas cryptée, ou sécurisée par mot de passe. Mais son accès ne sera pas non plus rendu publique et partagé à l'extérieur de l'enceinte de fonctionnement de l'API. Ce qui limitera les risques liés à sa manipulation. L'incorporation de données extérieures sera soumise aux procédure de protections contre les attaques de type injections HTML (XSS). Protection principalement fournie par la librairie sqlite3 et ses fonctions dédiées.
Les tests
Malgré un délai confortable pour la réalisation de ce projet, étant en reconversion, donc ayant peu de temps pour travailler, j'ai dû faire quelques choix compliqués.
Les tests en font partis. Ils seront, au moins partiellement, exécuter pour l’ECF. J’ai exécuté plusieurs tests unitaires, mais n’ai pas pris le temps de les décrire ou de les garder en tête. Donc je n’ai aucune trace des tests effectué tout le long du développement.
Répertoire local de travail
L’espace local où sera hébergé le futur projet et créé le fichier README.md, base de toutes documentations, sont créer automatiquement par XAMPP dans le dossier HTDOCS, donc j’ai conservé le dossier a cet endroit pendant toute la durée du développement.

Git et Github:

Pour commencer, j'ouvre un nouveau "Repository" dans mon espace Github que j’ai nommé du même nom que le dossier de développement « API_test ». Une fois celui-ci configuré, j'initialise Git en utilisant les commandes ci-dessous:

$ git init
$ git add .
$ git commit -m "first commit"
$ git branch -M dev
$ git remote add origin https://github.com/Kastaniet/API_test.git
$ git push -u origin dev

Installation et Utilisation de l'application
Il suffit de récupérer tous les dossiers sur Git, une fois ça fait. Nous avons un environnement de travail autonome, donc avec le fichier .sql dans le dossier migrate, il suffit d’éxecuter la commande : 

php mvc db:migrate 

Et ainsi initialisé la base de données. 

Annexes :
Compte démo :
Administrateur :
    adresse email: kevin.machin@gmail.com
    mot de passe: Kevin12345
Technicien : 
    adresse email: Louis@machin.com
    mot de passe: Louis12345
Utilisateur : 
    adresse email: Jean-baptiste@lavisse.com
    mot de passe: Lavisse12345



Création de compte : 
Lors d’une première connexion, sur la page de connexion, vous avez accès a un formulaire pour ajouter votre nom, prénom, mail et mot de passe, pour ensuite vous connectez. 
Les admins vous attribueront le rôle dans la base de données si vous êtes admin, technicien ou utilisateurs. 
Connexion : 
Pour vous connectez une fois le formulaire de première connexion envoyé, il ne vous reste plus qu’a rentré votre mot de passe et votre e-mail correctement. En cas d’erreur, une erreur vous sera retournée. 



Diagramme de Classe :

![alt tag](https://github.com/Kastaniet/API_test/blob/5c34df97ec0e3e9e737ff54541619944ef344148/diagramme_ECF/diagramme_de_classe.png)

![alt tag](https://github.com/Kastaniet/API_test/blob/5c34df97ec0e3e9e737ff54541619944ef344148/diagramme_ECF/base_de_donn%C3%A9es.png)
Diagramme des modèles : 
![alt tag](https://github.com/Kastaniet/API_test/blob/5c34df97ec0e3e9e737ff54541619944ef344148/diagramme_ECF/diagramme_modele.png)

Sequence diagramme partenaire  :
![alt tag](https://github.com/Kastaniet/API_test/blob/5c34df97ec0e3e9e737ff54541619944ef344148/diagramme_ECF/sequence-diagram-partenaire-ou-structure.png)

Conclusion : 
Comme dit au début étant en reconversion, et ayant beaucoup d’à côté, le manque de temps c’est fait savoir. Plusieurs chose ne sont pas finalisé à temps ou par manque de test, ne fonctionne pas correctement. 
