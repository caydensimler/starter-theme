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
  echo '<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">';

  echo '<style>
    body .layout[data-layout="layout-wrapper-start"],
    body .layout[data-layout="layout-wrapper-start"] .acfe-flexible-opened-actions,
    body .layout[data-layout="wrapper"],
    body .layout[data-layout="wrapper"] .acfe-flexible-opened-actions,
    body .layout[data-layout="layout-wrapper-end"],
    body .layout[data-layout="layout-wrapper-end"] .acfe-flexible-opened-actions {
      background: #EFF6FB;
    }

    body .layout[data-layout="layout-wrapper-start"] .acf-tab-wrap,
    body .layout[data-layout="wrapper"]
    body .layout[data-layout="layout-wrapper-end"] .acf-tab-wrap,
    body .layout[data-layout="content-block"] .acf-tab-wrap {
      background: inherit;
    }

    body .layout[data-layout="layout-wrapper-start"] .acf-fc-layout-order,
    body .layout[data-layout="layout-wrapper-start"] .acf-icon,
    body .layout[data-layout="wrapper"] .acf-fc-layout-order,
    body .layout[data-layout="wrapper"] .acf-icon,
    body .layout[data-layout="layout-wrapper-end"] .acf-fc-layout-order,
    body .layout[data-layout="layout-wrapper-end"] .acf-icon {
      background: #CEE4F3;
    }

    body .layout[data-layout="content-block"],
    body .layout[data-layout="content-block"] .acfe-flexible-opened-actions,
    body .layout[data-layout="content-block"] .acf-tab-wrap .acf-tab-group li a {
      background: #E6EFE8;
    }

    body .layout[data-layout="content-block"] .acf-fc-layout-order,
    body .layout[data-layout="content-block"] .acf-icon {
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

    body .layout[data-layout="wrapper_start"],
    body .layout[data-layout="wrapper_start"] .acfe-flexible-opened-actions,
    body .layout[data-layout="wrapper"],
    body .layout[data-layout="wrapper"] .acfe-flexible-opened-actions,
    body .layout[data-layout="wrapper_end"],
    body .layout[data-layout="wrapper_end"] .acfe-flexible-opened-actions {
      background: #EFF6FB;
    }

    body .layout[data-layout="wrapper_start"] .acf-tab-wrap,
    body .layout[data-layout="wrapper"] .acf-tab-wrap,
    body .layout[data-layout="wrapper_end"] .acf-tab-wrap {
      background: inherit;
    }

    body .layout[data-layout="wrapper_start"] .acf-fc-layout-order,
    body .layout[data-layout="wrapper_start"] .acf-icon,
    body .layout[data-layout="wrapper"] .acf-fc-layout-order,
    body .layout[data-layout="wrapper"] .acf-icon,
    body .layout[data-layout="wrapper_end"] .acf-fc-layout-order,
    body .layout[data-layout="wrapper_end"] .acf-icon {
      background: #CEE4F3;
    }

    body div.acf-field.aos-animations ul.acf-radio-list > li { width: 25%; margin-right: 0; }

    ul.acf-swatch-list label span { display: none; }
    ul.acf-swatch-list label span.unset-color { display: inline-block; background-color:white;}

    ul.acf-swatch-list > li:nth-child(1) { display: block; width: 100%; }

    .acfe-flexible-placeholder.-preview { padding: 15px; }
    .acfe-flexible-placeholder.-preview .grid-container { max-width: 1100px; margin: 0 auto; padding: 0px 15px !important; }

    .acfe-flexible-placeholder.-preview .grid-container h1,
    .acfe-flexible-placeholder.-preview .grid-container h2,
    .acfe-flexible-placeholder.-preview .grid-container h3,
    .acfe-flexible-placeholder.-preview .grid-container h4,
    .acfe-flexible-placeholder.-preview .grid-container h5,
    .acfe-flexible-placeholder.-preview .grid-container h6,
    .acfe-flexible-placeholder.-preview .grid-container p { margin: 0px 0px 15px; }

    .acfe-flexible-placeholder.-preview .grid-container a { text-decoration: none; }

    a.collapse-note { margin-left: 2px; margin-right: 2px; }

    div.acf-field[data-name="layout_item"] tr:nth-child(1) .acf-row-handle.order { background: #F6E0E0; }
    div.acf-field[data-name="layout_item"] tr:nth-child(2) .acf-row-handle.order { background: #EDC0C0; }
    div.acf-field[data-name="layout_item"] tr:nth-child(3) .acf-row-handle.order { background: #E4A0A0; }
    div.acf-field[data-name="layout_item"] tr:nth-child(4) .acf-row-handle.order { background: #DB8080; }
    div.acf-field[data-name="layout_item"] tr:nth-child(5) .acf-row-handle.order { background: #D26060; }
    div.acf-field[data-name="layout_item"] tr:nth-child(6) .acf-row-handle.order { background: #CE5050; }
    div.acf-field[data-name="layout_item"] tr:nth-child(7) .acf-row-handle.order { background: #C94040; }
    div.acf-field[data-name="layout_item"] tr:nth-child(8) .acf-row-handle.order { background: #BF3636; }
    div.acf-field[data-name="layout_item"] tr:nth-child(9) .acf-row-handle.order { background: #9F2D2D; }

    div.acf-field[data-name="layout_item"] .acf-row-handle.order span {
      padding: 0px 7px 2px; background-color: white;
      font-weight: 600; font-size: 14px; color: gray;
      border: 1px solid gray; border-radius: 100%;
    }
  </style>';
}