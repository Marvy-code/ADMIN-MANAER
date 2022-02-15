## A propos de ADMIN MANAGER

ADMIN MANAGER est un mini template dont la logique applicative a été conçue par Marvy MOUANDA NGOMA.
Les fonctionnalités implémentées dans ce projet open source sont entre autres:

#### La connexionn,
#### La déconnexion,
#### L'ajout des utilisateurs avec rôles et permissions (Habilitations)

## Technologies

php/Laravel 8; Livewire;

## Procédure d'installation
Je suppose que vous avez Laravel 8 et Livewire installés sur votre machine.
Clonez le projet dans votre machine locale. Générez le fichier .env et créez la base de donnée adminmanager dans votre MySQL (Tout autre driver peut être utiliser, à condition de configurer dans le fichier .env).

Après la création de la base de données, exécutez php artisan serve et ouvrez le navigateur. Normalement vous devriez avoir la page de login affichée; puis exécutez php artisan migrate --seed pour populer votre base de données avec des tables et des données fictives.

Trouvez un username dans votre table users et connectez-vous avec le mot de passe par défaut qu'est password.

Vous avez la main du projet et vous pouvez continuer le développement avec l'implémentation d'autres fonctionnalités.

Toutefois, vérifiez bien les rôles des utilisateurs dans la base de données si vous avez du mal à vous connecter.

## Base de données

MySQL

## License

Ce projet tourne sur la licence [MIT license](https://opensource.org/licenses/MIT).

## Développeur 

Marvy MOUANDA NGOMA, Développeur Fullstack
Whatsapp: +242068289050
Email: gwlad.marvy@gmail.com
Brazzaville, Congo
