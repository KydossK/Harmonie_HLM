# 🎶 Harmonie Municipale de Hellemmes

Site d’entraînement Laravel / Tailwind développé pour une harmonie municipale.  
Ce projet permet la gestion des musiciens, la communication interne et le partage de partitions.

---

## ✅ Fonctionnalités mises en place

- Authentification (login, logout, register) via Laravel Breeze
- Formulaire d’inscription avec email + mot de passe
- Zone **réservée aux musiciens** avec contenu personnalisé
- Gestion des **photos de musiciens** en stockage privé (`storage/app/private/photos`)
- **Affichage des musiciens par pupitre**
- **Dark mode** avec switch Alpine.js (persisté dans `localStorage`)
- Bloc "🎉 Prochain anniversaire"
- Système d’**upload de partitions** (PDF/images)
- Affichage dynamique des **partitions partagées**
- Bloc "📢 Annonces & alertes rapides" avec décorations
- **Frise graphique répétée** (blason) en haut de la section annonces
- README structuré + versionnée

---

## 🚧 En cours de développement

- Ajout d’un champ **photo** et **choix de pupitre** à l’inscription
- Superposition d’un **accessoire graphique** si pas de photo uploadée
- Génération dynamique des **images par défaut avec accessoires**
- Interface de gestion simplifiée pour les **admins**
- Upload de partitions uniquement limité aux formats :
  - 📄 `.pdf` (max 3 pages)
  - 📷 `.jpg`, `.png`, `.jpeg` (taille raisonnable)

---

## 💡 Liste des idées à implémenter

- 🎭 **Affichage aléatoire** des pupitres (ordre d’apparition)
- 🎺 **Liste dynamique des inscrits** aux prochains défilés
  - Afficher uniquement le **nombre de musiciens par pupitre**
- 🎼 **Espace d’échange de partitions** plus évolué :
  - Catégories, recherche, filtre par pupitre
- 🎒 Zone "Matériel oublié / prêté"
- 🗓️ Intégration d’un **calendrier** (répétitions, concerts)
- 📸 Ajout futur d’une **galerie de photos**
- 📣 Zone d’annonce **modifiables en admin**
- 👤 Interface "Mon profil" pour mise à jour photo + pupitre
- 🦇 Et bien sûr : un hommage à la chauve-souris, l’animal totem du projet 🖤

---

## 📦 Installation

```bash
git clone https://github.com/editeur/projet.git
cd harmonie-municipale

# Installe les dépendances
composer install
npm install && npm run dev

# Copie le fichier .env et configure
cp .env.example .env
php artisan key:generate

# Configure ta base de données dans .env
php artisan migrate --seed
🧪 Utilisation
Accès front : http://localhost:8000

Page visiteurs : /

Page musiciens : /musiciens

Login : /login

Register : /register

🐛 Bugs connus
Problème d’initialisation du thème clair/sombre (requiert 2 clics à la 1ʳᵉ connexion)

L’upload de partitions ne filtre pas encore tous les formats invalides

Pas encore d’interface admin

📜 Licence
Tout le code de ce repository est sous licence GPL v3.0.

📬 Contact
Pour toute demande d’information, contacter : pierre_ple@hotmail.com

