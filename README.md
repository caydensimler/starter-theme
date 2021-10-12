# Starter Theme

This is a starter theme that builds on top of the [GeneratePress Child Theme by Addison Hall](https://github.com/addisonhall/generatepress-child "GitHub Link"). By integrating well-thought-out custom fields, I've created a content management system that, at it's core, can build most* designs. 

*As more websites are built using this theme I will continue to update it to ensure that it can integrate any layout.*

## Changelog

I use to have a dope changelog that I maintained in the early days of developing this. You can find those in the /changelogs folder and the old theme is in branch "v1.0".

## Core Concepts

1. Scalability
2. Layered Content Generation
3. Add-On Library
4. Minimize Duplicate CSS

### Reusability and Scalability

By integrating a kind of content-out development strategy, I've happened upon a MVC framework-type theme. The ACF data inputted on the backend, the user is presented with options between a Standard and Masonry grid. The Standard grid layout utilizes CSS Grid to organize each individual grid item below.  acts as the Model, the theme templating files that generate content (stuff like acf/content/text.php and inc/generate-settings.php) reperesent the View, and WordPress acts as the Controller between the two.

### Layered Content Generation

Honestly, the best way I can explain this is to break it down based on the divs generated when a section is built using the Flexible Grid - soon to be renamed to Flexible Content - layout. From outside-in for each layout, the content is generated as follows:

![Content Generation Graphic](https://i.imgur.com/Oy1YzYa.png)

1. Layout Start `<div class="layout">`

	- The layout name is added as a class in order to allow CSS targeting for individual layout types.

2. Layout Wrapper `<div class="layout-wrapper">`

	- The first level of the layout that you can start editing via custom fields. 
	- The Layout Wrapper is one of the few places that inserts style directly into the HTML, however it is only used to set a background image for the layout. All other options presented - such as the background color or background image settings - output CSS classes.

3. Grid Container `<div class="grid-container">`

	- The grid container is primarily used to dictate the max-width of the content on the page, as well as its left and right padding when the viewport is less than the max-width. 
	- I'd honestly prefer to change this class name to `.layout-container`, but `.grid-container` is what's being used by GeneratePress and I don't have the motivation yet to change that.

4. Grid Display `<div class="grid-display">`

	- The Grid Display portion is a primary key to defining how content is laid out. 
	- On the backend, the user is presented with options between a Standard and Masonry layout. The Standard layout utilizes CSS Grid to organize the grid items, while the Masonry layout generates classes to create a masonry grid via the [Masonry JS library](https://masonry.desandro.com/ "Cascading grid layout library").