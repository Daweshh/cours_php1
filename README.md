﻿# cours_php1
git :
# si on a qu'une branche, une fois que j'ai modifié ou créé un fichier :

- git add . // ajouter tous les fichiers locaux au git
- git status // pour info
- git commit -m "MESSAGE"  // mettre dans l'enveloppe
- git push -u origin "NOM_DE_LA_BRANCHE" // tout mettre en ligne

# si on a plusieurs branches, imaginons que je travaille sur le branche "dev" et une fois que j'ai modifié ou créé un fichier dans cette branche issue de la main :

- git branch // où je suis : dev
 - git add . // ajouter tous les fichiers locaux au git
 - git status // pour info
 - git commit -m "MESSAGE"  // mettre dans l'enveloppe
 - git push -u origin dev // tout mettre en ligne
- git checkout main // changer de branche vers la main
- git merge dev // fusionner le contenu de la branche dev sur la branche main
- git push origin main // pour avoir la même chose sur dev et sur main


# situationnel
- git fetch // voir les branches créées en ligne en local
