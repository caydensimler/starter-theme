# Starter Theme

This is a starter theme that builds on top of the [GeneratePress Child Theme by Addison Hall](https://github.com/addisonhall/generatepress-child "GitHub Link"). By integrating well-thought-out custom fields, I've created a content management system that, at it's core, can build most* designs. 

*As more websites are built using this theme I will continue to update it to ensure that it can integrate new designs. \**

---

## In Progress

- Implementing an expand/collapse content button that generates a basic toggle button for dropdowns and accordions. 

- Adding content types for post object data (title, author, tags, etc..). This would allow for the advanced builder template to exist on any post type.

## Changelogs & Version Control

### Changelogs
I use to have changelogs that I maintained in the early days of developing this; you can find those in `/changelogs` with the old theme files hiding in the "v1.0" branch. 

### Version Control

I have made a lot of changes since v1, so consider the current theme v2. Following the guidelines [here](https://semver.org/ "Semantic Versioning 2.0.0"), I will attempt to keep track of versions utilizing the Release functionality within Github.

## Core Concepts

1. Layered Content Generation
2. Reusability and Scalability
3. Add-On Library

---

### Layered Content Generation

Honestly, the best way I can explain this is to break it down based on the elements generated when a section is built using the Flexible Grid - soon to be renamed to Flexible Content - layout. From outside-in for each layout, the content is generated as follows:

![Content Generation Graphic](https://i.imgur.com/Oy1YzYa.png)

#### 1. Layout `<div class="layout flexible-grid">`

- The layout name is added as a class in order to allow CSS targeting for individual layout types. 
- I technically could just add these classes to the next level (Layout Wrapper) and remove this level, but I like the separation of having two "background level" containers on top of each other on the off-chance it's needed.

#### 2. Layout Wrapper `<div class="layout-wrapper">`

- The first level of the layout that you can start editing via custom fields. 
- The Layout Wrapper is one of the few places that inserts style directly into the HTML, however it is only used to set a background image for the layout. All other options presented - such as the background color or background image settings - output CSS classes.

#### 3. Grid Container `<div class="grid-container">`

- The grid container is primarily used to dictate the max-width of the content on the page, as well as its left and right padding when the viewport is less than the max-width. 
- I'd honestly prefer to change this class name to `.layout-container`, but `.grid-container` is what's being used by GeneratePress and I don't have the motivation to change that yet.

#### 4. Grid Display `<div class="grid-display">`

- The Grid Display portion is a primary key to defining how content is laid out. 
- Standard Grid Display layouts use CSS Grid for laying out each individual grid item into its own cell.
- Masonry Grid Display layouts use CSS grid for aligning columns, but relies on the Colcade JS library to move individual items into each column. 

#### 5. Grid Item `<div class="grid-item">`

- Each Grid Item is split up into its own cell and the cells are positioned based on the Grid Display. 
- Masonry Items - which are the direct decsandants of Grid Items inside a Masonry Grid Display - are assigned their column based on their height. 

#### 6. Content Wrapper `<div class="content text">`

- This layer is typically only utilized in the same way that the Layout Start is utilized; to allow CSS targeting for individual content types.

#### 7. Content Container `<div>` `<ul>`

- Typically this is where spacing (padding/margin), alignment, and animations are added to the content, but sometimes used to open HTML elements.

#### 8. Content `<h1>` `<p>` `<img>` `<a>` `<hr>` `<li>`

- The content layer holds individaul headings, paragraphs, lists, etc. 
- I know it feels like, "Finally we've made it to the content!" but I swear I try to use each layer to the best of my ability in order to provide form and function.

---

### Reusability and Scalability

#### Scalability

By integrating a kind of content-out development strategy, I've happened upon a MVC framework-type theme. The ACF data inputted on the backend, the user is presented with options between a Standard and Masonry grid. The Standard grid layout utilizes CSS Grid to organize each individual grid item below.  acts as the Model, the theme templating files that generate content (stuff like acf/content/text.php and inc/generate-settings.php) reperesent the View, and WordPress acts as the Controller between the two.

#### Reusability

I've created a custom post type called Content Blocks that allows individual layouts to be built as a single component to then be pulled into several different locations on the site. Whether it be a call to action, Featured Products section, or something else entirely, Content Blocks allow you a single place to edit content output on multiple pages.