<?php

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(array(
    'page_title'  => 'Global Content',
    'menu_title'  => 'Global Content',
    'menu_slug'   => 'global-content',
    'capability'  => 'edit_posts',
    'position'    => '59.8',
    'icon_url'    => 'dashicons-admin-site',
    'redirect'    => false
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Header Content',
    'menu_title'  => 'Header',
    'parent_slug' => 'global-content',
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Footer Content',
    'menu_title'  => 'Footer',
    'parent_slug' => 'global-content',
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Page Groups',
    'menu_title'  => 'Page Groups',
    'parent_slug' => 'global-content',
  ));
}