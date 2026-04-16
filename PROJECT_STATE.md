# PROJECT_STATE — Greenlight Free

Version : 0.1.0  
Date : 2026-04-16  
Statut global : **structurel complet, validation en cours**

---

## Vue d'ensemble

Greenlight Free est un thème WordPress block-first sans customizer. La structure de base est opérationnelle. Les priorités immédiates sont : validation WPCS, traductions et tests manuels sur WordPress local.

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
- Enqueue de `screen.css` avec versionnement filemtime.
- Aucun JS chargé.

### `inc/Accessibility.php`
- Statut : **stable**
- Skip link injecté via `wp_body_open`.

### `inc/Seo.php`
- Statut : **stable**
- SEO natif complet : meta description, canonical, Open Graph, JSON-LD (Organization, WebSite, Article).
- Détecte Yoast, SEOPress, Rank Math, The SEO Framework — se désactive si l'un d'eux est actif.

### `assets/css/screen.css`
- Statut : **mis à jour**
- CSS moderne : `clamp()`, `min()`, `oklch()`, `color-mix()`, `light-dark()`.
- Dark mode natif via `light-dark()` + `color-scheme: light dark`.
- Variables locales `--gl-*` pour les dérivés de couleur non couverts par theme.json.
- Aucune media query de breakpoint — layout fluide par défaut.
- À faire : tester le rendu dark mode sur macOS/iOS.

### `templates/`
- Statut : **complet pour les cas de base**
- `index.html` : liste paginée avec query-no-results.
- `single.html` : article complet — **manque nav prev/next** (voir TODO).
- `page.html` : page statique sans date.
- `archive.html` : archive catégorie/tag avec query-title et term-description.
- `search.html` : résultats de recherche avec query-title.
- `404.html` : délègue au pattern `greenlight-free/404`.

### `parts/`
- Statut : **minimal fonctionnel**
- `header.html` : site-title + navigation responsive.
- `footer.html` : site-title + site-tagline.

### `patterns/`
- Statut : **fonctionnel, textes à corriger**
- `404.php` : h1 + paragraph + bloc search.
- `no-results.php` : paragraph + bloc search.
- À faire : corriger les apostrophes manquantes dans les chaînes traduisibles.

### `languages/`
- Statut : **vide**
- Les chaînes PHP sont correctement balisées avec `__()` / `esc_html_e()`.
- À faire : générer `greenlight-free.pot`.

### `composer.json` / `phpcs.xml.dist`
- Statut : **stable**
- WPCS 3.x + PHPCompatibilityWP configurés.
- PHPCS couvre `functions.php`, `inc/`, `patterns/`.
- À faire : lancer `composer phpcs` et corriger les écarts.

---

## Décisions techniques clés

| Décision | Raison |
|---|---|
| Pas de customizer | Thème block-first — tout passe par `theme.json` et l'éditeur de site |
| `appearanceTools: false` | Évite l'exposition de réglages éditeur non maîtrisés |
| Polices système uniquement | Zéro requête réseau externe, chargement immédiat |
| Pas de JS par défaut | Aucun besoin identifié — WordPress natif suffit |
| SEO natif dans le thème | Fallback pour les sites sans plugin SEO, se désactive automatiquement |
| `color-scheme: light dark` | Dark mode sans JS, sans requête supplémentaire |
| `color-mix()` + `oklch()` | Dérivés de couleur calculés en CSS pur, sans variable supplémentaire dans theme.json |

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
- Navigateurs : tout navigateur supportant les fonctions CSS modernes (oklch, light-dark, color-mix) — Chrome 119+, Firefox 128+, Safari 17+
