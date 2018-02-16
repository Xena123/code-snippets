<?php


function fl_acf_repeater_colors() {
   echo '<style type="text/css">
        /* Row Number */
        .acf-table .acf-row .acf-row-handle.order {
          color: #000;
          font-size: 20px;
          text-shadow: none;
        }
        /* nth field background */
        .acf-table .acf-row:nth-of-type(2n) .acf-fields.-left > .acf-field:before {
          background: #ccc;
        }

        .acf-table .acf-row:nth-of-type(2n) .acf-row-handle.order {
          background-color: #ccc;
        }
        .acf-table .acf-row:nth-of-type(2n) .acf-input {
          background-color: #ccc;
        }
        .acf-table .acf-row:nth-of-type(2n) .acf-field {
          background-color: #ccc;
        }

        .acf-table .acf-row .fl_row_bg_color li {
          margin-bottom: 10px;
          overflow: hidden;
        }

        .acf-table .acf-row .fl_row_bg_color .acf-radio-list label {
          position: relative;
          z-index: 4;
          padding: 5px 15px 5px 10px;
          color: transparent;
        }

        .acf-table .acf-row .fl_row_bg_color input {
          margin-right: 10px;
        }

        .acf-table .acf-row .fl_row_bg_color input:after {
          position: absolute;
          content: "";
          left: 0;
          right: -1000%;
          top: 0;
          bottom: 0;
          z-index: -1;
        }

        .fl_row_bg_color input[value="background--white"]:after, .fl_row_bg_color input[value="t-theme--white"]:after, .fl_row_bg_color input[value="t-about--grey"]:after {
          background: #ffffff;
        }
        .fl_row_bg_color input[value="background--grey"]:after, .fl_row_bg_color input[value="t-theme--grey"]:after {
          background: #f5f5f6;
        }
        .fl_row_bg_color input[value="background--primary"]:after, .fl_row_bg_color input[value="t-theme--primary"]:after {
          background: #4B1846;
        }
        .fl_row_bg_color input[value="background--secondary"]:after, .fl_row_bg_color input[value="t-theme--secondary"]:after {
          background: #48AE88;
        }
        .fl_row_bg_color input[value="background--accent"]:after, .fl_row_bg_color input[value="t-theme--accent"]:after {
          background: #f39212;
        }

        .fl_row_bg_color input[value="background--a"]:after, .fl_row_bg_color input[value="t-theme--a"]:after {
          background: #373844;
        }
        .fl_row_bg_color input[value="background--b"]:after, .fl_row_bg_color input[value="t-theme--b"]:after {
          background: #3d6a84;
        }
        .fl_row_bg_color input[value="background--c"]:after, .fl_row_bg_color input[value="t-theme--c"]:after, .fl_row_bg_color input[value="t-about--c"]:after {
          background: #96ccd8;
        }
        .fl_row_bg_color input[value="background--d"]:after, .fl_row_bg_color input[value="t-theme--d"]:after {
          background: #bee2e9;
        }
        .fl_row_bg_color input[value="background--e"]:after, .fl_row_bg_color input[value="t-theme--e"]:after {
          background: #eaf5f5;
        }
        .fl_row_bg_color input[value="background--f"]:after, .fl_row_bg_color input[value="t-theme--f"]:after, .fl_row_bg_color input[value="t-about--f"]:after {
          background: #6e3687;
        }
        .fl_row_bg_color input[value="background--g"]:after, .fl_row_bg_color input[value="t-theme--g"]:after, .fl_row_bg_color input[value="t-about--g"]:after {
          background: #945f9f;
        }
        .fl_row_bg_color input[value="background--h"]:after, .fl_row_bg_color input[value="t-theme--h"]:after {
          background: #bdc4de;
        }
        .fl_row_bg_color input[value="background--i"]:after, .fl_row_bg_color input[value="t-theme--i"]:after {
          background: #d3dcea;
        }
        .fl_row_bg_color input[value="background--j"]:after, .fl_row_bg_color input[value="t-theme--j"]:after {
          background: #f7f6f6;
        }


         </style>';
}

add_action('admin_head', 'fl_acf_repeater_colors');
