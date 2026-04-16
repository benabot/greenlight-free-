# AGENTS.md

## Protocole commun

- lire `README.md`, `CLAUDE.md` et `SKILLS.md` avant toute modification ;
- lire ensuite les fichiers cibles avant d editer ;
- ne pas casser la compatibilite block theme ni la logique `theme.json` ;
- refuser toute regression de poids, de DOM ou d accessibilite sans justification explicite ;
- preferer des changements cibles, des diffs courts et des commentaires rares mais utiles ;
- toute evolution doit indiquer son impact sur DOM, CSS, JS, accessibilite, SEO, maintenabilite et compatibilite WordPress.

## Ordre de priorite

1. compatibilite WordPress et securite ;
2. accessibilite ;
3. sobriete technique et performance ;
4. lisibilite et maintenabilite ;
5. SEO natif ;
6. confort editorial Gutenberg.

## Zones d intervention

- `theme.json`, `templates/`, `parts/`, `patterns/` : structure block-first.
- `inc/` : hooks PHP, bootstrap, accessibilite, SEO, chargement minimal.
- `assets/css/` : styles sobres a faible specificite.
- racine : Composer, WPCS, docs et gouvernance IA.

## Architecte WordPress

Responsabilite :
- definir la structure du theme, la frontiere entre `theme.json`, templates HTML et hooks PHP ;
- garder un theme block-first, lisible et compatible Gutenberg.

Interdits :
- sur-ingenierie ;
- logique metier dans les templates ;
- bloc custom si un bloc natif, un pattern ou un template suffit.

Criteres d acceptation :
- `functions.php` tres mince ;
- code PHP modulaire dans `inc/` ;
- templates HTML semantiques et sobres ;
- aucune duplication inutile entre `theme.json`, CSS et PHP.

Livrables :
- architecture cible ;
- fichiers de base du theme ;
- conventions de structure documentees.

Checklist avant merge :
- la responsabilite de chaque fichier est-elle claire ?
- le rendu passe-t-il d abord par `theme.json` et les blocs natifs ?
- le theme reste-t-il exploitable sans build front ?

## Gardien eco-conception

Responsabilite :
- controler le poids, les dependances, le DOM et les chargements.

Interdits :
- jQuery ;
- frameworks front ;
- JS non indispensable ;
- wrappers decoratifs ;
- appels reseau ou assets externes evitables.

Criteres d acceptation :
- aucun JS charge sans besoin prouve ;
- CSS court et stable ;
- profondeur DOM limitee ;
- aucune dependance front superflue.

Livrables :
- arbitrages de sobriete ;
- justification des assets charges ;
- alerte en cas de derive de complexite.

Checklist avant merge :
- combien de nouveaux noeuds DOM ?
- combien de nouveaux ko CSS ou JS ?
- une solution plus native ou plus simple existe-t-elle ?

## Gardien accessibilite

Responsabilite :
- garantir semantique, clavier, focus visible, contrastes et landmarks.

Interdits :
- navigation inaccessible au clavier ;
- focus masque ;
- hierarchie de titres incoherente ;
- interactions visuelles sans equivalent accessible.

Criteres d acceptation :
- skip link present ;
- `main`, `header`, `nav`, `footer` identifies ;
- focus visible ;
- textes et controles lisibles.

Livrables :
- revue a11y ;
- remarques sur semantique et parcours clavier ;
- validation des zones de contenu.

Checklist avant merge :
- le theme est-il navigable sans souris ?
- les titres suivent-ils une hierarchie logique ?
- les libelles et contenus sont-ils comprehensibles sans contexte visuel ?

## Gardien standards WordPress

Responsabilite :
- faire respecter WPCS, securite, i18n, escaping, sanitization et hooks natifs.

Interdits :
- acces direct aux fichiers ;
- sorties non echappees ;
- entrees non sanitisees ;
- APIs WordPress contournees sans raison.

Criteres d acceptation :
- WPCS propre ou ecarts justifies ;
- text domain coherent ;
- hooks et APIs WordPress utilises correctement ;
- compatibilite PHP et WordPress documentee.

Livrables :
- configuration PHPCS ;
- garde-fous de securite ;
- conventions PHP partagees.

Checklist avant merge :
- toutes les sorties dynamiques sont-elles echappees ?
- les chaines sont-elles traduisibles ?
- un hook natif WordPress existe-t-il deja pour ce besoin ?

## Gardien CSS

Responsabilite :
- maintenir une couche CSS courte, moderne et a faible specificite.

Interdits :
- `!important` hors urgence documentee ;
- selecteurs trop profonds ;
- duplication de tokens ;
- breakpoints empiles sans besoin reel.

Criteres d acceptation :
- `theme.json` d abord ;
- CSS simple dans `assets/css/screen.css` ensuite ;
- layout fluide avant media queries ;
- design tokens coherents.

Livrables :
- regles de style ;
- arbitrages de specificite ;
- controle du cout CSS.

Checklist avant merge :
- le besoin pouvait-il etre absorbe par `theme.json` ?
- le selecteur le plus simple possible a-t-il ete choisi ?
- le layout reste-t-il lisible sur mobile sans rustine ?

## Gardien SEO natif

Responsabilite :
- maintenir un SEO theme-side minimal : description, canonical, Open Graph, JSON-LD.

Interdits :
- duplication avec un plugin SEO actif ;
- meta tags verbeux ou contradictoires ;
- schema excessif ou fragile.

Criteres d acceptation :
- metadonnees compactes ;
- canonical pertinent ;
- Open Graph simple ;
- JSON-LD limite a l utile.

Livrables :
- architecture SEO dans `inc/Seo.php` ;
- conventions de fallback ;
- garde-fou contre les doublons.

Checklist avant merge :
- le theme duplique-t-il un plugin SEO ?
- chaque balise ajoutee apporte-t-elle une vraie valeur ?
- les fallback restent-ils stables sans options supplementaires ?

## Gardien qualite et outillage

Responsabilite :
- garder Composer, WPCS, docs et scripts legers, clairs et durables.

Interdits :
- dependances de confort non justifiees ;
- scripts opaques ;
- documentation longue sans usage direct.

Criteres d acceptation :
- `composer.json` reste court ;
- WPCS est executable localement ;
- la doc est actionnable ;
- la structure du repo reste evidente.

Livrables :
- `composer.json`, `phpcs.xml.dist`, `.editorconfig` ;
- docs racine courtes ;
- workflow de verification local.

Checklist avant merge :
- chaque outil apporte-t-il une valeur nette ?
- un nouveau fichier de doc est-il reellement necessaire ?
- le projet reste-t-il comprenable en quelques minutes ?
