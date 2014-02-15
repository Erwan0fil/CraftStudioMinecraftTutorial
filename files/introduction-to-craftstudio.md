[< Tutorial introduction](tutorial-introduction.md)  
<div class="text-align-right next-tutorial-link">
[Introduction to Models and Animations >](introduction-to-models-and-animations.md)
</div>

---

# Introduction to CraftStudio

In this chapter, you will learn more about the CraftStudio ecosystem, how to install the editor and create a project.  
From now on "CraftStudio" is abreviated "CS" throughout the tutorial.


## CraftStudio's community

This tutorial is obviously not the only resource where you can look for information and help.

**[The official wiki](http://learn.craftstud.io)** contains several tutorials as well the obligatory [scripting reference](http://learn.craftstud.io/Reference/Scripting). You might want to bookmark it, as there are chances that you will consult it rather frequently.  
If you are not confident reading the wiki in english, you should know that it may have been translated to some extends by members of the community (you can change the language at the bottom of the page).

If you have particular questions that are not answered by the wiki or this tutorial, **[the forum](http://www.craftstudioforums.net/index.php?forum/)** is the next best place to look for answers.

If you are interested in the development of CraftStudio, you may be interested to [follow Elisée (the creator of CraftStudio) on Twitter](https://twitter.com/craftstudiodev).


## Installing CraftStudio

### A little terminology first

Before we begin, it's important that we all know exactly what we are talking about :

The **Launcher** is where you log-in with your account and it automatically checks and download updates for any of the CraftStudio components.

The Client (that I call the **Editor**) is the software that you use to create all the assets and the games. It is launched by the launcher when it has finished updating but you can also open it directly.

The **Server** is what hosts the projects that you create with the editor. By defaul, a local server is launched at the same time as the client so you can just create projects localy on your computer, but the server can be remote.

The **Server Manager** is used to configure, start and stop the server.

The **Runtimes** are the *game engines*, they are what makes your games runs. There is one per platform (Windows, Mac, Linux and Web).

The **Projects** are the games or movies that you edit via the editor. They are always hosted on a server.

The **Assets** are the game's components. It's what you create and assemble in a project. They are the Models, Animations, Maps, TileSets, Scenes, Scripts, Sounds, Fonts and Documents.


### Free vs Premium

CraftStudio comes with a free or a paid premium licence and you can upgrade from free to premium at any time very easily.

The free licence let's you create any number of projects and any kind of assets (except scripts).  
But you can't create script assets, you can't export or import assets from/to your projects and you can't export your game.  
The "only thing" the licence allows you to do is create stuffs, not testing themIt still gives you hours of fun and creation but you will quickly be pretty limited with the free licence if you want to pratice for real while following this tutorial.

The premium (or full) licence let's you do anything including creating scripts, exporting/importing assets from/to your projects and especially exporting your game.  
It can be purchased for 20 euros (while in Beta) on CraftStudio's website.


### Dowload and install

First [create an account on CraftStudio's website](http://craftstud.io/login). This account is mostlly used to log in CraftStudio, so be wise with the name you choose.

Then [download](http://craftstud.io/download) or [purchase](http://craftstud.io/purchase).

Proceed to the installation like with any other software. Note that the location you can choose only apply for the Launcher. The editor, server and runtimes are always installed in the same directory (`C:\Users\ [your user name]\AppData\Roaming\CraftStudio` on Windows).  

The icon that may have been created will open the launcher. Once logged in, you only need to open the launcher to update CraftStudio.  
If you [follow Elisée (the creator of CraftStudio) on Twitter](https://twitter.com/craftstudiodev) or the #CraftStudio hastag, you will know when an update is available.    
So if you want you can open the editor directly by pointing at (`C:\Users\ [your user name]\AppData\Roaming\CraftStudio\CraftStudioClient\CraftStudioClient.exe` on Windows).


## First steps in the editor (client)

![CraftStudio's editor (client)](https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/craftstudio-introduction/editor-interface.png "The interface of CraftStudio's editor")

What's interresting for now is mostly the project's list (the blurred area, to the left) and the friends list below it.

The project list is jut the list of the projects that the client is aware of


### Creating a project

Click on `Add or create project...` at the bottom of the project list.

![Interface to connect to a server](https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/craftstudio-introduction/server-connect-window.png "Interface to connect to a server")  
Remember that CS projects are all hosted on a server and that a local server was installed with CS and is launched (allong with the server manager) when the editor is launched itself.

To create a project and/or add a project to your project list, you first need to connect to a server. That's what this windows allows you to do.  
Don't change anything as we want to connect to our own local server. Just click on `Connect`.

![Interface of a server you are connected to](https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/craftstudio-introduction/server-interface.png "Interface of a server you are connected to")  
The window that opens lets you see the projects hosted on the server.  
As this is the first time you install CS, your window will be empty, so let's change that and create your first CS project !  
Click on `Create new project...`

![Interface to crete a new project](https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/craftstudio-introduction/create-project-interface.png "Interface to crete a new project")  
This new window lets you create a new project on the server you are connected to.  
For now, just enter a name (you will be able to update it later on) and change the `Membership policy` to `Invite-only` then click on `Create`.

![Add project to list](https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/craftstudio-introduction/add-to-list.png "Add project to list")  
Now you are back on the server's project list and your newly created project is now visible.  
As you can see the cartridge recap the project's name, description, membership policy, and number of members.  

Click on the button in the top-right corner that says `Add to my list` to add this project to your editor's projects list.  
Once you clicked the button the project is added in the project list, between the Community Hub project and the `Add or create project...` button.

To open the project, you can either click again on the button in the server's window that now says `Open`, or click on the project's button in the project list.

---

[< Tutorial introduction](tutorial-introduction.md)
<div class="text-align-right next-tutorial-link">
[Introduction to Models and Animations >](introduction-to-models-and-animations.md)
</div>
