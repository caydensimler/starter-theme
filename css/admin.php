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
    div.acf-field[data-name="layout_item"] .acf-flexible-content .layout { background: #F7F7F7; }

    body .layout[data-layout="layout-wrapper-start"],
    body .layout[data-layout="layout-wrapper-start"] .acfe-flexible-opened-actions,
    div.acf-field[data-name="layout_item"] .acf-flexible-content .layout[data-layout="wrapper"],
    div.acf-field[data-name="layout_item"] .acf-flexible-content .layout[data-layout="wrapper"] .acfe-flexible-opened-actions,
    div.acf-field[data-name="layout_item"] .acf-flexible-content .layout[data-layout="wrapper_end"],
    div.acf-field[data-name="layout_item"] .acf-flexible-content .layout[data-layout="wrapper_end"] .acfe-flexible-opened-actions,
    body .layout[data-layout="layout-wrapper-end"],
    body .layout[data-layout="layout-wrapper-end"] .acfe-flexible-opened-actions {
      background: #EFF6FB;
    }

    body .layout[data-layout="layout-wrapper-start"] .acf-tab-wrap,
    div.acf-field[data-name="layout_item"] .acf-flexible-content .layout[data-layout="wrapper"],
    div.acf-field[data-name="layout_item"] .acf-flexible-content .layout[data-layout="wrapper_end"],
    body .layout[data-layout="layout-wrapper-end"] .acf-tab-wrap,
    body .layout[data-layout="content-block"] .acf-tab-wrap {
      background: inherit;
    }

    body .layout[data-layout="layout-wrapper-start"] .acf-fc-layout-order,
    body .layout[data-layout="layout-wrapper-start"] .acf-icon,
    div.acf-field[data-name="layout_item"] .acf-flexible-content .layout[data-layout="wrapper"] .acf-fc-layout-order,
    div.acf-field[data-name="layout_item"] .acf-flexible-content .layout[data-layout="wrapper"] .acf-icon,
    div.acf-field[data-name="layout_item"] .acf-flexible-content .layout[data-layout="wrapper_end"] .acf-fc-layout-order,
    div.acf-field[data-name="layout_item"] .acf-flexible-content .layout[data-layout="wrapper_end"] .acf-icon,
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
    div.acf-field[data-name="layout_item"] .acf-flexible-content .layout[data-layout="wrapper"],
    div.acf-field[data-name="layout_item"] .acf-flexible-content .layout[data-layout="wrapper"] .acfe-flexible-opened-actions,
    div.acf-field[data-name="layout_item"] .acf-flexible-content .layout[data-layout="wrapper_end"],
    div.acf-field[data-name="layout_item"] .acf-flexible-content .layout[data-layout="wrapper_end"] .acfe-flexible-opened-actions,
    body .layout[data-layout="wrapper_end"],
    body .layout[data-layout="wrapper_end"] .acfe-flexible-opened-actions {
      background: #EFF6FB;
    }

    body .layout[data-layout="wrapper_start"] .acf-tab-wrap,
    div.acf-field[data-name="layout_item"] .acf-flexible-content .layout[data-layout="wrapper"] .acf-tab-wrap,
    div.acf-field[data-name="layout_item"] .acf-flexible-content .layout[data-layout="wrapper_end"] .acf-tab-wrap,
    body .layout[data-layout="wrapper_end"] .acf-tab-wrap {
      background: inherit;
    }

    body .layout[data-layout="wrapper_start"] .acf-fc-layout-order,
    body .layout[data-layout="wrapper_start"] .acf-icon,
    div.acf-field[data-name="layout_item"] .acf-flexible-content .layout[data-layout="wrapper"] .acf-fc-layout-order,
    div.acf-field[data-name="layout_item"] .acf-flexible-content .layout[data-layout="wrapper"] .acf-icon,
    div.acf-field[data-name="layout_item"] .acf-flexible-content .layout[data-layout="wrapper_end"] .acf-fc-layout-order,
    div.acf-field[data-name="layout_item"] .acf-flexible-content .layout[data-layout="wrapper_end"] .acf-icon,
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
    .acfe-flexible-placeholder.-preview .grid-container img { max-width: 100%; }

    .acfe-flexible-placeholder.-preview .grid-container .layout { margin: 0; background: none; border: none; }

    a.collapse-note { margin-left: 2px; margin-right: 2px; }

    div.acf-field[data-name="layout_item"] tr:nth-child(1) .acf-row-handle { background: #F6E0E0; }
    div.acf-field[data-name="layout_item"] tr:nth-child(2) .acf-row-handle { background: #EDC0C0; }
    div.acf-field[data-name="layout_item"] tr:nth-child(3) .acf-row-handle { background: #E4A0A0; }
    div.acf-field[data-name="layout_item"] tr:nth-child(4) .acf-row-handle { background: #DB8080; }
    div.acf-field[data-name="layout_item"] tr:nth-child(5) .acf-row-handle { background: #D26060; }
    div.acf-field[data-name="layout_item"] tr:nth-child(6) .acf-row-handle { background: #CE5050; }
    div.acf-field[data-name="layout_item"] tr:nth-child(7) .acf-row-handle { background: #C94040; }
    div.acf-field[data-name="layout_item"] tr:nth-child(8) .acf-row-handle { background: #BF3636; }
    div.acf-field[data-name="layout_item"] tr:nth-child(9) .acf-row-handle { background: #9F2D2D; }

    div.acf-field[data-name="layout_item"] .acf-row-handle.order span {
      padding: 0px 7px 2px; background-color: white;
      font-weight: 600; font-size: 14px; color: gray;
      border: 1px solid gray; border-radius: 100%;
    }

    div.acf-field[data-name="layout_item"] div.acf-field-wysiwyg { width: 100% !important; }

    div.acf-field[data-name="layout_item"] table .acf-field.hover-note { display: none; }
    div.acf-field[data-name="layout_item"] table .acf-row.-collapsed .acf-field.hover-note { display: block; }

    .acfe-flexible-placeholder h1 { font-size: clamp(35px, 7vw, 50px) !important; }
    .acfe-flexible-placeholder h2 { font-size: clamp(30px, 6vw, 44px) !important; }
    .acfe-flexible-placeholder h3 { font-size: clamp(27px, 5vw, 38px) !important; }
    .acfe-flexible-placeholder h4 { font-size: clamp(24px, 5vw, 30px) !important; }
    .acfe-flexible-placeholder h5 { font-size: clamp(20px, 4vw, 24px) !important; }
    .acfe-flexible-placeholder h6 { font-size: clamp(17px, 3vw, 18px) !important; }

    .acf-repeater .acf-row { box-shadow: 2px 2px 4px rgb(0 0 0 / 11%); }

    div.layout[data-layout="content-block"] .acfe-fc-placeholder,
    div.layout[data-layout="layout-wrapper-start"] .acfe-fc-placeholder,
    div.layout[data-layout="layout-wrapper-end"] .acfe-fc-placeholder { display: none; }
  </style>';
}