# Greenlight Free

Greenlight Free est une base de theme WordPress block-first tres legere, pensee pour remplacer un theme plus massif par une fondation sobre, durable et exploitable sans build front.

## Vision

- rester minimaliste sans sacrifier l accessibilite ;
- utiliser WordPress moderne avant toute surcouche ;
- privilegier `theme.json`, les templates HTML et les blocs natifs ;
- limiter le DOM, le CSS, le JS, les dependances et la dette technique.

## Principes

- aucun JavaScript charge par defaut ;
- aucune police externe, aucune librairie front, aucun framework CSS ;
- SEO natif minimal dans `inc/Seo.php` tant qu aucun plugin SEO ne prend la main ;
- HTML semantique, skip link, focus visible, layouts fluides ;
- PHP mince et modulaire dans `inc/`.

## Structure

- `style.css` : en-tete du theme WordPress.
- `theme.json` : design tokens, styles globaux, largeur de contenu.
- `templates/` : templates HTML du block theme.
- `parts/` : header et footer minimaux.
- `patterns/` : patterns PHP traduisibles.
- `inc/` : bootstrap, setup, accessibilite, assets, SEO.
- `assets/css/base.css` : fondations communes du front.
- `assets/css/listing.css`, `singular.css`, `front-page.css` : couches ciblees chargees selon le contexte.
- `assets/css/editor.css` : styles d edition minimaux pour Gutenberg.
- `composer.json` / `phpcs.xml.dist` : outillage PHP strictement utile.

## Installation

1. Installer les dependances PHP :

```bash
composer install
```

2. Symlinker le theme dans WordPress local :

```bash
ln -s /Users/benoitabot/Sites/greenlight-free /Applications/MAMP/htdocs/greenlight/wp-content/themes/greenlight-free
```

3. Activer le theme depuis l administration WordPress.

## Workflow local

- modifier d abord `theme.json` si un besoin de style ou de token peut etre couvert nativement ;
- n ajouter du CSS dans `assets/css/` que pour ce que `theme.json` ne couvre pas proprement, en privilegiant une feuille ciblee plutot qu un bundle global ;
- n ajouter du PHP que par hook ou service cible dans `inc/` ;
- ne pas ajouter de JS tant qu une solution native WordPress, HTML ou CSS suffit.

## Scripts Composer

- `composer phpcs` : lance WPCS et PHPCompatibility.
- `composer phpcbf` : corrige automatiquement une partie des ecarts de style.
- `composer lint` : alias simple vers `phpcs`.

## Regles de contribution

- garder les diffs courts et motives ;
- documenter tout impact sur DOM, CSS, JS, accessibilite, SEO et compatibilite WordPress ;
- preferer les blocs natifs, patterns et templates avant tout bloc custom ;
- justifier toute dependance et toute hausse durable de complexite.

## Philosophie Greenlight Free

Greenlight Free cherche une sobriete utile : moins de couches, moins de surprises, plus de stabilite. Le theme doit rester lisible par un humain, maintenable sur plusieurs annees et compatible avec une collaboration IA outillee.

## Differences avec Greenlight

- plus block-first ;
- plus centre sur `theme.json` ;
- aucune dependance front par defaut ;
- SEO natif minimal et isole ;
- documentation courte pour Codex et Claude Code.
