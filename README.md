# 🎶 Harmonie Municipale de Hellemmes-Lille

Site d'entraînement et projet Laravel dédié à la gestion d'une harmonie municipale, intégrant un espace privé réservé aux musiciens avec fonctionnalités avancées (authentification, gestion de photos privées, annonces internes, dark mode, etc.).

---

## ✨ Fonctionnalités actuelles

- ✅ Page d'accueil publique simple et responsive.
- ✅ Authentification sécurisée (inscription/login).
- ✅ Page réservée aux musiciens connectés.
- ✅ Affichage dynamique des musiciens par instrument (trombinoscope).
- ✅ Photos privées protégées (stockées dans `storage/app/private/photos`).
- ✅ Système d'annonces et alertes rapides administrables facilement.
- ✅ Thème sombre (dark mode) activable via Alpine.js.

---

## 🛠️ Stack technique

- Laravel 11.x
- PHP 8.3.x
- Tailwind CSS 3.x
- Alpine.js 3.x
- MariaDB 15.x
- Vite.js

---

## 📋 Prérequis

- PHP 8.3.x (ou supérieur)
- MariaDB 15.x (ou MySQL compatible)
- Composer
- NPM
- Git

---

## 🚀 Installation

1\. Cloner le dépôt GitHub :

```bash
git clone https://github.com/editeur/projet.git
cd projet
```

2\. Installer les dépendances :

```bash
composer install
npm install
```

3\. Configurer l'environnement :

```bash
cp .env.example .env
php artisan key:generate
```

Éditer `.env` pour configurer la base de données :

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=harmonie
DB_USERNAME=votre_user
DB_PASSWORD=votre_password
```

4\. Lancer les migrations et charger les données initiales :

```bash
php artisan migrate --seed
```

---

## ▶️ Démarrage de l'application

Depuis la racine du projet, lancez les commandes :

```bash
npm run dev
php artisan serve
```

Accédez au site via : [http://localhost:8000](http://localhost:8000)

- Accueil visiteurs : `/`
- Connexion : `/login`
- Inscription : `/register`
- Espace musiciens : `/musiciens`

---

## ✅ Tests

Pour lancer tous les tests automatisés :

```bash
php artisan test
```

---

## 🐛 Bugs et améliorations

### 🐞 Bugs connus

- Aucun bug connu actuellement.

### 💡 Suggestions d'amélioration

- Gestion dynamique des annonces via interface d'administration.
- Ajout d'un calendrier interactif.
- Intégration d'un système d'échange de partitions.
- Liste dynamique des inscrits aux prochains défilés.
- Chat interne pour les musiciens.

---

## 📜 Mentions légales

Tout le code de ce repository est sous licence [GPL v3.0](https://www.gnu.org/licenses/gpl-3.0.html).

---

## 📬 Contact

Pour toute question ou proposition, contactez :

[foo.bar@example.com](mailto:foo.bar@example.com)

---



