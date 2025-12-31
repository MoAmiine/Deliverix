# 🚚 Deliverix - Application de Livraison PHP OOP

## Description
Application web complète de livraison de commandes développée en PHP orienté objet avec une architecture moderne utilisant namespaces, interfaces et classes abstraites.

## Architecture Complète

### Backend (PHP OOP)
```
src/
├── Entity/                    # Classes d'entités métier
│   ├── User.php              # Entité Utilisateur
│   ├── Role.php              # Entité Rôle
│   ├── Order.php             # Entité Commande
│   ├── Offer.php             # Entité Offre
│   ├── Notification.php      # Entité Notification
│   └── Vehicle.php           # Entité Véhicule
├── Abstract/                 # Classes abstraites
│   └── Person.php           # Classe abstraite Personne
├── Interface/               # Interfaces
│   └── CrudInterface.php    # Interface CRUD
├── Repository/              # Couche d'accès aux données
│   ├── UserRepository.php
│   ├── OrderRepository.php
│   ├── OfferRepository.php
│   └── NotificationRepository.php
├── Service/                 # Couche de logique métier
│   └── DeliverixService.php
├── Exception/               # Gestion des erreurs
│   └── ValidationException.php
├── Database/               # Connexion à la base de données
│   └── DatabaseConnection.php
└── index.php              # Point d'entrée backend
```

### Frontend (HTML/CSS/JS)
```
public/
├── index.php               # Point d'entrée frontend
assets/
├── css/
│   └── style.css          # Styles Bootstrap personnalisés
└── js/
    └── script.js          # JavaScript interactif
views/
├── layouts/
│   └── main.php           # Template principal
├── home.php               # Page d'accueil
├── auth/
│   ├── login.php          # Connexion
│   └── register.php       # Inscription
├── client/
│   ├── orders.php         # Mes commandes
│   └── create_order.php   # Créer une commande
├── livreur/
│   └── orders.php         # Commandes disponibles
└── admin/
    └── dashboard.php      # Panel administrateur
```

## Fonctionnalités Implémentées

### ✅ Authentification & Rôles
- Inscription et connexion sécurisée
- Gestion des rôles (client/livreur/admin)
- Accès sécurisé selon le rôle

### ✅ Gestion des Commandes (Clients)
- Créer une commande avec détails complets
- Modifier une commande (avant acceptation)
- Annuler une commande
- Consulter ses commandes avec statuts
- Suivre l'évolution des commandes

### ✅ Système d'Offres (Livreurs)
- Voir les commandes disponibles
- Faire des offres avec prix et durée
- Sélectionner le type de véhicule
- Ajouter des options (express, fragile, etc.)
- Gérer ses offres

### ✅ Notifications
- Notifications client pour nouvelles offres
- Notifications client pour changement de statut
- Notifications livreur pour offres acceptées
- Système de notifications en temps réel

### ✅ Gestion de la Livraison
- Accepter des offres (côté client)
- Changer le statut à "Expédié" (côté livreur)
- Valider la livraison (côté client)
- Cycle de vie complet des commandes

### ✅ Interface Administrateur
- Dashboard avec statistiques complètes
- Gestion des utilisateurs (activation/désactivation)
- Supervision des commandes et offres
- Rapports et métriques

### ✅ Interface Utilisateur Moderne
- Design responsive avec Bootstrap 5
- Animations et transitions fluides
- Interface intuitive pour chaque rôle
- Gestion des erreurs et feedback utilisateur

## Fonctionnalités Frontend
- 🎨 Interface moderne et responsive
- ⚡ Animations et transitions fluides
- 📱 Compatible mobile et desktop
- 🚚 Interface spécialisée par rôle
- 💬 Système de notifications
- 📊 Dashboard administrateur complet

Cette application démontre une architecture PHP OOP professionnelle avec une interface utilisateur moderne, parfaite pour un système de livraison réel !
