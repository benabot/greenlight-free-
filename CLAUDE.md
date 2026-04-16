# CLAUDE.md

## Regles de travail

- commencer par lire `README.md`, `AGENTS.md` et `SKILLS.md` ;
- ne pas sur-ingenierier ;
- proposer d abord la solution native WordPress ;
- prioriser `theme.json`, puis CSS custom, puis JavaScript en dernier recours ;
- limiter les wrappers HTML et la profondeur du DOM ;
- justifier chaque dependance et chaque hook ajoute ;
- preserver accessibilite, sobriete et compatibilite block theme ;
- travailler par petits changements atomiques ;
- fournir un plan avant toute modification complexe ;
- ne jamais introduire un bloc custom si un bloc natif, un pattern ou un template suffit.

## Ordre de decision

1. compatibilite WordPress et securite ;
2. accessibilite ;
3. simplicite structurelle ;
4. performance et sobriete ;
5. personnalisation editoriale.

## Interdits

- jQuery ;
- framework front ;
- build front non indispensable ;
- panneau d options inutile ;
- duplication entre `theme.json`, CSS et PHP ;
- JavaScript pour compenser un probleme de structure ou de CSS.
