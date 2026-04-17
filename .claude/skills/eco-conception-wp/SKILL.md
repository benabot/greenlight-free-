---
name: eco-conception-wp
description: Use when reviewing, designing, or arbitrating a WordPress change with ecoconception, sobriete, or footprint-reduction constraints.
---

Quand cette skill est invoquee :
- repartir du besoin reel et supprimer ce qui n'est pas essentiel avant toute solution technique ; s'appuyer en priorite sur `RWEB 0001-0003` et `RWP 2.01` ;
- preferer la voie la plus legere et native : coeur WordPress, Gutenberg, `theme.json`, patterns, templates HTML, hooks cibles, puis CSS court, puis JavaScript en dernier recours ;
- verifier systematiquement le cout de la demande sur le DOM, le CSS, le JS, les medias, les requetes, le stockage, l'accessibilite, le SEO natif et la maintenabilite ;
- refuser par defaut les constructeurs de pages hors Gutenberg, les extensions gadget, les flux sociaux embarques, les carrousels, le defilement infini, les GIF animes, les animations decoratives, les polices CDN et les services tiers non indispensables ;
- privilegier un theme sobre compatible Gutenberg, un nombre limite d'extensions, des medias prepares en local, des formats adaptes, le lazy loading, le cache et le menage regulier des contenus, themes, extensions, revisions et sauvegardes.

Checklist de decision :
- le besoin est-il essentiel, utile et maintenable dans le temps ?
- WordPress natif couvre-t-il deja le besoin ?
- l'editeur Gutenberg suffit-il sans page builder additionnel ?
- l'ajout augmente-t-il la profondeur DOM, le poids CSS/JS ou le nombre de requetes ?
- peut-on eviter un service tiers, une police distante ou une extension supplementaire ?
- le media est-il dimensionne, compresse, au bon format et charge au bon moment ?
- la donnee doit-elle etre mise en cache, limitee ou supprimee apres usage ?
- la solution reste-t-elle accessible, mobile-first et compatible block theme ?

Garde-fous :
- `0` fonctionnalite non essentielle assumee ;
- `0` page builder hors Gutenberg sauf justification explicite ;
- `<= 10` extensions actives, ou justification claire ;
- `0` theme, extension, media ou contenu obsolete conserve sans raison ;
- `0` affirmation de performance sans mesure ou sans hypothese clairement signalee.

Sortie attendue :
- objectif ;
- recommandation principale ;
- alternative plus sobre si elle existe ;
- impacts sur DOM, CSS, JS, accessibilite, SEO, maintenabilite et compatibilite WordPress ;
- validations a lancer sur un parcours utilisateur, pas seulement sur la page d'accueil.

References a croiser en priorite :
- RWEB 5.0.0, notamment `0001`, `0004`, `0009`, `0010`, `0015`, `0046`, `0047`, `0049`, `0051`, `0069`, `0071`, `0116` et `0117` : [rweb.greenit.fr/fr/fiches](https://rweb.greenit.fr/fr/fiches)
- Referentiel WordPress cnumr, notamment `2.01`, `3.05`, `3.07`, `3.08`, `3.12`, `4.01`, `5.01`, `5.02`, `6.01` et `8.01` : [github.com/cnumr/best-practices-wordpress](https://github.com/cnumr/best-practices-wordpress)
- RGESN officiel : [arcep.fr - Referentiel general de l'ecoconception des services numeriques](https://www.arcep.fr/mes-demarches-et-services/entreprises/fiches-pratiques/referentiel-general-ecoconception-services-numeriques.html)

Rappel projet :
- signaler explicitement tout impact sur DOM, CSS, JS, accessibilite, SEO, maintenabilite et compatibilite WordPress ;
- ne pas casser la logique block theme ni la priorite donnee a `theme.json` ;
- si un compromis lourd est inevitable, expliquer clairement pourquoi il est accepte et quelle alternative plus sobre a ete ecartee.
