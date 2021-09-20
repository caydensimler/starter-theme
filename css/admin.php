<?php

add_action('admin_head', 'disable_content_block_input');
function disable_content_block_input() {
  echo '<style>
    body.post-type-content-block div[data-name="page-banner_banner-type"] .acf-button-group label:last-child {
      display: none;
    }

    body.post-type-content-block div[data-name="page-banner_banner-type"] .acf-button-group label:nth-last-child(2) {
        border-radius: 0 3px 3px 0;
    }
  </style>';
}

add_action('admin_head', 'acf_minor_updates');
function acf_minor_updates() {
  echo '<style>
    body .acf-field[data-name="drag-and-drop"] .layout[data-layout="layout-wrapper-start"],
    body .acf-field[data-name="drag-and-drop"] .layout[data-layout="layout-wrapper-start"] .acfe-flexible-opened-actions,
    body .acf-field[data-name="drag-and-drop"] .layout[data-layout="layout-wrapper-end"],
    body .acf-field[data-name="drag-and-drop"] .layout[data-layout="layout-wrapper-end"] .acfe-flexible-opened-actions {
      background: #EFF6FB;
    }

    body .acf-field[data-name="drag-and-drop"] .layout[data-layout="layout-wrapper-start"] .acf-tab-wrap,
    body .acf-field[data-name="drag-and-drop"] .layout[data-layout="layout-wrapper-end"] .acf-tab-wrap,
    body .acf-field[data-name="drag-and-drop"] .layout[data-layout="content-block"] .acf-tab-wrap {
      background: inherit;
    }

    body .acf-field[data-name="drag-and-drop"] .layout[data-layout="layout-wrapper-start"] .acf-fc-layout-order,
    body .acf-field[data-name="drag-and-drop"] .layout[data-layout="layout-wrapper-start"] .acf-icon,
    body .acf-field[data-name="drag-and-drop"] .layout[data-layout="layout-wrapper-end"] .acf-fc-layout-order,
    body .acf-field[data-name="drag-and-drop"] .layout[data-layout="layout-wrapper-end"] .acf-icon {
      background: #CEE4F3;
    }

    body .acf-field[data-name="drag-and-drop"] .layout[data-layout="content-block"],
    body .acf-field[data-name="drag-and-drop"] .layout[data-layout="content-block"] .acfe-flexible-opened-actions,
    body .acf-field[data-name="drag-and-drop"] .layout[data-layout="content-block"] .acf-tab-wrap .acf-tab-group li a {
      background: #E6EFE8;
    }

    body .acf-field[data-name="drag-and-drop"] .layout[data-layout="content-block"] .acf-fc-layout-order,
    body .acf-field[data-name="drag-and-drop"] .layout[data-layout="content-block"] .acf-icon {
      background: #CDDFD1;
    }

    ul.acf-swatch-list.acf-hl > li { width: 25%; margin-right: 0; }
    ul.acf-swatch-list .swatch-toggle { border-radius: 0; border: none; }

    ul.acf-swatch-list input[type=radio]:checked ~ .swatch-toggle .swatch-color { border: 3px solid white; }

    ul.acf-swatch-list input[type=radio][value="#F9F9F9"]:checked ~ .swatch-toggle .swatch-color,
    ul.acf-swatch-list input[type=radio][value="#EBEBEB"]:checked ~ .swatch-toggle .swatch-color,
    ul.acf-swatch-list input[type=radio][value="#FFFFFF"]:checked ~ .swatch-toggle .swatch-color {
      border: 1px solid black;
    }

    .column-acf-description { width: 750px; }

    body  .layout[data-layout="wrapper_start"],
    body  .layout[data-layout="wrapper_start"] .acfe-flexible-opened-actions,
    body  .layout[data-layout="wrapper_end"],
    body  .layout[data-layout="wrapper_end"] .acfe-flexible-opened-actions {
      background: #EFF6FB;
    }

    body  .layout[data-layout="wrapper_start"] .acf-tab-wrap,
    body  .layout[data-layout="wrapper_end"] .acf-tab-wrap {
      background: inherit;
    }

    body  .layout[data-layout="wrapper_start"] .acf-fc-layout-order,
    body  .layout[data-layout="wrapper_start"] .acf-icon,
    body  .layout[data-layout="wrapper_end"] .acf-fc-layout-order,
    body  .layout[data-layout="wrapper_end"] .acf-icon {
      background: #CEE4F3;
    }

    body div.acf-field.aos-animations ul.acf-radio-list > li { width: 25%; margin-right: 0; }

    ul.acf-swatch-list label span { display: none; }
    ul.acf-swatch-list label span.unset-color { display: inline-block; background-color:white;}

    ul.acf-swatch-list > li:nth-child(1) { display: block; width: 100%; }
  </style>';
}