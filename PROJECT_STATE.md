# PROJECT_STATE — Greenlight Free

Version : 0.1.0  
Date : 2026-04-17  
Statut global : **structurel complet, validation en cours**

---

## Vue d'ensemble

Greenlight Free est un thème WordPress block-first sans customizer. La structure de base est opérationnelle. Les priorités immédiates sont : tests manuels sur WordPress local, validation clavier et génération du fichier de traduction.

---

## État par zone

### `style.css`
- Statut : **stable**
- En-tête de thème WordPress uniquement, aucun style runtime dedans.
- Rien à faire.

### `theme.json`
- Statut : **stable**
- Palette : 4 couleurs (base, surface, contrast, accent).
- Typographie : polices système uniquement (sans-serif + serif), 4 tailles fluides.
- Espacements : 4 tokens (xs, s, m, l) + blockGap.
- Layout : contentSize 42rem, wideSize 68rem.
- Tokens custom : `flow-space`, `focus-ring`, `measure`.
- `appearanceTools: false` — choix délibéré pour limiter la complexité éditeur.
- Rien à faire.

### `functions.php`
- Statut : **stable**
- Bootstrap uniquement : charge l'autoloader Composer ou `inc/App.php` en fallback.
- Rien à faire.

### `inc/App.php`
- Statut : **stable**
- Instancie Setup, Assets, Accessibility, Seo une seule fois via flag `$booted`.

### `inc/Setup.php`
- Statut : **stable**
- Déclare les theme supports nécessaires.
- Enregistre la catégorie de patterns `greenlight-free`.
- Charge le text domain.

### `inc/Assets.php`
- Statut : **stable**
- Enqueue conditionnel de `base.css`, `listing.css`, `singular.css` et `front-page.css` avec versionnement `filemtime`.
- Aucun JS chargé.

### `inc/Accessibility.php`
- Statut : **stable**
- Skip link injecté via `wp_body_open`.

### `inc/Seo.php`
- Statut : **stable**
- SEO natif complet : meta description, canonical, Open Graph, JSON-LD (Organization, WebSite, Article).
- Evite le doublon de canonical avec WordPress core sur les vues singulières.
- Détecte Yoast, SEOPress, Rank Math, The SEO Framework — se désactive si l'un d'eux est actif.

### `assets/css/`
- Statut : **mis à jour**
- CSS découpé en feuilles ciblées : `base.css`, `listing.css`, `singular.css`, `front-page.css`, `editor.css`.
- CSS moderne : `clamp()`, `color-mix()`.
- `base.css` garde `color-scheme: light` pour rester sobre et prévisible.
- Variables locales `--gl-*` pour les dérivés de couleur non couverts par theme.json.
- Quelques media queries de repli restent présentes pour resserrer le layout sur tablette et mobile.
- À faire : vérifier que le découpage CSS reste sans duplication de tokens inutiles.

### `templates/`
- Statut : **complet pour les cas de base**
- `index.html` : liste paginée avec query-no-results.
- `single.html` : article complet avec navigation prev/next.
- `page.html` : page statique sans date.
- `archive.html` : archive catégorie/tag avec query-title et term-description.
- `search.html` : résultats de recherche avec query-title.
- `404.html` : délègue au pattern `greenlight-free/404`.

### `parts/`
- Statut : **minimal fonctionnel**
- `header.html` : site-title + navigation responsive.
- `footer.html` : site-title + navigation + site-tagline, sans année ni marque figée.

### `patterns/`
- Statut : **fonctionnel**
- `404.php` : h1 + paragraph + bloc search.
- `no-results.php` : paragraph + bloc search.
- Les libellés de lecture et de pagination sont harmonisés.

### `languages/`
- Statut : **vide**
- Les chaînes PHP sont correctement balisées avec `__()` / `esc_html_e()`.
- À faire : générer `greenlight-free.pot`.

### `composer.json` / `phpcs.xml.dist`
- Statut : **stable**
- WPCS 3.x + PHPCompatibilityWP configurés.
- PHPCS couvre `functions.php`, `inc/`, `patterns/`.
- `composer phpcs` passe sans erreur.

---

## Décisions techniques clés

| Décision | Raison |
|---|---|
| Pas de customizer | Thème block-first — tout passe par `theme.json` et l'éditeur de site |
| `appearanceTools: false` | Évite l'exposition de réglages éditeur non maîtrisés |
| Polices système uniquement | Zéro requête réseau externe, chargement immédiat |
| Pas de JS par défaut | Aucun besoin identifié — WordPress natif suffit |
| SEO natif dans le thème | Fallback pour les sites sans plugin SEO, se désactive automatiquement |
| CSS conditionnel par gabarit | Limite les octets chargés selon le contexte |
| `color-mix()` | Dérivés de couleur calculés en CSS pur, sans variable supplémentaire dans theme.json |

---

## Dépendances

| Type | Nom | Version | Usage |
|---|---|---|---|
| PHP dev | `wp-coding-standards/wpcs` | ^3.1 | Linting PHP |
| PHP dev | `phpcompatibility/phpcompatibility-wp` | ^2.1 | Compat PHP/WP |
| PHP dev | `dealerdirect/phpcodesniffer-composer-installer` | ^1.1 | Installer PHPCS |

Aucune dépendance front. Aucune dépendance PHP runtime.

---

## Compatibilité cible

- WordPress : 6.5+
- PHP : 7.4+
- Navigateurs : tout navigateur supportant les fonctions CSS modernes utilisées par le thème, notamment `color-mix()` — Chrome 119+, Firefox 128+, Safari 17+
