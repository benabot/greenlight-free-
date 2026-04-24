# TODO — Greenlight Free

Version de travail : 1.0.0  
Thème WordPress block-first, sans customizer, sans dépendance front.

---

## En cours / à faire

### Validation

- [x] Lancer `composer phpcs` et corriger les écarts remontés
- [ ] Vérifier manuellement le rendu sur WordPress local : index, single, page, archive, search, 404
- [ ] Tester la navigation clavier (skip link, menu, focus visible)
- [ ] Vérifier que le skip link pointe bien sur `#main-content` dans tous les templates

### Templates

- [x] Ajouter une navigation prev/next sobre sur les articles
- [ ] Envisager un template `page-no-title.html` si des pages sans titre sont utilisées (optionnel)

### theme.json / CSS

- [ ] Vérifier qu'aucun token de `base.css`, `listing.css`, `singular.css` ou `front-page.css` ne duplique une valeur déjà dans `theme.json`
- [ ] Décider si `color-scheme: light` dans `base.css` doit évoluer vers un support `prefers-color-scheme: dark`

### Outillage

- [ ] Ajouter `.editorconfig` si absent (indentation, fin de ligne, charset)
- [ ] Vérifier que `composer install` fonctionne depuis zéro sur une machine propre

---

## Fait

- [x] URL officielle du thème ajoutée dans `style.css` : https://beabot.fr/greenlight/
- [x] Version thème portée à 1.0.0 pour la release initiale
- [x] Titre du site agrandi avec une taille fluide modérée
- [x] Fichier `.pot` généré : `languages/greenlight-free.pot`
- [x] README utilisateur créé avec installation, activation, personnalisation, multilingue, FAQ et changelog
- [x] `screenshot.png` mis à jour au format WordPress 1200 × 900
- [x] Structure block theme complète : `templates/`, `parts/`, `patterns/`
- [x] `theme.json` : palette, typographie, espacements, layout, tokens custom
- [x] PHP modulaire dans `inc/` : App, Setup, Assets, Accessibility, Seo
- [x] Skip link dans `inc/Accessibility.php`
- [x] SEO natif complet dans `inc/Seo.php` (meta, canonical, OG, JSON-LD)
- [x] Feuilles CSS front courtes et ciblées (`base.css`, `listing.css`, `singular.css`, `front-page.css`)
- [x] `phpcs.xml.dist` configuré (WordPress-Core, WordPress-Docs, WordPress-Extra, PHPCompatibilityWP)
- [x] `composer.json` avec autoload PSR-4 et scripts lint/phpcs/phpcbf
- [x] Aucun JS chargé par défaut
- [x] Aucune dépendance front

### Contenu et traductions

- [x] Générer le fichier `.pot` (`languages/greenlight-free.pot`)
- [x] Corriger les libellés visibles et les formulations trop brutes dans les patterns et le footer

---

## Hors périmètre

- Customizer (exclu par définition)
- Blocs custom
- Framework CSS ou JavaScript
- Options de thème supplémentaires
- E-commerce, formulaires complexes, analytics
