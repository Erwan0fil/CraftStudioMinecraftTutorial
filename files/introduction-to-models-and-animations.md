<style type="text/css">
.float-left {
    float: left;
    margin: 5px;
}
.text-align-right {
    text-align: right;
}
</style>

[< CraftStudio introduction](introduction-to-craftstudio.md)  
<div class="text-align-right">
[Introduction to Maps and TileSets >](introduction-to-maps-and-tilesets.md)
</div>

# Introduction to Models and Animations

Enought chit-chat, let's start creating !  
In this tutorial, you will create the model, texture and walk animation of Steve, your avatar.


## Create you first asset

By now you should have oppened your project and the interface should looks like this :

![Interface of a CS project](https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/intro-models-animations/project-interface.png "Interface of a CS project")

On the top left you have the assets icons, then three buttons to create an asset, create a folder and duplicate an asset just above the asset list which is for now empty.

The model pane is the first one and is already selected, so lets create your first model by clicking on the `Create model` button (the left one).

<a href="https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/intro-models-animations/minecraft-steve.png" title="Click to view full-size">
<img class="float-left" src="https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/intro-models-animations/minecraft-steve.png" alt="Minecraft's Steve" Title="This is Steve" height="200px">
</a>

A new window opens an asks you to enter a name, just type `Steve`. Click on the `Create` button (or press `Enter`) and the new model opens right away.

Before we begin lets think about Steve and what it is made of.

As you can see in the image on the left (click on it to view full size), Steve is a very simple model because it is composed of six blocks : one head, one trunk, two arms and two legs.  
The blocks themselves are very simple since the head is a cude, each arm and leg have the same size and are just elongated rectangular parallelepiped ("3D rectangles"), and the trunk is like an arm but twice as wide.  


## The Interface

![Interface of the model editor](https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/intro-models-animations/model-interface.png "Interface of the model editor")

On the right, you have the list of blocks (models are only composed of blocks) and the two buttons to create and duplicate a block.  

In the middle you have the main window, it's in here that you will see the model and do some manipulations on the blocks.  

Below you can find the chat and to the right, the list of people that have the model opened (with whom you can discuss via the chat). *Remember that one of the main feature of CraftStudio is that it's multiplayer, you can built any asset with several other people at the same time.*

On the left, you will find the `Build`, `Paint` and `Animate` panes which are the three tasks needed to build a model.


## Build : assemble the blocks

In CS, a model is only composed of blocks, which are always cuboid (rectangular parallelepiped). This limits how your model will look (in comparison with a model created in Blender or 3ds Max for instance) but cuboids are really simple to use, so that's great for newcomers (as well as anyone that is not a 3D modeler...).

Create your first block by clicking on the `Create block` button then give him the name `Trunk` in the window that opens (like for assets) as this block will be Steve's trunk.

Now a white rectangle as appeared in the main window, you can turn around it by having the mouse in the main window and moving it while pressing the mouse wheel (or `Left Alt` + `Left Mouse` buttons).  
The chat window also gives you instructions on how to move around the model's window.

![Your first block](https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/intro-models-animations/first-block.png "Your first block")

If you click anywhere in the main window, it will deselect the block. To select it again, click on it in the main window or in the blocks list.  

Now as you can see in the left panel, the position of the block is `0` on the `x` axis, `32` on the `y` axis and `0` on the `z` axis. New blocks will often be created at this position.  
We, however want the block to be at a position of `0, 0, 0`, so we need to lower it on the `y` axis.

To do that, you can either update the value of the position directly in the field in the left panel (click inside the field then write `0` instead of `32`) or you can drag the cube down in the main window by clicking (and holding) on the green arrow then moving the mouse down until the green field (the middle one) displays `0`.

It's the same principle to change the position on the other axis, as well as to change the other block's components (the rotation, size, pivot offset and scale).  
Try different things to get used to it.

Now we need to give the block the proper size but we don't know which size to give yet.  
Click on the image of Steve above to view it at full size, then count the number of pixels on each block. Remember that the legs and arms have the same size and that the trunk is just twice as wide as an arm.

- the head is 8x8x8 pixels
- an arm or leg is 4x4x12 pixels
- so the trunk is 8x4x12 pixels (8x12 for the front and back faces)

