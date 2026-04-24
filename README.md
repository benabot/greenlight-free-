# Greenlight Free

Greenlight Free est un theme WordPress block-first sobre, accessible et maintenable. Il s'appuie sur l'editeur de site, les blocs natifs et `theme.json` pour proposer une base legere, sans JavaScript propre au theme ni dependance front.

## Site officiel du theme

Site officiel et presentation : https://beabot.fr/greenlight/

## Demo / presentation

La page officielle presente l'esprit du theme, ses choix de sobriete et les informations de publication. Le theme peut etre utilise pour un journal, un site editorial simple ou une base de projet WordPress durable.

## Prerequis

- WordPress 6.5 ou superieur.
- PHP 7.4 ou superieur.
- Un site compatible avec les themes de blocs et l'editeur de site WordPress.

## Installation

1. Telechargez l'archive `greenlight-free-v1.0.0.zip`.
2. Dans l'administration WordPress, ouvrez `Apparence > Themes`.
3. Cliquez sur `Ajouter un theme`, puis `Televerser un theme`.
4. Selectionnez l'archive ZIP et lancez l'installation.

Vous pouvez aussi deposer le dossier `greenlight-free` dans `wp-content/themes/` si vous installez le theme manuellement.

## Activation

Apres l'installation, cliquez sur `Activer` depuis `Apparence > Themes`. WordPress utilise alors les templates du theme pour l'accueil, les articles, les pages, les archives, la recherche et la page 404.

## Personnalisation

La personnalisation se fait principalement dans `Apparence > Editeur`.

- Modifiez le titre, le slogan et la navigation avec les blocs natifs WordPress.
- Ajustez les contenus de pages et d'articles depuis l'editeur standard.
- Utilisez les styles globaux exposes par le theme sans ajouter de framework externe.
- Ajoutez vos images mises en avant depuis WordPress ; le theme ne charge aucune image distante par defaut.

## Gestion du multilingue

Le text domain du theme est `greenlight-free`. Le dossier `languages/` contient le fichier `greenlight-free.pot`, qui sert de base aux traductions.

Pour traduire le theme :

1. Creez un fichier `.po` depuis `languages/greenlight-free.pot` avec votre outil de traduction habituel.
2. Compilez le fichier `.mo` correspondant.
3. Placez les fichiers de langue dans `wp-content/languages/themes/` ou dans le dossier `languages/` du theme selon votre workflow.

Le theme utilise les fonctions WordPress de traduction pour ses chaines visibles et laisse les contenus editoriaux aux outils multilingues habituels de WordPress.

## Structure utile du theme

- `style.css` : en-tete WordPress du theme.
- `theme.json` : couleurs, typographies, espacements et styles globaux.
- `functions.php` : bootstrap minimal.
- `inc/` : services PHP du theme, dont assets, setup, accessibilite et SEO natif minimal.
- `templates/` : templates block theme.
- `parts/` : header et footer.
- `patterns/` : patterns PHP reutilises par les templates.
- `assets/css/` : styles front et editeur, charges de facon ciblee.
- `languages/` : base de traduction.
- `screenshot.png` : apercu du theme dans l'administration WordPress.

## FAQ

### Le theme charge-t-il du JavaScript ?

Non. Greenlight Free ne charge aucun JavaScript propre au theme par defaut.

### Puis-je utiliser un plugin SEO ?

Oui. Le SEO natif minimal du theme se desactive quand un plugin majeur comme Yoast, SEOPress, Rank Math ou The SEO Framework est detecte.

### Puis-je modifier les couleurs et la typographie ?

Oui, depuis les styles globaux de l'editeur de site, dans les limites exposees par `theme.json`.

### Le theme convient-il a WooCommerce ?

Il n'est pas concu comme theme e-commerce. Il vise d'abord les sites editoriaux sobres.

## Changelog

### 1.0.0

- Premiere version publique du theme.
- Structure block-first complete.
- Styles responsives sobres et accessibles.
- Text domain `greenlight-free` et fichier POT initial.
- Documentation utilisateur et screenshot de theme.
