# 🎴 Jeu de Cartes Multijoueur

Bienvenue sur mon projet de **jeu de cartes en ligne**, développé en **fullstack** avec **Symfony** pour le backend et **React** pour le frontend.  
Ce projet a été réalisé dans le cadre de mon apprentissage en développement web, avec l’objectif de créer une application interactive, responsive, et connectée à une API personnalisée.

---

## 🌟 Fonctionnalités principales

- Création et gestion de parties multijoueur
- Interface dynamique et responsive en React
- Communication frontend ↔ backend via **Fetch API**
- API REST construite avec **Symfony**
- Gestion des joueurs, des scores et de la logique du jeu
- Architecture claire et maintenable

---

## 🛠️ Stack technique

| Partie        | Technologies utilisées              |
|--------------|-------------------------------------|
| **Frontend** | React, TypeScript, CSS              |
| **Backend**  | PHP, Symfony                        |
| **API**      | REST (JSON), Fetch API              |
| **Base de données** | MySQL ou PostgreSQL (au choix)     |
| **Outils**   | Git, GitHub, Composer, npm, Docker (optionnel) |

---

## 📦 Installation et lancement du projet

### 🧰 Prérequis

- PHP 8.x
- Composer
- Symfony CLI
- Node.js + npm
- MySQL/PostgreSQL
- Git

### 🚀 Étapes

#### 1. Cloner le dépôt

```bash
git clone https://github.com/Anaismarthe12/jeu-de-cartes.git
cd jeu-de-cartes

#### 2. Installer et lancer le backend Symfony
```bash
cd backend

# Installer les dépendances PHP
composer install

# Copier le fichier d'environnement
cp .env.example .env

# Créer et configurer la base de données
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

# Lancer le serveur Symfony
symfony server:start

#### 3. Installer et lancer le frontend React

cd ../frontend
```bash

# Installer les dépendances
npm install

# Lancer le serveur de développement
npm run dev