It was important to count the pixels because in CS, the size of the model's blocks are expressed in `texture pixels`, or how much pixels will they take on the model's texture.

In the left pane, click on the middle button, the one that says `Block size (C)`.  
You can see that the values in the fields and the handles have changed.  

The default block size is always `16, 16, 16`. Now just update the values.  
Depending which one you put is each field, the block may actually not look like what you want :
![Updating the block's size](https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/intro-models-animations/block-size.png "Updating the block's size")

So lets correct the values :  
The height of the trunk is 12 pixels and the height is always the `y` component (the green one), so write 12 in the middle field.  
The width of the trunk is 8 pixels so you need here to update the `x` component (the red one), while the thickness is determined by the `z` component (the one that measure 4 pixels).

![Updating the block's size](https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/intro-models-animations/block-size-fixed.png "That's more like it !")

You may also have noticed that the purple lines that you can see on the white rectangle in the left panel have changed when you updated the block's size. We will see what they mean when we will texture the model.

OK, we have one block ! Five to go !

Do the head first, it's a cube that measure 8 pixels on all axis.  
Create a new block, name it `Head`, then update its size before moving it.  

Now we have to move the head over the trunk.  
If you had the trunk block selected when you created the head, **the head is now a child of the trunk**. It looks like this in the blocks list :

![The head block is a child of the trunk block](https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/intro-models-animations/child-block.png "The head block is a child of the trunk block")

Otherwise, it looks like this :

![The head block is not a child of the trunk block](https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/intro-models-animations/not-child-block.png "The head block is not a child of the trunk block")

The difference is important because the position and rotation of child blocks are **relative** to their parent's, instead of being absolute (which is the same as being relative to the model's origin).  
That will impact the position's and rotation's values displayed in the fields and most of all, all children of a block will move at the same time as their parent when its position or rotation is modified.

You can try it yourself, but first be sure that the head is a child of the trunk. If it's not the case already, just drap-and-drop the head's cartridge in the blocks list over the trunk's cartridge (do the opposite to de-parent).  
Then select the trunk and move it, you will see that the head is also moving !

The other advantage to parent the head to the trunk is that it make the positioning of the head very easy.  
First move the head at `0, 0, 0`. The head is now "inside" the trunk, both blocks centers are at the same position. All you have left to do is move the head up by `10` units (remember that the height, or moving up or down means working on the green axis).

![The head is now correctly placed over the trunk](https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/intro-models-animations/head-positioning.png "The head is correctly placed over the trunk")

And four blocks to go !  

Create a new block, name it `Left Arm`, parent it to the trunk, change its size (as we have seen, the height is 12 pixels), move it to `0,0,0`, then move it sideway so that the arm block appears to the left of the trunk.

> But which side is the left of the model ? 

That's a very good question, thanks for asking !

The answer is simple to remember : the red arrow points to the left (toward the positiv `x`), the green arrow points to the top (toward the positiv `y`) and the blue arrow point to the front (toward the positiv `z`).  
If you didn't moved to much with the camera, there is a chance that you face the front of the model, so you have to put the arm's block to the right of the trunk (the correct position is `6,0,0`).

Do the same for the other arm and both legs.

But wait !  
There is better way to do that than doing all the process over again. You can just **duplicate** the left arm. The new block will be created with all the same characteristics already.

While having the left arm block selected, click the `Duplicate Model Block` button (at the top-right of the blocks list) and name the new block `Right Arm`.  
The new block looks exactly like the left arm, is already parented to the trunk and is at the same position, so all you have to do is push the right arm to the right of the trunk.

Do the same for both legs and *voilà*, you have created your first model with CraftStudio !

![The model's structure is now completed](https://dl.dropboxusercontent.com/u/51314747/CraftStudio/MinecraftTutorial/img/intro-models-animations/model-blocks-complete.png "The model's structure is now completed")

Wel, actually all we have for now is a hyerarchie of motionless white blocks...

We still have to texture the blocks and animate them, so lets get to it !

## Paint : the texture


## Animate : get the blocks moving


[< CraftStudio introduction](introduction-to-craftstudio.md)  
<div class="text-align-right">
[Introduction to Maps and TileSets >](introduction-to-maps-and-tilesets.md)
</div>
