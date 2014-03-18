[< Tutoriel introduction](tutoriel-introduction.md)  
<div class="text-align-right next-tutorial-link">
[Introduction aux Modèles et Animations >](introduction-aux-modèles-et-animations.md)
</div>

---

# Introduction à CraftStudio

Dans ce chapitre, nous allons en apprendre plus sur l'environnement de CraftStudio, comment installer l'éditeur et créer un projet.
A partir de maintenant "CraftStudio" sera abrégé par "CS" partout dans le tutoriel.

- [Brêve histoire de CraftStudio](#history)
- [Communauté de CraftSutdio](#community)
- [Installer CraftStudio](#install)
- [Premiers pas dans l'éditeur (client)](#first-step)
- [Créer un projet](#create-project)


<a name="history"></a>
## Brêve histoire de CraftStudio

Après quelques années en tant que développeur dans l'industrie du jeu vidéo, Elisée Maurer a commencé le développement de CraftStudio fin 2011 avec un but en tête : faire que le développement de jeux vidéo soit aussi simple, fun et social que possible.

Première vidéo sur [la chaîne de CraftStudio](http://www.youtube.com/user/craftstudiodev) :
<iframe width="640" height="360" src="//www.youtube.com/embed/KA_AhtkmRYQ" frameborder="0" allowfullscreen></iframe>

Une campagne de financement participatif [s'est déroulée avec succès sur Indiegogo](http://www.indiegogo.com/projects/craftstudio-real-time-collaborative-game-making) en March 2012, ammassant ainsi plus de 23000 $ alors qu'en ce temps il n'y avait qu'une version Windows, et que la version pre-alpha ne permettait pas encore de créer des jeux puisqu'on ne pouvais pas encore créer de scripts.

<iframe width="640" height="360" src="//www.youtube.com/embed/BFVsgFsLzdQ" frameborder="0" allowfullscreen></iframe>

En Novembre 2012, CraftStudio fut présenté à la MineCon annuelle à Paris (convention Minecraft). [MineMatcher](http://play.craftstud.io/games/MineMatcher), et CraftFighter (trailer plus bas) furent tout deux créés par des membres la communauté à cette occasion.

<iframe width="640" height="360" src="//www.youtube.com/embed/TjpW-K70WwM" frameborder="0" allowfullscreen></iframe>

La beta de CraftStudio sortit en Mars 2013 avec de nouvelles fonctionnalités majeures.
Depuis, CraftStudio est toujours en beta mais bénéficit régulièrement de nouvelles fonctionnalités et corrections.


<a name="community"></a>
## Communauté de CraftSutdio

Ce tutoriel n'est évidemment pas la seule ressource où vous pouvez trouver des informations et de l'aide.

**[Le wiki officiel](http://learn.craftstud.io)** contient plusieurs tutoriels mais aussi très utiles [références de scripting](http://learn.craftstud.io/Reference/Scripting). Vous feriez mieux de les garder à porté de main, puisqu'il y a de grande chances pour que vous les consultiez fréquemment.
(Vous pouvez changer la langue en bas de la page)

[Ne négliger pas l'ancien wiki](http://fr.craftstudio.wikia.com/wiki/Wiki_CraftStudio) qui contient encore beaucoup de ressources très utiles.

Si vous avez une question dont vous ne trouvez pas la réponse sur les wikis ou sur ce tutoriel, **[le forum](http://www.forum.craftstudio.fr/)** est le prochain meilleur endroit pour trouver des réponses.

Si suivre le développement de CraftStudio vous intéresse, alors je vous invite à [suivre @CraftSudioDev sur Twitter](https://twitter.com/craftstudiodev).


<a name="install"></a>
## Installer CraftStudio

### Tout d'abord un peu de terminologie

Avant de commencer, il est important de savoir de quoi nous parlons exactement :

Le **Launcher** est là où vous vous connectez avec votre compte et qui automatiquement vérifie et télécharge les mises à jour de n'importe quel composant de CraftStudio. 

Le Client (que j'appelle l'**Editeur**) est le logiciel que vous utilisez pour créer toutes les ressources et les jeux.Il est démarré par le launcher quand il a terminé de télécharger les mises à jour, mais vous pouvez aussi le démarrer directement.

Le **Serveur** est ce qui héberge les projets que vous créez avec l'éditeur. Par défaut, un serveur local est démarré en même temps que le client pour que vous puissiez créer des projets localement sur votre ordinateur, mais le serveur peut être sur un autre ordinateur éloigné.

Le **Manager du Serveur** est utilisé pour configuer, démarrer et éteindre le serveur. 

Les **Runtimes** sont le *moteur des jeux*, c'est ce qui fait fonctionner les jeux. Il y en a un par plateforme (Windows, Mac, Linux et Web).

Les **Projets** sont les jeux et films que vous créez via l'éditeur. Ils sont toujours hébergés sur un serveur. 

Les **Ressources** sont les composants des jeux. C'est ce que vous créez et assemblez dans le projet. Ce sont les modèles, animations, maps, tilesets, scènes, scripts, sons, polices de caractères et documents.


### Gratuit vs Premium

CraftStudio fournit une licence gratuie et une licence premium qui est payante et vous pouvez passez de gratuit à payant très facilement et quand vous le souhaitez.

La licence grauite vous permet de créer un nombre de projets et de ressources illimité (excepté les scripts).
Mais vous ne pouvez pas créer de scripts, vous ne pouvez exporter ou importer des ressources à partir ou vers vos projets et vous ne pouvez tester vos jeux.
La "seule chose" que vous permets la licence gratuite est de créer des choses mais pas de les tester. Cela vous procurera des heures de fun et de création mais vous allez rapidement être limité avec la licence gratuite si vous voulez vous entraîner pour de vrai en suivant ce tutoriel.

La licence payante vous permet de tout créant en incluant les scripts, l'export et l'import de ressources à partir ou vers vos projets et surtout le fait de pouvoir tester ses jeux.
Elle peut être achetée pour 20 € (valable durant la béta)sur le site Internet de CraftStudio.
 

### Téléchargement et installation

First [create an account on CraftStudio's website](http://craftstud.io/login). This account is mostly used to log in CraftStudio, so be wise with the name you choose.

Then [download](http://craftstud.io/download) or [purchase](http://craftstud.io/purchase).

Proceed to the installation like with any other software. Note that the location you can choose only apply for the Launcher. The editor, server and runtimes are always installed in the same directory (`C:\Users\ [your user name]\AppData\Roaming\CraftStudio` on Windows).  

The icon that may have been created will open the launcher. Once logged in, you only need to open the launcher to update CraftStudio.  
If you [follow @CraftSudioDev on Twitter](https://twitter.com/craftstudiodev) or the #CraftStudio hashtag, you will know when an update is available.    
So if you want you can open the editor directly by pointing at (`C:\Users\ [your user name]\AppData\Roaming\CraftStudio\CraftStudioClient\CraftStudioClient.exe` on Windows).


<a name="first-step"></a>
## Premiers pas dans l'éditeur (client)

### Breakdown of the interface

<img src="https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/craftstudio-introduction/editor-interface.png" alt="CraftStudio's editor (client)" class="img-hover">
Mose the mouse over the image.

#### Left column

First look at the left column. At the top, you have a row of buttons `Home` (currently selected), `Store`, `Community Projects` and `Help & Resources`.

Below you have the projects list with always one project that you can't remove: the Community Hub.  
We will see below how to add projects to the list. 

Below the projects list you will find your friends list. Being friend with other CraftStudio users just allows you to chat together through CraftStudio.

Below the is the `Settings` and `My Server` buttons. This last button opens the Server Manager which allows you to manage your local server.

Finally you will find at the bottom of the column the online status indicator (click to toggle online state), the number of online players (click to refresh) and the editor's version number (click to open the `About` window).  
You can perfectly use CraftStudio when you are offline, but you won't be able to chat with your friends and you won't be able to connect to servers which require authentication so you won't be able to access the projects on those servers.  

**If you have to use CraftStudio offline** (because you don't have Internet or because the ports used by the CS master server or other servers are blocked), you need to disable the authentication on your local server : click on the `My Server` button, go to the `Settings` tab then click on `Disabled`. Go back to the `Server Status` tab then stop the server and start it again.

You can change the projects list/friends list size by dragging the separation between the two. You will often be able to change a window's size by dragging a separation between it and another component of the interface.  
You can hide/display the left column by clicking just to the right of it (that's very useful on small screens).

#### Community Projects

Clicking on the orange tab at the top of the left column changes the main interface to display the community projects.  
This is basically the list of almost all projects hosted on live CS servers, including your local server.  
Only the project whose membership policy is `Invite-only` are not listed.

#### Help & Resources

This tab gathers a few links to tutorials an other resources on the wiki to help you get started with creating a game.


<a name="create-project"></a>
## Creating a project

Click on the `Add or create project...` button at the bottom of the project list.

![Interface to connect to a server](https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/craftstudio-introduction/server-connect-window.png "Interface to connect to a server")  
Remember that CS projects are all hosted on a server and that a local server was installed with CS and is launched along the editor (and the server manager).

To create a project and/or add a project to your project list, you first need to connect to a server. That's what this windows allows you to do.  
Don't change anything as we want to connect to our own local server. Just click on the `Connect` button.

![Interface of a server you are connected to](https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/craftstudio-introduction/server-interface.png "Interface of a server you are connected to")  
The window that opens lets you see the projects hosted on the server.  
As this is the first time you install CS, your window will be empty, so let's change that and create your first CS project !  
Click on `Create new project...`

![Interface to crete a new project](https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/craftstudio-introduction/create-project-interface.png "Interface to crete a new project")  
This new window lets you create a new project on the server you are connected to.  
For now, just enter a name (you will be able to update it later on) and change the `Membership policy` to `Invite-only` (so that your project become private) then click on `Create`.

Projects have one of the three Membership policy :

- Open (public) : anyone con join without approval
- Approval required : anyone can ask to join the project, and be approved or disapproved by the project's administrator(s)
- Invite-only (private) : the project does shows up in the Community Projects, and is only visible in the server's projects list if you are an administrator on this server.

![Add project to list](https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/craftstudio-introduction/add-to-list.png "Add project to list")  
Now you are back on the server's project list and your newly created project is now visible.  
As you can see the cartridge recap the project's name, description, membership policy, and number of members.  

Click on the button in the top-right corner that says `Add to my list` to add this project to your editor's projects list.  
Once you clicked the button the project is added in the project list, between the Community Hub project and the `Add or create project...` button.

You can move a project up/down in the editor's projects list by clicking and dragging its cartridge.  
You can also remove a project from the project list by clicking on the bin that appears when the mouse hovers the cartridge and the project is not opened in the editor. *Removing a project from the projects list does not remove or delete the project from the server.*

To open the project, you can either click again on the button in the server's window that now says `Open`, or click on the project's button in the project list.

---

[< Tutoriel introduction](tutoriel-introduction.md)
<div class="text-align-right next-tutorial-link">
[Introduction aux Modèles et Animations >](introduction-aux-modèles-et-animations.md)
</div>
