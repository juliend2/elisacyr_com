---
title: Article de test
author: Élisa Cyr
date: 27 juin 2026
draft: true
---

Je te recommande de **TOUJOURS** avoir un paragraphe ici qui commence ton article, et qui précède les `* * *`.
C'est ce qui va déterminer ce qui s'affiche dans la page d'accueil, comme extrait pour cet
article.

* * * 

Tes articles devraient être dans ces fichiers au format "markdown"  (extension
.md). À noter que tes noms de fichiers markdown ne devraient jamais contenir
des espaces ou des caracteres spéciaux.
Pour le SEO, je te recommande aussi d'éviter les mots inutiles ("stop words") comme 'le',
'un', 'des', 'pour', etc.

Le frontmatter tout en haut n'est pas à proprement parler du markdown, mais
juste des clé-valeurs pour mettre des meta-données comme le titre, l'auteur, la
date, et si c'est un draft ou non.
Il doit toujours au moins y avoir les 3 premiers.

Dans ce document, tu peux avoir des titres:

## Premier titre

Contient du *italique* et du **bold**. Même du _**bold italique**_.

## Deuxieme titre

Tu peux avoir des tableaux

| Horaire                   | Activité                                                  |
| ------------------------- | --------------------------------------------------------- |
| 9 h à 11 h                | Bloc 1 : Gestion des courriels et de l’agenda             |
| 11 h à 11 h 15            | Pause                                                     |
| 11 h 15 à 12 h 30         | Bloc 2 : Rédaction d’infolettres et d’articles de blogue  |
| 12 h 30 à 13 h            | Pause dîner                                               |
| 13 h à 14 h               | Bloc 3 : Réunions et suivis clients                       |
| 14 h à 14 h 15            | Pause                                                     |
| 14 h 15 à 15 h 30         | Bloc 4 : Rédaction de rapports et tâches administratives. |

(Attention au formattage de tes tableaux. C'est fragile. hehe)

Et des listes:

* Quels sont mes trois objectifs prioritaires pour la semaine ?
* Quels projets nécessitent le plus de temps et d’attention ? 
* Quels rendez-vous ou échéances dois-je prévoir ? 
* Quelles tâches puis-je déléguer ou reporter ?

Et même des listes numérotées:

1. premier item
2. deuxieme item
3. etc

Et mets des liens comme tu le désires.

Qu'ils soient [absolus](https://google.com) ou [relatifs à ce site](/index.php).

Et même des images:


## Lorsque tu es prête à publier

Juste enlever 'draft: true', tout en haut. Ou mettre 'draft: false'.

## Pour de l'aide en markdown

- cet article est la [référence officielle](https://daringfireball.net/projects/markdown/syntax)
- et pour des features en extra c'est [ici](https://michelf.ca/projects/php-markdown/extra/)
