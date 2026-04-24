# Cahier des charges — Greenlight Free

Version : 1.0.0  
Date : 2026-04-24

---

## 1. Contexte et objectif

Greenlight Free est un thème WordPress conçu pour être utilisé comme base sobre, durable et accessible. Il remplace un thème plus massif par une fondation minimaliste, exploitable sans outillage front.

L'objectif est double :
- fournir un thème fonctionnel en production avec un coût technique minimal ;
- constituer une base documentée pour une collaboration humain-IA outillée.

Site officiel du thème : https://beabot.fr/greenlight/

---

## 2. Principes directeurs

### 2.1 Green IT et sobriété numérique

Le thème doit minimiser son impact à chaque niveau :

**Requêtes HTTP**
- Une seule feuille de style chargée côté front : `screen.css`.
- Aucun JavaScript chargé par défaut.
- Aucune police externe (Google Fonts, Adobe Fonts, etc.) — polices système uniquement.
- Aucun appel réseau vers des services tiers (analytics, tracking, CDN externe).
- Les assets conditionnels (ex. JS d'un bloc natif) sont gérés par WordPress, pas par le thème.

**Poids des ressources**
- `screen.css` : objectif < 4 ko non minifié, < 2 ko minifié.
- Zéro JavaScript propre au thème.
- Images : aucune image embarquée dans le thème (ni sprite, ni fond décoratif).

**DOM**
- Profondeur maximale recommandée : 5 niveaux dans les templates.
- Aucun wrapper purement décoratif sans rôle sémantique.
- Pas de `div` si un tag sémantique (`main`, `article`, `header`, `footer`, `nav`, `section`) est approprié.
- Chaque nœud ajouté doit se justifier par un rôle structurel, de layout ou d'accessibilité.

**Serveur**
- Aucune requête base de données ajoutée par le thème au-delà de ce que WordPress génère nativement.
- Pas de `WP_Query` supplémentaire dans les templates.
- Pas de méta-données ou d'options de thème stockées en base.

### 2.2 Performance front

- Layout fluide en priorité : `clamp()`, `min()`, unités `vw`/`vh`/`%` avant les media queries.
- Pas de media queries de breakpoints rigides dans `screen.css`.
- `content-visibility: auto` envisageable sur les zones hors viewport si le rendu le justifie.
- Polices système : rendu immédiat, zéro FOUT, zéro requête réseau.
- `color-scheme: light dark` + `light-dark()` : dark mode sans JS, sans classe supplémentaire.

### 2.3 Accessibilité

Conformité cible : WCAG 2.1 AA.

**Structure**
- Landmarks HTML5 : `<header>`, `<main>`, `<nav>`, `<footer>` présents et identifiables.
- Hiérarchie des titres : `h1` unique par vue, progression logique sans saut.
- Skip link visible au focus, pointant sur `#main-content`.

**Navigation clavier**
- Toutes les interactions accessibles sans souris.
- Focus visible sur tous les éléments interactifs via `:focus-visible`.
- Navigation au menu fonctionnelle au clavier (gérée par le bloc WordPress natif).

**Contenu**
- Contraste minimum : 4.5:1 pour le texte, 3:1 pour les éléments UI.
- Textes alternatifs délégués à l'éditeur (images dans le contenu).
- Liens compréhensibles hors contexte.

**Formulaires**
- Labels associés aux champs.
- Messages d'erreur lisibles par les lecteurs d'écran.

### 2.4 Compatibilité WordPress

- Thème block-first (Full Site Editing) : pas de `sidebar.php`, pas de `get_sidebar()`.
- Toute personnalisation éditoriale passe d'abord par `theme.json`, puis par les templates HTML, puis par les patterns.
- Le PHP reste limité à des hooks ciblés dans `inc/` — aucune logique métier dans le thème.
- Compatibilité WordPress 6.5+ et PHP 7.4+.
- WPCS (WordPress Coding Standards) propre sur tout le PHP du thème.

---

## 3. Architecture technique

### 3.1 Ordre de décision pour tout nouveau besoin

1. `theme.json` (couleurs, typographie, espacements, layout, blocs) ;
2. template HTML ou pattern natif ;
3. `assets/css/screen.css` (ce que `theme.json` ne couvre pas) ;
4. hook PHP dans `inc/` (comportement éditorial ou chargement conditionnel) ;
5. JavaScript en dernier recours, uniquement si aucune alternative native n'existe.

### 3.2 Structure des fichiers

```
greenlight-free/
├── style.css               En-tête du thème WordPress
├── theme.json              Design tokens, styles globaux
├── functions.php           Bootstrap PHP (mince)
├── inc/
│   ├── App.php             Orchestrateur de services
│   ├── Setup.php           Theme supports, text domain
│   ├── Assets.php          Enqueue feuille de style
│   ├── Accessibility.php   Skip link
│   └── Seo.php             SEO natif (meta, OG, JSON-LD)
├── templates/              Templates HTML du thème
├── parts/                  Header et footer
├── patterns/               Patterns PHP traduisibles
├── assets/css/
│   └── screen.css          Couche CSS courte, faible spécificité
└── languages/              Fichiers de traduction
```

### 3.3 CSS — règles de style

- Sélecteurs via `:where()` pour spécificité nulle (0,0,0).
- Fonctions CSS modernes : `clamp()`, `min()`, `max()`, `oklch()`, `color-mix()`, `light-dark()`.
- Variables `--gl-*` uniquement pour ce que les presets WordPress ne couvrent pas.
- Pas de `!important`.
- Pas de sélecteurs descendants profonds (max 2 niveaux).
- Propriétés logiques (`inline`, `block`, `inset`) pour l'internationalisation.

### 3.4 PHP — règles de code

- Namespace `GreenlightFree\Theme\` pour toutes les classes.
- Chaque service : une classe `final`, une méthode statique `register()`, des hooks WordPress.
- Toute sortie dynamique : échappée (`esc_html()`, `esc_attr()`, `esc_url()`).
- Toute chaîne traduite : `__()`, `esc_html__()` ou `esc_html_e()` avec text domain `greenlight-free`.
- Aucune option de thème en base de données.

---

## 4. Hors périmètre

Les fonctionnalités suivantes n'ont pas leur place dans ce thème :

- Customizer WordPress
- Blocs Gutenberg custom
- Panneau d'options
- Framework CSS ou JavaScript
- Polices web externes
- Analytics, tracking, scripts tiers
- E-commerce
- Formulaires complexes
- Gestion de rôles ou de permissions
- Sitemaps, SEO avancé (délégués à un plugin)
- Pipeline d'images ou de médias
- Optimisation d'images côté thème

---

## 5. Critères d'acceptation

### Avant toute mise en production

- [ ] `composer phpcs` : aucune erreur, avertissements justifiés.
- [ ] Rendu correct sur les 6 templates : index, single, page, archive, search, 404.
- [ ] Navigation clavier complète : skip link, menu, pagination, formulaire de recherche.
- [ ] Focus visible sur tous les éléments interactifs.
- [ ] Aucun JS chargé sur une page statique sans bloc interactif.
- [ ] Une seule requête CSS front (screen.css).
- [ ] Aucune requête vers un domaine externe.
- [ ] Rendu dark mode cohérent (macOS/iOS en mode sombre).
- [x] Fichier `.pot` généré.
- [x] URL officielle du thème renseignée dans l'en-tête WordPress.
- [ ] Aucune duplication entre `theme.json` et `screen.css`.

### Checklist DOM (par template)

- [ ] Profondeur DOM ≤ 5 niveaux dans `<main>`.
- [ ] Un seul `<h1>` par vue.
- [ ] `id="main-content"` présent sur `<main>`.
- [ ] Pas de `<div>` superflu là où un tag sémantique suffit.

### Checklist performance

- [ ] `screen.css` < 4 ko non minifié.
- [ ] Aucune image de thème chargée.
- [ ] Score Lighthouse Performance ≥ 95 sur une page de contenu simple.
- [ ] Score Lighthouse Accessibility ≥ 95.

---

## 6. Évolutions envisageables (non planifiées)

Ces pistes sont documentées pour ne pas être oubliées, sans engagement de livraison :

- Template `author.html` pour les pages d'auteur.
- Template `page-no-title.html` pour les pages pleine largeur sans titre affiché.
- Support `print` dans `screen.css` via `@media print`.
- Token de couleur pour `prefers-contrast: more`.
- Navigation prev/next entre articles dans `single.html`.
