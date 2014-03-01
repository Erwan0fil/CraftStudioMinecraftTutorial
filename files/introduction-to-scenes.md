[< Introduction to Maps and TileSets](introduction-to-maps-and-tilesets.md)  
<div class="text-align-right next-tutorial-link">
<p>Introduction to Scripts ></p>
</div>

---

# Introduction to Scenes

Scenes are the actual 3D worlds, where all assets (including other scenes) are combined together.

But scenes contains only one kind of object : **game objects**.  
To allow game objects to have different purposes and perform different actions, they are in turn composed of **components**.


Before we go further in the explications, opens the `Scenes` tab and creates a new scene named `Level` (for instance).

Yet again, the interface shows some similarities with the model's and map's interfaces.  
The left column is the list of game objects, _aka_ the __hierarchy__. Creates a game object and name it `Steve Camera`.  
The right column is the list of components for the selected game object.

- [Components](#components)

<a name="gameobjects"></a>
## Components

Game object are by default empty and purpose-less objects in the 3D world.
Their purpose and capabilities (representing the level geometry, a prop, playing a sound, representing an enemy and being killable by the player, etc...) are given by their components.

![The component toolbar](https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/intro-scenes/components-toolbar.png "The component toolbar")

In CraftStudio game objects may have up to seven types of components : 

### Transform

This is the "default" component, all game objects always have one transform. You can not create or remove such component manually.    
It is used to represent and manipulate the game object's position, rotation (orientation) and scale in the scene.

### Camera

A Camera component is a point of view through which you see the world.  
There is two types of cameras : 

- Perspective : the farther away the objects are from the camera, the smaller they appears on screen.
- Orthographic : the perspective is not renderer so all objects appear the same relative size, whatever their distance to the camera is.

You may have several cameras in the world to render different part of it (ie : one perspective camera for what the player see and one orthographic camera for the HUD), and/or when several players use the same screen (ie : split-screen local multiplayer).

Select the game object you created in the introduction and add a perspective camera to it (leave the field of view to 45 for now).

### ModelRenderer, MapRenderer and FontRenderer

These three components purpose is to display an asset (a model, a map or a font, respectively).  
Once you added the component you can select an asset to display and optionally set it's opacity.

Try it now : creates new game object named `Map` and add a map renderer to it, then select the map you created in the previous tutorial.

![The map displayed in the scene](https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/intro-scenes/maprenderer.png "The map displayed in the scene")

Now creates a third game object named `Steve`, then add a model renderer and set the displayed model to Steve's model.

### Scripts

Scripts are a kind of asset but they can also be added on a game object as a component called `ScriptedBehavior`.  
I wont talk about them now because they are the subject of the next tutorial, but know that they will be the source of most of the interactions in the game.

### Physics

This component will make the game object react to CraftStudio's physics engine ([BulletPhysics](http://bulletphysics.org)).  
We will use it very soon because the interactions between the map and Steve (the fact that your character don't fall through the map) will be powered by the physics engine.

### NetworkSync

This component allows to setup multiplayer features by enabling the game object's scripts to send messages to their counterparts over the network.


## Building the scene

You should already have added three game objects in the scene but it may not looks like super cool :

![The full scene, almost good](https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/intro-scenes/scene-full-1.png "The full scene, almost good")

### Parenting

We talked about parenting in the introduction to Models and Animations.

---

[< Introduction to Maps and TileSets](introduction-to-maps-and-tilesets.md)  
<div class="text-align-right next-tutorial-link">
<p>Introduction to Scripts ></p>
</div>