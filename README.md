# LARAVEL_CARPENTIER_LAMOU
Dépôt GitHub pour projet Laravel dans le cadre du cours de monsieur Arthur.

Ce projet inclut des modèles pour les articles et les commentaires, permettant de stocker et de gérer les informations relatives à chaque entité dans la base de données. Chaque article peut avoir plusieurs commentaires associés, permettant une interaction avec les utilisateurs.

Pour assurer la qualité et la fiabilité des données entrées par les utilisateurs, le projet implémente des règles de validation spécifiques à travers les FormRequests pour les articles et les commentaires. Ces règles garantissent que les titres, contenus, et URLs des images des articles, ainsi que les identifiants des articles, auteurs, et contenus des commentaires respectent des critères précis avant d'être traités ou stockés.

Le système est conçu pour fonctionner comme une API, facilitant l'échange de données au format JSON pour une intégration facile avec des applications front-end ou des services tiers. 

Des contrôleurs sont mis en place pour gérer les opérations CRUD pour les articles et les commentaires. 
