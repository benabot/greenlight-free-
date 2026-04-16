# SKILLS.md

## 1. Creer un template sans alourdir le DOM

Procedure :
- partir d un template existant si la variation est mineure ;
- utiliser un tag semantique direct (`main`, `article`, `header`, `footer`) avant tout `div` ;
- ajouter un wrapper uniquement s il apporte un role, une contrainte de layout ou un ancrage utile ;
- reutiliser les blocs natifs (`post-title`, `post-content`, `query`, `navigation`) avant tout contournement ;
- verifier la presence du skip link et de l id `main-content`.

Refus :
- si le besoin force plusieurs wrappers purement decoratifs ;
- si un pattern ou un template existant couvre deja le cas.

## 2. Ajouter un style sans augmenter la specificite

Procedure :
- essayer d abord `theme.json` pour les tokens, couleurs, espacements, typo et layout ;
- si `theme.json` ne suffit pas, ajouter une regle courte dans `assets/css/screen.css` ;
- utiliser des selecteurs faibles, de preference `:where(...)` ;
- eviter les chaines de selecteurs longues et `!important` ;
- verifier qu aucune regle ne duplique un token deja defini dans `theme.json`.

Refus :
- si le style repose sur une cascade fragile ;
- si la solution cree une dependance a une structure DOM non stable.

## 3. Ajouter une option de theme via `theme.json` plutot que via du code

Procedure :
- verifier si le besoin concerne couleur, typo, espacement, largeur, duotone, blocs, boutons ou layout ;
- si oui, modifier `theme.json` avant toute option PHP ;
- n utiliser PHP que pour un comportement editorial ou un hook que `theme.json` ne couvre pas ;
- documenter la raison quand le besoin sort du perimetre `theme.json`.

Refus :
- si l option sert seulement a contourner un manque de decision design ;
- si elle ajoute une personnalisation infinie sans benefice editorial net.

## 4. Ajouter une fonctionnalite PHP en respectant securite et sobriete

Procedure :
- placer la logique dans `inc/` dans un service cible ;
- accrocher la fonctionnalite a un hook WordPress natif ;
- sanitiser toute entree, echapper toute sortie, verifier nonce et capability si interaction ;
- garder `functions.php` limite au bootstrap ;
- supprimer toute logique qui n apporte pas une valeur directe au theme.

Refus :
- si la fonctionnalite releve plutot d un plugin ;
- si elle impose une interface d options ou une logique metier durable.

## 5. Verifier accessibilite, performance, SEO et maintenabilite

Checklist :
- accessibilite : landmarks, ordre des titres, focus visible, clavier, texte lisible ;
- performance : pas de JS ajoute sans besoin, CSS court, aucun asset externe ;
- SEO : description, canonical, Open Graph, JSON-LD sans duplication ;
- maintenabilite : responsabilites claires, diff court, pas de duplication structurelle ;
- compatibilite : blocs natifs, `theme.json`, hooks WordPress et WPCS.

## 6. Decider quand refuser l ajout de JS

Refuser le JS si :
- HTML ou CSS couvrent deja le besoin ;
- WordPress natif fournit deja le comportement ;
- le script sert seulement a masquer une dette HTML/CSS ;
- le gain utilisateur est faible face a la complexite ajoutee.

Accepter le JS seulement si :
- aucun equivalent natif viable n existe ;
- le besoin a une vraie valeur utilisateur ;
- le script reste petit, autonome, sans framework et charge conditionnellement.

## 7. Decider quand une fonctionnalite doit rester hors du theme

Hors du theme :
- logique metier ;
- formulaires complexes et traitements serveur dedies ;
- analytics et tracking ;
- e-commerce ;
- roles, permissions et workflows internes ;
- connecteurs API ;
- SEO avance, sitemaps complexes ou reporting ;
- optimisation media lourde ou pipeline d images.

Dans le theme seulement si :
- la fonctionnalite sert directement le rendu ;
- elle reste optionnelle, compacte et lisible ;
- elle ne transforme pas le theme en plugin.
