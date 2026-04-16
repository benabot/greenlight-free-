# TODO — Greenlight Free

Version de travail : 0.1.0  
Thème WordPress block-first, sans customizer, sans dépendance front.

---

## En cours / à faire

### Validation

- [ ] Lancer `composer phpcs` et corriger les écarts remontés
- [ ] Vérifier manuellement le rendu sur WordPress local : index, single, page, archive, search, 404
- [ ] Tester la navigation clavier (skip link, menu, focus visible)
- [ ] Vérifier que le skip link pointe bien sur `#main-content` dans tous les templates

### Contenu et traductions

- [ ] Générer le fichier `.pot` (`languages/greenlight-free.pot`) — les chaînes PHP sont en place, le fichier manque
- [ ] Corriger les apostrophes manquantes dans les patterns (`n existe pas` → `n'existe pas`, `Aucun contenu trouve.` → `Aucun contenu trouvé.`)

### Templates

- [ ] Ajouter nav prev/next dans `templates/single.html` (`wp:post-navigation-link`)
- [ ] Envisager un template `page-no-title.html` si des pages sans titre sont utilisées (optionnel)

### theme.json / CSS

- [ ] Vérifier qu'aucun token de `screen.css` ne duplique une valeur déjà dans `theme.json`
- [ ] Décider si `color-scheme: light` dans `screen.css` doit évoluer vers un support `prefers-color-scheme: dark`

### Outillage

- [ ] Ajouter `.editorconfig` si absent (indentation, fin de ligne, charset)
- [ ] Vérifier que `composer install` fonctionne depuis zéro sur une machine propre

---

## Fait

- [x] Structure block theme complète : `templates/`, `parts/`, `patterns/`
- [x] `theme.json` : palette, typographie, espacements, layout, tokens custom
- [x] PHP modulaire dans `inc/` : App, Setup, Assets, Accessibility, Seo
- [x] Skip link dans `inc/Accessibility.php`
- [x] SEO natif complet dans `inc/Seo.php` (meta, canonical, OG, JSON-LD)
- [x] `assets/css/screen.css` court et sobre
- [x] `phpcs.xml.dist` configuré (WordPress-Core, WordPress-Docs, WordPress-Extra, PHPCompatibilityWP)
- [x] `composer.json` avec autoload PSR-4 et scripts lint/phpcs/phpcbf
- [x] Aucun JS chargé par défaut
- [x] Aucune dépendance front

---

## Hors périmètre

- Customizer (exclu par définition)
- Blocs custom
- Framework CSS ou JavaScript
- Options de thème supplémentaires
- E-commerce, formulaires complexes, analytics
