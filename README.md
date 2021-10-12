# Starter Theme

This is a starter theme that builds on top of the [GeneratePress Child Theme by Addison Hall](https://github.com/addisonhall/generatepress-child "GitHub Link"). By integrating well-thought-out custom fields, I've created a content management system that, at it's core, can build most* designs. 

*As more websites are built using this theme I will continue to update it to ensure that it can integrate any layout.

## Changelog

I use to have a dope changelog that I maintained in the early days of developing this. You can find those in the /changelogs folder and the old theme is in branch "v1.0".

## Core Concepts

1. Reusability and Scalability
2. Layered Content Generation
3. Add-On Library
4. Minimize Duplicate CSS

### Reusability and Scalability

By integrating a kind of content-out development strategy, I've happened upon a MVC framework-type theme. The ACF data inputted on the backend acts as the Model, the theme templating files that generate content (stuff like acf/content/text and inc/generate-settings) reperesent the View, and WordPress acts as the Controller between the two.

### Layered Content Generation

...
