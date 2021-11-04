# Starter Theme

This is a starter theme that builds on top of the [GeneratePress Child Theme by Addison Hall](https://github.com/addisonhall/generatepress-child "GitHub Link"). By integrating well-thought-out custom fields, I've created a content management system that, at it's core, can build most* designs. 

*As more websites are built using this theme I will continue to update it to ensure that it can integrate new designs. \**

---

## Coming Soon

New or updated features that are either currently being worked on or are in the queue.

- Implementing an expand/collapse content button that generates a basic toggle button for dropdowns and accordions. 

- Adding more post content types: next/previous, categories, and featured image.

- Building ontop of the Post Query layout to include querying related posts based on tags chosen or dates selected. Also potentially creating a way to define "Featured Posts" for any post type. I still need to implement Categories and Excerpts into post query content, but I'll need to add those as Flexible Content first.

- Rebuilding Sub-Menu (both ACF and CSS portions).

## Changelogs & Version Control

### Changelogs
I use to have changelogs that I maintained in the early days of developing this; you can find those in `/changelogs` with the old theme files hiding in the "v1.0" branch. 

### Version Control

I have made a lot of changes since v1, so consider the current theme v2. Following the semantic guidelines for Version Control [here](https://semver.org/ "Semantic Versioning 2.0.0"), I will attempt to keep track of versions utilizing the Release functionality within Github.

## Core Concepts

1. Layered Content Generation
2. Reusability and Scalability
3. Add-On Library

---

### Layered Content Generation

Honestly, the best way I can explain this is to break it down based on the elements generated when a section is built using the Flexible Content layout. From outside-in for each layout, the content is generated as follows:

![Content Generation Graphic](https://i.imgur.com/RtqvSv7.png)

#### 1. Layout Type `<div class="flexible-grid">` `<div class="post-query">`

- The [Layout Type](#layout-types) is added as a class in order to allow CSS targeting for individual layout types. 
- I technically could just add these classes to the next level (Layout Wrapper) and remove this level, but I like the separation of having two "background level" containers on top of each other on the off-chance it's needed.

#### 2. Layout Wrapper `<div class="layout-wrapper">`

- The first level of the layout that you can start editing via custom fields. 
- The Layout Wrapper is one of the few places that inserts style directly into the HTML, however it is only used to set a background image for the layout. All other options presented - such as the background color or background image settings - output CSS classes.

#### 3. Layout Container `<div class="layout-container">`

- The layout container is primarily used to dictate the max-width of the content on the page, as well as its left and right padding when the viewport is less than the max-width. 

#### 4. Layout `<div class="layout">`

- The Layout portion is a primary key to defining how content is laid out. 
- Standard layouts use CSS Grid for laying out each individual grid item into its own cell.
- Masonry layouts use CSS grid for aligning columns, but relies on the Colcade JS library to move individual items into each column. 

#### 5. Layout Item `<div class="layout-item">`

- Each Layout Item is split up into its own cell and the cells are positioned based on the Layout. 
- Masonry Items - which are the direct descendants of Layout Items inside Masonry layouts - are assigned their column based on their height. 

#### 6. Content Wrapper `<div class="text">` `<div class="image">` `<div class="link">`

- This layer is typically only utilized in the same way that the Layout Start is utilized; to allow CSS targeting for individual content types.

#### 7. Content Container `<div class="content-container">`

- Typically this is where spacing (padding/margin), alignment, and animations are added to the content.

#### 8. Content `<h1>` `<p>` `<img>` `<a>` `<hr>` `<li>`

- The content layer holds individaul [Content Types](#content-types). 
- I know it feels like, "Finally we've made it to the content!" but I swear I try to use each layer to the best of my ability in order to provide form and function.

---

### Reusability and Scalability

#### Scalability

By integrating a kind of content-out development strategy, I've happened upon a MVC framework-type theme. The ACF data inputted on the backend acts as the Model, the theme templating files that generate content (stuff like acf/content/text.php and inc/generate-settings.php) reperesent the View, and WordPress acts as the Controller between the two.

#### Reusability

I've created a custom post type called Content Blocks that allows individual layouts to be built as a single component to then be pulled into several different locations on the site. Whether it be a call to action, Featured Products section, or something else entirely, Content Blocks allow you a single place to edit and preview content that is output on multiple pages.

---

#### Layout Types

Layout Types integrate [Content Types](#content-types) via the Layered Content Generation methods outlined above.

1. Flexible Content
2. Post Query
3. Content Block
4. Shortcode
5. Layout Wrapper

---

#### Content Types

The following are all the content types available to be used within the Flexible Content layout.

##### Basic Content

1. [Text](https://i.imgur.com/U5aE1EN.png)
2. [Text Area](https://i.imgur.com/ALMMLL7.png)
3. [WYSIWYG](https://i.imgur.com/xlN1zvf.png)
4. [Link](https://i.imgur.com/mOjtkJX.png)
5. [List](https://i.imgur.com/9NiIXSL.png)
6. [Image](https://i.imgur.com/cGPecH5.png)
7. [Line Separator](https://i.imgur.com/Md5Bljh.png)

##### Post Content

1. [Post Title](https://i.imgur.com/utIKTLS.png)
2. [Post Date](https://i.imgur.com/aj05zDY.png)
3. [Post Author](https://i.imgur.com/iqGl6MD.png)
4. [Post Tags](https://i.imgur.com/hSJ52m1.png)