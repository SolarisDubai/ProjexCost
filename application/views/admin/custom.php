<?php 
    header("Content-type: text/css; charset: UTF-8");
    
    
    $link = mysqli_connect("localhost", "projexon_cost", "dubai2020", "projexon_cost");
 
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
     
    // Attempt select query execution
    $sql = "SELECT * FROM css";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                $color = $row['color'];
                echo $color;
            }
            // Free result set
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
     
    // Close connection
    mysqli_close($link);
    

    // $val = $this->site_model->get_rows('css');
    // $color = "red";
    // $color = $val[0]['color'];
?>

/*-------------------------------------------------------------------
  ===== Table of Contents =====

  * Bootstrap functions
  * Template variables
  * SCSS Compass Functions
  * Boostrap Main SCSS
  * Template mixins
    + Animation Mixins
    + Background Mixins
    + Badge Mixins
    + Button Mixins
    + Miscellaneous Mixins
    + BlockQuote Mixins
    + Cards Mixins
    + Color Functions Mixins
    + Tooltips
    + popovers
  * Core Styles
    + Reset Styles
    + Fonts
    + Functions
    + Backgrounds
    + Typography
    + Miscellaneous
    + Footer
    + Layouts
    + Utilities
    + Demo styles
  * Components
    + Accordions
    + Badges
    + Bootstrap Alerts
    + Boostrap Progress
    + Buttons
    + Breadcrumbs
    + Cards
    + Checkboxes and Radios
    + Dropdowns
    + Forms
    + Google maps
    + Icons
    + Loaders
    + Lists
    + Modals
    + Pagination
    + Popover
    + Preview
    + Tables
    + Tabs
    + Timeline
    + Todo List
    + Tooltips
    + User Profile
    + Pricing table
  * Email
    + Mail Sidebar
    + Mail List Container
    + Message Content
  * Plugin Overrides
    + Ace Editor
    + Avgrund Popup
    + Bootstrap Tour
    + Chartist
    + CodeMirror
    + Colcade
    + Colorpicker
    + Context Menu
    + Data Tables
    + Datepicker
    + Dropify
    + Dropzone
    + Flot chart
    + Full Calendar
    + Google Charts
    + Icheck
    + Jquery File Upload
    + Js-grid
    + Jvectormap
    + Light Gallery
    + Listify
    + No-ui-slider
    + Owl-carousel
    + Progressbar-js
    + Pws-tabs
    + Quill Editor
    + Rating
    + Select2
    + Summernote Editor
    + SweetAlert
    + Switchery
    + Tags
    + TinyMCE Editor
    + Toast
    + Typeahead
    + Wysi Editor
    + X-editable
    + Wizard
  * Landing screens
    + Auth
    + Lock Screen
-------------------------------------------------------------------*/
/*-------------------------------------------------------------------*/
/* === Import Bootstrap functions and variables === */
/*-------------------------------------------------------------------*/
/* === Import template variables === */
/*-------------------------------------------------------------------*/
/* === SCSS Compass Functions === */
@import url("https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap");

@-webkit-keyframes flash {
  0% {
    opacity: 1; }
  25% {
    opacity: 0; }
  50% {
    opacity: 1; }
  75% {
    opacity: 0; }
  100% {
    opacity: 1; } }

@keyframes flash {
  0% {
    opacity: 1; }
  25% {
    opacity: 0; }
  50% {
    opacity: 1; }
  75% {
    opacity: 0; }
  100% {
    opacity: 1; } }

@-webkit-keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  20% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  40% {
    -webkit-transform: translateY(-30px);
    transform: translateY(-30px); }
  50% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  60% {
    -webkit-transform: translateY(-15px);
    transform: translateY(-15px); }
  80% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0); } }

@keyframes bounce {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  20% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  40% {
    -webkit-transform: translateY(-30px);
    transform: translateY(-30px); }
  50% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  60% {
    -webkit-transform: translateY(-15px);
    transform: translateY(-15px); }
  80% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0); } }

@-webkit-keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  10% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  20% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px); }
  30% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  40% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px); }
  50% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  60% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px); }
  70% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  80% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px); }
  90% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@keyframes shake {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  10% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  20% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px); }
  30% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  40% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px); }
  50% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  60% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px); }
  70% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  80% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px); }
  90% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@-webkit-keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1); }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg); }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg); }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg); }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg); }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg); }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg); }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg); }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg); }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg); }
  100% {
    -webkit-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0); } }

@keyframes tada {
  0% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1); }
  10% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg); }
  20% {
    -webkit-transform: scale(0.9) rotate(-3deg);
    transform: scale(0.9) rotate(-3deg); }
  30% {
    -webkit-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg); }
  40% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg); }
  50% {
    -webkit-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg); }
  60% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg); }
  70% {
    -webkit-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg); }
  80% {
    -webkit-transform: scale(1.1) rotate(-3deg);
    transform: scale(1.1) rotate(-3deg); }
  90% {
    -webkit-transform: scale(1.1) rotate(3deg);
    transform: scale(1.1) rotate(3deg); }
  100% {
    -webkit-transform: scale(1) rotate(0);
    transform: scale(1) rotate(0); } }

@-webkit-keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    transform-origin: top center 50%; }
  20% {
    -webkit-transform: rotate(15deg);
    transform: rotate(15deg); }
  40% {
    -webkit-transform: rotate(-10deg);
    transform: rotate(-10deg); }
  60% {
    -webkit-transform: rotate(5deg);
    transform: rotate(5deg); }
  80% {
    -webkit-transform: rotate(-5deg);
    transform: rotate(-5deg); }
  100% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); } }

@keyframes swing {
  20%, 40%, 60%, 80%, 100% {
    -webkit-transform-origin: top center 50%;
    transform-origin: top center 50%; }
  20% {
    -webkit-transform: rotate(15deg);
    transform: rotate(15deg); }
  40% {
    -webkit-transform: rotate(-10deg);
    transform: rotate(-10deg); }
  60% {
    -webkit-transform: rotate(5deg);
    transform: rotate(5deg); }
  80% {
    -webkit-transform: rotate(-5deg);
    transform: rotate(-5deg); }
  100% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); } }

@-webkit-keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    transform: translateX(0%); }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg); }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg); }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg); }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg); }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg); }
  100% {
    -webkit-transform: translateX(0%);
    transform: translateX(0%); } }

@keyframes wobble {
  0% {
    -webkit-transform: translateX(0%);
    transform: translateX(0%); }
  15% {
    -webkit-transform: translateX(-25%) rotate(-5deg);
    transform: translateX(-25%) rotate(-5deg); }
  30% {
    -webkit-transform: translateX(20%) rotate(3deg);
    transform: translateX(20%) rotate(3deg); }
  45% {
    -webkit-transform: translateX(-15%) rotate(-3deg);
    transform: translateX(-15%) rotate(-3deg); }
  60% {
    -webkit-transform: translateX(10%) rotate(2deg);
    transform: translateX(10%) rotate(2deg); }
  75% {
    -webkit-transform: translateX(-5%) rotate(-1deg);
    transform: translateX(-5%) rotate(-1deg); }
  100% {
    -webkit-transform: translateX(0%);
    transform: translateX(0%); } }

@-webkit-keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1); }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1); }
  100% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1); } }

@keyframes pulse {
  0% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1); }
  50% {
    -webkit-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1); }
  100% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1); } }

@-webkit-keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    transform: skewX(9deg); }
  10% {
    -webkit-transform: skewX(-8deg);
    transform: skewX(-8deg); }
  20% {
    -webkit-transform: skewX(7deg);
    transform: skewX(7deg); }
  30% {
    -webkit-transform: skewX(-6deg);
    transform: skewX(-6deg); }
  40% {
    -webkit-transform: skewX(5deg);
    transform: skewX(5deg); }
  50% {
    -webkit-transform: skewX(-4deg);
    transform: skewX(-4deg); }
  60% {
    -webkit-transform: skewX(3deg);
    transform: skewX(3deg); }
  70% {
    -webkit-transform: skewX(-2deg);
    transform: skewX(-2deg); }
  80% {
    -webkit-transform: skewX(1deg);
    transform: skewX(1deg); }
  90% {
    -webkit-transform: skewX(0deg);
    transform: skewX(0deg); }
  100% {
    -webkit-transform: skewX(0deg);
    transform: skewX(0deg); } }

@keyframes wiggle {
  0% {
    -webkit-transform: skewX(9deg);
    transform: skewX(9deg); }
  10% {
    -webkit-transform: skewX(-8deg);
    transform: skewX(-8deg); }
  20% {
    -webkit-transform: skewX(7deg);
    transform: skewX(7deg); }
  30% {
    -webkit-transform: skewX(-6deg);
    transform: skewX(-6deg); }
  40% {
    -webkit-transform: skewX(5deg);
    transform: skewX(5deg); }
  50% {
    -webkit-transform: skewX(-4deg);
    transform: skewX(-4deg); }
  60% {
    -webkit-transform: skewX(3deg);
    transform: skewX(3deg); }
  70% {
    -webkit-transform: skewX(-2deg);
    transform: skewX(-2deg); }
  80% {
    -webkit-transform: skewX(1deg);
    transform: skewX(1deg); }
  90% {
    -webkit-transform: skewX(0deg);
    transform: skewX(0deg); }
  100% {
    -webkit-transform: skewX(0deg);
    transform: skewX(0deg); } }

@-webkit-keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1); }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95); }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1); }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3); } }

@keyframes bounceOut {
  0% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1); }
  25% {
    -webkit-transform: scale(0.95, 0.95);
    transform: scale(0.95, 0.95); }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.1, 1.1);
    transform: scale(1.1, 1.1); }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3); } }

@-webkit-keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    transform: translateY(20px); }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    transform: translateY(-2000px); } }

@keyframes bounceOutUp {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  20% {
    opacity: 1;
    -webkit-transform: translateY(20px);
    transform: translateY(20px); }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    transform: translateY(-2000px); } }

@-webkit-keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px); }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    transform: translateY(2000px); } }

@keyframes bounceOutDown {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  20% {
    opacity: 1;
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px); }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    transform: translateY(2000px); } }

@-webkit-keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    transform: translateX(20px); }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    transform: translateX(-2000px); } }

@keyframes bounceOutLeft {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  20% {
    opacity: 1;
    -webkit-transform: translateX(20px);
    transform: translateX(20px); }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    transform: translateX(-2000px); } }

@-webkit-keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    transform: translateX(-20px); }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    transform: translateX(2000px); } }

@keyframes bounceOutRight {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  20% {
    opacity: 1;
    -webkit-transform: translateX(-20px);
    transform: translateX(-20px); }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    transform: translateX(2000px); } }

@-webkit-keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3); }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05); }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9); }
  100% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1); } }

@keyframes bounceIn {
  0% {
    opacity: 0;
    -webkit-transform: scale(0.3, 0.3);
    transform: scale(0.3, 0.3); }
  50% {
    opacity: 1;
    -webkit-transform: scale(1.05, 1.05);
    transform: scale(1.05, 1.05); }
  70% {
    -webkit-transform: scale(0.9, 0.9);
    transform: scale(0.9, 0.9); }
  100% {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1); } }

@-webkit-keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    transform: translateY(-2000px); }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    transform: translateY(30px); }
  80% {
    -webkit-transform: translateY(-10px);
    transform: translateY(-10px); }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0); } }

@keyframes bounceInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    transform: translateY(-2000px); }
  60% {
    opacity: 1;
    -webkit-transform: translateY(30px);
    transform: translateY(30px); }
  80% {
    -webkit-transform: translateY(-10px);
    transform: translateY(-10px); }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0); } }

@-webkit-keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    transform: translateY(2000px); }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    transform: translateY(-30px); }
  80% {
    -webkit-transform: translateY(10px);
    transform: translateY(10px); }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0); } }

@keyframes bounceInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    transform: translateY(2000px); }
  60% {
    opacity: 1;
    -webkit-transform: translateY(-30px);
    transform: translateY(-30px); }
  80% {
    -webkit-transform: translateY(10px);
    transform: translateY(10px); }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0); } }

@-webkit-keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    transform: translateX(2000px); }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    transform: translateX(-30px); }
  80% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px); }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@keyframes bounceInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    transform: translateX(2000px); }
  60% {
    opacity: 1;
    -webkit-transform: translateX(-30px);
    transform: translateX(-30px); }
  80% {
    -webkit-transform: translateX(10px);
    transform: translateX(10px); }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@-webkit-keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    transform: translateX(-2000px); }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    transform: translateX(30px); }
  80% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@keyframes bounceInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    transform: translateX(-2000px); }
  60% {
    opacity: 1;
    -webkit-transform: translateX(30px);
    transform: translateX(30px); }
  80% {
    -webkit-transform: translateX(-10px);
    transform: translateX(-10px); }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@-webkit-keyframes fadeOut {
  0% {
    opacity: 1; }
  100% {
    opacity: 0; } }

@keyframes fadeOut {
  0% {
    opacity: 1; }
  100% {
    opacity: 0; } }

@-webkit-keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; }
  100% {
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0; } }

@keyframes fadeOutUp {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; }
  100% {
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0; } }

@-webkit-keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; }
  100% {
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0; } }

@keyframes fadeOutDown {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; }
  100% {
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0; } }

@-webkit-keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    opacity: 1; }
  100% {
    -webkit-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0; } }

@keyframes fadeOutRight {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    opacity: 1; }
  100% {
    -webkit-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0; } }

@-webkit-keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    opacity: 1; }
  100% {
    -webkit-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0; } }

@keyframes fadeOutLeft {
  0% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    opacity: 1; }
  100% {
    -webkit-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0; } }

@-webkit-keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; }
  100% {
    -webkit-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0; } }

@keyframes fadeOutUpBig {
  0% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; }
  100% {
    -webkit-transform: translateY(-2000px);
    transform: translateY(-2000px);
    opacity: 0; } }

@-webkit-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    transform: translateY(2000px); } }

@keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
    transform: translateY(2000px); } }

@-webkit-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    transform: translateX(2000px); } }

@keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    transform: translateX(2000px); } }

@-webkit-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    transform: translateX(-2000px); } }

@keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0); }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    transform: translateX(-2000px); } }

@-webkit-keyframes fadeIn {
  0% {
    opacity: 0; }
  100% {
    opacity: 1; } }

@keyframes fadeIn {
  0% {
    opacity: 0; }
  100% {
    opacity: 1; } }

@-webkit-keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0; }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; } }

@keyframes fadeInUp {
  0% {
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
    opacity: 0; }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; } }

@-webkit-keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0; }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; } }

@keyframes fadeInDown {
  0% {
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px);
    opacity: 0; }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; } }

@-webkit-keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0; }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    opacity: 1; } }

@keyframes fadeInRight {
  0% {
    -webkit-transform: translateX(20px);
    transform: translateX(20px);
    opacity: 0; }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    opacity: 1; } }

@-webkit-keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0; }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    opacity: 1; } }

@keyframes fadeInLeft {
  0% {
    -webkit-transform: translateX(-20px);
    transform: translateX(-20px);
    opacity: 0; }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    opacity: 1; } }

@-webkit-keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0; }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; } }

@keyframes fadeInUpBig {
  0% {
    -webkit-transform: translateY(2000px);
    transform: translateY(2000px);
    opacity: 0; }
  100% {
    -webkit-transform: translateY(0);
    transform: translateY(0);
    opacity: 1; } }

@-webkit-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    transform: translateY(-2000px); }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0); } }

@keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
    transform: translateY(-2000px); }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0); } }

@-webkit-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    transform: translateX(2000px); }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
    transform: translateX(2000px); }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@-webkit-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    transform: translateX(-2000px); }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
    transform: translateX(-2000px); }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
    transform: translateX(0); } }

@-webkit-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out; }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out; }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; } }

@keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotateY(0);
    transform: perspective(400px) rotateY(0);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out; }
  40% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(170deg);
    transform: perspective(400px) translateZ(150px) rotateY(170deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out; }
  50% {
    -webkit-transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    transform: perspective(400px) translateZ(150px) rotateY(190deg) scale(1);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; }
  80% {
    -webkit-transform: perspective(400px) rotateY(360deg) scale(0.95);
    transform: perspective(400px) rotateY(360deg) scale(0.95);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; }
  100% {
    -webkit-transform: perspective(400px) scale(1);
    transform: perspective(400px) scale(1);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; } }

@-webkit-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg); }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg); }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; } }

@keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; }
  40% {
    -webkit-transform: perspective(400px) rotateX(-10deg);
    transform: perspective(400px) rotateX(-10deg); }
  70% {
    -webkit-transform: perspective(400px) rotateX(10deg);
    transform: perspective(400px) rotateX(10deg); }
  100% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; } }

@-webkit-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; } }

@keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px) rotateX(0deg);
    transform: perspective(400px) rotateX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; }
  100% {
    -webkit-transform: perspective(400px) rotateX(90deg);
    transform: perspective(400px) rotateX(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; } }

@-webkit-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg); }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg); }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; } }

@keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; }
  40% {
    -webkit-transform: perspective(400px) rotateY(-10deg);
    transform: perspective(400px) rotateY(-10deg); }
  70% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg); }
  100% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; } }

@-webkit-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; } }

@keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px) rotateY(0deg);
    transform: perspective(400px) rotateY(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; }
  100% {
    -webkit-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; } }

@-webkit-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; } }

@keyframes lightSpeedIn {
  0% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; }
  60% {
    -webkit-transform: translateX(-20%) skewX(30deg);
    transform: translateX(-20%) skewX(30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; }
  80% {
    -webkit-transform: translateX(0%) skewX(-15deg);
    transform: translateX(0%) skewX(-15deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; }
  100% {
    -webkit-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; } }

@-webkit-keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; } }

@keyframes lightSpeedOut {
  0% {
    -webkit-transform: translateX(0%) skewX(0deg);
    transform: translateX(0%) skewX(0deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1; }
  100% {
    -webkit-transform: translateX(100%) skewX(-30deg);
    transform: translateX(100%) skewX(-30deg);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; } }

@-webkit-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; }
  100% {
    -webkit-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0; } }

@keyframes rotateOut {
  0% {
    -webkit-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; }
  100% {
    -webkit-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(200deg);
    transform: rotate(200deg);
    opacity: 0; } }

@-webkit-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; }
  100% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0; } }

@keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; }
  100% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0; } }

@-webkit-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; }
  100% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0; } }

@keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; }
  100% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0; } }

@-webkit-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; }
  100% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0; } }

@keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; }
  100% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0; } }

@-webkit-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; }
  100% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0; } }

@keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; }
  100% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0; } }

@-webkit-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0; }
  100% {
    -webkit-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; } }

@keyframes rotateIn {
  0% {
    -webkit-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(-200deg);
    transform: rotate(-200deg);
    opacity: 0; }
  100% {
    -webkit-transform-origin: center center 50%;
    transform-origin: center center 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; } }

@-webkit-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0; }
  100% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; } }

@keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0; }
  100% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; } }

@-webkit-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0; }
  100% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; } }

@keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0; }
  100% {
    -webkit-transform-origin: left bottom 50%;
    transform-origin: left bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; } }

@-webkit-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0; }
  100% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; } }

@keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg);
    opacity: 0; }
  100% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; } }

@-webkit-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0; }
  100% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; } }

@keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    opacity: 0; }
  100% {
    -webkit-transform-origin: right bottom 50%;
    transform-origin: right bottom 50%;
    -webkit-transform: rotate(0);
    transform: rotate(0);
    opacity: 1; } }

@-webkit-keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  40% {
    -webkit-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  100% {
    -webkit-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; } }

@keyframes hinge {
  0% {
    -webkit-transform: rotate(0);
    transform: rotate(0);
    -webkit-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  20%, 60% {
    -webkit-transform: rotate(80deg);
    transform: rotate(80deg);
    -webkit-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  40% {
    -webkit-transform: rotate(60deg);
    transform: rotate(60deg);
    -webkit-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  80% {
    -webkit-transform: rotate(60deg) translateY(0);
    transform: rotate(60deg) translateY(0);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform-origin: top left 50%;
    transform-origin: top left 50%;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out; }
  100% {
    -webkit-transform: translateY(700px);
    transform: translateY(700px);
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0; } }

@-webkit-keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg); }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg); } }

@keyframes rollIn {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg); }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg); } }

@-webkit-keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg); }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg); } }

@keyframes rollOut {
  0% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
    opacity: 1;
    -webkit-transform: translateX(0px) rotate(0deg);
    transform: translateX(0px) rotate(0deg); }
  100% {
    filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    opacity: 0;
    -webkit-transform: translateX(-100%) rotate(-120deg);
    transform: translateX(-100%) rotate(-120deg); } }

/*-------------------------------------------------------------------*/
/* === Boostrap Main SCSS === */
/*!
 * Bootstrap v4.3.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 The Bootstrap Authors
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
:root {
  --blue: #5E50F9;
  --indigo: #6610f2;
  --purple: #6a008a;
  --pink: #E91E63;
  --red: #f96868;
  --orange: #f2a654;
  --yellow: #f6e84e;
  --green: #46c35f;
  --teal: #58d8a3;
  --cyan: #57c7d4;
  --white: #ffffff;
  --gray: #6c757d;
  --gray-dark: #0f1531;
  --blue: #5E50F9;
  --indigo: #6610f2;
  --purple: #6a008a;
  --pink: #E91E63;
  --red: #f96868;
  --orange: #f2a654;
  --yellow: #f6e84e;
  --green: #46c35f;
  --teal: #58d8a3;
  --cyan: #57c7d4;
  --white: #ffffff;
  --gray: #434a54;
  --gray-light: #aab2bd;
  --gray-lighter: #e8eff4;
  --gray-lightest: #e6e9ed;
  --black: #000000;
  --primary: #1bdbe0;
  --secondary: #d8d8d8;
  --success: <?php echo $color; ?>;
  --info: #8e32e9;
  --warning: #ffde73;
  --danger: #ff4d6b;
  --light: #f8f9fa;
  --dark: #3e4b5b;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

*,
*::before,
*::after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box; }

/*html, body {*/
/*    height: 100%;*/
/*}*/
.container-scroller {
    /*min-height: 100%;*/
}
/*.container-fluid {*/
/*    min-height: 100%;*/
/*}*/
/*.main-panel {*/
/*    overflow: auto;*/
/*    padding-bottom: 100px;*/
/*}*/
/*.footer {*/
/*    position: relative;*/
/*    height: 100px;*/
/*    margin-top: -100px;*/
/*    clear: both;*/
/*}*/

/*html, body {*/
/*    height: 100%;*/
/*}*/
/*.container-scroller {*/
/*    min-height: 100%;*/
/*}*/

html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }

article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
  display: block; }

body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #343a40;
  text-align: left;
  background-color: #fff; }

[tabindex="-1"]:focus {
  outline: 0 !important; }

hr {
  -webkit-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
  overflow: visible; }

h1, h2, h3, h4, h5, h6 {
  margin-top: 0;
  margin-bottom: 0.5rem; }

p {
  margin: 0;
  margin-bottom: 0rem; }

abbr[title],
abbr[data-original-title] {
  text-decoration: underline;
  -webkit-text-decoration: underline dotted;
  text-decoration: underline dotted;
  cursor: help;
  border-bottom: 0;
  -webkit-text-decoration-skip-ink: none;
  text-decoration-skip-ink: none; }

address {
  margin-bottom: 1rem;
  font-style: normal;
  line-height: inherit; }

ol,
ul,
dl {
  margin-top: 0;
  margin-bottom: 1rem; }

ol ol,
ul ul,
ol ul,
ul ol {
  margin-bottom: 0; }

dt {
  font-weight: 700; }

dd {
  margin-bottom: .5rem;
  margin-left: 0; }

blockquote {
  margin: 0 0 1rem; }

b,
strong {
  font-weight: bolder; }

small {
  font-size: 80%; }

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline; }

sub {
  bottom: -.25em; }

sup {
  top: -.5em; }

a {
  color: #007bff;
  text-decoration: none;
  background-color: transparent; }
  a:hover {
    color: #0056b3;
    text-decoration: underline; }

a:not([href]):not([tabindex]) {
  color: inherit;
  text-decoration: none; }
  a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
    color: inherit;
    text-decoration: none; }
  a:not([href]):not([tabindex]):focus {
    outline: 0; }

pre,
code,
kbd,
samp {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
  font-size: 1em; }

pre {
  margin-top: 0;
  margin-bottom: 1rem;
  overflow: auto; }

figure {
  margin: 0 0 1rem; }

img {
  vertical-align: middle;
  border-style: none; }

svg {
  overflow: hidden;
  vertical-align: middle; }

table {
  border-collapse: collapse; }

caption {
  padding-top: 0.9375rem;
  padding-bottom: 0.9375rem;
  color: #6c757d;
  text-align: left;
  caption-side: bottom; }

th {
  text-align: inherit; }

label {
  display: inline-block;
  margin-bottom: 0.5rem; }

button {
  border-radius: 0; }

button:focus {
  outline: 1px dotted;
  outline: 5px auto -webkit-focus-ring-color; }

input,
button,
select,
optgroup,
textarea {
  margin: 0;
  font-family: inherit;
  font-size: inherit;
  line-height: inherit; }

button,
input {
  overflow: visible; }

button,
select {
  text-transform: none; }

select {
  word-wrap: normal; }

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button; }

button:not(:disabled),
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled) {
  cursor: pointer; }

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  padding: 0;
  border-style: none; }

input[type="radio"],
input[type="checkbox"] {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0; }

input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  -webkit-appearance: listbox; }

textarea {
  overflow: auto;
  resize: vertical; }

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0; }

legend {
  display: block;
  width: 100%;
  max-width: 100%;
  padding: 0;
  margin-bottom: .5rem;
  font-size: 1.5rem;
  line-height: inherit;
  color: inherit;
  white-space: normal; }

progress {
  vertical-align: baseline; }

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto; }

[type="search"] {
  outline-offset: -2px;
  -webkit-appearance: none; }

[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none; }

::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button; }

output {
  display: inline-block; }

summary {
  display: list-item;
  cursor: pointer; }

template {
  display: none; }

[hidden] {
  display: none !important; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  margin-bottom: 0.5rem;
  font-weight: 500;
  line-height: 1.2; }

h1, .h1 {
  font-size: 2.5rem; }

h2, .h2 {
  font-size: 2rem; }

h3, .h3 {
  font-size: 1.75rem; }

h4, .h4 {
  font-size: 1.5rem; }

h5, .h5 {
  font-size: 1.25rem; }

h6, .h6 {
  font-size: 1rem; }

.lead {
  font-size: 1.25rem;
  font-weight: 300; }

.display-1 {
  font-size: 6rem;
  font-weight: 300;
  line-height: 1.2; }

.display-2 {
  font-size: 5.5rem;
  font-weight: 300;
  line-height: 1.2; }

.display-3 {
  font-size: 4.5rem;
  font-weight: 300;
  line-height: 1.2; }

.display-4 {
  font-size: 3.5rem;
  font-weight: 300;
  line-height: 1.2; }

hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
  border-top: 1px solid rgba(0, 0, 0, 0.1); }

small,
.small {
  font-size: 80%;
  font-weight: 400; }

mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3; }

.list-unstyled {
  padding-left: 0;
  list-style: none; }

.list-inline {
  padding-left: 0;
  list-style: none; }

.list-inline-item {
  display: inline-block; }
  .list-inline-item:not(:last-child) {
    margin-right: 0.5rem; }

.initialism {
  font-size: 90%;
  text-transform: uppercase; }

.blockquote {
  margin-bottom: 1rem;
  font-size: 1.25rem; }

.blockquote-footer {
  display: block;
  font-size: 80%;
  color: #6c757d; }
  .blockquote-footer::before {
    content: "\2014\00A0"; }

.img-fluid {
  max-width: 100%;
  height: auto; }

.img-thumbnail {
  padding: 0.25rem;
  background-color: #fff;
  border: 1px solid #dee2e6;
  border-radius: 0.25rem;
  max-width: 100%;
  height: auto; }

.figure {
  display: inline-block; }

.figure-img {
  margin-bottom: 0.5rem;
  line-height: 1; }

.figure-caption {
  font-size: 90%;
  color: #6c757d; }

code {
  font-size: 87.5%;
  color: #e83e8c;
  word-break: break-word; }
  a > code {
    color: inherit; }

kbd {
  padding: 0.2rem 0.4rem;
  font-size: 87.5%;
  color: #fff;
  background-color: #212529;
  border-radius: 0.2rem; }
  kbd kbd {
    padding: 0;
    font-size: 100%;
    font-weight: 700; }

pre {
  display: block;
  font-size: 87.5%;
  color: #212529; }
  pre code {
    font-size: inherit;
    color: inherit;
    word-break: normal; }

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll; }

.container {
  width: 100%;
  padding-right: 10px;
  padding-left: 10px;
  margin-right: auto;
  margin-left: auto; }
  @media (min-width: 576px) {
    .container {
      max-width: 540px; } }
  @media (min-width: 768px) {
    .container {
      max-width: 720px; } }
  @media (min-width: 992px) {
    .container {
      max-width: 960px; } }
  @media (min-width: 1200px) {
    .container {
      max-width: 1140px; } }

.container-fluid {
  width: 100%;
  padding-right: 10px;
  padding-left: 10px;
  margin-right: auto;
  margin-left: auto; }

.row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -10px;
  margin-left: -10px; }

.no-gutters {
  margin-right: 0;
  margin-left: 0; }
  .no-gutters > .col,
  .no-gutters > [class*="col-"] {
    padding-right: 0;
    padding-left: 0; }

.col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .lightGallery .image-tile, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
.col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
.col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
.col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
.col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
.col-xl-auto {
  position: relative;
  width: 100%;
  padding-right: 10px;
  padding-left: 10px; }

.col {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  max-width: 100%; }

.col-auto {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 auto;
  flex: 0 0 auto;
  width: auto;
  max-width: 100%; }

.col-1 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 8.33333%;
  flex: 0 0 8.33333%;
  max-width: 8.33333%; }

.col-2 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 16.66667%;
  flex: 0 0 16.66667%;
  max-width: 16.66667%; }

.col-3 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 25%;
  flex: 0 0 25%;
  max-width: 25%; }

.col-4 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 33.33333%;
  flex: 0 0 33.33333%;
  max-width: 33.33333%; }

.col-5 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 41.66667%;
  flex: 0 0 41.66667%;
  max-width: 41.66667%; }

.col-6, .lightGallery .image-tile {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%; }

.col-7 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 58.33333%;
  flex: 0 0 58.33333%;
  max-width: 58.33333%; }

.col-8 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 66.66667%;
  flex: 0 0 66.66667%;
  max-width: 66.66667%; }

.col-9 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 75%;
  flex: 0 0 75%;
  max-width: 75%; }

.col-10 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 83.33333%;
  flex: 0 0 83.33333%;
  max-width: 83.33333%; }

.col-11 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 91.66667%;
  flex: 0 0 91.66667%;
  max-width: 91.66667%; }

.col-12 {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%; }

.order-first {
  -webkit-box-ordinal-group: 0;
  -ms-flex-order: -1;
  order: -1; }

.order-last {
  -webkit-box-ordinal-group: 14;
  -ms-flex-order: 13;
  order: 13; }

.order-0 {
  -webkit-box-ordinal-group: 1;
  -ms-flex-order: 0;
  order: 0; }

.order-1 {
  -webkit-box-ordinal-group: 2;
  -ms-flex-order: 1;
  order: 1; }

.order-2 {
  -webkit-box-ordinal-group: 3;
  -ms-flex-order: 2;
  order: 2; }

.order-3 {
  -webkit-box-ordinal-group: 4;
  -ms-flex-order: 3;
  order: 3; }

.order-4 {
  -webkit-box-ordinal-group: 5;
  -ms-flex-order: 4;
  order: 4; }

.order-5 {
  -webkit-box-ordinal-group: 6;
  -ms-flex-order: 5;
  order: 5; }

.order-6 {
  -webkit-box-ordinal-group: 7;
  -ms-flex-order: 6;
  order: 6; }

.order-7 {
  -webkit-box-ordinal-group: 8;
  -ms-flex-order: 7;
  order: 7; }

.order-8 {
  -webkit-box-ordinal-group: 9;
  -ms-flex-order: 8;
  order: 8; }

.order-9 {
  -webkit-box-ordinal-group: 10;
  -ms-flex-order: 9;
  order: 9; }

.order-10 {
  -webkit-box-ordinal-group: 11;
  -ms-flex-order: 10;
  order: 10; }

.order-11 {
  -webkit-box-ordinal-group: 12;
  -ms-flex-order: 11;
  order: 11; }

.order-12 {
  -webkit-box-ordinal-group: 13;
  -ms-flex-order: 12;
  order: 12; }

.offset-1 {
  margin-left: 8.33333%; }

.offset-2 {
  margin-left: 16.66667%; }

.offset-3 {
  margin-left: 25%; }

.offset-4 {
  margin-left: 33.33333%; }

.offset-5 {
  margin-left: 41.66667%; }

.offset-6 {
  margin-left: 50%; }

.offset-7 {
  margin-left: 58.33333%; }

.offset-8 {
  margin-left: 66.66667%; }

.offset-9 {
  margin-left: 75%; }

.offset-10 {
  margin-left: 83.33333%; }

.offset-11 {
  margin-left: 91.66667%; }

@media (min-width: 576px) {
  .col-sm {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%; }
  .col-sm-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%; }
  .col-sm-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.33333%;
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-sm-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.66667%;
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-sm-3 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%; }
  .col-sm-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-sm-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.66667%;
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-sm-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%; }
  .col-sm-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-sm-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-sm-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%; }
  .col-sm-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.33333%;
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-sm-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.66667%;
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-sm-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%; }
  .order-sm-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1; }
  .order-sm-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13; }
  .order-sm-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0; }
  .order-sm-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1; }
  .order-sm-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2; }
  .order-sm-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3; }
  .order-sm-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4; }
  .order-sm-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5; }
  .order-sm-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6; }
  .order-sm-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7; }
  .order-sm-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8; }
  .order-sm-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9; }
  .order-sm-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10; }
  .order-sm-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11; }
  .order-sm-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12; }
  .offset-sm-0 {
    margin-left: 0; }
  .offset-sm-1 {
    margin-left: 8.33333%; }
  .offset-sm-2 {
    margin-left: 16.66667%; }
  .offset-sm-3 {
    margin-left: 25%; }
  .offset-sm-4 {
    margin-left: 33.33333%; }
  .offset-sm-5 {
    margin-left: 41.66667%; }
  .offset-sm-6 {
    margin-left: 50%; }
  .offset-sm-7 {
    margin-left: 58.33333%; }
  .offset-sm-8 {
    margin-left: 66.66667%; }
  .offset-sm-9 {
    margin-left: 75%; }
  .offset-sm-10 {
    margin-left: 83.33333%; }
  .offset-sm-11 {
    margin-left: 91.66667%; } }

@media (min-width: 768px) {
  .col-md {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%; }
  .col-md-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%; }
  .col-md-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.33333%;
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-md-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.66667%;
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-md-3, .lightGallery .image-tile {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%; }
  .col-md-4, .lightGallery .image-tile {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-md-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.66667%;
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-md-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%; }
  .col-md-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-md-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-md-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%; }
  .col-md-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.33333%;
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-md-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.66667%;
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-md-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%; }
  .order-md-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1; }
  .order-md-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13; }
  .order-md-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0; }
  .order-md-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1; }
  .order-md-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2; }
  .order-md-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3; }
  .order-md-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4; }
  .order-md-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5; }
  .order-md-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6; }
  .order-md-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7; }
  .order-md-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8; }
  .order-md-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9; }
  .order-md-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10; }
  .order-md-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11; }
  .order-md-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12; }
  .offset-md-0 {
    margin-left: 0; }
  .offset-md-1 {
    margin-left: 8.33333%; }
  .offset-md-2 {
    margin-left: 16.66667%; }
  .offset-md-3 {
    margin-left: 25%; }
  .offset-md-4 {
    margin-left: 33.33333%; }
  .offset-md-5 {
    margin-left: 41.66667%; }
  .offset-md-6 {
    margin-left: 50%; }
  .offset-md-7 {
    margin-left: 58.33333%; }
  .offset-md-8 {
    margin-left: 66.66667%; }
  .offset-md-9 {
    margin-left: 75%; }
  .offset-md-10 {
    margin-left: 83.33333%; }
  .offset-md-11 {
    margin-left: 91.66667%; } }

@media (min-width: 992px) {
  .col-lg {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%; }
  .col-lg-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%; }
  .col-lg-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.33333%;
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-lg-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.66667%;
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-lg-3, .lightGallery .image-tile {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%; }
  .col-lg-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-lg-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.66667%;
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-lg-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%; }
  .col-lg-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-lg-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-lg-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%; }
  .col-lg-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.33333%;
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-lg-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.66667%;
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-lg-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%; }
  .order-lg-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1; }
  .order-lg-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13; }
  .order-lg-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0; }
  .order-lg-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1; }
  .order-lg-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2; }
  .order-lg-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3; }
  .order-lg-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4; }
  .order-lg-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5; }
  .order-lg-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6; }
  .order-lg-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7; }
  .order-lg-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8; }
  .order-lg-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9; }
  .order-lg-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10; }
  .order-lg-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11; }
  .order-lg-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12; }
  .offset-lg-0 {
    margin-left: 0; }
  .offset-lg-1 {
    margin-left: 8.33333%; }
  .offset-lg-2 {
    margin-left: 16.66667%; }
  .offset-lg-3 {
    margin-left: 25%; }
  .offset-lg-4 {
    margin-left: 33.33333%; }
  .offset-lg-5 {
    margin-left: 41.66667%; }
  .offset-lg-6 {
    margin-left: 50%; }
  .offset-lg-7 {
    margin-left: 58.33333%; }
  .offset-lg-8 {
    margin-left: 66.66667%; }
  .offset-lg-9 {
    margin-left: 75%; }
  .offset-lg-10 {
    margin-left: 83.33333%; }
  .offset-lg-11 {
    margin-left: 91.66667%; } }

@media (min-width: 1200px) {
  .col-xl {
    -ms-flex-preferred-size: 0;
    flex-basis: 0;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    max-width: 100%; }
  .col-xl-auto {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 auto;
    flex: 0 0 auto;
    width: auto;
    max-width: 100%; }
  .col-xl-1 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 8.33333%;
    flex: 0 0 8.33333%;
    max-width: 8.33333%; }
  .col-xl-2 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 16.66667%;
    flex: 0 0 16.66667%;
    max-width: 16.66667%; }
  .col-xl-3, .lightGallery .image-tile {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%; }
  .col-xl-4 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 33.33333%;
    flex: 0 0 33.33333%;
    max-width: 33.33333%; }
  .col-xl-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.66667%;
    flex: 0 0 41.66667%;
    max-width: 41.66667%; }
  .col-xl-6 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%; }
  .col-xl-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.33333%;
    flex: 0 0 58.33333%;
    max-width: 58.33333%; }
  .col-xl-8 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 66.66667%;
    flex: 0 0 66.66667%;
    max-width: 66.66667%; }
  .col-xl-9 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%; }
  .col-xl-10 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 83.33333%;
    flex: 0 0 83.33333%;
    max-width: 83.33333%; }
  .col-xl-11 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 91.66667%;
    flex: 0 0 91.66667%;
    max-width: 91.66667%; }
  .col-xl-12 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%; }
  .order-xl-first {
    -webkit-box-ordinal-group: 0;
    -ms-flex-order: -1;
    order: -1; }
  .order-xl-last {
    -webkit-box-ordinal-group: 14;
    -ms-flex-order: 13;
    order: 13; }
  .order-xl-0 {
    -webkit-box-ordinal-group: 1;
    -ms-flex-order: 0;
    order: 0; }
  .order-xl-1 {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1; }
  .order-xl-2 {
    -webkit-box-ordinal-group: 3;
    -ms-flex-order: 2;
    order: 2; }
  .order-xl-3 {
    -webkit-box-ordinal-group: 4;
    -ms-flex-order: 3;
    order: 3; }
  .order-xl-4 {
    -webkit-box-ordinal-group: 5;
    -ms-flex-order: 4;
    order: 4; }
  .order-xl-5 {
    -webkit-box-ordinal-group: 6;
    -ms-flex-order: 5;
    order: 5; }
  .order-xl-6 {
    -webkit-box-ordinal-group: 7;
    -ms-flex-order: 6;
    order: 6; }
  .order-xl-7 {
    -webkit-box-ordinal-group: 8;
    -ms-flex-order: 7;
    order: 7; }
  .order-xl-8 {
    -webkit-box-ordinal-group: 9;
    -ms-flex-order: 8;
    order: 8; }
  .order-xl-9 {
    -webkit-box-ordinal-group: 10;
    -ms-flex-order: 9;
    order: 9; }
  .order-xl-10 {
    -webkit-box-ordinal-group: 11;
    -ms-flex-order: 10;
    order: 10; }
  .order-xl-11 {
    -webkit-box-ordinal-group: 12;
    -ms-flex-order: 11;
    order: 11; }
  .order-xl-12 {
    -webkit-box-ordinal-group: 13;
    -ms-flex-order: 12;
    order: 12; }
  .offset-xl-0 {
    margin-left: 0; }
  .offset-xl-1 {
    margin-left: 8.33333%; }
  .offset-xl-2 {
    margin-left: 16.66667%; }
  .offset-xl-3 {
    margin-left: 25%; }
  .offset-xl-4 {
    margin-left: 33.33333%; }
  .offset-xl-5 {
    margin-left: 41.66667%; }
  .offset-xl-6 {
    margin-left: 50%; }
  .offset-xl-7 {
    margin-left: 58.33333%; }
  .offset-xl-8 {
    margin-left: 66.66667%; }
  .offset-xl-9 {
    margin-left: 75%; }
  .offset-xl-10 {
    margin-left: 83.33333%; }
  .offset-xl-11 {
    margin-left: 91.66667%; } }

.table, .jsgrid .jsgrid-table {
  width: 100%;
  margin-bottom: 1rem;
  color: #212529; }
  .table th, .jsgrid .jsgrid-table th,
  .table td,
  .jsgrid .jsgrid-table td {
    padding: 0.9375rem;
    vertical-align: top;
    border-top: 1px solid #e8e5e5; }
  .table thead th, .jsgrid .jsgrid-table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #e8e5e5; }
  .table tbody + tbody, .jsgrid .jsgrid-table tbody + tbody {
    border-top: 2px solid #e8e5e5; }

.table-sm th,
.table-sm td {
  padding: 0.3rem; }

.table-bordered {
  border: 1px solid #e8e5e5; }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #e8e5e5; }
  .table-bordered thead th,
  .table-bordered thead td {
    border-bottom-width: 2px; }

.table-borderless th,
.table-borderless td,
.table-borderless thead th,
.table-borderless tbody + tbody {
  border: 0; }

.table-striped tbody tr:nth-of-type(odd) {
  background-color: #ecf0f4; }

.table-hover tbody tr:hover {
  color: #212529;
  background-color: #ecf0f4; }

.table-primary,
.table-primary > th,
.table-primary > td {
  background-color: #bff5f6; }

.table-primary th,
.table-primary td,
.table-primary thead th,
.table-primary tbody + tbody {
  border-color: #88ecef; }

.table-hover .table-primary:hover {
  background-color: #a9f2f3; }
  .table-hover .table-primary:hover > td,
  .table-hover .table-primary:hover > th {
    background-color: #a9f2f3; }

.table-secondary,
.table-secondary > th,
.table-secondary > td {
  background-color: #f4f4f4; }

.table-secondary th,
.table-secondary td,
.table-secondary thead th,
.table-secondary tbody + tbody {
  border-color: #ebebeb; }

.table-hover .table-secondary:hover {
  background-color: #e7e7e7; }
  .table-hover .table-secondary:hover > td,
  .table-hover .table-secondary:hover > th {
    background-color: #e7e7e7; }

.table-success,
.table-success > th,
.table-success > td {
  background-color: #c7f1c8; }

.table-success th,
.table-success td,
.table-success thead th,
.table-success tbody + tbody {
  border-color: #98e69a; }

.table-hover .table-success:hover {
  background-color: #b3ecb4; }
  .table-hover .table-success:hover > td,
  .table-hover .table-success:hover > th {
    background-color: #b3ecb4; }

.table-info,
.table-info > th,
.table-info > td {
  background-color: #dfc6f9; }

.table-info th,
.table-info td,
.table-info thead th,
.table-info tbody + tbody {
  border-color: #c494f4; }

.table-hover .table-info:hover {
  background-color: #d2aff7; }
  .table-hover .table-info:hover > td,
  .table-hover .table-info:hover > th {
    background-color: #d2aff7; }

.table-warning,
.table-warning > th,
.table-warning > td {
  background-color: #fff6d8; }

.table-warning th,
.table-warning td,
.table-warning thead th,
.table-warning tbody + tbody {
  border-color: #ffeeb6; }

.table-hover .table-warning:hover {
  background-color: #fff0bf; }
  .table-hover .table-warning:hover > td,
  .table-hover .table-warning:hover > th {
    background-color: #fff0bf; }

.table-danger,
.table-danger > th,
.table-danger > td {
  background-color: #ffcdd6; }

.table-danger th,
.table-danger td,
.table-danger thead th,
.table-danger tbody + tbody {
  border-color: #ffa2b2; }

.table-hover .table-danger:hover {
  background-color: #ffb4c1; }
  .table-hover .table-danger:hover > td,
  .table-hover .table-danger:hover > th {
    background-color: #ffb4c1; }

.table-light,
.table-light > th,
.table-light > td {
  background-color: #fdfdfe; }

.table-light th,
.table-light td,
.table-light thead th,
.table-light tbody + tbody {
  border-color: #fbfcfc; }

.table-hover .table-light:hover {
  background-color: #ececf6; }
  .table-hover .table-light:hover > td,
  .table-hover .table-light:hover > th {
    background-color: #ececf6; }

.table-dark,
.table-dark > th,
.table-dark > td {
  background-color: #c9cdd1; }

.table-dark th,
.table-dark td,
.table-dark thead th,
.table-dark tbody + tbody {
  border-color: #9ba1aa; }

.table-hover .table-dark:hover {
  background-color: #bbc0c5; }
  .table-hover .table-dark:hover > td,
  .table-hover .table-dark:hover > th {
    background-color: #bbc0c5; }

.table-active,
.table-active > th,
.table-active > td {
  background-color: rgba(0, 0, 0, 0.075); }

.table-hover .table-active:hover {
  background-color: rgba(0, 0, 0, 0.075); }
  .table-hover .table-active:hover > td,
  .table-hover .table-active:hover > th {
    background-color: rgba(0, 0, 0, 0.075); }

.table .thead-dark th, .jsgrid .jsgrid-table .thead-dark th {
  color: #fff;
  background-color: #343a40;
  border-color: #454d55; }

.table .thead-light th, .jsgrid .jsgrid-table .thead-light th {
  color: #495057;
  background-color: #e9ecef;
  border-color: #e8e5e5; }

.table-dark {
  color: #fff;
  background-color: #343a40; }
  .table-dark th,
  .table-dark td,
  .table-dark thead th {
    border-color: #454d55; }
  .table-dark.table-bordered {
    border: 0; }
  .table-dark.table-striped tbody tr:nth-of-type(odd) {
    background-color: rgba(255, 255, 255, 0.05); }
  .table-dark.table-hover tbody tr:hover {
    color: #fff;
    background-color: rgba(255, 255, 255, 0.075); }

@media (max-width: 575.98px) {
  .table-responsive-sm {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; }
    .table-responsive-sm > .table-bordered {
      border: 0; } }

@media (max-width: 767.98px) {
  .table-responsive-md {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; }
    .table-responsive-md > .table-bordered {
      border: 0; } }

@media (max-width: 991.98px) {
  .table-responsive-lg {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; }
    .table-responsive-lg > .table-bordered {
      border: 0; } }

@media (max-width: 1199.98px) {
  .table-responsive-xl {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch; }
    .table-responsive-xl > .table-bordered {
      border: 0; } }

.table-responsive {
  display: block;
  width: 100%;
  overflow-x: auto;
  -webkit-overflow-scrolling: touch; }
  .table-responsive > .table-bordered {
    border: 0; }

.form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
.tt-query,
.tt-hint {
  display: block;
  width: 100%;
  height: 2.875rem;
  padding: 0.94rem 1.375rem;
  font-size: 0.8125rem;
  font-weight: 400;
  line-height: 1;
  color: #495057;
  background-color: #ffffff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 2px;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text],
    .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
    .tt-query,
    .tt-hint {
      -webkit-transition: none;
      transition: none; } }
  .form-control::-ms-expand, .asColorPicker-input::-ms-expand, .dataTables_wrapper select::-ms-expand, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::-ms-expand,
  .jsgrid .jsgrid-table .jsgrid-filter-row select::-ms-expand, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::-ms-expand, .select2-container--default .select2-selection--single::-ms-expand, .select2-container--default .select2-selection--single .select2-search__field::-ms-expand, .typeahead::-ms-expand,
  .tt-query::-ms-expand,
  .tt-hint::-ms-expand {
    background-color: transparent;
    border: 0; }
  .form-control:focus, .asColorPicker-input:focus, .dataTables_wrapper select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text],
  .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
  .tt-query:focus,
  .tt-hint:focus {
    color: #495057;
    background-color: #fff;
    border-color: #80bdff;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
  .form-control::-webkit-input-placeholder, .asColorPicker-input::-webkit-input-placeholder, .dataTables_wrapper select::-webkit-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::-webkit-input-placeholder,
  .jsgrid .jsgrid-table .jsgrid-filter-row select::-webkit-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::-webkit-input-placeholder, .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .typeahead::-webkit-input-placeholder,
  .tt-query::-webkit-input-placeholder,
  .tt-hint::-webkit-input-placeholder {
    color: #c9c8c8;
    opacity: 1; }
  .form-control::-moz-placeholder, .asColorPicker-input::-moz-placeholder, .dataTables_wrapper select::-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::-moz-placeholder,
  .jsgrid .jsgrid-table .jsgrid-filter-row select::-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::-moz-placeholder, .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .typeahead::-moz-placeholder,
  .tt-query::-moz-placeholder,
  .tt-hint::-moz-placeholder {
    color: #c9c8c8;
    opacity: 1; }
  .form-control:-ms-input-placeholder, .asColorPicker-input:-ms-input-placeholder, .dataTables_wrapper select:-ms-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]:-ms-input-placeholder,
  .jsgrid .jsgrid-table .jsgrid-filter-row select:-ms-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]:-ms-input-placeholder, .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .typeahead:-ms-input-placeholder,
  .tt-query:-ms-input-placeholder,
  .tt-hint:-ms-input-placeholder {
    color: #c9c8c8;
    opacity: 1; }
  .form-control::-ms-input-placeholder, .asColorPicker-input::-ms-input-placeholder, .dataTables_wrapper select::-ms-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::-ms-input-placeholder,
  .jsgrid .jsgrid-table .jsgrid-filter-row select::-ms-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::-ms-input-placeholder, .select2-container--default .select2-selection--single::-ms-input-placeholder, .select2-container--default .select2-selection--single .select2-search__field::-ms-input-placeholder, .typeahead::-ms-input-placeholder,
  .tt-query::-ms-input-placeholder,
  .tt-hint::-ms-input-placeholder {
    color: #c9c8c8;
    opacity: 1; }
  .form-control::placeholder, .asColorPicker-input::placeholder, .dataTables_wrapper select::placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::placeholder,
  .jsgrid .jsgrid-table .jsgrid-filter-row select::placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::placeholder, .select2-container--default .select2-selection--single::placeholder, .select2-container--default .select2-selection--single .select2-search__field::placeholder, .typeahead::placeholder,
  .tt-query::placeholder,
  .tt-hint::placeholder {
    color: #c9c8c8;
    opacity: 1; }
  .form-control:disabled, .asColorPicker-input:disabled, .dataTables_wrapper select:disabled, .jsgrid .jsgrid-table .jsgrid-filter-row input:disabled[type=text],
  .jsgrid .jsgrid-table .jsgrid-filter-row select:disabled, .jsgrid .jsgrid-table .jsgrid-filter-row input:disabled[type=number], .select2-container--default .select2-selection--single:disabled, .select2-container--default .select2-selection--single .select2-search__field:disabled, .typeahead:disabled,
  .tt-query:disabled,
  .tt-hint:disabled, .form-control[readonly], .asColorPicker-input[readonly], .dataTables_wrapper select[readonly], .jsgrid .jsgrid-table .jsgrid-filter-row input[readonly][type=text],
  .jsgrid .jsgrid-table .jsgrid-filter-row select[readonly], .jsgrid .jsgrid-table .jsgrid-filter-row input[readonly][type=number], .select2-container--default .select2-selection--single[readonly], .select2-container--default .select2-selection--single .select2-search__field[readonly], .typeahead[readonly],
  .tt-query[readonly],
  .tt-hint[readonly] {
    background-color: #e9ecef;
    opacity: 1; }

select.form-control:focus::-ms-value, select.asColorPicker-input:focus::-ms-value, .dataTables_wrapper select:focus::-ms-value,
.jsgrid .jsgrid-table .jsgrid-filter-row select:focus::-ms-value, .select2-container--default select.select2-selection--single:focus::-ms-value, .select2-container--default .select2-selection--single select.select2-search__field:focus::-ms-value, select.typeahead:focus::-ms-value,
select.tt-query:focus::-ms-value,
select.tt-hint:focus::-ms-value {
  color: #495057;
  background-color: #ffffff; }

.form-control-file,
.form-control-range {
  display: block;
  width: 100%; }

.col-form-label {
  padding-top: calc(0.94rem + 1px);
  padding-bottom: calc(0.94rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1; }

.col-form-label-lg {
  padding-top: calc(0.94rem + 1px);
  padding-bottom: calc(0.94rem + 1px);
  font-size: 1.25rem;
  line-height: 1.5; }

.col-form-label-sm {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 0.875rem;
  line-height: 1.5; }

.form-control-plaintext {
  display: block;
  width: 100%;
  padding-top: 0.94rem;
  padding-bottom: 0.94rem;
  margin-bottom: 0;
  line-height: 1;
  color: #212529;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0; }
  .form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
    padding-right: 0;
    padding-left: 0; }

.form-control-sm {
  height: 2.575rem;
  padding: 0.5rem 0.81rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem; }

.form-control-lg {
  height: 3.175rem;
  padding: 0.94rem 1.94rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem; }

select.form-control[size], select.asColorPicker-input[size], .dataTables_wrapper select[size],
.jsgrid .jsgrid-table .jsgrid-filter-row select[size], .select2-container--default select.select2-selection--single[size], .select2-container--default .select2-selection--single select.select2-search__field[size], select.typeahead[size],
select.tt-query[size],
select.tt-hint[size], select.form-control[multiple], select.asColorPicker-input[multiple], .dataTables_wrapper select[multiple],
.jsgrid .jsgrid-table .jsgrid-filter-row select[multiple], .select2-container--default select.select2-selection--single[multiple], .select2-container--default .select2-selection--single select.select2-search__field[multiple], select.typeahead[multiple],
select.tt-query[multiple],
select.tt-hint[multiple] {
  height: auto; }

textarea.form-control, textarea.asColorPicker-input, .select2-container--default textarea.select2-selection--single, .select2-container--default .select2-selection--single textarea.select2-search__field, textarea.typeahead,
textarea.tt-query,
textarea.tt-hint {
  height: auto; }

.form-group {
  margin-bottom: 1rem; }

.form-text {
  display: block;
  margin-top: 0.25rem; }

.form-row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px; }
  .form-row > .col,
  .form-row > [class*="col-"] {
    padding-right: 5px;
    padding-left: 5px; }

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem; }

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem; }
  .form-check-input:disabled ~ .form-check-label {
    color: #9c9fa6; }

.form-check-label {
  margin-bottom: 0; }

.form-check-inline {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem; }
  .form-check-inline .form-check-input {
    position: static;
    margin-top: 0;
    margin-right: 0.3125rem;
    margin-left: 0; }

.valid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #28a745; }

.valid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(40, 167, 69, 0.9);
  border-radius: 0.25rem; }

.was-validated .form-control:valid, .was-validated .asColorPicker-input:valid, .was-validated .dataTables_wrapper select:valid, .dataTables_wrapper .was-validated select:valid, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:valid[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:valid[type=text],
.was-validated .jsgrid .jsgrid-table .jsgrid-filter-row select:valid, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:valid, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:valid[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:valid[type=number], .was-validated .select2-container--default .select2-selection--single:valid, .select2-container--default .was-validated .select2-selection--single:valid, .was-validated .select2-container--default .select2-selection--single .select2-search__field:valid, .select2-container--default .select2-selection--single .was-validated .select2-search__field:valid, .was-validated .typeahead:valid,
.was-validated .tt-query:valid,
.was-validated .tt-hint:valid, .form-control.is-valid, .is-valid.asColorPicker-input, .dataTables_wrapper select.is-valid, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select.is-valid, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=number], .select2-container--default .is-valid.select2-selection--single, .select2-container--default .select2-selection--single .is-valid.select2-search__field, .is-valid.typeahead,
.is-valid.tt-query,
.is-valid.tt-hint {
  border-color: #28a745;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: center right calc(0.375em + 0.1875rem);
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
  .was-validated .form-control:valid:focus, .was-validated .asColorPicker-input:valid:focus, .was-validated .dataTables_wrapper select:valid:focus, .dataTables_wrapper .was-validated select:valid:focus, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:valid:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:valid:focus[type=text],
  .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row select:valid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:valid:focus, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:valid:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:valid:focus[type=number], .was-validated .select2-container--default .select2-selection--single:valid:focus, .select2-container--default .was-validated .select2-selection--single:valid:focus, .was-validated .select2-container--default .select2-selection--single .select2-search__field:valid:focus, .select2-container--default .select2-selection--single .was-validated .select2-search__field:valid:focus, .was-validated .typeahead:valid:focus,
  .was-validated .tt-query:valid:focus,
  .was-validated .tt-hint:valid:focus, .form-control.is-valid:focus, .is-valid.asColorPicker-input:focus, .dataTables_wrapper select.is-valid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid:focus[type=text],
  .jsgrid .jsgrid-table .jsgrid-filter-row select.is-valid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid:focus[type=number], .select2-container--default .is-valid.select2-selection--single:focus, .select2-container--default .select2-selection--single .is-valid.select2-search__field:focus, .is-valid.typeahead:focus,
  .is-valid.tt-query:focus,
  .is-valid.tt-hint:focus {
    border-color: #28a745;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }
  .was-validated .form-control:valid ~ .valid-feedback, .was-validated .asColorPicker-input:valid ~ .valid-feedback, .was-validated .dataTables_wrapper select:valid ~ .valid-feedback, .dataTables_wrapper .was-validated select:valid ~ .valid-feedback, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:valid[type=text] ~ .valid-feedback, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:valid[type=text] ~ .valid-feedback, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row select:valid ~ .valid-feedback, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:valid ~ .valid-feedback, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:valid[type=number] ~ .valid-feedback, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:valid[type=number] ~ .valid-feedback, .was-validated .select2-container--default .select2-selection--single:valid ~ .valid-feedback, .select2-container--default .was-validated .select2-selection--single:valid ~ .valid-feedback, .was-validated .select2-container--default .select2-selection--single .select2-search__field:valid ~ .valid-feedback, .select2-container--default .select2-selection--single .was-validated .select2-search__field:valid ~ .valid-feedback, .was-validated .typeahead:valid ~ .valid-feedback, .was-validated .tt-query:valid ~ .valid-feedback, .was-validated .tt-hint:valid ~ .valid-feedback,
  .was-validated .form-control:valid ~ .valid-tooltip,
  .was-validated .asColorPicker-input:valid ~ .valid-tooltip,
  .was-validated .dataTables_wrapper select:valid ~ .valid-tooltip,
  .dataTables_wrapper .was-validated select:valid ~ .valid-tooltip,
  .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:valid[type=text] ~ .valid-tooltip,
  .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:valid[type=text] ~ .valid-tooltip,
  .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row select:valid ~ .valid-tooltip,
  .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:valid ~ .valid-tooltip,
  .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:valid[type=number] ~ .valid-tooltip,
  .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:valid[type=number] ~ .valid-tooltip,
  .was-validated .select2-container--default .select2-selection--single:valid ~ .valid-tooltip,
  .select2-container--default .was-validated .select2-selection--single:valid ~ .valid-tooltip,
  .was-validated .select2-container--default .select2-selection--single .select2-search__field:valid ~ .valid-tooltip,
  .select2-container--default .select2-selection--single .was-validated .select2-search__field:valid ~ .valid-tooltip,
  .was-validated .typeahead:valid ~ .valid-tooltip,
  .was-validated .tt-query:valid ~ .valid-tooltip,
  .was-validated .tt-hint:valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback, .is-valid.asColorPicker-input ~ .valid-feedback, .dataTables_wrapper select.is-valid ~ .valid-feedback, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=text] ~ .valid-feedback, .jsgrid .jsgrid-table .jsgrid-filter-row select.is-valid ~ .valid-feedback, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=number] ~ .valid-feedback, .select2-container--default .is-valid.select2-selection--single ~ .valid-feedback, .select2-container--default .select2-selection--single .is-valid.select2-search__field ~ .valid-feedback, .is-valid.typeahead ~ .valid-feedback, .is-valid.tt-query ~ .valid-feedback, .is-valid.tt-hint ~ .valid-feedback,
  .form-control.is-valid ~ .valid-tooltip,
  .is-valid.asColorPicker-input ~ .valid-tooltip,
  .dataTables_wrapper select.is-valid ~ .valid-tooltip,
  .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=text] ~ .valid-tooltip,
  .jsgrid .jsgrid-table .jsgrid-filter-row select.is-valid ~ .valid-tooltip,
  .jsgrid .jsgrid-table .jsgrid-filter-row input.is-valid[type=number] ~ .valid-tooltip,
  .select2-container--default .is-valid.select2-selection--single ~ .valid-tooltip,
  .select2-container--default .select2-selection--single .is-valid.select2-search__field ~ .valid-tooltip,
  .is-valid.typeahead ~ .valid-tooltip,
  .is-valid.tt-query ~ .valid-tooltip,
  .is-valid.tt-hint ~ .valid-tooltip {
    display: block; }

.was-validated textarea.form-control:valid, .was-validated textarea.asColorPicker-input:valid, .was-validated .select2-container--default textarea.select2-selection--single:valid, .select2-container--default .was-validated textarea.select2-selection--single:valid, .was-validated .select2-container--default .select2-selection--single textarea.select2-search__field:valid, .select2-container--default .select2-selection--single .was-validated textarea.select2-search__field:valid, .was-validated textarea.typeahead:valid,
.was-validated textarea.tt-query:valid,
.was-validated textarea.tt-hint:valid, textarea.form-control.is-valid, textarea.is-valid.asColorPicker-input, .select2-container--default textarea.is-valid.select2-selection--single, .select2-container--default .select2-selection--single textarea.is-valid.select2-search__field, textarea.is-valid.typeahead,
textarea.is-valid.tt-query,
textarea.is-valid.tt-hint {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem); }

.was-validated .custom-select:valid, .custom-select.is-valid {
  border-color: #28a745;
  padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
  .was-validated .custom-select:valid:focus, .custom-select.is-valid:focus {
    border-color: #28a745;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }
  .was-validated .custom-select:valid ~ .valid-feedback,
  .was-validated .custom-select:valid ~ .valid-tooltip, .custom-select.is-valid ~ .valid-feedback,
  .custom-select.is-valid ~ .valid-tooltip {
    display: block; }

.was-validated .form-control-file:valid ~ .valid-feedback,
.was-validated .form-control-file:valid ~ .valid-tooltip, .form-control-file.is-valid ~ .valid-feedback,
.form-control-file.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
  color: #28a745; }

.was-validated .form-check-input:valid ~ .valid-feedback,
.was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
.form-check-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
  color: #28a745; }
  .was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
    border-color: #28a745; }

.was-validated .custom-control-input:valid ~ .valid-feedback,
.was-validated .custom-control-input:valid ~ .valid-tooltip, .custom-control-input.is-valid ~ .valid-feedback,
.custom-control-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
  border-color: #34ce57;
  background-color: #34ce57; }

.was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
  -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }

.was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #28a745; }

.was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
  border-color: #28a745; }

.was-validated .custom-file-input:valid ~ .valid-feedback,
.was-validated .custom-file-input:valid ~ .valid-tooltip, .custom-file-input.is-valid ~ .valid-feedback,
.custom-file-input.is-valid ~ .valid-tooltip {
  display: block; }

.was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
  border-color: #28a745;
  -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
  box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }

.invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 80%;
  color: #dc3545; }

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(220, 53, 69, 0.9);
  border-radius: 0.25rem; }

.was-validated .form-control:invalid, .was-validated .asColorPicker-input:invalid, .was-validated .dataTables_wrapper select:invalid, .dataTables_wrapper .was-validated select:invalid, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:invalid[type=text],
.was-validated .jsgrid .jsgrid-table .jsgrid-filter-row select:invalid, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:invalid, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:invalid[type=number], .was-validated .select2-container--default .select2-selection--single:invalid, .select2-container--default .was-validated .select2-selection--single:invalid, .was-validated .select2-container--default .select2-selection--single .select2-search__field:invalid, .select2-container--default .select2-selection--single .was-validated .select2-search__field:invalid, .was-validated .typeahead:invalid,
.was-validated .tt-query:invalid,
.was-validated .tt-hint:invalid, .form-control.is-invalid, .is-invalid.asColorPicker-input, .dataTables_wrapper select.is-invalid, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select.is-invalid, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=number], .select2-container--default .is-invalid.select2-selection--single, .select2-container--default .select2-selection--single .is-invalid.select2-search__field, .is-invalid.typeahead,
.is-invalid.tt-query,
.is-invalid.tt-hint {
  border-color: #dc3545;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E");
  background-repeat: no-repeat;
  background-position: center right calc(0.375em + 0.1875rem);
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
  .was-validated .form-control:invalid:focus, .was-validated .asColorPicker-input:invalid:focus, .was-validated .dataTables_wrapper select:invalid:focus, .dataTables_wrapper .was-validated select:invalid:focus, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:invalid:focus[type=text],
  .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row select:invalid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:invalid:focus, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:invalid:focus[type=number], .was-validated .select2-container--default .select2-selection--single:invalid:focus, .select2-container--default .was-validated .select2-selection--single:invalid:focus, .was-validated .select2-container--default .select2-selection--single .select2-search__field:invalid:focus, .select2-container--default .select2-selection--single .was-validated .select2-search__field:invalid:focus, .was-validated .typeahead:invalid:focus,
  .was-validated .tt-query:invalid:focus,
  .was-validated .tt-hint:invalid:focus, .form-control.is-invalid:focus, .is-invalid.asColorPicker-input:focus, .dataTables_wrapper select.is-invalid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid:focus[type=text],
  .jsgrid .jsgrid-table .jsgrid-filter-row select.is-invalid:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid:focus[type=number], .select2-container--default .is-invalid.select2-selection--single:focus, .select2-container--default .select2-selection--single .is-invalid.select2-search__field:focus, .is-invalid.typeahead:focus,
  .is-invalid.tt-query:focus,
  .is-invalid.tt-hint:focus {
    border-color: #dc3545;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }
  .was-validated .form-control:invalid ~ .invalid-feedback, .was-validated .asColorPicker-input:invalid ~ .invalid-feedback, .was-validated .dataTables_wrapper select:invalid ~ .invalid-feedback, .dataTables_wrapper .was-validated select:invalid ~ .invalid-feedback, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid[type=text] ~ .invalid-feedback, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:invalid[type=text] ~ .invalid-feedback, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row select:invalid ~ .invalid-feedback, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:invalid ~ .invalid-feedback, .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid[type=number] ~ .invalid-feedback, .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:invalid[type=number] ~ .invalid-feedback, .was-validated .select2-container--default .select2-selection--single:invalid ~ .invalid-feedback, .select2-container--default .was-validated .select2-selection--single:invalid ~ .invalid-feedback, .was-validated .select2-container--default .select2-selection--single .select2-search__field:invalid ~ .invalid-feedback, .select2-container--default .select2-selection--single .was-validated .select2-search__field:invalid ~ .invalid-feedback, .was-validated .typeahead:invalid ~ .invalid-feedback, .was-validated .tt-query:invalid ~ .invalid-feedback, .was-validated .tt-hint:invalid ~ .invalid-feedback,
  .was-validated .form-control:invalid ~ .invalid-tooltip,
  .was-validated .asColorPicker-input:invalid ~ .invalid-tooltip,
  .was-validated .dataTables_wrapper select:invalid ~ .invalid-tooltip,
  .dataTables_wrapper .was-validated select:invalid ~ .invalid-tooltip,
  .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid[type=text] ~ .invalid-tooltip,
  .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:invalid[type=text] ~ .invalid-tooltip,
  .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row select:invalid ~ .invalid-tooltip,
  .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated select:invalid ~ .invalid-tooltip,
  .was-validated .jsgrid .jsgrid-table .jsgrid-filter-row input:invalid[type=number] ~ .invalid-tooltip,
  .jsgrid .jsgrid-table .jsgrid-filter-row .was-validated input:invalid[type=number] ~ .invalid-tooltip,
  .was-validated .select2-container--default .select2-selection--single:invalid ~ .invalid-tooltip,
  .select2-container--default .was-validated .select2-selection--single:invalid ~ .invalid-tooltip,
  .was-validated .select2-container--default .select2-selection--single .select2-search__field:invalid ~ .invalid-tooltip,
  .select2-container--default .select2-selection--single .was-validated .select2-search__field:invalid ~ .invalid-tooltip,
  .was-validated .typeahead:invalid ~ .invalid-tooltip,
  .was-validated .tt-query:invalid ~ .invalid-tooltip,
  .was-validated .tt-hint:invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback, .is-invalid.asColorPicker-input ~ .invalid-feedback, .dataTables_wrapper select.is-invalid ~ .invalid-feedback, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=text] ~ .invalid-feedback, .jsgrid .jsgrid-table .jsgrid-filter-row select.is-invalid ~ .invalid-feedback, .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=number] ~ .invalid-feedback, .select2-container--default .is-invalid.select2-selection--single ~ .invalid-feedback, .select2-container--default .select2-selection--single .is-invalid.select2-search__field ~ .invalid-feedback, .is-invalid.typeahead ~ .invalid-feedback, .is-invalid.tt-query ~ .invalid-feedback, .is-invalid.tt-hint ~ .invalid-feedback,
  .form-control.is-invalid ~ .invalid-tooltip,
  .is-invalid.asColorPicker-input ~ .invalid-tooltip,
  .dataTables_wrapper select.is-invalid ~ .invalid-tooltip,
  .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=text] ~ .invalid-tooltip,
  .jsgrid .jsgrid-table .jsgrid-filter-row select.is-invalid ~ .invalid-tooltip,
  .jsgrid .jsgrid-table .jsgrid-filter-row input.is-invalid[type=number] ~ .invalid-tooltip,
  .select2-container--default .is-invalid.select2-selection--single ~ .invalid-tooltip,
  .select2-container--default .select2-selection--single .is-invalid.select2-search__field ~ .invalid-tooltip,
  .is-invalid.typeahead ~ .invalid-tooltip,
  .is-invalid.tt-query ~ .invalid-tooltip,
  .is-invalid.tt-hint ~ .invalid-tooltip {
    display: block; }

.was-validated textarea.form-control:invalid, .was-validated textarea.asColorPicker-input:invalid, .was-validated .select2-container--default textarea.select2-selection--single:invalid, .select2-container--default .was-validated textarea.select2-selection--single:invalid, .was-validated .select2-container--default .select2-selection--single textarea.select2-search__field:invalid, .select2-container--default .select2-selection--single .was-validated textarea.select2-search__field:invalid, .was-validated textarea.typeahead:invalid,
.was-validated textarea.tt-query:invalid,
.was-validated textarea.tt-hint:invalid, textarea.form-control.is-invalid, textarea.is-invalid.asColorPicker-input, .select2-container--default textarea.is-invalid.select2-selection--single, .select2-container--default .select2-selection--single textarea.is-invalid.select2-search__field, textarea.is-invalid.typeahead,
textarea.is-invalid.tt-query,
textarea.is-invalid.tt-hint {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem); }

.was-validated .custom-select:invalid, .custom-select.is-invalid {
  border-color: #dc3545;
  padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
  .was-validated .custom-select:invalid:focus, .custom-select.is-invalid:focus {
    border-color: #dc3545;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }
  .was-validated .custom-select:invalid ~ .invalid-feedback,
  .was-validated .custom-select:invalid ~ .invalid-tooltip, .custom-select.is-invalid ~ .invalid-feedback,
  .custom-select.is-invalid ~ .invalid-tooltip {
    display: block; }

.was-validated .form-control-file:invalid ~ .invalid-feedback,
.was-validated .form-control-file:invalid ~ .invalid-tooltip, .form-control-file.is-invalid ~ .invalid-feedback,
.form-control-file.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #dc3545; }

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #dc3545; }
  .was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
    border-color: #dc3545; }

.was-validated .custom-control-input:invalid ~ .invalid-feedback,
.was-validated .custom-control-input:invalid ~ .invalid-tooltip, .custom-control-input.is-invalid ~ .invalid-feedback,
.custom-control-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  border-color: #e4606d;
  background-color: #e4606d; }

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }

.was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #dc3545; }

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #dc3545; }

.was-validated .custom-file-input:invalid ~ .invalid-feedback,
.was-validated .custom-file-input:invalid ~ .invalid-tooltip, .custom-file-input.is-invalid ~ .invalid-feedback,
.custom-file-input.is-invalid ~ .invalid-tooltip {
  display: block; }

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  border-color: #dc3545;
  -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }

.form-inline {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-flow: row wrap;
  flex-flow: row wrap;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center; }
  .form-inline .form-check {
    width: 100%; }
  @media (min-width: 576px) {
    .form-inline label {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      margin-bottom: 0; }
    .form-inline .form-group {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-flex: 0;
      -ms-flex: 0 0 auto;
      flex: 0 0 auto;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-flow: row wrap;
      flex-flow: row wrap;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      margin-bottom: 0; }
    .form-inline .form-control, .form-inline .asColorPicker-input, .form-inline .dataTables_wrapper select, .dataTables_wrapper .form-inline select, .form-inline .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .form-inline input[type=text],
    .form-inline .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .form-inline select, .form-inline .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .form-inline input[type=number], .form-inline .select2-container--default .select2-selection--single, .select2-container--default .form-inline .select2-selection--single, .form-inline .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .form-inline .select2-search__field, .form-inline .typeahead,
    .form-inline .tt-query,
    .form-inline .tt-hint {
      display: inline-block;
      width: auto;
      vertical-align: middle; }
    .form-inline .form-control-plaintext {
      display: inline-block; }
    .form-inline .input-group, .form-inline .asColorPicker-wrap,
    .form-inline .custom-select {
      width: auto; }
    .form-inline .form-check {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      width: auto;
      padding-left: 0; }
    .form-inline .form-check-input {
      position: relative;
      -ms-flex-negative: 0;
      flex-shrink: 0;
      margin-top: 0;
      margin-right: 0.25rem;
      margin-left: 0; }
    .form-inline .custom-control {
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center; }
    .form-inline .custom-control-label {
      margin-bottom: 0; } }

.btn, .fc button, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel, .wizard > .actions a {
  display: inline-block;
  font-weight: 400;
  color: #343a40;
  text-align: center;
  vertical-align: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-color: transparent;
  border: 1px solid transparent;
  padding: 0.875rem 2.5rem;
  font-size: 0.875rem;
  line-height: 1;
  border-radius: 0.1875rem;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .btn, .fc button, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel, .wizard > .actions a {
      -webkit-transition: none;
      transition: none; } }
  .btn:hover, .fc button:hover, .ajax-upload-dragdrop .ajax-file-upload:hover, .swal2-modal .swal2-buttonswrapper .swal2-styled:hover, .wizard > .actions a:hover {
    color: #343a40;
    text-decoration: none; }
  .btn:focus, .fc button:focus, .ajax-upload-dragdrop .ajax-file-upload:focus, .swal2-modal .swal2-buttonswrapper .swal2-styled:focus, .wizard > .actions a:focus, .btn.focus, .fc button.focus, .ajax-upload-dragdrop .focus.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .focus.swal2-styled, .wizard > .actions a.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
  .btn.disabled, .fc button.disabled, .ajax-upload-dragdrop .disabled.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .disabled.swal2-styled, .wizard > .actions a.disabled, .btn:disabled, .fc button:disabled, .ajax-upload-dragdrop .ajax-file-upload:disabled, .swal2-modal .swal2-buttonswrapper .swal2-styled:disabled, .wizard > .actions a:disabled {
    opacity: 0.65; }

a.btn.disabled, .ajax-upload-dragdrop a.disabled.ajax-file-upload, .swal2-modal .swal2-buttonswrapper a.disabled.swal2-styled, .wizard > .actions a.disabled,
fieldset:disabled a.btn,
fieldset:disabled .ajax-upload-dragdrop a.ajax-file-upload,
.ajax-upload-dragdrop fieldset:disabled a.ajax-file-upload,
fieldset:disabled .swal2-modal .swal2-buttonswrapper a.swal2-styled,
.swal2-modal .swal2-buttonswrapper fieldset:disabled a.swal2-styled,
fieldset:disabled .wizard > .actions a,
.wizard > .actions fieldset:disabled a {
  pointer-events: none; }

.btn-primary, .wizard > .actions a {
  color: #212529;
  background-color: <?php echo $color; ?>;
  border-color: <?php echo $color; ?>; }
  .btn-primary:hover, .wizard > .actions a:hover {
    color: #fff;
    background-color: <?php echo $color; ?>;
    border-color: <?php echo $color; ?>; }
  .btn-primary:focus, .wizard > .actions a:focus, .btn-primary.focus, .wizard > .actions a.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(28, 192, 197, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(28, 192, 197, 0.5); }
  .btn-primary.disabled, .wizard > .actions a.disabled, .btn-primary:disabled, .wizard > .actions a:disabled {
    color: #212529;
    background-color: #1bdbe0;
    border-color: #1bdbe0; }
  .btn-primary:not(:disabled):not(.disabled):active, .wizard > .actions a:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active, .wizard > .actions a:not(:disabled):not(.disabled).active,
  .show > .btn-primary.dropdown-toggle,
  .wizard > .actions .show > a.dropdown-toggle {
    color: #fff;
    background-color: #16afb2;
    border-color: #14a3a7; }
    .btn-primary:not(:disabled):not(.disabled):active:focus, .wizard > .actions a:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus, .wizard > .actions a:not(:disabled):not(.disabled).active:focus,
    .show > .btn-primary.dropdown-toggle:focus,
    .wizard > .actions .show > a.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(28, 192, 197, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(28, 192, 197, 0.5); }

.btn-secondary {
  color: #212529;
  background-color: #d8d8d8;
  border-color: #d8d8d8; }
  .btn-secondary:hover {
    color: #212529;
    background-color: #c5c5c5;
    border-color: #bfbfbf; }
  .btn-secondary:focus, .btn-secondary.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(189, 189, 190, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(189, 189, 190, 0.5); }
  .btn-secondary.disabled, .btn-secondary:disabled {
    color: #212529;
    background-color: #d8d8d8;
    border-color: #d8d8d8; }
  .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
  .show > .btn-secondary.dropdown-toggle {
    color: #212529;
    background-color: #bfbfbf;
    border-color: #b8b8b8; }
    .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-secondary.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(189, 189, 190, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(189, 189, 190, 0.5); }

.btn-success {
  color: #fff;
  background-color: <?php echo $color; ?>;
  border-color: <?php echo $color; ?>; }
  .btn-success:hover {
    color: #fff;
    background-color: #2cb430;
    border-color: #2aa92d; }
  .btn-success:focus, .btn-success.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(86, 213, 89, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(86, 213, 89, 0.5); }
  .btn-success.disabled, .btn-success:disabled {
    color: #fff;
    background-color: <?php echo $color; ?>;
    border-color: <?php echo $color; ?>; }
  .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
  .show > .btn-success.dropdown-toggle {
    color: #fff;
    background-color: #2aa92d;
    border-color: #279f2a; }
    .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-success.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(86, 213, 89, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(86, 213, 89, 0.5); }

.btn-info {
  color: #fff;
  background-color: #8e32e9;
  border-color: #8e32e9; }
  .btn-info:hover {
    color: #fff;
    background-color: #7b18dd;
    border-color: #7516d2; }
  .btn-info:focus, .btn-info.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(159, 81, 236, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(159, 81, 236, 0.5); }
  .btn-info.disabled, .btn-info:disabled {
    color: #fff;
    background-color: #8e32e9;
    border-color: #8e32e9; }
  .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
  .show > .btn-info.dropdown-toggle {
    color: #fff;
    background-color: #7516d2;
    border-color: #6e15c6; }
    .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-info.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(159, 81, 236, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(159, 81, 236, 0.5); }

.btn-warning {
  color: #212529;
  background-color: #ffde73;
  border-color: #ffde73; }
  .btn-warning:hover {
    color: #212529;
    background-color: #ffd54d;
    border-color: #ffd240; }
  .btn-warning:focus, .btn-warning.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(222, 194, 104, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(222, 194, 104, 0.5); }
  .btn-warning.disabled, .btn-warning:disabled {
    color: #212529;
    background-color: #ffde73;
    border-color: #ffde73; }
  .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
  .show > .btn-warning.dropdown-toggle {
    color: #212529;
    background-color: #ffd240;
    border-color: #ffcf33; }
    .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-warning.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(222, 194, 104, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(222, 194, 104, 0.5); }

.btn-danger {
  color: #fff;
  background-color: #ff0000;
  border-color: #ff0000; }
  .btn-danger:hover {
    color: #fff;
    background-color: #ff274b;
    border-color: #ff1a41; }
  .btn-danger:focus, .btn-danger.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 104, 129, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(255, 104, 129, 0.5); }
  .btn-danger.disabled, .btn-danger:disabled {
    color: #fff;
    background-color: #ff4d6b;
    border-color: #ff4d6b; }
  .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
  .show > .btn-danger.dropdown-toggle {
    color: #fff;
    background-color: #ff1a41;
    border-color: #ff0d36; }
    .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-danger.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 104, 129, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(255, 104, 129, 0.5); }

.btn-light {
  color: #212529;
  background-color: #f8f9fa;
  border-color: #f8f9fa; }
  .btn-light:hover {
    color: #212529;
    background-color: #e2e6ea;
    border-color: #dae0e5; }
  .btn-light:focus, .btn-light.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5); }
  .btn-light.disabled, .btn-light:disabled {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
  .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
  .show > .btn-light.dropdown-toggle {
    color: #212529;
    background-color: #dae0e5;
    border-color: #d3d9df; }
    .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-light.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5); }

.btn-dark {
  color: #fff;
  background-color: #3e4b5b;
  border-color: #3e4b5b; }
  .btn-dark:hover {
    color: #fff;
    background-color: #2f3844;
    border-color: #29323d; }
  .btn-dark:focus, .btn-dark.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(91, 102, 116, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(91, 102, 116, 0.5); }
  .btn-dark.disabled, .btn-dark:disabled {
    color: #fff;
    background-color: #3e4b5b;
    border-color: #3e4b5b; }
  .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
  .show > .btn-dark.dropdown-toggle {
    color: #fff;
    background-color: #29323d;
    border-color: #242c35; }
    .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-dark.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(91, 102, 116, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(91, 102, 116, 0.5); }

.btn-outline-primary, .wizard > .actions .disabled a {
  color: #1bdbe0;
  border-color: #1bdbe0; }
  .btn-outline-primary:hover, .wizard > .actions .disabled a:hover {
    color: #212529;
    background-color: #1bdbe0;
    border-color: #1bdbe0; }
  .btn-outline-primary:focus, .wizard > .actions .disabled a:focus, .btn-outline-primary.focus, .wizard > .actions .disabled a.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(27, 219, 224, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(27, 219, 224, 0.5); }
  .btn-outline-primary.disabled, .wizard > .actions .disabled a.disabled, .btn-outline-primary:disabled, .wizard > .actions .disabled a:disabled {
    color: #1bdbe0;
    background-color: transparent; }
  .btn-outline-primary:not(:disabled):not(.disabled):active, .wizard > .actions .disabled a:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active, .wizard > .actions .disabled a:not(:disabled):not(.disabled).active,
  .show > .btn-outline-primary.dropdown-toggle,
  .wizard > .actions .disabled .show > a.dropdown-toggle {
    color: #212529;
    background-color: #1bdbe0;
    border-color: #1bdbe0; }
    .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .wizard > .actions .disabled a:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus, .wizard > .actions .disabled a:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-primary.dropdown-toggle:focus,
    .wizard > .actions .disabled .show > a.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(27, 219, 224, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(27, 219, 224, 0.5); }

.btn-outline-secondary, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel {
  color: #d8d8d8;
  border-color: #d8d8d8; }
  .btn-outline-secondary:hover, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:hover {
    color: #212529;
    background-color: #d8d8d8;
    border-color: #d8d8d8; }
  .btn-outline-secondary:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:focus, .btn-outline-secondary.focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .focus.editable-cancel {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(216, 216, 216, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(216, 216, 216, 0.5); }
  .btn-outline-secondary.disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .disabled.editable-cancel, .btn-outline-secondary:disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:disabled {
    color: #d8d8d8;
    background-color: transparent; }
  .btn-outline-secondary:not(:disabled):not(.disabled):active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:not(:disabled):not(.disabled).active,
  .show > .btn-outline-secondary.dropdown-toggle,
  .editable-container.editable-inline .editableform .control-group .editable-buttons .show > .dropdown-toggle.editable-cancel {
    color: #212529;
    background-color: #d8d8d8;
    border-color: #d8d8d8; }
    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-secondary.dropdown-toggle:focus,
    .editable-container.editable-inline .editableform .control-group .editable-buttons .show > .dropdown-toggle.editable-cancel:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(216, 216, 216, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(216, 216, 216, 0.5); }

.btn-outline-success, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit {
  color: <?php echo $color; ?>;
  border-color: <?php echo $color; ?>; }
  .btn-outline-success:hover, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:hover {
    color: #fff;
    background-color: <?php echo $color; ?>;
    border-color: <?php echo $color; ?>; }
  .btn-outline-success:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:focus, .btn-outline-success.focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .focus.editable-submit {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(56, 206, 60, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(56, 206, 60, 0.5); }
  .btn-outline-success.disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .disabled.editable-submit, .btn-outline-success:disabled, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:disabled {
    color: <?php echo $color; ?>;
    background-color: transparent; }
  .btn-outline-success:not(:disabled):not(.disabled):active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:not(:disabled):not(.disabled).active,
  .show > .btn-outline-success.dropdown-toggle,
  .editable-container.editable-inline .editableform .control-group .editable-buttons .show > .dropdown-toggle.editable-submit {
    color: #fff;
    background-color: <?php echo $color; ?>;
    border-color: <?php echo $color; ?>; }
    .btn-outline-success:not(:disabled):not(.disabled):active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-success.dropdown-toggle:focus,
    .editable-container.editable-inline .editableform .control-group .editable-buttons .show > .dropdown-toggle.editable-submit:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(56, 206, 60, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(56, 206, 60, 0.5); }

.btn-outline-info {
  color: #8e32e9;
  border-color: #8e32e9; }
  .btn-outline-info:hover {
    color: #fff;
    background-color: #8e32e9;
    border-color: #8e32e9; }
  .btn-outline-info:focus, .btn-outline-info.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(142, 50, 233, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(142, 50, 233, 0.5); }
  .btn-outline-info.disabled, .btn-outline-info:disabled {
    color: #8e32e9;
    background-color: transparent; }
  .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
  .show > .btn-outline-info.dropdown-toggle {
    color: #fff;
    background-color: #8e32e9;
    border-color: #8e32e9; }
    .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-info.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(142, 50, 233, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(142, 50, 233, 0.5); }

.btn-outline-warning {
  color: #ffde73;
  border-color: #ffde73; }
  .btn-outline-warning:hover {
    color: #212529;
    background-color: #ffde73;
    border-color: #ffde73; }
  .btn-outline-warning:focus, .btn-outline-warning.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 222, 115, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(255, 222, 115, 0.5); }
  .btn-outline-warning.disabled, .btn-outline-warning:disabled {
    color: #ffde73;
    background-color: transparent; }
  .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
  .show > .btn-outline-warning.dropdown-toggle {
    color: #212529;
    background-color: #ffde73;
    border-color: #ffde73; }
    .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-warning.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 222, 115, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(255, 222, 115, 0.5); }

.btn-outline-danger {
  color: #ff4d6b;
  border-color: #ff4d6b; }
  .btn-outline-danger:hover {
    color: #fff;
    background-color: #ff4d6b;
    border-color: #ff4d6b; }
  .btn-outline-danger:focus, .btn-outline-danger.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 77, 107, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(255, 77, 107, 0.5); }
  .btn-outline-danger.disabled, .btn-outline-danger:disabled {
    color: #ff4d6b;
    background-color: transparent; }
  .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
  .show > .btn-outline-danger.dropdown-toggle {
    color: #fff;
    background-color: #ff4d6b;
    border-color: #ff4d6b; }
    .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-danger.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 77, 107, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(255, 77, 107, 0.5); }

.btn-outline-light {
  color: #f8f9fa;
  border-color: #f8f9fa; }
  .btn-outline-light:hover {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
  .btn-outline-light:focus, .btn-outline-light.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
  .btn-outline-light.disabled, .btn-outline-light:disabled {
    color: #f8f9fa;
    background-color: transparent; }
  .btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
  .show > .btn-outline-light.dropdown-toggle {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
    .btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-light.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

.btn-outline-dark {
  color: #3e4b5b;
  border-color: #3e4b5b; }
  .btn-outline-dark:hover {
    color: #fff;
    background-color: #3e4b5b;
    border-color: #3e4b5b; }
  .btn-outline-dark:focus, .btn-outline-dark.focus {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(62, 75, 91, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(62, 75, 91, 0.5); }
  .btn-outline-dark.disabled, .btn-outline-dark:disabled {
    color: #3e4b5b;
    background-color: transparent; }
  .btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
  .show > .btn-outline-dark.dropdown-toggle {
    color: #fff;
    background-color: #3e4b5b;
    border-color: #3e4b5b; }
    .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-dark.dropdown-toggle:focus {
      -webkit-box-shadow: 0 0 0 0.2rem rgba(62, 75, 91, 0.5);
      box-shadow: 0 0 0 0.2rem rgba(62, 75, 91, 0.5); }

.btn-link {
  font-weight: 400;
  color: #007bff;
  text-decoration: none; }
  .btn-link:hover {
    color: #0056b3;
    text-decoration: underline; }
  .btn-link:focus, .btn-link.focus {
    text-decoration: underline;
    -webkit-box-shadow: none;
    box-shadow: none; }
  .btn-link:disabled, .btn-link.disabled {
    color: #6c757d;
    pointer-events: none; }

.btn-lg, .btn-group-lg > .btn, .fc .btn-group-lg > button, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-lg > .swal2-styled, .wizard > .actions .btn-group-lg > a {
  padding: 1rem 3rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.1875rem; }

.btn-sm, .btn-group-sm > .btn, .fc .btn-group-sm > button, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-sm > .swal2-styled, .wizard > .actions .btn-group-sm > a, .fc button {
  padding: 0.5rem 0.81rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.1875rem; }

.btn-block {
  display: block;
  width: 100%; }
  .btn-block + .btn-block {
    margin-top: 0.5rem; }

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%; }

.fade {
  -webkit-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear; }
  @media (prefers-reduced-motion: reduce) {
    .fade {
      -webkit-transition: none;
      transition: none; } }
  .fade:not(.show) {
    opacity: 0; }

.collapse:not(.show) {
  display: none; }

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition: height 0.35s ease;
  transition: height 0.35s ease; }
  @media (prefers-reduced-motion: reduce) {
    .collapsing {
      -webkit-transition: none;
      transition: none; } }

.dropup,
.dropright,
.dropdown,
.dropleft {
  position: relative; }

.dropdown-toggle {
  white-space: nowrap; }
  .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent; }
  .dropdown-toggle:empty::after {
    margin-left: 0; }

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 10rem;
  padding: 0.5rem 0;
  margin: 0.125rem 0 0;
  font-size: 1rem;
  color: #212529;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #e8e5e5;
  border-radius: 0.25rem; }

.dropdown-menu-left {
  right: auto;
  left: 0; }

.dropdown-menu-right {
  right: 0;
  left: auto; }

@media (min-width: 576px) {
  .dropdown-menu-sm-left {
    right: auto;
    left: 0; }
  .dropdown-menu-sm-right {
    right: 0;
    left: auto; } }

@media (min-width: 768px) {
  .dropdown-menu-md-left {
    right: auto;
    left: 0; }
  .dropdown-menu-md-right {
    right: 0;
    left: auto; } }

@media (min-width: 992px) {
  .dropdown-menu-lg-left {
    right: auto;
    left: 0; }
  .dropdown-menu-lg-right {
    right: 0;
    left: auto; } }

@media (min-width: 1200px) {
  .dropdown-menu-xl-left {
    right: auto;
    left: 0; }
  .dropdown-menu-xl-right {
    right: 0;
    left: auto; } }

.dropup .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-top: 0;
  margin-bottom: 0.125rem; }

.dropup .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0;
  border-right: 0.3em solid transparent;
  border-bottom: 0.3em solid;
  border-left: 0.3em solid transparent; }

.dropup .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropright .dropdown-menu {
  top: 0;
  right: auto;
  left: 100%;
  margin-top: 0;
  margin-left: 0.125rem; }

.dropright .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0;
  border-bottom: 0.3em solid transparent;
  border-left: 0.3em solid; }

.dropright .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropright .dropdown-toggle::after {
  vertical-align: 0; }

.dropleft .dropdown-menu {
  top: 0;
  right: 100%;
  left: auto;
  margin-top: 0;
  margin-right: 0.125rem; }

.dropleft .dropdown-toggle::after {
  display: inline-block;
  margin-left: 0.255em;
  vertical-align: 0.255em;
  content: ""; }

.dropleft .dropdown-toggle::after {
  display: none; }

.dropleft .dropdown-toggle::before {
  display: inline-block;
  margin-right: 0.255em;
  vertical-align: 0.255em;
  content: "";
  border-top: 0.3em solid transparent;
  border-right: 0.3em solid;
  border-bottom: 0.3em solid transparent; }

.dropleft .dropdown-toggle:empty::after {
  margin-left: 0; }

.dropleft .dropdown-toggle::before {
  vertical-align: 0; }

.dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
  right: auto;
  bottom: auto; }

.dropdown-divider {
  height: 0;
  margin: 0.5rem 0;
  overflow: hidden;
  border-top: 1px solid #e8e5e5; }

.dropdown-item {
  display: block;
  width: 100%;
  padding: 0.25rem 1.5rem;
  clear: both;
  font-weight: 400;
  color: #343a40;
  text-align: inherit;
  white-space: nowrap;
  background-color: transparent;
  border: 0; }
  .dropdown-item:hover, .dropdown-item:focus {
    color: #16181b;
    text-decoration: none;
    background-color: #f8f9fa; }
  .dropdown-item.active, .dropdown-item:active {
    color: #fff;
    text-decoration: none;
    background-color: #007bff; }
  .dropdown-item.disabled, .dropdown-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: transparent; }

.dropdown-menu.show {
  display: block; }

.dropdown-header {
  display: block;
  padding: 0.5rem 1.5rem;
  margin-bottom: 0;
  font-size: 0.875rem;
  color: #343a40;
  white-space: nowrap; }

.dropdown-item-text {
  display: block;
  padding: 0.25rem 1.5rem;
  color: #343a40; }

.btn-group, .fc .fc-button-group,
.btn-group-vertical {
  position: relative;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  vertical-align: middle; }
  .btn-group > .btn, .fc .fc-button-group > .btn, .fc .btn-group > button, .fc .fc-button-group > button, .ajax-upload-dragdrop .btn-group > .ajax-file-upload, .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled, .wizard > .actions .btn-group > a, .fc .wizard > .actions .fc-button-group > a, .wizard > .actions .fc .fc-button-group > a,
  .btn-group-vertical > .btn,
  .fc .btn-group-vertical > button,
  .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload,
  .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled,
  .wizard > .actions .btn-group-vertical > a {
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto; }
    .btn-group > .btn:hover, .fc .fc-button-group > .btn:hover, .fc .btn-group > button:hover, .fc .fc-button-group > button:hover, .ajax-upload-dragdrop .btn-group > .ajax-file-upload:hover, .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:hover, .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:hover, .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:hover, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:hover, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:hover, .wizard > .actions .btn-group > a:hover, .fc .wizard > .actions .fc-button-group > a:hover, .wizard > .actions .fc .fc-button-group > a:hover,
    .btn-group-vertical > .btn:hover,
    .fc .btn-group-vertical > button:hover,
    .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:hover,
    .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:hover,
    .wizard > .actions .btn-group-vertical > a:hover {
      z-index: 1; }
    .btn-group > .btn:focus, .fc .fc-button-group > .btn:focus, .fc .btn-group > button:focus, .fc .fc-button-group > button:focus, .ajax-upload-dragdrop .btn-group > .ajax-file-upload:focus, .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:focus, .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:focus, .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:focus, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:focus, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:focus, .wizard > .actions .btn-group > a:focus, .fc .wizard > .actions .fc-button-group > a:focus, .wizard > .actions .fc .fc-button-group > a:focus, .btn-group > .btn:active, .fc .fc-button-group > .btn:active, .fc .btn-group > button:active, .fc .fc-button-group > button:active, .ajax-upload-dragdrop .btn-group > .ajax-file-upload:active, .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:active, .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:active, .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:active, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:active, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:active, .wizard > .actions .btn-group > a:active, .fc .wizard > .actions .fc-button-group > a:active, .wizard > .actions .fc .fc-button-group > a:active, .btn-group > .btn.active, .fc .fc-button-group > .btn.active, .fc .btn-group > button.active, .fc .fc-button-group > button.active, .ajax-upload-dragdrop .btn-group > .active.ajax-file-upload, .fc .ajax-upload-dragdrop .fc-button-group > .active.ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group > .active.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group > .active.swal2-styled, .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .active.swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .active.swal2-styled, .wizard > .actions .btn-group > a.active, .fc .wizard > .actions .fc-button-group > a.active, .wizard > .actions .fc .fc-button-group > a.active,
    .btn-group-vertical > .btn:focus,
    .fc .btn-group-vertical > button:focus,
    .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:focus,
    .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:focus,
    .wizard > .actions .btn-group-vertical > a:focus,
    .btn-group-vertical > .btn:active,
    .fc .btn-group-vertical > button:active,
    .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:active,
    .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:active,
    .wizard > .actions .btn-group-vertical > a:active,
    .btn-group-vertical > .btn.active,
    .fc .btn-group-vertical > button.active,
    .ajax-upload-dragdrop .btn-group-vertical > .active.ajax-file-upload,
    .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .active.swal2-styled,
    .wizard > .actions .btn-group-vertical > a.active {
      z-index: 1; }

.btn-toolbar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start; }
  .btn-toolbar .input-group, .btn-toolbar .asColorPicker-wrap {
    width: auto; }

.btn-group > .btn:not(:first-child), .fc .fc-button-group > .btn:not(:first-child), .fc .btn-group > button:not(:first-child), .fc .fc-button-group > button:not(:first-child), .ajax-upload-dragdrop .btn-group > .ajax-file-upload:not(:first-child), .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:not(:first-child), .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:not(:first-child), .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:not(:first-child), .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:not(:first-child), .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:not(:first-child), .wizard > .actions .btn-group > a:not(:first-child), .fc .wizard > .actions .fc-button-group > a:not(:first-child), .wizard > .actions .fc .fc-button-group > a:not(:first-child),
.btn-group > .btn-group:not(:first-child),
.fc .fc-button-group > .btn-group:not(:first-child),
.fc .btn-group > .fc-button-group:not(:first-child),
.fc .fc-button-group > .fc-button-group:not(:first-child) {
  margin-left: -1px; }

.btn-group > .btn:not(:last-child):not(.dropdown-toggle), .fc .fc-button-group > .btn:not(:last-child):not(.dropdown-toggle), .fc .btn-group > button:not(:last-child):not(.dropdown-toggle), .fc .fc-button-group > button:not(:last-child):not(.dropdown-toggle), .ajax-upload-dragdrop .btn-group > .ajax-file-upload:not(:last-child):not(.dropdown-toggle), .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:not(:last-child):not(.dropdown-toggle), .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:not(:last-child):not(.dropdown-toggle), .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:not(:last-child):not(.dropdown-toggle), .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:not(:last-child):not(.dropdown-toggle), .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:not(:last-child):not(.dropdown-toggle), .wizard > .actions .btn-group > a:not(:last-child):not(.dropdown-toggle), .fc .wizard > .actions .fc-button-group > a:not(:last-child):not(.dropdown-toggle), .wizard > .actions .fc .fc-button-group > a:not(:last-child):not(.dropdown-toggle),
.btn-group > .btn-group:not(:last-child) > .btn,
.fc .fc-button-group > .btn-group:not(:last-child) > .btn,
.fc .btn-group > .fc-button-group:not(:last-child) > .btn,
.fc .fc-button-group > .fc-button-group:not(:last-child) > .btn,
.fc .btn-group > .btn-group:not(:last-child) > button,
.fc .fc-button-group > .btn-group:not(:last-child) > button,
.fc .btn-group > .fc-button-group:not(:last-child) > button,
.fc .fc-button-group > .fc-button-group:not(:last-child) > button,
.ajax-upload-dragdrop .btn-group > .btn-group:not(:last-child) > .ajax-file-upload,
.fc .ajax-upload-dragdrop .fc-button-group > .btn-group:not(:last-child) > .ajax-file-upload,
.ajax-upload-dragdrop .fc .fc-button-group > .btn-group:not(:last-child) > .ajax-file-upload,
.fc .ajax-upload-dragdrop .btn-group > .fc-button-group:not(:last-child) > .ajax-file-upload,
.ajax-upload-dragdrop .fc .btn-group > .fc-button-group:not(:last-child) > .ajax-file-upload,
.fc .ajax-upload-dragdrop .fc-button-group > .fc-button-group:not(:last-child) > .ajax-file-upload,
.ajax-upload-dragdrop .fc .fc-button-group > .fc-button-group:not(:last-child) > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group > .btn-group:not(:last-child) > .swal2-styled,
.fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .btn-group:not(:last-child) > .swal2-styled,
.swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .btn-group:not(:last-child) > .swal2-styled,
.fc .swal2-modal .swal2-buttonswrapper .btn-group > .fc-button-group:not(:last-child) > .swal2-styled,
.swal2-modal .swal2-buttonswrapper .fc .btn-group > .fc-button-group:not(:last-child) > .swal2-styled,
.fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .fc-button-group:not(:last-child) > .swal2-styled,
.swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .fc-button-group:not(:last-child) > .swal2-styled,
.wizard > .actions .btn-group > .btn-group:not(:last-child) > a,
.fc .wizard > .actions .fc-button-group > .btn-group:not(:last-child) > a,
.wizard > .actions .fc .fc-button-group > .btn-group:not(:last-child) > a,
.fc .wizard > .actions .btn-group > .fc-button-group:not(:last-child) > a,
.wizard > .actions .fc .btn-group > .fc-button-group:not(:last-child) > a,
.fc .wizard > .actions .fc-button-group > .fc-button-group:not(:last-child) > a,
.wizard > .actions .fc .fc-button-group > .fc-button-group:not(:last-child) > a {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.btn-group > .btn:not(:first-child), .fc .fc-button-group > .btn:not(:first-child), .fc .btn-group > button:not(:first-child), .fc .fc-button-group > button:not(:first-child), .ajax-upload-dragdrop .btn-group > .ajax-file-upload:not(:first-child), .fc .ajax-upload-dragdrop .fc-button-group > .ajax-file-upload:not(:first-child), .ajax-upload-dragdrop .fc .fc-button-group > .ajax-file-upload:not(:first-child), .swal2-modal .swal2-buttonswrapper .btn-group > .swal2-styled:not(:first-child), .fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .swal2-styled:not(:first-child), .swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .swal2-styled:not(:first-child), .wizard > .actions .btn-group > a:not(:first-child), .fc .wizard > .actions .fc-button-group > a:not(:first-child), .wizard > .actions .fc .fc-button-group > a:not(:first-child),
.btn-group > .btn-group:not(:first-child) > .btn,
.fc .fc-button-group > .btn-group:not(:first-child) > .btn,
.fc .btn-group > .fc-button-group:not(:first-child) > .btn,
.fc .fc-button-group > .fc-button-group:not(:first-child) > .btn,
.fc .btn-group > .btn-group:not(:first-child) > button,
.fc .fc-button-group > .btn-group:not(:first-child) > button,
.fc .btn-group > .fc-button-group:not(:first-child) > button,
.fc .fc-button-group > .fc-button-group:not(:first-child) > button,
.ajax-upload-dragdrop .btn-group > .btn-group:not(:first-child) > .ajax-file-upload,
.fc .ajax-upload-dragdrop .fc-button-group > .btn-group:not(:first-child) > .ajax-file-upload,
.ajax-upload-dragdrop .fc .fc-button-group > .btn-group:not(:first-child) > .ajax-file-upload,
.fc .ajax-upload-dragdrop .btn-group > .fc-button-group:not(:first-child) > .ajax-file-upload,
.ajax-upload-dragdrop .fc .btn-group > .fc-button-group:not(:first-child) > .ajax-file-upload,
.fc .ajax-upload-dragdrop .fc-button-group > .fc-button-group:not(:first-child) > .ajax-file-upload,
.ajax-upload-dragdrop .fc .fc-button-group > .fc-button-group:not(:first-child) > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group > .btn-group:not(:first-child) > .swal2-styled,
.fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .btn-group:not(:first-child) > .swal2-styled,
.swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .btn-group:not(:first-child) > .swal2-styled,
.fc .swal2-modal .swal2-buttonswrapper .btn-group > .fc-button-group:not(:first-child) > .swal2-styled,
.swal2-modal .swal2-buttonswrapper .fc .btn-group > .fc-button-group:not(:first-child) > .swal2-styled,
.fc .swal2-modal .swal2-buttonswrapper .fc-button-group > .fc-button-group:not(:first-child) > .swal2-styled,
.swal2-modal .swal2-buttonswrapper .fc .fc-button-group > .fc-button-group:not(:first-child) > .swal2-styled,
.wizard > .actions .btn-group > .btn-group:not(:first-child) > a,
.fc .wizard > .actions .fc-button-group > .btn-group:not(:first-child) > a,
.wizard > .actions .fc .fc-button-group > .btn-group:not(:first-child) > a,
.fc .wizard > .actions .btn-group > .fc-button-group:not(:first-child) > a,
.wizard > .actions .fc .btn-group > .fc-button-group:not(:first-child) > a,
.fc .wizard > .actions .fc-button-group > .fc-button-group:not(:first-child) > a,
.wizard > .actions .fc .fc-button-group > .fc-button-group:not(:first-child) > a {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.dropdown-toggle-split {
  padding-right: 1.875rem;
  padding-left: 1.875rem; }
  .dropdown-toggle-split::after,
  .dropup .dropdown-toggle-split::after,
  .dropright .dropdown-toggle-split::after {
    margin-left: 0; }
  .dropleft .dropdown-toggle-split::before {
    margin-right: 0; }

.btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split, .fc .btn-group-sm > button + .dropdown-toggle-split, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload + .dropdown-toggle-split, .swal2-modal .swal2-buttonswrapper .btn-group-sm > .swal2-styled + .dropdown-toggle-split, .wizard > .actions .btn-group-sm > a + .dropdown-toggle-split, .fc button + .dropdown-toggle-split {
  padding-right: 0.6075rem;
  padding-left: 0.6075rem; }

.btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split, .fc .btn-group-lg > button + .dropdown-toggle-split, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload + .dropdown-toggle-split, .swal2-modal .swal2-buttonswrapper .btn-group-lg > .swal2-styled + .dropdown-toggle-split, .wizard > .actions .btn-group-lg > a + .dropdown-toggle-split {
  padding-right: 2.25rem;
  padding-left: 2.25rem; }

.btn-group-vertical {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center; }
  
  .btn-group-vertical > .btn,
  .fc .btn-group-vertical > button,
  .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload,
  .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled,
  .wizard > .actions .btn-group-vertical > a,
  .btn-group-vertical > .btn-group,
  .fc .btn-group-vertical > .fc-button-group {
    width: 100%; }
  .btn-group-vertical > .btn:not(:first-child), .fc .btn-group-vertical > button:not(:first-child), .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:not(:first-child), .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:not(:first-child), .wizard > .actions .btn-group-vertical > a:not(:first-child),
  .btn-group-vertical > .btn-group:not(:first-child),
  .fc .btn-group-vertical > .fc-button-group:not(:first-child) {
    margin-top: -1px; }
  .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle), .fc .btn-group-vertical > button:not(:last-child):not(.dropdown-toggle), .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:not(:last-child):not(.dropdown-toggle), .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:not(:last-child):not(.dropdown-toggle), .wizard > .actions .btn-group-vertical > a:not(:last-child):not(.dropdown-toggle),
  .btn-group-vertical > .btn-group:not(:last-child) > .btn,
  .fc .btn-group-vertical > .fc-button-group:not(:last-child) > .btn,
  .fc .btn-group-vertical > .btn-group:not(:last-child) > button,
  .fc .btn-group-vertical > .fc-button-group:not(:last-child) > button,
  .ajax-upload-dragdrop .btn-group-vertical > .btn-group:not(:last-child) > .ajax-file-upload,
  .fc .ajax-upload-dragdrop .btn-group-vertical > .fc-button-group:not(:last-child) > .ajax-file-upload,
  .ajax-upload-dragdrop .fc .btn-group-vertical > .fc-button-group:not(:last-child) > .ajax-file-upload,
  .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .btn-group:not(:last-child) > .swal2-styled,
  .fc .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .fc-button-group:not(:last-child) > .swal2-styled,
  .swal2-modal .swal2-buttonswrapper .fc .btn-group-vertical > .fc-button-group:not(:last-child) > .swal2-styled,
  .wizard > .actions .btn-group-vertical > .btn-group:not(:last-child) > a,
  .fc .wizard > .actions .btn-group-vertical > .fc-button-group:not(:last-child) > a,
  .wizard > .actions .fc .btn-group-vertical > .fc-button-group:not(:last-child) > a {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0; }
  .btn-group-vertical > .btn:not(:first-child), .fc .btn-group-vertical > button:not(:first-child), .ajax-upload-dragdrop .btn-group-vertical > .ajax-file-upload:not(:first-child), .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .swal2-styled:not(:first-child), .wizard > .actions .btn-group-vertical > a:not(:first-child),
  .btn-group-vertical > .btn-group:not(:first-child) > .btn,
  .fc .btn-group-vertical > .fc-button-group:not(:first-child) > .btn,
  .fc .btn-group-vertical > .btn-group:not(:first-child) > button,
  .fc .btn-group-vertical > .fc-button-group:not(:first-child) > button,
  .ajax-upload-dragdrop .btn-group-vertical > .btn-group:not(:first-child) > .ajax-file-upload,
  .fc .ajax-upload-dragdrop .btn-group-vertical > .fc-button-group:not(:first-child) > .ajax-file-upload,
  .ajax-upload-dragdrop .fc .btn-group-vertical > .fc-button-group:not(:first-child) > .ajax-file-upload,
  .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .btn-group:not(:first-child) > .swal2-styled,
  .fc .swal2-modal .swal2-buttonswrapper .btn-group-vertical > .fc-button-group:not(:first-child) > .swal2-styled,
  .swal2-modal .swal2-buttonswrapper .fc .btn-group-vertical > .fc-button-group:not(:first-child) > .swal2-styled,
  .wizard > .actions .btn-group-vertical > .btn-group:not(:first-child) > a,
  .fc .wizard > .actions .btn-group-vertical > .fc-button-group:not(:first-child) > a,
  .wizard > .actions .fc .btn-group-vertical > .fc-button-group:not(:first-child) > a {
    border-top-left-radius: 0;
    border-top-right-radius: 0; }

.btn-group-toggle > .btn, .fc .btn-group-toggle > button, .ajax-upload-dragdrop .btn-group-toggle > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-toggle > .swal2-styled, .wizard > .actions .btn-group-toggle > a,
.btn-group-toggle > .btn-group > .btn,
.fc .btn-group-toggle > .fc-button-group > .btn,
.fc .btn-group-toggle > .btn-group > button,
.fc .btn-group-toggle > .fc-button-group > button,
.ajax-upload-dragdrop .btn-group-toggle > .btn-group > .ajax-file-upload,
.fc .ajax-upload-dragdrop .btn-group-toggle > .fc-button-group > .ajax-file-upload,
.ajax-upload-dragdrop .fc .btn-group-toggle > .fc-button-group > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .btn-group-toggle > .btn-group > .swal2-styled,
.fc .swal2-modal .swal2-buttonswrapper .btn-group-toggle > .fc-button-group > .swal2-styled,
.swal2-modal .swal2-buttonswrapper .fc .btn-group-toggle > .fc-button-group > .swal2-styled,
.wizard > .actions .btn-group-toggle > .btn-group > a,
.fc .wizard > .actions .btn-group-toggle > .fc-button-group > a,
.wizard > .actions .fc .btn-group-toggle > .fc-button-group > a {
  margin-bottom: 0; }
  .btn-group-toggle > .btn input[type="radio"], .fc .btn-group-toggle > button input[type="radio"], .ajax-upload-dragdrop .btn-group-toggle > .ajax-file-upload input[type="radio"], .swal2-modal .swal2-buttonswrapper .btn-group-toggle > .swal2-styled input[type="radio"], .wizard > .actions .btn-group-toggle > a input[type="radio"],
  .btn-group-toggle > .btn input[type="checkbox"],
  .fc .btn-group-toggle > button input[type="checkbox"],
  .ajax-upload-dragdrop .btn-group-toggle > .ajax-file-upload input[type="checkbox"],
  .swal2-modal .swal2-buttonswrapper .btn-group-toggle > .swal2-styled input[type="checkbox"],
  .wizard > .actions .btn-group-toggle > a input[type="checkbox"],
  .btn-group-toggle > .btn-group > .btn input[type="radio"],
  .fc .btn-group-toggle > .fc-button-group > .btn input[type="radio"],
  .fc .btn-group-toggle > .btn-group > button input[type="radio"],
  .fc .btn-group-toggle > .fc-button-group > button input[type="radio"],
  .ajax-upload-dragdrop .btn-group-toggle > .btn-group > .ajax-file-upload input[type="radio"],
  .fc .ajax-upload-dragdrop .btn-group-toggle > .fc-button-group > .ajax-file-upload input[type="radio"],
  .ajax-upload-dragdrop .fc .btn-group-toggle > .fc-button-group > .ajax-file-upload input[type="radio"],
  .swal2-modal .swal2-buttonswrapper .btn-group-toggle > .btn-group > .swal2-styled input[type="radio"],
  .fc .swal2-modal .swal2-buttonswrapper .btn-group-toggle > .fc-button-group > .swal2-styled input[type="radio"],
  .swal2-modal .swal2-buttonswrapper .fc .btn-group-toggle > .fc-button-group > .swal2-styled input[type="radio"],
  .wizard > .actions .btn-group-toggle > .btn-group > a input[type="radio"],
  .fc .wizard > .actions .btn-group-toggle > .fc-button-group > a input[type="radio"],
  .wizard > .actions .fc .btn-group-toggle > .fc-button-group > a input[type="radio"],
  .btn-group-toggle > .btn-group > .btn input[type="checkbox"],
  .fc .btn-group-toggle > .fc-button-group > .btn input[type="checkbox"],
  .fc .btn-group-toggle > .btn-group > button input[type="checkbox"],
  .fc .btn-group-toggle > .fc-button-group > button input[type="checkbox"],
  .ajax-upload-dragdrop .btn-group-toggle > .btn-group > .ajax-file-upload input[type="checkbox"],
  .fc .ajax-upload-dragdrop .btn-group-toggle > .fc-button-group > .ajax-file-upload input[type="checkbox"],
  .ajax-upload-dragdrop .fc .btn-group-toggle > .fc-button-group > .ajax-file-upload input[type="checkbox"],
  .swal2-modal .swal2-buttonswrapper .btn-group-toggle > .btn-group > .swal2-styled input[type="checkbox"],
  .fc .swal2-modal .swal2-buttonswrapper .btn-group-toggle > .fc-button-group > .swal2-styled input[type="checkbox"],
  .swal2-modal .swal2-buttonswrapper .fc .btn-group-toggle > .fc-button-group > .swal2-styled input[type="checkbox"],
  .wizard > .actions .btn-group-toggle > .btn-group > a input[type="checkbox"],
  .fc .wizard > .actions .btn-group-toggle > .fc-button-group > a input[type="checkbox"],
  .wizard > .actions .fc .btn-group-toggle > .fc-button-group > a input[type="checkbox"] {
    position: absolute;
    clip: rect(0, 0, 0, 0);
    pointer-events: none; }

.input-group, .asColorPicker-wrap {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: stretch;
  -ms-flex-align: stretch;
  align-items: stretch;
  width: 100%; }
  .input-group > .form-control, .asColorPicker-wrap > .form-control, .input-group > .asColorPicker-input, .asColorPicker-wrap > .asColorPicker-input, .dataTables_wrapper .input-group > select, .dataTables_wrapper .asColorPicker-wrap > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text],
  .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select,
  .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number], .select2-container--default .input-group > .select2-selection--single, .select2-container--default .asColorPicker-wrap > .select2-selection--single, .select2-container--default .select2-selection--single .input-group > .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field, .input-group > .typeahead, .asColorPicker-wrap > .typeahead,
  .input-group > .tt-query,
  .asColorPicker-wrap > .tt-query,
  .input-group > .tt-hint,
  .asColorPicker-wrap > .tt-hint,
  .input-group > .form-control-plaintext,
  .asColorPicker-wrap > .form-control-plaintext,
  .input-group > .custom-select,
  .asColorPicker-wrap > .custom-select,
  .input-group > .custom-file,
  .asColorPicker-wrap > .custom-file {
    position: relative;
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    width: 1%;
    margin-bottom: 0; }
    .input-group > .form-control + .form-control, .asColorPicker-wrap > .form-control + .form-control, .input-group > .asColorPicker-input + .form-control, .asColorPicker-wrap > .asColorPicker-input + .form-control, .dataTables_wrapper .input-group > select + .form-control, .dataTables_wrapper .asColorPicker-wrap > select + .form-control, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .form-control, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .form-control, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .form-control, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .form-control, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .form-control, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .form-control, .select2-container--default .input-group > .select2-selection--single + .form-control, .select2-container--default .asColorPicker-wrap > .select2-selection--single + .form-control, .select2-container--default .select2-selection--single .input-group > .select2-search__field + .form-control, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .form-control, .input-group > .typeahead + .form-control, .asColorPicker-wrap > .typeahead + .form-control, .input-group > .tt-query + .form-control, .asColorPicker-wrap > .tt-query + .form-control, .input-group > .tt-hint + .form-control, .asColorPicker-wrap > .tt-hint + .form-control, .input-group > .form-control + .asColorPicker-input, .asColorPicker-wrap > .form-control + .asColorPicker-input, .input-group > .asColorPicker-input + .asColorPicker-input, .asColorPicker-wrap > .asColorPicker-input + .asColorPicker-input, .dataTables_wrapper .input-group > select + .asColorPicker-input, .dataTables_wrapper .asColorPicker-wrap > select + .asColorPicker-input, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .asColorPicker-input, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .asColorPicker-input, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .asColorPicker-input, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .asColorPicker-input, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .asColorPicker-input, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .asColorPicker-input, .select2-container--default .input-group > .select2-selection--single + .asColorPicker-input, .select2-container--default .asColorPicker-wrap > .select2-selection--single + .asColorPicker-input, .select2-container--default .select2-selection--single .input-group > .select2-search__field + .asColorPicker-input, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .asColorPicker-input, .input-group > .typeahead + .asColorPicker-input, .asColorPicker-wrap > .typeahead + .asColorPicker-input, .input-group > .tt-query + .asColorPicker-input, .asColorPicker-wrap > .tt-query + .asColorPicker-input, .input-group > .tt-hint + .asColorPicker-input, .asColorPicker-wrap > .tt-hint + .asColorPicker-input, .dataTables_wrapper .input-group > .form-control + select, .dataTables_wrapper .asColorPicker-wrap > .form-control + select, .dataTables_wrapper .input-group > .asColorPicker-input + select, .dataTables_wrapper .asColorPicker-wrap > .asColorPicker-input + select, .dataTables_wrapper .input-group > select + select, .dataTables_wrapper .asColorPicker-wrap > select + select, .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .input-group > input[type=text] + select, .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + select, .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .asColorPicker-wrap > input[type=text] + select, .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + select, .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .input-group > select + select, .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + select, .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .asColorPicker-wrap > select + select, .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + select, .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .input-group > input[type=number] + select, .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + select, .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .asColorPicker-wrap > input[type=number] + select, .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + select, .select2-container--default .dataTables_wrapper .input-group > .select2-selection--single + select, .dataTables_wrapper .select2-container--default .input-group > .select2-selection--single + select, .select2-container--default .dataTables_wrapper .asColorPicker-wrap > .select2-selection--single + select, .dataTables_wrapper .select2-container--default .asColorPicker-wrap > .select2-selection--single + select, .select2-container--default .select2-selection--single .dataTables_wrapper .input-group > .select2-search__field + select, .dataTables_wrapper .select2-container--default .select2-selection--single .input-group > .select2-search__field + select, .select2-container--default .select2-selection--single .dataTables_wrapper .asColorPicker-wrap > .select2-search__field + select, .dataTables_wrapper .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + select, .dataTables_wrapper .input-group > .typeahead + select, .dataTables_wrapper .asColorPicker-wrap > .typeahead + select, .dataTables_wrapper .input-group > .tt-query + select, .dataTables_wrapper .asColorPicker-wrap > .tt-query + select, .dataTables_wrapper .input-group > .tt-hint + select, .dataTables_wrapper .asColorPicker-wrap > .tt-hint + select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .form-control + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .form-control + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .asColorPicker-input + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .asColorPicker-input + input[type=text], .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .input-group > select + input[type=text], .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .asColorPicker-wrap > select + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + input[type=text], .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .select2-selection--single + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .input-group > .select2-selection--single + input[type=text], .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .select2-selection--single + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .asColorPicker-wrap > .select2-selection--single + input[type=text], .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .select2-search__field + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .input-group > .select2-search__field + input[type=text], .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .select2-search__field + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .typeahead + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .typeahead + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .tt-query + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .tt-query + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .tt-hint + input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .tt-hint + input[type=text],
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .form-control + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .form-control + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .asColorPicker-input + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .asColorPicker-input + select,
    .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + select, .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .input-group > select + select,
    .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + select, .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .asColorPicker-wrap > select + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + select,
    .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .select2-selection--single + select, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .input-group > .select2-selection--single + select,
    .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .select2-selection--single + select, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .asColorPicker-wrap > .select2-selection--single + select,
    .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .select2-search__field + select, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .input-group > .select2-search__field + select,
    .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .select2-search__field + select, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .typeahead + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .typeahead + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .tt-query + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .tt-query + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .tt-hint + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .tt-hint + select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .form-control + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .form-control + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .asColorPicker-input + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .asColorPicker-input + input[type=number], .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .input-group > select + input[type=number], .dataTables_wrapper .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .dataTables_wrapper .asColorPicker-wrap > select + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + input[type=number], .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .select2-selection--single + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .input-group > .select2-selection--single + input[type=number], .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .select2-selection--single + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .asColorPicker-wrap > .select2-selection--single + input[type=number], .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .select2-search__field + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .input-group > .select2-search__field + input[type=number], .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .select2-search__field + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .typeahead + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .typeahead + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .tt-query + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .tt-query + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .tt-hint + input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .tt-hint + input[type=number], .select2-container--default .input-group > .form-control + .select2-selection--single, .select2-container--default .asColorPicker-wrap > .form-control + .select2-selection--single, .select2-container--default .input-group > .asColorPicker-input + .select2-selection--single, .select2-container--default .asColorPicker-wrap > .asColorPicker-input + .select2-selection--single, .dataTables_wrapper .select2-container--default .input-group > select + .select2-selection--single, .select2-container--default .dataTables_wrapper .input-group > select + .select2-selection--single, .dataTables_wrapper .select2-container--default .asColorPicker-wrap > select + .select2-selection--single, .select2-container--default .dataTables_wrapper .asColorPicker-wrap > select + .select2-selection--single, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .input-group > input[type=text] + .select2-selection--single, .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .select2-selection--single, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .asColorPicker-wrap > input[type=text] + .select2-selection--single, .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .select2-selection--single, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .input-group > select + .select2-selection--single, .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .select2-selection--single, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .asColorPicker-wrap > select + .select2-selection--single, .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .select2-selection--single, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .input-group > input[type=number] + .select2-selection--single, .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .select2-selection--single, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .asColorPicker-wrap > input[type=number] + .select2-selection--single, .select2-container--default .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .select2-selection--single, .select2-container--default .input-group > .select2-selection--single + .select2-selection--single, .select2-container--default .asColorPicker-wrap > .select2-selection--single + .select2-selection--single, .select2-container--default .select2-selection--single .input-group > .select2-search__field + .select2-selection--single, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .select2-selection--single, .select2-container--default .input-group > .typeahead + .select2-selection--single, .select2-container--default .asColorPicker-wrap > .typeahead + .select2-selection--single, .select2-container--default .input-group > .tt-query + .select2-selection--single, .select2-container--default .asColorPicker-wrap > .tt-query + .select2-selection--single, .select2-container--default .input-group > .tt-hint + .select2-selection--single, .select2-container--default .asColorPicker-wrap > .tt-hint + .select2-selection--single, .select2-container--default .select2-selection--single .input-group > .form-control + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .form-control + .select2-search__field, .select2-container--default .select2-selection--single .input-group > .asColorPicker-input + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .asColorPicker-input + .select2-search__field, .dataTables_wrapper .select2-container--default .select2-selection--single .input-group > select + .select2-search__field, .select2-container--default .select2-selection--single .dataTables_wrapper .input-group > select + .select2-search__field, .dataTables_wrapper .select2-container--default .select2-selection--single .asColorPicker-wrap > select + .select2-search__field, .select2-container--default .select2-selection--single .dataTables_wrapper .asColorPicker-wrap > select + .select2-search__field, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .input-group > input[type=text] + .select2-search__field, .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .select2-search__field, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .asColorPicker-wrap > input[type=text] + .select2-search__field, .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .select2-search__field, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .input-group > select + .select2-search__field, .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .select2-search__field, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .asColorPicker-wrap > select + .select2-search__field, .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .select2-search__field, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .input-group > input[type=number] + .select2-search__field, .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .select2-search__field, .jsgrid .jsgrid-table .jsgrid-filter-row .select2-container--default .select2-selection--single .asColorPicker-wrap > input[type=number] + .select2-search__field, .select2-container--default .select2-selection--single .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .select2-search__field, .select2-container--default .select2-selection--single .input-group > .select2-selection--single + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-selection--single + .select2-search__field, .select2-container--default .select2-selection--single .input-group > .select2-search__field + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .select2-search__field, .select2-container--default .select2-selection--single .input-group > .typeahead + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .typeahead + .select2-search__field, .select2-container--default .select2-selection--single .input-group > .tt-query + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .tt-query + .select2-search__field, .select2-container--default .select2-selection--single .input-group > .tt-hint + .select2-search__field, .select2-container--default .select2-selection--single .asColorPicker-wrap > .tt-hint + .select2-search__field, .input-group > .form-control + .typeahead, .asColorPicker-wrap > .form-control + .typeahead, .input-group > .asColorPicker-input + .typeahead, .asColorPicker-wrap > .asColorPicker-input + .typeahead, .dataTables_wrapper .input-group > select + .typeahead, .dataTables_wrapper .asColorPicker-wrap > select + .typeahead, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .typeahead, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .typeahead, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .typeahead, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .typeahead, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .typeahead, .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .typeahead, .select2-container--default .input-group > .select2-selection--single + .typeahead, .select2-container--default .asColorPicker-wrap > .select2-selection--single + .typeahead, .select2-container--default .select2-selection--single .input-group > .select2-search__field + .typeahead, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .typeahead, .input-group > .typeahead + .typeahead, .asColorPicker-wrap > .typeahead + .typeahead, .input-group > .tt-query + .typeahead, .asColorPicker-wrap > .tt-query + .typeahead, .input-group > .tt-hint + .typeahead, .asColorPicker-wrap > .tt-hint + .typeahead,
    .input-group > .form-control + .tt-query,
    .asColorPicker-wrap > .form-control + .tt-query,
    .input-group > .asColorPicker-input + .tt-query,
    .asColorPicker-wrap > .asColorPicker-input + .tt-query,
    .dataTables_wrapper .input-group > select + .tt-query,
    .dataTables_wrapper .asColorPicker-wrap > select + .tt-query,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .tt-query,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .tt-query,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .tt-query,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .tt-query,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .tt-query,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .tt-query,
    .select2-container--default .input-group > .select2-selection--single + .tt-query,
    .select2-container--default .asColorPicker-wrap > .select2-selection--single + .tt-query,
    .select2-container--default .select2-selection--single .input-group > .select2-search__field + .tt-query,
    .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .tt-query,
    .input-group > .typeahead + .tt-query,
    .asColorPicker-wrap > .typeahead + .tt-query,
    .input-group > .tt-query + .tt-query,
    .asColorPicker-wrap > .tt-query + .tt-query,
    .input-group > .tt-hint + .tt-query,
    .asColorPicker-wrap > .tt-hint + .tt-query,
    .input-group > .form-control + .tt-hint,
    .asColorPicker-wrap > .form-control + .tt-hint,
    .input-group > .asColorPicker-input + .tt-hint,
    .asColorPicker-wrap > .asColorPicker-input + .tt-hint,
    .dataTables_wrapper .input-group > select + .tt-hint,
    .dataTables_wrapper .asColorPicker-wrap > select + .tt-hint,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .tt-hint,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .tt-hint,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .tt-hint,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .tt-hint,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .tt-hint,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .tt-hint,
    .select2-container--default .input-group > .select2-selection--single + .tt-hint,
    .select2-container--default .asColorPicker-wrap > .select2-selection--single + .tt-hint,
    .select2-container--default .select2-selection--single .input-group > .select2-search__field + .tt-hint,
    .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .tt-hint,
    .input-group > .typeahead + .tt-hint,
    .asColorPicker-wrap > .typeahead + .tt-hint,
    .input-group > .tt-query + .tt-hint,
    .asColorPicker-wrap > .tt-query + .tt-hint,
    .input-group > .tt-hint + .tt-hint,
    .asColorPicker-wrap > .tt-hint + .tt-hint,
    .input-group > .form-control + .custom-select,
    .asColorPicker-wrap > .form-control + .custom-select,
    .input-group > .asColorPicker-input + .custom-select,
    .asColorPicker-wrap > .asColorPicker-input + .custom-select,
    .dataTables_wrapper .input-group > select + .custom-select,
    .dataTables_wrapper .asColorPicker-wrap > select + .custom-select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .custom-select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .custom-select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .custom-select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .custom-select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .custom-select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .custom-select,
    .select2-container--default .input-group > .select2-selection--single + .custom-select,
    .select2-container--default .asColorPicker-wrap > .select2-selection--single + .custom-select,
    .select2-container--default .select2-selection--single .input-group > .select2-search__field + .custom-select,
    .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .custom-select,
    .input-group > .typeahead + .custom-select,
    .asColorPicker-wrap > .typeahead + .custom-select,
    .input-group > .tt-query + .custom-select,
    .asColorPicker-wrap > .tt-query + .custom-select,
    .input-group > .tt-hint + .custom-select,
    .asColorPicker-wrap > .tt-hint + .custom-select,
    .input-group > .form-control + .custom-file,
    .asColorPicker-wrap > .form-control + .custom-file,
    .input-group > .asColorPicker-input + .custom-file,
    .asColorPicker-wrap > .asColorPicker-input + .custom-file,
    .dataTables_wrapper .input-group > select + .custom-file,
    .dataTables_wrapper .asColorPicker-wrap > select + .custom-file,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=text] + .custom-file,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=text] + .custom-file,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select + .custom-file,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select + .custom-file,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input[type=number] + .custom-file,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input[type=number] + .custom-file,
    .select2-container--default .input-group > .select2-selection--single + .custom-file,
    .select2-container--default .asColorPicker-wrap > .select2-selection--single + .custom-file,
    .select2-container--default .select2-selection--single .input-group > .select2-search__field + .custom-file,
    .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field + .custom-file,
    .input-group > .typeahead + .custom-file,
    .asColorPicker-wrap > .typeahead + .custom-file,
    .input-group > .tt-query + .custom-file,
    .asColorPicker-wrap > .tt-query + .custom-file,
    .input-group > .tt-hint + .custom-file,
    .asColorPicker-wrap > .tt-hint + .custom-file,
    .input-group > .form-control-plaintext + .form-control,
    .asColorPicker-wrap > .form-control-plaintext + .form-control,
    .input-group > .form-control-plaintext + .asColorPicker-input,
    .asColorPicker-wrap > .form-control-plaintext + .asColorPicker-input,
    .dataTables_wrapper .input-group > .form-control-plaintext + select,
    .dataTables_wrapper .asColorPicker-wrap > .form-control-plaintext + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .form-control-plaintext + input[type=text],
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .form-control-plaintext + input[type=text],
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .form-control-plaintext + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .form-control-plaintext + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .form-control-plaintext + input[type=number],
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .form-control-plaintext + input[type=number],
    .select2-container--default .input-group > .form-control-plaintext + .select2-selection--single,
    .select2-container--default .asColorPicker-wrap > .form-control-plaintext + .select2-selection--single,
    .select2-container--default .select2-selection--single .input-group > .form-control-plaintext + .select2-search__field,
    .select2-container--default .select2-selection--single .asColorPicker-wrap > .form-control-plaintext + .select2-search__field,
    .input-group > .form-control-plaintext + .typeahead,
    .asColorPicker-wrap > .form-control-plaintext + .typeahead,
    .input-group > .form-control-plaintext + .tt-query,
    .asColorPicker-wrap > .form-control-plaintext + .tt-query,
    .input-group > .form-control-plaintext + .tt-hint,
    .asColorPicker-wrap > .form-control-plaintext + .tt-hint,
    .input-group > .form-control-plaintext + .custom-select,
    .asColorPicker-wrap > .form-control-plaintext + .custom-select,
    .input-group > .form-control-plaintext + .custom-file,
    .asColorPicker-wrap > .form-control-plaintext + .custom-file,
    .input-group > .custom-select + .form-control,
    .asColorPicker-wrap > .custom-select + .form-control,
    .input-group > .custom-select + .asColorPicker-input,
    .asColorPicker-wrap > .custom-select + .asColorPicker-input,
    .dataTables_wrapper .input-group > .custom-select + select,
    .dataTables_wrapper .asColorPicker-wrap > .custom-select + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .custom-select + input[type=text],
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .custom-select + input[type=text],
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .custom-select + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .custom-select + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .custom-select + input[type=number],
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .custom-select + input[type=number],
    .select2-container--default .input-group > .custom-select + .select2-selection--single,
    .select2-container--default .asColorPicker-wrap > .custom-select + .select2-selection--single,
    .select2-container--default .select2-selection--single .input-group > .custom-select + .select2-search__field,
    .select2-container--default .select2-selection--single .asColorPicker-wrap > .custom-select + .select2-search__field,
    .input-group > .custom-select + .typeahead,
    .asColorPicker-wrap > .custom-select + .typeahead,
    .input-group > .custom-select + .tt-query,
    .asColorPicker-wrap > .custom-select + .tt-query,
    .input-group > .custom-select + .tt-hint,
    .asColorPicker-wrap > .custom-select + .tt-hint,
    .input-group > .custom-select + .custom-select,
    .asColorPicker-wrap > .custom-select + .custom-select,
    .input-group > .custom-select + .custom-file,
    .asColorPicker-wrap > .custom-select + .custom-file,
    .input-group > .custom-file + .form-control,
    .asColorPicker-wrap > .custom-file + .form-control,
    .input-group > .custom-file + .asColorPicker-input,
    .asColorPicker-wrap > .custom-file + .asColorPicker-input,
    .dataTables_wrapper .input-group > .custom-file + select,
    .dataTables_wrapper .asColorPicker-wrap > .custom-file + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .custom-file + input[type=text],
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .custom-file + input[type=text],
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .custom-file + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .custom-file + select,
    .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > .custom-file + input[type=number],
    .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > .custom-file + input[type=number],
    .select2-container--default .input-group > .custom-file + .select2-selection--single,
    .select2-container--default .asColorPicker-wrap > .custom-file + .select2-selection--single,
    .select2-container--default .select2-selection--single .input-group > .custom-file + .select2-search__field,
    .select2-container--default .select2-selection--single .asColorPicker-wrap > .custom-file + .select2-search__field,
    .input-group > .custom-file + .typeahead,
    .asColorPicker-wrap > .custom-file + .typeahead,
    .input-group > .custom-file + .tt-query,
    .asColorPicker-wrap > .custom-file + .tt-query,
    .input-group > .custom-file + .tt-hint,
    .asColorPicker-wrap > .custom-file + .tt-hint,
    .input-group > .custom-file + .custom-select,
    .asColorPicker-wrap > .custom-file + .custom-select,
    .input-group > .custom-file + .custom-file,
    .asColorPicker-wrap > .custom-file + .custom-file {
      margin-left: -1px; }
  .input-group > .form-control:focus, .asColorPicker-wrap > .form-control:focus, .input-group > .asColorPicker-input:focus, .asColorPicker-wrap > .asColorPicker-input:focus, .dataTables_wrapper .input-group > select:focus, .dataTables_wrapper .asColorPicker-wrap > select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input:focus[type=text],
  .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select:focus,
  .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input:focus[type=number], .select2-container--default .input-group > .select2-selection--single:focus, .select2-container--default .asColorPicker-wrap > .select2-selection--single:focus, .select2-container--default .select2-selection--single .input-group > .select2-search__field:focus, .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field:focus, .input-group > .typeahead:focus, .asColorPicker-wrap > .typeahead:focus,
  .input-group > .tt-query:focus,
  .asColorPicker-wrap > .tt-query:focus,
  .input-group > .tt-hint:focus,
  .asColorPicker-wrap > .tt-hint:focus,
  .input-group > .custom-select:focus,
  .asColorPicker-wrap > .custom-select:focus,
  .input-group > .custom-file .custom-file-input:focus ~ .custom-file-label,
  .asColorPicker-wrap > .custom-file .custom-file-input:focus ~ .custom-file-label {
    z-index: 3; }
  .input-group > .custom-file .custom-file-input:focus, .asColorPicker-wrap > .custom-file .custom-file-input:focus {
    z-index: 4; }
  .input-group > .form-control:not(:last-child), .asColorPicker-wrap > .form-control:not(:last-child), .input-group > .asColorPicker-input:not(:last-child), .asColorPicker-wrap > .asColorPicker-input:not(:last-child), .dataTables_wrapper .input-group > select:not(:last-child), .dataTables_wrapper .asColorPicker-wrap > select:not(:last-child), .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input:not(:last-child)[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input:not(:last-child)[type=text],
  .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select:not(:last-child),
  .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select:not(:last-child), .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input:not(:last-child)[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input:not(:last-child)[type=number], .select2-container--default .input-group > .select2-selection--single:not(:last-child), .select2-container--default .asColorPicker-wrap > .select2-selection--single:not(:last-child), .select2-container--default .select2-selection--single .input-group > .select2-search__field:not(:last-child), .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field:not(:last-child), .input-group > .typeahead:not(:last-child), .asColorPicker-wrap > .typeahead:not(:last-child),
  .input-group > .tt-query:not(:last-child),
  .asColorPicker-wrap > .tt-query:not(:last-child),
  .input-group > .tt-hint:not(:last-child),
  .asColorPicker-wrap > .tt-hint:not(:last-child),
  .input-group > .custom-select:not(:last-child),
  .asColorPicker-wrap > .custom-select:not(:last-child) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0; }
  .input-group > .form-control:not(:first-child), .asColorPicker-wrap > .form-control:not(:first-child), .input-group > .asColorPicker-input:not(:first-child), .asColorPicker-wrap > .asColorPicker-input:not(:first-child), .dataTables_wrapper .input-group > select:not(:first-child), .dataTables_wrapper .asColorPicker-wrap > select:not(:first-child), .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input:not(:first-child)[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input:not(:first-child)[type=text],
  .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > select:not(:first-child),
  .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > select:not(:first-child), .jsgrid .jsgrid-table .jsgrid-filter-row .input-group > input:not(:first-child)[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .asColorPicker-wrap > input:not(:first-child)[type=number], .select2-container--default .input-group > .select2-selection--single:not(:first-child), .select2-container--default .asColorPicker-wrap > .select2-selection--single:not(:first-child), .select2-container--default .select2-selection--single .input-group > .select2-search__field:not(:first-child), .select2-container--default .select2-selection--single .asColorPicker-wrap > .select2-search__field:not(:first-child), .input-group > .typeahead:not(:first-child), .asColorPicker-wrap > .typeahead:not(:first-child),
  .input-group > .tt-query:not(:first-child),
  .asColorPicker-wrap > .tt-query:not(:first-child),
  .input-group > .tt-hint:not(:first-child),
  .asColorPicker-wrap > .tt-hint:not(:first-child),
  .input-group > .custom-select:not(:first-child),
  .asColorPicker-wrap > .custom-select:not(:first-child) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0; }
  
  .input-group > .custom-file,
  .asColorPicker-wrap > .custom-file {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center; }
    .input-group > .custom-file:not(:last-child) .custom-file-label, .asColorPicker-wrap > .custom-file:not(:last-child) .custom-file-label,
    .input-group > .custom-file:not(:last-child) .custom-file-label::after,
    .asColorPicker-wrap > .custom-file:not(:last-child) .custom-file-label::after {
      border-top-right-radius: 0;
      border-bottom-right-radius: 0; }
    .input-group > .custom-file:not(:first-child) .custom-file-label, .asColorPicker-wrap > .custom-file:not(:first-child) .custom-file-label {
      border-top-left-radius: 0;
      border-bottom-left-radius: 0; }

.input-group-prepend,
.input-group-append {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex; }
  .input-group-prepend .btn, .input-group-prepend .fc button, .fc .input-group-prepend button, .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload, .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled, .input-group-prepend .wizard > .actions a, .wizard > .actions .input-group-prepend a,
  .input-group-append .btn,
  .input-group-append .fc button,
  .fc .input-group-append button,
  .input-group-append .ajax-upload-dragdrop .ajax-file-upload,
  .ajax-upload-dragdrop .input-group-append .ajax-file-upload,
  .input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled,
  .swal2-modal .swal2-buttonswrapper .input-group-append .swal2-styled,
  .input-group-append .wizard > .actions a,
  .wizard > .actions .input-group-append a {
    position: relative;
    z-index: 2; }
    .input-group-prepend .btn:focus, .input-group-prepend .fc button:focus, .fc .input-group-prepend button:focus, .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload:focus, .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload:focus, .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled:focus, .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled:focus, .input-group-prepend .wizard > .actions a:focus, .wizard > .actions .input-group-prepend a:focus,
    .input-group-append .btn:focus,
    .input-group-append .fc button:focus,
    .fc .input-group-append button:focus,
    .input-group-append .ajax-upload-dragdrop .ajax-file-upload:focus,
    .ajax-upload-dragdrop .input-group-append .ajax-file-upload:focus,
    .input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled:focus,
    .swal2-modal .swal2-buttonswrapper .input-group-append .swal2-styled:focus,
    .input-group-append .wizard > .actions a:focus,
    .wizard > .actions .input-group-append a:focus {
      z-index: 3; }
  .input-group-prepend .btn + .btn, .input-group-prepend .fc button + .btn, .fc .input-group-prepend button + .btn, .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload + .btn, .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload + .btn, .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled + .btn, .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled + .btn, .input-group-prepend .wizard > .actions a + .btn, .wizard > .actions .input-group-prepend a + .btn, .input-group-prepend .fc .btn + button, .fc .input-group-prepend .btn + button, .input-group-prepend .fc button + button, .fc .input-group-prepend button + button, .input-group-prepend .ajax-upload-dragdrop .fc .ajax-file-upload + button, .fc .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload + button, .ajax-upload-dragdrop .input-group-prepend .fc .ajax-file-upload + button, .fc .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload + button, .input-group-prepend .swal2-modal .swal2-buttonswrapper .fc .swal2-styled + button, .fc .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled + button, .swal2-modal .swal2-buttonswrapper .input-group-prepend .fc .swal2-styled + button, .fc .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled + button, .input-group-prepend .wizard > .actions .fc a + button, .fc .input-group-prepend .wizard > .actions a + button, .wizard > .actions .input-group-prepend .fc a + button, .fc .wizard > .actions .input-group-prepend a + button, .input-group-prepend .ajax-upload-dragdrop .btn + .ajax-file-upload, .ajax-upload-dragdrop .input-group-prepend .btn + .ajax-file-upload, .input-group-prepend .fc .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .input-group-prepend .fc button + .ajax-file-upload, .fc .input-group-prepend .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .fc .input-group-prepend button + .ajax-file-upload, .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload, .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload + .ajax-file-upload, .input-group-prepend .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .input-group-prepend .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled + .ajax-file-upload, .input-group-prepend .wizard > .actions .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .input-group-prepend .wizard > .actions a + .ajax-file-upload, .wizard > .actions .input-group-prepend .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .wizard > .actions .input-group-prepend a + .ajax-file-upload, .input-group-prepend .swal2-modal .swal2-buttonswrapper .btn + .swal2-styled, .swal2-modal .swal2-buttonswrapper .input-group-prepend .btn + .swal2-styled, .input-group-prepend .fc .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .input-group-prepend .fc button + .swal2-styled, .fc .input-group-prepend .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .input-group-prepend button + .swal2-styled, .input-group-prepend .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload + .swal2-styled, .ajax-upload-dragdrop .input-group-prepend .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload + .swal2-styled, .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled + .swal2-styled, .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled + .swal2-styled, .input-group-prepend .wizard > .actions .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .input-group-prepend .wizard > .actions a + .swal2-styled, .wizard > .actions .input-group-prepend .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .wizard > .actions .input-group-prepend a + .swal2-styled, .input-group-prepend .wizard > .actions .btn + a, .wizard > .actions .input-group-prepend .btn + a, .input-group-prepend .fc .wizard > .actions button + a, .wizard > .actions .input-group-prepend .fc button + a, .fc .input-group-prepend .wizard > .actions button + a, .wizard > .actions .fc .input-group-prepend button + a, .input-group-prepend .ajax-upload-dragdrop .wizard > .actions .ajax-file-upload + a, .wizard > .actions .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload + a, .ajax-upload-dragdrop .input-group-prepend .wizard > .actions .ajax-file-upload + a, .wizard > .actions .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload + a, .input-group-prepend .swal2-modal .swal2-buttonswrapper .wizard > .actions .swal2-styled + a, .wizard > .actions .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled + a, .swal2-modal .swal2-buttonswrapper .input-group-prepend .wizard > .actions .swal2-styled + a, .wizard > .actions .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled + a, .input-group-prepend .wizard > .actions a + a, .wizard > .actions .input-group-prepend a + a,
  .input-group-prepend .btn + .input-group-text,
  .input-group-prepend .fc button + .input-group-text,
  .fc .input-group-prepend button + .input-group-text,
  .input-group-prepend .ajax-upload-dragdrop .ajax-file-upload + .input-group-text,
  .ajax-upload-dragdrop .input-group-prepend .ajax-file-upload + .input-group-text,
  .input-group-prepend .swal2-modal .swal2-buttonswrapper .swal2-styled + .input-group-text,
  .swal2-modal .swal2-buttonswrapper .input-group-prepend .swal2-styled + .input-group-text,
  .input-group-prepend .wizard > .actions a + .input-group-text,
  .wizard > .actions .input-group-prepend a + .input-group-text,
  .input-group-prepend .input-group-text + .input-group-text,
  .input-group-prepend .input-group-text + .btn,
  .input-group-prepend .fc .input-group-text + button,
  .fc .input-group-prepend .input-group-text + button,
  .input-group-prepend .ajax-upload-dragdrop .input-group-text + .ajax-file-upload,
  .ajax-upload-dragdrop .input-group-prepend .input-group-text + .ajax-file-upload,
  .input-group-prepend .swal2-modal .swal2-buttonswrapper .input-group-text + .swal2-styled,
  .swal2-modal .swal2-buttonswrapper .input-group-prepend .input-group-text + .swal2-styled,
  .input-group-prepend .wizard > .actions .input-group-text + a,
  .wizard > .actions .input-group-prepend .input-group-text + a,
  .input-group-append .btn + .btn,
  .input-group-append .fc button + .btn,
  .fc .input-group-append button + .btn,
  .input-group-append .ajax-upload-dragdrop .ajax-file-upload + .btn,
  .ajax-upload-dragdrop .input-group-append .ajax-file-upload + .btn,
  .input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled + .btn,
  .swal2-modal .swal2-buttonswrapper .input-group-append .swal2-styled + .btn,
  .input-group-append .wizard > .actions a + .btn,
  .wizard > .actions .input-group-append a + .btn,
  .input-group-append .fc .btn + button,
  .fc .input-group-append .btn + button,
  .input-group-append .fc button + button,
  .fc .input-group-append button + button,
  .input-group-append .ajax-upload-dragdrop .fc .ajax-file-upload + button,
  .fc .input-group-append .ajax-upload-dragdrop .ajax-file-upload + button,
  .ajax-upload-dragdrop .input-group-append .fc .ajax-file-upload + button,
  .fc .ajax-upload-dragdrop .input-group-append .ajax-file-upload + button,
  .input-group-append .swal2-modal .swal2-buttonswrapper .fc .swal2-styled + button,
  .fc .input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled + button,
  .swal2-modal .swal2-buttonswrapper .input-group-append .fc .swal2-styled + button,
  .fc .swal2-modal .swal2-buttonswrapper .input-group-append .swal2-styled + button,
  .input-group-append .wizard > .actions .fc a + button,
  .fc .input-group-append .wizard > .actions a + button,
  .wizard > .actions .input-group-append .fc a + button,
  .fc .wizard > .actions .input-group-append a + button,
  .input-group-append .ajax-upload-dragdrop .btn + .ajax-file-upload,
  .ajax-upload-dragdrop .input-group-append .btn + .ajax-file-upload,
  .input-group-append .fc .ajax-upload-dragdrop button + .ajax-file-upload,
  .ajax-upload-dragdrop .input-group-append .fc button + .ajax-file-upload,
  .fc .input-group-append .ajax-upload-dragdrop button + .ajax-file-upload,
  .ajax-upload-dragdrop .fc .input-group-append button + .ajax-file-upload,
  .input-group-append .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload,
  .ajax-upload-dragdrop .input-group-append .ajax-file-upload + .ajax-file-upload,
  .input-group-append .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload,
  .ajax-upload-dragdrop .input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled + .ajax-file-upload,
  .swal2-modal .swal2-buttonswrapper .input-group-append .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload,
  .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .input-group-append .swal2-styled + .ajax-file-upload,
  .input-group-append .wizard > .actions .ajax-upload-dragdrop a + .ajax-file-upload,
  .ajax-upload-dragdrop .input-group-append .wizard > .actions a + .ajax-file-upload,
  .wizard > .actions .input-group-append .ajax-upload-dragdrop a + .ajax-file-upload,
  .ajax-upload-dragdrop .wizard > .actions .input-group-append a + .ajax-file-upload,
  .input-group-append .swal2-modal .swal2-buttonswrapper .btn + .swal2-styled,
  .swal2-modal .swal2-buttonswrapper .input-group-append .btn + .swal2-styled,
  .input-group-append .fc .swal2-modal .swal2-buttonswrapper button + .swal2-styled,
  .swal2-modal .swal2-buttonswrapper .input-group-append .fc button + .swal2-styled,
  .fc .input-group-append .swal2-modal .swal2-buttonswrapper button + .swal2-styled,
  .swal2-modal .swal2-buttonswrapper .fc .input-group-append button + .swal2-styled,
  .input-group-append .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled,
  .swal2-modal .swal2-buttonswrapper .input-group-append .ajax-upload-dragdrop .ajax-file-upload + .swal2-styled,
  .ajax-upload-dragdrop .input-group-append .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled,
  .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .input-group-append .ajax-file-upload + .swal2-styled,
  .input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled + .swal2-styled,
  .swal2-modal .swal2-buttonswrapper .input-group-append .swal2-styled + .swal2-styled,
  .input-group-append .wizard > .actions .swal2-modal .swal2-buttonswrapper a + .swal2-styled,
  .swal2-modal .swal2-buttonswrapper .input-group-append .wizard > .actions a + .swal2-styled,
  .wizard > .actions .input-group-append .swal2-modal .swal2-buttonswrapper a + .swal2-styled,
  .swal2-modal .swal2-buttonswrapper .wizard > .actions .input-group-append a + .swal2-styled,
  .input-group-append .wizard > .actions .btn + a,
  .wizard > .actions .input-group-append .btn + a,
  .input-group-append .fc .wizard > .actions button + a,
  .wizard > .actions .input-group-append .fc button + a,
  .fc .input-group-append .wizard > .actions button + a,
  .wizard > .actions .fc .input-group-append button + a,
  .input-group-append .ajax-upload-dragdrop .wizard > .actions .ajax-file-upload + a,
  .wizard > .actions .input-group-append .ajax-upload-dragdrop .ajax-file-upload + a,
  .ajax-upload-dragdrop .input-group-append .wizard > .actions .ajax-file-upload + a,
  .wizard > .actions .ajax-upload-dragdrop .input-group-append .ajax-file-upload + a,
  .input-group-append .swal2-modal .swal2-buttonswrapper .wizard > .actions .swal2-styled + a,
  .wizard > .actions .input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled + a,
  .swal2-modal .swal2-buttonswrapper .input-group-append .wizard > .actions .swal2-styled + a,
  .wizard > .actions .swal2-modal .swal2-buttonswrapper .input-group-append .swal2-styled + a,
  .input-group-append .wizard > .actions a + a,
  .wizard > .actions .input-group-append a + a,
  .input-group-append .btn + .input-group-text,
  .input-group-append .fc button + .input-group-text,
  .fc .input-group-append button + .input-group-text,
  .input-group-append .ajax-upload-dragdrop .ajax-file-upload + .input-group-text,
  .ajax-upload-dragdrop .input-group-append .ajax-file-upload + .input-group-text,
  .input-group-append .swal2-modal .swal2-buttonswrapper .swal2-styled + .input-group-text,
  .swal2-modal .swal2-buttonswrapper .input-group-append .swal2-styled + .input-group-text,
  .input-group-append .wizard > .actions a + .input-group-text,
  .wizard > .actions .input-group-append a + .input-group-text,
  .input-group-append .input-group-text + .input-group-text,
  .input-group-append .input-group-text + .btn,
  .input-group-append .fc .input-group-text + button,
  .fc .input-group-append .input-group-text + button,
  .input-group-append .ajax-upload-dragdrop .input-group-text + .ajax-file-upload,
  .ajax-upload-dragdrop .input-group-append .input-group-text + .ajax-file-upload,
  .input-group-append .swal2-modal .swal2-buttonswrapper .input-group-text + .swal2-styled,
  .swal2-modal .swal2-buttonswrapper .input-group-append .input-group-text + .swal2-styled,
  .input-group-append .wizard > .actions .input-group-text + a,
  .wizard > .actions .input-group-append .input-group-text + a {
    margin-left: -1px; }

.input-group-prepend {
  margin-right: -1px; }

.input-group-append {
  margin-left: -1px; }

.input-group-text {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding: 0.94rem 1.375rem;
  margin-bottom: 0;
  font-size: 0.8125rem;
  font-weight: 400;
  line-height: 1;
  color: #495057;
  text-align: center;
  white-space: nowrap;
  background-color: #e9ecef;
  border: 1px solid #ced4da;
  border-radius: 2px; }
  .input-group-text input[type="radio"],
  .input-group-text input[type="checkbox"] {
    margin-top: 0; }

.input-group-lg > .form-control:not(textarea), .input-group-lg > .asColorPicker-input:not(textarea), .dataTables_wrapper .input-group-lg > select:not(textarea), .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > input:not(textarea)[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > select:not(textarea), .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > input:not(textarea)[type=number], .select2-container--default .input-group-lg > .select2-selection--single:not(textarea), .select2-container--default .select2-selection--single .input-group-lg > .select2-search__field:not(textarea), .input-group-lg > .typeahead:not(textarea),
.input-group-lg > .tt-query:not(textarea),
.input-group-lg > .tt-hint:not(textarea),
.input-group-lg > .custom-select {
  height: 3.175rem; }

.input-group-lg > .form-control, .input-group-lg > .asColorPicker-input, .dataTables_wrapper .input-group-lg > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-lg > input[type=number], .select2-container--default .input-group-lg > .select2-selection--single, .select2-container--default .select2-selection--single .input-group-lg > .select2-search__field, .input-group-lg > .typeahead,
.input-group-lg > .tt-query,
.input-group-lg > .tt-hint,
.input-group-lg > .custom-select,
.input-group-lg > .input-group-prepend > .input-group-text,
.input-group-lg > .input-group-append > .input-group-text,
.input-group-lg > .input-group-prepend > .btn,
.fc .input-group-lg > .input-group-prepend > button,
.ajax-upload-dragdrop .input-group-lg > .input-group-prepend > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .input-group-lg > .input-group-prepend > .swal2-styled,
.wizard > .actions .input-group-lg > .input-group-prepend > a,
.input-group-lg > .input-group-append > .btn,
.fc .input-group-lg > .input-group-append > button,
.ajax-upload-dragdrop .input-group-lg > .input-group-append > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .input-group-lg > .input-group-append > .swal2-styled,
.wizard > .actions .input-group-lg > .input-group-append > a {
  padding: 0.94rem 1.94rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem; }

.input-group-sm > .form-control:not(textarea), .input-group-sm > .asColorPicker-input:not(textarea), .dataTables_wrapper .input-group-sm > select:not(textarea), .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > input:not(textarea)[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > select:not(textarea), .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > input:not(textarea)[type=number], .select2-container--default .input-group-sm > .select2-selection--single:not(textarea), .select2-container--default .select2-selection--single .input-group-sm > .select2-search__field:not(textarea), .input-group-sm > .typeahead:not(textarea),
.input-group-sm > .tt-query:not(textarea),
.input-group-sm > .tt-hint:not(textarea),
.input-group-sm > .custom-select {
  height: 2.575rem; }

.input-group-sm > .form-control, .input-group-sm > .asColorPicker-input, .dataTables_wrapper .input-group-sm > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > select, .jsgrid .jsgrid-table .jsgrid-filter-row .input-group-sm > input[type=number], .select2-container--default .input-group-sm > .select2-selection--single, .select2-container--default .select2-selection--single .input-group-sm > .select2-search__field, .input-group-sm > .typeahead,
.input-group-sm > .tt-query,
.input-group-sm > .tt-hint,
.input-group-sm > .custom-select,
.input-group-sm > .input-group-prepend > .input-group-text,
.input-group-sm > .input-group-append > .input-group-text,
.input-group-sm > .input-group-prepend > .btn,
.fc .input-group-sm > .input-group-prepend > button,
.ajax-upload-dragdrop .input-group-sm > .input-group-prepend > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .input-group-sm > .input-group-prepend > .swal2-styled,
.wizard > .actions .input-group-sm > .input-group-prepend > a,
.input-group-sm > .input-group-append > .btn,
.fc .input-group-sm > .input-group-append > button,
.ajax-upload-dragdrop .input-group-sm > .input-group-append > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .input-group-sm > .input-group-append > .swal2-styled,
.wizard > .actions .input-group-sm > .input-group-append > a {
  padding: 0.5rem 0.81rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem; }

.input-group-lg > .custom-select,
.input-group-sm > .custom-select {
  padding-right: 1.75rem; }

.input-group > .input-group-prepend > .btn, .asColorPicker-wrap > .input-group-prepend > .btn, .fc .input-group > .input-group-prepend > button, .fc .asColorPicker-wrap > .input-group-prepend > button, .ajax-upload-dragdrop .input-group > .input-group-prepend > .ajax-file-upload, .ajax-upload-dragdrop .asColorPicker-wrap > .input-group-prepend > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .input-group > .input-group-prepend > .swal2-styled, .swal2-modal .swal2-buttonswrapper .asColorPicker-wrap > .input-group-prepend > .swal2-styled, .wizard > .actions .input-group > .input-group-prepend > a, .wizard > .actions .asColorPicker-wrap > .input-group-prepend > a,
.input-group > .input-group-prepend > .input-group-text,
.asColorPicker-wrap > .input-group-prepend > .input-group-text,
.input-group > .input-group-append:not(:last-child) > .btn,
.asColorPicker-wrap > .input-group-append:not(:last-child) > .btn,
.fc .input-group > .input-group-append:not(:last-child) > button,
.fc .asColorPicker-wrap > .input-group-append:not(:last-child) > button,
.ajax-upload-dragdrop .input-group > .input-group-append:not(:last-child) > .ajax-file-upload,
.ajax-upload-dragdrop .asColorPicker-wrap > .input-group-append:not(:last-child) > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .input-group > .input-group-append:not(:last-child) > .swal2-styled,
.swal2-modal .swal2-buttonswrapper .asColorPicker-wrap > .input-group-append:not(:last-child) > .swal2-styled,
.wizard > .actions .input-group > .input-group-append:not(:last-child) > a,
.wizard > .actions .asColorPicker-wrap > .input-group-append:not(:last-child) > a,
.input-group > .input-group-append:not(:last-child) > .input-group-text,
.asColorPicker-wrap > .input-group-append:not(:last-child) > .input-group-text,
.input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.asColorPicker-wrap > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.fc .input-group > .input-group-append:last-child > button:not(:last-child):not(.dropdown-toggle),
.fc .asColorPicker-wrap > .input-group-append:last-child > button:not(:last-child):not(.dropdown-toggle),
.ajax-upload-dragdrop .input-group > .input-group-append:last-child > .ajax-file-upload:not(:last-child):not(.dropdown-toggle),
.ajax-upload-dragdrop .asColorPicker-wrap > .input-group-append:last-child > .ajax-file-upload:not(:last-child):not(.dropdown-toggle),
.swal2-modal .swal2-buttonswrapper .input-group > .input-group-append:last-child > .swal2-styled:not(:last-child):not(.dropdown-toggle),
.swal2-modal .swal2-buttonswrapper .asColorPicker-wrap > .input-group-append:last-child > .swal2-styled:not(:last-child):not(.dropdown-toggle),
.wizard > .actions .input-group > .input-group-append:last-child > a:not(:last-child):not(.dropdown-toggle),
.wizard > .actions .asColorPicker-wrap > .input-group-append:last-child > a:not(:last-child):not(.dropdown-toggle),
.input-group > .input-group-append:last-child > .input-group-text:not(:last-child),
.asColorPicker-wrap > .input-group-append:last-child > .input-group-text:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.input-group > .input-group-append > .btn, .asColorPicker-wrap > .input-group-append > .btn, .fc .input-group > .input-group-append > button, .fc .asColorPicker-wrap > .input-group-append > button, .ajax-upload-dragdrop .input-group > .input-group-append > .ajax-file-upload, .ajax-upload-dragdrop .asColorPicker-wrap > .input-group-append > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .input-group > .input-group-append > .swal2-styled, .swal2-modal .swal2-buttonswrapper .asColorPicker-wrap > .input-group-append > .swal2-styled, .wizard > .actions .input-group > .input-group-append > a, .wizard > .actions .asColorPicker-wrap > .input-group-append > a,
.input-group > .input-group-append > .input-group-text,
.asColorPicker-wrap > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.asColorPicker-wrap > .input-group-prepend:not(:first-child) > .btn,
.fc .input-group > .input-group-prepend:not(:first-child) > button,
.fc .asColorPicker-wrap > .input-group-prepend:not(:first-child) > button,
.ajax-upload-dragdrop .input-group > .input-group-prepend:not(:first-child) > .ajax-file-upload,
.ajax-upload-dragdrop .asColorPicker-wrap > .input-group-prepend:not(:first-child) > .ajax-file-upload,
.swal2-modal .swal2-buttonswrapper .input-group > .input-group-prepend:not(:first-child) > .swal2-styled,
.swal2-modal .swal2-buttonswrapper .asColorPicker-wrap > .input-group-prepend:not(:first-child) > .swal2-styled,
.wizard > .actions .input-group > .input-group-prepend:not(:first-child) > a,
.wizard > .actions .asColorPicker-wrap > .input-group-prepend:not(:first-child) > a,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.asColorPicker-wrap > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.asColorPicker-wrap > .input-group-prepend:first-child > .btn:not(:first-child),
.fc .input-group > .input-group-prepend:first-child > button:not(:first-child),
.fc .asColorPicker-wrap > .input-group-prepend:first-child > button:not(:first-child),
.ajax-upload-dragdrop .input-group > .input-group-prepend:first-child > .ajax-file-upload:not(:first-child),
.ajax-upload-dragdrop .asColorPicker-wrap > .input-group-prepend:first-child > .ajax-file-upload:not(:first-child),
.swal2-modal .swal2-buttonswrapper .input-group > .input-group-prepend:first-child > .swal2-styled:not(:first-child),
.swal2-modal .swal2-buttonswrapper .asColorPicker-wrap > .input-group-prepend:first-child > .swal2-styled:not(:first-child),
.wizard > .actions .input-group > .input-group-prepend:first-child > a:not(:first-child),
.wizard > .actions .asColorPicker-wrap > .input-group-prepend:first-child > a:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child),
.asColorPicker-wrap > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.custom-control {
  position: relative;
  display: block;
  min-height: 1.5rem;
  padding-left: 1.5rem; }

.custom-control-inline {
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  margin-right: 1rem; }

.custom-control-input {
  position: absolute;
  z-index: -1;
  opacity: 0; }
  .custom-control-input:checked ~ .custom-control-label::before {
    color: #fff;
    border-color: #007bff;
    background-color: #007bff; }
  .custom-control-input:focus ~ .custom-control-label::before {
    -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
  .custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
    border-color: #80bdff; }
  .custom-control-input:not(:disabled):active ~ .custom-control-label::before {
    color: #fff;
    background-color: #b3d7ff;
    border-color: #b3d7ff; }
  .custom-control-input:disabled ~ .custom-control-label {
    color: #6c757d; }
    .custom-control-input:disabled ~ .custom-control-label::before {
      background-color: #e9ecef; }

.custom-control-label {
  position: relative;
  margin-bottom: 0;
  vertical-align: top; }
  .custom-control-label::before {
    position: absolute;
    top: 0.25rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: "";
    background-color: #fff;
    border: #adb5bd solid 1px; }
  .custom-control-label::after {
    position: absolute;
    top: 0.25rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
    background: no-repeat 50% / 50% 50%; }

.custom-checkbox .custom-control-label::before {
  border-radius: 0.25rem; }

.custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e"); }

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
  border-color: #007bff;
  background-color: #007bff; }

.custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e"); }

.custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5); }

.custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5); }

.custom-radio .custom-control-label::before {
  border-radius: 50%; }

.custom-radio .custom-control-input:checked ~ .custom-control-label::after {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e"); }

.custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
  background-color: rgba(0, 123, 255, 0.5); }

.custom-switch {
  padding-left: 2.25rem; }
  .custom-switch .custom-control-label::before {
    left: -2.25rem;
    width: 1.75rem;
    pointer-events: all;
    border-radius: 0.5rem; }
  .custom-switch .custom-control-label::after {
    top: calc(0.25rem + 2px);
    left: calc(-2.25rem + 2px);
    width: calc(1rem - 4px);
    height: calc(1rem - 4px);
    background-color: #adb5bd;
    border-radius: 0.5rem;
    -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
      .custom-switch .custom-control-label::after {
        -webkit-transition: none;
        transition: none; } }
  .custom-switch .custom-control-input:checked ~ .custom-control-label::after {
    background-color: #fff;
    -webkit-transform: translateX(0.75rem);
    transform: translateX(0.75rem); }
  .custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
    background-color: rgba(0, 123, 255, 0.5); }

.custom-select {
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 1.75rem 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  vertical-align: middle;
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none; }
  .custom-select:focus {
    border-color: #80bdff;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
    .custom-select:focus::-ms-value {
      color: #495057;
      background-color: #ffffff; }
  .custom-select[multiple], .custom-select[size]:not([size="1"]) {
    height: auto;
    padding-right: 0.75rem;
    background-image: none; }
  .custom-select:disabled {
    color: #6c757d;
    background-color: #e9ecef; }
  .custom-select::-ms-expand {
    display: none; }

.custom-select-sm {
  height: calc(1.5em + 0.5rem + 2px);
  padding-top: 0.25rem;
  padding-bottom: 0.25rem;
  padding-left: 0.5rem;
  font-size: 0.875rem; }

.custom-select-lg {
  height: calc(1.5em + 1rem + 2px);
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  padding-left: 1rem;
  font-size: 1.25rem; }

.custom-file {
  position: relative;
  display: inline-block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin-bottom: 0; }

.custom-file-input {
  position: relative;
  z-index: 2;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  margin: 0;
  opacity: 0; }
  .custom-file-input:focus ~ .custom-file-label {
    border-color: #80bdff;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
  .custom-file-input:disabled ~ .custom-file-label {
    background-color: #e9ecef; }
  .custom-file-input:lang(en) ~ .custom-file-label::after {
    content: "Browse"; }
  .custom-file-input ~ .custom-file-label[data-browse]::after {
    content: attr(data-browse); }

.custom-file-label {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  border: 1px solid #ced4da;
  border-radius: 0.25rem; }
  .custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: calc(1.5em + 0.75rem);
    padding: 0.375rem 0.75rem;
    line-height: 1.5;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-left: inherit;
    border-radius: 0 0.25rem 0.25rem 0; }

.custom-range {
  width: 100%;
  height: calc(1rem + 0.4rem);
  padding: 0;
  background-color: transparent;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none; }
  .custom-range:focus {
    outline: none; }
    .custom-range:focus::-webkit-slider-thumb {
      -webkit-box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
      box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
    .custom-range:focus::-moz-range-thumb {
      box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
    .custom-range:focus::-ms-thumb {
      box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
  .custom-range::-moz-focus-outer {
    border: 0; }
  .custom-range::-webkit-slider-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: -0.25rem;
    background-color: #007bff;
    border: 0;
    border-radius: 1rem;
    -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -webkit-appearance: none;
    appearance: none; }
    @media (prefers-reduced-motion: reduce) {
      .custom-range::-webkit-slider-thumb {
        -webkit-transition: none;
        transition: none; } }
    .custom-range::-webkit-slider-thumb:active {
      background-color: #b3d7ff; }
  .custom-range::-webkit-slider-runnable-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem; }
  .custom-range::-moz-range-thumb {
    width: 1rem;
    height: 1rem;
    background-color: #007bff;
    border: 0;
    border-radius: 1rem;
    -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    -moz-appearance: none;
    appearance: none; }
    @media (prefers-reduced-motion: reduce) {
      .custom-range::-moz-range-thumb {
        -webkit-transition: none;
        transition: none; } }
    .custom-range::-moz-range-thumb:active {
      background-color: #b3d7ff; }
  .custom-range::-moz-range-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: #dee2e6;
    border-color: transparent;
    border-radius: 1rem; }
  .custom-range::-ms-thumb {
    width: 1rem;
    height: 1rem;
    margin-top: 0;
    margin-right: 0.2rem;
    margin-left: 0.2rem;
    background-color: #007bff;
    border: 0;
    border-radius: 1rem;
    -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
    appearance: none; }
    @media (prefers-reduced-motion: reduce) {
      .custom-range::-ms-thumb {
        -webkit-transition: none;
        transition: none; } }
    .custom-range::-ms-thumb:active {
      background-color: #b3d7ff; }
  .custom-range::-ms-track {
    width: 100%;
    height: 0.5rem;
    color: transparent;
    cursor: pointer;
    background-color: transparent;
    border-color: transparent;
    border-width: 0.5rem; }
  .custom-range::-ms-fill-lower {
    background-color: #dee2e6;
    border-radius: 1rem; }
  .custom-range::-ms-fill-upper {
    margin-right: 15px;
    background-color: #dee2e6;
    border-radius: 1rem; }
  .custom-range:disabled::-webkit-slider-thumb {
    background-color: #adb5bd; }
  .custom-range:disabled::-webkit-slider-runnable-track {
    cursor: default; }
  .custom-range:disabled::-moz-range-thumb {
    background-color: #adb5bd; }
  .custom-range:disabled::-moz-range-track {
    cursor: default; }
  .custom-range:disabled::-ms-thumb {
    background-color: #adb5bd; }

.custom-control-label::before,
.custom-file-label,
.custom-select {
  -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .custom-control-label::before,
    .custom-file-label,
    .custom-select {
      -webkit-transition: none;
      transition: none; } }

.nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }

.nav-link {
  display: block;
  padding: 0.5rem 1rem; }
  .nav-link:hover, .nav-link:focus {
    text-decoration: none; }
  .nav-link.disabled {
    color: #6c757d;
    pointer-events: none;
    cursor: default; }

.nav-tabs {
  border-bottom: 1px solid #ebedf2; }
  .nav-tabs .nav-item {
    margin-bottom: -1px; }
  .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
    .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
      border-color: #ebedf2 #ebedf2 #ebedf2; }
    .nav-tabs .nav-link.disabled {
      color: #6c757d;
      background-color: transparent;
      border-color: transparent; }
  .nav-tabs .nav-link.active,
  .nav-tabs .nav-item.show .nav-link {
    color: #343a40;
    background-color: #ffffff;
    border-color: #ebedf2 #ebedf2 #ffffff; }
  .nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0; }

.nav-pills .nav-link {
  border-radius: 0.25rem; }

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #007bff; }

.nav-fill .nav-item {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  text-align: center; }

.nav-justified .nav-item {
  -ms-flex-preferred-size: 0;
  flex-basis: 0;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  text-align: center; }

.tab-content > .tab-pane {
  display: none; }

.tab-content > .active {
  display: block; }

.navbar {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 0.5rem 1rem; }
  .navbar > .container,
  .navbar > .container-fluid {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between; }

.navbar-brand {
  display: inline-block;
  padding-top: 0.3125rem;
  padding-bottom: 0.3125rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  line-height: inherit;
  white-space: nowrap; }
  .navbar-brand:hover, .navbar-brand:focus {
    text-decoration: none; }

.navbar-nav {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }
  .navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0; }
  .navbar-nav .dropdown-menu {
    position: static;
    float: none; }

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem; }

.navbar-collapse {
  -ms-flex-preferred-size: 100%;
  flex-basis: 100%;
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center; }

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem; }
  .navbar-toggler:hover, .navbar-toggler:focus {
    text-decoration: none; }

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%; }

@media (max-width: 575.98px) {
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 576px) {
  .navbar-expand-sm {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-sm .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-sm > .container,
    .navbar-expand-sm > .container-fluid {
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap; }
    .navbar-expand-sm .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-sm .navbar-toggler {
      display: none; } }

@media (max-width: 767.98px) {
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 768px) {
  .navbar-expand-md {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-md .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-md > .container,
    .navbar-expand-md > .container-fluid {
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap; }
    .navbar-expand-md .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-md .navbar-toggler {
      display: none; } }

@media (max-width: 991.98px) {
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 992px) {
  .navbar-expand-lg {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-lg .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-lg > .container,
    .navbar-expand-lg > .container-fluid {
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap; }
    .navbar-expand-lg .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-lg .navbar-toggler {
      display: none; } }

@media (max-width: 1199.98px) {
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 1200px) {
  .navbar-expand-xl {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-flow: row nowrap;
    flex-flow: row nowrap;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start; }
    .navbar-expand-xl .navbar-nav {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-direction: row;
      flex-direction: row; }
      .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-xl > .container,
    .navbar-expand-xl > .container-fluid {
      -ms-flex-wrap: nowrap;
      flex-wrap: nowrap; }
    .navbar-expand-xl .navbar-collapse {
      display: -webkit-box !important;
      display: -ms-flexbox !important;
      display: flex !important;
      -ms-flex-preferred-size: auto;
      flex-basis: auto; }
    .navbar-expand-xl .navbar-toggler {
      display: none; } }

.navbar-expand {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-flow: row nowrap;
  flex-flow: row nowrap;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start; }
  .navbar-expand > .container,
  .navbar-expand > .container-fluid {
    padding-right: 0;
    padding-left: 0; }
  .navbar-expand .navbar-nav {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .navbar-expand .navbar-nav .dropdown-menu {
      position: absolute; }
    .navbar-expand .navbar-nav .nav-link {
      padding-right: 0.5rem;
      padding-left: 0.5rem; }
  .navbar-expand > .container,
  .navbar-expand > .container-fluid {
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap; }
  .navbar-expand .navbar-collapse {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important;
    -ms-flex-preferred-size: auto;
    flex-basis: auto; }
  .navbar-expand .navbar-toggler {
    display: none; }

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9); }
  .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
    color: rgba(0, 0, 0, 0.9); }

.navbar-light .navbar-nav .nav-link {
  color: rgba(0, 0, 0, 0.5); }
  .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
    color: rgba(0, 0, 0, 0.7); }
  .navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0, 0, 0, 0.3); }

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9); }

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1); }

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); }

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5); }
  .navbar-light .navbar-text a {
    color: rgba(0, 0, 0, 0.9); }
    .navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
      color: rgba(0, 0, 0, 0.9); }

.navbar-dark .navbar-brand {
  color: #fff; }
  .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
    color: #fff; }

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5); }
  .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
    color: rgba(255, 255, 255, 0.75); }
  .navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255, 255, 255, 0.25); }

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff; }

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.1); }

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); }

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.5); }
  .navbar-dark .navbar-text a {
    color: #fff; }
    .navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
      color: #fff; }

.card {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0; }
  .card > hr {
    margin-right: 0;
    margin-left: 0; }
  .card > .list-group:first-child .list-group-item:first-child {
    border-top-left-radius: 0;
    border-top-right-radius: 0; }
  .card > .list-group:last-child .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0; }

.card-body {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1.25rem; }

.card-title {
  margin-bottom: 0.75rem; }

.card-subtitle {
  margin-top: -0.375rem;
  margin-bottom: 0; }

.card-text:last-child {
  margin-bottom: 0; }

.card-link:hover {
  text-decoration: none; }

.card-link + .card-link {
  margin-left: 1.25rem; }

.card-header {
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125); }
  .card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0; }
  .card-header + .list-group .list-group-item:first-child {
    border-top: 0; }

.card-footer {
  padding: 0.75rem 1.25rem;
  background-color: rgba(0, 0, 0, 0.03);
  border-top: 1px solid rgba(0, 0, 0, 0.125); }
  .card-footer:last-child {
    border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px); }

.card-header-tabs {
  margin-right: -0.625rem;
  margin-bottom: -0.75rem;
  margin-left: -0.625rem;
  border-bottom: 0; }

.card-header-pills {
  margin-right: -0.625rem;
  margin-left: -0.625rem; }

.card-img-overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1.25rem; }

.card-img {
  width: 100%;
  border-radius: calc(0.25rem - 1px); }

.card-img-top {
  width: 100%;
  border-top-left-radius: calc(0.25rem - 1px);
  border-top-right-radius: calc(0.25rem - 1px); }

.card-img-bottom {
  width: 100%;
  border-bottom-right-radius: calc(0.25rem - 1px);
  border-bottom-left-radius: calc(0.25rem - 1px); }

.card-deck {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column; }
  .card-deck .card {
    margin-bottom: 15px; }
  @media (min-width: 576px) {
    .card-deck {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-flow: row wrap;
      flex-flow: row wrap;
      margin-right: -15px;
      margin-left: -15px; }
      .card-deck .card {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        margin-right: 15px;
        margin-bottom: 0;
        margin-left: 15px; } }

.card-group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column; }
  .card-group > .card {
    margin-bottom: 15px; }
  @media (min-width: 576px) {
    .card-group {
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
      -ms-flex-flow: row wrap;
      flex-flow: row wrap; }
      .card-group > .card {
        -webkit-box-flex: 1;
        -ms-flex: 1 0 0%;
        flex: 1 0 0%;
        margin-bottom: 0; }
        .card-group > .card + .card {
          margin-left: 0;
          border-left: 0; }
        .card-group > .card:not(:last-child) {
          border-top-right-radius: 0;
          border-bottom-right-radius: 0; }
          .card-group > .card:not(:last-child) .card-img-top,
          .card-group > .card:not(:last-child) .card-header {
            border-top-right-radius: 0; }
          .card-group > .card:not(:last-child) .card-img-bottom,
          .card-group > .card:not(:last-child) .card-footer {
            border-bottom-right-radius: 0; }
        .card-group > .card:not(:first-child) {
          border-top-left-radius: 0;
          border-bottom-left-radius: 0; }
          .card-group > .card:not(:first-child) .card-img-top,
          .card-group > .card:not(:first-child) .card-header {
            border-top-left-radius: 0; }
          .card-group > .card:not(:first-child) .card-img-bottom,
          .card-group > .card:not(:first-child) .card-footer {
            border-bottom-left-radius: 0; } }

.card-columns .card {
  margin-bottom: 0.75rem; }

@media (min-width: 576px) {
  .card-columns {
    -webkit-column-count: 3;
    -moz-column-count: 3;
    column-count: 3;
    -webkit-column-gap: 1.25rem;
    -moz-column-gap: 1.25rem;
    column-gap: 1.25rem;
    orphans: 1;
    widows: 1; }
    .card-columns .card {
      display: inline-block;
      width: 100%; } }

.accordion > .card {
  overflow: hidden; }
  .accordion > .card:not(:first-of-type) .card-header:first-child {
    border-radius: 0; }
  .accordion > .card:not(:first-of-type):not(:last-of-type) {
    border-bottom: 0;
    border-radius: 0; }
  .accordion > .card:first-of-type {
    border-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0; }
  .accordion > .card:last-of-type {
    border-top-left-radius: 0;
    border-top-right-radius: 0; }
  .accordion > .card .card-header {
    margin-bottom: -1px; }

.breadcrumb {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  padding: 0.56rem 1.13rem;
  margin-bottom: 1rem;
  list-style: none;
  background-color: transparent;
  border-radius: 0.25rem; }

.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.5rem; }
  .breadcrumb-item + .breadcrumb-item::before {
    display: inline-block;
    padding-right: 0.5rem;
    color: #6c757d;
    content: "/"; }

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: underline; }

.breadcrumb-item + .breadcrumb-item:hover::before {
  text-decoration: none; }

.breadcrumb-item.active {
  color: #495057; }

.pagination, .jsgrid .jsgrid-pager {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem; }

.page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a,
.jsgrid .jsgrid-pager .jsgrid-pager-page a {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #007bff;
  background-color: #fff;
  border: 1px solid #dee2e6; }
  .page-link:hover, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a:hover,
  .jsgrid .jsgrid-pager .jsgrid-pager-page a:hover {
    z-index: 2;
    color: #0056b3;
    text-decoration: none;
    background-color: #e9ecef;
    border-color: #dee2e6; }
  .page-link:focus, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a:focus,
  .jsgrid .jsgrid-pager .jsgrid-pager-page a:focus {
    z-index: 2;
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }

.page-item:first-child .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child .page-link, .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item:first-child a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child a,
.page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item:first-child a,
.jsgrid .jsgrid-pager .jsgrid-pager-page:first-child a {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem; }

.page-item:last-child .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child .page-link, .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item:last-child a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child a,
.page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item:last-child a,
.jsgrid .jsgrid-pager .jsgrid-pager-page:last-child a {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem; }

.page-item.active .page-link, .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item.active a, .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a,
.page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item.active a,
.jsgrid .jsgrid-pager .active.jsgrid-pager-page a {
  z-index: 1;
  color: #fff;
  background-color: #007bff;
  border-color: #007bff; }

.page-item.disabled .page-link, .jsgrid .jsgrid-pager .disabled.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .disabled.jsgrid-pager-page .page-link, .page-item.disabled .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item.disabled a, .jsgrid .jsgrid-pager .disabled.jsgrid-pager-nav-button a,
.page-item.disabled .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item.disabled a,
.jsgrid .jsgrid-pager .disabled.jsgrid-pager-page a {
  color: #6c757d;
  pointer-events: none;
  cursor: auto;
  background-color: #fff;
  border-color: #dee2e6; }

.pagination-lg .page-link, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-lg a,
.pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-lg a {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  line-height: 1.5; }

.pagination-lg .page-item:first-child .page-link, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-nav-button:first-child .page-link, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child .page-link, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-page:first-child .page-link, .pagination-lg .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-lg .page-item:first-child a, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child a, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-nav-button:first-child a,
.pagination-lg .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-lg .page-item:first-child a,
.pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child a, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-page:first-child a {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem; }

.pagination-lg .page-item:last-child .page-link, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-nav-button:last-child .page-link, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child .page-link, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-page:last-child .page-link, .pagination-lg .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-lg .page-item:last-child a, .pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child a, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-nav-button:last-child a,
.pagination-lg .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-lg .page-item:last-child a,
.pagination-lg .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child a, .jsgrid .jsgrid-pager .pagination-lg .jsgrid-pager-page:last-child a {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem; }

.pagination-sm .page-link, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-sm a,
.pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-sm a {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5; }

.pagination-sm .page-item:first-child .page-link, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-nav-button:first-child .page-link, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child .page-link, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-page:first-child .page-link, .pagination-sm .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-sm .page-item:first-child a, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child a, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-nav-button:first-child a,
.pagination-sm .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-sm .page-item:first-child a,
.pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child a, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-page:first-child a {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem; }

.pagination-sm .page-item:last-child .page-link, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-nav-button:last-child .page-link, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child .page-link, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-page:last-child .page-link, .pagination-sm .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-sm .page-item:last-child a, .pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child a, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-nav-button:last-child a,
.pagination-sm .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-sm .page-item:last-child a,
.pagination-sm .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child a, .jsgrid .jsgrid-pager .pagination-sm .jsgrid-pager-page:last-child a {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem; }

.badge {
  display: inline-block;
  padding: 0.25em 0.4em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25rem;
  -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .badge {
      -webkit-transition: none;
      transition: none; } }
  a.badge:hover, a.badge:focus {
    text-decoration: none; }
  .badge:empty {
    display: none; }

.btn .badge, .fc button .badge, .ajax-upload-dragdrop .ajax-file-upload .badge, .swal2-modal .swal2-buttonswrapper .swal2-styled .badge, .wizard > .actions a .badge {
  position: relative;
  top: -1px; }

.badge-pill {
  padding-right: 0.6em;
  padding-left: 0.6em;
  border-radius: 10rem; }

.badge-primary {
  color: #212529;
  background-color: #1bdbe0; }
  a.badge-primary:hover, a.badge-primary:focus {
    color: #212529;
    background-color: #16afb2; }
  a.badge-primary:focus, a.badge-primary.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(27, 219, 224, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(27, 219, 224, 0.5); }

.badge-secondary {
  color: #212529;
  background-color: #d8d8d8; }
  a.badge-secondary:hover, a.badge-secondary:focus {
    color: #212529;
    background-color: #bfbfbf; }
  a.badge-secondary:focus, a.badge-secondary.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(216, 216, 216, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(216, 216, 216, 0.5); }

.badge-success, .preview-list .preview-item .preview-thumbnail .badge.badge-online {
  color: #fff;
  background-color: <?php echo $color; ?>; }
  a.badge-success:hover, .preview-list .preview-item .preview-thumbnail a.badge.badge-online:hover, a.badge-success:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-online:focus {
    color: #fff;
    background-color: #2aa92d; }
  a.badge-success:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-online:focus, a.badge-success.focus, .preview-list .preview-item .preview-thumbnail a.focus.badge.badge-online {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(56, 206, 60, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(56, 206, 60, 0.5); }

.badge-info, .preview-list .preview-item .preview-thumbnail .badge.badge-offline {
  color: #fff;
  background-color: #8e32e9; }
  a.badge-info:hover, .preview-list .preview-item .preview-thumbnail a.badge.badge-offline:hover, a.badge-info:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-offline:focus {
    color: #fff;
    background-color: #7516d2; }
  a.badge-info:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-offline:focus, a.badge-info.focus, .preview-list .preview-item .preview-thumbnail a.focus.badge.badge-offline {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(142, 50, 233, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(142, 50, 233, 0.5); }

.badge-warning, .preview-list .preview-item .preview-thumbnail .badge.badge-busy {
  color: #212529;
  background-color: #ffde73; }
  a.badge-warning:hover, .preview-list .preview-item .preview-thumbnail a.badge.badge-busy:hover, a.badge-warning:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-busy:focus {
    color: #212529;
    background-color: #ffd240; }
  a.badge-warning:focus, .preview-list .preview-item .preview-thumbnail a.badge.badge-busy:focus, a.badge-warning.focus, .preview-list .preview-item .preview-thumbnail a.focus.badge.badge-busy {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 222, 115, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(255, 222, 115, 0.5); }

.badge-danger {
  color: #fff;
  background-color: #ff4d6b; }
  a.badge-danger:hover, a.badge-danger:focus {
    color: #fff;
    background-color: #ff1a41; }
  a.badge-danger:focus, a.badge-danger.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 77, 107, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(255, 77, 107, 0.5); }

.badge-light {
  color: #212529;
  background-color: #f8f9fa; }
  a.badge-light:hover, a.badge-light:focus {
    color: #212529;
    background-color: #dae0e5; }
  a.badge-light:focus, a.badge-light.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

.badge-dark {
  color: #fff;
  background-color: #3e4b5b; }
  a.badge-dark:hover, a.badge-dark:focus {
    color: #fff;
    background-color: #29323d; }
  a.badge-dark:focus, a.badge-dark.focus {
    outline: 0;
    -webkit-box-shadow: 0 0 0 0.2rem rgba(62, 75, 91, 0.5);
    box-shadow: 0 0 0 0.2rem rgba(62, 75, 91, 0.5); }

.jumbotron {
  padding: 2rem 1rem;
  margin-bottom: 2rem;
  background-color: #e9ecef;
  border-radius: 0.3rem; }
  @media (min-width: 576px) {
    .jumbotron {
      padding: 4rem 2rem; } }

.jumbotron-fluid {
  padding-right: 0;
  padding-left: 0;
  border-radius: 0; }

.alert {
  position: relative;
  padding: 0.75rem 1.25rem;
  margin-bottom: 1rem;
  border: 1px solid transparent;
  border-radius: 0.25rem; }

.alert-heading {
  color: inherit; }

.alert-link {
  font-weight: 700; }

.alert-dismissible {
  padding-right: 4rem; }
  .alert-dismissible .close {
    position: absolute;
    top: 0;
    right: 0;
    padding: 0.75rem 1.25rem;
    color: inherit; }

.alert-primary {
  color: #0e7274;
  background-color: #d1f8f9;
  border-color: #bff5f6; }
  .alert-primary hr {
    border-top-color: #a9f2f3; }
  .alert-primary .alert-link {
    color: #094546; }

.alert-secondary {
  color: #707070;
  background-color: #f7f7f7;
  border-color: #f4f4f4; }
  .alert-secondary hr {
    border-top-color: #e7e7e7; }
  .alert-secondary .alert-link {
    color: #575757; }

.alert-success {
  color: #1d6b1f;
  background-color: #d7f5d8;
  border-color: #c7f1c8; }
  .alert-success hr {
    border-top-color: #b3ecb4; }
  .alert-success .alert-link {
    color: #124313; }

.alert-info {
  color: #4a1a79;
  background-color: #e8d6fb;
  border-color: #dfc6f9; }
  .alert-info hr {
    border-top-color: #d2aff7; }
  .alert-info .alert-link {
    color: #30114f; }

.alert-warning {
  color: #85733c;
  background-color: #fff8e3;
  border-color: #fff6d8; }
  .alert-warning hr {
    border-top-color: #fff0bf; }
  .alert-warning .alert-link {
    color: #62552c; }

.alert-danger {
  color: #852838;
  background-color: #ffdbe1;
  border-color: #ffcdd6; }
  .alert-danger hr {
    border-top-color: #ffb4c1; }
  .alert-danger .alert-link {
    color: #5e1c27; }

.alert-light {
  color: #818182;
  background-color: #fefefe;
  border-color: #fdfdfe; }
  .alert-light hr {
    border-top-color: #ececf6; }
  .alert-light .alert-link {
    color: #686868; }

.alert-dark {
  color: #20272f;
  background-color: #d8dbde;
  border-color: #c9cdd1; }
  .alert-dark hr {
    border-top-color: #bbc0c5; }
  .alert-dark .alert-link {
    color: #0b0e11; }

@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0; }
  to {
    background-position: 0 0; } }

@keyframes progress-bar-stripes {
  from {
    background-position: 1rem 0; }
  to {
    background-position: 0 0; } }

.progress {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  height: 1rem;
  overflow: hidden;
  font-size: 0.75rem;
  background-color: #e9ecef;
  border-radius: 0.25rem; }

.progress-bar {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  background-color: #007bff;
  -webkit-transition: width 0.6s ease;
  transition: width 0.6s ease; }
  @media (prefers-reduced-motion: reduce) {
    .progress-bar {
      -webkit-transition: none;
      transition: none; } }

.progress-bar-striped {
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 1rem 1rem; }

.progress-bar-animated {
  -webkit-animation: progress-bar-stripes 1s linear infinite;
  animation: progress-bar-stripes 1s linear infinite; }
  @media (prefers-reduced-motion: reduce) {
    .progress-bar-animated {
      -webkit-animation: none;
      animation: none; } }

.media {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start; }

.media-body {
  -webkit-box-flex: 1;
  -ms-flex: 1;
  flex: 1; }

.list-group {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0; }

.list-group-item-action {
  width: 100%;
  color: #495057;
  text-align: inherit; }
  .list-group-item-action:hover, .list-group-item-action:focus {
    z-index: 1;
    color: #495057;
    text-decoration: none;
    background-color: #f8f9fa; }
  .list-group-item-action:active {
    color: #212529;
    background-color: #e9ecef; }

.list-group-item {
  position: relative;
  display: block;
  padding: 0.75rem 1.25rem;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.125); }
  .list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
  .list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem; }
  .list-group-item.disabled, .list-group-item:disabled {
    color: #6c757d;
    pointer-events: none;
    background-color: #fff; }
  .list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #007bff;
    border-color: #007bff; }

.list-group-horizontal {
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row; }
  .list-group-horizontal .list-group-item {
    margin-right: -1px;
    margin-bottom: 0; }
    .list-group-horizontal .list-group-item:first-child {
      border-top-left-radius: 0.25rem;
      border-bottom-left-radius: 0.25rem;
      border-top-right-radius: 0; }
    .list-group-horizontal .list-group-item:last-child {
      margin-right: 0;
      border-top-right-radius: 0.25rem;
      border-bottom-right-radius: 0.25rem;
      border-bottom-left-radius: 0; }

@media (min-width: 576px) {
  .list-group-horizontal-sm {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .list-group-horizontal-sm .list-group-item {
      margin-right: -1px;
      margin-bottom: 0; }
      .list-group-horizontal-sm .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0; }
      .list-group-horizontal-sm .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0; } }

@media (min-width: 768px) {
  .list-group-horizontal-md {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .list-group-horizontal-md .list-group-item {
      margin-right: -1px;
      margin-bottom: 0; }
      .list-group-horizontal-md .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0; }
      .list-group-horizontal-md .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0; } }

@media (min-width: 992px) {
  .list-group-horizontal-lg {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .list-group-horizontal-lg .list-group-item {
      margin-right: -1px;
      margin-bottom: 0; }
      .list-group-horizontal-lg .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0; }
      .list-group-horizontal-lg .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0; } }

@media (min-width: 1200px) {
  .list-group-horizontal-xl {
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .list-group-horizontal-xl .list-group-item {
      margin-right: -1px;
      margin-bottom: 0; }
      .list-group-horizontal-xl .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0; }
      .list-group-horizontal-xl .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0; } }

.list-group-flush .list-group-item {
  border-right: 0;
  border-left: 0;
  border-radius: 0; }
  .list-group-flush .list-group-item:last-child {
    margin-bottom: -1px; }

.list-group-flush:first-child .list-group-item:first-child {
  border-top: 0; }

.list-group-flush:last-child .list-group-item:last-child {
  margin-bottom: 0;
  border-bottom: 0; }

.list-group-item-primary {
  color: #0e7274;
  background-color: #bff5f6; }
  .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
    color: #0e7274;
    background-color: #a9f2f3; }
  .list-group-item-primary.list-group-item-action.active {
    color: #ffffff;
    background-color: #0e7274;
    border-color: #0e7274; }

.list-group-item-secondary {
  color: #707070;
  background-color: #f4f4f4; }
  .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
    color: #707070;
    background-color: #e7e7e7; }
  .list-group-item-secondary.list-group-item-action.active {
    color: #ffffff;
    background-color: #707070;
    border-color: #707070; }

.list-group-item-success {
  color: #1d6b1f;
  background-color: #c7f1c8; }
  .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
    color: #1d6b1f;
    background-color: #b3ecb4; }
  .list-group-item-success.list-group-item-action.active {
    color: #ffffff;
    background-color: #1d6b1f;
    border-color: #1d6b1f; }

.list-group-item-info {
  color: #4a1a79;
  background-color: #dfc6f9; }
  .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
    color: #4a1a79;
    background-color: #d2aff7; }
  .list-group-item-info.list-group-item-action.active {
    color: #ffffff;
    background-color: #4a1a79;
    border-color: #4a1a79; }

.list-group-item-warning {
  color: #85733c;
  background-color: #fff6d8; }
  .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
    color: #85733c;
    background-color: #fff0bf; }
  .list-group-item-warning.list-group-item-action.active {
    color: #ffffff;
    background-color: #85733c;
    border-color: #85733c; }

.list-group-item-danger {
  color: #852838;
  background-color: #ffcdd6; }
  .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
    color: #852838;
    background-color: #ffb4c1; }
  .list-group-item-danger.list-group-item-action.active {
    color: #ffffff;
    background-color: #852838;
    border-color: #852838; }

.list-group-item-light {
  color: #818182;
  background-color: #fdfdfe; }
  .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
    color: #818182;
    background-color: #ececf6; }
  .list-group-item-light.list-group-item-action.active {
    color: #ffffff;
    background-color: #818182;
    border-color: #818182; }

.list-group-item-dark {
  color: #20272f;
  background-color: #c9cdd1; }
  .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
    color: #20272f;
    background-color: #bbc0c5; }
  .list-group-item-dark.list-group-item-action.active {
    color: #ffffff;
    background-color: #20272f;
    border-color: #20272f; }

.close {
  float: right;
  font-size: 1.5rem;
  font-weight: 700;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  opacity: .5; }
  .close:hover {
    color: #000;
    text-decoration: none; }
  .close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
    opacity: .75; }

button.close {
  padding: 0;
  background-color: transparent;
  border: 0;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none; }

a.close.disabled {
  pointer-events: none; }

.toast {
  max-width: 350px;
  overflow: hidden;
  font-size: 0.875rem;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
  box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
  -webkit-backdrop-filter: blur(10px);
  backdrop-filter: blur(10px);
  opacity: 0;
  border-radius: 0.25rem; }
  .toast:not(:last-child) {
    margin-bottom: 0.75rem; }
  .toast.showing {
    opacity: 1; }
  .toast.show {
    display: block;
    opacity: 1; }
  .toast.hide {
    display: none; }

.toast-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  padding: 0.25rem 0.75rem;
  color: #6c757d;
  background-color: rgba(255, 255, 255, 0.85);
  background-clip: padding-box;
  border-bottom: 1px solid rgba(0, 0, 0, 0.05); }

.toast-body {
  padding: 0.75rem; }

.modal-open {
  overflow: hidden; }
  .modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto; }

.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  display: none;
  width: 100%;
  height: 100%;
  overflow: hidden;
  outline: 0; }

.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
  pointer-events: none; }
  .modal.fade .modal-dialog {
    -webkit-transition: -webkit-transform 0.4s ease;
    transition: -webkit-transform 0.4s ease;
    transition: transform 0.4s ease;
    transition: transform 0.4s ease, -webkit-transform 0.4s ease;
    -webkit-transform: translate(0, -50px);
    transform: translate(0, -50px); }
    @media (prefers-reduced-motion: reduce) {
      .modal.fade .modal-dialog {
        -webkit-transition: none;
        transition: none; } }
  .modal.show .modal-dialog {
    -webkit-transform: none;
    transform: none; }

.modal-dialog-scrollable {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  max-height: calc(100% - 20px); }
  .modal-dialog-scrollable .modal-content {
    max-height: calc(100vh - 20px);
    overflow: hidden; }
  .modal-dialog-scrollable .modal-header,
  .modal-dialog-scrollable .modal-footer {
    -ms-flex-negative: 0;
    flex-shrink: 0; }
  .modal-dialog-scrollable .modal-body {
    overflow-y: auto; }

.modal-dialog-centered {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  min-height: calc(100% - 20px); }
  .modal-dialog-centered::before {
    display: block;
    height: calc(100vh - 20px);
    content: ""; }
  .modal-dialog-centered.modal-dialog-scrollable {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    height: 100%; }
    .modal-dialog-centered.modal-dialog-scrollable .modal-content {
      max-height: none; }
    .modal-dialog-centered.modal-dialog-scrollable::before {
      content: none; }

.modal-content {
  position: relative;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #e1e3e4;
  background-clip: padding-box;
  border: 1px solid #e8e5e5;
  border-radius: 0.3rem;
  outline: 0; }

.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000; }
  .modal-backdrop.fade {
    opacity: 0; }
  .modal-backdrop.show {
    opacity: 0.5; }

.modal-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 1rem 1rem;
  border-bottom: 1px solid #e8e5e5;
  border-top-left-radius: 0.3rem;
  border-top-right-radius: 0.3rem; }
  .modal-header .close {
    padding: 1rem 1rem;
    margin: -25px -26px -25px auto; }

.modal-title {
  margin-bottom: 0;
  line-height: 1.5; }

.modal-body {
  position: relative;
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 15px; }

.modal-footer {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: end;
  -ms-flex-pack: end;
  justify-content: flex-end;
  padding: 15px;
  border-top: 1px solid #e8e5e5;
  border-bottom-right-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem; }
  .modal-footer > :not(:first-child) {
    margin-left: .25rem; }
  .modal-footer > :not(:last-child) {
    margin-right: .25rem; }

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll; }

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 30px auto; }
  .modal-dialog-scrollable {
    max-height: calc(100% - 60px); }
    .modal-dialog-scrollable .modal-content {
      max-height: calc(100vh - 60px); }
  .modal-dialog-centered {
    min-height: calc(100% - 60px); }
    .modal-dialog-centered::before {
      height: calc(100vh - 60px); }
  .modal-sm {
    max-width: 300px; } }

@media (min-width: 992px) {
  .modal-lg,
  .modal-xl {
    max-width: 90%; } }

@media (min-width: 1200px) {
  .modal-xl {
    max-width: 1140px; } }

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.75rem;
  word-wrap: break-word;
  opacity: 0; }
  .tooltip.show {
    opacity: 0.9; }
  .tooltip .arrow {
    position: absolute;
    display: block;
    width: 0.8rem;
    height: 0.4rem; }
    .tooltip .arrow::before {
      position: absolute;
      content: "";
      border-color: transparent;
      border-style: solid; }

.bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
  padding: 0.4rem 0; }
  .bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
    bottom: 0; }
    .bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
      top: 0;
      border-width: 0.4rem 0.4rem 0;
      border-top-color: #000; }

.bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
  padding: 0 0.4rem; }
  .bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
    left: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
      right: 0;
      border-width: 0.4rem 0.4rem 0.4rem 0;
      border-right-color: #000; }

.bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
  padding: 0.4rem 0; }
  .bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
    top: 0; }
    .bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
      bottom: 0;
      border-width: 0 0.4rem 0.4rem;
      border-bottom-color: #000; }

.bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
  padding: 0 0.4rem; }
  .bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
    right: 0;
    width: 0.4rem;
    height: 0.8rem; }
    .bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
      left: 0;
      border-width: 0.4rem 0 0.4rem 0.4rem;
      border-left-color: #000; }

.tooltip-inner {
  max-width: 200px;
  padding: 0.4rem 0.75rem;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 0.375rem; }

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: block;
  max-width: 276px;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-style: normal;
  font-weight: 400;
  line-height: 1.5;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  white-space: normal;
  line-break: auto;
  font-size: 0.875rem;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem; }
  .popover .arrow {
    position: absolute;
    display: block;
    width: 1rem;
    height: 0.5rem;
    margin: 0 0.3rem; }
    .popover .arrow::before, .popover .arrow::after {
      position: absolute;
      display: block;
      content: "";
      border-color: transparent;
      border-style: solid; }

.bs-popover-top, .bs-popover-auto[x-placement^="top"] {
  margin-bottom: 0.5rem; }
  .bs-popover-top > .arrow, .bs-popover-auto[x-placement^="top"] > .arrow {
    bottom: calc((0.5rem + 1px) * -1); }
    .bs-popover-top > .arrow::before, .bs-popover-auto[x-placement^="top"] > .arrow::before {
      bottom: 0;
      border-width: 0.5rem 0.5rem 0;
      border-top-color: rgba(0, 0, 0, 0.25); }
    .bs-popover-top > .arrow::after, .bs-popover-auto[x-placement^="top"] > .arrow::after {
      bottom: 1px;
      border-width: 0.5rem 0.5rem 0;
      border-top-color: #fff; }

.bs-popover-right, .bs-popover-auto[x-placement^="right"] {
  margin-left: 0.5rem; }
  .bs-popover-right > .arrow, .bs-popover-auto[x-placement^="right"] > .arrow {
    left: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0; }
    .bs-popover-right > .arrow::before, .bs-popover-auto[x-placement^="right"] > .arrow::before {
      left: 0;
      border-width: 0.5rem 0.5rem 0.5rem 0;
      border-right-color: rgba(0, 0, 0, 0.25); }
    .bs-popover-right > .arrow::after, .bs-popover-auto[x-placement^="right"] > .arrow::after {
      left: 1px;
      border-width: 0.5rem 0.5rem 0.5rem 0;
      border-right-color: #fff; }

.bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
  margin-top: 0.5rem; }
  .bs-popover-bottom > .arrow, .bs-popover-auto[x-placement^="bottom"] > .arrow {
    top: calc((0.5rem + 1px) * -1); }
    .bs-popover-bottom > .arrow::before, .bs-popover-auto[x-placement^="bottom"] > .arrow::before {
      top: 0;
      border-width: 0 0.5rem 0.5rem 0.5rem;
      border-bottom-color: rgba(0, 0, 0, 0.25); }
    .bs-popover-bottom > .arrow::after, .bs-popover-auto[x-placement^="bottom"] > .arrow::after {
      top: 1px;
      border-width: 0 0.5rem 0.5rem 0.5rem;
      border-bottom-color: #fff; }
  .bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 1rem;
    margin-left: -0.5rem;
    content: "";
    border-bottom: 1px solid #f7f7f7; }

.bs-popover-left, .bs-popover-auto[x-placement^="left"] {
  margin-right: 0.5rem; }
  .bs-popover-left > .arrow, .bs-popover-auto[x-placement^="left"] > .arrow {
    right: calc((0.5rem + 1px) * -1);
    width: 0.5rem;
    height: 1rem;
    margin: 0.3rem 0; }
    .bs-popover-left > .arrow::before, .bs-popover-auto[x-placement^="left"] > .arrow::before {
      right: 0;
      border-width: 0.5rem 0 0.5rem 0.5rem;
      border-left-color: rgba(0, 0, 0, 0.25); }
    .bs-popover-left > .arrow::after, .bs-popover-auto[x-placement^="left"] > .arrow::after {
      right: 1px;
      border-width: 0.5rem 0 0.5rem 0.5rem;
      border-left-color: #fff; }

.popover-header {
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-top-left-radius: calc(0.3rem - 1px);
  border-top-right-radius: calc(0.3rem - 1px); }
  .popover-header:empty {
    display: none; }

.popover-body {
  padding: 0.5rem 0.75rem;
  color: #212529; }

.carousel {
  position: relative; }

.carousel.pointer-event {
  -ms-touch-action: pan-y;
  touch-action: pan-y; }

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden; }
  .carousel-inner::after {
    display: block;
    clear: both;
    content: ""; }

.carousel-item {
  position: relative;
  display: none;
  float: left;
  width: 100%;
  margin-right: -100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: -webkit-transform 0.6s ease-in-out;
  transition: -webkit-transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out;
  transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out; }
  @media (prefers-reduced-motion: reduce) {
    .carousel-item {
      -webkit-transition: none;
      transition: none; } }

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
  display: block; }

.carousel-item-next:not(.carousel-item-left),
.active.carousel-item-right {
  -webkit-transform: translateX(100%);
  transform: translateX(100%); }

.carousel-item-prev:not(.carousel-item-right),
.active.carousel-item-left {
  -webkit-transform: translateX(-100%);
  transform: translateX(-100%); }

.carousel-fade .carousel-item {
  opacity: 0;
  -webkit-transition-property: opacity;
  transition-property: opacity;
  -webkit-transform: none;
  transform: none; }

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
  z-index: 1;
  opacity: 1; }

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
  z-index: 0;
  opacity: 0;
  -webkit-transition: 0s 0.6s opacity;
  transition: 0s 0.6s opacity; }
  @media (prefers-reduced-motion: reduce) {
    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
      -webkit-transition: none;
      transition: none; } }

.carousel-control-prev,
.carousel-control-next {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 15%;
  color: #fff;
  text-align: center;
  opacity: 0.5;
  -webkit-transition: opacity 0.15s ease;
  transition: opacity 0.15s ease; }
  @media (prefers-reduced-motion: reduce) {
    .carousel-control-prev,
    .carousel-control-next {
      -webkit-transition: none;
      transition: none; } }
  .carousel-control-prev:hover, .carousel-control-prev:focus,
  .carousel-control-next:hover,
  .carousel-control-next:focus {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: 0.9; }

.carousel-control-prev {
  left: 0; }

.carousel-control-next {
  right: 0; }

.carousel-control-prev-icon,
.carousel-control-next-icon {
  display: inline-block;
  width: 20px;
  height: 20px;
  background: no-repeat 50% / 100% 100%; }

.carousel-control-prev-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e"); }

.carousel-control-next-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e"); }

.carousel-indicators {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 15;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  padding-left: 0;
  margin-right: 15%;
  margin-left: 15%;
  list-style: none; }
  .carousel-indicators li {
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    -webkit-box-flex: 0;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: .5;
    -webkit-transition: opacity 0.6s ease;
    transition: opacity 0.6s ease; }
    @media (prefers-reduced-motion: reduce) {
      .carousel-indicators li {
        -webkit-transition: none;
        transition: none; } }
  .carousel-indicators .active {
    opacity: 1; }

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center; }

@-webkit-keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@keyframes spinner-border {
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

.spinner-border {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: text-bottom;
  border: 0.25em solid currentColor;
  border-right-color: transparent;
  border-radius: 50%;
  -webkit-animation: spinner-border .75s linear infinite;
  animation: spinner-border .75s linear infinite; }

.spinner-border-sm {
  width: 1rem;
  height: 1rem;
  border-width: 0.2em; }

@-webkit-keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0); }
  50% {
    opacity: 1; } }

@keyframes spinner-grow {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0); }
  50% {
    opacity: 1; } }

.spinner-grow {
  display: inline-block;
  width: 2rem;
  height: 2rem;
  vertical-align: text-bottom;
  background-color: currentColor;
  border-radius: 50%;
  opacity: 0;
  -webkit-animation: spinner-grow .75s linear infinite;
  animation: spinner-grow .75s linear infinite; }

.spinner-grow-sm {
  width: 1rem;
  height: 1rem; }

.align-baseline {
  vertical-align: baseline !important; }

.align-top {
  vertical-align: top !important; }

.align-middle {
  vertical-align: middle !important; }

.align-bottom {
  vertical-align: bottom !important; }

.align-text-bottom {
  vertical-align: text-bottom !important; }

.align-text-top {
  vertical-align: text-top !important; }

.bg-primary {
  background-color: #1bdbe0 !important; }

a.bg-primary:hover, a.bg-primary:focus,
button.bg-primary:hover,
button.bg-primary:focus {
  background-color: #16afb2 !important; }

.bg-secondary {
  background-color: #d8d8d8 !important; }

a.bg-secondary:hover, a.bg-secondary:focus,
button.bg-secondary:hover,
button.bg-secondary:focus {
  background-color: #bfbfbf !important; }

.bg-success, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm {
  background-color: <?php echo $color; ?> !important; }

a.bg-success:hover, .swal2-modal .swal2-buttonswrapper a.swal2-styled.swal2-confirm:hover, a.bg-success:focus, .swal2-modal .swal2-buttonswrapper a.swal2-styled.swal2-confirm:focus,
button.bg-success:hover,
.swal2-modal .swal2-buttonswrapper button.swal2-styled.swal2-confirm:hover,
button.bg-success:focus,
.swal2-modal .swal2-buttonswrapper button.swal2-styled.swal2-confirm:focus {
  background-color: #2aa92d !important; }

.bg-info {
  background-color: #8e32e9 !important; }

a.bg-info:hover, a.bg-info:focus,
button.bg-info:hover,
button.bg-info:focus {
  background-color: #7516d2 !important; }

.bg-warning {
  background-color: #ffde73 !important; }

a.bg-warning:hover, a.bg-warning:focus,
button.bg-warning:hover,
button.bg-warning:focus {
  background-color: #ffd240 !important; }

.bg-danger {
  background-color: #ff4d6b !important; }

a.bg-danger:hover, a.bg-danger:focus,
button.bg-danger:hover,
button.bg-danger:focus {
  background-color: #ff1a41 !important; }

.bg-light {
  background-color: #f8f9fa !important; }

a.bg-light:hover, a.bg-light:focus,
button.bg-light:hover,
button.bg-light:focus {
  background-color: #dae0e5 !important; }

.bg-dark {
  background-color: #3e4b5b !important; }

a.bg-dark:hover, a.bg-dark:focus,
button.bg-dark:hover,
button.bg-dark:focus {
  background-color: #29323d !important; }

.bg-white {
  background-color: #ffffff !important; }

.bg-transparent {
  background-color: transparent !important; }

.border, .loader-demo-box {
  border: 1px solid #e8e5e5 !important; }

.border-top {
  border-top: 1px solid #e8e5e5 !important; }

.border-right {
  border-right: 1px solid #e8e5e5 !important; }

.border-bottom {
  border-bottom: 1px solid #e8e5e5 !important; }

.border-left {
  border-left: 1px solid #e8e5e5 !important; }

.border-0 {
  border: 0 !important; }

.border-top-0 {
  border-top: 0 !important; }

.border-right-0 {
  border-right: 0 !important; }

.border-bottom-0 {
  border-bottom: 0 !important; }

.border-left-0 {
  border-left: 0 !important; }

.border-primary {
  border-color: #1bdbe0 !important; }

.border-secondary, .loader-demo-box {
  border-color: #d8d8d8 !important; }

.border-success, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm {
  border-color: <?php echo $color; ?> !important; }

.border-info {
  border-color: #8e32e9 !important; }

.border-warning {
  border-color: #ffde73 !important; }

.border-danger {
  border-color: #ff4d6b !important; }

.border-light {
  border-color: #f8f9fa !important; }

.border-dark {
  border-color: #3e4b5b !important; }

.border-white {
  border-color: #ffffff !important; }

.rounded-sm {
  border-radius: 0.2rem !important; }

.rounded, .loader-demo-box {
  border-radius: 0.25rem !important; }

.rounded-top {
  border-top-left-radius: 0.25rem !important;
  border-top-right-radius: 0.25rem !important; }

.rounded-right {
  border-top-right-radius: 0.25rem !important;
  border-bottom-right-radius: 0.25rem !important; }

.rounded-bottom {
  border-bottom-right-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important; }

.rounded-left {
  border-top-left-radius: 0.25rem !important;
  border-bottom-left-radius: 0.25rem !important; }

.rounded-lg {
  border-radius: 0.3rem !important; }

.rounded-circle {
  border-radius: 50% !important; }

.rounded-pill {
  border-radius: 50rem !important; }

.rounded-0 {
  border-radius: 0 !important; }

.clearfix::after {
  display: block;
  clear: both;
  content: ""; }

.d-none {
  display: none !important; }

.d-inline {
  display: inline !important; }

.d-inline-block {
  display: inline-block !important; }

.d-block {
  display: block !important; }

.d-table {
  display: table !important; }

.d-table-row {
  display: table-row !important; }

.d-table-cell {
  display: table-cell !important; }

.d-flex, .page-header, .loader-demo-box, .list-wrapper ul li, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user, .email-wrapper .mail-list-container .mail-list .details, .email-wrapper .message-body .attachments-sections ul li .thumb, .email-wrapper .message-body .attachments-sections ul li .details .buttons, .lightGallery .image-tile .demo-gallery-poster, .swal2-modal, .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav, .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile, .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item, .horizontal-menu .bottom-navbar .page-navigation > .nav-item > .nav-link {
  display: -webkit-box !important;
  display: -ms-flexbox !important;
  display: flex !important; }

.d-inline-flex, .email-wrapper .message-body .attachments-sections ul li {
  display: -webkit-inline-box !important;
  display: -ms-inline-flexbox !important;
  display: inline-flex !important; }

@media (min-width: 576px) {
  .d-sm-none {
    display: none !important; }
  .d-sm-inline {
    display: inline !important; }
  .d-sm-inline-block {
    display: inline-block !important; }
  .d-sm-block {
    display: block !important; }
  .d-sm-table {
    display: table !important; }
  .d-sm-table-row {
    display: table-row !important; }
  .d-sm-table-cell {
    display: table-cell !important; }
  .d-sm-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-sm-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media (min-width: 768px) {
  .d-md-none {
    display: none !important; }
  .d-md-inline {
    display: inline !important; }
  .d-md-inline-block {
    display: inline-block !important; }
  .d-md-block {
    display: block !important; }
  .d-md-table {
    display: table !important; }
  .d-md-table-row {
    display: table-row !important; }
  .d-md-table-cell {
    display: table-cell !important; }
  .d-md-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-md-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media (min-width: 992px) {
  .d-lg-none {
    display: none !important; }
  .d-lg-inline {
    display: inline !important; }
  .d-lg-inline-block {
    display: inline-block !important; }
  .d-lg-block {
    display: block !important; }
  .d-lg-table {
    display: table !important; }
  .d-lg-table-row {
    display: table-row !important; }
  .d-lg-table-cell {
    display: table-cell !important; }
  .d-lg-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-lg-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media (min-width: 1200px) {
  .d-xl-none {
    display: none !important; }
  .d-xl-inline {
    display: inline !important; }
  .d-xl-inline-block {
    display: inline-block !important; }
  .d-xl-block {
    display: block !important; }
  .d-xl-table {
    display: table !important; }
  .d-xl-table-row {
    display: table-row !important; }
  .d-xl-table-cell {
    display: table-cell !important; }
  .d-xl-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-xl-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

@media print {
  .d-print-none {
    display: none !important; }
  .d-print-inline {
    display: inline !important; }
  .d-print-inline-block {
    display: inline-block !important; }
  .d-print-block {
    display: block !important; }
  .d-print-table {
    display: table !important; }
  .d-print-table-row {
    display: table-row !important; }
  .d-print-table-cell {
    display: table-cell !important; }
  .d-print-flex {
    display: -webkit-box !important;
    display: -ms-flexbox !important;
    display: flex !important; }
  .d-print-inline-flex {
    display: -webkit-inline-box !important;
    display: -ms-inline-flexbox !important;
    display: inline-flex !important; } }

.embed-responsive {
  position: relative;
  display: block;
  width: 100%;
  padding: 0;
  overflow: hidden; }
  .embed-responsive::before {
    display: block;
    content: ""; }
  .embed-responsive .embed-responsive-item,
  .embed-responsive iframe,
  .embed-responsive embed,
  .embed-responsive object,
  .embed-responsive video {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 0; }

.embed-responsive-21by9::before {
  padding-top: 42.85714%; }

.embed-responsive-16by9::before {
  padding-top: 56.25%; }

.embed-responsive-4by3::before {
  padding-top: 75%; }

.embed-responsive-1by1::before {
  padding-top: 100%; }

.embed-responsive-21by9::before {
  padding-top: 42.85714%; }

.embed-responsive-16by9::before {
  padding-top: 56.25%; }

.embed-responsive-4by3::before {
  padding-top: 75%; }

.embed-responsive-1by1::before {
  padding-top: 100%; }

.flex-row, .email-wrapper .message-body .attachments-sections ul li, .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: row !important;
  flex-direction: row !important; }

.flex-column, .nav-tabs.nav-tabs-vertical, .nav-tabs.nav-tabs-vertical-custom, .nav-pills.nav-pills-vertical, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: normal !important;
  -ms-flex-direction: column !important;
  flex-direction: column !important; }

.flex-row-reverse {
  -webkit-box-orient: horizontal !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: row-reverse !important;
  flex-direction: row-reverse !important; }

.flex-column-reverse {
  -webkit-box-orient: vertical !important;
  -webkit-box-direction: reverse !important;
  -ms-flex-direction: column-reverse !important;
  flex-direction: column-reverse !important; }

.flex-wrap {
  -ms-flex-wrap: wrap !important;
  flex-wrap: wrap !important; }

.flex-nowrap {
  -ms-flex-wrap: nowrap !important;
  flex-wrap: nowrap !important; }

.flex-wrap-reverse {
  -ms-flex-wrap: wrap-reverse !important;
  flex-wrap: wrap-reverse !important; }

.flex-fill {
  -webkit-box-flex: 1 !important;
  -ms-flex: 1 1 auto !important;
  flex: 1 1 auto !important; }

.flex-grow-0 {
  -webkit-box-flex: 0 !important;
  -ms-flex-positive: 0 !important;
  flex-grow: 0 !important; }

.flex-grow-1 {
  -webkit-box-flex: 1 !important;
  -ms-flex-positive: 1 !important;
  flex-grow: 1 !important; }

.flex-shrink-0 {
  -ms-flex-negative: 0 !important;
  flex-shrink: 0 !important; }

.flex-shrink-1 {
  -ms-flex-negative: 1 !important;
  flex-shrink: 1 !important; }

.justify-content-start, .list-wrapper ul li {
  -webkit-box-pack: start !important;
  -ms-flex-pack: start !important;
  justify-content: flex-start !important; }

.justify-content-end, .email-wrapper .mail-list-container .mail-list .details {
  -webkit-box-pack: end !important;
  -ms-flex-pack: end !important;
  justify-content: flex-end !important; }

.justify-content-center, .email-wrapper .message-body .attachments-sections ul li .thumb {
  -webkit-box-pack: center !important;
  -ms-flex-pack: center !important;
  justify-content: center !important; }

.justify-content-between, .page-header {
  -webkit-box-pack: justify !important;
  -ms-flex-pack: justify !important;
  justify-content: space-between !important; }

.justify-content-around {
  -ms-flex-pack: distribute !important;
  justify-content: space-around !important; }

.align-items-start {
  -webkit-box-align: start !important;
  -ms-flex-align: start !important;
  align-items: flex-start !important; }

.align-items-end {
  -webkit-box-align: end !important;
  -ms-flex-align: end !important;
  align-items: flex-end !important; }

.align-items-center, .page-header, .loader-demo-box, .list-wrapper ul li, .email-wrapper .message-body .attachments-sections ul li .thumb, .email-wrapper .message-body .attachments-sections ul li .details .buttons, .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav, .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile, .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item, .horizontal-menu .bottom-navbar .page-navigation > .nav-item > .nav-link {
  -webkit-box-align: center !important;
  -ms-flex-align: center !important;
  align-items: center !important; }

.align-items-baseline {
  -webkit-box-align: baseline !important;
  -ms-flex-align: baseline !important;
  align-items: baseline !important; }

.align-items-stretch, .email-wrapper .message-body .attachments-sections ul li, .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
  -webkit-box-align: stretch !important;
  -ms-flex-align: stretch !important;
  align-items: stretch !important; }

.align-content-start {
  -ms-flex-line-pack: start !important;
  align-content: flex-start !important; }

.align-content-end {
  -ms-flex-line-pack: end !important;
  align-content: flex-end !important; }

.align-content-center {
  -ms-flex-line-pack: center !important;
  align-content: center !important; }

.align-content-between {
  -ms-flex-line-pack: justify !important;
  align-content: space-between !important; }

.align-content-around {
  -ms-flex-line-pack: distribute !important;
  align-content: space-around !important; }

.align-content-stretch {
  -ms-flex-line-pack: stretch !important;
  align-content: stretch !important; }

.align-self-auto {
  -ms-flex-item-align: auto !important;
  align-self: auto !important; }

.align-self-start {
  -ms-flex-item-align: start !important;
  align-self: flex-start !important; }

.align-self-end {
  -ms-flex-item-align: end !important;
  align-self: flex-end !important; }

.align-self-center {
  -ms-flex-item-align: center !important;
  align-self: center !important; }

.align-self-baseline {
  -ms-flex-item-align: baseline !important;
  align-self: baseline !important; }

.align-self-stretch, .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
  -ms-flex-item-align: stretch !important;
  align-self: stretch !important; }

@media (min-width: 576px) {
  .flex-sm-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-sm-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-sm-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-sm-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-sm-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-sm-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-sm-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .flex-sm-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-sm-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-sm-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-sm-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-sm-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .justify-content-sm-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-sm-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-sm-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-sm-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-sm-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .align-items-sm-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-sm-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-sm-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-sm-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-sm-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-sm-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-sm-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-sm-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-sm-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-sm-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-sm-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-sm-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important; }
  .align-self-sm-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-sm-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-sm-center {
    -ms-flex-item-align: center !important;
    align-self: center !important; }
  .align-self-sm-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-sm-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important; } }

@media (min-width: 768px) {
  .flex-md-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-md-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-md-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-md-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-md-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-md-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-md-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .flex-md-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-md-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-md-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-md-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-md-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .justify-content-md-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-md-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-md-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-md-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-md-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .align-items-md-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-md-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-md-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-md-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-md-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-md-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-md-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-md-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-md-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-md-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-md-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-md-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important; }
  .align-self-md-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-md-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-md-center {
    -ms-flex-item-align: center !important;
    align-self: center !important; }
  .align-self-md-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-md-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important; } }

@media (min-width: 992px) {
  .flex-lg-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-lg-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-lg-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-lg-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-lg-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-lg-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-lg-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .flex-lg-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-lg-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-lg-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-lg-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-lg-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .justify-content-lg-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-lg-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-lg-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-lg-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-lg-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .align-items-lg-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-lg-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-lg-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-lg-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-lg-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-lg-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-lg-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-lg-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-lg-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-lg-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-lg-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-lg-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important; }
  .align-self-lg-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-lg-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-lg-center {
    -ms-flex-item-align: center !important;
    align-self: center !important; }
  .align-self-lg-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-lg-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important; } }

@media (min-width: 1200px) {
  .flex-xl-row {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: row !important;
    flex-direction: row !important; }
  .flex-xl-column {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: normal !important;
    -ms-flex-direction: column !important;
    flex-direction: column !important; }
  .flex-xl-row-reverse {
    -webkit-box-orient: horizontal !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: row-reverse !important;
    flex-direction: row-reverse !important; }
  .flex-xl-column-reverse {
    -webkit-box-orient: vertical !important;
    -webkit-box-direction: reverse !important;
    -ms-flex-direction: column-reverse !important;
    flex-direction: column-reverse !important; }
  .flex-xl-wrap {
    -ms-flex-wrap: wrap !important;
    flex-wrap: wrap !important; }
  .flex-xl-nowrap {
    -ms-flex-wrap: nowrap !important;
    flex-wrap: nowrap !important; }
  .flex-xl-wrap-reverse {
    -ms-flex-wrap: wrap-reverse !important;
    flex-wrap: wrap-reverse !important; }
  .flex-xl-fill {
    -webkit-box-flex: 1 !important;
    -ms-flex: 1 1 auto !important;
    flex: 1 1 auto !important; }
  .flex-xl-grow-0 {
    -webkit-box-flex: 0 !important;
    -ms-flex-positive: 0 !important;
    flex-grow: 0 !important; }
  .flex-xl-grow-1 {
    -webkit-box-flex: 1 !important;
    -ms-flex-positive: 1 !important;
    flex-grow: 1 !important; }
  .flex-xl-shrink-0 {
    -ms-flex-negative: 0 !important;
    flex-shrink: 0 !important; }
  .flex-xl-shrink-1 {
    -ms-flex-negative: 1 !important;
    flex-shrink: 1 !important; }
  .justify-content-xl-start {
    -webkit-box-pack: start !important;
    -ms-flex-pack: start !important;
    justify-content: flex-start !important; }
  .justify-content-xl-end {
    -webkit-box-pack: end !important;
    -ms-flex-pack: end !important;
    justify-content: flex-end !important; }
  .justify-content-xl-center {
    -webkit-box-pack: center !important;
    -ms-flex-pack: center !important;
    justify-content: center !important; }
  .justify-content-xl-between {
    -webkit-box-pack: justify !important;
    -ms-flex-pack: justify !important;
    justify-content: space-between !important; }
  .justify-content-xl-around {
    -ms-flex-pack: distribute !important;
    justify-content: space-around !important; }
  .align-items-xl-start {
    -webkit-box-align: start !important;
    -ms-flex-align: start !important;
    align-items: flex-start !important; }
  .align-items-xl-end {
    -webkit-box-align: end !important;
    -ms-flex-align: end !important;
    align-items: flex-end !important; }
  .align-items-xl-center {
    -webkit-box-align: center !important;
    -ms-flex-align: center !important;
    align-items: center !important; }
  .align-items-xl-baseline {
    -webkit-box-align: baseline !important;
    -ms-flex-align: baseline !important;
    align-items: baseline !important; }
  .align-items-xl-stretch {
    -webkit-box-align: stretch !important;
    -ms-flex-align: stretch !important;
    align-items: stretch !important; }
  .align-content-xl-start {
    -ms-flex-line-pack: start !important;
    align-content: flex-start !important; }
  .align-content-xl-end {
    -ms-flex-line-pack: end !important;
    align-content: flex-end !important; }
  .align-content-xl-center {
    -ms-flex-line-pack: center !important;
    align-content: center !important; }
  .align-content-xl-between {
    -ms-flex-line-pack: justify !important;
    align-content: space-between !important; }
  .align-content-xl-around {
    -ms-flex-line-pack: distribute !important;
    align-content: space-around !important; }
  .align-content-xl-stretch {
    -ms-flex-line-pack: stretch !important;
    align-content: stretch !important; }
  .align-self-xl-auto {
    -ms-flex-item-align: auto !important;
    align-self: auto !important; }
  .align-self-xl-start {
    -ms-flex-item-align: start !important;
    align-self: flex-start !important; }
  .align-self-xl-end {
    -ms-flex-item-align: end !important;
    align-self: flex-end !important; }
  .align-self-xl-center {
    -ms-flex-item-align: center !important;
    align-self: center !important; }
  .align-self-xl-baseline {
    -ms-flex-item-align: baseline !important;
    align-self: baseline !important; }
  .align-self-xl-stretch {
    -ms-flex-item-align: stretch !important;
    align-self: stretch !important; } }

.float-left {
  float: left !important; }

.float-right {
  float: right !important; }

.float-none {
  float: none !important; }

@media (min-width: 576px) {
  .float-sm-left {
    float: left !important; }
  .float-sm-right {
    float: right !important; }
  .float-sm-none {
    float: none !important; } }

@media (min-width: 768px) {
  .float-md-left {
    float: left !important; }
  .float-md-right {
    float: right !important; }
  .float-md-none {
    float: none !important; } }

@media (min-width: 992px) {
  .float-lg-left {
    float: left !important; }
  .float-lg-right {
    float: right !important; }
  .float-lg-none {
    float: none !important; } }

@media (min-width: 1200px) {
  .float-xl-left {
    float: left !important; }
  .float-xl-right {
    float: right !important; }
  .float-xl-none {
    float: none !important; } }

.overflow-auto {
  overflow: auto !important; }

.overflow-hidden {
  overflow: hidden !important; }

.position-static {
  position: static !important; }

.position-relative {
  position: relative !important; }

.position-absolute {
  position: absolute !important; }

.position-fixed {
  position: fixed !important; }

.position-sticky {
  position: -webkit-sticky !important;
  position: sticky !important; }

.fixed-top, .horizontal-menu.fixed-on-scroll .bottom-navbar {
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1030; }

.fixed-bottom {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1030; }

@supports ((position: -webkit-sticky) or (position: sticky)) {
  .sticky-top {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1020; } }

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
  border: 0; }

.sr-only-focusable:active, .sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  overflow: visible;
  clip: auto;
  white-space: normal; }

.shadow-sm {
  -webkit-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
  box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important; }

.shadow {
  -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important; }

.shadow-lg {
  -webkit-box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
  box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important; }

.shadow-none {
  -webkit-box-shadow: none !important;
  box-shadow: none !important; }

.w-25 {
  width: 25% !important; }

.w-50 {
  width: 50% !important; }

.w-75 {
  width: 75% !important; }

.w-100 {
  width: 100% !important; }

.w-auto {
  width: auto !important; }

.h-25 {
  height: 25% !important; }

.h-50 {
  height: 50% !important; }

.h-75 {
  height: 75% !important; }

.h-100 {
  height: 100% !important; }

.h-auto {
  height: auto !important; }

.mw-100 {
  max-width: 100% !important; }

.mh-100 {
  max-height: 100% !important; }

.min-vw-100 {
  min-width: 100vw !important; }

.min-vh-100 {
  min-height: 100vh !important; }

.vw-100 {
  width: 100vw !important; }

.vh-100 {
  height: 100vh !important; }

.stretched-link::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  pointer-events: auto;
  content: "";
  background-color: rgba(0, 0, 0, 0); }

.m-0 {
  margin: 0 !important; }

.mt-0, .demo-modal .modal-dialog,
.my-0 {
  margin-top: 0 !important; }

.mr-0, .rtl .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item i,
.mx-0 {
  margin-right: 0 !important; }

.mb-0,
.my-0 {
  margin-bottom: 0 !important; }

.ml-0, .rtl .preview-list .preview-item .preview-thumbnail .preview-icon i, .rtl .list-wrapper .remove,
.mx-0 {
  margin-left: 0 !important; }

.m-1 {
  margin: 0.25rem !important; }

.mt-1, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel,
.my-1 {
  margin-top: 0.25rem !important; }

.mr-1,
.mx-1 {
  margin-right: 0.25rem !important; }

.mb-1,
.my-1 {
  margin-bottom: 0.25rem !important; }

.ml-1,
.mx-1 {
  margin-left: 0.25rem !important; }

.m-2 {
  margin: 0.5rem !important; }

.mt-2, .template-demo > .btn-group, .fc .template-demo > .fc-button-group,
.template-demo > .btn-group-vertical, .template-demo .circle-progress,
.my-2 {
  margin-top: 0.5rem !important; }

.mr-2, .template-demo > .btn-group, .fc .template-demo > .fc-button-group,
.template-demo > .btn-group-vertical, .template-demo > .dropdown,
.mx-2 {
  margin-right: 0.5rem !important; }

.mb-2,
.my-2 {
  margin-bottom: 0.5rem !important; }

.ml-2, .btn-toolbar .btn-group + .btn-group, .btn-toolbar .fc .fc-button-group + .btn-group, .fc .btn-toolbar .fc-button-group + .btn-group, .btn-toolbar .fc .btn-group + .fc-button-group, .fc .btn-toolbar .btn-group + .fc-button-group, .btn-toolbar .fc .fc-button-group + .fc-button-group, .fc .btn-toolbar .fc-button-group + .fc-button-group,
.mx-2 {
  margin-left: 0.5rem !important; }

.m-3 {
  margin: 1rem !important; }

.mt-3, .template-demo > .btn, .fc .template-demo > button, .ajax-upload-dragdrop .template-demo > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .template-demo > .swal2-styled, .wizard > .actions .template-demo > a, .template-demo > .btn-toolbar,
.my-3 {
  margin-top: 1rem !important; }

.mr-3, .template-demo > .btn, .fc .template-demo > button, .ajax-upload-dragdrop .template-demo > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .template-demo > .swal2-styled, .wizard > .actions .template-demo > a, .template-demo > .btn-toolbar,
.mx-3 {
  margin-right: 1rem !important; }

.mb-3, .template-demo .circle-progress-block, .lock-screen .card .card-body img, .lock-screen .card .card-body p,
.my-3 {
  margin-bottom: 1rem !important; }

.ml-3,
.mx-3 {
  margin-left: 1rem !important; }

.m-4 {
  margin: 1.5rem !important; }

.mt-4,
.my-4 {
  margin-top: 1.5rem !important; }

.mr-4,
.mx-4 {
  margin-right: 1.5rem !important; }

.mb-4,
.my-4 {
  margin-bottom: 1.5rem !important; }

.ml-4,
.mx-4 {
  margin-left: 1.5rem !important; }

.m-5 {
  margin: 3rem !important; }

.mt-5,
.my-5 {
  margin-top: 3rem !important; }

.mr-5,
.mx-5 {
  margin-right: 3rem !important; }

.mb-5,
.my-5 {
  margin-bottom: 3rem !important; }

.ml-5,
.mx-5 {
  margin-left: 3rem !important; }

.p-0, .auth.auth-img-bg {
  padding: 0 !important; }

.pt-0,
.py-0 {
  padding-top: 0 !important; }

.pr-0,
.px-0 {
  padding-right: 0 !important; }

.pb-0,
.py-0 {
  padding-bottom: 0 !important; }

.pl-0,
.px-0 {
  padding-left: 0 !important; }

.p-1 {
  padding: 0.25rem !important; }

.pt-1,
.py-1 {
  padding-top: 0.25rem !important; }

.pr-1,
.px-1 {
  padding-right: 0.25rem !important; }

.pb-1,
.py-1 {
  padding-bottom: 0.25rem !important; }

.pl-1,
.px-1 {
  padding-left: 0.25rem !important; }

.p-2 {
  padding: 0.5rem !important; }

.pt-2,
.py-2 {
  padding-top: 0.5rem !important; }

.pr-2,
.px-2,
.template-demo .circle-progress-block {
  padding-right: 0.5rem !important; }

.pb-2,
.py-2 {
  padding-bottom: 0.5rem !important; }

.pl-2,
.px-2,
.template-demo .circle-progress-block {
  padding-left: 0.5rem !important; }

.p-3 {
  padding: 1rem !important; }

.pt-3,
.py-3 {
  padding-top: 1rem !important; }

.pr-3,
.px-3 {
  padding-right: 1rem !important; }

.pb-3,
.py-3 {
  padding-bottom: 1rem !important; }

.pl-3,
.px-3 {
  padding-left: 1rem !important; }

.p-4 {
  padding: 1.5rem !important; }

.pt-4,
.py-4 {
  padding-top: 1.5rem !important; }

.pr-4,
.px-4 {
  padding-right: 1.5rem !important; }

.pb-4,
.py-4 {
  padding-bottom: 1.5rem !important; }

.pl-4,
.px-4 {
  padding-left: 1.5rem !important; }

.p-5 {
  padding: 3rem !important; }

.pt-5,
.py-5 {
  padding-top: 3rem !important; }

.pr-5,
.px-5 {
  padding-right: 3rem !important; }

.pb-5,
.py-5 {
  padding-bottom: 3rem !important; }

.pl-5,
.px-5 {
  padding-left: 3rem !important; }

.m-n1 {
  margin: -0.25rem !important; }

.mt-n1,
.my-n1 {
  margin-top: -0.25rem !important; }

.mr-n1,
.mx-n1 {
  margin-right: -0.25rem !important; }

.mb-n1,
.my-n1 {
  margin-bottom: -0.25rem !important; }

.ml-n1,
.mx-n1 {
  margin-left: -0.25rem !important; }

.m-n2 {
  margin: -0.5rem !important; }

.mt-n2,
.my-n2 {
  margin-top: -0.5rem !important; }

.mr-n2,
.mx-n2 {
  margin-right: -0.5rem !important; }

.mb-n2,
.my-n2 {
  margin-bottom: -0.5rem !important; }

.ml-n2,
.mx-n2 {
  margin-left: -0.5rem !important; }

.m-n3 {
  margin: -1rem !important; }

.mt-n3,
.my-n3 {
  margin-top: -1rem !important; }

.mr-n3,
.mx-n3 {
  margin-right: -1rem !important; }

.mb-n3,
.my-n3 {
  margin-bottom: -1rem !important; }

.ml-n3,
.mx-n3 {
  margin-left: -1rem !important; }

.m-n4 {
  margin: -1.5rem !important; }

.mt-n4,
.my-n4 {
  margin-top: -1.5rem !important; }

.mr-n4,
.mx-n4 {
  margin-right: -1.5rem !important; }

.mb-n4,
.my-n4 {
  margin-bottom: -1.5rem !important; }

.ml-n4,
.mx-n4 {
  margin-left: -1.5rem !important; }

.m-n5 {
  margin: -3rem !important; }

.mt-n5,
.my-n5 {
  margin-top: -3rem !important; }

.mr-n5,
.mx-n5 {
  margin-right: -3rem !important; }

.mb-n5,
.my-n5 {
  margin-bottom: -3rem !important; }

.ml-n5,
.mx-n5 {
  margin-left: -3rem !important; }

.m-auto {
  margin: auto !important; }

.mt-auto,
.my-auto {
  margin-top: auto !important; }

.mr-auto, .rtl .list-wrapper .remove,
.mx-auto {
  margin-right: auto !important; }

.mb-auto,
.my-auto {
  margin-bottom: auto !important; }

.ml-auto, .list-wrapper .remove,
.mx-auto {
  margin-left: auto !important; }

@media (min-width: 576px) {
  .m-sm-0 {
    margin: 0 !important; }
  .mt-sm-0,
  .my-sm-0 {
    margin-top: 0 !important; }
  .mr-sm-0,
  .mx-sm-0 {
    margin-right: 0 !important; }
  .mb-sm-0,
  .my-sm-0 {
    margin-bottom: 0 !important; }
  .ml-sm-0,
  .mx-sm-0 {
    margin-left: 0 !important; }
  .m-sm-1 {
    margin: 0.25rem !important; }
  .mt-sm-1,
  .my-sm-1 {
    margin-top: 0.25rem !important; }
  .mr-sm-1,
  .mx-sm-1 {
    margin-right: 0.25rem !important; }
  .mb-sm-1,
  .my-sm-1 {
    margin-bottom: 0.25rem !important; }
  .ml-sm-1,
  .mx-sm-1 {
    margin-left: 0.25rem !important; }
  .m-sm-2 {
    margin: 0.5rem !important; }
  .mt-sm-2,
  .my-sm-2 {
    margin-top: 0.5rem !important; }
  .mr-sm-2,
  .mx-sm-2 {
    margin-right: 0.5rem !important; }
  .mb-sm-2,
  .my-sm-2 {
    margin-bottom: 0.5rem !important; }
  .ml-sm-2,
  .mx-sm-2 {
    margin-left: 0.5rem !important; }
  .m-sm-3 {
    margin: 1rem !important; }
  .mt-sm-3,
  .my-sm-3 {
    margin-top: 1rem !important; }
  .mr-sm-3,
  .mx-sm-3 {
    margin-right: 1rem !important; }
  .mb-sm-3,
  .my-sm-3 {
    margin-bottom: 1rem !important; }
  .ml-sm-3,
  .mx-sm-3 {
    margin-left: 1rem !important; }
  .m-sm-4 {
    margin: 1.5rem !important; }
  .mt-sm-4,
  .my-sm-4 {
    margin-top: 1.5rem !important; }
  .mr-sm-4,
  .mx-sm-4 {
    margin-right: 1.5rem !important; }
  .mb-sm-4,
  .my-sm-4 {
    margin-bottom: 1.5rem !important; }
  .ml-sm-4,
  .mx-sm-4 {
    margin-left: 1.5rem !important; }
  .m-sm-5 {
    margin: 3rem !important; }
  .mt-sm-5,
  .my-sm-5 {
    margin-top: 3rem !important; }
  .mr-sm-5,
  .mx-sm-5 {
    margin-right: 3rem !important; }
  .mb-sm-5,
  .my-sm-5 {
    margin-bottom: 3rem !important; }
  .ml-sm-5,
  .mx-sm-5 {
    margin-left: 3rem !important; }
  .p-sm-0 {
    padding: 0 !important; }
  .pt-sm-0,
  .py-sm-0 {
    padding-top: 0 !important; }
  .pr-sm-0,
  .px-sm-0 {
    padding-right: 0 !important; }
  .pb-sm-0,
  .py-sm-0 {
    padding-bottom: 0 !important; }
  .pl-sm-0,
  .px-sm-0 {
    padding-left: 0 !important; }
  .p-sm-1 {
    padding: 0.25rem !important; }
  .pt-sm-1,
  .py-sm-1 {
    padding-top: 0.25rem !important; }
  .pr-sm-1,
  .px-sm-1 {
    padding-right: 0.25rem !important; }
  .pb-sm-1,
  .py-sm-1 {
    padding-bottom: 0.25rem !important; }
  .pl-sm-1,
  .px-sm-1 {
    padding-left: 0.25rem !important; }
  .p-sm-2 {
    padding: 0.5rem !important; }
  .pt-sm-2,
  .py-sm-2 {
    padding-top: 0.5rem !important; }
  .pr-sm-2,
  .px-sm-2 {
    padding-right: 0.5rem !important; }
  .pb-sm-2,
  .py-sm-2 {
    padding-bottom: 0.5rem !important; }
  .pl-sm-2,
  .px-sm-2 {
    padding-left: 0.5rem !important; }
  .p-sm-3 {
    padding: 1rem !important; }
  .pt-sm-3,
  .py-sm-3 {
    padding-top: 1rem !important; }
  .pr-sm-3,
  .px-sm-3 {
    padding-right: 1rem !important; }
  .pb-sm-3,
  .py-sm-3 {
    padding-bottom: 1rem !important; }
  .pl-sm-3,
  .px-sm-3 {
    padding-left: 1rem !important; }
  .p-sm-4 {
    padding: 1.5rem !important; }
  .pt-sm-4,
  .py-sm-4 {
    padding-top: 1.5rem !important; }
  .pr-sm-4,
  .px-sm-4 {
    padding-right: 1.5rem !important; }
  .pb-sm-4,
  .py-sm-4 {
    padding-bottom: 1.5rem !important; }
  .pl-sm-4,
  .px-sm-4 {
    padding-left: 1.5rem !important; }
  .p-sm-5 {
    padding: 3rem !important; }
  .pt-sm-5,
  .py-sm-5 {
    padding-top: 3rem !important; }
  .pr-sm-5,
  .px-sm-5 {
    padding-right: 3rem !important; }
  .pb-sm-5,
  .py-sm-5 {
    padding-bottom: 3rem !important; }
  .pl-sm-5,
  .px-sm-5 {
    padding-left: 3rem !important; }
  .m-sm-n1 {
    margin: -0.25rem !important; }
  .mt-sm-n1,
  .my-sm-n1 {
    margin-top: -0.25rem !important; }
  .mr-sm-n1,
  .mx-sm-n1 {
    margin-right: -0.25rem !important; }
  .mb-sm-n1,
  .my-sm-n1 {
    margin-bottom: -0.25rem !important; }
  .ml-sm-n1,
  .mx-sm-n1 {
    margin-left: -0.25rem !important; }
  .m-sm-n2 {
    margin: -0.5rem !important; }
  .mt-sm-n2,
  .my-sm-n2 {
    margin-top: -0.5rem !important; }
  .mr-sm-n2,
  .mx-sm-n2 {
    margin-right: -0.5rem !important; }
  .mb-sm-n2,
  .my-sm-n2 {
    margin-bottom: -0.5rem !important; }
  .ml-sm-n2,
  .mx-sm-n2 {
    margin-left: -0.5rem !important; }
  .m-sm-n3 {
    margin: -1rem !important; }
  .mt-sm-n3,
  .my-sm-n3 {
    margin-top: -1rem !important; }
  .mr-sm-n3,
  .mx-sm-n3 {
    margin-right: -1rem !important; }
  .mb-sm-n3,
  .my-sm-n3 {
    margin-bottom: -1rem !important; }
  .ml-sm-n3,
  .mx-sm-n3 {
    margin-left: -1rem !important; }
  .m-sm-n4 {
    margin: -1.5rem !important; }
  .mt-sm-n4,
  .my-sm-n4 {
    margin-top: -1.5rem !important; }
  .mr-sm-n4,
  .mx-sm-n4 {
    margin-right: -1.5rem !important; }
  .mb-sm-n4,
  .my-sm-n4 {
    margin-bottom: -1.5rem !important; }
  .ml-sm-n4,
  .mx-sm-n4 {
    margin-left: -1.5rem !important; }
  .m-sm-n5 {
    margin: -3rem !important; }
  .mt-sm-n5,
  .my-sm-n5 {
    margin-top: -3rem !important; }
  .mr-sm-n5,
  .mx-sm-n5 {
    margin-right: -3rem !important; }
  .mb-sm-n5,
  .my-sm-n5 {
    margin-bottom: -3rem !important; }
  .ml-sm-n5,
  .mx-sm-n5 {
    margin-left: -3rem !important; }
  .m-sm-auto {
    margin: auto !important; }
  .mt-sm-auto,
  .my-sm-auto {
    margin-top: auto !important; }
  .mr-sm-auto,
  .mx-sm-auto {
    margin-right: auto !important; }
  .mb-sm-auto,
  .my-sm-auto {
    margin-bottom: auto !important; }
  .ml-sm-auto,
  .mx-sm-auto {
    margin-left: auto !important; } }

@media (min-width: 768px) {
  .m-md-0 {
    margin: 0 !important; }
  .mt-md-0,
  .my-md-0 {
    margin-top: 0 !important; }
  .mr-md-0,
  .mx-md-0 {
    margin-right: 0 !important; }
  .mb-md-0,
  .my-md-0 {
    margin-bottom: 0 !important; }
  .ml-md-0,
  .mx-md-0 {
    margin-left: 0 !important; }
  .m-md-1 {
    margin: 0.25rem !important; }
  .mt-md-1,
  .my-md-1 {
    margin-top: 0.25rem !important; }
  .mr-md-1,
  .mx-md-1 {
    margin-right: 0.25rem !important; }
  .mb-md-1,
  .my-md-1 {
    margin-bottom: 0.25rem !important; }
  .ml-md-1,
  .mx-md-1 {
    margin-left: 0.25rem !important; }
  .m-md-2 {
    margin: 0.5rem !important; }
  .mt-md-2,
  .my-md-2 {
    margin-top: 0.5rem !important; }
  .mr-md-2,
  .mx-md-2 {
    margin-right: 0.5rem !important; }
  .mb-md-2,
  .my-md-2 {
    margin-bottom: 0.5rem !important; }
  .ml-md-2,
  .mx-md-2 {
    margin-left: 0.5rem !important; }
  .m-md-3 {
    margin: 1rem !important; }
  .mt-md-3,
  .my-md-3 {
    margin-top: 1rem !important; }
  .mr-md-3,
  .mx-md-3 {
    margin-right: 1rem !important; }
  .mb-md-3,
  .my-md-3 {
    margin-bottom: 1rem !important; }
  .ml-md-3,
  .mx-md-3 {
    margin-left: 1rem !important; }
  .m-md-4 {
    margin: 1.5rem !important; }
  .mt-md-4,
  .my-md-4 {
    margin-top: 1.5rem !important; }
  .mr-md-4,
  .mx-md-4 {
    margin-right: 1.5rem !important; }
  .mb-md-4,
  .my-md-4 {
    margin-bottom: 1.5rem !important; }
  .ml-md-4,
  .mx-md-4 {
    margin-left: 1.5rem !important; }
  .m-md-5 {
    margin: 3rem !important; }
  .mt-md-5,
  .my-md-5 {
    margin-top: 3rem !important; }
  .mr-md-5,
  .mx-md-5 {
    margin-right: 3rem !important; }
  .mb-md-5,
  .my-md-5 {
    margin-bottom: 3rem !important; }
  .ml-md-5,
  .mx-md-5 {
    margin-left: 3rem !important; }
  .p-md-0 {
    padding: 0 !important; }
  .pt-md-0,
  .py-md-0 {
    padding-top: 0 !important; }
  .pr-md-0,
  .px-md-0 {
    padding-right: 0 !important; }
  .pb-md-0,
  .py-md-0 {
    padding-bottom: 0 !important; }
  .pl-md-0,
  .px-md-0 {
    padding-left: 0 !important; }
  .p-md-1 {
    padding: 0.25rem !important; }
  .pt-md-1,
  .py-md-1 {
    padding-top: 0.25rem !important; }
  .pr-md-1,
  .px-md-1 {
    padding-right: 0.25rem !important; }
  .pb-md-1,
  .py-md-1 {
    padding-bottom: 0.25rem !important; }
  .pl-md-1,
  .px-md-1 {
    padding-left: 0.25rem !important; }
  .p-md-2 {
    padding: 0.5rem !important; }
  .pt-md-2,
  .py-md-2 {
    padding-top: 0.5rem !important; }
  .pr-md-2,
  .px-md-2 {
    padding-right: 0.5rem !important; }
  .pb-md-2,
  .py-md-2 {
    padding-bottom: 0.5rem !important; }
  .pl-md-2,
  .px-md-2 {
    padding-left: 0.5rem !important; }
  .p-md-3 {
    padding: 1rem !important; }
  .pt-md-3,
  .py-md-3 {
    padding-top: 1rem !important; }
  .pr-md-3,
  .px-md-3 {
    padding-right: 1rem !important; }
  .pb-md-3,
  .py-md-3 {
    padding-bottom: 1rem !important; }
  .pl-md-3,
  .px-md-3 {
    padding-left: 1rem !important; }
  .p-md-4 {
    padding: 1.5rem !important; }
  .pt-md-4,
  .py-md-4 {
    padding-top: 1.5rem !important; }
  .pr-md-4,
  .px-md-4 {
    padding-right: 1.5rem !important; }
  .pb-md-4,
  .py-md-4 {
    padding-bottom: 1.5rem !important; }
  .pl-md-4,
  .px-md-4 {
    padding-left: 1.5rem !important; }
  .p-md-5 {
    padding: 3rem !important; }
  .pt-md-5,
  .py-md-5 {
    padding-top: 3rem !important; }
  .pr-md-5,
  .px-md-5 {
    padding-right: 3rem !important; }
  .pb-md-5,
  .py-md-5 {
    padding-bottom: 3rem !important; }
  .pl-md-5,
  .px-md-5 {
    padding-left: 3rem !important; }
  .m-md-n1 {
    margin: -0.25rem !important; }
  .mt-md-n1,
  .my-md-n1 {
    margin-top: -0.25rem !important; }
  .mr-md-n1,
  .mx-md-n1 {
    margin-right: -0.25rem !important; }
  .mb-md-n1,
  .my-md-n1 {
    margin-bottom: -0.25rem !important; }
  .ml-md-n1,
  .mx-md-n1 {
    margin-left: -0.25rem !important; }
  .m-md-n2 {
    margin: -0.5rem !important; }
  .mt-md-n2,
  .my-md-n2 {
    margin-top: -0.5rem !important; }
  .mr-md-n2,
  .mx-md-n2 {
    margin-right: -0.5rem !important; }
  .mb-md-n2,
  .my-md-n2 {
    margin-bottom: -0.5rem !important; }
  .ml-md-n2,
  .mx-md-n2 {
    margin-left: -0.5rem !important; }
  .m-md-n3 {
    margin: -1rem !important; }
  .mt-md-n3,
  .my-md-n3 {
    margin-top: -1rem !important; }
  .mr-md-n3,
  .mx-md-n3 {
    margin-right: -1rem !important; }
  .mb-md-n3,
  .my-md-n3 {
    margin-bottom: -1rem !important; }
  .ml-md-n3,
  .mx-md-n3 {
    margin-left: -1rem !important; }
  .m-md-n4 {
    margin: -1.5rem !important; }
  .mt-md-n4,
  .my-md-n4 {
    margin-top: -1.5rem !important; }
  .mr-md-n4,
  .mx-md-n4 {
    margin-right: -1.5rem !important; }
  .mb-md-n4,
  .my-md-n4 {
    margin-bottom: -1.5rem !important; }
  .ml-md-n4,
  .mx-md-n4 {
    margin-left: -1.5rem !important; }
  .m-md-n5 {
    margin: -3rem !important; }
  .mt-md-n5,
  .my-md-n5 {
    margin-top: -3rem !important; }
  .mr-md-n5,
  .mx-md-n5 {
    margin-right: -3rem !important; }
  .mb-md-n5,
  .my-md-n5 {
    margin-bottom: -3rem !important; }
  .ml-md-n5,
  .mx-md-n5 {
    margin-left: -3rem !important; }
  .m-md-auto {
    margin: auto !important; }
  .mt-md-auto,
  .my-md-auto {
    margin-top: auto !important; }
  .mr-md-auto,
  .mx-md-auto {
    margin-right: auto !important; }
  .mb-md-auto,
  .my-md-auto {
    margin-bottom: auto !important; }
  .ml-md-auto,
  .mx-md-auto {
    margin-left: auto !important; } }

@media (min-width: 992px) {
  .m-lg-0 {
    margin: 0 !important; }
  .mt-lg-0,
  .my-lg-0 {
    margin-top: 0 !important; }
  .mr-lg-0,
  .mx-lg-0 {
    margin-right: 0 !important; }
  .mb-lg-0,
  .my-lg-0 {
    margin-bottom: 0 !important; }
  .ml-lg-0,
  .mx-lg-0 {
    margin-left: 0 !important; }
  .m-lg-1 {
    margin: 0.25rem !important; }
  .mt-lg-1,
  .my-lg-1 {
    margin-top: 0.25rem !important; }
  .mr-lg-1,
  .mx-lg-1 {
    margin-right: 0.25rem !important; }
  .mb-lg-1,
  .my-lg-1 {
    margin-bottom: 0.25rem !important; }
  .ml-lg-1,
  .mx-lg-1 {
    margin-left: 0.25rem !important; }
  .m-lg-2 {
    margin: 0.5rem !important; }
  .mt-lg-2,
  .my-lg-2 {
    margin-top: 0.5rem !important; }
  .mr-lg-2,
  .mx-lg-2 {
    margin-right: 0.5rem !important; }
  .mb-lg-2,
  .my-lg-2 {
    margin-bottom: 0.5rem !important; }
  .ml-lg-2,
  .mx-lg-2 {
    margin-left: 0.5rem !important; }
  .m-lg-3 {
    margin: 1rem !important; }
  .mt-lg-3,
  .my-lg-3 {
    margin-top: 1rem !important; }
  .mr-lg-3,
  .mx-lg-3 {
    margin-right: 1rem !important; }
  .mb-lg-3,
  .my-lg-3 {
    margin-bottom: 1rem !important; }
  .ml-lg-3,
  .mx-lg-3 {
    margin-left: 1rem !important; }
  .m-lg-4 {
    margin: 1.5rem !important; }
  .mt-lg-4,
  .my-lg-4 {
    margin-top: 1.5rem !important; }
  .mr-lg-4,
  .mx-lg-4 {
    margin-right: 1.5rem !important; }
  .mb-lg-4,
  .my-lg-4 {
    margin-bottom: 1.5rem !important; }
  .ml-lg-4,
  .mx-lg-4 {
    margin-left: 1.5rem !important; }
  .m-lg-5 {
    margin: 3rem !important; }
  .mt-lg-5,
  .my-lg-5 {
    margin-top: 3rem !important; }
  .mr-lg-5,
  .mx-lg-5 {
    margin-right: 3rem !important; }
  .mb-lg-5,
  .my-lg-5 {
    margin-bottom: 3rem !important; }
  .ml-lg-5,
  .mx-lg-5 {
    margin-left: 3rem !important; }
  .p-lg-0 {
    padding: 0 !important; }
  .pt-lg-0,
  .py-lg-0 {
    padding-top: 0 !important; }
  .pr-lg-0,
  .px-lg-0 {
    padding-right: 0 !important; }
  .pb-lg-0,
  .py-lg-0 {
    padding-bottom: 0 !important; }
  .pl-lg-0,
  .px-lg-0 {
    padding-left: 0 !important; }
  .p-lg-1 {
    padding: 0.25rem !important; }
  .pt-lg-1,
  .py-lg-1 {
    padding-top: 0.25rem !important; }
  .pr-lg-1,
  .px-lg-1 {
    padding-right: 0.25rem !important; }
  .pb-lg-1,
  .py-lg-1 {
    padding-bottom: 0.25rem !important; }
  .pl-lg-1,
  .px-lg-1 {
    padding-left: 0.25rem !important; }
  .p-lg-2 {
    padding: 0.5rem !important; }
  .pt-lg-2,
  .py-lg-2 {
    padding-top: 0.5rem !important; }
  .pr-lg-2,
  .px-lg-2 {
    padding-right: 0.5rem !important; }
  .pb-lg-2,
  .py-lg-2 {
    padding-bottom: 0.5rem !important; }
  .pl-lg-2,
  .px-lg-2 {
    padding-left: 0.5rem !important; }
  .p-lg-3 {
    padding: 1rem !important; }
  .pt-lg-3,
  .py-lg-3 {
    padding-top: 1rem !important; }
  .pr-lg-3,
  .px-lg-3 {
    padding-right: 1rem !important; }
  .pb-lg-3,
  .py-lg-3 {
    padding-bottom: 1rem !important; }
  .pl-lg-3,
  .px-lg-3 {
    padding-left: 1rem !important; }
  .p-lg-4 {
    padding: 1.5rem !important; }
  .pt-lg-4,
  .py-lg-4 {
    padding-top: 1.5rem !important; }
  .pr-lg-4,
  .px-lg-4 {
    padding-right: 1.5rem !important; }
  .pb-lg-4,
  .py-lg-4 {
    padding-bottom: 1.5rem !important; }
  .pl-lg-4,
  .px-lg-4 {
    padding-left: 1.5rem !important; }
  .p-lg-5 {
    padding: 3rem !important; }
  .pt-lg-5,
  .py-lg-5 {
    padding-top: 3rem !important; }
  .pr-lg-5,
  .px-lg-5 {
    padding-right: 3rem !important; }
  .pb-lg-5,
  .py-lg-5 {
    padding-bottom: 3rem !important; }
  .pl-lg-5,
  .px-lg-5 {
    padding-left: 3rem !important; }
  .m-lg-n1 {
    margin: -0.25rem !important; }
  .mt-lg-n1,
  .my-lg-n1 {
    margin-top: -0.25rem !important; }
  .mr-lg-n1,
  .mx-lg-n1 {
    margin-right: -0.25rem !important; }
  .mb-lg-n1,
  .my-lg-n1 {
    margin-bottom: -0.25rem !important; }
  .ml-lg-n1,
  .mx-lg-n1 {
    margin-left: -0.25rem !important; }
  .m-lg-n2 {
    margin: -0.5rem !important; }
  .mt-lg-n2,
  .my-lg-n2 {
    margin-top: -0.5rem !important; }
  .mr-lg-n2,
  .mx-lg-n2 {
    margin-right: -0.5rem !important; }
  .mb-lg-n2,
  .my-lg-n2 {
    margin-bottom: -0.5rem !important; }
  .ml-lg-n2,
  .mx-lg-n2 {
    margin-left: -0.5rem !important; }
  .m-lg-n3 {
    margin: -1rem !important; }
  .mt-lg-n3,
  .my-lg-n3 {
    margin-top: -1rem !important; }
  .mr-lg-n3,
  .mx-lg-n3 {
    margin-right: -1rem !important; }
  .mb-lg-n3,
  .my-lg-n3 {
    margin-bottom: -1rem !important; }
  .ml-lg-n3,
  .mx-lg-n3 {
    margin-left: -1rem !important; }
  .m-lg-n4 {
    margin: -1.5rem !important; }
  .mt-lg-n4,
  .my-lg-n4 {
    margin-top: -1.5rem !important; }
  .mr-lg-n4,
  .mx-lg-n4 {
    margin-right: -1.5rem !important; }
  .mb-lg-n4,
  .my-lg-n4 {
    margin-bottom: -1.5rem !important; }
  .ml-lg-n4,
  .mx-lg-n4 {
    margin-left: -1.5rem !important; }
  .m-lg-n5 {
    margin: -3rem !important; }
  .mt-lg-n5,
  .my-lg-n5 {
    margin-top: -3rem !important; }
  .mr-lg-n5,
  .mx-lg-n5 {
    margin-right: -3rem !important; }
  .mb-lg-n5,
  .my-lg-n5 {
    margin-bottom: -3rem !important; }
  .ml-lg-n5,
  .mx-lg-n5 {
    margin-left: -3rem !important; }
  .m-lg-auto {
    margin: auto !important; }
  .mt-lg-auto,
  .my-lg-auto {
    margin-top: auto !important; }
  .mr-lg-auto,
  .mx-lg-auto {
    margin-right: auto !important; }
  .mb-lg-auto,
  .my-lg-auto {
    margin-bottom: auto !important; }
  .ml-lg-auto,
  .mx-lg-auto {
    margin-left: auto !important; } }

@media (min-width: 1200px) {
  .m-xl-0 {
    margin: 0 !important; }
  .mt-xl-0,
  .my-xl-0 {
    margin-top: 0 !important; }
  .mr-xl-0,
  .mx-xl-0 {
    margin-right: 0 !important; }
  .mb-xl-0,
  .my-xl-0 {
    margin-bottom: 0 !important; }
  .ml-xl-0,
  .mx-xl-0 {
    margin-left: 0 !important; }
  .m-xl-1 {
    margin: 0.25rem !important; }
  .mt-xl-1,
  .my-xl-1 {
    margin-top: 0.25rem !important; }
  .mr-xl-1,
  .mx-xl-1 {
    margin-right: 0.25rem !important; }
  .mb-xl-1,
  .my-xl-1 {
    margin-bottom: 0.25rem !important; }
  .ml-xl-1,
  .mx-xl-1 {
    margin-left: 0.25rem !important; }
  .m-xl-2 {
    margin: 0.5rem !important; }
  .mt-xl-2,
  .my-xl-2 {
    margin-top: 0.5rem !important; }
  .mr-xl-2,
  .mx-xl-2 {
    margin-right: 0.5rem !important; }
  .mb-xl-2,
  .my-xl-2 {
    margin-bottom: 0.5rem !important; }
  .ml-xl-2,
  .mx-xl-2 {
    margin-left: 0.5rem !important; }
  .m-xl-3 {
    margin: 1rem !important; }
  .mt-xl-3,
  .my-xl-3 {
    margin-top: 1rem !important; }
  .mr-xl-3,
  .mx-xl-3 {
    margin-right: 1rem !important; }
  .mb-xl-3,
  .my-xl-3 {
    margin-bottom: 1rem !important; }
  .ml-xl-3,
  .mx-xl-3 {
    margin-left: 1rem !important; }
  .m-xl-4 {
    margin: 1.5rem !important; }
  .mt-xl-4,
  .my-xl-4 {
    margin-top: 1.5rem !important; }
  .mr-xl-4,
  .mx-xl-4 {
    margin-right: 1.5rem !important; }
  .mb-xl-4,
  .my-xl-4 {
    margin-bottom: 1.5rem !important; }
  .ml-xl-4,
  .mx-xl-4 {
    margin-left: 1.5rem !important; }
  .m-xl-5 {
    margin: 3rem !important; }
  .mt-xl-5,
  .my-xl-5 {
    margin-top: 3rem !important; }
  .mr-xl-5,
  .mx-xl-5 {
    margin-right: 3rem !important; }
  .mb-xl-5,
  .my-xl-5 {
    margin-bottom: 3rem !important; }
  .ml-xl-5,
  .mx-xl-5 {
    margin-left: 3rem !important; }
  .p-xl-0 {
    padding: 0 !important; }
  .pt-xl-0,
  .py-xl-0 {
    padding-top: 0 !important; }
  .pr-xl-0,
  .px-xl-0 {
    padding-right: 0 !important; }
  .pb-xl-0,
  .py-xl-0 {
    padding-bottom: 0 !important; }
  .pl-xl-0,
  .px-xl-0 {
    padding-left: 0 !important; }
  .p-xl-1 {
    padding: 0.25rem !important; }
  .pt-xl-1,
  .py-xl-1 {
    padding-top: 0.25rem !important; }
  .pr-xl-1,
  .px-xl-1 {
    padding-right: 0.25rem !important; }
  .pb-xl-1,
  .py-xl-1 {
    padding-bottom: 0.25rem !important; }
  .pl-xl-1,
  .px-xl-1 {
    padding-left: 0.25rem !important; }
  .p-xl-2 {
    padding: 0.5rem !important; }
  .pt-xl-2,
  .py-xl-2 {
    padding-top: 0.5rem !important; }
  .pr-xl-2,
  .px-xl-2 {
    padding-right: 0.5rem !important; }
  .pb-xl-2,
  .py-xl-2 {
    padding-bottom: 0.5rem !important; }
  .pl-xl-2,
  .px-xl-2 {
    padding-left: 0.5rem !important; }
  .p-xl-3 {
    padding: 1rem !important; }
  .pt-xl-3,
  .py-xl-3 {
    padding-top: 1rem !important; }
  .pr-xl-3,
  .px-xl-3 {
    padding-right: 1rem !important; }
  .pb-xl-3,
  .py-xl-3 {
    padding-bottom: 1rem !important; }
  .pl-xl-3,
  .px-xl-3 {
    padding-left: 1rem !important; }
  .p-xl-4 {
    padding: 1.5rem !important; }
  .pt-xl-4,
  .py-xl-4 {
    padding-top: 1.5rem !important; }
  .pr-xl-4,
  .px-xl-4 {
    padding-right: 1.5rem !important; }
  .pb-xl-4,
  .py-xl-4 {
    padding-bottom: 1.5rem !important; }
  .pl-xl-4,
  .px-xl-4 {
    padding-left: 1.5rem !important; }
  .p-xl-5 {
    padding: 3rem !important; }
  .pt-xl-5,
  .py-xl-5 {
    padding-top: 3rem !important; }
  .pr-xl-5,
  .px-xl-5 {
    padding-right: 3rem !important; }
  .pb-xl-5,
  .py-xl-5 {
    padding-bottom: 3rem !important; }
  .pl-xl-5,
  .px-xl-5 {
    padding-left: 3rem !important; }
  .m-xl-n1 {
    margin: -0.25rem !important; }
  .mt-xl-n1,
  .my-xl-n1 {
    margin-top: -0.25rem !important; }
  .mr-xl-n1,
  .mx-xl-n1 {
    margin-right: -0.25rem !important; }
  .mb-xl-n1,
  .my-xl-n1 {
    margin-bottom: -0.25rem !important; }
  .ml-xl-n1,
  .mx-xl-n1 {
    margin-left: -0.25rem !important; }
  .m-xl-n2 {
    margin: -0.5rem !important; }
  .mt-xl-n2,
  .my-xl-n2 {
    margin-top: -0.5rem !important; }
  .mr-xl-n2,
  .mx-xl-n2 {
    margin-right: -0.5rem !important; }
  .mb-xl-n2,
  .my-xl-n2 {
    margin-bottom: -0.5rem !important; }
  .ml-xl-n2,
  .mx-xl-n2 {
    margin-left: -0.5rem !important; }
  .m-xl-n3 {
    margin: -1rem !important; }
  .mt-xl-n3,
  .my-xl-n3 {
    margin-top: -1rem !important; }
  .mr-xl-n3,
  .mx-xl-n3 {
    margin-right: -1rem !important; }
  .mb-xl-n3,
  .my-xl-n3 {
    margin-bottom: -1rem !important; }
  .ml-xl-n3,
  .mx-xl-n3 {
    margin-left: -1rem !important; }
  .m-xl-n4 {
    margin: -1.5rem !important; }
  .mt-xl-n4,
  .my-xl-n4 {
    margin-top: -1.5rem !important; }
  .mr-xl-n4,
  .mx-xl-n4 {
    margin-right: -1.5rem !important; }
  .mb-xl-n4,
  .my-xl-n4 {
    margin-bottom: -1.5rem !important; }
  .ml-xl-n4,
  .mx-xl-n4 {
    margin-left: -1.5rem !important; }
  .m-xl-n5 {
    margin: -3rem !important; }
  .mt-xl-n5,
  .my-xl-n5 {
    margin-top: -3rem !important; }
  .mr-xl-n5,
  .mx-xl-n5 {
    margin-right: -3rem !important; }
  .mb-xl-n5,
  .my-xl-n5 {
    margin-bottom: -3rem !important; }
  .ml-xl-n5,
  .mx-xl-n5 {
    margin-left: -3rem !important; }
  .m-xl-auto {
    margin: auto !important; }
  .mt-xl-auto,
  .my-xl-auto {
    margin-top: auto !important; }
  .mr-xl-auto,
  .mx-xl-auto {
    margin-right: auto !important; }
  .mb-xl-auto,
  .my-xl-auto {
    margin-bottom: auto !important; }
  .ml-xl-auto,
  .mx-xl-auto {
    margin-left: auto !important; } }

.text-monospace {
  font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important; }

.text-justify {
  text-align: justify !important; }

.text-wrap {
  white-space: normal !important; }

.text-nowrap {
  white-space: nowrap !important; }

.text-truncate {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap; }

.text-left {
  text-align: left !important; }

.text-right {
  text-align: right !important; }

.text-center {
  text-align: center !important; }

@media (min-width: 576px) {
  .text-sm-left {
    text-align: left !important; }
  .text-sm-right {
    text-align: right !important; }
  .text-sm-center {
    text-align: center !important; } }

@media (min-width: 768px) {
  .text-md-left {
    text-align: left !important; }
  .text-md-right {
    text-align: right !important; }
  .text-md-center {
    text-align: center !important; } }

@media (min-width: 992px) {
  .text-lg-left {
    text-align: left !important; }
  .text-lg-right {
    text-align: right !important; }
  .text-lg-center {
    text-align: center !important; } }

@media (min-width: 1200px) {
  .text-xl-left {
    text-align: left !important; }
  .text-xl-right {
    text-align: right !important; }
  .text-xl-center {
    text-align: center !important; } }

.text-lowercase {
  text-transform: lowercase !important; }

.text-uppercase {
  text-transform: uppercase !important; }

.text-capitalize {
  text-transform: capitalize !important; }

.font-weight-light {
  font-weight: 300 !important; }

.font-weight-lighter {
  font-weight: lighter !important; }

.font-weight-normal {
  font-weight: 400 !important; }

.font-weight-bold {
  font-weight: 700 !important; }

.font-weight-bolder {
  font-weight: bolder !important; }

.font-italic {
  font-style: italic !important; }

.text-white {
  color: #ffffff !important; }

.text-primary, .list-wrapper .completed .remove {
  color: <?php echo $color; ?> !important; }

a.text-primary:hover, .list-wrapper .completed a.remove:hover, a.text-primary:focus, .list-wrapper .completed a.remove:focus {
  color: #13989c !important; }

.text-secondary, .list-wrapper .remove {
  color: #d8d8d8 !important; }

a.text-secondary:hover, .list-wrapper a.remove:hover, a.text-secondary:focus, .list-wrapper a.remove:focus {
  color: #b2b2b2 !important; }

.text-success, .horizontal-menu .bottom-navbar .page-navigation > .nav-item.mega-menu .submenu .category-heading {
  color: <?php echo $color; ?> !important; }

a.text-success:hover, .horizontal-menu .bottom-navbar .page-navigation > .nav-item.mega-menu .submenu a.category-heading:hover, a.text-success:focus, .horizontal-menu .bottom-navbar .page-navigation > .nav-item.mega-menu .submenu a.category-heading:focus {
  color: #259528 !important; }

.text-info {
  color: #8e32e9 !important; }

a.text-info:hover, a.text-info:focus {
  color: #6814ba !important; }

.text-warning {
  color: #ffde73 !important; }

a.text-warning:hover, a.text-warning:focus {
  color: #ffcc27 !important; }

.text-danger {
  color: #ff4d6b !important; }

a.text-danger:hover, a.text-danger:focus {
  color: #ff012b !important; }

.text-light {
  color: #f8f9fa !important; }

a.text-light:hover, a.text-light:focus {
  color: #cbd3da !important; }

.text-dark {
  color: #3e4b5b !important; }

a.text-dark:hover, a.text-dark:focus {
  color: #1f262e !important; }

.text-body {
  color: #343a40 !important; }

.text-muted, .preview-list .preview-item .preview-item-content p .content-category, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-designation, .email-wrapper .mail-list-container .mail-list .content .message_text, .email-wrapper .mail-list-container .mail-list .details .date {
  color: #9c9fa6 !important; }

.text-black-50 {
  color: rgba(0, 0, 0, 0.5) !important; }

.text-white-50 {
  color: rgba(255, 255, 255, 0.5) !important; }

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0; }

.text-decoration-none {
  text-decoration: none !important; }

.text-break {
  word-break: break-word !important;
  overflow-wrap: break-word !important; }

.text-reset {
  color: inherit !important; }

.visible {
  visibility: visible !important; }

.invisible {
  visibility: hidden !important; }

@media print {
  *,
  *::before,
  *::after {
    text-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important; }
  a:not(.btn) {
    text-decoration: underline; }
  abbr[title]::after {
    content: " (" attr(title) ")"; }
  pre {
    white-space: pre-wrap !important; }
  pre,
  blockquote {
    border: 1px solid #adb5bd;
    page-break-inside: avoid; }
  thead {
    display: table-header-group; }
  tr,
  img {
    page-break-inside: avoid; }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3; }
  h2,
  h3 {
    page-break-after: avoid; }
  @page {
    size: a3; }
  body {
    min-width: 992px !important; }
  .container {
    min-width: 992px !important; }
  .navbar {
    display: none; }
  .badge {
    border: 1px solid #000; }
  .table, .jsgrid .jsgrid-table {
    border-collapse: collapse !important; }
    
    .table td,
    .jsgrid .jsgrid-table td, .table th, .jsgrid .jsgrid-table th {
      background-color: #ffffff !important; }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #dee2e6 !important; }
  .table-dark {
    color: inherit; }
    .table-dark th,
    .table-dark td,
    .table-dark thead th,
    .table-dark tbody + tbody {
      border-color: #e8e5e5; }
  .table .thead-dark th, .jsgrid .jsgrid-table .thead-dark th {
    color: inherit;
    border-color: #e8e5e5; } }

/*-------------------------------------------------------------------*/
/* === Template mixins === */
/* Miscellaneous Mixins */
.list-wrapper ul li .form-check, .list-wrapper ul li .form-check .form-check-label, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-name, .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-designation, .email-wrapper .mail-list-container .mail-list .content .sender-name, .email-wrapper .message-body .attachments-sections ul li .details p.file-name {
  text-overflow: ellipsis;
  overflow: hidden;
  max-width: 100%;
  white-space: nowrap; }

/* Animation Mixins */
@-webkit-keyframes dropdownAnimation {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -30px, 0);
    transform: translate3d(0, -30px, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
    -webkit-transform: translate3d(0, 0px, 0);
    transform: translate3d(0, 0px, 0); } }
@keyframes dropdownAnimation {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, -30px, 0);
    transform: translate3d(0, -30px, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
    -webkit-transform: translate3d(0, 0px, 0);
    transform: translate3d(0, 0px, 0); } }

.dropdownAnimation, .horizontal-menu .top-navbar .navbar-menu-wrapper .dropdown .dropdown-menu, .horizontal-menu .bottom-navbar .page-navigation > .nav-item .submenu {
  -webkit-animation-name: dropdownAnimation;
  animation-name: dropdownAnimation;
  -webkit-animation-duration: 0.25s;
  animation-duration: 0.25s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both; }

@keyframes fadeOut {
  from {
    opacity: 1; }
  to {
    opacity: 0; } }

.fadeOut {
  -webkit-animation-name: fadeOut;
  animation-name: fadeOut; }

.infinite-spin {
  -webkit-animation-name: spin;
  animation-name: spin;
  -webkit-animation-duration: 3s;
  animation-duration: 3s;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear; }

@-webkit-keyframes spin {
  from {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@keyframes spin {
  from {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@keyframes fadeInUp {
  from {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0); }
  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none; } }

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp; }

/*-------------------------------------------------------------------*/
/* === Core Styles === */
/* Reset Styles */
body {
  padding: 0;
  margin: 0;
  overflow-x: hidden; }

.form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
.tt-query,
.tt-hint, .form-control:focus, .asColorPicker-input:focus, .dataTables_wrapper select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
.tt-query:focus,
.tt-hint:focus {
  -webkit-box-shadow: none;
  -moz-box-shadow: none; }

.form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
.tt-query,
.tt-hint {
  -webkit-box-shadow: none;
  box-shadow: none; }

.form-control:focus, .asColorPicker-input:focus, .dataTables_wrapper select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
.tt-query:focus,
.tt-hint:focus {
  outline: 0;
  -webkit-box-shadow: none;
  box-shadow: none; }

a,
div,
h1,
h2,
h3,
h4,
h5,
p,
span {
  text-shadow: none; }

[type=button]:focus,
a:active,
a:focus,
a:visited,
button::-moz-focus-inner,
input[type=reset]::-moz-focus-inner,
input[type=button]::-moz-focus-inner,
input[type=submit]::-moz-focus-inner,
input[type=file] > input[type=button]::-moz-focus-inner,
select::-moz-focus-inner {
  outline: 0; }

input, .form-control:focus, .asColorPicker-input:focus, .dataTables_wrapper select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .select2-container--default .select2-selection--single:focus, .select2-container--default .select2-selection--single .select2-search__field:focus, .typeahead:focus,
.tt-query:focus,
.tt-hint:focus,
input:focus,
select:focus,
textarea:focus,
button:focus {
  outline: none;
  outline-width: 0;
  outline-color: transparent;
  -webkit-box-shadow: none;
  box-shadow: none;
  outline-style: none; }

textarea {
  resize: none;
  overflow-x: hidden; }

.btn, .fc button, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel, .wizard > .actions a,
.btn-group.open .dropdown-toggle,
.fc .open.fc-button-group .dropdown-toggle,
.btn:active,
.fc button:active,
.ajax-upload-dragdrop .ajax-file-upload:active,
.swal2-modal .swal2-buttonswrapper .swal2-styled:active,
.wizard > .actions a:active, .btn:focus, .fc button:focus, .ajax-upload-dragdrop .ajax-file-upload:focus, .swal2-modal .swal2-buttonswrapper .swal2-styled:focus, .wizard > .actions a:focus, .btn:hover, .fc button:hover, .ajax-upload-dragdrop .ajax-file-upload:hover, .swal2-modal .swal2-buttonswrapper .swal2-styled:hover, .wizard > .actions a:hover,
.btn:visited,
.fc button:visited,
.ajax-upload-dragdrop .ajax-file-upload:visited,
.swal2-modal .swal2-buttonswrapper .swal2-styled:visited,
.wizard > .actions a:visited,
a,
a:active,
a:checked,
a:focus,
a:hover,
a:visited,
body,
button,
button:active,
button:hover,
button:visited,
div,
input,
input:active,
input:focus,
input:hover,
input:visited,
select,
select:active,
select:focus,
select:visited,
textarea,
textarea:active,
textarea:focus,
textarea:hover,
textarea:visited {
  -webkit-box-shadow: none;
  box-shadow: none; }

.btn.active.focus, .fc button.active.focus, .ajax-upload-dragdrop .active.focus.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .active.focus.swal2-styled, .wizard > .actions a.active.focus,
.btn.active:focus,
.fc button.active:focus,
.ajax-upload-dragdrop .active.ajax-file-upload:focus,
.swal2-modal .swal2-buttonswrapper .active.swal2-styled:focus,
.wizard > .actions a.active:focus, .btn.focus, .fc button.focus, .ajax-upload-dragdrop .focus.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .focus.swal2-styled, .wizard > .actions a.focus,
.btn:active.focus,
.fc button:active.focus,
.ajax-upload-dragdrop .ajax-file-upload:active.focus,
.swal2-modal .swal2-buttonswrapper .swal2-styled:active.focus,
.wizard > .actions a:active.focus,
.btn:active:focus,
.fc button:active:focus,
.ajax-upload-dragdrop .ajax-file-upload:active:focus,
.swal2-modal .swal2-buttonswrapper .swal2-styled:active:focus,
.wizard > .actions a:active:focus, .btn:focus, .fc button:focus, .ajax-upload-dragdrop .ajax-file-upload:focus, .swal2-modal .swal2-buttonswrapper .swal2-styled:focus, .wizard > .actions a:focus,
button,
button:active,
button:checked,
button:focus,
button:hover,
button:visited {
  outline: 0;
  outline-offset: 0; }

.bootstrap-select .dropdown-toggle:focus {
  outline: 0;
  outline-offset: 0; }

.dropdown-menu > li > a:active,
.dropdown-menu > li > a:focus,
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:visited {
  outline: 0; }

a:focus,
input:focus {
  border-color: transparent;
  outline: none; }

/* Typography */
body {
  font-size: 1rem;
  font-family: "Open Sans", sans-serif;
  font-weight: initial;
  line-height: normal;
  -webkit-font-smoothing: antialiased; }

h1, h2, h3, h4, h5, h6,
.h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: "Open Sans", sans-serif;
  font-weight: 600; }

p {
  font-size: 0.875rem; }

h1, .h1 {
  font-size: 2.19rem; }

h2, .h2 {
  font-size: 1.88rem; }

h3, .h3 {
  font-size: 1.56rem; }

h4, .h4 {
  font-size: 1.13rem; }

h5, .h5 {
  font-size: 1rem; }

h6, .h6 {
  font-size: .9375rem; }

p {
  font-size: .9375rem;
  line-height: 1.5; }

.display-1 {
  font-size: 3.75rem; }
  @media (max-width: 991px) {
    .display-1 {
      font-size: 3rem; } }

.display-2 {
  font-size: 3.125rem; }
  @media (max-width: 991px) {
    .display-2 {
      font-size: 2.5rem; } }

.display-3 {
  font-size: 2.5rem; }
  @media (max-width: 991px) {
    .display-3 {
      font-size: 2rem; } }

.display-4 {
  font-size: 1.875rem; }
  @media (max-width: 991px) {
    .display-4 {
      font-size: 1.5rem; } }

.display-5 {
  font-size: 1.25rem; }
  @media (max-width: 991px) {
    .display-5 {
      font-size: 1rem; } }

.blockquote {
  padding: 1.25rem;
  border: 1px solid #e8e5e5; }

address p {
  margin-bottom: 0; }

.blockquote-primary {
  border-color: #1bdbe0; }
  .blockquote-primary .blockquote-footer {
    color: #1bdbe0; }

.blockquote-secondary {
  border-color: #d8d8d8; }
  .blockquote-secondary .blockquote-footer {
    color: #d8d8d8; }

.blockquote-success {
  border-color: <?php echo $color; ?>; }
  .blockquote-success .blockquote-footer {
    color: <?php echo $color; ?>; }

.blockquote-info {
  border-color: #8e32e9; }
  .blockquote-info .blockquote-footer {
    color: #8e32e9; }

.blockquote-warning {
  border-color: #ffde73; }
  .blockquote-warning .blockquote-footer {
    color: #ffde73; }

.blockquote-danger {
  border-color: #ff4d6b; }
  .blockquote-danger .blockquote-footer {
    color: #ff4d6b; }

.blockquote-light {
  border-color: #f8f9fa; }
  .blockquote-light .blockquote-footer {
    color: #f8f9fa; }

.blockquote-dark {
  border-color: #3e4b5b; }
  .blockquote-dark .blockquote-footer {
    color: #3e4b5b; }

.error-page h1 {
  font-size: 12rem; }
  @media (max-width: 991px) {
    .error-page h1 {
      font-size: 8rem; } }

.icon-lg {
  font-size: 3.438rem; }

.icon-md {
  font-size: 1.875rem; }

.icon-sm {
  font-size: 1rem; }

/* Miscellanoeous */
body,
html {
  overflow-x: hidden;
  padding-right: 0 !important; }

*:-moz-full-screen,
*:-webkit-full-screen,
*:fullscreen *:-ms-fullscreen {
  overflow: auto; }

.container-scroller {
  overflow: hidden; }

pre {
  background: #e8eff4;
  padding: 15px;
  font-size: 14px; }

code {
  padding: 5px;
  color: #ff4d6b;
  font-family: "Open Sans", sans-serif;
  font-weight: 300;
  font-size: 0.875rem;
  border-radius: 4px; }

.page-header {
  margin: 0 0 1.5rem 0; }
  .page-header .breadcrumb {
    border: 0;
    margin-bottom: 0; }

.page-title {
  color: #343a40;
  font-size: 1.125rem;
  margin-bottom: 0; }
  .page-title .page-title-icon {
    display: inline-block;
    width: 36px;
    height: 36px;
    border-radius: 4px;
    text-align: center;
    -webkit-box-shadow: 0px 3px 8.3px 0.7px rgba(163, 93, 255, 0.35);
    box-shadow: 0px 3px 8.3px 0.7px rgba(163, 93, 255, 0.35); }
    .page-title .page-title-icon i {
      font-size: .9375rem;
      line-height: 36px; }

/* Footer */
/*footer {*/
/*    position: fixed;*/
/*   left: 0;*/
/*   bottom: 0;*/
/*   width: 100%;*/

/*}*/
.footer {
  background: #ecf0f4;
  color: #a7afb7;
  padding: 0 1.5rem 1.5rem;
  transition: all 0.25s ease;
  -moz-transition: all 0.25s ease;
  -webkit-transition: all 0.25s ease;
  -ms-transition: all 0.25s ease;
  font-size: 14px;
  font-family: "Open Sans", sans-serif; }
  .footer a {
    color: inherit;
    font-size: inherit;
    padding: 0 5px; }
    
      .rtl .footer a:first-of-type {
        border-right: none;
        border-left: 1px solid #a7afb7; }
  @media (max-width: 991px) {
    .footer {
      margin-left: 0;
      width: 100%; } }

/* Utilities */
.grid-margin {
  margin-bottom: 25px; }

@media (min-width: 576px) {
  .grid-margin-sm-0 {
    margin-bottom: 0; } }

@media (min-width: 768px) {
  .grid-margin-md-0 {
    margin-bottom: 0; } }

@media (min-width: 992px) {
  .grid-margin-lg-0 {
    margin-bottom: 0; } }

@media (min-width: 1200px) {
  .grid-margin-xl-0 {
    margin-bottom: 0; } }

.img-lg {
  width: 92px;
  height: 92px; }

.img-sm {
  width: 43px;
  height: 43px; }

.img-xs {
  width: 37px;
  height: 37px; }

.img-ss, .image-grouped .text-avatar,
.image-grouped img {
  width: 26px;
  height: 26px; }

.stretch-card {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: stretch;
  -ms-flex-align: stretch;
  align-items: stretch;
  -webkit-box-pack: stretch;
  -ms-flex-pack: stretch;
  justify-content: stretch; }
  .stretch-card > .card {
    width: 100%;
    min-width: 100%; }

@media (min-width: 576px) {
  .border-right-sm {
    border-right: 1px solid #e8e5e5; } }

@media (min-width: 768px) {
  .border-right-md {
    border-right: 1px solid #e8e5e5; } }

@media (min-width: 992px) {
  .border-right-lg {
    border-right: 1px solid #e8e5e5; } }

@media (min-width: 576px) {
  .border-left-sm {
    border-left: 1px solid #e8e5e5; } }

@media (min-width: 768px) {
  .border-left-md {
    border-left: 1px solid #e8e5e5; } }

@media (min-width: 992px) {
  .border-left-lg {
    border-left: 1px solid #e8e5e5; } }

.text-gray, .card .card-subtitle {
  color: #8c8c8c; }

.text-black {
  color: #000; }

.text-small {
  font-size: 12px; }

.flex-grow {
  -webkit-box-flex: 1;
  -ms-flex-positive: 1;
  flex-grow: 1; }

.font-weight-light {
  font-family: "Open Sans", sans-serif;
  font-weight: 300; }

.font-weight-medium {
  font-family: "Open Sans", sans-serif;
  font-weight: 600; }

.font-weight-semibold {
  font-family: "Open Sans", sans-serif;
  font-weight: 700; }

.font-weight-bold {
  font-family: "Open Sans", sans-serif;
  font-weight: bold; }

.font-weight-normal {
  font-family: "Open Sans", sans-serif;
  font-weight: 400; }

.image-grouped {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex; }
  .image-grouped .text-avatar,
  .image-grouped img {
    border-radius: 100%;
    margin-left: -10px;
    z-index: 0;
    border: 4px solid #fff;
    -webkit-transform: scale(1);
    transform: scale(1);
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-timing-function: ease;
    transition-timing-function: ease;
    -webkit-transition-property: "box-shadow", "z-index", "transform", "border-width", "box-shadow", "transform";
    transition-property: "box-shadow", "z-index", "transform", "border-width", "box-shadow", "transform";
    transition-property: "box-shadow", "z-index", "transform", "border-width"; }
    .image-grouped .text-avatar:first-child,
    .image-grouped img:first-child {
      margin-left: 0; }
    .image-grouped .text-avatar:hover,
    .image-grouped img:hover {
      z-index: 1;
      -webkit-box-shadow: 0 0 5px -2px rgba(0, 0, 0, 0.5);
      box-shadow: 0 0 5px -2px rgba(0, 0, 0, 0.5);
      -webkit-transform: scale(1.05);
      transform: scale(1.05);
      border-width: 0; }
  .image-grouped .text-avatar {
    color: #1bdbe0;
    font-size: 11px;
    font-weight: 600; }

.user-avatar {
  position: relative;
  display: inline-block; }
  .user-avatar .edit-avatar-icon {
    position: absolute;
    bottom: 8%;
    right: -10px;
    height: 35px;
    width: 35px;
    border-radius: 100%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    background: #d8d8d8;
    color: #3e4b5b;
    border: 3px solid #fff; }
    .user-avatar .edit-avatar-icon i {
      font-size: 15px; }

/* Demo Styles */
.template-demo .slider-wrap {
  height: 100px; }

.template-demo .progress {
  margin-top: 1.5rem; }

.template-demo > h2,
.template-demo > h3,
.template-demo > h4,
.template-demo > h5,
.template-demo > h6,
.template-demo > h1 {
  border-top: 1px solid #e8e5e5;
  padding: 0.5rem 0 0; }

.template-demo .ul-slider.noUi-horizontal {
  margin-top: 2rem; }

.template-demo .ul-slider.noUi-vertical {
  margin-right: 2rem; }

.template-demo > .dropdown {
  display: inline-block;
  margin-bottom: 0.5rem; }

.template-demo nav .breadcrumb {
  margin-bottom: 1.375rem; }

.template-demo nav:last-child .breadcrumb {
  margin-bottom: 0; }

.template-demo .editable-form > .form-group {
  border-bottom: 1px solid #e8e5e5;
  padding-bottom: 0.8rem;
  margin-bottom: 0.8rem; }

.template-demo .circle-progress {
  padding: 15px; }

.demo-modal {
  position: static;
  display: block;
  height: auto; }
  .demo-modal .modal-dialog.modal-lg {
    max-width: 100%; }

.loader-demo-box {
  width: 100%;
  height: 200px; }

.dropdown-menu-static-demo {
  height: 250px;
  margin-bottom: 20px; }

.rounded-legend ul li {
  list-style-type: none;
  color: #9c9fa6;
  font-size: .75rem; }
  .rounded-legend ul li .legend-dots {
    width: 1rem;
    height: 1rem;
    border-radius: 100%;
    display: inline-block;
    vertical-align: text-bottom;
    margin-right: .5rem; }
    .rtl .rounded-legend ul li .legend-dots {
      margin-left: .5rem; }

.rounded-legend.legend-horizontal {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex; }
  .rounded-legend.legend-horizontal ul li {
    display: inline-block;
    margin-right: 1.5rem; }
    .rtl .rounded-legend.legend-horizontal ul li {
      margin-right: auto;
      margin-left: 1.5rem; }

.rounded-legend.legend-top-right ul {
  float: right; }
  .rtl .rounded-legend.legend-top-right ul {
    float: left; }

.rounded-legend.legend-vertical ul li {
  margin-top: 1rem; }

/*-------------------------------------------------------------------*/
/* === Components === */
/* Accordions */
.accordion .card {
  margin-bottom: .75rem;
  -webkit-box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35);
  box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35);
  border-radius: .25rem; }
  .accordion .card .card-header {
    background-color: transparent;
    border: none;
    padding: 0.7rem; }
    .accordion .card .card-header * {
      /*font-family: "Open Sans", sans-serif;*/
      font-size: 1rem; }
    .accordion .card .card-header a {
      display: block;
      color: inherit;
      text-decoration: none;
      font-size: inherit;
      position: relative;
      -webkit-transition: color 0.5s ease;
      transition: color 0.5s ease;
      padding-right: .5rem; }
      .accordion .card .card-header a:before {
        font-family: "simple-line-icons";
        position: absolute;
        right: 7px;
        top: 0;
        font-size: 18px;
        display: block; }
      .accordion .card .card-header a[aria-expanded="true"] {
        color: #1bdbe0; }
        .accordion .card .card-header a[aria-expanded="true"]:before {
          content: "\e615"; }
      .accordion .card .card-header a[aria-expanded="false"]:before {
        content: "\e095"; }
  .accordion .card .card-body {
    font-size: 14px;
    padding: 0 2rem 2rem 2rem;
    font-family: "Open Sans", sans-serif;
    line-height: 1.5; }
    .accordion .card .card-body i {
      font-size: 1.25rem; }

.accordion.accordion-bordered {
  -webkit-box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35);
  box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35); }
  .accordion.accordion-bordered .card {
    margin: 0 2rem;
    border-top: 1px solid #e8e5e5;
    -webkit-box-shadow: none;
    box-shadow: none;
    border-radius: 0; }
    .accordion.accordion-bordered .card .card-header,
    .accordion.accordion-bordered .card .card-body {
      padding-left: 0;
      padding-right: 0; }
    .accordion.accordion-bordered .card .card-header a:before {
      color: <?php echo $color; ?>; }
    .accordion.accordion-bordered .card .card-header a[aria-expanded="true"] {
      color: inherit; }
      .accordion.accordion-bordered .card .card-header a[aria-expanded="true"]:before {
        content: "\e615"; }
    .accordion.accordion-bordered .card .card-header a[aria-expanded="false"]:before {
      content: "\e095"; }
    .accordion.accordion-bordered .card:first-child {
      border-top: 0; }

.accordion.accordion-filled .card {
  padding: 0; }
  .accordion.accordion-filled .card .card-header {
    padding: 0; }
    .accordion.accordion-filled .card .card-header a {
      padding: 2rem 4.5rem 2rem 2rem;
      -webkit-transition: all 0.2s linear;
      transition: all 0.2s linear; }
      .accordion.accordion-filled .card .card-header a:before {
        top: 40%;
        right: 40px; }
      .accordion.accordion-filled .card .card-header a[aria-expanded="true"] {
        background: #8e32e9;
        color: #ffffff; }
        .accordion.accordion-filled .card .card-header a[aria-expanded="true"]:before {
          content: "\e615";
          color: #ffffff; }
      .accordion.accordion-filled .card .card-header a[aria-expanded="false"]:before {
        content: "\e095"; }
  .accordion.accordion-filled .card .card-body {
    padding: 0 2rem 2rem 2rem;
    background: #8e32e9;
    color: #ffffff; }

.accordion.accordion-solid-header .card {
  padding: 0; }
  .accordion.accordion-solid-header .card .card-header {
    padding: 0; }
    .accordion.accordion-solid-header .card .card-header a {
      padding: 2rem 4.5rem 2rem 2rem;
      -webkit-transition: all 0.2s linear;
      transition: all 0.2s linear; }
      .accordion.accordion-solid-header .card .card-header a:before {
        top: 40%;
        right: 40px; }
      .accordion.accordion-solid-header .card .card-header a[aria-expanded="true"] {
        background: #1bdbe0;
        color: #ffffff; }
        .accordion.accordion-solid-header .card .card-header a[aria-expanded="true"]:before {
          content: "\e615";
          color: #ffffff; }
      .accordion.accordion-solid-header .card .card-header a[aria-expanded="false"]:before {
        content: "\e615"; }
  .accordion.accordion-solid-header .card .card-body {
    padding: 2rem; }

.accordion.accordion-solid-content .card {
  padding: 0; }
  .accordion.accordion-solid-content .card .card-header {
    padding: 0; }
    .accordion.accordion-solid-content .card .card-header a {
      padding: 2rem 4.5rem 2rem 2rem;
      -webkit-transition: all 0.2s linear;
      transition: all 0.2s linear; }
      .accordion.accordion-solid-content .card .card-header a:before {
        top: 40%;
        right: 40px; }
      .accordion.accordion-solid-content .card .card-header a[aria-expanded="true"] {
        color: inherit; }
        .accordion.accordion-solid-content .card .card-header a[aria-expanded="true"]:before {
          content: "\e615"; }
      .accordion.accordion-solid-content .card .card-header a[aria-expanded="false"]:before {
        content: "\e095"; }
  .accordion.accordion-solid-content .card .card-body {
    padding: 2rem;
    background: <?php echo $color; ?>;
    color: #ffffff; }

.accordion.accordion-multi-colored .card .card-header,
.accordion.accordion-multi-colored .card .card-body {
  background: transparent;
  color: #ffffff; }

.accordion.accordion-multi-colored .card:nth-child(1) {
  background: <?php echo $color; ?>; }

.accordion.accordion-multi-colored .card:nth-child(2) {
  background: <?php echo $color; ?>; }

.accordion.accordion-multi-colored .card:nth-child(3) {
  background: #ff4d6b; }

.accordion.accordion-multi-colored .card:nth-child(4) {
  background: #ffde73; }

.accordion.accordion-multi-colored .card:nth-child(5) {
  background: #8e32e9; }

.accordion.accordion-multi-colored .card .card-header a[aria-expanded="true"] {
  color: inherit; }
  .accordion.accordion-multi-colored .card .card-header a[aria-expanded="true"]:before {
    content: "\e615"; }

.accordion.accordion-multi-colored .card .card-header a[aria-expanded="false"]:before {
  content: "\e095"; }

/* Badges */
.badge {
  border-radius: .125rem;
  font-size: 11px;
  font-weight: initial;
  line-height: 1;
  padding: .375rem .5625rem;
  font-family: "Open Sans", sans-serif;
  font-weight: 600; }
  .badge.badge-pill {
    border-radius: 10rem; }

/*Badge variations*/
.badge-primary {
  border: 1px solid #1bdbe0;
  color: #ffffff; }

.badge-secondary {
  border: 1px solid #d8d8d8;
  color: #ffffff; }

.badge-success, .preview-list .preview-item .preview-thumbnail .badge.badge-online {
  border: 1px solid <?php echo $color; ?>;
  color: #ffffff; }

.badge-info, .preview-list .preview-item .preview-thumbnail .badge.badge-offline {
  border: 1px solid #8e32e9;
  color: #ffffff; }

.badge-warning, .preview-list .preview-item .preview-thumbnail .badge.badge-busy {
  border: 1px solid #ffde73;
  color: #ffffff; }

.badge-danger {
  border: 1px solid #ff4d6b;
  color: #ffffff; }

.badge-light {
  border: 1px solid #f8f9fa;
  color: #ffffff; }

.badge-dark {
  border: 1px solid #3e4b5b;
  color: #ffffff; }

/*Badge outlined variations*/
.badge-outline-primary {
  color: #1bdbe0;
  border: 1px solid #1bdbe0; }

.badge-outline-secondary {
  color: #d8d8d8;
  border: 1px solid #d8d8d8; }

.badge-outline-success {
  color: <?php echo $color; ?>;
  border: 1px solid <?php echo $color; ?>; }

.badge-outline-info {
  color: #8e32e9;
  border: 1px solid #8e32e9; }

.badge-outline-warning {
  color: #ffde73;
  border: 1px solid #ffde73; }

.badge-outline-danger {
  color: #ff4d6b;
  border: 1px solid #ff4d6b; }

.badge-outline-light {
  color: #f8f9fa;
  border: 1px solid #f8f9fa; }

.badge-outline-dark {
  color: #3e4b5b;
  border: 1px solid #3e4b5b; }

/* Bootstrap Alerts */
.alert {
  font-size: 0.875rem; }
  .alert i {
    font-size: 1.25rem;
    margin-right: 1.25rem;
    vertical-align: middle;
    line-height: .5; }

.alert-primary {
  color: #15a6aa;
  background-color: rgba(27, 219, 224, 0.2);
  border-color: #19c9ce; }
  .alert-primary hr {
    border-top-color: #16b3b7; }
  .alert-primary .alert-link {
    color: #0f7a7d; }

.alert-secondary {
  color: #a4a4a4;
  background-color: rgba(216, 216, 216, 0.2);
  border-color: #c7c7c7; }
  .alert-secondary hr {
    border-top-color: #bababa; }
  .alert-secondary .alert-link {
    color: #8b8b8b; }

.alert-success {
  color: #2b9d2e;
  background-color: rgba(56, 206, 60, 0.2);
  border-color: #34be37; }
  .alert-success hr {
    border-top-color: #2faa31; }
  .alert-success .alert-link {
    color: #207522; }

.alert-info {
  color: #6c26b1;
  background-color: rgba(142, 50, 233, 0.2);
  border-color: #832ed6; }
  .alert-info hr {
    border-top-color: #7626c4; }
  .alert-info .alert-link {
    color: #521d87; }

.alert-warning {
  color: #c2a957;
  background-color: rgba(255, 222, 115, 0.2);
  border-color: #ebcc6a; }
  .alert-warning hr {
    border-top-color: #e8c454; }
  .alert-warning .alert-link {
    color: #a9903d; }

.alert-danger {
  color: #c23b51;
  background-color: rgba(255, 77, 107, 0.2);
  border-color: #eb4762; }
  .alert-danger hr {
    border-top-color: #e9304e; }
  .alert-danger .alert-link {
    color: #9b2f41; }

.alert-light {
  color: #bcbdbe;
  background-color: rgba(248, 249, 250, 0.2);
  border-color: #e4e5e6; }
  .alert-light hr {
    border-top-color: #d7d8da; }
  .alert-light .alert-link {
    color: #a2a4a5; }

.alert-dark {
  color: #2f3945;
  background-color: rgba(62, 75, 91, 0.2);
  border-color: #394554; }
  .alert-dark hr {
    border-top-color: #2f3945; }
  .alert-dark .alert-link {
    color: #1a2027; }

.alert-fill-primary {
  color: #ffffff;
  background-color: #1bdbe0;
  border-color: #1bdbe0; }
  .alert-fill-primary hr {
    border-top-color: #18c5c9; }
  .alert-fill-primary .alert-link {
    color: #e6e6e6; }

.alert-fill-secondary {
  color: #ffffff;
  background-color: #d8d8d8;
  border-color: #d8d8d8; }
  .alert-fill-secondary hr {
    border-top-color: #cbcbcb; }
  .alert-fill-secondary .alert-link {
    color: #e6e6e6; }

.alert-fill-success {
  color: #ffffff;
  background-color: <?php echo $color; ?>;
  border-color: <?php echo $color; ?>; }
  .alert-fill-success hr {
    border-top-color: #2fbe33; }
  .alert-fill-success .alert-link {
    color: #e6e6e6; }

.alert-fill-info {
  color: #ffffff;
  background-color: #8e32e9;
  border-color: #8e32e9; }
  .alert-fill-info hr {
    border-top-color: #811be7; }
  .alert-fill-info .alert-link {
    color: #e6e6e6; }

.alert-fill-warning {
  color: #ffffff;
  background-color: #ffde73;
  border-color: #ffde73; }
  .alert-fill-warning hr {
    border-top-color: #ffd85a; }
  .alert-fill-warning .alert-link {
    color: #e6e6e6; }

.alert-fill-danger {
  color: #ffffff;
  background-color: #ff4d6b;
  border-color: #ff4d6b; }
  .alert-fill-danger hr {
    border-top-color: #ff3456; }
  .alert-fill-danger .alert-link {
    color: #e6e6e6; }

.alert-fill-light {
  color: #ffffff;
  background-color: #f8f9fa;
  border-color: #f8f9fa; }
  .alert-fill-light hr {
    border-top-color: #e9ecef; }
  .alert-fill-light .alert-link {
    color: #e6e6e6; }

.alert-fill-dark {
  color: #ffffff;
  background-color: #3e4b5b;
  border-color: #3e4b5b; }
  .alert-fill-dark hr {
    border-top-color: #343f4c; }
  .alert-fill-dark .alert-link {
    color: #e6e6e6; }

/* Bootstrap Progress */
.progress {
  border-radius: 3px;
  height: 8px; }
  .progress .progress-bar {
    border-radius: 3px; }
  .progress.progress-sm {
    height: 0.375rem; }
  .progress.progress-md {
    height: 8px; }
  .progress.progress-lg {
    height: 15px; }
  .progress.progress-xl {
    height: 18px; }

/* Buttons */
.btn, .fc button, .ajax-upload-dragdrop .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel, .wizard > .actions a {
  font-size: 0.875rem;
  line-height: 1;
  font-family: "Open Sans", sans-serif;
  font-weight: 600;
  /* Buttons with only icons */
  /* Buttons with icon and text */ }
  .btn i, .fc button i, .ajax-upload-dragdrop .ajax-file-upload i, .swal2-modal .swal2-buttonswrapper .swal2-styled i, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm i, .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel i, .wizard > .actions a i {
    font-size: 1rem; }
  .btn.btn-rounded, .fc button.btn-rounded, .ajax-upload-dragdrop .btn-rounded.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-rounded.swal2-styled, .wizard > .actions a.btn-rounded {
    border-radius: 50px; }
  .btn.btn-fw, .fc button.btn-fw, .ajax-upload-dragdrop .btn-fw.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-fw.swal2-styled, .wizard > .actions a.btn-fw {
    min-width: 150px; }
  .btn.btn-sm, .btn-group-sm > .btn, .fc .btn-group-sm > button, .ajax-upload-dragdrop .btn-group-sm > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-sm > .swal2-styled, .wizard > .actions .btn-group-sm > a, .fc button, .ajax-upload-dragdrop .btn-sm.ajax-file-upload, .ajax-upload-dragdrop .fc button.ajax-file-upload, .fc .ajax-upload-dragdrop button.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-sm.swal2-styled, .swal2-modal .swal2-buttonswrapper .fc button.swal2-styled, .fc .swal2-modal .swal2-buttonswrapper button.swal2-styled, .wizard > .actions a.btn-sm {
    font-size: 0.875rem; }
  .btn.btn-lg, .btn-group-lg > .btn, .fc .btn-group-lg > button, .ajax-upload-dragdrop .btn-group-lg > .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group-lg > .swal2-styled, .wizard > .actions .btn-group-lg > a, .fc button.btn-lg, .ajax-upload-dragdrop .btn-lg.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-lg.swal2-styled, .wizard > .actions a.btn-lg {
    font-size: 0.875rem; }
  .btn.btn-xs, .fc button.btn-xs, .fc .editable-container.editable-inline .editableform .control-group .editable-buttons button.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .fc button.editable-submit, .fc .editable-container.editable-inline .editableform .control-group .editable-buttons button.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .fc button.editable-cancel, .ajax-upload-dragdrop .btn-xs.ajax-file-upload, .ajax-upload-dragdrop .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-file-upload.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-upload-dragdrop .ajax-file-upload.editable-submit, .ajax-upload-dragdrop .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-file-upload.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .ajax-upload-dragdrop .ajax-file-upload.editable-cancel, .swal2-modal .swal2-buttonswrapper .btn-xs.swal2-styled, .swal2-modal .swal2-buttonswrapper .editable-container.editable-inline .editableform .control-group .editable-buttons .swal2-styled.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .swal2-modal .swal2-buttonswrapper .swal2-styled.editable-submit, .swal2-modal .swal2-buttonswrapper .editable-container.editable-inline .editableform .control-group .editable-buttons .swal2-styled.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .swal2-modal .swal2-buttonswrapper .swal2-styled.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .wizard > .actions a.editable-submit, .wizard > .actions .editable-container.editable-inline .editableform .control-group .editable-buttons a.editable-submit, .editable-container.editable-inline .editableform .control-group .editable-buttons .btn.editable-cancel, .editable-container.editable-inline .editableform .control-group .editable-buttons .wizard > .actions a.editable-cancel, .wizard > .actions .editable-container.editable-inline .editableform .control-group .editable-buttons a.editable-cancel, .wizard > .actions a.btn-xs {
    padding: 0.5rem 0.75rem;
    font-size: 0.625rem; }
  .btn.btn-icon, .fc button.btn-icon, .ajax-upload-dragdrop .btn-icon.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-icon.swal2-styled, .wizard > .actions a.btn-icon {
    width: 42px;
    height: 42px;
    padding: 0; }
  .btn.btn-icon-text .btn-icon-prepend, .fc button.btn-icon-text .btn-icon-prepend, .ajax-upload-dragdrop .btn-icon-text.ajax-file-upload .btn-icon-prepend, .swal2-modal .swal2-buttonswrapper .btn-icon-text.swal2-styled .btn-icon-prepend, .wizard > .actions a.btn-icon-text .btn-icon-prepend {
    margin-right: .5rem; }
  .btn.btn-icon-text .btn-icon-append, .fc button.btn-icon-text .btn-icon-append, .ajax-upload-dragdrop .btn-icon-text.ajax-file-upload .btn-icon-append, .swal2-modal .swal2-buttonswrapper .btn-icon-text.swal2-styled .btn-icon-append, .wizard > .actions a.btn-icon-text .btn-icon-append {
    margin-left: .5rem; }
  .btn.btn-social-icon, .fc button.btn-social-icon, .ajax-upload-dragdrop .btn-social-icon.ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-social-icon.swal2-styled, .wizard > .actions a.btn-social-icon {
    width: 50px;
    height: 50px;
    padding: 0; }
  .btn.btn-no-hover-bg:hover, .fc button.btn-no-hover-bg:hover, .ajax-upload-dragdrop .btn-no-hover-bg.ajax-file-upload:hover, .swal2-modal .swal2-buttonswrapper .btn-no-hover-bg.swal2-styled:hover, .wizard > .actions a.btn-no-hover-bg:hover, .btn.btn-no-hover-bg:focus, .fc button.btn-no-hover-bg:focus, .ajax-upload-dragdrop .btn-no-hover-bg.ajax-file-upload:focus, .swal2-modal .swal2-buttonswrapper .btn-no-hover-bg.swal2-styled:focus, .wizard > .actions a.btn-no-hover-bg:focus, .btn.btn-no-hover-bg:active, .fc button.btn-no-hover-bg:active, .ajax-upload-dragdrop .btn-no-hover-bg.ajax-file-upload:active, .swal2-modal .swal2-buttonswrapper .btn-no-hover-bg.swal2-styled:active, .wizard > .actions a.btn-no-hover-bg:active {
    background: transparent;
    color: currentColor; }

.btn-group .btn + .btn, .fc .fc-button-group .btn + .btn, .btn-group .fc button + .btn, .fc .btn-group button + .btn, .fc .fc-button-group button + .btn, .btn-group .ajax-upload-dragdrop .ajax-file-upload + .btn, .ajax-upload-dragdrop .btn-group .ajax-file-upload + .btn, .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + .btn, .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + .btn, .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .btn, .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + .btn, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .btn, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + .btn, .btn-group .wizard > .actions a + .btn, .wizard > .actions .btn-group a + .btn, .fc .fc-button-group .wizard > .actions a + .btn, .wizard > .actions .fc .fc-button-group a + .btn, .btn-group .fc .btn + button, .fc .btn-group .btn + button, .fc .fc-button-group .btn + button, .btn-group .fc button + button, .fc .btn-group button + button, .fc .fc-button-group button + button, .btn-group .ajax-upload-dragdrop .fc .ajax-file-upload + button, .fc .btn-group .ajax-upload-dragdrop .ajax-file-upload + button, .ajax-upload-dragdrop .btn-group .fc .ajax-file-upload + button, .fc .ajax-upload-dragdrop .btn-group .ajax-file-upload + button, .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + button, .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + button, .btn-group .swal2-modal .swal2-buttonswrapper .fc .swal2-styled + button, .fc .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + button, .swal2-modal .swal2-buttonswrapper .btn-group .fc .swal2-styled + button, .fc .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + button, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + button, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + button, .btn-group .wizard > .actions .fc a + button, .fc .btn-group .wizard > .actions a + button, .wizard > .actions .btn-group .fc a + button, .fc .wizard > .actions .btn-group a + button, .fc .fc-button-group .wizard > .actions a + button, .wizard > .actions .fc .fc-button-group a + button, .btn-group .ajax-upload-dragdrop .btn + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .btn + .ajax-file-upload, .fc .fc-button-group .ajax-upload-dragdrop .btn + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .btn + .ajax-file-upload, .btn-group .fc .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .fc button + .ajax-file-upload, .fc .btn-group .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .fc .btn-group button + .ajax-file-upload, .fc .fc-button-group .ajax-upload-dragdrop button + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group button + .ajax-file-upload, .btn-group .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .ajax-file-upload + .ajax-file-upload, .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + .ajax-file-upload, .btn-group .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .btn-group .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + .ajax-file-upload, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .ajax-file-upload, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .ajax-upload-dragdrop .swal2-styled + .ajax-file-upload, .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + .ajax-file-upload, .btn-group .wizard > .actions .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .btn-group .wizard > .actions a + .ajax-file-upload, .wizard > .actions .btn-group .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .wizard > .actions .btn-group a + .ajax-file-upload, .fc .fc-button-group .wizard > .actions .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .fc .fc-button-group .wizard > .actions a + .ajax-file-upload, .wizard > .actions .fc .fc-button-group .ajax-upload-dragdrop a + .ajax-file-upload, .ajax-upload-dragdrop .wizard > .actions .fc .fc-button-group a + .ajax-file-upload, .btn-group .swal2-modal .swal2-buttonswrapper .btn + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .btn + .swal2-styled, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .btn + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .btn + .swal2-styled, .btn-group .fc .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .fc button + .swal2-styled, .fc .btn-group .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .btn-group button + .swal2-styled, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper button + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group button + .swal2-styled, .btn-group .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .ajax-upload-dragdrop .ajax-file-upload + .swal2-styled, .ajax-upload-dragdrop .btn-group .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .btn-group .ajax-file-upload + .swal2-styled, .fc .fc-button-group .ajax-upload-dragdrop .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + .swal2-styled, .ajax-upload-dragdrop .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .ajax-file-upload + .swal2-styled, .swal2-modal .swal2-buttonswrapper .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + .swal2-styled, .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + .swal2-styled, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + .swal2-styled, .btn-group .wizard > .actions .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .btn-group .wizard > .actions a + .swal2-styled, .wizard > .actions .btn-group .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .wizard > .actions .btn-group a + .swal2-styled, .fc .fc-button-group .wizard > .actions .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .wizard > .actions a + .swal2-styled, .wizard > .actions .fc .fc-button-group .swal2-modal .swal2-buttonswrapper a + .swal2-styled, .swal2-modal .swal2-buttonswrapper .wizard > .actions .fc .fc-button-group a + .swal2-styled, .btn-group .wizard > .actions .btn + a, .wizard > .actions .btn-group .btn + a, .fc .fc-button-group .wizard > .actions .btn + a, .wizard > .actions .fc .fc-button-group .btn + a, .btn-group .fc .wizard > .actions button + a, .wizard > .actions .btn-group .fc button + a, .fc .btn-group .wizard > .actions button + a, .wizard > .actions .fc .btn-group button + a, .fc .fc-button-group .wizard > .actions button + a, .wizard > .actions .fc .fc-button-group button + a, .btn-group .ajax-upload-dragdrop .wizard > .actions .ajax-file-upload + a, .wizard > .actions .btn-group .ajax-upload-dragdrop .ajax-file-upload + a, .ajax-upload-dragdrop .btn-group .wizard > .actions .ajax-file-upload + a, .wizard > .actions .ajax-upload-dragdrop .btn-group .ajax-file-upload + a, .fc .fc-button-group .ajax-upload-dragdrop .wizard > .actions .ajax-file-upload + a, .wizard > .actions .fc .fc-button-group .ajax-upload-dragdrop .ajax-file-upload + a, .ajax-upload-dragdrop .fc .fc-button-group .wizard > .actions .ajax-file-upload + a, .wizard > .actions .ajax-upload-dragdrop .fc .fc-button-group .ajax-file-upload + a, .btn-group .swal2-modal .swal2-buttonswrapper .wizard > .actions .swal2-styled + a, .wizard > .actions .btn-group .swal2-modal .swal2-buttonswrapper .swal2-styled + a, .swal2-modal .swal2-buttonswrapper .btn-group .wizard > .actions .swal2-styled + a, .wizard > .actions .swal2-modal .swal2-buttonswrapper .btn-group .swal2-styled + a, .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .wizard > .actions .swal2-styled + a, .wizard > .actions .fc .fc-button-group .swal2-modal .swal2-buttonswrapper .swal2-styled + a, .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .wizard > .actions .swal2-styled + a, .wizard > .actions .swal2-modal .swal2-buttonswrapper .fc .fc-button-group .swal2-styled + a, .btn-group .wizard > .actions a + a, .wizard > .actions .btn-group a + a, .fc .fc-button-group .wizard > .actions a + a, .wizard > .actions .fc .fc-button-group a + a {
  border-left: 0; }

/*social buttons*/
.btn-twitter {
  background: #2caae1;
  color: #ffffff; }
  .btn-twitter:hover, .btn-twitter:focus {
    background: #1b8dbf;
    color: #ffffff; }
  .btn-twitter.btn-social-icon-text {
    padding: 0 1.5rem 0 0;
    background: #59bce7; }
    .btn-twitter.btn-social-icon-text i {
      background: #2caae1;
      padding: .75rem;
      display: inline-block;
      margin-right: 1.5rem; }

.btn-outline-twitter {
  border: 1px solid #2caae1;
  color: #2caae1; }
  .btn-outline-twitter:hover {
    background: #2caae1;
    color: #ffffff; }

.btn-facebook {
  background: #3b579d;
  color: #ffffff; }
  .btn-facebook:hover, .btn-facebook:focus {
    background: #2d4278;
    color: #ffffff; }
  .btn-facebook.btn-social-icon-text {
    padding: 0 1.5rem 0 0;
    background: #4e6ebd; }
    .btn-facebook.btn-social-icon-text i {
      background: #3b579d;
      padding: .75rem;
      display: inline-block;
      margin-right: 1.5rem; }

.btn-outline-facebook {
  border: 1px solid #3b579d;
  color: #3b579d; }
  .btn-outline-facebook:hover {
    background: #3b579d;
    color: #ffffff; }

.btn-google {
  background: #dc4a38;
  color: #ffffff; }
  .btn-google:hover, .btn-google:focus {
    background: #bf3322;
    color: #ffffff; }
  .btn-google.btn-social-icon-text {
    padding: 0 1.5rem 0 0;
    background: #e47163; }
    .btn-google.btn-social-icon-text i {
      background: #dc4a38;
      padding: .75rem;
      display: inline-block;
      margin-right: 1.5rem; }

.btn-outline-google {
  border: 1px solid #dc4a38;
  color: #dc4a38; }
  .btn-outline-google:hover {
    background: #dc4a38;
    color: #ffffff; }

.btn-linkedin {
  background: #0177b5;
  color: #ffffff; }
  .btn-linkedin:hover, .btn-linkedin:focus {
    background: #015682;
    color: #ffffff; }
  .btn-linkedin.btn-social-icon-text {
    padding: 0 1.5rem 0 0;
    background: #0198e8; }
    .btn-linkedin.btn-social-icon-text i {
      background: #0177b5;
      padding: .75rem;
      display: inline-block;
      margin-right: 1.5rem; }

.btn-outline-linkedin {
  border: 1px solid #0177b5;
  color: #0177b5; }
  .btn-outline-linkedin:hover {
    background: #0177b5;
    color: #ffffff; }

.btn-pinterest {
  background: #cc2127;
  color: #ffffff; }
  .btn-pinterest:hover, .btn-pinterest:focus {
    background: #a01a1f;
    color: #ffffff; }
  .btn-pinterest.btn-social-icon-text {
    padding: 0 1.5rem 0 0;
    background: #e04046; }
    .btn-pinterest.btn-social-icon-text i {
      background: #cc2127;
      padding: .75rem;
      display: inline-block;
      margin-right: 1.5rem; }

.btn-outline-pinterest {
  border: 1px solid #cc2127;
  color: #cc2127; }
  .btn-outline-pinterest:hover {
    background: #cc2127;
    color: #ffffff; }

.btn-youtube {
  background: #e52d27;
  color: #ffffff; }
  .btn-youtube:hover, .btn-youtube:focus {
    background: #c21d17;
    color: #ffffff; }
  .btn-youtube.btn-social-icon-text {
    padding: 0 1.5rem 0 0;
    background: #ea5955; }
    .btn-youtube.btn-social-icon-text i {
      background: #e52d27;
      padding: .75rem;
      display: inline-block;
      margin-right: 1.5rem; }

.btn-outline-youtube {
  border: 1px solid #e52d27;
  color: #e52d27; }
  .btn-outline-youtube:hover {
    background: #e52d27;
    color: #ffffff; }

.btn-github {
  background: #333333;
  color: #ffffff; }
  .btn-github:hover, .btn-github:focus {
    background: #1a1a1a;
    color: #ffffff; }
  .btn-github.btn-social-icon-text {
    padding: 0 1.5rem 0 0;
    background: #4d4d4d; }
    .btn-github.btn-social-icon-text i {
      background: #333333;
      padding: .75rem;
      display: inline-block;
      margin-right: 1.5rem; }

.btn-outline-github {
  border: 1px solid #333333;
  color: #333333; }
  .btn-outline-github:hover {
    background: #333333;
    color: #ffffff; }

.btn-behance {
  background: #1769ff;
  color: #ffffff; }
  .btn-behance:hover, .btn-behance:focus {
    background: #0050e3;
    color: #ffffff; }
  .btn-behance.btn-social-icon-text {
    padding: 0 1.5rem 0 0;
    background: #4a8aff; }
    .btn-behance.btn-social-icon-text i {
      background: #1769ff;
      padding: .75rem;
      display: inline-block;
      margin-right: 1.5rem; }

.btn-outline-behance {
  border: 1px solid #1769ff;
  color: #1769ff; }
  .btn-outline-behance:hover {
    background: #1769ff;
    color: #ffffff; }

.btn-dribbble {
  background: #ea4c89;
  color: #ffffff; }
  .btn-dribbble:hover, .btn-dribbble:focus {
    background: #e51e6b;
    color: #ffffff; }
  .btn-dribbble.btn-social-icon-text {
    padding: 0 1.5rem 0 0;
    background: #ef7aa7; }
    .btn-dribbble.btn-social-icon-text i {
      background: #ea4c89;
      padding: .75rem;
      display: inline-block;
      margin-right: 1.5rem; }

.btn-outline-dribbble {
  border: 1px solid #ea4c89;
  color: #ea4c89; }
  .btn-outline-dribbble:hover {
    background: #ea4c89;
    color: #ffffff; }

.btn-reddit {
  background: #ff4500;
  color: #ffffff; }
  .btn-reddit:hover, .btn-reddit:focus {
    background: #cc3700;
    color: #ffffff; }
  .btn-reddit.btn-social-icon-text {
    padding: 0 1.5rem 0 0;
    background: #ff6a33; }
    .btn-reddit.btn-social-icon-text i {
      background: #ff4500;
      padding: .75rem;
      display: inline-block;
      margin-right: 1.5rem; }

.btn-outline-reddit {
  border: 1px solid #ff4500;
  color: #ff4500; }
  .btn-outline-reddit:hover {
    background: #ff4500;
    color: #ffffff; }

/* inverse buttons */
.btn-inverse-primary {
  background-color: rgba(27, 219, 224, 0.2);
  background-image: none;
  border-color: rgba(27, 219, 224, 0); }
  .btn-inverse-primary:not(.btn-inverse-light) {
    color: #1bdbe0; }
  .btn-inverse-primary:hover {
    color: #ffffff;
    background-color: #1bdbe0;
    border-color: #1bdbe0; }
  .btn-inverse-primary.focus, .btn-inverse-primary:focus {
    -webkit-box-shadow: 0 0 0 3px rgba(27, 219, 224, 0.5);
    box-shadow: 0 0 0 3px rgba(27, 219, 224, 0.5); }
  .btn-inverse-primary.disabled, .btn-inverse-primary:disabled {
    color: #1bdbe0;
    background-color: transparent; }
  .btn-inverse-primary.active, .btn-inverse-primary:active,
  .show > .btn-inverse-primary.dropdown-toggle {
    color: #ffffff;
    background-color: #1bdbe0;
    border-color: #1bdbe0; }

.btn-primary:not(.btn-light), .wizard > .actions a:not(.btn-light) {
  color: #ffffff; }
  .btn-primary:not(.btn-light):hover, .wizard > .actions a:not(.btn-light):hover, .btn-primary:not(.btn-light):focus, .wizard > .actions a:not(.btn-light):focus, .btn-primary:not(.btn-light):active, .wizard > .actions a:not(.btn-light):active {
    color: #ffffff; }
  .btn-primary:not(.btn-light):focus, .wizard > .actions a:not(.btn-light):focus, .btn-primary:not(.btn-light):active, .wizard > .actions a:not(.btn-light):active {
    background: #1bdbe0;
    border-color: #1bdbe0; }

.btn-outline-primary:hover, .wizard > .actions .disabled a:hover, .btn-outline-primary:focus, .wizard > .actions .disabled a:focus, .btn-outline-primary:active, .wizard > .actions .disabled a:active {
  background: #1bdbe0;
  color: #ffffff; }

.btn-inverse-secondary {
  background-color: rgba(216, 216, 216, 0.2);
  background-image: none;
  border-color: rgba(216, 216, 216, 0); }
  .btn-inverse-secondary:not(.btn-inverse-light) {
    color: #d8d8d8; }
  .btn-inverse-secondary:hover {
    color: #ffffff;
    background-color: #d8d8d8;
    border-color: #d8d8d8; }
  .btn-inverse-secondary.focus, .btn-inverse-secondary:focus {
    -webkit-box-shadow: 0 0 0 3px rgba(216, 216, 216, 0.5);
    box-shadow: 0 0 0 3px rgba(216, 216, 216, 0.5); }
  .btn-inverse-secondary.disabled, .btn-inverse-secondary:disabled {
    color: #d8d8d8;
    background-color: transparent; }
  .btn-inverse-secondary.active, .btn-inverse-secondary:active,
  .show > .btn-inverse-secondary.dropdown-toggle {
    color: #ffffff;
    background-color: #d8d8d8;
    border-color: #d8d8d8; }

.btn-secondary:not(.btn-light) {
  color: #ffffff; }
  .btn-secondary:not(.btn-light):hover, .btn-secondary:not(.btn-light):focus, .btn-secondary:not(.btn-light):active {
    color: #ffffff; }
  .btn-secondary:not(.btn-light):focus, .btn-secondary:not(.btn-light):active {
    background: #d8d8d8;
    border-color: #d8d8d8; }

.btn-outline-secondary:hover, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:hover, .btn-outline-secondary:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:focus, .btn-outline-secondary:active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-cancel:active {
  background: #d8d8d8;
  color: #ffffff; }

.btn-inverse-success {
  background-color: rgba(56, 206, 60, 0.2);
  background-image: none;
  border-color: rgba(56, 206, 60, 0); }
  .btn-inverse-success:not(.btn-inverse-light) {
    color: <?php echo $color; ?>; }
  .btn-inverse-success:hover {
    color: #ffffff;
    background-color: <?php echo $color; ?>;
    border-color: <?php echo $color; ?>; }
  .btn-inverse-success.focus, .btn-inverse-success:focus {
    -webkit-box-shadow: 0 0 0 3px rgba(56, 206, 60, 0.5);
    box-shadow: 0 0 0 3px rgba(56, 206, 60, 0.5); }
  .btn-inverse-success.disabled, .btn-inverse-success:disabled {
    color: <?php echo $color; ?>;
    background-color: transparent; }
  .btn-inverse-success.active, .btn-inverse-success:active,
  .show > .btn-inverse-success.dropdown-toggle {
    color: #ffffff;
    background-color: <?php echo $color; ?>;
    border-color: <?php echo $color; ?>; }

.btn-success:not(.btn-light) {
  color: #ffffff; }
  .btn-success:not(.btn-light):hover, .btn-success:not(.btn-light):focus, .btn-success:not(.btn-light):active {
    color: #ffffff; }
  .btn-success:not(.btn-light):focus, .btn-success:not(.btn-light):active {
    background: <?php echo $color; ?>;
    border-color: <?php echo $color; ?>; }

.btn-outline-success:hover, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:hover, .btn-outline-success:focus, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:focus, .btn-outline-success:active, .editable-container.editable-inline .editableform .control-group .editable-buttons .editable-submit:active {
  background: <?php echo $color; ?>;
  color: #ffffff; }

.btn-inverse-info {
  background-color: rgba(142, 50, 233, 0.2);
  background-image: none;
  border-color: rgba(142, 50, 233, 0); }
  .btn-inverse-info:not(.btn-inverse-light) {
    color: #8e32e9; }
  .btn-inverse-info:hover {
    color: #ffffff;
    background-color: #8e32e9;
    border-color: #8e32e9; }
  .btn-inverse-info.focus, .btn-inverse-info:focus {
    -webkit-box-shadow: 0 0 0 3px rgba(142, 50, 233, 0.5);
    box-shadow: 0 0 0 3px rgba(142, 50, 233, 0.5); }
  .btn-inverse-info.disabled, .btn-inverse-info:disabled {
    color: #8e32e9;
    background-color: transparent; }
  .btn-inverse-info.active, .btn-inverse-info:active,
  .show > .btn-inverse-info.dropdown-toggle {
    color: #ffffff;
    background-color: #8e32e9;
    border-color: #8e32e9; }

.btn-info:not(.btn-light) {
  color: #ffffff; }
  .btn-info:not(.btn-light):hover, .btn-info:not(.btn-light):focus, .btn-info:not(.btn-light):active {
    color: #ffffff; }
  .btn-info:not(.btn-light):focus, .btn-info:not(.btn-light):active {
    background: #8e32e9;
    border-color: #8e32e9; }

.btn-outline-info:hover, .btn-outline-info:focus, .btn-outline-info:active {
  background: #8e32e9;
  color: #ffffff; }

.btn-inverse-warning {
  background-color: rgba(255, 222, 115, 0.2);
  background-image: none;
  border-color: rgba(255, 222, 115, 0); }
  .btn-inverse-warning:not(.btn-inverse-light) {
    color: #ffde73; }
  .btn-inverse-warning:hover {
    color: #ffffff;
    background-color: #ffde73;
    border-color: #ffde73; }
  .btn-inverse-warning.focus, .btn-inverse-warning:focus {
    -webkit-box-shadow: 0 0 0 3px rgba(255, 222, 115, 0.5);
    box-shadow: 0 0 0 3px rgba(255, 222, 115, 0.5); }
  .btn-inverse-warning.disabled, .btn-inverse-warning:disabled {
    color: #ffde73;
    background-color: transparent; }
  .btn-inverse-warning.active, .btn-inverse-warning:active,
  .show > .btn-inverse-warning.dropdown-toggle {
    color: #ffffff;
    background-color: #ffde73;
    border-color: #ffde73; }

.btn-warning:not(.btn-light) {
  color: #ffffff; }
  .btn-warning:not(.btn-light):hover, .btn-warning:not(.btn-light):focus, .btn-warning:not(.btn-light):active {
    color: #ffffff; }
  .btn-warning:not(.btn-light):focus, .btn-warning:not(.btn-light):active {
    background: #ffde73;
    border-color: #ffde73; }

.btn-outline-warning:hover, .btn-outline-warning:focus, .btn-outline-warning:active {
  background: #ffde73;
  color: #ffffff; }

.btn-inverse-danger {
  background-color: rgba(255, 77, 107, 0.2);
  background-image: none;
  border-color: rgba(255, 77, 107, 0); }
  .btn-inverse-danger:not(.btn-inverse-light) {
    color: #ff4d6b; }
  .btn-inverse-danger:hover {
    color: #ffffff;
    background-color: #ff4d6b;
    border-color: #ff4d6b; }
  .btn-inverse-danger.focus, .btn-inverse-danger:focus {
    -webkit-box-shadow: 0 0 0 3px rgba(255, 77, 107, 0.5);
    box-shadow: 0 0 0 3px rgba(255, 77, 107, 0.5); }
  .btn-inverse-danger.disabled, .btn-inverse-danger:disabled {
    color: #ff4d6b;
    background-color: transparent; }
  .btn-inverse-danger.active, .btn-inverse-danger:active,
  .show > .btn-inverse-danger.dropdown-toggle {
    color: #ffffff;
    background-color: #ff4d6b;
    border-color: #ff4d6b; }

.btn-danger:not(.btn-light) {
  color: #ffffff; }
  .btn-danger:not(.btn-light):hover, .btn-danger:not(.btn-light):focus, .btn-danger:not(.btn-light):active {
    color: #ffffff; }
  .btn-danger:not(.btn-light):focus, .btn-danger:not(.btn-light):active {
    background: #ff4d6b;
    border-color: #ff4d6b; }

.btn-outline-danger:hover, .btn-outline-danger:focus, .btn-outline-danger:active {
  background: #ff4d6b;
  color: #ffffff; }

.btn-inverse-light {
  background-color: rgba(248, 249, 250, 0.2);
  background-image: none;
  border-color: rgba(248, 249, 250, 0); }
  .btn-inverse-light:not(.btn-inverse-light) {
    color: #f8f9fa; }
  .btn-inverse-light:hover {
    color: #ffffff;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }
  .btn-inverse-light.focus, .btn-inverse-light:focus {
    -webkit-box-shadow: 0 0 0 3px rgba(248, 249, 250, 0.5);
    box-shadow: 0 0 0 3px rgba(248, 249, 250, 0.5); }
  .btn-inverse-light.disabled, .btn-inverse-light:disabled {
    color: #f8f9fa;
    background-color: transparent; }
  .btn-inverse-light.active, .btn-inverse-light:active,
  .show > .btn-inverse-light.dropdown-toggle {
    color: #ffffff;
    background-color: #f8f9fa;
    border-color: #f8f9fa; }

.btn-light:not(.btn-light) {
  color: #ffffff; }
  .btn-light:not(.btn-light):hover, .btn-light:not(.btn-light):focus, .btn-light:not(.btn-light):active {
    color: #ffffff; }
  .btn-light:not(.btn-light):focus, .btn-light:not(.btn-light):active {
    background: #f8f9fa;
    border-color: #f8f9fa; }

.btn-outline-light:hover, .btn-outline-light:focus, .btn-outline-light:active {
  background: #f8f9fa;
  color: #ffffff; }

.btn-inverse-dark {
  background-color: rgba(62, 75, 91, 0.2);
  background-image: none;
  border-color: rgba(62, 75, 91, 0); }
  .btn-inverse-dark:not(.btn-inverse-light) {
    color: #3e4b5b; }
  .btn-inverse-dark:hover {
    color: #ffffff;
    background-color: #3e4b5b;
    border-color: #3e4b5b; }
  .btn-inverse-dark.focus, .btn-inverse-dark:focus {
    -webkit-box-shadow: 0 0 0 3px rgba(62, 75, 91, 0.5);
    box-shadow: 0 0 0 3px rgba(62, 75, 91, 0.5); }
  .btn-inverse-dark.disabled, .btn-inverse-dark:disabled {
    color: #3e4b5b;
    background-color: transparent; }
  .btn-inverse-dark.active, .btn-inverse-dark:active,
  .show > .btn-inverse-dark.dropdown-toggle {
    color: #ffffff;
    background-color: #3e4b5b;
    border-color: #3e4b5b; }

.btn-dark:not(.btn-light) {
  color: #ffffff; }
  .btn-dark:not(.btn-light):hover, .btn-dark:not(.btn-light):focus, .btn-dark:not(.btn-light):active {
    color: #ffffff; }
  .btn-dark:not(.btn-light):focus, .btn-dark:not(.btn-light):active {
    background: #3e4b5b;
    border-color: #3e4b5b; }

.btn-outline-dark:hover, .btn-outline-dark:focus, .btn-outline-dark:active {
  background: #3e4b5b;
  color: #ffffff; }

/* Breadcrumbs */
.breadcrumb {
  border: 1px solid #e8e5e5; }
  .breadcrumb .breadcrumb-item {
    font-size: 0.875rem; }
    .breadcrumb .breadcrumb-item.active {
      color: rgba(52, 58, 64, 0.8); }
  .breadcrumb.breadcrumb-custom {
    padding: 0 0;
    border-color: #dbe3e6; }
    .breadcrumb.breadcrumb-custom .breadcrumb-item {
      font-size: 0.875rem;
      background: #dbe3e6;
      padding: 0.56rem 10px;
      color: #000;
      display: inline-block;
      vertical-align: top; }
      .breadcrumb.breadcrumb-custom .breadcrumb-item:last-child {
        background: transparent; }
      .breadcrumb.breadcrumb-custom .breadcrumb-item:before {
        content: ""; }
      .breadcrumb.breadcrumb-custom .breadcrumb-item a {
        position: relative;
        color: inherit;
        border: 1px solid #dbe3e6;
        display: inline-block;
        vertical-align: top; }
        .breadcrumb.breadcrumb-custom .breadcrumb-item a:before, .breadcrumb.breadcrumb-custom .breadcrumb-item a:after {
          position: absolute;
          top: -9px;
          width: 0;
          height: 0;
          content: "";
          border-top: 21px solid transparent;
          border-bottom: 21px solid transparent; }
        .breadcrumb.breadcrumb-custom .breadcrumb-item a:before {
          right: -22px;
          z-index: 3;
          border-left-color: #dbe3e6;
          border-left-style: solid;
          border-left-width: 12px; }
        .breadcrumb.breadcrumb-custom .breadcrumb-item a:after {
          border-top: 21px solid transparent;
          border-bottom: 22px solid transparent;
          border-left: 12px solid #ffffff;
          top: -9px;
          right: -23px; }
      .breadcrumb.breadcrumb-custom .breadcrumb-item span {
        display: inline-block;
        vertical-align: top; }
      .breadcrumb.breadcrumb-custom .breadcrumb-item.active {
        color: rgba(52, 58, 64, 0.8); }
  .breadcrumb.bg-success, .swal2-modal .swal2-buttonswrapper .breadcrumb.swal2-styled.swal2-confirm, .breadcrumb.bg-dark, .breadcrumb.bg-danger, .breadcrumb.bg-warning, .breadcrumb.bg-primary, .breadcrumb.bg-info {
    border: none; }
    .breadcrumb.bg-success .breadcrumb-item, .swal2-modal .swal2-buttonswrapper .breadcrumb.swal2-styled.swal2-confirm .breadcrumb-item, .breadcrumb.bg-dark .breadcrumb-item, .breadcrumb.bg-danger .breadcrumb-item, .breadcrumb.bg-warning .breadcrumb-item, .breadcrumb.bg-primary .breadcrumb-item, .breadcrumb.bg-info .breadcrumb-item {
      color: #ffffff; }
      .breadcrumb.bg-success .breadcrumb-item:before, .swal2-modal .swal2-buttonswrapper .breadcrumb.swal2-styled.swal2-confirm .breadcrumb-item:before, .breadcrumb.bg-dark .breadcrumb-item:before, .breadcrumb.bg-danger .breadcrumb-item:before, .breadcrumb.bg-warning .breadcrumb-item:before, .breadcrumb.bg-primary .breadcrumb-item:before, .breadcrumb.bg-info .breadcrumb-item:before {
        color: inherit; }
      .breadcrumb.bg-success .breadcrumb-item a, .swal2-modal .swal2-buttonswrapper .breadcrumb.swal2-styled.swal2-confirm .breadcrumb-item a, .breadcrumb.bg-success .breadcrumb-item span, .swal2-modal .swal2-buttonswrapper .breadcrumb.swal2-styled.swal2-confirm .breadcrumb-item span, .breadcrumb.bg-dark .breadcrumb-item a, .breadcrumb.bg-dark .breadcrumb-item span, .breadcrumb.bg-danger .breadcrumb-item a, .breadcrumb.bg-danger .breadcrumb-item span, .breadcrumb.bg-warning .breadcrumb-item a, .breadcrumb.bg-warning .breadcrumb-item span, .breadcrumb.bg-primary .breadcrumb-item a, .breadcrumb.bg-primary .breadcrumb-item span, .breadcrumb.bg-info .breadcrumb-item a, .breadcrumb.bg-info .breadcrumb-item span {
        color: inherit; }

/* inverse breadcrumb */
.bg-inverse-primary, .image-grouped .text-avatar {
  background: #8aeef1;
  border-color: #1bdbe0; }
  .bg-inverse-primary .breadcrumb-item, .image-grouped .text-avatar .breadcrumb-item {
    color: #1bdbe0; }
    .bg-inverse-primary .breadcrumb-item:before, .image-grouped .text-avatar .breadcrumb-item:before {
      color: inherit; }
    .bg-inverse-primary .breadcrumb-item a, .image-grouped .text-avatar .breadcrumb-item a {
      color: inherit; }
  .bg-inverse-primary.breadcrumb-custom, .image-grouped .breadcrumb-custom.text-avatar {
    background: transparent; }
    .bg-inverse-primary.breadcrumb-custom .breadcrumb-item, .image-grouped .breadcrumb-custom.text-avatar .breadcrumb-item {
      background: #8aeef1; }
      .bg-inverse-primary.breadcrumb-custom .breadcrumb-item a, .image-grouped .breadcrumb-custom.text-avatar .breadcrumb-item a {
        color: #1bdbe0;
        border: none; }
        .bg-inverse-primary.breadcrumb-custom .breadcrumb-item a:before, .image-grouped .breadcrumb-custom.text-avatar .breadcrumb-item a:before {
          border-left-color: #8aeef1; }
      .bg-inverse-primary.breadcrumb-custom .breadcrumb-item span, .image-grouped .breadcrumb-custom.text-avatar .breadcrumb-item span {
        color: #1bdbe0; }
      .bg-inverse-primary.breadcrumb-custom .breadcrumb-item:last-child, .image-grouped .breadcrumb-custom.text-avatar .breadcrumb-item:last-child {
        background: transparent; }

.bg-inverse-secondary {
  background: white;
  border-color: #d8d8d8; }
  .bg-inverse-secondary .breadcrumb-item {
    color: #d8d8d8; }
    .bg-inverse-secondary .breadcrumb-item:before {
      color: inherit; }
    .bg-inverse-secondary .breadcrumb-item a {
      color: inherit; }
  .bg-inverse-secondary.breadcrumb-custom {
    background: transparent; }
    .bg-inverse-secondary.breadcrumb-custom .breadcrumb-item {
      background: white; }
      .bg-inverse-secondary.breadcrumb-custom .breadcrumb-item a {
        color: #d8d8d8;
        border: none; }
        .bg-inverse-secondary.breadcrumb-custom .breadcrumb-item a:before {
          border-left-color: white; }
      .bg-inverse-secondary.breadcrumb-custom .breadcrumb-item span {
        color: #d8d8d8; }
      .bg-inverse-secondary.breadcrumb-custom .breadcrumb-item:last-child {
        background: transparent; }

.bg-inverse-success {
  background: #9ee7a0;
  border-color: <?php echo $color; ?>; }
  .bg-inverse-success .breadcrumb-item {
    color: <?php echo $color; ?>; }
    .bg-inverse-success .breadcrumb-item:before {
      color: inherit; }
    .bg-inverse-success .breadcrumb-item a {
      color: inherit; }
  .bg-inverse-success.breadcrumb-custom {
    background: transparent; }
    .bg-inverse-success.breadcrumb-custom .breadcrumb-item {
      background: #9ee7a0; }
      .bg-inverse-success.breadcrumb-custom .breadcrumb-item a {
        color: <?php echo $color; ?>;
        border: none; }
        .bg-inverse-success.breadcrumb-custom .breadcrumb-item a:before {
          border-left-color: #9ee7a0; }
      .bg-inverse-success.breadcrumb-custom .breadcrumb-item span {
        color: <?php echo $color; ?>; }
      .bg-inverse-success.breadcrumb-custom .breadcrumb-item:last-child {
        background: transparent; }

.bg-inverse-info {
  background: #cda5f5;
  border-color: #8e32e9; }
  .bg-inverse-info .breadcrumb-item {
    color: #8e32e9; }
    .bg-inverse-info .breadcrumb-item:before {
      color: inherit; }
    .bg-inverse-info .breadcrumb-item a {
      color: inherit; }
  .bg-inverse-info.breadcrumb-custom {
    background: transparent; }
    .bg-inverse-info.breadcrumb-custom .breadcrumb-item {
      background: #cda5f5; }
      .bg-inverse-info.breadcrumb-custom .breadcrumb-item a {
        color: #8e32e9;
        border: none; }
        .bg-inverse-info.breadcrumb-custom .breadcrumb-item a:before {
          border-left-color: #cda5f5; }
      .bg-inverse-info.breadcrumb-custom .breadcrumb-item span {
        color: #8e32e9; }
      .bg-inverse-info.breadcrumb-custom .breadcrumb-item:last-child {
        background: transparent; }

.bg-inverse-warning {
  background: #fffcf3;
  border-color: #ffde73; }
  .bg-inverse-warning .breadcrumb-item {
    color: #ffde73; }
    .bg-inverse-warning .breadcrumb-item:before {
      color: inherit; }
    .bg-inverse-warning .breadcrumb-item a {
      color: inherit; }
  .bg-inverse-warning.breadcrumb-custom {
    background: transparent; }
    .bg-inverse-warning.breadcrumb-custom .breadcrumb-item {
      background: #fffcf3; }
      .bg-inverse-warning.breadcrumb-custom .breadcrumb-item a {
        color: #ffde73;
        border: none; }
        .bg-inverse-warning.breadcrumb-custom .breadcrumb-item a:before {
          border-left-color: #fffcf3; }
      .bg-inverse-warning.breadcrumb-custom .breadcrumb-item span {
        color: #ffde73; }
      .bg-inverse-warning.breadcrumb-custom .breadcrumb-item:last-child {
        background: transparent; }

.bg-inverse-danger {
  background: #ffcdd5;
  border-color: #ff4d6b; }
  .bg-inverse-danger .breadcrumb-item {
    color: #ff4d6b; }
    .bg-inverse-danger .breadcrumb-item:before {
      color: inherit; }
    .bg-inverse-danger .breadcrumb-item a {
      color: inherit; }
  .bg-inverse-danger.breadcrumb-custom {
    background: transparent; }
    .bg-inverse-danger.breadcrumb-custom .breadcrumb-item {
      background: #ffcdd5; }
      .bg-inverse-danger.breadcrumb-custom .breadcrumb-item a {
        color: #ff4d6b;
        border: none; }
        .bg-inverse-danger.breadcrumb-custom .breadcrumb-item a:before {
          border-left-color: #ffcdd5; }
      .bg-inverse-danger.breadcrumb-custom .breadcrumb-item span {
        color: #ff4d6b; }
      .bg-inverse-danger.breadcrumb-custom .breadcrumb-item:last-child {
        background: transparent; }

.bg-inverse-light {
  background: white;
  border-color: #f8f9fa; }
  .bg-inverse-light .breadcrumb-item {
    color: #f8f9fa; }
    .bg-inverse-light .breadcrumb-item:before {
      color: inherit; }
    .bg-inverse-light .breadcrumb-item a {
      color: inherit; }
  .bg-inverse-light.breadcrumb-custom {
    background: transparent; }
    .bg-inverse-light.breadcrumb-custom .breadcrumb-item {
      background: white; }
      .bg-inverse-light.breadcrumb-custom .breadcrumb-item a {
        color: #f8f9fa;
        border: none; }
        .bg-inverse-light.breadcrumb-custom .breadcrumb-item a:before {
          border-left-color: white; }
      .bg-inverse-light.breadcrumb-custom .breadcrumb-item span {
        color: #f8f9fa; }
      .bg-inverse-light.breadcrumb-custom .breadcrumb-item:last-child {
        background: transparent; }

.bg-inverse-dark {
  background: #778aa2;
  border-color: #3e4b5b; }
  .bg-inverse-dark .breadcrumb-item {
    color: #3e4b5b; }
    .bg-inverse-dark .breadcrumb-item:before {
      color: inherit; }
    .bg-inverse-dark .breadcrumb-item a {
      color: inherit; }
  .bg-inverse-dark.breadcrumb-custom {
    background: transparent; }
    .bg-inverse-dark.breadcrumb-custom .breadcrumb-item {
      background: #778aa2; }
      .bg-inverse-dark.breadcrumb-custom .breadcrumb-item a {
        color: #3e4b5b;
        border: none; }
        .bg-inverse-dark.breadcrumb-custom .breadcrumb-item a:before {
          border-left-color: #778aa2; }
      .bg-inverse-dark.breadcrumb-custom .breadcrumb-item span {
        color: #3e4b5b; }
      .bg-inverse-dark.breadcrumb-custom .breadcrumb-item:last-child {
        background: transparent; }

/* Cards */
.card {
  border: 0; }
  .card .card-body {
    padding: 1.875rem 1.875rem; }
    .card .card-body + .card-body {
      padding-top: 1rem; }
  .card .card-title {
    color: #343a40;
    margin-bottom: .75rem;
    text-transform: capitalize;
    font-family: "Open Sans", sans-serif;
    font-weight: 600;
    font-size: 1.125rem; }
  .card .card-subtitle {
    font-family: "Open Sans", sans-serif;
    margin-top: 0.625rem;
    margin-bottom: 0.625rem; }
  .card .card-description {
    color: #76838f;
    margin-bottom: 1.5rem;
    font-family: "Open Sans", sans-serif; }
  .card.card-outline-success {
    border: 1px solid <?php echo $color; ?>; }
  .card.card-outline-primary {
    border: 1px solid #1bdbe0; }
  .card.card-outline-warning {
    border: 1px solid #ffde73; }
  .card.card-outline-danger {
    border: 1px solid #ff4d6b; }
  .card.card-rounded {
    border-radius: 5px; }
  .card.card-faded {
    background: #b5b0b2;
    border-color: #b5b0b2; }
  .card.card-circle-progress {
    color: #ffffff;
    text-align: center; }
  .card.card-img-holder {
    position: relative; }
    .card.card-img-holder .card-img-absolute {
      position: absolute;
      top: 0;
      right: 0;
      height: 100%; }

.card-inverse-primary {
  background: rgba(27, 219, 224, 0.2);
  border: 1px solid #19c9ce;
  color: #15a6aa; }

.card-inverse-secondary {
  background: rgba(216, 216, 216, 0.2);
  border: 1px solid #c7c7c7;
  color: #a4a4a4; }

.card-inverse-success {
  background: rgba(56, 206, 60, 0.2);
  border: 1px solid #34be37;
  color: #2b9d2e; }

.card-inverse-info {
  background: rgba(142, 50, 233, 0.2);
  border: 1px solid #832ed6;
  color: #6c26b1; }

.card-inverse-warning {
  background: rgba(255, 222, 115, 0.2);
  border: 1px solid #ebcc6a;
  color: #c2a957; }

.card-inverse-danger {
  background: rgba(255, 77, 107, 0.2);
  border: 1px solid #eb4762;
  color: #c23b51; }

.card-inverse-light {
  background: rgba(248, 249, 250, 0.2);
  border: 1px solid #e4e5e6;
  color: #bcbdbe; }

.card-inverse-dark {
  background: rgba(62, 75, 91, 0.2);
  border: 1px solid #394554;
  color: #2f3945; }

/* Checkboxes and Radios */
.form-check {
  position: relative;
  display: block;
  margin-top: 15px;
  margin-bottom: 10px;
  padding-left: 0; }
  .form-check .form-check-label {
    display: block;
    margin-left: 1.75rem;
    font-size: 0.875rem;
    line-height: 1.5; }
    .rtl .form-check .form-check-label {
      margin-left: 0;
      margin-right: 1.75rem; }
    .form-check .form-check-label input {
      position: absolute;
      top: 0;
      left: 0;
      margin-left: 0;
      margin-top: 0;
      z-index: 1;
      cursor: pointer;
      opacity: 0;
      filter: alpha(opacity=0); }
      .rtl .form-check .form-check-label input {
        left: auto;
        right: 0; }
    .form-check .form-check-label input[type="checkbox"] + .input-helper:before, .form-check .form-check-label input[type="checkbox"] + .input-helper:after {
      position: absolute;
      top: 0;
      left: 0; }
      .rtl .form-check .form-check-label input[type="checkbox"] + .input-helper:before, .rtl .form-check .form-check-label input[type="checkbox"] + .input-helper:after {
        left: auto;
        right: 0; }
    .form-check .form-check-label input[type="checkbox"] + .input-helper:before {
      content: "";
      width: 18px;
      height: 18px;
      border-radius: 2px;
      border: solid #1bdbe0;
      border-width: 2px;
      -webkit-transition: all;
      transition: all;
      transition-duration: 0s;
      -webkit-transition-duration: 250ms;
      transition-duration: 250ms; }
    .form-check .form-check-label input[type="checkbox"] + .input-helper:after {
      -webkit-transition: all;
      transition: all;
      transition-duration: 0s;
      -webkit-transition-duration: 250ms;
      transition-duration: 250ms;
      opacity: 0;
      filter: alpha(opacity=0);
      -webkit-transform: scale(0);
      transform: scale(0);
      content: "";
      height: 12px;
      width: 5px;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      border-style: solid;
      border-width: 2px;
      border-color: transparent #ffffff #ffffff transparent;
      left: 7px;
      top: 1px;
      color: #ffffff; }
    .form-check .form-check-label input[type="checkbox"]:checked + .input-helper:before {
      background: #1bdbe0;
      border-width: 0; }
    .form-check .form-check-label input[type="checkbox"]:checked + .input-helper:after {
      opacity: 1;
      line-height: 18px;
      filter: alpha(opacity=100); }
    .form-check .form-check-label input[type="checkbox"]:disabled + .input-helper:before {
      border-color: #e8e5e5; }
    .form-check .form-check-label input[type="checkbox"]:disabled:checked + .input-helper:after {
      border-color: transparent #e8e5e5 #e8e5e5 transparent;
      color: #ffffff; }
    .form-check .form-check-label input[type="radio"] + .input-helper:before {
      position: absolute;
      content: "";
      top: 0;
      left: 0;
      border: solid #1bdbe0;
      border-width: 2px;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      -webkit-transition: all;
      transition: all;
      transition-duration: 0s;
      -webkit-transition-duration: 250ms;
      transition-duration: 250ms; }
      .rtl .form-check .form-check-label input[type="radio"] + .input-helper:before {
        left: auto;
        right: 0; }
    .form-check .form-check-label input[type="radio"] + .input-helper:after {
      content: "";
      width: 8px;
      height: 8px;
      background: #ffffff;
      border-radius: 50%;
      top: 6px;
      left: 6px;
      -webkit-transition: all;
      transition: all;
      transition-duration: 0s;
      -webkit-transition-duration: 250ms;
      transition-duration: 250ms;
      opacity: 0;
      filter: alpha(opacity=0);
      -webkit-transform: scale(0);
      transform: scale(0);
      position: absolute; }
      .rtl .form-check .form-check-label input[type="radio"] + .input-helper:after {
        left: auto;
        right: 6px; }
    .form-check .form-check-label input[type="radio"]:checked + .input-helper:before {
      background: #1bdbe0;
      border-width: 0; }
    .form-check .form-check-label input[type="radio"]:checked + .input-helper:after {
      opacity: 1;
      line-height: 1.5;
      filter: alpha(opacity=100);
      -webkit-transform: scale(1);
      transform: scale(1); }
    .form-check .form-check-label input[type="radio"]:disabled + .input-helper:before {
      border-color: #e8e5e5; }
    .form-check .form-check-label input[type="radio"]:disabled:checked + .input-helper:before {
      background: #e8e5e5; }
    .form-check .form-check-label input[type="radio"]:disabled:checked + .input-helper:after {
      background: #ffffff; }

.form-check-primary.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-primary.form-check label input[type="radio"] + .input-helper:before {
  border-color: #1bdbe0; }

.form-check-primary.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-primary.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #1bdbe0; }

.form-check-secondary.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-secondary.form-check label input[type="radio"] + .input-helper:before {
  border-color: #d8d8d8; }

.form-check-secondary.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-secondary.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #d8d8d8; }

.form-check-success.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-success.form-check label input[type="radio"] + .input-helper:before {
  border-color: <?php echo $color; ?>; }

.form-check-success.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-success.form-check label input[type="radio"]:checked + .input-helper:before {
  background: <?php echo $color; ?>; }

.form-check-info.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-info.form-check label input[type="radio"] + .input-helper:before {
  border-color: #8e32e9; }

.form-check-info.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-info.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #8e32e9; }

.form-check-warning.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-warning.form-check label input[type="radio"] + .input-helper:before {
  border-color: #ffde73; }

.form-check-warning.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-warning.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #ffde73; }

.form-check-danger.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-danger.form-check label input[type="radio"] + .input-helper:before {
  border-color: #ff4d6b; }

.form-check-danger.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-danger.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #ff4d6b; }

.form-check-light.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-light.form-check label input[type="radio"] + .input-helper:before {
  border-color: #f8f9fa; }

.form-check-light.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-light.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #f8f9fa; }

.form-check-dark.form-check label input[type="checkbox"] + .input-helper:before,
.form-check-dark.form-check label input[type="radio"] + .input-helper:before {
  border-color: #3e4b5b; }

.form-check-dark.form-check label input[type="checkbox"]:checked + .input-helper:before,
.form-check-dark.form-check label input[type="radio"]:checked + .input-helper:before {
  background: #3e4b5b; }

/* Dropdowns */
.dropdown .dropdown-toggle:after {
  border-top: 0;
  border-right: 0;
  border-left: 0;
  border-bottom: 0;
  font-family: "simple-line-icons";
  font-size: 14px;
  content: "\e604";
  width: auto;
  height: auto;
  vertical-align: baseline;
  font-size: .75rem; }

.dropdown .dropdown-menu {
  margin-top: .75rem;
  font-size: 0.875rem;
  -webkit-box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35);
  box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35); }
  .dropdown .dropdown-menu .dropdown-item {
    font-size: 1rem;
    padding: .25rem 1.5rem; }
    .dropdown .dropdown-menu .dropdown-item:active {
      background: initial; }

/* Forms */
.form-group {
  margin-bottom: 1.5rem; }

.input-group-append,
.input-group-prepend {
  color: #c9c8c8;
  width: auto;
  border: none; }
  .input-group-append .input-group-text,
  .input-group-prepend .input-group-text {
    border-color: #e8e5e5;
    padding: 0.94rem 0.75rem;
    color: #c9c8c8; }

.form-control, .asColorPicker-input, .dataTables_wrapper select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text],
.jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .select2-container--default .select2-selection--single, .select2-container--default .select2-selection--single .select2-search__field, .typeahead,
.tt-query,
.tt-hint {
  border: 1px solid #e8e5e5;
  font-family: "Open Sans", sans-serif;
  font-size: 0.8125rem; }

select.form-control, select.asColorPicker-input, .dataTables_wrapper select,
.jsgrid .jsgrid-table .jsgrid-filter-row select, .select2-container--default select.select2-selection--single, .select2-container--default .select2-selection--single select.select2-search__field, select.typeahead,
select.tt-query,
select.tt-hint {
  padding: .4375rem .75rem;
  border: 0;
  outline: 1px solid #e8e5e5;
  color: #c9c8c8; }
  select.form-control:focus, select.asColorPicker-input:focus, .dataTables_wrapper select:focus,
  .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .select2-container--default select.select2-selection--single:focus, .select2-container--default .select2-selection--single select.select2-search__field:focus, select.typeahead:focus,
  select.tt-query:focus,
  select.tt-hint:focus {
    outline: 1px solid #e8e5e5; }
  select.form-control.border-primary, select.border-primary.asColorPicker-input, .dataTables_wrapper select.border-primary,
  .jsgrid .jsgrid-table .jsgrid-filter-row select.border-primary, .select2-container--default select.border-primary.select2-selection--single, .select2-container--default .select2-selection--single select.border-primary.select2-search__field, select.border-primary.typeahead,
  select.border-primary.tt-query,
  select.border-primary.tt-hint {
    outline: 1px solid #1bdbe0; }
    select.form-control.border-primary:focus, select.border-primary.asColorPicker-input:focus, .dataTables_wrapper select.border-primary:focus,
    .jsgrid .jsgrid-table .jsgrid-filter-row select.border-primary:focus, .select2-container--default select.border-primary.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-primary.select2-search__field:focus, select.border-primary.typeahead:focus,
    select.border-primary.tt-query:focus,
    select.border-primary.tt-hint:focus {
      outline: 1px solid #1bdbe0; }
  select.form-control.border-secondary, select.form-control.loader-demo-box, select.loader-demo-box.asColorPicker-input, .dataTables_wrapper select.loader-demo-box,
  .jsgrid .jsgrid-table .jsgrid-filter-row select.loader-demo-box, .select2-container--default select.loader-demo-box.select2-selection--single, .select2-container--default .select2-selection--single select.loader-demo-box.select2-search__field, select.loader-demo-box.typeahead,
  select.loader-demo-box.tt-query,
  select.loader-demo-box.tt-hint, select.border-secondary.asColorPicker-input, .dataTables_wrapper select.border-secondary,
  .jsgrid .jsgrid-table .jsgrid-filter-row select.border-secondary, .select2-container--default select.border-secondary.select2-selection--single, .select2-container--default .select2-selection--single select.border-secondary.select2-search__field, select.border-secondary.typeahead,
  select.border-secondary.tt-query,
  select.border-secondary.tt-hint {
    outline: 1px solid #d8d8d8; }
    select.form-control.border-secondary:focus, select.form-control.loader-demo-box:focus, select.loader-demo-box.asColorPicker-input:focus, .dataTables_wrapper select.loader-demo-box:focus,
    .jsgrid .jsgrid-table .jsgrid-filter-row select.loader-demo-box:focus, .select2-container--default select.loader-demo-box.select2-selection--single:focus, .select2-container--default .select2-selection--single select.loader-demo-box.select2-search__field:focus, select.loader-demo-box.typeahead:focus,
    select.loader-demo-box.tt-query:focus,
    select.loader-demo-box.tt-hint:focus, select.border-secondary.asColorPicker-input:focus, .dataTables_wrapper select.border-secondary:focus,
    .jsgrid .jsgrid-table .jsgrid-filter-row select.border-secondary:focus, .select2-container--default select.border-secondary.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-secondary.select2-search__field:focus, select.border-secondary.typeahead:focus,
    select.border-secondary.tt-query:focus,
    select.border-secondary.tt-hint:focus {
      outline: 1px solid #d8d8d8; }
  select.form-control.border-success, select.border-success.asColorPicker-input, .swal2-modal .swal2-buttonswrapper select.asColorPicker-input.swal2-styled.swal2-confirm, .dataTables_wrapper select.border-success, .dataTables_wrapper .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .dataTables_wrapper select.swal2-styled.swal2-confirm,
  .jsgrid .jsgrid-table .jsgrid-filter-row select.border-success, .jsgrid .jsgrid-table .jsgrid-filter-row .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .jsgrid .jsgrid-table .jsgrid-filter-row select.swal2-styled.swal2-confirm, .select2-container--default select.border-success.select2-selection--single, .select2-container--default .swal2-modal .swal2-buttonswrapper select.select2-selection--single.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .select2-container--default select.select2-selection--single.swal2-styled.swal2-confirm, .select2-container--default .select2-selection--single select.border-success.select2-search__field, .select2-container--default .select2-selection--single .swal2-modal .swal2-buttonswrapper select.select2-search__field.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper .select2-container--default .select2-selection--single select.select2-search__field.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper select.form-control.swal2-styled.swal2-confirm, .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.typeahead,
  .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.tt-query,
  .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.tt-hint, select.border-success.typeahead,
  select.border-success.tt-query,
  select.border-success.tt-hint {
    outline: 1px solid <?php echo $color; ?>; }
    select.form-control.border-success:focus, select.border-success.asColorPicker-input:focus, .swal2-modal .swal2-buttonswrapper select.asColorPicker-input.swal2-styled.swal2-confirm:focus, .dataTables_wrapper select.border-success:focus, .dataTables_wrapper .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper .dataTables_wrapper select.swal2-styled.swal2-confirm:focus,
    .jsgrid .jsgrid-table .jsgrid-filter-row select.border-success:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper .jsgrid .jsgrid-table .jsgrid-filter-row select.swal2-styled.swal2-confirm:focus, .select2-container--default select.border-success.select2-selection--single:focus, .select2-container--default .swal2-modal .swal2-buttonswrapper select.select2-selection--single.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper .select2-container--default select.select2-selection--single.swal2-styled.swal2-confirm:focus, .select2-container--default .select2-selection--single select.border-success.select2-search__field:focus, .select2-container--default .select2-selection--single .swal2-modal .swal2-buttonswrapper select.select2-search__field.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper .select2-container--default .select2-selection--single select.select2-search__field.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper select.form-control.swal2-styled.swal2-confirm:focus, .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.typeahead:focus,
    .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.tt-query:focus,
    .swal2-modal .swal2-buttonswrapper select.swal2-styled.swal2-confirm.tt-hint:focus, select.border-success.typeahead:focus,
    select.border-success.tt-query:focus,
    select.border-success.tt-hint:focus {
      outline: 1px solid <?php echo $color; ?>; }
  select.form-control.border-info, select.border-info.asColorPicker-input, .dataTables_wrapper select.border-info,
  .jsgrid .jsgrid-table .jsgrid-filter-row select.border-info, .select2-container--default select.border-info.select2-selection--single, .select2-container--default .select2-selection--single select.border-info.select2-search__field, select.border-info.typeahead,
  select.border-info.tt-query,
  select.border-info.tt-hint {
    outline: 1px solid #8e32e9; }
    select.form-control.border-info:focus, select.border-info.asColorPicker-input:focus, .dataTables_wrapper select.border-info:focus,
    .jsgrid .jsgrid-table .jsgrid-filter-row select.border-info:focus, .select2-container--default select.border-info.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-info.select2-search__field:focus, select.border-info.typeahead:focus,
    select.border-info.tt-query:focus,
    select.border-info.tt-hint:focus {
      outline: 1px solid #8e32e9; }
  select.form-control.border-warning, select.border-warning.asColorPicker-input, .dataTables_wrapper select.border-warning,
  .jsgrid .jsgrid-table .jsgrid-filter-row select.border-warning, .select2-container--default select.border-warning.select2-selection--single, .select2-container--default .select2-selection--single select.border-warning.select2-search__field, select.border-warning.typeahead,
  select.border-warning.tt-query,
  select.border-warning.tt-hint {
    outline: 1px solid #ffde73; }
    select.form-control.border-warning:focus, select.border-warning.asColorPicker-input:focus, .dataTables_wrapper select.border-warning:focus,
    .jsgrid .jsgrid-table .jsgrid-filter-row select.border-warning:focus, .select2-container--default select.border-warning.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-warning.select2-search__field:focus, select.border-warning.typeahead:focus,
    select.border-warning.tt-query:focus,
    select.border-warning.tt-hint:focus {
      outline: 1px solid #ffde73; }
  select.form-control.border-danger, select.border-danger.asColorPicker-input, .dataTables_wrapper select.border-danger,
  .jsgrid .jsgrid-table .jsgrid-filter-row select.border-danger, .select2-container--default select.border-danger.select2-selection--single, .select2-container--default .select2-selection--single select.border-danger.select2-search__field, select.border-danger.typeahead,
  select.border-danger.tt-query,
  select.border-danger.tt-hint {
    outline: 1px solid #ff4d6b; }
    select.form-control.border-danger:focus, select.border-danger.asColorPicker-input:focus, .dataTables_wrapper select.border-danger:focus,
    .jsgrid .jsgrid-table .jsgrid-filter-row select.border-danger:focus, .select2-container--default select.border-danger.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-danger.select2-search__field:focus, select.border-danger.typeahead:focus,
    select.border-danger.tt-query:focus,
    select.border-danger.tt-hint:focus {
      outline: 1px solid #ff4d6b; }
  select.form-control.border-light, select.border-light.asColorPicker-input, .dataTables_wrapper select.border-light,
  .jsgrid .jsgrid-table .jsgrid-filter-row select.border-light, .select2-container--default select.border-light.select2-selection--single, .select2-container--default .select2-selection--single select.border-light.select2-search__field, select.border-light.typeahead,
  select.border-light.tt-query,
  select.border-light.tt-hint {
    outline: 1px solid #f8f9fa; }
    select.form-control.border-light:focus, select.border-light.asColorPicker-input:focus, .dataTables_wrapper select.border-light:focus,
    .jsgrid .jsgrid-table .jsgrid-filter-row select.border-light:focus, .select2-container--default select.border-light.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-light.select2-search__field:focus, select.border-light.typeahead:focus,
    select.border-light.tt-query:focus,
    select.border-light.tt-hint:focus {
      outline: 1px solid #f8f9fa; }
  select.form-control.border-dark, select.border-dark.asColorPicker-input, .dataTables_wrapper select.border-dark,
  .jsgrid .jsgrid-table .jsgrid-filter-row select.border-dark, .select2-container--default select.border-dark.select2-selection--single, .select2-container--default .select2-selection--single select.border-dark.select2-search__field, select.border-dark.typeahead,
  select.border-dark.tt-query,
  select.border-dark.tt-hint {
    outline: 1px solid #3e4b5b; }
    select.form-control.border-dark:focus, select.border-dark.asColorPicker-input:focus, .dataTables_wrapper select.border-dark:focus,
    .jsgrid .jsgrid-table .jsgrid-filter-row select.border-dark:focus, .select2-container--default select.border-dark.select2-selection--single:focus, .select2-container--default .select2-selection--single select.border-dark.select2-search__field:focus, select.border-dark.typeahead:focus,
    select.border-dark.tt-query:focus,
    select.border-dark.tt-hint:focus {
      outline: 1px solid #3e4b5b; }

.form-group label {
  font-size: 0.875rem;
  line-height: 1;
  vertical-align: top;
  margin-bottom: .5rem; }

.form-group.has-danger .form-control, .form-group.has-danger .asColorPicker-input, .form-group.has-danger .dataTables_wrapper select, .dataTables_wrapper .form-group.has-danger select, .form-group.has-danger .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .form-group.has-danger input[type=text],
.form-group.has-danger .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .form-group.has-danger select, .form-group.has-danger .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .form-group.has-danger input[type=number], .form-group.has-danger .select2-container--default .select2-selection--single, .select2-container--default .form-group.has-danger .select2-selection--single, .form-group.has-danger .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .form-group.has-danger .select2-search__field, .form-group.has-danger .typeahead,
.form-group.has-danger .tt-query,
.form-group.has-danger .tt-hint {
  border-color: #ff4d6b; }

.form-group .file-upload-default {
  visibility: hidden;
  position: absolute; }

.form-group .file-upload-info {
  background: transparent; }

.map-container {
  position: relative;
  min-width: 100%;
  max-width: 100%;
  display: block;
  padding: 35% 0;
  overflow: hidden;
  border-radius: 5px; }
  .map-container .google-map {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 100%; }
    .map-container .google-map.no-controls .gmnoprint, .map-container .google-map.no-controls .gm-style-cc {
      display: none; }

/* Icons */
.icons-list {
  border-left: 1px solid #e8e5e5;
  border-top: 1px solid #e8e5e5; }
  .icons-list > div {
    background: #fff;
    border-bottom: 1px solid #e8e5e5;
    border-right: 1px solid #e8e5e5;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding: 15px 15px;
    font-family: "Open Sans", sans-serif;
    font-size: 0.875rem; }
    .icons-list > div i {
      display: inline-block;
      font-size: 20px;
      width: 40px;
      text-align: left;
      color: #1bdbe0; }

/* Loaders */
#pgloading {
  position: static; }
  #pgloading .bokeh {
    font-size: 100px;
    width: 1em;
    height: 1em;
    position: relative;
    margin: 0 auto;
    border-radius: 50%;
    border: 0.01em solid #e8e5e5;
    list-style: none;
    padding: 0; }
    #pgloading .bokeh li {
      position: absolute;
      width: .2em;
      height: .2em;
      border-radius: 50%; }
      #pgloading .bokeh li:nth-child(1) {
        left: 50%;
        top: 0;
        margin: 0 0 0 -.1em;
        background: <?php echo $color; ?>;
        -webkit-transform-origin: 50% 250%;
        transform-origin: 50% 250%;
        -webkit-animation: rota 1.13s linear infinite, opa 3.67s ease-in-out infinite alternate;
        animation: rota 1.13s linear infinite, opa 3.67s ease-in-out infinite alternate; }
      #pgloading .bokeh li:nth-child(2) {
        top: 50%;
        right: 0;
        margin: -.1em 0 0 0;
        background: #ff4d6b;
        -webkit-transform-origin: -150% 50%;
        transform-origin: -150% 50%;
        -webkit-animation: rota 1.86s linear infinite, opa 4.29s ease-in-out infinite alternate;
        animation: rota 1.86s linear infinite, opa 4.29s ease-in-out infinite alternate; }
      #pgloading .bokeh li:nth-child(3) {
        left: 50%;
        bottom: 0;
        margin: 0 0 0 -.1em;
        background: #ffde73;
        -webkit-transform-origin: 50% -150%;
        transform-origin: 50% -150%;
        -webkit-animation: rota 1.45s linear infinite, opa 5.12s ease-in-out infinite alternate;
        animation: rota 1.45s linear infinite, opa 5.12s ease-in-out infinite alternate; }
      #pgloading .bokeh li:nth-child(4) {
        top: 50%;
        left: 0;
        margin: -.1em 0 0 0;
        background: #1bdbe0;
        -webkit-transform-origin: 250% 50%;
        transform-origin: 250% 50%;
        -webkit-animation: rota 1.72s linear infinite, opa 5.25s ease-in-out infinite alternate;
        animation: rota 1.72s linear infinite, opa 5.25s ease-in-out infinite alternate; }

@-webkit-keyframes rota {
  from { }
  to {
    -webkit-transform: rotate(360deg); } }

@keyframes rota {
  from { }
  to {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

@-webkit-keyframes opa {
  0% { }
  12.0% {
    opacity: 0.80; }
  19.5% {
    opacity: 0.88; }
  37.2% {
    opacity: 0.64; }
  40.5% {
    opacity: 0.52; }
  52.7% {
    opacity: 0.69; }
  60.2% {
    opacity: 0.60; }
  66.6% {
    opacity: 0.52; }
  70.0% {
    opacity: 0.63; }
  79.9% {
    opacity: 0.60; }
  84.2% {
    opacity: 0.75; }
  91.0% {
    opacity: 0.87; } }

@keyframes opa {
  0% { }
  12.0% {
    opacity: 0.80; }
  19.5% {
    opacity: 0.88; }
  37.2% {
    opacity: 0.64; }
  40.5% {
    opacity: 0.52; }
  52.7% {
    opacity: 0.69; }
  60.2% {
    opacity: 0.60; }
  66.6% {
    opacity: 0.52; }
  70.0% {
    opacity: 0.63; }
  79.9% {
    opacity: 0.60; }
  84.2% {
    opacity: 0.75; }
  91.0% {
    opacity: 0.87; } }

.glowing-loader {
  position: relative; }

.s2 {
  position: absolute;
  height: 70px;
  width: 70px;
  top: 50px;
  background-color: transparent;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%); }

.s1 {
  position: absolute;
  height: 70px;
  width: 70px;
  left: 50%;
  top: 50px;
  -webkit-transform-origin: center;
  transform-origin: center;
  -webkit-transform: translate(-50%, -50%) rotate(45deg);
  transform: translate(-50%, -50%) rotate(45deg);
  background-color: transparent; }

.bigcon {
  position: absolute;
  height: 75px;
  width: 75px;
  left: 50%;
  top: 50px;
  -webkit-transform-origin: center;
  transform-origin: center;
  -webkit-transform: translate(-50%, -50%) rotate(-45deg);
  transform: translate(-50%, -50%) rotate(-45deg);
  background-color: transparent;
  -webkit-animation: bigcon 2s infinite linear;
  animation: bigcon 2s infinite linear;
  -webkit-animation-delay: 0.25s;
  animation-delay: 0.25s; }

.b {
  border-radius: 50%;
  position: absolute; }

.s {
  width: 15px;
  height: 15px;
  -webkit-animation: small 2s infinite ease;
  animation: small 2s infinite ease;
  -webkit-box-shadow: 0px 2px rgba(0, 0, 0, 0.3);
  box-shadow: 0px 2px rgba(0, 0, 0, 0.3);
  background-color: #1bdbe0; }

.s:nth-child(1) {
  top: 0%;
  left: 0%; }

.s:nth-child(2) {
  top: 0%;
  right: 0%; }

.s:nth-child(3) {
  right: 0%;
  bottom: 0%; }

.s:nth-child(4) {
  bottom: 0%;
  left: 0%; }

.big {
  width: 15px;
  height: 15px;
  border-radius: 15px;
  -webkit-box-shadow: 0px 0px 10px #1bdbe0, 0px 0px 20px #1bdbe0, 0px 0px 30px #1bdbe0, 0px 0px 50px #1bdbe0, 0px 0px 60px #1bdbe0;
  box-shadow: 0px 0px 10px #1bdbe0, 0px 0px 20px #1bdbe0, 0px 0px 30px #1bdbe0, 0px 0px 50px #1bdbe0, 0px 0px 60px #1bdbe0;
  z-index: 1;
  background-color: #1bdbe0;
  -webkit-animation: bigball 1s infinite linear;
  animation: bigball 1s infinite linear; }

.sb1 {
  -webkit-animation-delay: -1.75s;
  animation-delay: -1.75s; }

.sb6 {
  -webkit-animation-delay: -1.5s;
  animation-delay: -1.5s; }

.sb2 {
  -webkit-animation-delay: -1.25s;
  animation-delay: -1.25s; }

.sb7 {
  -webkit-animation-delay: -1s;
  animation-delay: -1s; }

.sb3 {
  -webkit-animation-delay: -0.75s;
  animation-delay: -0.75s; }

.sb8 {
  -webkit-animation-delay: -0.5s;
  animation-delay: -0.5s; }

.sb4 {
  -webkit-animation-delay: -0.25s;
  animation-delay: -0.25s; }

.sb5 {
  -webkit-animation-delay: -0s;
  animation-delay: -0s; }

@-webkit-keyframes bigcon {
  0% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: translate(-50%, -50%) rotate(45deg);
    transform: translate(-50%, -50%) rotate(45deg); }
  100% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: translate(-50%, -50%) rotate(405deg);
    transform: translate(-50%, -50%) rotate(405deg); } }

@keyframes bigcon {
  0% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: translate(-50%, -50%) rotate(45deg);
    transform: translate(-50%, -50%) rotate(45deg); }
  100% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: translate(-50%, -50%) rotate(405deg);
    transform: translate(-50%, -50%) rotate(405deg); } }

@-webkit-keyframes small {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    background-color: #73ebee; }
  10% {
    -webkit-transform: scale(1.3);
    transform: scale(1.3);
    background-color: #1bdbe0; }
  15% {
    -webkit-transform: scale(1);
    transform: scale(1); }
  25% {
    -webkit-transform: scale(1);
    transform: scale(1);
    background-color: #1bdbe0; }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    background-color: #1bdbe0; } }

@keyframes small {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
    background-color: #73ebee; }
  10% {
    -webkit-transform: scale(1.3);
    transform: scale(1.3);
    background-color: #1bdbe0; }
  15% {
    -webkit-transform: scale(1);
    transform: scale(1); }
  25% {
    -webkit-transform: scale(1);
    transform: scale(1);
    background-color: #1bdbe0; }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
    background-color: #1bdbe0; } }

/* Pixel loader */
.pixel-loader {
  width: 10px;
  height: 10px;
  background: #ffde73;
  color: #ffde73;
  margin: 80px auto;
  -webkit-box-shadow: 15px 15px  0 0, -15px -15px  0 0, 15px -15px  0 0, -15px 15px  0 0, 0 15px  0 0, 15px 0  0 0, -15px 0  0 0, 0 -15px 0 0;
  box-shadow: 15px 15px  0 0, -15px -15px  0 0, 15px -15px  0 0, -15px 15px  0 0, 0 15px  0 0, 15px 0  0 0, -15px 0  0 0, 0 -15px 0 0;
  -webkit-animation: anim 2s linear infinite;
  animation: anim 2s linear infinite; }

@-webkit-keyframes anim {
  0% {
    -webkit-filter: hue-rotate(0deg); }
  50% {
    -webkit-box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0;
    box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0; }
  75% {
    -webkit-box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0;
    box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0; }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
    -webkit-filter: hue-rotate(360deg); } }

@keyframes anim {
  0% {
    -webkit-filter: hue-rotate(0deg); }
  50% {
    -webkit-box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0;
    box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0; }
  75% {
    -webkit-box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0;
    box-shadow: 20px 20px  0 0, -20px -20px  0 0, 20px -20px  0 0, -20px 20px  0 0, 0 10px  0 0, 10px 0  0 0, -10px 0  0 0, 0 -10px 0 0; }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
    -webkit-filter: hue-rotate(360deg); } }

/* Square box loader */
@-webkit-keyframes dyinglight {
  15% {
    -webkit-transform: scale(1.6);
    transform: scale(1.6); }
  50% {
    -webkit-transform: rotate(-89deg);
    transform: rotate(-89deg); }
  100% {
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg); } }
@keyframes dyinglight {
  15% {
    -webkit-transform: scale(1.6);
    transform: scale(1.6); }
  50% {
    -webkit-transform: rotate(-89deg);
    transform: rotate(-89deg); }
  100% {
    -webkit-transform: rotate(-90deg);
    transform: rotate(-90deg); } }

.square-box-loader {
  position: absolute;
  left: 50%;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  display: inline-block; }

.square-box-loader-square {
  display: block;
  width: 30px;
  height: 30px;
  background: #1bdbe0; }

.square-box-loader-container {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  -webkit-transform-origin: 50% 50% 0;
  transform-origin: 50% 50% 0;
  -webkit-animation: dyinglight 1s ease infinite;
  animation: dyinglight 1s ease infinite;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden; }

.square-box-loader-corner-top:before,
.square-box-loader-corner-top:after,
.square-box-loader-corner-bottom:before,
.square-box-loader-corner-bottom:after {
  position: absolute;
  width: 10px;
  height: 10px;
  color: #1bdbe0;
  content: ''; }

.square-box-loader-corner-top:before {
  border-left: 1px solid;
  border-top: 1px solid;
  top: -4px;
  left: -4px; }

.square-box-loader-corner-top:after {
  border-right: 1px solid;
  border-top: 1px solid;
  top: -4px;
  right: -4px; }

.square-box-loader-corner-bottom:before {
  border-left: 1px solid;
  border-bottom: 1px solid;
  bottom: -4px;
  left: -4px; }

.square-box-loader-corner-bottom:after {
  border-right: 1px solid;
  border-bottom: 1px solid;
  bottom: -4px;
  right: -4px; }

/* Circle loader */
.circle-loader {
  width: 70px;
  height: 70px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto; }

.circle-loader:before, .circle-loader:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 100%;
  border: 10px solid transparent;
  border-top-color: #ffde73; }

.circle-loader:before {
  z-index: 100;
  -webkit-animation: spin 1s infinite;
  animation: spin 1s infinite; }

.circle-loader:after {
  border: 10px solid #d8d8d8; }

@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg); } }

/* Jumping dots loader */
.jumping-dots-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto; }

.jumping-dots-loader span {
  display: inline-block;
  width: 20px;
  height: 20px;
  border-radius: 100%;
  background-color: rgba(255, 77, 107, 0.8);
  margin: 35px 5px; }

.jumping-dots-loader span:nth-child(1) {
  -webkit-animation: bounce 1s ease-in-out infinite;
  animation: bounce 1s ease-in-out infinite; }

.jumping-dots-loader span:nth-child(2) {
  -webkit-animation: bounce 1s ease-in-out 0.33s infinite;
  animation: bounce 1s ease-in-out 0.33s infinite; }

.jumping-dots-loader span:nth-child(3) {
  -webkit-animation: bounce 1s ease-in-out 0.66s infinite;
  animation: bounce 1s ease-in-out 0.66s infinite; }

@keyframes bounce {
  0%, 75%, 100% {
    -webkit-transform: translateY(0);
    transform: translateY(0); }
  25% {
    -webkit-transform: translateY(-20px);
    transform: translateY(-20px); } }

/* Bar loader */
.bar-loader {
  width: 50px;
  height: 50px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto; }

.bar-loader span {
  display: inline-block;
  width: 5px;
  height: 30px;
  background-color: rgba(255, 77, 107, 0.7); }

.bar-loader span:nth-child(1) {
  -webkit-animation: grow 1s ease-in-out infinite;
  animation: grow 1s ease-in-out infinite; }

.bar-loader span:nth-child(2) {
  -webkit-animation: grow 1s ease-in-out 0.15s infinite;
  animation: grow 1s ease-in-out 0.15s infinite; }

.bar-loader span:nth-child(3) {
  -webkit-animation: grow 1s ease-in-out 0.30s infinite;
  animation: grow 1s ease-in-out 0.30s infinite; }

.bar-loader span:nth-child(4) {
  -webkit-animation: grow 1s ease-in-out 0.45s infinite;
  animation: grow 1s ease-in-out 0.45s infinite; }

@-webkit-keyframes grow {
  0%, 100% {
    -webkit-transform: scaleY(1);
    transform: scaleY(1); }
  50% {
    -webkit-transform: scaleY(1.8);
    transform: scaleY(1.8); } }

@keyframes grow {
  0%, 100% {
    -webkit-transform: scaleY(1);
    transform: scaleY(1); }
  50% {
    -webkit-transform: scaleY(1.8);
    transform: scaleY(1.8); } }

/* Square path loader */
.square-path-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto; }

.square-path-loader:before, .square-path-loader:after {
  content: "";
  width: 15px;
  height: 15px;
  position: absolute;
  top: 0;
  left: calc(50% - 10px);
  background-color: rgba(56, 206, 60, 0.7);
  -webkit-animation: squaremove 1s ease-in-out infinite;
  animation: squaremove 1s ease-in-out infinite; }

.square-path-loader:after {
  bottom: 0;
  -webkit-animation-delay: 0.5s;
  animation-delay: 0.5s; }

@-webkit-keyframes squaremove {
  0%, 100% {
    -webkit-transform: translate(0, 0) rotate(0);
    transform: translate(0, 0) rotate(0); }
  25% {
    -webkit-transform: translate(40px, 40px) rotate(45deg);
    transform: translate(40px, 40px) rotate(45deg); }
  50% {
    -webkit-transform: translate(0px, 80px) rotate(0deg);
    transform: translate(0px, 80px) rotate(0deg); }
  75% {
    -webkit-transform: translate(-40px, 40px) rotate(45deg);
    transform: translate(-40px, 40px) rotate(45deg); } }

@keyframes squaremove {
  0%, 100% {
    -webkit-transform: translate(0, 0) rotate(0);
    transform: translate(0, 0) rotate(0); }
  25% {
    -webkit-transform: translate(40px, 40px) rotate(45deg);
    transform: translate(40px, 40px) rotate(45deg); }
  50% {
    -webkit-transform: translate(0px, 80px) rotate(0deg);
    transform: translate(0px, 80px) rotate(0deg); }
  75% {
    -webkit-transform: translate(-40px, 40px) rotate(45deg);
    transform: translate(-40px, 40px) rotate(45deg); } }

/* Dot opacity loader */
.dot-opacity-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto; }

.dot-opacity-loader span {
  display: inline-block;
  width: 20px;
  height: 20px;
  border-radius: 100%;
  background-color: #1bdbe0;
  margin: 35px 5px;
  opacity: 0; }

.dot-opacity-loader span:nth-child(1) {
  -webkit-animation: opacitychange 1s ease-in-out infinite;
  animation: opacitychange 1s ease-in-out infinite; }

.dot-opacity-loader span:nth-child(2) {
  -webkit-animation: opacitychange 1s ease-in-out 0.33s infinite;
  animation: opacitychange 1s ease-in-out 0.33s infinite; }

.dot-opacity-loader span:nth-child(3) {
  -webkit-animation: opacitychange 1s ease-in-out 0.66s infinite;
  animation: opacitychange 1s ease-in-out 0.66s infinite; }

@-webkit-keyframes opacitychange {
  0%, 100% {
    opacity: 0; }
  60% {
    opacity: 1; } }

@keyframes opacitychange {
  0%, 100% {
    opacity: 0; }
  60% {
    opacity: 1; } }

/* Flip square */
.flip-square-loader {
  -webkit-perspective: 120px;
  -ms-perspective: 120px;
  perspective: 120px;
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto; }

.flip-square-loader:before {
  content: "";
  position: absolute;
  left: 25px;
  top: 25px;
  width: 50px;
  height: 50px;
  background-color: rgba(56, 206, 60, 0.7);
  -webkit-animation: flip 1s infinite;
  animation: flip 1s infinite; }

@keyframes flip {
  0% {
    -webkit-transform: rotate(0);
    transform: rotate(0); }
  50% {
    -webkit-transform: rotateY(180deg);
    transform: rotateY(180deg); }
  100% {
    -webkit-transform: rotateY(180deg) rotateX(180deg);
    transform: rotateY(180deg) rotateX(180deg); } }

/* Moving square loader */
.moving-square-loader {
  width: 100px;
  height: 100px;
  border-radius: 100%;
  position: relative;
  margin: 0 auto; }

.moving-square-loader:before {
  content: "";
  position: absolute;
  width: 10px;
  height: 10px;
  top: calc(50% - 10px);
  left: 0px;
  background-color: rgba(255, 77, 107, 0.7);
  -webkit-animation: rotatemove 1s infinite;
  animation: rotatemove 1s infinite; }

@-webkit-keyframes rotatemove {
  0% {
    -webkit-transform: scale(1) translateX(0px);
    transform: scale(1) translateX(0px); }
  100% {
    -webkit-transform: scale(2) translateX(45px);
    transform: scale(2) translateX(45px); } }

@keyframes rotatemove {
  0% {
    -webkit-transform: scale(1) translateX(0px);
    transform: scale(1) translateX(0px); }
  100% {
    -webkit-transform: scale(2) translateX(45px);
    transform: scale(2) translateX(45px); } }

/* Lists */
ul,
ol,
dl {
  padding-left: 1rem;
  font-size: 0.875rem; }
  ul li,
  ol li,
  dl li {
    line-height: 1.8; }

.list-ticked,
.list-arrow,
.list-star {
  list-style: none;
  padding: 0; }
  .list-ticked li,
  .list-arrow li,
  .list-star li {
    padding-left: 1.5rem; }
    .list-ticked li:before,
    .list-arrow li:before,
    .list-star li:before {
      font-family: "simple-line-icons";
      margin-left: -1.5rem;
      width: 1.5rem;
      margin-right: .5rem; }

.list-ticked li:before {
  content: '\e080';
  color: #ff4d6b; }

.list-arrow li:before {
  content: '\e606';
  color: <?php echo $color; ?>; }

.list-star li:before {
  content: '\e09b';
  color: #ffde73; }

.gradient-bullet-list {
  padding-left: 0; }
  .rtl .gradient-bullet-list {
    padding-right: 0; }
  .gradient-bullet-list li {
    position: relative;
    list-style-type: none;
    padding-left: 25px;
    line-height: 1;
    padding-bottom: 25px; }
    .gradient-bullet-list li:before, .gradient-bullet-list li:after {
      content: "";
      position: absolute; }
    .gradient-bullet-list li:before {
      top: 0;
      left: 0;
      width: 15px;
      height: 15px;
      border-radius: 100%; }
    .gradient-bullet-list li:after {
      width: 11px;
      height: 11px;
      top: 2px;
      left: 2px;
      background: #fff;
      border-radius: 100%; }
    .gradient-bullet-list li:nth-child(1):before {
      background: #ff4d6b; }
    .gradient-bullet-list li:nth-child(2):before {
      background: #8e32e9; }
    .gradient-bullet-list li:nth-child(3):before {
      background: #ffde73; }
    .gradient-bullet-list li:nth-child(4):before {
      background: <?php echo $color; ?>; }
    .gradient-bullet-list li:nth-child(5):before {
      background: #1bdbe0; }

/* Modals */
.modal .modal-dialog {
  margin-top: 100px; }
  .modal .modal-dialog .modal-content .modal-header {
    padding: 25px 26px; }
    .modal .modal-dialog .modal-content .modal-header .close span {
      font-size: 20px;
      font-weight: 400;
      color: #6a6a6a; }
  .modal .modal-dialog .modal-content .modal-body {
    padding: 35px 26px; }
  .modal .modal-dialog .modal-content .modal-footer {
    padding: 15px 31px;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap; }
    .modal .modal-dialog .modal-content .modal-footer > button {
      margin: 0.125rem; }

/* Pagination */
.pagination .page-item .page-link, .jsgrid .jsgrid-pager .page-item .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a,
.jsgrid .jsgrid-pager .jsgrid-pager-page a {
  border-color: #e8e5e5;
  color: #343a40;
  font-size: .875rem;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s; }
  .pagination .page-item .page-link:focus, .jsgrid .jsgrid-pager .page-item .page-link:focus, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link:focus, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link:focus, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a:focus,
  .jsgrid .jsgrid-pager .jsgrid-pager-page a:focus {
    background: inherit; }
  .pagination .page-item .page-link i:before, .jsgrid .jsgrid-pager .page-item .page-link i:before, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link i:before, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link i:before, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a i:before, .jsgrid .jsgrid-pager .jsgrid-pager-page a i:before {
    font-size: inherit;
    line-height: 1;
    vertical-align: middle; }

.pagination .page-item.active .page-link, .jsgrid .jsgrid-pager .page-item.active .page-link, .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .pagination .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .page-item.active .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item.active a, .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a,
.pagination .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .page-item.active .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item.active a,
.jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .pagination .page-item:hover .page-link, .jsgrid .jsgrid-pager .page-item:hover .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-page:hover .page-link, .pagination .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .page-item:hover .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item:hover a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:hover a,
.pagination .page-item:hover .jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .page-item:hover .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item:hover a,
.jsgrid .jsgrid-pager .jsgrid-pager-page:hover a, .pagination .page-item:focus .page-link, .jsgrid .jsgrid-pager .page-item:focus .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:focus .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-page:focus .page-link, .pagination .page-item:focus .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .page-item:focus .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item:focus a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:focus a,
.pagination .page-item:focus .jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .page-item:focus .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item:focus a,
.jsgrid .jsgrid-pager .jsgrid-pager-page:focus a, .pagination .page-item:active .page-link, .jsgrid .jsgrid-pager .page-item:active .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:active .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-page:active .page-link, .pagination .page-item:active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .page-item:active .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-item:active a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:active a,
.pagination .page-item:active .jsgrid .jsgrid-pager .jsgrid-pager-page a,
.jsgrid .jsgrid-pager .page-item:active .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-item:active a,
.jsgrid .jsgrid-pager .jsgrid-pager-page:active a {
  background: #2aa92d;
  border-color: #2aa92d;
  color: #ffffff; }

.pagination.flat .page-item .page-link, .jsgrid .flat.jsgrid-pager .page-item .page-link, .pagination.flat .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination.flat .jsgrid-pager-nav-button .page-link, .jsgrid .flat.jsgrid-pager .jsgrid-pager-nav-button .page-link, .pagination.flat .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination.flat .jsgrid-pager-page .page-link, .jsgrid .flat.jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.flat .page-item a, .pagination.flat .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination.flat .jsgrid-pager-nav-button a, .jsgrid .flat.jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.flat .page-item a,
.pagination.flat .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination.flat .jsgrid-pager-page a,
.jsgrid .flat.jsgrid-pager .jsgrid-pager-page a {
  border: none;
  border-radius: 2px; }

.pagination.separated .page-item, .jsgrid .separated.jsgrid-pager .page-item, .pagination.separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button, .jsgrid .jsgrid-pager .pagination.separated .jsgrid-pager-nav-button, .jsgrid .separated.jsgrid-pager .jsgrid-pager-nav-button,
.pagination.separated .jsgrid .jsgrid-pager .jsgrid-pager-page, .jsgrid .jsgrid-pager .pagination.separated .jsgrid-pager-page,
.jsgrid .separated.jsgrid-pager .jsgrid-pager-page {
  margin-left: 2px;
  margin-right: 2px; }
  .pagination.separated .page-item:first-child, .jsgrid .separated.jsgrid-pager .page-item:first-child, .pagination.separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child, .jsgrid .jsgrid-pager .pagination.separated .jsgrid-pager-nav-button:first-child, .jsgrid .separated.jsgrid-pager .jsgrid-pager-nav-button:first-child,
  .pagination.separated .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child, .jsgrid .jsgrid-pager .pagination.separated .jsgrid-pager-page:first-child,
  .jsgrid .separated.jsgrid-pager .jsgrid-pager-page:first-child {
    margin-left: 0; }
  .pagination.separated .page-item:last-child, .jsgrid .separated.jsgrid-pager .page-item:last-child, .pagination.separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child, .jsgrid .jsgrid-pager .pagination.separated .jsgrid-pager-nav-button:last-child, .jsgrid .separated.jsgrid-pager .jsgrid-pager-nav-button:last-child,
  .pagination.separated .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child, .jsgrid .jsgrid-pager .pagination.separated .jsgrid-pager-page:last-child,
  .jsgrid .separated.jsgrid-pager .jsgrid-pager-page:last-child {
    margin-right: 0; }
  .pagination.separated .page-item .page-link, .jsgrid .separated.jsgrid-pager .page-item .page-link, .pagination.separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination.separated .jsgrid-pager-nav-button .page-link, .jsgrid .separated.jsgrid-pager .jsgrid-pager-nav-button .page-link, .pagination.separated .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination.separated .jsgrid-pager-page .page-link, .jsgrid .separated.jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.separated .page-item a, .pagination.separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination.separated .jsgrid-pager-nav-button a, .jsgrid .separated.jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.separated .page-item a,
  .pagination.separated .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination.separated .jsgrid-pager-page a,
  .jsgrid .separated.jsgrid-pager .jsgrid-pager-page a {
    border-radius: 2px; }

.pagination.rounded .page-item:first-child .page-link, .pagination.loader-demo-box .page-item:first-child .page-link, .jsgrid .loader-demo-box.jsgrid-pager .page-item:first-child .page-link, .jsgrid .rounded.jsgrid-pager .page-item:first-child .page-link, .pagination.rounded .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .jsgrid-pager .pagination.rounded .jsgrid-pager-nav-button:first-child .page-link, .pagination.loader-demo-box .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .jsgrid-pager .pagination.loader-demo-box .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .loader-demo-box.jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .rounded.jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .pagination.rounded .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child .page-link, .jsgrid .jsgrid-pager .pagination.rounded .jsgrid-pager-page:first-child .page-link, .pagination.loader-demo-box .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child .page-link, .jsgrid .jsgrid-pager .pagination.loader-demo-box .jsgrid-pager-page:first-child .page-link, .jsgrid .loader-demo-box.jsgrid-pager .jsgrid-pager-page:first-child .page-link, .jsgrid .rounded.jsgrid-pager .jsgrid-pager-page:first-child .page-link, .pagination.rounded .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.rounded .page-item:first-child a, .pagination.loader-demo-box .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.loader-demo-box .page-item:first-child a, .jsgrid .loader-demo-box.jsgrid-pager .page-item:first-child .jsgrid-pager-nav-button a, .jsgrid .loader-demo-box.jsgrid-pager .jsgrid-pager-nav-button .page-item:first-child a, .jsgrid .rounded.jsgrid-pager .page-item:first-child .jsgrid-pager-nav-button a, .jsgrid .rounded.jsgrid-pager .jsgrid-pager-nav-button .page-item:first-child a, .pagination.rounded .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child a, .jsgrid .jsgrid-pager .pagination.rounded .jsgrid-pager-nav-button:first-child a, .pagination.loader-demo-box .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child a, .jsgrid .jsgrid-pager .pagination.loader-demo-box .jsgrid-pager-nav-button:first-child a, .jsgrid .loader-demo-box.jsgrid-pager .jsgrid-pager-nav-button:first-child a, .jsgrid .rounded.jsgrid-pager .jsgrid-pager-nav-button:first-child a,
.pagination.rounded .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.rounded .page-item:first-child a,
.pagination.loader-demo-box .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.loader-demo-box .page-item:first-child a,
.jsgrid .loader-demo-box.jsgrid-pager .page-item:first-child .jsgrid-pager-page a, .jsgrid .loader-demo-box.jsgrid-pager .jsgrid-pager-page .page-item:first-child a,
.jsgrid .rounded.jsgrid-pager .page-item:first-child .jsgrid-pager-page a, .jsgrid .rounded.jsgrid-pager .jsgrid-pager-page .page-item:first-child a,
.pagination.rounded .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child a, .jsgrid .jsgrid-pager .pagination.rounded .jsgrid-pager-page:first-child a,
.pagination.loader-demo-box .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child a, .jsgrid .jsgrid-pager .pagination.loader-demo-box .jsgrid-pager-page:first-child a,
.jsgrid .loader-demo-box.jsgrid-pager .jsgrid-pager-page:first-child a,
.jsgrid .rounded.jsgrid-pager .jsgrid-pager-page:first-child a {
  border-radius: 25px 0 0 25px; }

.pagination.rounded .page-item:last-child .page-link, .pagination.loader-demo-box .page-item:last-child .page-link, .jsgrid .loader-demo-box.jsgrid-pager .page-item:last-child .page-link, .jsgrid .rounded.jsgrid-pager .page-item:last-child .page-link, .pagination.rounded .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .jsgrid-pager .pagination.rounded .jsgrid-pager-nav-button:last-child .page-link, .pagination.loader-demo-box .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .jsgrid-pager .pagination.loader-demo-box .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .loader-demo-box.jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .rounded.jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .pagination.rounded .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child .page-link, .jsgrid .jsgrid-pager .pagination.rounded .jsgrid-pager-page:last-child .page-link, .pagination.loader-demo-box .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child .page-link, .jsgrid .jsgrid-pager .pagination.loader-demo-box .jsgrid-pager-page:last-child .page-link, .jsgrid .loader-demo-box.jsgrid-pager .jsgrid-pager-page:last-child .page-link, .jsgrid .rounded.jsgrid-pager .jsgrid-pager-page:last-child .page-link, .pagination.rounded .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.rounded .page-item:last-child a, .pagination.loader-demo-box .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.loader-demo-box .page-item:last-child a, .jsgrid .loader-demo-box.jsgrid-pager .page-item:last-child .jsgrid-pager-nav-button a, .jsgrid .loader-demo-box.jsgrid-pager .jsgrid-pager-nav-button .page-item:last-child a, .jsgrid .rounded.jsgrid-pager .page-item:last-child .jsgrid-pager-nav-button a, .jsgrid .rounded.jsgrid-pager .jsgrid-pager-nav-button .page-item:last-child a, .pagination.rounded .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child a, .jsgrid .jsgrid-pager .pagination.rounded .jsgrid-pager-nav-button:last-child a, .pagination.loader-demo-box .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child a, .jsgrid .jsgrid-pager .pagination.loader-demo-box .jsgrid-pager-nav-button:last-child a, .jsgrid .loader-demo-box.jsgrid-pager .jsgrid-pager-nav-button:last-child a, .jsgrid .rounded.jsgrid-pager .jsgrid-pager-nav-button:last-child a,
.pagination.rounded .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.rounded .page-item:last-child a,
.pagination.loader-demo-box .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.loader-demo-box .page-item:last-child a,
.jsgrid .loader-demo-box.jsgrid-pager .page-item:last-child .jsgrid-pager-page a, .jsgrid .loader-demo-box.jsgrid-pager .jsgrid-pager-page .page-item:last-child a,
.jsgrid .rounded.jsgrid-pager .page-item:last-child .jsgrid-pager-page a, .jsgrid .rounded.jsgrid-pager .jsgrid-pager-page .page-item:last-child a,
.pagination.rounded .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child a, .jsgrid .jsgrid-pager .pagination.rounded .jsgrid-pager-page:last-child a,
.pagination.loader-demo-box .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child a, .jsgrid .jsgrid-pager .pagination.loader-demo-box .jsgrid-pager-page:last-child a,
.jsgrid .loader-demo-box.jsgrid-pager .jsgrid-pager-page:last-child a,
.jsgrid .rounded.jsgrid-pager .jsgrid-pager-page:last-child a {
  border-radius: 0 25px 25px 0; }

.pagination.rounded-flat .page-item, .jsgrid .rounded-flat.jsgrid-pager .page-item, .pagination.rounded-flat .jsgrid .jsgrid-pager .jsgrid-pager-nav-button, .jsgrid .jsgrid-pager .pagination.rounded-flat .jsgrid-pager-nav-button, .jsgrid .rounded-flat.jsgrid-pager .jsgrid-pager-nav-button,
.pagination.rounded-flat .jsgrid .jsgrid-pager .jsgrid-pager-page, .jsgrid .jsgrid-pager .pagination.rounded-flat .jsgrid-pager-page,
.jsgrid .rounded-flat.jsgrid-pager .jsgrid-pager-page {
  margin-right: 3px;
  margin-left: 3px; }
  .pagination.rounded-flat .page-item .page-link, .jsgrid .rounded-flat.jsgrid-pager .page-item .page-link, .pagination.rounded-flat .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination.rounded-flat .jsgrid-pager-nav-button .page-link, .jsgrid .rounded-flat.jsgrid-pager .jsgrid-pager-nav-button .page-link, .pagination.rounded-flat .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination.rounded-flat .jsgrid-pager-page .page-link, .jsgrid .rounded-flat.jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.rounded-flat .page-item a, .pagination.rounded-flat .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination.rounded-flat .jsgrid-pager-nav-button a, .jsgrid .rounded-flat.jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.rounded-flat .page-item a,
  .pagination.rounded-flat .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination.rounded-flat .jsgrid-pager-page a,
  .jsgrid .rounded-flat.jsgrid-pager .jsgrid-pager-page a {
    border: none;
    border-radius: 50px; }

.pagination.rounded-separated .page-item, .jsgrid .rounded-separated.jsgrid-pager .page-item, .pagination.rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button, .jsgrid .jsgrid-pager .pagination.rounded-separated .jsgrid-pager-nav-button, .jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-nav-button,
.pagination.rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-page, .jsgrid .jsgrid-pager .pagination.rounded-separated .jsgrid-pager-page,
.jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-page {
  margin-left: 2px;
  margin-right: 2px; }
  .pagination.rounded-separated .page-item:first-child, .jsgrid .rounded-separated.jsgrid-pager .page-item:first-child, .pagination.rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child, .jsgrid .jsgrid-pager .pagination.rounded-separated .jsgrid-pager-nav-button:first-child, .jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-nav-button:first-child,
  .pagination.rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child, .jsgrid .jsgrid-pager .pagination.rounded-separated .jsgrid-pager-page:first-child,
  .jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-page:first-child {
    margin-left: 0; }
    .pagination.rounded-separated .page-item:first-child .page-link, .jsgrid .rounded-separated.jsgrid-pager .page-item:first-child .page-link, .pagination.rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .jsgrid-pager .pagination.rounded-separated .jsgrid-pager-nav-button:first-child .page-link, .jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-nav-button:first-child .page-link, .pagination.rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child .page-link, .jsgrid .jsgrid-pager .pagination.rounded-separated .jsgrid-pager-page:first-child .page-link, .jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-page:first-child .page-link, .pagination.rounded-separated .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.rounded-separated .page-item:first-child a, .jsgrid .rounded-separated.jsgrid-pager .page-item:first-child .jsgrid-pager-nav-button a, .jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-nav-button .page-item:first-child a, .pagination.rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:first-child a, .jsgrid .jsgrid-pager .pagination.rounded-separated .jsgrid-pager-nav-button:first-child a, .jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-nav-button:first-child a,
    .pagination.rounded-separated .page-item:first-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.rounded-separated .page-item:first-child a,
    .jsgrid .rounded-separated.jsgrid-pager .page-item:first-child .jsgrid-pager-page a, .jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-page .page-item:first-child a,
    .pagination.rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-page:first-child a, .jsgrid .jsgrid-pager .pagination.rounded-separated .jsgrid-pager-page:first-child a,
    .jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-page:first-child a {
      border-radius: 10px 0 0 10px; }
  .pagination.rounded-separated .page-item:last-child, .jsgrid .rounded-separated.jsgrid-pager .page-item:last-child, .pagination.rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child, .jsgrid .jsgrid-pager .pagination.rounded-separated .jsgrid-pager-nav-button:last-child, .jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-nav-button:last-child,
  .pagination.rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child, .jsgrid .jsgrid-pager .pagination.rounded-separated .jsgrid-pager-page:last-child,
  .jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-page:last-child {
    margin-right: 0; }
    .pagination.rounded-separated .page-item:last-child .page-link, .jsgrid .rounded-separated.jsgrid-pager .page-item:last-child .page-link, .pagination.rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .jsgrid-pager .pagination.rounded-separated .jsgrid-pager-nav-button:last-child .page-link, .jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-nav-button:last-child .page-link, .pagination.rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child .page-link, .jsgrid .jsgrid-pager .pagination.rounded-separated .jsgrid-pager-page:last-child .page-link, .jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-page:last-child .page-link, .pagination.rounded-separated .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.rounded-separated .page-item:last-child a, .jsgrid .rounded-separated.jsgrid-pager .page-item:last-child .jsgrid-pager-nav-button a, .jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-nav-button .page-item:last-child a, .pagination.rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button:last-child a, .jsgrid .jsgrid-pager .pagination.rounded-separated .jsgrid-pager-nav-button:last-child a, .jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-nav-button:last-child a,
    .pagination.rounded-separated .page-item:last-child .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.rounded-separated .page-item:last-child a,
    .jsgrid .rounded-separated.jsgrid-pager .page-item:last-child .jsgrid-pager-page a, .jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-page .page-item:last-child a,
    .pagination.rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-page:last-child a, .jsgrid .jsgrid-pager .pagination.rounded-separated .jsgrid-pager-page:last-child a,
    .jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-page:last-child a {
      border-radius: 0 10px 10px 0; }
  .pagination.rounded-separated .page-item .page-link, .jsgrid .rounded-separated.jsgrid-pager .page-item .page-link, .pagination.rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination.rounded-separated .jsgrid-pager-nav-button .page-link, .jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-nav-button .page-link, .pagination.rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination.rounded-separated .jsgrid-pager-page .page-link, .jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination.rounded-separated .page-item a, .pagination.rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination.rounded-separated .jsgrid-pager-nav-button a, .jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination.rounded-separated .page-item a,
  .pagination.rounded-separated .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination.rounded-separated .jsgrid-pager-page a,
  .jsgrid .rounded-separated.jsgrid-pager .jsgrid-pager-page a {
    border-radius: 2px; }

/* pagination variations */
.pagination-primary .page-item.active .page-link, .pagination-primary .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-primary .active.jsgrid-pager-nav-button .page-link, .pagination-primary .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination-primary .active.jsgrid-pager-page .page-link, .pagination-primary .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-primary .page-item.active a, .pagination-primary .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-primary .active.jsgrid-pager-nav-button a,
.pagination-primary .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-primary .page-item.active a,
.pagination-primary .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-primary .active.jsgrid-pager-page a {
  background: #1bdbe0;
  border-color: #1bdbe0; }

.pagination-primary .page-item .page-link:hover, .pagination-primary .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link:hover, .jsgrid .jsgrid-pager .pagination-primary .jsgrid-pager-nav-button .page-link:hover, .pagination-primary .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link:hover, .jsgrid .jsgrid-pager .pagination-primary .jsgrid-pager-page .page-link:hover, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-primary .page-item a:hover, .pagination-primary .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a:hover, .jsgrid .jsgrid-pager .pagination-primary .jsgrid-pager-nav-button a:hover, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-primary .page-item a:hover,
.pagination-primary .jsgrid .jsgrid-pager .jsgrid-pager-page a:hover, .jsgrid .jsgrid-pager .pagination-primary .jsgrid-pager-page a:hover {
  background: #2fe1e6;
  border-color: #1bdbe0;
  color: #ffffff; }

.pagination-secondary .page-item.active .page-link, .pagination-secondary .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-secondary .active.jsgrid-pager-nav-button .page-link, .pagination-secondary .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination-secondary .active.jsgrid-pager-page .page-link, .pagination-secondary .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-secondary .page-item.active a, .pagination-secondary .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-secondary .active.jsgrid-pager-nav-button a,
.pagination-secondary .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-secondary .page-item.active a,
.pagination-secondary .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-secondary .active.jsgrid-pager-page a {
  background: #d8d8d8;
  border-color: #d8d8d8; }

.pagination-secondary .page-item .page-link:hover, .pagination-secondary .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link:hover, .jsgrid .jsgrid-pager .pagination-secondary .jsgrid-pager-nav-button .page-link:hover, .pagination-secondary .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link:hover, .jsgrid .jsgrid-pager .pagination-secondary .jsgrid-pager-page .page-link:hover, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-secondary .page-item a:hover, .pagination-secondary .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a:hover, .jsgrid .jsgrid-pager .pagination-secondary .jsgrid-pager-nav-button a:hover, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-secondary .page-item a:hover,
.pagination-secondary .jsgrid .jsgrid-pager .jsgrid-pager-page a:hover, .jsgrid .jsgrid-pager .pagination-secondary .jsgrid-pager-page a:hover {
  background: #e5e5e5;
  border-color: #d8d8d8;
  color: #ffffff; }

.pagination-success .page-item.active .page-link, .pagination-success .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-success .active.jsgrid-pager-nav-button .page-link, .pagination-success .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination-success .active.jsgrid-pager-page .page-link, .pagination-success .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-success .page-item.active a, .pagination-success .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-success .active.jsgrid-pager-nav-button a,
.pagination-success .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-success .page-item.active a,
.pagination-success .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-success .active.jsgrid-pager-page a {
  background: <?php echo $color; ?>;
  border-color: <?php echo $color; ?>; }

.pagination-success .page-item .page-link:hover, .pagination-success .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link:hover, .jsgrid .jsgrid-pager .pagination-success .jsgrid-pager-nav-button .page-link:hover, .pagination-success .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link:hover, .jsgrid .jsgrid-pager .pagination-success .jsgrid-pager-page .page-link:hover, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-success .page-item a:hover, .pagination-success .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a:hover, .jsgrid .jsgrid-pager .pagination-success .jsgrid-pager-nav-button a:hover, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-success .page-item a:hover,
.pagination-success .jsgrid .jsgrid-pager .jsgrid-pager-page a:hover, .jsgrid .jsgrid-pager .pagination-success .jsgrid-pager-page a:hover {
  background: #4cd350;
  border-color: <?php echo $color; ?>;
  color: #ffffff; }

.pagination-info .page-item.active .page-link, .pagination-info .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-info .active.jsgrid-pager-nav-button .page-link, .pagination-info .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination-info .active.jsgrid-pager-page .page-link, .pagination-info .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-info .page-item.active a, .pagination-info .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-info .active.jsgrid-pager-nav-button a,
.pagination-info .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-info .page-item.active a,
.pagination-info .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-info .active.jsgrid-pager-page a {
  background: #8e32e9;
  border-color: #8e32e9; }

.pagination-info .page-item .page-link:hover, .pagination-info .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link:hover, .jsgrid .jsgrid-pager .pagination-info .jsgrid-pager-nav-button .page-link:hover, .pagination-info .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link:hover, .jsgrid .jsgrid-pager .pagination-info .jsgrid-pager-page .page-link:hover, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-info .page-item a:hover, .pagination-info .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a:hover, .jsgrid .jsgrid-pager .pagination-info .jsgrid-pager-nav-button a:hover, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-info .page-item a:hover,
.pagination-info .jsgrid .jsgrid-pager .jsgrid-pager-page a:hover, .jsgrid .jsgrid-pager .pagination-info .jsgrid-pager-page a:hover {
  background: #9b49eb;
  border-color: #8e32e9;
  color: #ffffff; }

.pagination-warning .page-item.active .page-link, .pagination-warning .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-warning .active.jsgrid-pager-nav-button .page-link, .pagination-warning .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination-warning .active.jsgrid-pager-page .page-link, .pagination-warning .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-warning .page-item.active a, .pagination-warning .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-warning .active.jsgrid-pager-nav-button a,
.pagination-warning .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-warning .page-item.active a,
.pagination-warning .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-warning .active.jsgrid-pager-page a {
  background: #ffde73;
  border-color: #ffde73; }

.pagination-warning .page-item .page-link:hover, .pagination-warning .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link:hover, .jsgrid .jsgrid-pager .pagination-warning .jsgrid-pager-nav-button .page-link:hover, .pagination-warning .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link:hover, .jsgrid .jsgrid-pager .pagination-warning .jsgrid-pager-page .page-link:hover, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-warning .page-item a:hover, .pagination-warning .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a:hover, .jsgrid .jsgrid-pager .pagination-warning .jsgrid-pager-nav-button a:hover, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-warning .page-item a:hover,
.pagination-warning .jsgrid .jsgrid-pager .jsgrid-pager-page a:hover, .jsgrid .jsgrid-pager .pagination-warning .jsgrid-pager-page a:hover {
  background: #ffe48d;
  border-color: #ffde73;
  color: #ffffff; }

.pagination-danger .page-item.active .page-link, .pagination-danger .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-danger .active.jsgrid-pager-nav-button .page-link, .pagination-danger .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination-danger .active.jsgrid-pager-page .page-link, .pagination-danger .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-danger .page-item.active a, .pagination-danger .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-danger .active.jsgrid-pager-nav-button a,
.pagination-danger .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-danger .page-item.active a,
.pagination-danger .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-danger .active.jsgrid-pager-page a {
  background: #ff4d6b;
  border-color: #ff4d6b; }

.pagination-danger .page-item .page-link:hover, .pagination-danger .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link:hover, .jsgrid .jsgrid-pager .pagination-danger .jsgrid-pager-nav-button .page-link:hover, .pagination-danger .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link:hover, .jsgrid .jsgrid-pager .pagination-danger .jsgrid-pager-page .page-link:hover, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-danger .page-item a:hover, .pagination-danger .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a:hover, .jsgrid .jsgrid-pager .pagination-danger .jsgrid-pager-nav-button a:hover, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-danger .page-item a:hover,
.pagination-danger .jsgrid .jsgrid-pager .jsgrid-pager-page a:hover, .jsgrid .jsgrid-pager .pagination-danger .jsgrid-pager-page a:hover {
  background: #ff6780;
  border-color: #ff4d6b;
  color: #ffffff; }

.pagination-light .page-item.active .page-link, .pagination-light .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-light .active.jsgrid-pager-nav-button .page-link, .pagination-light .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination-light .active.jsgrid-pager-page .page-link, .pagination-light .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-light .page-item.active a, .pagination-light .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-light .active.jsgrid-pager-nav-button a,
.pagination-light .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-light .page-item.active a,
.pagination-light .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-light .active.jsgrid-pager-page a {
  background: #f8f9fa;
  border-color: #f8f9fa; }

.pagination-light .page-item .page-link:hover, .pagination-light .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link:hover, .jsgrid .jsgrid-pager .pagination-light .jsgrid-pager-nav-button .page-link:hover, .pagination-light .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link:hover, .jsgrid .jsgrid-pager .pagination-light .jsgrid-pager-page .page-link:hover, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-light .page-item a:hover, .pagination-light .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a:hover, .jsgrid .jsgrid-pager .pagination-light .jsgrid-pager-nav-button a:hover, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-light .page-item a:hover,
.pagination-light .jsgrid .jsgrid-pager .jsgrid-pager-page a:hover, .jsgrid .jsgrid-pager .pagination-light .jsgrid-pager-page a:hover {
  background: white;
  border-color: #f8f9fa;
  color: #ffffff; }

.pagination-dark .page-item.active .page-link, .pagination-dark .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .pagination-dark .active.jsgrid-pager-nav-button .page-link, .pagination-dark .jsgrid .jsgrid-pager .active.jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .pagination-dark .active.jsgrid-pager-page .page-link, .pagination-dark .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-dark .page-item.active a, .pagination-dark .jsgrid .jsgrid-pager .active.jsgrid-pager-nav-button a, .jsgrid .jsgrid-pager .pagination-dark .active.jsgrid-pager-nav-button a,
.pagination-dark .page-item.active .jsgrid .jsgrid-pager .jsgrid-pager-page a, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-dark .page-item.active a,
.pagination-dark .jsgrid .jsgrid-pager .active.jsgrid-pager-page a, .jsgrid .jsgrid-pager .pagination-dark .active.jsgrid-pager-page a {
  background: #3e4b5b;
  border-color: #3e4b5b; }

.pagination-dark .page-item .page-link:hover, .pagination-dark .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link:hover, .jsgrid .jsgrid-pager .pagination-dark .jsgrid-pager-nav-button .page-link:hover, .pagination-dark .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link:hover, .jsgrid .jsgrid-pager .pagination-dark .jsgrid-pager-page .page-link:hover, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .pagination-dark .page-item a:hover, .pagination-dark .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a:hover, .jsgrid .jsgrid-pager .pagination-dark .jsgrid-pager-nav-button a:hover, .jsgrid .jsgrid-pager .jsgrid-pager-page .pagination-dark .page-item a:hover,
.pagination-dark .jsgrid .jsgrid-pager .jsgrid-pager-page a:hover, .jsgrid .jsgrid-pager .pagination-dark .jsgrid-pager-page a:hover {
  background: #48586a;
  border-color: #3e4b5b;
  color: #ffffff; }

/* Popovers */
.popover-static-demo .popover {
  width: 185px;
  position: relative;
  display: block;
  float: left;
  margin: 1rem .5rem;
  z-index: 10; }
  .popover-static-demo .popover.bs-popover-bottom-demo .arrow, .popover-static-demo .popover.bs-popover-top-demo .arrow {
    left: 50%; }
  .popover-static-demo .popover.bs-popover-left-demo .arrow, .popover-static-demo .popover.bs-popover-right-demo .arrow {
    top: 50%; }

.popover {
  z-index: 1029; }
  .popover.bs-popover-top-demo .arrow:before {
    border-top-color: rgba(0, 0, 0, 0.2); }
  .popover.bs-popover-top-demo .arrow:after {
    border-top-color: #fff; }
  .popover.bs-popover-right-demo .arrow:before {
    border-right-color: rgba(0, 0, 0, 0.2); }
  .popover.bs-popover-right-demo .arrow:after {
    border-right-color: #fff; }
  .popover.bs-popover-bottom-demo .arrow:before {
    border-bottom-color: rgba(0, 0, 0, 0.2); }
  .popover.bs-popover-bottom-demo .arrow:after {
    border-bottom-color: #fff; }
  .popover.bs-popover-bottom-demo .popover-header:before {
    border-bottom: 0; }
  .popover.bs-popover-left-demo .arrow:before {
    border-left-color: rgba(0, 0, 0, 0.2); }
  .popover.bs-popover-left-demo .arrow:after {
    border-left-color: #fff; }
  .popover .popover-header {
    font-size: .9375rem;
    border-bottom: 0;
    background: #ffffff;
    color: inherit;
    border-bottom: 1px solid rgba(0, 0, 0, 0.2); }
  .popover .popover-body {
    color: #9c9fa6; }
  .popover.left .arrow:before {
    border-left-color: rgba(0, 0, 0, 0.2); }
  .popover.left .arrow:after {
    border-left-color: #fff; }
  .popover.right .arrow:before {
    border-right-color: rgba(0, 0, 0, 0.2); }
  .popover.right .arrow:after {
    border-right-color: #fff; }
  .popover.top .arrow:before {
    border-top-color: rgba(0, 0, 0, 0.2); }
  .popover.top .arrow:after {
    border-top-color: #fff; }
  .popover.bottom .arrow:before {
    border-bottom-color: rgba(0, 0, 0, 0.2); }
  .popover.bottom .arrow:after {
    border-bottom-color: #fff; }

.popover-primary {
  border-color: "primary"; }
  .popover-primary .popover-header {
    background: #1bdbe0;
    color: #ffffff;
    border-bottom: 0; }
  .popover-primary.bs-popover-top .arrow:before, .popover-primary.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-primary.bs-popover-top .arrow:after, .popover-primary.bs-popover-auto[x-placement^="top"] .arrow:after {
    border-top-color: #1bdbe0; }
  .popover-primary.bs-popover-right .arrow:before, .popover-primary.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-primary.bs-popover-right .arrow:after, .popover-primary.bs-popover-auto[x-placement^="right"] .arrow:after {
    border-right-color: #1bdbe0; }
  .popover-primary.bs-popover-bottom .arrow:before, .popover-primary.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-primary.bs-popover-bottom .arrow:after, .popover-primary.bs-popover-auto[x-placement^="bottom"] .arrow:after {
    border-bottom-color: #1bdbe0; }
  .popover-primary.bs-popover-left .arrow:before, .popover-primary.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-primary.bs-popover-left .arrow:after, .popover-primary.bs-popover-auto[x-placement^="left"] .arrow:after {
    border-left-color: #1bdbe0; }

.popover-secondary {
  border-color: "secondary"; }
  .popover-secondary .popover-header {
    background: #d8d8d8;
    color: #ffffff;
    border-bottom: 0; }
  .popover-secondary.bs-popover-top .arrow:before, .popover-secondary.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-secondary.bs-popover-top .arrow:after, .popover-secondary.bs-popover-auto[x-placement^="top"] .arrow:after {
    border-top-color: #d8d8d8; }
  .popover-secondary.bs-popover-right .arrow:before, .popover-secondary.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-secondary.bs-popover-right .arrow:after, .popover-secondary.bs-popover-auto[x-placement^="right"] .arrow:after {
    border-right-color: #d8d8d8; }
  .popover-secondary.bs-popover-bottom .arrow:before, .popover-secondary.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-secondary.bs-popover-bottom .arrow:after, .popover-secondary.bs-popover-auto[x-placement^="bottom"] .arrow:after {
    border-bottom-color: #d8d8d8; }
  .popover-secondary.bs-popover-left .arrow:before, .popover-secondary.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-secondary.bs-popover-left .arrow:after, .popover-secondary.bs-popover-auto[x-placement^="left"] .arrow:after {
    border-left-color: #d8d8d8; }

.popover-success {
  border-color: "success"; }
  .popover-success .popover-header {
    background: <?php echo $color; ?>;
    color: #ffffff;
    border-bottom: 0; }
  .popover-success.bs-popover-top .arrow:before, .popover-success.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-success.bs-popover-top .arrow:after, .popover-success.bs-popover-auto[x-placement^="top"] .arrow:after {
    border-top-color: <?php echo $color; ?>; }
  .popover-success.bs-popover-right .arrow:before, .popover-success.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-success.bs-popover-right .arrow:after, .popover-success.bs-popover-auto[x-placement^="right"] .arrow:after {
    border-right-color: <?php echo $color; ?>; }
  .popover-success.bs-popover-bottom .arrow:before, .popover-success.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-success.bs-popover-bottom .arrow:after, .popover-success.bs-popover-auto[x-placement^="bottom"] .arrow:after {
    border-bottom-color: <?php echo $color; ?>; }
  .popover-success.bs-popover-left .arrow:before, .popover-success.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-success.bs-popover-left .arrow:after, .popover-success.bs-popover-auto[x-placement^="left"] .arrow:after {
    border-left-color: <?php echo $color; ?>; }

.popover-info {
  border-color: "info"; }
  .popover-info .popover-header {
    background: #8e32e9;
    color: #ffffff;
    border-bottom: 0; }
  .popover-info.bs-popover-top .arrow:before, .popover-info.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-info.bs-popover-top .arrow:after, .popover-info.bs-popover-auto[x-placement^="top"] .arrow:after {
    border-top-color: #8e32e9; }
  .popover-info.bs-popover-right .arrow:before, .popover-info.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-info.bs-popover-right .arrow:after, .popover-info.bs-popover-auto[x-placement^="right"] .arrow:after {
    border-right-color: #8e32e9; }
  .popover-info.bs-popover-bottom .arrow:before, .popover-info.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-info.bs-popover-bottom .arrow:after, .popover-info.bs-popover-auto[x-placement^="bottom"] .arrow:after {
    border-bottom-color: #8e32e9; }
  .popover-info.bs-popover-left .arrow:before, .popover-info.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-info.bs-popover-left .arrow:after, .popover-info.bs-popover-auto[x-placement^="left"] .arrow:after {
    border-left-color: #8e32e9; }

.popover-warning {
  border-color: "warning"; }
  .popover-warning .popover-header {
    background: #ffde73;
    color: #ffffff;
    border-bottom: 0; }
  .popover-warning.bs-popover-top .arrow:before, .popover-warning.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-warning.bs-popover-top .arrow:after, .popover-warning.bs-popover-auto[x-placement^="top"] .arrow:after {
    border-top-color: #ffde73; }
  .popover-warning.bs-popover-right .arrow:before, .popover-warning.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-warning.bs-popover-right .arrow:after, .popover-warning.bs-popover-auto[x-placement^="right"] .arrow:after {
    border-right-color: #ffde73; }
  .popover-warning.bs-popover-bottom .arrow:before, .popover-warning.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-warning.bs-popover-bottom .arrow:after, .popover-warning.bs-popover-auto[x-placement^="bottom"] .arrow:after {
    border-bottom-color: #ffde73; }
  .popover-warning.bs-popover-left .arrow:before, .popover-warning.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-warning.bs-popover-left .arrow:after, .popover-warning.bs-popover-auto[x-placement^="left"] .arrow:after {
    border-left-color: #ffde73; }

.popover-danger {
  border-color: "danger"; }
  .popover-danger .popover-header {
    background: #ff4d6b;
    color: #ffffff;
    border-bottom: 0; }
  .popover-danger.bs-popover-top .arrow:before, .popover-danger.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-danger.bs-popover-top .arrow:after, .popover-danger.bs-popover-auto[x-placement^="top"] .arrow:after {
    border-top-color: #ff4d6b; }
  .popover-danger.bs-popover-right .arrow:before, .popover-danger.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-danger.bs-popover-right .arrow:after, .popover-danger.bs-popover-auto[x-placement^="right"] .arrow:after {
    border-right-color: #ff4d6b; }
  .popover-danger.bs-popover-bottom .arrow:before, .popover-danger.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-danger.bs-popover-bottom .arrow:after, .popover-danger.bs-popover-auto[x-placement^="bottom"] .arrow:after {
    border-bottom-color: #ff4d6b; }
  .popover-danger.bs-popover-left .arrow:before, .popover-danger.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-danger.bs-popover-left .arrow:after, .popover-danger.bs-popover-auto[x-placement^="left"] .arrow:after {
    border-left-color: #ff4d6b; }

.popover-light {
  border-color: "light"; }
  .popover-light .popover-header {
    background: #f8f9fa;
    color: #ffffff;
    border-bottom: 0; }
  .popover-light.bs-popover-top .arrow:before, .popover-light.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-light.bs-popover-top .arrow:after, .popover-light.bs-popover-auto[x-placement^="top"] .arrow:after {
    border-top-color: #f8f9fa; }
  .popover-light.bs-popover-right .arrow:before, .popover-light.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-light.bs-popover-right .arrow:after, .popover-light.bs-popover-auto[x-placement^="right"] .arrow:after {
    border-right-color: #f8f9fa; }
  .popover-light.bs-popover-bottom .arrow:before, .popover-light.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-light.bs-popover-bottom .arrow:after, .popover-light.bs-popover-auto[x-placement^="bottom"] .arrow:after {
    border-bottom-color: #f8f9fa; }
  .popover-light.bs-popover-left .arrow:before, .popover-light.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-light.bs-popover-left .arrow:after, .popover-light.bs-popover-auto[x-placement^="left"] .arrow:after {
    border-left-color: #f8f9fa; }

.popover-dark {
  border-color: "dark"; }
  .popover-dark .popover-header {
    background: #3e4b5b;
    color: #ffffff;
    border-bottom: 0; }
  .popover-dark.bs-popover-top .arrow:before, .popover-dark.bs-popover-auto[x-placement^="top"] .arrow:before, .popover-dark.bs-popover-top .arrow:after, .popover-dark.bs-popover-auto[x-placement^="top"] .arrow:after {
    border-top-color: #3e4b5b; }
  .popover-dark.bs-popover-right .arrow:before, .popover-dark.bs-popover-auto[x-placement^="right"] .arrow:before, .popover-dark.bs-popover-right .arrow:after, .popover-dark.bs-popover-auto[x-placement^="right"] .arrow:after {
    border-right-color: #3e4b5b; }
  .popover-dark.bs-popover-bottom .arrow:before, .popover-dark.bs-popover-auto[x-placement^="bottom"] .arrow:before, .popover-dark.bs-popover-bottom .arrow:after, .popover-dark.bs-popover-auto[x-placement^="bottom"] .arrow:after {
    border-bottom-color: #3e4b5b; }
  .popover-dark.bs-popover-left .arrow:before, .popover-dark.bs-popover-auto[x-placement^="left"] .arrow:before, .popover-dark.bs-popover-left .arrow:after, .popover-dark.bs-popover-auto[x-placement^="left"] .arrow:after {
    border-left-color: #3e4b5b; }

/* Preview */
.preview-list .preview-item {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  -webkit-box-align: start;
  -ms-flex-align: start;
  align-items: flex-start;
  padding: .75rem 1.5rem;
  font-size: .875rem; }
  .preview-list .preview-item:last-child {
    border-bottom: 0; }
  .preview-list .preview-item:hover {
    background: #f8f9fa; }
  .preview-list .preview-item .form-check {
    margin-top: 8px;
    margin-right: 1rem; }
  .preview-list .preview-item .preview-thumbnail {
    color: #ffffff;
    position: relative; }
    .preview-list .preview-item .preview-thumbnail img,
    .preview-list .preview-item .preview-thumbnail .preview-icon {
      width: 36px;
      height: 36px;
      border-radius: 100%; }
    .preview-list .preview-item .preview-thumbnail .preview-icon {
      padding: 6px;
      text-align: center;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center; }
      .preview-list .preview-item .preview-thumbnail .preview-icon i {
        font-size: 1.125rem;
        margin: 0; }
    .preview-list .preview-item .preview-thumbnail .badge {
      border: 2px solid #ffffff;
      border-radius: 100%;
      bottom: 5px;
      display: block;
      height: 14px;
      left: -5px;
      padding: 0;
      position: absolute;
      width: 14px; }
  .preview-list .preview-item .preview-item-content {
    line-height: 1;
    padding-left: 15px; }
    .preview-list .preview-item .preview-item-content:first-child {
      padding-left: 0; }
    .preview-list .preview-item .preview-item-content p {
      margin-bottom: 10px; }
      .preview-list .preview-item .preview-item-content p .content-category {
        font-family: 'source-sans-pro-semibold', sans-serif;
        padding-right: 15px;
        border-right: 1px solid #e8e5e5; }
    .rtl .preview-list .preview-item .preview-item-content {
      padding-left: 0;
      padding-right: 1rem;
      margin-right: 0;
      margin-left: auto; }
  .preview-list .preview-item .preview-actions {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row; }
    .preview-list .preview-item .preview-actions i {
      width: 29px;
      color: #e6e9ed;
      height: 29px;
      border: 2px solid #e6e9ed;
      border-radius: 100%;
      padding: 3px 6px;
      display: inline-block; }
      .preview-list .preview-item .preview-actions i:first-child {
        margin-right: 10px; }

.preview-list.comment-preview .preview-item {
  padding: .87rem 0; }
  .preview-list.comment-preview .preview-item:first-child {
    padding-top: 0; }
  .preview-list.comment-preview .preview-item p {
    line-height: 27px; }

.preview-list.bordered .preview-item {
  border-bottom: 1px solid #e8e5e5; }
  .preview-list.bordered .preview-item:last-child {
    border-bottom: 0; }

/* Tables */
.table, .jsgrid .jsgrid-table {
  margin-bottom: 0; }
  .table thead th, .jsgrid .jsgrid-table thead th {
    border-top: 0;
    border-bottom-width: 1px;
    font-family: "Open Sans", sans-serif;
    font-weight: 600;
    font-weight: initial; }
    .table thead th i, .jsgrid .jsgrid-table thead th i {
      margin-left: 0.325rem; }
  .table th, .jsgrid .jsgrid-table th,
  .table td,
  .jsgrid .jsgrid-table td {
    vertical-align: middle;
    font-size: 0.875rem;
    line-height: 1;
    white-space: normal; }
    .table th img, .jsgrid .jsgrid-table th img,
    .table td img,
    .jsgrid .jsgrid-table td img {
      width: 36px;
      height: 36px;
      border-radius: 100%; }
    .table th .badge, .jsgrid .jsgrid-table th .badge,
    .table td .badge,
    .jsgrid .jsgrid-table td .badge {
      margin-bottom: 0; }
  .table.table-borderless, .jsgrid .table-borderless.jsgrid-table {
    border: none; }
    .table.table-borderless tr, .jsgrid .table-borderless.jsgrid-table tr,
    .table.table-borderless td,
    .jsgrid .table-borderless.jsgrid-table td,
    .table.table-borderless th,
    .jsgrid .table-borderless.jsgrid-table th {
      border: none; }

.nav-tabs .nav-link {
  background: #f6f8fa;
  color: #000000;
  border-radius: 0;
  border: 1px solid #e8e5e5;
  padding: .75rem 1.5rem; }

.nav-tabs .nav-item:first-child .nav-link {
  border-radius: 4px 0 0 0; }

.nav-tabs .nav-item:last-child .nav-link {
  border-radius: 0 4px 0 0; }

.nav-tabs.nav-tabs-vertical, .nav-tabs.nav-tabs-vertical-custom {
  border-bottom: 0; }
  .nav-tabs.nav-tabs-vertical .nav-link.active, .nav-tabs.nav-tabs-vertical-custom .nav-link.active {
    border-bottom-color: #e8e5e5; }
  .nav-tabs.nav-tabs-vertical .nav-item:first-child .nav-link, .nav-tabs.nav-tabs-vertical-custom .nav-item:first-child .nav-link {
    border-radius: 4px 4px 0 0; }
  .nav-tabs.nav-tabs-vertical .nav-item:last-child .nav-link, .nav-tabs.nav-tabs-vertical-custom .nav-item:last-child .nav-link {
    border-radius: 0 0 4px 4px; }

.nav-tabs.nav-tabs-vertical-custom {
  background: #1bdbe0;
  border-radius: 4px; }
  .nav-tabs.nav-tabs-vertical-custom .nav-link {
    background: transparent;
    border-color: rgba(255, 255, 255, 0.2);
    color: #0b5657;
    font-family: "Open Sans", sans-serif;
    font-weight: 700;
    padding: 1.75rem; }
    .nav-tabs.nav-tabs-vertical-custom .nav-link.active {
      color: #ffffff;
      border-color: rgba(255, 255, 255, 0.2); }

.nav-pills {
  border-bottom: 1px solid #e8e5e5;
  padding-bottom: 1rem; }
  .nav-pills .nav-link {
    border: 1px solid #e8e5e5;
    padding: .5rem 2rem; }
  .nav-pills .nav-item {
    margin-right: 1rem; }
  .nav-pills.nav-pills-vertical {
    border-bottom: 0; }
    .nav-pills.nav-pills-vertical .nav-item {
      margin-right: 0;
      margin-bottom: 1rem; }
  .nav-pills.nav-pills-custom {
    border-bottom: 0; }
    .nav-pills.nav-pills-custom .nav-link {
      border-radius: 20px;
      padding: .5rem 2.5rem;
      background: #fcfcfd;
      color: #000; }
      .nav-pills.nav-pills-custom .nav-link.active {
        background: #ff4d6b;
        color: #ffffff; }

/* pills variants */
.nav-pills-primary .nav-link {
  color: #1bdbe0; }
  .nav-pills-primary .nav-link.active {
    background: #1bdbe0; }

.nav-pills-secondary .nav-link {
  color: #d8d8d8; }
  .nav-pills-secondary .nav-link.active {
    background: #d8d8d8; }

.nav-pills-success .nav-link {
  color: <?php echo $color; ?>; }
  .nav-pills-success .nav-link.active {
    background: <?php echo $color; ?>; }

.nav-pills-info .nav-link {
  color: #8e32e9; }
  .nav-pills-info .nav-link.active {
    background: #8e32e9; }

.nav-pills-warning .nav-link {
  color: #ffde73; }
  .nav-pills-warning .nav-link.active {
    background: #ffde73; }

.nav-pills-danger .nav-link {
  color: #ff4d6b; }
  .nav-pills-danger .nav-link.active {
    background: #ff4d6b; }

.nav-pills-light .nav-link {
  color: #f8f9fa; }
  .nav-pills-light .nav-link.active {
    background: #f8f9fa; }

.nav-pills-dark .nav-link {
  color: #3e4b5b; }
  .nav-pills-dark .nav-link.active {
    background: #3e4b5b; }

.tab-content {
  border: 1px solid #e8e5e5;
  border-top: 0;
  padding: 2rem 1rem;
  text-align: justify; }
  .tab-content.tab-content-vertical {
    border-top: 1px solid #e8e5e5; }
  .tab-content.tab-content-vertical-custom {
    border: 0;
    padding-top: 0; }
  .tab-content.tab-content-custom-pill {
    border: 0;
    padding-left: 0; }

/* Timeline */
.timeline {
  list-style: none;
  padding: 0;
  position: relative; }
  .timeline:before {
    top: 0;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 3px;
    background-color: #d8d8d8;
    left: 50%;
    margin-left: -1.5px; }
  .timeline .timeline-wrapper {
    display: block;
    margin-bottom: 20px;
    position: relative;
    width: 100%;
    padding-right: 90px; }
    .timeline .timeline-wrapper:before {
      content: " ";
      display: table; }
    .timeline .timeline-wrapper:after {
      content: " ";
      display: table;
      clear: both; }
    .timeline .timeline-wrapper .timeline-panel {
      border-radius: 2px;
      padding: 20px;
      position: relative;
      background: #ffffff;
      border-radius: 6px;
      -webkit-box-shadow: 1px 2px 35px 0 rgba(1, 1, 1, 0.1);
      box-shadow: 1px 2px 35px 0 rgba(1, 1, 1, 0.1);
      width: 35%;
      margin-left: 15%; }
      .timeline .timeline-wrapper .timeline-panel:before {
        position: absolute;
        top: 0;
        width: 100%;
        height: 2px;
        content: "";
        left: 0;
        right: 0; }
      .timeline .timeline-wrapper .timeline-panel:after {
        position: absolute;
        top: 27px;
        right: -14px;
        display: inline-block;
        border-top: 14px solid transparent;
        border-left: 14px solid #ffffff;
        border-right: 0 solid #ffffff;
        border-bottom: 14px solid transparent;
        content: " "; }
      .timeline .timeline-wrapper .timeline-panel .timeline-title {
        margin-top: 0;
        color: #3e4b5b;
        text-transform: uppercase; }
      .timeline .timeline-wrapper .timeline-panel .timeline-body p {
        margin-bottom: 0; }
        .timeline .timeline-wrapper .timeline-panel .timeline-body p + p {
          margin-top: 5px; }
      .timeline .timeline-wrapper .timeline-panel .timeline-body ul {
        margin-bottom: 0; }
      .timeline .timeline-wrapper .timeline-panel .timeline-footer span {
        font-size: .6875rem; }
      .timeline .timeline-wrapper .timeline-panel .timeline-footer i {
        font-size: 1.5rem; }
    .timeline .timeline-wrapper .timeline-badge {
      width: 14px;
      height: 14px;
      position: absolute;
      top: 16px;
      left: calc(50% - 7px);
      z-index: 100;
      border-top-right-radius: 50%;
      border-top-left-radius: 50%;
      border-bottom-right-radius: 50%;
      border-bottom-left-radius: 50%;
      border: 2px solid #ffffff; }
      .timeline .timeline-wrapper .timeline-badge i {
        color: #ffffff; }
    .timeline .timeline-wrapper.timeline-inverted {
      padding-right: 0;
      padding-left: 90px; }
      .timeline .timeline-wrapper.timeline-inverted .timeline-panel {
        margin-left: auto;
        margin-right: 15%; }
        .timeline .timeline-wrapper.timeline-inverted .timeline-panel:after {
          border-left-width: 0;
          border-right-width: 14px;
          left: -14px;
          right: auto; }

@media (max-width: 767px) {
  .timeline .timeline-wrapper {
    padding-right: 150px; }
    .timeline .timeline-wrapper.timeline-inverted {
      padding-left: 150px; }
    .timeline .timeline-wrapper .timeline-panel {
      width: 100%;
      margin-left: 0;
      margin-right: 0; } }

.timeline-wrapper-primary .timeline-panel:before {
  background: #1bdbe0; }

.timeline-wrapper-primary .timeline-badge {
  background: #1bdbe0; }

.timeline-wrapper-secondary .timeline-panel:before {
  background: #d8d8d8; }

.timeline-wrapper-secondary .timeline-badge {
  background: #d8d8d8; }

.timeline-wrapper-success .timeline-panel:before {
  background: <?php echo $color; ?>; }

.timeline-wrapper-success .timeline-badge {
  background: <?php echo $color; ?>; }

.timeline-wrapper-info .timeline-panel:before {
  background: #8e32e9; }

.timeline-wrapper-info .timeline-badge {
  background: #8e32e9; }

.timeline-wrapper-warning .timeline-panel:before {
  background: #ffde73; }

.timeline-wrapper-warning .timeline-badge {
  background: #ffde73; }

.timeline-wrapper-danger .timeline-panel:before {
  background: #ff4d6b; }

.timeline-wrapper-danger .timeline-badge {
  background: #ff4d6b; }

.timeline-wrapper-light .timeline-panel:before {
  background: #f8f9fa; }

.timeline-wrapper-light .timeline-badge {
  background: #f8f9fa; }

.timeline-wrapper-dark .timeline-panel:before {
  background: #3e4b5b; }

.timeline-wrapper-dark .timeline-badge {
  background: #3e4b5b; }

/* Tabs */
.add-items {
  margin-bottom: 1.5rem;
  overflow: hidden; }
  .add-items input[type="text"] {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    width: 100%;
    background: transparent; }
  .add-items .btn, .add-items .fc button, .fc .add-items button, .add-items .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .add-items .ajax-file-upload, .add-items .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .add-items .swal2-styled, .add-items .wizard > .actions a, .wizard > .actions .add-items a {
    margin-left: .5rem; }
    .rtl .add-items .btn, .rtl .add-items .fc button, .fc .rtl .add-items button, .rtl .add-items .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .rtl .add-items .ajax-file-upload, .rtl .add-items .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .rtl .add-items .swal2-styled, .rtl .add-items .wizard > .actions a, .wizard > .actions .rtl .add-items a {
      margin-left: auto;
      margin-right: .5rem; }

.list-wrapper {
  height: 100%;
  max-height: 100%; }
  .list-wrapper ul {
    padding: 0;
    text-align: left;
    list-style: none;
    margin-bottom: 0; }
    .list-wrapper ul li {
      font-size: .9375rem;
      padding: .4rem 0;
      border-bottom: 1px solid #e8e5e5; }
      .list-wrapper ul li:first-child {
        border-bottom: none; }
      .list-wrapper ul li .form-check {
        max-width: 90%;
        margin-top: .25rem;
        margin-bottom: .25rem; }
  .list-wrapper input[type="checkbox"] {
    margin-right: 15px; }
  .list-wrapper .remove {
    cursor: pointer;
    font-size: 1.438rem;
    font-weight: 600;
    width: 1.25rem;
    height: 1.25rem;
    line-height: 20px;
    text-align: center; }
  .list-wrapper .completed {
    text-decoration: line-through;
    -webkit-text-decoration-color: #8e32e9;
    text-decoration-color: #8e32e9; }

/* Tooltips */
.tooltip-static-demo .tooltip {
  position: relative;
  display: inline-block;
  opacity: 1;
  margin: 0 10px 10px 0;
  z-index: 10; }

.tooltip-static-demo .bs-tooltip-bottom-demo .arrow,
.tooltip-static-demo .bs-tooltip-top-demo .arrow {
  left: 50%;
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%); }

.tooltip-static-demo .bs-tooltip-right-demo .arrow,
.tooltip-static-demo .bs-tooltip-left-demo .arrow {
  top: 50%;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%); }

.tooltip-static-demo .bs-tooltip-right-demo .arrow {
  left: 1px; }

.tooltip-static-demo .bs-tooltip-left-demo .arrow {
  right: 1px; }

.tooltip-static-demo .bs-tooltip-top-demo .arrow {
  bottom: 1px; }

.tooltip-static-demo .bs-tooltip-bottom-demo .arrow {
  top: 1px; }

.tooltip {
  font-size: 0.75rem;
  min-width: 5.625rem;
  z-index: 1029; }
  .tooltip .tooltip-inner {
    font-family: "Open Sans", sans-serif; }

.tooltip-primary .tooltip-inner {
  background: #1bdbe0;
  color: #ffffff; }

.tooltip-primary.bs-tooltip-top .arrow::before, .tooltip-primary.bs-tooltip-auto[x-placement^="top"] .arrow::before {
  border-top-color: #1bdbe0; }

.tooltip-primary.bs-tooltip-right .arrow::before, .tooltip-primary.bs-tooltip-auto[x-placement^="right"] .arrow::before {
  border-right-color: #1bdbe0; }

.tooltip-primary.bs-tooltip-bottom .arrow::before, .tooltip-primary.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  border-bottom-color: #1bdbe0; }

.tooltip-primary.bs-tooltip-left .arrow::before, .tooltip-primary.bs-tooltip-auto[x-placement^="left"] .arrow::before {
  border-left-color: #1bdbe0; }

.tooltip-secondary .tooltip-inner {
  background: #d8d8d8;
  color: #ffffff; }

.tooltip-secondary.bs-tooltip-top .arrow::before, .tooltip-secondary.bs-tooltip-auto[x-placement^="top"] .arrow::before {
  border-top-color: #d8d8d8; }

.tooltip-secondary.bs-tooltip-right .arrow::before, .tooltip-secondary.bs-tooltip-auto[x-placement^="right"] .arrow::before {
  border-right-color: #d8d8d8; }

.tooltip-secondary.bs-tooltip-bottom .arrow::before, .tooltip-secondary.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  border-bottom-color: #d8d8d8; }

.tooltip-secondary.bs-tooltip-left .arrow::before, .tooltip-secondary.bs-tooltip-auto[x-placement^="left"] .arrow::before {
  border-left-color: #d8d8d8; }

.tooltip-success .tooltip-inner {
  background: <?php echo $color; ?>;
  color: #ffffff; }

.tooltip-success.bs-tooltip-top .arrow::before, .tooltip-success.bs-tooltip-auto[x-placement^="top"] .arrow::before {
  border-top-color: <?php echo $color; ?>; }

.tooltip-success.bs-tooltip-right .arrow::before, .tooltip-success.bs-tooltip-auto[x-placement^="right"] .arrow::before {
  border-right-color: <?php echo $color; ?>; }

.tooltip-success.bs-tooltip-bottom .arrow::before, .tooltip-success.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  border-bottom-color: <?php echo $color; ?>; }

.tooltip-success.bs-tooltip-left .arrow::before, .tooltip-success.bs-tooltip-auto[x-placement^="left"] .arrow::before {
  border-left-color: <?php echo $color; ?>; }

.tooltip-info .tooltip-inner {
  background: #8e32e9;
  color: #ffffff; }

.tooltip-info.bs-tooltip-top .arrow::before, .tooltip-info.bs-tooltip-auto[x-placement^="top"] .arrow::before {
  border-top-color: #8e32e9; }

.tooltip-info.bs-tooltip-right .arrow::before, .tooltip-info.bs-tooltip-auto[x-placement^="right"] .arrow::before {
  border-right-color: #8e32e9; }

.tooltip-info.bs-tooltip-bottom .arrow::before, .tooltip-info.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  border-bottom-color: #8e32e9; }

.tooltip-info.bs-tooltip-left .arrow::before, .tooltip-info.bs-tooltip-auto[x-placement^="left"] .arrow::before {
  border-left-color: #8e32e9; }

.tooltip-warning .tooltip-inner {
  background: #ffde73;
  color: #ffffff; }

.tooltip-warning.bs-tooltip-top .arrow::before, .tooltip-warning.bs-tooltip-auto[x-placement^="top"] .arrow::before {
  border-top-color: #ffde73; }

.tooltip-warning.bs-tooltip-right .arrow::before, .tooltip-warning.bs-tooltip-auto[x-placement^="right"] .arrow::before {
  border-right-color: #ffde73; }

.tooltip-warning.bs-tooltip-bottom .arrow::before, .tooltip-warning.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  border-bottom-color: #ffde73; }

.tooltip-warning.bs-tooltip-left .arrow::before, .tooltip-warning.bs-tooltip-auto[x-placement^="left"] .arrow::before {
  border-left-color: #ffde73; }

.tooltip-danger .tooltip-inner {
  background: #ff4d6b;
  color: #ffffff; }

.tooltip-danger.bs-tooltip-top .arrow::before, .tooltip-danger.bs-tooltip-auto[x-placement^="top"] .arrow::before {
  border-top-color: #ff4d6b; }

.tooltip-danger.bs-tooltip-right .arrow::before, .tooltip-danger.bs-tooltip-auto[x-placement^="right"] .arrow::before {
  border-right-color: #ff4d6b; }

.tooltip-danger.bs-tooltip-bottom .arrow::before, .tooltip-danger.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  border-bottom-color: #ff4d6b; }

.tooltip-danger.bs-tooltip-left .arrow::before, .tooltip-danger.bs-tooltip-auto[x-placement^="left"] .arrow::before {
  border-left-color: #ff4d6b; }

.tooltip-light .tooltip-inner {
  background: #f8f9fa;
  color: #ffffff; }

.tooltip-light.bs-tooltip-top .arrow::before, .tooltip-light.bs-tooltip-auto[x-placement^="top"] .arrow::before {
  border-top-color: #f8f9fa; }

.tooltip-light.bs-tooltip-right .arrow::before, .tooltip-light.bs-tooltip-auto[x-placement^="right"] .arrow::before {
  border-right-color: #f8f9fa; }

.tooltip-light.bs-tooltip-bottom .arrow::before, .tooltip-light.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  border-bottom-color: #f8f9fa; }

.tooltip-light.bs-tooltip-left .arrow::before, .tooltip-light.bs-tooltip-auto[x-placement^="left"] .arrow::before {
  border-left-color: #f8f9fa; }

.tooltip-dark .tooltip-inner {
  background: #3e4b5b;
  color: #ffffff; }

.tooltip-dark.bs-tooltip-top .arrow::before, .tooltip-dark.bs-tooltip-auto[x-placement^="top"] .arrow::before {
  border-top-color: #3e4b5b; }

.tooltip-dark.bs-tooltip-right .arrow::before, .tooltip-dark.bs-tooltip-auto[x-placement^="right"] .arrow::before {
  border-right-color: #3e4b5b; }

.tooltip-dark.bs-tooltip-bottom .arrow::before, .tooltip-dark.bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
  border-bottom-color: #3e4b5b; }

.tooltip-dark.bs-tooltip-left .arrow::before, .tooltip-dark.bs-tooltip-auto[x-placement^="left"] .arrow::before {
  border-left-color: #3e4b5b; }

.profile-navbar .nav-item .nav-link {
  color: #343a40; }
  .profile-navbar .nav-item .nav-link.active {
    color: #1bdbe0; }
  .profile-navbar .nav-item .nav-link i {
    font-size: 1.25rem; }

.profile-feed-item {
  padding: 1.5rem 0;
  border-bottom: 1px solid #e8e5e5; }

/* Pricing table */
.pricing-table .pricing-card .pricing-card-body {
  padding: 50px 56px 43px 56px; }
  .pricing-table .pricing-card .pricing-card-body .plan-features {
    width: 100%;
    margin-bottom: 32px; }
    .pricing-table .pricing-card .pricing-card-body .plan-features li {
      text-align: left;
      padding: 4px 0px;
      font-family: "Open Sans", sans-serif;
      font-size: 0.875rem; }

/* Portfolio */
.portfolio-grid figure {
  position: relative;
  float: left;
  overflow: hidden;
  width: 100%;
  background: #ecf0f4;
  text-align: center;
  cursor: pointer; }
  @media (max-width: 767px) {
    .portfolio-grid figure {
      width: 270px; } }
  .portfolio-grid figure img {
    position: relative;
    display: block;
    min-height: 100%;
    max-width: 100%;
    width: 100%;
    opacity: 0.8; }
  .portfolio-grid figure figcaption {
    padding: 2em;
    color: #ffffff;
    text-transform: uppercase;
    font-size: 1.25em;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%; }
    .portfolio-grid figure figcaption:before, .portfolio-grid figure figcaption:after {
      pointer-events: none; }
  .portfolio-grid figure.effect-text-in {
    border-radius: .25rem; }
    .portfolio-grid figure.effect-text-in img,
    .portfolio-grid figure.effect-text-in h4 {
      -webkit-transition: -webkit-transform 0.35s;
      transition: -webkit-transform 0.35s;
      transition: transform 0.35s;
      transition: transform 0.35s, -webkit-transform 0.35s; }
    .portfolio-grid figure.effect-text-in img {
      -webkit-backface-visibility: hidden;
      backface-visibility: hidden; }
    .portfolio-grid figure.effect-text-in h4,
    .portfolio-grid figure.effect-text-in p {
      position: absolute;
      bottom: 10px;
      left: 0;
      padding: 10px;
      margin-bottom: 0;
      width: 100%; }
    .portfolio-grid figure.effect-text-in p {
      text-transform: none;
      opacity: 0;
      -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
      transition: opacity 0.35s, -webkit-transform 0.35s;
      transition: opacity 0.35s, transform 0.35s;
      transition: opacity 0.35s, transform 0.35s, -webkit-transform 0.35s;
      -webkit-transform: translate3d(0, 50px, 0);
      transform: translate3d(0, 50px, 0); }
    .portfolio-grid figure.effect-text-in:hover img {
      -webkit-transform: translate3d(0, -80px, 0);
      transform: translate3d(0, -80px, 0); }
    .portfolio-grid figure.effect-text-in:hover h4 {
      -webkit-transform: translate3d(0, -100px, 0);
      transform: translate3d(0, -100px, 0); }
    .portfolio-grid figure.effect-text-in:hover p {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
      color: #343a40; }

/*-------------------------------------------------------------------*/
/* === Email === */
/* Mail Sidebar */
@media (max-width: 769px) {
  .email-wrapper .mail-sidebar {
    position: relative; } }

@media (max-width: 767.98px) {
  .email-wrapper .mail-sidebar {
    position: fixed;
    z-index: 99;
    background: #ffffff;
    width: 45%;
    min-width: 300px;
    left: -100%;
    display: block;
    transition: 0.4s ease;
    -webkit-transition: 0.4s ease;
    -moz-transition: 0.4s ease; } }

.email-wrapper .mail-sidebar .menu-bar {
  width: 100%;
  float: right;
  height: 100%;
  min-height: 100%; }
  @media (max-width: 767.98px) {
    .email-wrapper .mail-sidebar .menu-bar {
      min-height: 100vh;
      max-height: 100%;
      height: auto;
      overflow-y: auto;
      overflow-x: hidden; } }
  .email-wrapper .mail-sidebar .menu-bar .menu-items {
    padding: 0;
    margin-bottom: 0;
    height: auto;
    list-style-type: none; }
    .email-wrapper .mail-sidebar .menu-bar .menu-items li {
      padding: 10px 15px;
      -webkit-transition: 0.4s;
      transition: 0.4s;
      position: relative;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between; }
      .email-wrapper .mail-sidebar .menu-bar .menu-items li:hover {
        background: rgba(240, 244, 249, 0.8); }
      .email-wrapper .mail-sidebar .menu-bar .menu-items li a {
        color: #303a40;
        font-size: 0.875rem;
        text-decoration: none; }
        .email-wrapper .mail-sidebar .menu-bar .menu-items li a i {
          margin-right: 8px;
          font-size: 0.875rem;
          line-height: 1.5; }
      .email-wrapper .mail-sidebar .menu-bar .menu-items li.active {
        background: #e6e9ed;
        border-radius: 4px; }
        .email-wrapper .mail-sidebar .menu-bar .menu-items li.active a {
          color: #1bdbe0; }
      .email-wrapper .mail-sidebar .menu-bar .menu-items li.compose:hover {
        background: transparent; }
  .email-wrapper .mail-sidebar .menu-bar .online-status {
    margin-top: 1rem; }
    .email-wrapper .mail-sidebar .menu-bar .online-status .chat {
      font-size: 0.875rem;
      color: #1bdbe0;
      margin-bottom: 0;
      font-family: "Open Sans", sans-serif;
      font-weight: 700; }
    .email-wrapper .mail-sidebar .menu-bar .online-status .status {
      height: 10px;
      width: 10px;
      border-radius: 100%;
      display: -webkit-inline-box;
      display: -ms-inline-flexbox;
      display: inline-flex;
      -webkit-box-pack: start;
      -ms-flex-pack: start;
      justify-content: flex-start;
      -webkit-transform: translateX(-43px) translateY(2px);
      transform: translateX(-43px) translateY(2px); }
      .email-wrapper .mail-sidebar .menu-bar .online-status .status:after {
        font-size: 12px;
        color: #2e383e;
        margin: -5px 0 0 18px; }
    .email-wrapper .mail-sidebar .menu-bar .online-status .status.offline {
      background: #ff4d6b; }
      .email-wrapper .mail-sidebar .menu-bar .online-status .status.offline:after {
        content: "Offline"; }
    .email-wrapper .mail-sidebar .menu-bar .online-status .status.online {
      background: <?php echo $color; ?>; }
      .email-wrapper .mail-sidebar .menu-bar .online-status .status.online:after {
        content: "Online"; }
  .email-wrapper .mail-sidebar .menu-bar .profile-list {
    padding: 10px 0; }
  .email-wrapper .mail-sidebar .menu-bar .profile-list-item {
    border-bottom: 1px solid #e8e5e5;
    padding: 6px 0;
    display: block; }
    .email-wrapper .mail-sidebar .menu-bar .profile-list-item:last-child {
      border-bottom: 0; }
    .email-wrapper .mail-sidebar .menu-bar .profile-list-item a {
      text-decoration: none; }
      .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .pro-pic {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 0;
        width: 20%;
        max-width: 40px; }
        .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .pro-pic img {
          max-width: 100%;
          width: 100%;
          border-radius: 100%; }
      .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user {
        width: 100%;
        padding: 5px 10px 0 15px; }
        .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-name {
          margin: 0;
          font-family: "Open Sans", sans-serif;
          font-size: 0.875rem;
          line-height: 1;
          color: #343a40; }
        .email-wrapper .mail-sidebar .menu-bar .profile-list-item a .user .u-designation {
          font-size: calc(0.875rem - 0.1rem);
          margin-bottom: 0; }

.email-wrapper .sidebar.open {
  left: 0; }

/* Mail List Container */
.email-wrapper .mail-list-container {
  border-left: 1px solid #e8e5e5;
  height: 100%;
  padding-left: 0;
  padding-right: 0; }
  .email-wrapper .mail-list-container a {
    text-decoration: none; }
  .email-wrapper .mail-list-container .mail-list {
    border-bottom: 1px solid #e8e5e5;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
    padding: 10px 15px;
    width: 100%; }
    .email-wrapper .mail-list-container .mail-list:last-child {
      border-bottom: none; }
    .email-wrapper .mail-list-container .mail-list .form-check {
      margin-top: 12px;
      width: 11%;
      min-width: 20px; }
    .email-wrapper .mail-list-container .mail-list .content {
      width: 83%;
      padding-left: 0;
      padding-right: 0; }
      .email-wrapper .mail-list-container .mail-list .content .sender-name {
        margin-bottom: 0;
        font-size: 0.875rem;
        font-family: "Open Sans", sans-serif;
        max-width: 95%; }
      .email-wrapper .mail-list-container .mail-list .content .message_text {
        margin: 0;
        max-width: 93%;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap; }
    .email-wrapper .mail-list-container .mail-list .details {
      width: 5.5%; }
      .email-wrapper .mail-list-container .mail-list .details .date {
        text-align: right;
        margin: auto 15px auto 0;
        white-space: nowrap; }
      .email-wrapper .mail-list-container .mail-list .details i {
        margin: auto 0;
        color: #ddd; }
        .email-wrapper .mail-list-container .mail-list .details i.favorite {
          color: #ffde73; }
    .email-wrapper .mail-list-container .mail-list.new_mail {
      background: #e6e9ed; }
      .email-wrapper .mail-list-container .mail-list.new_mail .details .date {
        color: #000000; }

/* Message Content */
.email-wrapper .message-body .sender-details {
  padding: 20px 15px 0;
  border-bottom: 1px solid #e8e5e5;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex; }
  .email-wrapper .message-body .sender-details .details {
    padding-bottom: 0; }
    .email-wrapper .message-body .sender-details .details .msg-subject {
      margin-bottom: 0;
      font-family: "Open Sans", sans-serif;
      font-weight: 700; }
    .email-wrapper .message-body .sender-details .details .sender-email {
      margin-bottom: 20px;
      font-family: "Open Sans", sans-serif; }
      .email-wrapper .message-body .sender-details .details .sender-email i {
        font-size: 1rem;
        font-family: "Open Sans", sans-serif;
        font-weight: 700;
        margin: 0 1px 0 7px; }

.email-wrapper .message-body .message-content {
  padding: 50px 15px; }

.email-wrapper .message-body .attachments-sections ul {
  list-style: none;
  border-top: 1px solid #e8e5e5;
  padding: 30px 15px 20px; }
  .email-wrapper .message-body .attachments-sections ul li {
    padding: 10px;
    margin-right: 20px;
    border: 1px solid #e8e5e5;
    border-radius: 5px; }
    .email-wrapper .message-body .attachments-sections ul li .thumb {
      display: inline-block;
      margin-right: 10px; }
      .email-wrapper .message-body .attachments-sections ul li .thumb i {
        font-size: 30px;
        margin: 0;
        color: #2e383e; }
    .email-wrapper .message-body .attachments-sections ul li .details p.file-name {
      display: block;
      margin-bottom: 0;
      color: #2e383e; }
    .email-wrapper .message-body .attachments-sections ul li .details .buttons .file-size {
      margin-right: 10px;
      margin-bottom: 0;
      font-size: 13px; }
    .email-wrapper .message-body .attachments-sections ul li .details .buttons a {
      font-size: 13px;
      margin-right: 10px; }
      .email-wrapper .message-body .attachments-sections ul li .details .buttons a:last-child {
        margin-right: 0; }

/*-------------------------------------------------------------------*/
/* === Plugin overrides === */
/* Ace Editor */
.ace_editor {
  margin: auto;
  height: 300px;
  width: 100%;
  font: 14px/normal SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }
  .ace_editor .ace_content {
    font-size: 0.875rem; }

/* Avgrund Popup */
.avgrund-popin {
  position: absolute;
  background: #fff;
  padding: 37px 33px;
  overflow: hidden;
  visibility: hidden;
  opacity: 0;
  filter: alpha(opacity=0);
  top: 50%;
  left: 50%;
  z-index: 1000;
  font-size: 0.875rem;
  font-family: "Open Sans", sans-serif;
  font-weight: initial;
  line-height: 1.85;
  border-radius: 10px;
  -webkit-transform: scale(0.8);
  transform: scale(0.8); }
  .avgrund-popin p {
    font-size: 0.875rem;
    font-family: "Open Sans", sans-serif;
    font-weight: initial; }

.avgrund-overlay {
  background: #000;
  width: 100%;
  position: fixed;
  top: 0px;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 101;
  visibility: hidden;
  opacity: 0;
  filter: alpha(opacity=0); }

body.avgrund-ready,
.avgrund-ready .avgrund-popin,
.avgrund-ready .avgrund-overlay {
  -webkit-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
  -webkit-transition: 0.3s all ease-out;
  transition: 0.3s all ease-out; }

body.avgrund-active {
  overflow: hidden; }

.avgrund-active .avgrund-popin {
  visibility: visible;
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1.1);
  transform: scale(1.1); }

.avgrund-active .avgrund-overlay {
  visibility: visible;
  opacity: .5;
  filter: alpha(opacity=50);
  height: 20000px; }

.avgrund-popin.stack {
  -webkit-transform: scale(1.5);
  transform: scale(1.5); }

.avgrund-active .avgrund-popin.stack {
  -webkit-transform: scale(1.1);
  transform: scale(1.1); }

/* Optional close button styles */
.avgrund-close {
  display: block;
  color: #fff;
  background: #343a40;
  font-size: 10px;
  text-decoration: none;
  text-transform: uppercase;
  position: absolute;
  top: 10px;
  right: 10px;
  height: 17px;
  width: 17px;
  text-align: center;
  line-height: 16px;
  border-radius: 50px; }
  .avgrund-close:hover {
    color: #fff;
    text-decoration: none; }

/* Chartist */
.ct-series-a .ct-line {
  stroke: #a29afc;
  stroke-width: 3px;
  stroke-dasharray: 10px 20px; }

.ct-series-a .ct-point {
  stroke: #6355f9;
  stroke-width: 10px;
  stroke-linecap: round; }

.ct-series-b .ct-line {
  stroke: #80d691;
  stroke-width: 3px;
  stroke-dasharray: 10px 20px; }

.ct-series-b .ct-point {
  stroke: #4ac462;
  stroke-width: 10px;
  stroke-linecap: round; }

.ct-series-c .ct-line {
  stroke: #f7cb9b;
  stroke-width: 3px;
  stroke-dasharray: 10px 20px; }

.ct-series-c .ct-point {
  stroke: #f2a859;
  stroke-width: 10px;
  stroke-linecap: round; }

.ct-series-a .ct-bar {
  stroke: #a29afc;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre; }

.ct-series-b .ct-bar {
  stroke: #80d691;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre; }

.ct-series-c .ct-bar {
  stroke: #f7cb9b;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre; }

.ct-series-d .ct-bar {
  stroke: #fcb2b2;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre; }

.ct-series-a .ct-slice-pie {
  fill: #a29afc;
  stroke-width: 4px; }

.ct-series-b .ct-slice-pie {
  fill: #80d691;
  stroke-width: 4px; }

.ct-series-c .ct-slice-pie {
  fill: #fcb2b2;
  stroke-width: 4px; }

.ct-series-d .ct-slice-pie {
  fill: #f7cb9b;
  stroke-width: 4px; }

.ct-series-a .ct-slice-donut-solid {
  fill: #a29afc; }

.ct-series-b .ct-slice-donut-solid {
  fill: #80d691; }

.ct-series-c .ct-slice-donut-solid {
  fill: #fcb2b2; }

.ct-series-a .ct-slice-donut-solid {
  fill: #f7cb9b; }

#ct-chart-dash-barChart .ct-series-a .ct-bar {
  stroke: #fb9999;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre; }

#ct-chart-dash-barChart .ct-series-b .ct-bar {
  stroke: #8b81fb;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre; }

#ct-chart-dash-barChart .ct-series-c .ct-bar {
  stroke: #a29afc;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre; }

#ct-chart-dash-barChart .ct-series-d .ct-bar {
  stroke: #b9b3fc;
  stroke-width: 20px;
  stroke-dasharray: 0;
  stroke-linecap: squre; }

/* CodeMirror */
.CodeMirror {
  font-size: 0.875rem;
  font-family: "Open Sans", sans-serif;
  height: auto;
  text-align: left;
  min-height: auto; }

.CodeMirror-scroll {
  min-height: auto; }

/* Colcade */
* {
  -webkit-box-sizing: border-box;
  box-sizing: border-box; }

.grid {
  border: 1px solid #aab2bd est; }

.grid:after {
  display: block;
  content: '';
  clear: both; }

.grid-col {
  float: left;
  width: 49%;
  margin-right: 2%;
  background: rgba(27, 219, 224, 0.2); }

.grid-col--4 {
  margin-right: 0; }

/* hide two middle */
.grid-col--2, .grid-col--3 {
  display: none; }

@media (min-width: 768px) {
  .grid-col {
    width: 32%; }
  .grid-col--2 {
    display: block; } }

@media (min-width: 1200px) {
  .grid-col {
    width: 23.5%; }
  .grid-col--2, .grid-col--3 {
    display: block; } }

.grid-item {
  background: #1bdbe0;
  margin-bottom: 20px; }

.grid-item--a {
  height: 80px; }

.grid-item--b {
  height: 140px; }

.grid-item--c {
  height: 300px; }

/* Colorpicker */
.asColorPicker-dropdown {
  max-width: initial; }

.asColorPicker-trigger {
  height: auto;
  border: 0; }
  .asColorPicker-trigger span {
    border-radius: 2px;
    width: 35px; }

/* Context Menu */
.context-menu-icon:before {
  color: #000;
  font: normal normal normal 15px/1 "simple-line-icons"; }

.context-menu-icon.context-menu-icon-cut:before {
  content: '\e059'; }

.context-menu-icon.context-menu-icon-edit:before {
  content: '\e05f'; }

.context-menu-icon.context-menu-icon-copy:before {
  content: '\e040'; }

.context-menu-icon.context-menu-icon-paste:before {
  content: '\e085'; }

.context-menu-icon.context-menu-icon-delete:before {
  content: '\e054'; }

.context-menu-icon.context-menu-icon-quit:before {
  content: '\e082'; }

.context-menu-list {
  -webkit-box-shadow: none;
  box-shadow: none;
  border: 1px solid #e8e5e5; }
  .context-menu-list .context-menu-item span {
    color: #000;
    font-size: .75rem;
    font-family: "Open Sans", sans-serif;
    font-weight: 700; }
  .context-menu-list .context-menu-item.context-menu-hover {
    background: #000; }
    .context-menu-list .context-menu-item.context-menu-hover span {
      color: #ffffff; }

/* Data Tables */
.dataTables_wrapper {
  padding-left: 0;
  padding-right: 0; }
  .dataTables_wrapper label {
    font-size: .8125rem; }
  .dataTables_wrapper select {
    padding: .4rem; }
  .dataTables_wrapper .dataTables_length select {
    min-width: 65px;
    margin-left: .25rem;
    margin-right: .25rem; }
  .dataTables_wrapper .dataTable .btn, .dataTables_wrapper .dataTable .fc button, .fc .dataTables_wrapper .dataTable button, .dataTables_wrapper .dataTable .ajax-upload-dragdrop .ajax-file-upload, .ajax-upload-dragdrop .dataTables_wrapper .dataTable .ajax-file-upload, .dataTables_wrapper .dataTable .swal2-modal .swal2-buttonswrapper .swal2-styled, .swal2-modal .swal2-buttonswrapper .dataTables_wrapper .dataTable .swal2-styled, .dataTables_wrapper .dataTable .wizard > .actions a, .wizard > .actions .dataTables_wrapper .dataTable a {
    padding: 0.1rem 1rem;
    vertical-align: top; }
  .dataTables_wrapper .dataTable thead th {
    border-bottom-width: 0; }
  .dataTables_wrapper .dataTable thead .sorting:before, .dataTables_wrapper .dataTable thead .sorting:after,
  .dataTables_wrapper .dataTable thead .sorting_asc:before,
  .dataTables_wrapper .dataTable thead .sorting_asc:after,
  .dataTables_wrapper .dataTable thead .sorting_desc:before,
  .dataTables_wrapper .dataTable thead .sorting_desc:after,
  .dataTables_wrapper .dataTable thead .sorting_asc_disabled:before,
  .dataTables_wrapper .dataTable thead .sorting_asc_disabled:after,
  .dataTables_wrapper .dataTable thead .sorting_desc_disabled:before,
  .dataTables_wrapper .dataTable thead .sorting_desc_disabled:after {
    line-height: 2.5;
    font-family: 'simple-line-icons';
    font-size: .65rem; }
  .dataTables_wrapper .dataTable thead .sorting:before,
  .dataTables_wrapper .dataTable thead .sorting_asc:before,
  .dataTables_wrapper .dataTable thead .sorting_desc:before,
  .dataTables_wrapper .dataTable thead .sorting_asc_disabled:before,
  .dataTables_wrapper .dataTable thead .sorting_desc_disabled:before {
    content: "\e078";
    right: 1.4em; }
  .dataTables_wrapper .dataTable thead .sorting:after,
  .dataTables_wrapper .dataTable thead .sorting_asc:after,
  .dataTables_wrapper .dataTable thead .sorting_desc:after,
  .dataTables_wrapper .dataTable thead .sorting_asc_disabled:after,
  .dataTables_wrapper .dataTable thead .sorting_desc_disabled:after {
    content: "\e07b";
    right: 0.2em; }
  .dataTables_wrapper .dataTables_paginate {
    margin-top: 20px; }
  .dataTables_wrapper .dataTables_info {
    font-size: 0.875rem; }

/* Datepicker */
.datepicker.datepicker-dropdown,
.datepicker.datepicker-inline {
  padding: 0 25px;
  width: 30%;
  max-width: 500px;
  min-width: 250px; }
  .datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th,
  .datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th {
    text-align: center;
    padding: .5rem 0; }
    .datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.prev,
    .datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.prev {
      color: #434a54;
      padding-bottom: 1rem;
      padding-top: 1rem;
      text-align: left;
      background: #ffffff; }
    .datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.datepicker-switch,
    .datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.datepicker-switch {
      color: #434a54;
      background: #ffffff;
      padding-bottom: 1rem;
      padding-top: 1rem;
      font-size: 1rem;
      font-weight: 600; }
    .datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.next,
    .datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.next {
      color: grey;
      padding-bottom: 1rem;
      padding-top: 1rem;
      text-align: right;
      background: #ffffff; }
    .datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.dow,
    .datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.dow {
      font-family: "Open Sans", sans-serif;
      color: #434a54;
      font-size: .875rem;
      font-weight: initial; }
      .datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.dow:first-child,
      .datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.dow:first-child {
        text-align: left; }
      .datepicker.datepicker-dropdown .datepicker-days table.table-condensed thead tr th.dow:last-child,
      .datepicker.datepicker-inline .datepicker-days table.table-condensed thead tr th.dow:last-child {
        text-align: right; }
  .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody,
  .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody {
    position: relative;
    top: 13px; }
    .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td,
    .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td {
      text-align: center; }
      .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day,
      .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day {
        font-size: .9375rem;
        padding: .5rem 0;
        color: #434a54; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day:hover,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day:hover {
          background: #ffffff; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day.active,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day.active {
          color: #fff;
          background: transparent;
          position: relative;
          z-index: 1; }
          .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day.active:before,
          .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day.active:before {
            content: "";
            width: 38px;
            height: 38px;
            background: <?php echo $color; ?>;
            border-radius: 100%;
            display: block;
            margin: auto;
            vertical-align: middle;
            position: absolute;
            top: 1px;
            z-index: -1;
            left: 0;
            right: 0; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day.today,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day.today {
          color: #fff;
          background: transparent;
          position: relative;
          z-index: 1; }
          .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.day.today:before,
          .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.day.today:before {
            content: "";
            width: 38px;
            height: 38px;
            background: #8e32e9;
            border-radius: 100%;
            display: block;
            margin: auto;
            vertical-align: middle;
            position: absolute;
            top: 1px;
            z-index: -1;
            left: 0;
            right: 0; }
      .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.old.day,
      .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.old.day {
        color: #d9dde3; }
      .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range-start, .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range-end,
      .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range-start,
      .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range-end {
        background: transparent;
        position: relative; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range-start::before, .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range-end::before,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range-start::before,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range-end::before {
          content: "";
          width: 28px;
          height: 28px;
          background: rgba(56, 206, 60, 0.2);
          border-radius: 4px;
          display: block;
          margin: auto;
          vertical-align: middle;
          position: absolute;
          top: 6px;
          z-index: -1;
          left: 0;
          right: 0; }
      .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range,
      .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range {
        position: relative;
        background: transparent; }
        .datepicker.datepicker-dropdown .datepicker-days table.table-condensed tbody td.range::before,
        .datepicker.datepicker-inline .datepicker-days table.table-condensed tbody td.range::before {
          content: "";
          width: 28px;
          height: 28px;
          background: #eee;
          border-radius: 4px;
          display: block;
          margin: auto;
          vertical-align: middle;
          position: absolute;
          top: 6px;
          z-index: -1;
          left: 0;
          right: 0; }
  .datepicker.datepicker-dropdown .datepicker-days,
  .datepicker.datepicker-dropdown .datepicker-months,
  .datepicker.datepicker-dropdown .datepicker-years,
  .datepicker.datepicker-dropdown .datepicker-decades,
  .datepicker.datepicker-dropdown .datepicker-centuries,
  .datepicker.datepicker-inline .datepicker-days,
  .datepicker.datepicker-inline .datepicker-months,
  .datepicker.datepicker-inline .datepicker-years,
  .datepicker.datepicker-inline .datepicker-decades,
  .datepicker.datepicker-inline .datepicker-centuries {
    padding: .8rem .7rem; }
    .datepicker.datepicker-dropdown .datepicker-days table.table-condensed,
    .datepicker.datepicker-dropdown .datepicker-months table.table-condensed,
    .datepicker.datepicker-dropdown .datepicker-years table.table-condensed,
    .datepicker.datepicker-dropdown .datepicker-decades table.table-condensed,
    .datepicker.datepicker-dropdown .datepicker-centuries table.table-condensed,
    .datepicker.datepicker-inline .datepicker-days table.table-condensed,
    .datepicker.datepicker-inline .datepicker-months table.table-condensed,
    .datepicker.datepicker-inline .datepicker-years table.table-condensed,
    .datepicker.datepicker-inline .datepicker-decades table.table-condensed,
    .datepicker.datepicker-inline .datepicker-centuries table.table-condensed {
      width: 100%; }

.datepicker.datepicker-inline {
  width: 100%;
  max-width: 100%;
  min-width: 250px; }
  .datepicker.datepicker-inline thead tr th.prev {
    color: grey;
    padding-bottom: 0.5rem;
    padding-top: 0.5rem; }
  .datepicker.datepicker-inline thead tr th.datepicker-switch {
    color: #1bdbe0;
    padding-bottom: 0.5rem;
    padding-top: 0.5rem; }
  .datepicker.datepicker-inline thead tr th.next {
    color: grey;
    padding-bottom: 0.5rem;
    padding-top: 0.5rem; }

.datepicker > div {
  display: initial; }

.datepicker-custom {
  width: 100%;
  padding: 0; }
  .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed,
  .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed,
  .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed,
  .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed,
  .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed {
    margin-top: 40px;
    width: 100%; }
    .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr:nth-child(2),
    .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr:nth-child(2),
    .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr:nth-child(2),
    .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr:nth-child(2),
    .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr:nth-child(2) {
      position: absolute;
      top: 30px;
      left: 35px;
      right: 35px;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex; }
      .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr:nth-child(2) th,
      .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr:nth-child(2) th,
      .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr:nth-child(2) th,
      .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr:nth-child(2) th,
      .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr:nth-child(2) th {
        padding: 0; }
      .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr:nth-child(2) .datepicker-switch,
      .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr:nth-child(2) .datepicker-switch,
      .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr:nth-child(2) .datepicker-switch,
      .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr:nth-child(2) .datepicker-switch,
      .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr:nth-child(2) .datepicker-switch {
        -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
        order: -1;
        font-size: 18px;
        font-weight: 600;
        color: inherit;
        text-align: left; }
        .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr:nth-child(2) .datepicker-switch:hover,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr:nth-child(2) .datepicker-switch:hover,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr:nth-child(2) .datepicker-switch:hover,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr:nth-child(2) .datepicker-switch:hover,
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr:nth-child(2) .datepicker-switch:hover {
          background-color: transparent; }
        .rtl .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr:nth-child(2) .datepicker-switch, .rtl
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr:nth-child(2) .datepicker-switch, .rtl
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr:nth-child(2) .datepicker-switch, .rtl
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr:nth-child(2) .datepicker-switch, .rtl
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr:nth-child(2) .datepicker-switch {
          text-align: right; }
      .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr:nth-child(2) .prev,
      .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr:nth-child(2) .prev,
      .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr:nth-child(2) .prev,
      .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr:nth-child(2) .prev,
      .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr:nth-child(2) .prev {
        margin-left: auto;
        font-size: 24px;
        width: 30px; }
        .rtl .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr:nth-child(2) .prev, .rtl
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr:nth-child(2) .prev, .rtl
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr:nth-child(2) .prev, .rtl
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr:nth-child(2) .prev, .rtl
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr:nth-child(2) .prev {
          margin-left: 0;
          -webkit-box-ordinal-group: 2;
          -ms-flex-order: 1;
          order: 1; }
      .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr:nth-child(2) .next,
      .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr:nth-child(2) .next,
      .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr:nth-child(2) .next,
      .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr:nth-child(2) .next,
      .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr:nth-child(2) .next {
        font-size: 24px;
        width: 30px; }
        .rtl .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr:nth-child(2) .next, .rtl
        .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr:nth-child(2) .next, .rtl
        .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr:nth-child(2) .next, .rtl
        .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr:nth-child(2) .next, .rtl
        .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr:nth-child(2) .next {
          margin-right: auto; }
    .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr:nth-child(3),
    .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr:nth-child(3),
    .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr:nth-child(3),
    .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr:nth-child(3),
    .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr:nth-child(3) {
      border-bottom: solid 1px #e8e5e5; }
      .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed thead tr:nth-child(3) th.dow,
      .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed thead tr:nth-child(3) th.dow,
      .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed thead tr:nth-child(3) th.dow,
      .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed thead tr:nth-child(3) th.dow,
      .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed thead tr:nth-child(3) th.dow {
        font-weight: 600;
        font-size: 14px;
        color: #a7afb7;
        padding-bottom: 25px;
        text-align: center; }
    .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed tbody tr:first-child td,
    .datepicker-custom .datepicker.datepicker-inline .datepicker-months .table-condensed tbody tr:first-child td,
    .datepicker-custom .datepicker.datepicker-inline .datepicker-years .table-condensed tbody tr:first-child td,
    .datepicker-custom .datepicker.datepicker-inline .datepicker-decades .table-condensed tbody tr:first-child td,
    .datepicker-custom .datepicker.datepicker-inline .datepicker-centuries .table-condensed tbody tr:first-child td {
      padding-top: 20px; }
  .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed tbody tr td.day {
    padding: 15px 10px;
    text-align: center;
    font-size: 12px;
    color: #111111; }
    .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed tbody tr td.day.old, .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed tbody tr td.day.new {
      color: #a7afb7; }
    .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed tbody tr td.day.active:before {
      top: 4px;
      left: 0;
      right: 0; }
  .datepicker-custom .datepicker.datepicker-inline .datepicker-days .table-condensed tbody tr:first-child td.day {
    padding-top: 25px; }

/* Dropify */
.dropify-wrapper {
  border: 2px dashed #e8e5e5;
  border-radius: 7px; }
  .dropify-wrapper:hover {
    background-size: 30px 30px;
    background-image: linear-gradient(135deg, #F2F7F8 25%, transparent 25%, transparent 50%, #F2F7F8 50%, #F2F7F8 75%, transparent 75%, transparent);
    -webkit-animation: stripes 2s linear infinite;
    animation: stripes 2s linear infinite; }
  .dropify-wrapper .dropify-message span.file-icon:before {
    display: inline-block;
    font: normal normal normal 24px/1 "simple-line-icons";
    font-size: inherit;
    text-rendering: auto;
    line-height: inherit;
    -webkit-font-smoothing: antialiased;
    content: '\e084';
    color: #343a40;
    font-size: 1.25rem; }
  .dropify-wrapper .dropify-message p {
    font-size: .8125rem;
    color: #343a40; }
  .dropify-wrapper .dropify-preview .dropify-infos {
    background: rgba(255, 255, 255, 0.9); }
    .dropify-wrapper .dropify-preview .dropify-infos .dropify-infos-inner .dropify-filename {
      color: #1bdbe0;
      font-size: 20px;
      font-weight: 400; }
    .dropify-wrapper .dropify-preview .dropify-infos .dropify-infos-inner .dropify-infos-message {
      color: #333;
      font-weight: 500; }
  .dropify-wrapper .dropify-preview .dropify-render img {
    opacity: 0.7; }
  .dropify-wrapper .dropify-clear {
    background: #fff;
    border: none;
    font-weight: 700;
    color: #434a54; }

/* Dropzone */
.dropzone {
  border: 1px solid #e8e5e5;
  min-height: 200px; }
  .dropzone .dz-message {
    text-align: center;
    width: 100%; }
    .dropzone .dz-message span {
      font-size: .8125rem;
      color: #343a40; }
  .dropzone .dz-preview {
    margin: 5px; }
    .dropzone .dz-preview .dz-image {
      width: 63px;
      height: 63px;
      border-radius: 6px; }
    .dropzone .dz-preview .dz-error-message {
      top: 80px;
      left: -35px; }
    .dropzone .dz-preview .dz-success-mark,
    .dropzone .dz-preview .dz-error-mark {
      margin-left: -17px; }
      .dropzone .dz-preview .dz-success-mark svg,
      .dropzone .dz-preview .dz-error-mark svg {
        width: 35px;
        height: 35px; }

/* Flot chart */
.flot-chart-container {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  width: 100%;
  height: 100%;
  min-height: 300px;
  max-height: 100%; }

.flot-chart {
  width: 100%;
  position: relative;
  max-width: none;
  height: 400px; }
  .flot-chart canvas {
    position: absolute;
    top: 0;
    bottom: 0; }

/* Full Calendar */
.fc button {
  height: auto;
  background-image: none;
  text-shadow: none;
  font-family: "Open Sans", sans-serif;
  background-color: #ffffff;
  border-color: #e8e5e5;
  text-transform: capitalize;
  color: #a8b2b9; }
  .fc button .fc-icon-right-single-arrow:after,
  .fc button .fc-icon-left-single-arrow:after {
    color: #a8b2b9;
    font-family: "simple-line-icons";
    font-size: 13px;
    top: 0; }
  .fc button .fc-icon-right-single-arrow:after {
    content: "\e606"; }
  .fc button .fc-icon-left-single-arrow:after {
    content: "\e605"; }

.fc .fc-button-group .fc-button {
  background-color: #ffffff;
  margin: 0; }
  .fc .fc-button-group .fc-button.fc-state-active {
    color: #ff4d6b; }

.fc .fc-header-toolbar {
  margin-top: 2rem; }
  .fc .fc-header-toolbar .fc-center h2 {
    font-size: 1rem; }

.fc .fc-widget-header {
  border: 0; }
  .fc .fc-widget-header table tr th {
    border-width: 0 0 1px 0;
    text-align: right;
    padding: 1rem; }
    .fc .fc-widget-header table tr th span {
      font-size: 10px;
      text-transform: uppercase;
      color: #a8b2b9;
      letter-spacing: 1px; }

.fc .fc-content-skeleton table tr td {
  padding: .5rem;
  font-size: .875rem; }

.fc .fc-event {
  border: 0;
  color: #ffffff;
  padding: .5rem; }
  .fc .fc-event.fc-start {
    background: #1bdbe0;
    border-radius: 4px;
    border-left: 4px solid #1bdbe0; }
  .fc .fc-event.fc-not-start, .fc .fc-event.fc-not-end {
    background: #ff4d6b;
    border-left: 4px solid #ff4d6b;
    padding-left: .5rem; }
  .fc .fc-event.fc-not-end {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0; }
  .fc .fc-event .fc-title,
  .fc .fc-event .fc-time {
    color: #ffffff; }

.fc-external-events .fc-event {
  background: #ffffff;
  color: #000;
  border-width: 0 0 0 4px;
  padding: 16px;
  border-radius: 0;
  margin-bottom: 10px; }
  .fc-external-events .fc-event:nth-child(1) {
    border-color: #1bdbe0; }
  .fc-external-events .fc-event:nth-child(2) {
    border-color: #ff4d6b; }
  .fc-external-events .fc-event:nth-child(3) {
    border-color: <?php echo $color; ?>; }
  .fc-external-events .fc-event:nth-child(4) {
    border-color: #8e32e9; }
  .fc-external-events .fc-event:nth-child(4) {
    border-color: #ffde73; }

/* Google Charts */
.google-chart-container .google-charts {
  width: 100%;
  height: 280px;
  min-height: 280px;
  min-width: 100%; }

/* Icheck */
.icheck,
.icheck-flat,
.icheck-square,
.icheck-line {
  margin-bottom: .5rem; }
  .icheck label,
  .icheck-flat label,
  .icheck-square label,
  .icheck-line label {
    font-size: .8125rem;
    line-height: 1.5;
    margin-left: 5px;
    margin-bottom: 0; }

/* Jquery File Upload */
.ajax-upload-dragdrop {
  border-color: #e8e5e5;
  border-style: dotted;
  max-width: 100%; }
  .ajax-upload-dragdrop span b {
    font-size: .8125rem;
    color: #343a40;
    font-weight: initial; }
  .ajax-upload-dragdrop .ajax-file-upload {
    background: #8e32e9;
    -webkit-box-shadow: none;
    box-shadow: none;
    height: auto; }

.ajax-file-upload-container {
  min-height: 100px; }
  .ajax-file-upload-container .ajax-file-upload-statusbar {
    max-width: 100%; }

/* Js-grid */
.jsgrid .jsgrid-button {
  background-image: url(../images/sprites/jsgrid-icons.png); }

.jsgrid .jsgrid-grid-header {
  border: 1px solid #e8e5e5;
  border-top: 0; }

.jsgrid .jsgrid-table th {
  font-weight: initial;
  font-family: "Open Sans", sans-serif;
  font-weight: 700; }

.jsgrid .jsgrid-table .jsgrid-filter-row input[type=number] {
  padding: .56rem 0; }

.jsgrid .jsgrid-header-sort:before {
  margin-top: 10px;
  float: right; }

.jsgrid .jsgrid-header-sort-asc:before {
  border-color: transparent transparent #343a40; }

.jsgrid .jsgrid-header-sort-desc:before {
  border-color: #343a40 transparent transparent; }

.jsgrid .jsgrid-pager {
  line-height: 2; }

.jsgrid .jsgrid-pager-current-page {
  padding: 0.5rem 0.75rem;
  font-weight: initial;
  line-height: 1.25; }

/* Jvectormap */
.jvectormap-container {
  background: #ffffff; }

/* Light Gallery */
.lightGallery {
  width: 100%;
  margin: 0; }
  .lightGallery .image-tile {
    position: relative;
    margin-bottom: 30px; }
    .lightGallery .image-tile .demo-gallery-poster {
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0; }
      .lightGallery .image-tile .demo-gallery-poster img {
        display: block;
        margin: auto;
        width: 40%;
        max-width: 60px;
        min-width: 20px; }
    .lightGallery .image-tile img {
      max-width: 100%;
      width: 100%; }

/* Listify */
.listify-list input {
  border: 1px solid #f2f7f8;
  color: #aab2bd;
  background: #fff; }

.listify-list ul.list {
  list-style: none;
  padding-left: 0; }
  .listify-list ul.list li {
    display: block;
    border-bottom: 1px solid #e8e5e5;
    padding: 15px 10px; }
    .listify-list ul.list li h5 {
      color: #1bdbe0; }
    .listify-list ul.list li p {
      color: #aab2bd;
      margin: 0; }

/* No-ui-slider */
.noUi-target {
  border: none;
  -webkit-box-shadow: none;
  box-shadow: none;
  border-radius: 0px; }
  .noUi-target .noUi-handle {
    width: 20px;
    height: 20px;
    border-radius: 100%; }
    .noUi-target .noUi-handle:before {
      display: none; }
    .noUi-target .noUi-handle:after {
      content: "";
      width: 10px;
      height: 10px;
      border-radius: 100%;
      left: 4px;
      top: 4px; }
  .noUi-target.noUi-horizontal {
    height: 0.25rem; }
    .noUi-target.noUi-horizontal .noUi-handle {
      top: -8px; }
  .noUi-target.noUi-vertical {
    width: 0.25rem;
    height: 156px;
    display: inline-block; }
    .noUi-target.noUi-vertical .noUi-handle {
      left: -7px; }
  .noUi-target .noUi-base {
    background: #e6e9ed;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: none; }
    .noUi-target .noUi-base .noUi-connect {
      background: #1bdbe0;
      -webkit-box-shadow: none;
      box-shadow: none; }
    .noUi-target .noUi-base .noUi-origin {
      background: <?php echo $color; ?>; }
  .noUi-target .noUi-pips .noUi-marker-horizontal,
  .noUi-target .noUi-pips .noUi-marker-vertical {
    background: #e8e5e5; }
  .noUi-target .noUi-pips .noUi-marker-horizontal {
    height: 9px;
    width: 1px; }
  .noUi-target .noUi-pips .noUi-marker-vertical {
    height: 1px;
    width: 9px; }
  .noUi-target .noUi-pips .noUi-value {
    color: #000;
    font-size: 0.94rem;
    font-family: "Open Sans", sans-serif;
    font-emphasize: 700; }

/* Slider Color variations */
.slider-primary .noUi-base .noUi-connect {
  background: #1bdbe0; }

.slider-primary .noUi-base .noUi-origin {
  background: #1bdbe0; }
  .slider-primary .noUi-base .noUi-origin .noUi-handle:after {
    background: #1bdbe0; }
  .slider-primary .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
    background: #1bdbe0;
    color: #ffffff; }

.slider-secondary .noUi-base .noUi-connect {
  background: #d8d8d8; }

.slider-secondary .noUi-base .noUi-origin {
  background: #d8d8d8; }
  .slider-secondary .noUi-base .noUi-origin .noUi-handle:after {
    background: #d8d8d8; }
  .slider-secondary .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
    background: #d8d8d8;
    color: #ffffff; }

.slider-success .noUi-base .noUi-connect {
  background: <?php echo $color; ?>; }

.slider-success .noUi-base .noUi-origin {
  background: <?php echo $color; ?>; }
  .slider-success .noUi-base .noUi-origin .noUi-handle:after {
    background: <?php echo $color; ?>; }
  .slider-success .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
    background: <?php echo $color; ?>;
    color: #ffffff; }

.slider-info .noUi-base .noUi-connect {
  background: #8e32e9; }

.slider-info .noUi-base .noUi-origin {
  background: #8e32e9; }
  .slider-info .noUi-base .noUi-origin .noUi-handle:after {
    background: #8e32e9; }
  .slider-info .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
    background: #8e32e9;
    color: #ffffff; }

.slider-warning .noUi-base .noUi-connect {
  background: #ffde73; }

.slider-warning .noUi-base .noUi-origin {
  background: #ffde73; }
  .slider-warning .noUi-base .noUi-origin .noUi-handle:after {
    background: #ffde73; }
  .slider-warning .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
    background: #ffde73;
    color: #ffffff; }

.slider-danger .noUi-base .noUi-connect {
  background: #ff4d6b; }

.slider-danger .noUi-base .noUi-origin {
  background: #ff4d6b; }
  .slider-danger .noUi-base .noUi-origin .noUi-handle:after {
    background: #ff4d6b; }
  .slider-danger .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
    background: #ff4d6b;
    color: #ffffff; }

.slider-light .noUi-base .noUi-connect {
  background: #f8f9fa; }

.slider-light .noUi-base .noUi-origin {
  background: #f8f9fa; }
  .slider-light .noUi-base .noUi-origin .noUi-handle:after {
    background: #f8f9fa; }
  .slider-light .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
    background: #f8f9fa;
    color: #ffffff; }

.slider-dark .noUi-base .noUi-connect {
  background: #3e4b5b; }

.slider-dark .noUi-base .noUi-origin {
  background: #3e4b5b; }
  .slider-dark .noUi-base .noUi-origin .noUi-handle:after {
    background: #3e4b5b; }
  .slider-dark .noUi-base .noUi-origin .noUi-handle .noUi-tooltip {
    background: #3e4b5b;
    color: #ffffff; }

/* Owl-carousel */
.owl-carousel img {
  border-radius: 4px; }

.owl-carousel.full-width .owl-nav {
  position: absolute;
  top: 30%;
  width: 100%;
  margin-top: 0; }
  .owl-carousel.full-width .owl-nav .owl-prev,
  .owl-carousel.full-width .owl-nav .owl-next {
    background: transparent;
    color: #ffffff; }
    .owl-carousel.full-width .owl-nav .owl-prev i:before,
    .owl-carousel.full-width .owl-nav .owl-next i:before {
      width: 60px;
      height: 60px;
      background: rgba(0, 0, 0, 0.5);
      border-radius: 100%;
      font-size: 1.875rem;
      font-weight: bold;
      line-height: 2; }
  .owl-carousel.full-width .owl-nav .owl-prev {
    float: left; }
  .owl-carousel.full-width .owl-nav .owl-next {
    float: right; }

.owl-carousel.full-width .owl-dots {
  margin-top: 1rem; }

.owl-carousel .item-video {
  width: 200px;
  height: 200px; }

/* Progressbar-js */
.progress-bar-js-line {
  height: 6px; }

.progressbar-js-circle {
  width: 100%;
  position: relative; }

/* Pws-tabs */
.pws_tabs_container ul.pws_tabs_controll {
  border-bottom: 1px solid #1bdbe0; }
  .pws_tabs_container ul.pws_tabs_controll li:first-child a {
    border-radius: 5px 0px 0px 0px; }
  .pws_tabs_container ul.pws_tabs_controll li:last-child a {
    border-right: 1px solid #1bdbe0;
    border-radius: 0px 5px 0px 0px; }
  .pws_tabs_container ul.pws_tabs_controll li a {
    border: 1px solid #1bdbe0;
    border-bottom: none;
    border-right: none;
    background: #fff;
    color: #1bdbe0;
    padding: 0.6em 1.3em;
    margin-right: 0; }
    .pws_tabs_container ul.pws_tabs_controll li a:hover {
      background: #fff;
      color: #1bdbe0; }
    .pws_tabs_container ul.pws_tabs_controll li a.pws_tab_active {
      background: #1bdbe0;
      color: #fff; }

.pws_tabs_container .demo-tabs {
  border: 1px solid #1bdbe0;
  border-radius: 0px 5px 5px 5px;
  overflow: hidden;
  margin-bottom: 45px;
  padding-top: 3.5rem; }
  .pws_tabs_container .demo-tabs .CodeMirror {
    margin-bottom: 20px; }

.pws_tabs_container.pws_tabs_vertical .pws_tabs_controll {
  border-right: none;
  border-bottom: none; }
  .pws_tabs_container.pws_tabs_vertical .pws_tabs_controll li:first-child a {
    border-radius: 5px 0px 0px 0px; }
  .pws_tabs_container.pws_tabs_vertical .pws_tabs_controll li:last-child a {
    border-bottom: 1px solid #1bdbe0;
    border-radius: 0px 0px 0px 5px;
    border-right: 0px; }
  .pws_tabs_container.pws_tabs_vertical .pws_tabs_controll li a {
    border-radius: 0px;
    border: 1px solid #1bdbe0;
    border-right: none;
    border-bottom: none;
    margin-bottom: 0; }

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_list {
  margin-bottom: 0; }

.pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll {
  border-top: 1px solid #1bdbe0;
  border-right: none;
  border-bottom: none; }
  .pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll li:first-child a {
    border-radius: 0px 0px 0px 5px; }
  .pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll li:last-child a {
    border-radius: 0px 0px 5px 0px;
    border-right: 1px solid #1bdbe0; }
  .pws_tabs_container.pws_tabs_horizontal_bottom .pws_tabs_controll li a {
    border-radius: 0px;
    border: 1px solid #1bdbe0;
    border-top: none;
    border-right: none;
    margin-right: 0;
    margin-bottom: 0; }

.pws_tabs_container.pws_tabs_rtl .pws_tabs_controll li:first-child a {
  border-radius: 0px 5px 0px 0px;
  border-right: 1px solid #1bdbe0; }

.pws_tabs_container.pws_tabs_rtl .pws_tabs_controll li:last-child a {
  border-right: none;
  border-radius: 5px 0px 0px 0px; }

.pws_tabs_container.pws_tabs_rtl .pws_tabs_controll li a {
  border: 1px solid #1bdbe0;
  border-bottom: none;
  border-right: none;
  margin-right: 0;
  margin-left: 0; }

/* Quill Editor */
.quill-container {
  height: 300px; }

.ql-toolbar.ql-snow,
.quill-container.ql-snow {
  border-color: #e8e5e5; }

/* Rating */
.br-theme-fontawesome-stars .br-widget a,
.br-theme-css-stars .br-widget a {
  font-size: 20px; }
  .br-theme-fontawesome-stars .br-widget a.br-selected:after, .br-theme-fontawesome-stars .br-widget a.br-active:after,
  .br-theme-css-stars .br-widget a.br-selected:after,
  .br-theme-css-stars .br-widget a.br-active:after {
    color: #1bdbe0; }

.br-theme-bars-1to10 .br-widget a,
.br-theme-bars-movie .br-widget a,
.br-theme-bars-pill .br-widget a,
.br-theme-bars-reversed .br-widget a,
.br-theme-bars-horizontal .br-widget a {
  background-color: rgba(27, 219, 224, 0.6);
  color: #1bdbe0; }
  .br-theme-bars-1to10 .br-widget a.br-selected, .br-theme-bars-1to10 .br-widget a.br-active,
  .br-theme-bars-movie .br-widget a.br-selected,
  .br-theme-bars-movie .br-widget a.br-active,
  .br-theme-bars-pill .br-widget a.br-selected,
  .br-theme-bars-pill .br-widget a.br-active,
  .br-theme-bars-reversed .br-widget a.br-selected,
  .br-theme-bars-reversed .br-widget a.br-active,
  .br-theme-bars-horizontal .br-widget a.br-selected,
  .br-theme-bars-horizontal .br-widget a.br-active {
    background-color: #1bdbe0; }

.br-theme-bars-square .br-widget a {
  border-color: rgba(27, 219, 224, 0.6);
  color: rgba(27, 219, 224, 0.6); }
  .br-theme-bars-square .br-widget a.br-selected, .br-theme-bars-square .br-widget a.br-active {
    border-color: #1bdbe0;
    color: #1bdbe0; }

.br-theme-bars-movie .br-widget .br-current-rating,
.br-theme-bars-reversed .br-widget .br-current-rating,
.br-theme-bars-1to10 .br-widget .br-current-rating,
.br-theme-bars-horizontal .br-widget .br-current-rating {
  color: #343a40;
  font-size: 0.875rem;
  font-weight: initial; }

.br-theme-bars-1to10 {
  height: 26px; }
  .br-theme-bars-1to10 .br-widget {
    height: 24px; }
    .br-theme-bars-1to10 .br-widget .br-current-rating {
      line-height: 1; }

.br-theme-bars-pill .br-widget a {
  line-height: 2.5; }

/* Select2 */
.select2-container--default .select2-results__option--highlighted[aria-selected] {
  background: <?php echo $color; ?>; }

.select2-container--default .select2-selection--single,
.select2-container--default .select2-dropdown,
.select2-container--default .select2-selection--multiple {
  border-color: #e8e5e5; }
  .select2-container--default .select2-selection--single .select2-search__field,
  .select2-container--default .select2-dropdown .select2-search__field,
  .select2-container--default .select2-selection--multiple .select2-search__field {
    border-color: #e8e5e5; }

.select2-container--default .select2-selection--single {
  height: auto; }
  .select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 14px; }

.select2-container--default .select2-dropdown {
  font-size: .8125rem; }

.select2-container--default.select2-container--focus .select2-selection--multiple {
  border-color: #e8e5e5; }

.select2-container--default .select2-selection--multiple .select2-selection__choice {
  color: #ffffff;
  border: 0;
  border-radius: 3px;
  padding: 6px;
  font-size: .625rem;
  font-family: inherit;
  line-height: 1; }
  .select2-container--default .select2-selection--multiple .select2-selection__choice .select2-selection__choice__remove {
    color: #ffffff; }
  .select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+1) {
    background: #1bdbe0; }
  .select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+2) {
    background: <?php echo $color; ?>; }
  .select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+3) {
    background: #8e32e9; }
  .select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+4) {
    background: #ff4d6b; }
  .select2-container--default .select2-selection--multiple .select2-selection__choice:nth-child(5n+5) {
    background: #ffde73; }

/* Summernote Editor */
.note-editor.note-frame {
  border: 1px solid #e8e5e5; }

.note-popover {
  border: 1px solid #e8e5e5; }

/* SweetAlert */
.swal2-container {
  z-index: 1500; }

.swal2-modal {
  min-height: 315px;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column;
  border-radius: 10px; }
  .swal2-modal .swal2-title {
    font-size: 25px;
    line-height: 1;
    font-family: "Open Sans", sans-serif;
    font-weight: 600;
    color: #343a40;
    font-weight: initial;
    margin-bottom: 0; }
  .swal2-modal .swal2-icon,
  .swal2-modal .swal2-success-ring {
    margin-top: 0;
    margin-bottom: 42px; }
  .swal2-modal .swal2-buttonswrapper {
    margin-top: 0;
    padding: 0; }
    .swal2-modal .swal2-buttonswrapper .swal2-styled {
      margin-top: 0;
      font-weight: initial; }
      .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-confirm {
        font-weight: initial;
        margin-top: 32px; }
      .swal2-modal .swal2-buttonswrapper .swal2-styled.swal2-cancel {
        margin-top: 32px;
        border: 1px solid #e8e5e5;
        color: #ffffff;
        font-weight: initial; }
  .swal2-modal .swal2-content {
    font-size: 0.875rem;
    font-family: "Open Sans", sans-serif;
    font-weight: 700;
    color: #343a40;
    font-weight: initial;
    margin-top: 11px; }
  .swal2-modal .swal2-close {
    font-size: 20px; }
  .swal2-modal .swal2-success-ring {
    left: -30px; }

/* Switchery */
.switchery {
  width: 35px;
  height: 21px;
  border-radius: 11px; }
  .switchery > small {
    width: 20px;
    height: 20px; }

.switchery-small {
  width: 25px;
  height: 13px; }
  .switchery-small > small {
    width: 13px;
    height: 13px; }

.switchery-large {
  width: 50px;
  height: 28px;
  border-radius: 14px; }
  .switchery-large > small {
    width: 27px;
    height: 27px; }

/* Tags */
div.tagsinput {
  padding: 15px 15px 10px;
  border-color: #e8e5e5; }
  div.tagsinput span.tag {
    background: #1bdbe0;
    border: 0;
    color: #ffffff;
    padding: 6px 14px;
    font-size: .8125rem;
    font-family: inherit;
    line-height: 1; }
    div.tagsinput span.tag a {
      color: #ffffff; }

/* TinyMCE Editor */
.mce-tinymce.mce-panel,
.mce-tinymce .mce-panel {
  border-color: #e8e5e5; }

/* Toast */
.jq-toast-wrap .jq-icon-success {
  background-color: <?php echo $color; ?>; }

.jq-toast-wrap .jq-icon-info {
  background-color: #8e32e9; }

.jq-toast-wrap .jq-icon-warning {
  background-color: #ffde73; }

.jq-toast-wrap .jq-icon-error {
  background-color: #ff4d6b; }

/* Typeahead */
.tt-menu,
.gist {
  text-align: left; }

.twitter-typeahead {
  max-width: 100%; }

.typeahead {
  background-color: #ffffff; }
  .typeahead:focus {
    border-color: #e8e5e5; }

.tt-query {
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075); }

.tt-hint {
  color: #434a54; }

.tt-menu {
  width: 100%;
  margin: 12px 0;
  padding: 8px 0;
  background-color: #ffffff;
  border: 1px solid #e8e5e5;
  border-radius: 8px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2); }

.tt-suggestion {
  padding: 3px 20px;
  font-size: inherit; }
  .tt-suggestion:hover {
    cursor: pointer;
    color: #ffffff;
    background-color: #1bdbe0; }
  .tt-suggestion .tt-cursor {
    color: #ffffff;
    background-color: #1bdbe0; }
  .tt-suggestion p {
    margin: 0; }

/* Wysi Editor */
.wysi-editor #toolbar [data-wysihtml-action] {
  float: right; }

.wysi-editor #toolbar,
.wysi-editor textarea {
  width: 920px;
  padding: 5px;
  -webkit-box-sizing: border-box;
  -ms-box-sizing: border-box;
  box-sizing: border-box; }

.wysi-editor textarea {
  height: 280px;
  border: 1px solid #e8e5e5;
  font-family: inherit;
  font-size: 1rem; }

.wysi-editor textarea:focus {
  color: black;
  border: 1px solid #e8e5e5; }

.wysi-editor .wysihtml-action-active,
.wysi-editor .wysihtml-command-active {
  font-weight: bold; }

.wysi-editor [data-wysihtml-dialog] {
  margin: 5px 0 0;
  padding: 5px;
  border: 1px solid #666; }

.wysi-editor a[data-wysihtml-command-value="red"] {
  color: #ff4d6b; }

.wysi-editor a[data-wysihtml-command-value="green"] {
  color: <?php echo $color; ?>; }

.wysi-editor a[data-wysihtml-command-value="blue"] {
  color: #8e32e9; }

.wysi-editor .wysihtml-editor,
.wysi-editor .wysihtml-editor table td {
  outline: 1px dotted #e8e5e5; }

.wysi-editor code {
  background: #ddd;
  padding: 10px;
  white-space: pre;
  display: block;
  margin: 1em 0; }

.wysi-editor .toolbar {
  display: block;
  border-radius: 3px;
  border: 1px solid #fff;
  margin-bottom: 9px;
  line-height: 1em; }

.wysi-editor .toolbar a {
  display: inline-block;
  height: 1.5em;
  border-radius: 3px;
  font-size: 1rem;
  line-height: 1.5em;
  text-decoration: none;
  background: #ffffff;
  border: 1px solid #e8e5e5;
  padding: 0 0.2em;
  margin: 1px 0;
  color: #1bdbe0; }

.wysi-editor .toolbar .wysihtml-action-active,
.wysi-editor .toolbar a.wysihtml-command-active {
  background: #222;
  color: white; }

.wysi-editor .toolbar .block {
  padding: 1px;
  display: inline-block;
  background: #eee;
  border-radius: 3px;
  margin: 0 1px 1px 0; }

.wysi-editor div[data-wysihtml-dialog="createTable"] {
  position: absolute;
  background: white; }

.wysi-editor div[data-wysihtml-dialog="createTable"] td {
  width: 10px;
  height: 5px;
  border: 1px solid #e8e5e5; }

.wysi-editor .wysihtml-editor table td.wysiwyg-tmp-selected-cell {
  outline: 2px solid <?php echo $color; ?>; }

.wysi-editor .editor-container-tag {
  padding: 5px 10px;
  position: absolute;
  color: white;
  background: rgba(0, 0, 0, 0.8);
  width: 100px;
  margin-left: -50px;
  -webkit-transition: 0.1s left, 0.1s top; }

.wysi-editor .wrap {
  max-width: 700px;
  margin: 40px; }

.wysi-editor .editable .wysihtml-uneditable-container {
  outline: 1px dotted #e8e5e5;
  position: relative; }

.wysi-editor .editable .wysihtml-uneditable-container-right {
  float: right;
  width: 50%;
  margin-left: 2em;
  margin-bottom: 1em; }

.wysi-editor .editable .wysihtml-uneditable-container-left {
  float: left;
  width: 50%;
  margin-right: 2em;
  margin-bottom: 1em; }

/* X-editable */
.editable-form .editable {
  color: #343a40;
  font-size: .8125rem; }

.editable-form .editable-click {
  border-color: #343a40; }

.editable-container.editable-inline {
  max-width: 100%; }
  .editable-container.editable-inline .editableform {
    max-width: 100%; }
    .editable-container.editable-inline .editableform .control-group {
      max-width: 100%;
      white-space: initial; }
      .editable-container.editable-inline .editableform .control-group > div {
        max-width: 100%; }
      .editable-container.editable-inline .editableform .control-group .editable-input input,
      .editable-container.editable-inline .editableform .control-group .editable-input textarea {
        max-width: 100%; }
      .editable-container.editable-inline .editableform .control-group .editable-input .combodate .form-control, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .asColorPicker-input, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .dataTables_wrapper select, .dataTables_wrapper .editable-container.editable-inline .editableform .control-group .editable-input .combodate select, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .editable-container.editable-inline .editableform .control-group .editable-input .combodate input[type=text],
      .editable-container.editable-inline .editableform .control-group .editable-input .combodate .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .editable-container.editable-inline .editableform .control-group .editable-input .combodate select, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .editable-container.editable-inline .editableform .control-group .editable-input .combodate input[type=number], .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-container--default .select2-selection--single, .select2-container--default .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-selection--single, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .editable-container.editable-inline .editableform .control-group .editable-input .combodate .select2-search__field, .editable-container.editable-inline .editableform .control-group .editable-input .combodate .typeahead,
      .editable-container.editable-inline .editableform .control-group .editable-input .combodate .tt-query,
      .editable-container.editable-inline .editableform .control-group .editable-input .combodate .tt-hint {
        padding-left: 0;
        padding-right: 0; }
      @media (max-width: 991px) {
        .editable-container.editable-inline .editableform .control-group .editable-buttons {
          display: block;
          margin-top: 10px; } }

/* Wizard */
.wizard {
  display: block;
  width: 100%;
  overflow: hidden; }
  .wizard a {
    outline: 0; }
  .wizard ul {
    list-style: none;
    padding: 0;
    margin: 0; }
    .wizard ul > li {
      display: block;
      padding: 0; }
  .wizard > .steps {
    position: relative;
    display: block;
    width: 100%; }
    .wizard > .steps .current-info {
      position: absolute;
      left: -999em; }
    .wizard > .steps .number {
      font-size: 0.875rem; }
    .wizard > .steps > ul > li {
      width: 25%;
      float: left;
      text-align: center; }
      @media (max-width: 767px) {
        .wizard > .steps > ul > li {
          width: 50%; } }
    .wizard > .steps a {
      display: block;
      width: auto;
      margin: 0 0.5em 0.5em;
      padding: 1em 1em;
      text-decoration: none;
      border-radius: 5px;
      font-size: 0.875rem;
      font-family: "Open Sans", sans-serif;
      font-weight: 600; }
      .wizard > .steps a:hover {
        display: block;
        width: auto;
        margin: 0 0.5em 0.5em;
        padding: 1em;
        text-decoration: none;
        border-radius: 5px; }
      .wizard > .steps a:active {
        display: block;
        width: auto;
        margin: 0 0.5em 0.5em;
        padding: 1em;
        text-decoration: none;
        border-radius: 5px; }
    .wizard > .steps .disabled a {
      background: #e6e9ed;
      color: #434a54;
      cursor: default; }
      .wizard > .steps .disabled a:hover {
        background: #e6e9ed;
        color: #434a54;
        cursor: default; }
      .wizard > .steps .disabled a:active {
        background: #e6e9ed e;
        color: #434a54;
        cursor: default; }
    .wizard > .steps .current a {
      background: #1bdbe0;
      color: #ffffff;
      cursor: default; }
      .wizard > .steps .current a:hover {
        background: #1bdbe0;
        color: #ffffff;
        cursor: default; }
      .wizard > .steps .current a:active {
        background: #1bdbe0;
        color: #ffffff;
        cursor: default; }
    .wizard > .steps .done a {
      background: #73ebee;
      color: #ffffff; }
      .wizard > .steps .done a:hover {
        background: #73ebee;
        color: #ffffff; }
      .wizard > .steps .done a:active {
        background: #73ebee;
        color: #ffffff; }
    .wizard > .steps .error a {
      background: #ff4d6b;
      color: #fff; }
      .wizard > .steps .error a:hover {
        background: #ff4d6b;
        color: #fff; }
      .wizard > .steps .error a:active {
        background: #ff4d6b;
        color: #fff; }
  .wizard > .content {
    background: #ecf0f4;
    display: block;
    margin: 0.5em;
    min-height: 24em;
    overflow: hidden;
    position: relative;
    width: auto;
    border-radius: 5px; }
    .wizard > .content > .title {
      position: absolute;
      left: -999em; }
    .wizard > .content > .body {
      float: left;
      position: absolute;
      width: 95%;
      height: 95%;
      padding: 2.5%;
      overflow-y: auto; }
      .wizard > .content > .body ul {
        list-style: disc; }
        .wizard > .content > .body ul > li {
          display: list-item; }
      .wizard > .content > .body > iframe {
        border: 0 none;
        width: 100%;
        height: 100%; }
      .wizard > .content > .body input {
        display: block;
        border: 1px solid #e8e5e5; }
      .wizard > .content > .body input[type="checkbox"] {
        display: inline-block; }
      .wizard > .content > .body input.error {
        background: #fbe3e4;
        border: 1px solid #ffb3c0;
        color: #ff4d6b; }
      .wizard > .content > .body label {
        display: inline-block;
        margin-bottom: 0.5em; }
      .wizard > .content > .body label.error {
        color: #ff4d6b;
        display: inline-block;
        margin-left: 1.5em; }
  .wizard > .actions {
    padding-top: 20px;
    position: relative;
    display: block;
    text-align: right;
    width: 100%; }
    .wizard > .actions > ul {
      display: inline-block;
      text-align: right; }
      .wizard > .actions > ul > li {
        float: left;
        margin: 0 0.5em; }
  .wizard.vertical > .steps {
    display: inline;
    float: left;
    width: 30%; }
    @media (max-width: 767px) {
      .wizard.vertical > .steps {
        width: 42%; } }
    .wizard.vertical > .steps > ul > li {
      float: none;
      width: 100%;
      text-align: left; }
  .wizard.vertical > .content {
    display: inline;
    float: left;
    margin: 0 2.5% 0.5em 2.5%;
    width: 65%; }
    @media (max-width: 767px) {
      .wizard.vertical > .content {
        width: 52%; } }
  .wizard.vertical > .actions {
    display: inline;
    float: right;
    margin: 0 2.5%;
    width: 95%; }
    @media (max-width: 767px) {
      .wizard.vertical > .actions {
        margin: 0;
        width: 100%; } }
    .wizard.vertical > .actions > ul > li {
      margin: 0 0 0 1em; }

.tabcontrol {
  display: block;
  width: 100%;
  overflow: hidden; }
  .tabcontrol a {
    outline: 0; }
  .tabcontrol ul {
    list-style: none;
    padding: 0;
    margin: 0; }
    .tabcontrol ul > li {
      display: block;
      padding: 0; }
  .tabcontrol > .steps {
    position: relative;
    display: block;
    width: 100%; }
    .tabcontrol > .steps .current-info {
      position: absolute;
      left: -999em; }
    .tabcontrol > .steps > ul {
      position: relative;
      margin: 6px 0 0 0;
      top: 1px;
      z-index: 1; }
      .tabcontrol > .steps > ul > li {
        float: left;
        margin: 5px 2px 0 0;
        padding: 1px;
        -webkit-border-top-left-radius: 5px;
        -webkit-border-top-right-radius: 5px;
        -moz-border-radius-topleft: 5px;
        -moz-border-radius-topright: 5px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px; }
        .tabcontrol > .steps > ul > li:hover {
          background: #edecec;
          border: 1px solid #e8e5e5;
          padding: 0; }
        .tabcontrol > .steps > ul > li > a {
          color: #aab2bd;
          display: inline-block;
          border: 0 none;
          margin: 0;
          padding: 10px 30px;
          text-decoration: none; }
          .tabcontrol > .steps > ul > li > a:hover {
            text-decoration: none; }
      .tabcontrol > .steps > ul > li.current {
        background: #ffffff;
        border: 1px solid #e8e5e5;
        border-bottom: 0 none;
        padding: 0 0 1px 0;
        margin-top: 0; }
        .tabcontrol > .steps > ul > li.current > a {
          padding: 15px 30px 10px 30px; }
  .tabcontrol > .content {
    position: relative;
    display: inline-block;
    width: 100%;
    height: 35em;
    overflow: hidden;
    border-top: 1px solid #e8e5e5;
    padding-top: 20px; }
    .tabcontrol > .content > .title {
      position: absolute;
      left: -999em; }
    .tabcontrol > .content > .body {
      float: left;
      position: absolute;
      width: 95%;
      height: 95%;
      padding: 2.5%; }
      .tabcontrol > .content > .body ul {
        list-style: disc; }
        .tabcontrol > .content > .body ul > li {
          display: list-item; }

/*-------------------------------------------------------------------*/
/* === Landing screens === */
/* Auth */
.auth .login-half-bg {
  background: url("../../images/auth/login-bg.jpg");
  background-size: cover; }

.auth .register-half-bg {
  background: url("../../images/auth/register-bg.jpg");
  background-size: cover; }

.auth.lock-full-bg {
  background: url("../../images/auth/lockscreen-bg.jpg");
  background-size: cover; }

.auth .lock-profile-img {
  width: 90px;
  height: 90px;
  border-radius: 100%; }

.auth .auth-form-dark {
  background: rgba(0, 0, 0, 0.6);
  color: #ffffff; }
  .auth .auth-form-dark .form-control, .auth .auth-form-dark .asColorPicker-input, .auth .auth-form-dark .dataTables_wrapper select, .dataTables_wrapper .auth .auth-form-dark select, .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark input[type=text],
  .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark select, .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark input[type=number], .auth .auth-form-dark .select2-container--default .select2-selection--single, .select2-container--default .auth .auth-form-dark .select2-selection--single, .auth .auth-form-dark .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .auth .auth-form-dark .select2-search__field, .auth .auth-form-dark .typeahead,
  .auth .auth-form-dark .tt-query,
  .auth .auth-form-dark .tt-hint {
    border-color: rgba(255, 255, 255, 0.2);
    color: #ffffff; }
    .auth .auth-form-dark .form-control:-ms-input-placeholder, .auth .auth-form-dark .asColorPicker-input:-ms-input-placeholder, .auth .auth-form-dark .dataTables_wrapper select:-ms-input-placeholder, .dataTables_wrapper .auth .auth-form-dark select:-ms-input-placeholder, .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row input:-ms-input-placeholder[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark input:-ms-input-placeholder[type=text],
    .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row select:-ms-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark select:-ms-input-placeholder, .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row input:-ms-input-placeholder[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark input:-ms-input-placeholder[type=number], .auth .auth-form-dark .select2-container--default .select2-selection--single:-ms-input-placeholder, .select2-container--default .auth .auth-form-dark .select2-selection--single:-ms-input-placeholder, .auth .auth-form-dark .select2-container--default .select2-selection--single .select2-search__field:-ms-input-placeholder, .select2-container--default .select2-selection--single .auth .auth-form-dark .select2-search__field:-ms-input-placeholder, .auth .auth-form-dark .typeahead:-ms-input-placeholder,
    .auth .auth-form-dark .tt-query:-ms-input-placeholder,
    .auth .auth-form-dark .tt-hint:-ms-input-placeholder {
      color: #ffffff; }
    .auth .auth-form-dark .form-control:-moz-placeholder, .auth .auth-form-dark .asColorPicker-input:-moz-placeholder, .auth .auth-form-dark .dataTables_wrapper select:-moz-placeholder, .dataTables_wrapper .auth .auth-form-dark select:-moz-placeholder, .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row input:-moz-placeholder[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark input:-moz-placeholder[type=text],
    .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row select:-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark select:-moz-placeholder, .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row input:-moz-placeholder[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark input:-moz-placeholder[type=number], .auth .auth-form-dark .select2-container--default .select2-selection--single:-moz-placeholder, .select2-container--default .auth .auth-form-dark .select2-selection--single:-moz-placeholder, .auth .auth-form-dark .select2-container--default .select2-selection--single .select2-search__field:-moz-placeholder, .select2-container--default .select2-selection--single .auth .auth-form-dark .select2-search__field:-moz-placeholder, .auth .auth-form-dark .typeahead:-moz-placeholder,
    .auth .auth-form-dark .tt-query:-moz-placeholder,
    .auth .auth-form-dark .tt-hint:-moz-placeholder {
      color: #ffffff; }
    .auth .auth-form-dark .form-control::-moz-placeholder, .auth .auth-form-dark .asColorPicker-input::-moz-placeholder, .auth .auth-form-dark .dataTables_wrapper select::-moz-placeholder, .dataTables_wrapper .auth .auth-form-dark select::-moz-placeholder, .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark input[type=text]::-moz-placeholder,
    .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row select::-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark select::-moz-placeholder, .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::-moz-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark input[type=number]::-moz-placeholder, .auth .auth-form-dark .select2-container--default .select2-selection--single::-moz-placeholder, .select2-container--default .auth .auth-form-dark .select2-selection--single::-moz-placeholder, .auth .auth-form-dark .select2-container--default .select2-selection--single .select2-search__field::-moz-placeholder, .select2-container--default .select2-selection--single .auth .auth-form-dark .select2-search__field::-moz-placeholder, .auth .auth-form-dark .typeahead::-moz-placeholder,
    .auth .auth-form-dark .tt-query::-moz-placeholder,
    .auth .auth-form-dark .tt-hint::-moz-placeholder {
      color: #ffffff; }
    .auth .auth-form-dark .form-control::-webkit-input-placeholder, .auth .auth-form-dark .asColorPicker-input::-webkit-input-placeholder, .auth .auth-form-dark .dataTables_wrapper select::-webkit-input-placeholder, .dataTables_wrapper .auth .auth-form-dark select::-webkit-input-placeholder, .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text]::-webkit-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark input[type=text]::-webkit-input-placeholder,
    .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row select::-webkit-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark select::-webkit-input-placeholder, .auth .auth-form-dark .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number]::-webkit-input-placeholder, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-dark input[type=number]::-webkit-input-placeholder, .auth .auth-form-dark .select2-container--default .select2-selection--single::-webkit-input-placeholder, .select2-container--default .auth .auth-form-dark .select2-selection--single::-webkit-input-placeholder, .auth .auth-form-dark .select2-container--default .select2-selection--single .select2-search__field::-webkit-input-placeholder, .select2-container--default .select2-selection--single .auth .auth-form-dark .select2-search__field::-webkit-input-placeholder, .auth .auth-form-dark .typeahead::-webkit-input-placeholder,
    .auth .auth-form-dark .tt-query::-webkit-input-placeholder,
    .auth .auth-form-dark .tt-hint::-webkit-input-placeholder {
      color: #ffffff; }

.auth .auth-form-light {
  background: #ffffff; }
  .auth .auth-form-light select {
    color: #c9c8c8; }
  .auth .auth-form-light .input-group .form-control:focus, .auth .auth-form-light .asColorPicker-wrap .form-control:focus, .auth .auth-form-light .input-group .asColorPicker-input:focus, .auth .auth-form-light .asColorPicker-wrap .asColorPicker-input:focus, .auth .auth-form-light .input-group .dataTables_wrapper select:focus, .dataTables_wrapper .auth .auth-form-light .input-group select:focus, .auth .auth-form-light .asColorPicker-wrap .dataTables_wrapper select:focus, .dataTables_wrapper .auth .auth-form-light .asColorPicker-wrap select:focus, .auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group input:focus[type=text], .auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap input:focus[type=text],
  .auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group select:focus,
  .auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap select:focus, .auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group input:focus[type=number], .auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap input:focus[type=number], .auth .auth-form-light .input-group .select2-container--default .select2-selection--single:focus, .select2-container--default .auth .auth-form-light .input-group .select2-selection--single:focus, .auth .auth-form-light .asColorPicker-wrap .select2-container--default .select2-selection--single:focus, .select2-container--default .auth .auth-form-light .asColorPicker-wrap .select2-selection--single:focus, .auth .auth-form-light .input-group .select2-container--default .select2-selection--single .select2-search__field:focus, .select2-container--default .select2-selection--single .auth .auth-form-light .input-group .select2-search__field:focus, .auth .auth-form-light .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:focus, .select2-container--default .select2-selection--single .auth .auth-form-light .asColorPicker-wrap .select2-search__field:focus, .auth .auth-form-light .input-group .typeahead:focus, .auth .auth-form-light .asColorPicker-wrap .typeahead:focus,
  .auth .auth-form-light .input-group .tt-query:focus,
  .auth .auth-form-light .asColorPicker-wrap .tt-query:focus,
  .auth .auth-form-light .input-group .tt-hint:focus,
  .auth .auth-form-light .asColorPicker-wrap .tt-hint:focus, .auth .auth-form-light .input-group .form-control:active, .auth .auth-form-light .asColorPicker-wrap .form-control:active, .auth .auth-form-light .input-group .asColorPicker-input:active, .auth .auth-form-light .asColorPicker-wrap .asColorPicker-input:active, .auth .auth-form-light .input-group .dataTables_wrapper select:active, .dataTables_wrapper .auth .auth-form-light .input-group select:active, .auth .auth-form-light .asColorPicker-wrap .dataTables_wrapper select:active, .dataTables_wrapper .auth .auth-form-light .asColorPicker-wrap select:active, .auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:active[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group input:active[type=text], .auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:active[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap input:active[type=text],
  .auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row select:active, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group select:active,
  .auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row select:active, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap select:active, .auth .auth-form-light .input-group .jsgrid .jsgrid-table .jsgrid-filter-row input:active[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .input-group input:active[type=number], .auth .auth-form-light .asColorPicker-wrap .jsgrid .jsgrid-table .jsgrid-filter-row input:active[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-light .asColorPicker-wrap input:active[type=number], .auth .auth-form-light .input-group .select2-container--default .select2-selection--single:active, .select2-container--default .auth .auth-form-light .input-group .select2-selection--single:active, .auth .auth-form-light .asColorPicker-wrap .select2-container--default .select2-selection--single:active, .select2-container--default .auth .auth-form-light .asColorPicker-wrap .select2-selection--single:active, .auth .auth-form-light .input-group .select2-container--default .select2-selection--single .select2-search__field:active, .select2-container--default .select2-selection--single .auth .auth-form-light .input-group .select2-search__field:active, .auth .auth-form-light .asColorPicker-wrap .select2-container--default .select2-selection--single .select2-search__field:active, .select2-container--default .select2-selection--single .auth .auth-form-light .asColorPicker-wrap .select2-search__field:active, .auth .auth-form-light .input-group .typeahead:active, .auth .auth-form-light .asColorPicker-wrap .typeahead:active,
  .auth .auth-form-light .input-group .tt-query:active,
  .auth .auth-form-light .asColorPicker-wrap .tt-query:active,
  .auth .auth-form-light .input-group .tt-hint:active,
  .auth .auth-form-light .asColorPicker-wrap .tt-hint:active {
    border-color: #e8e5e5; }

.auth .auth-form-transparent {
  background: transparent; }
  .auth .auth-form-transparent .form-control, .auth .auth-form-transparent .asColorPicker-input, .auth .auth-form-transparent .dataTables_wrapper select, .dataTables_wrapper .auth .auth-form-transparent select, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input[type=text],
  .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent select, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input[type=number], .auth .auth-form-transparent .select2-container--default .select2-selection--single, .select2-container--default .auth .auth-form-transparent .select2-selection--single, .auth .auth-form-transparent .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .auth .auth-form-transparent .select2-search__field, .auth .auth-form-transparent .typeahead,
  .auth .auth-form-transparent .tt-query,
  .auth .auth-form-transparent .tt-hint,
  .auth .auth-form-transparent .input-group-text {
    border-color: #d8d8d8; }
    .auth .auth-form-transparent .form-control:focus, .auth .auth-form-transparent .asColorPicker-input:focus, .auth .auth-form-transparent .dataTables_wrapper select:focus, .dataTables_wrapper .auth .auth-form-transparent select:focus, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input:focus[type=text],
    .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row select:focus, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent select:focus, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input:focus[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input:focus[type=number], .auth .auth-form-transparent .select2-container--default .select2-selection--single:focus, .select2-container--default .auth .auth-form-transparent .select2-selection--single:focus, .auth .auth-form-transparent .select2-container--default .select2-selection--single .select2-search__field:focus, .select2-container--default .select2-selection--single .auth .auth-form-transparent .select2-search__field:focus, .auth .auth-form-transparent .typeahead:focus,
    .auth .auth-form-transparent .tt-query:focus,
    .auth .auth-form-transparent .tt-hint:focus, .auth .auth-form-transparent .form-control:active, .auth .auth-form-transparent .asColorPicker-input:active, .auth .auth-form-transparent .dataTables_wrapper select:active, .dataTables_wrapper .auth .auth-form-transparent select:active, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input:active[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input:active[type=text],
    .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row select:active, .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent select:active, .auth .auth-form-transparent .jsgrid .jsgrid-table .jsgrid-filter-row input:active[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth .auth-form-transparent input:active[type=number], .auth .auth-form-transparent .select2-container--default .select2-selection--single:active, .select2-container--default .auth .auth-form-transparent .select2-selection--single:active, .auth .auth-form-transparent .select2-container--default .select2-selection--single .select2-search__field:active, .select2-container--default .select2-selection--single .auth .auth-form-transparent .select2-search__field:active, .auth .auth-form-transparent .typeahead:active,
    .auth .auth-form-transparent .tt-query:active,
    .auth .auth-form-transparent .tt-hint:active,
    .auth .auth-form-transparent .input-group-text:focus,
    .auth .auth-form-transparent .input-group-text:active {
      border-color: #d8d8d8; }
  .auth .auth-form-transparent select {
    outline-color: #d8d8d8; }

.auth.auth-img-bg {
  padding: 0; }
  @media (min-width: 768px) {
    .auth.auth-img-bg .auth-form-transparent {
      width: 55%;
      margin: auto; } }

.auth .brand-logo {
  margin-bottom: 2rem; }
  .auth .brand-logo img {
    width: 150px; }

.auth form .form-group {
  margin-bottom: 1.5rem; }
  .auth form .form-group label {
    font-size: .8125rem; }
  .auth form .form-group .form-control, .auth form .form-group .asColorPicker-input, .auth form .form-group .dataTables_wrapper select, .dataTables_wrapper .auth form .form-group select, .auth form .form-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth form .form-group input[type=text],
  .auth form .form-group .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .auth form .form-group select, .auth form .form-group .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth form .form-group input[type=number], .auth form .form-group .select2-container--default .select2-selection--single, .select2-container--default .auth form .form-group .select2-selection--single, .auth form .form-group .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .auth form .form-group .select2-search__field, .auth form .form-group .typeahead,
  .auth form .form-group .tt-query,
  .auth form .form-group .tt-hint {
    background: transparent;
    border-radius: 0;
    font-size: .9375rem; }

.auth form .auth-form-btn {
  height: 50px;
  line-height: 1.5; }

.auth form .auth-link {
  font-size: 0.875rem; }
  .auth form .auth-link:hover {
    color: initial; }

.auth.multi-step-login {
  height: 100%;
  min-height: 100vh;
  background: #ecf0f4; }
  .auth.multi-step-login .step-form {
    position: relative;
    width: 530px;
    margin: 50px auto;
    text-align: center; }
    .auth.multi-step-login .step-form .step-progress {
      padding-left: 0;
      list-style-type: none;
      margin-bottom: 30px;
      overflow: hidden;
      counter-reset: step;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: justify;
      -ms-flex-pack: justify;
      justify-content: space-between; }
      .auth.multi-step-login .step-form .step-progress li {
        position: relative;
        list-style-type: none;
        color: #343a40;
        font-size: 18px;
        font-weight: 500;
        float: left; }
        .auth.multi-step-login .step-form .step-progress li:before {
          display: -webkit-box;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-align: center;
          -ms-flex-align: center;
          align-items: center;
          -webkit-box-pack: center;
          -ms-flex-pack: center;
          justify-content: center;
          content: counter(step);
          counter-increment: step;
          width: 30px;
          height: 30px;
          line-height: 20px;
          font-size: 16px;
          font-weight: 600;
          color: #343a40;
          background: #dce3eb;
          border-radius: 100px;
          margin: 0 auto 5px auto; }
        .auth.multi-step-login .step-form .step-progress li.active:before {
          background: <?php echo $color; ?>;
          color: #fff; }
        .auth.multi-step-login .step-form .step-progress li:first-child:after {
          content: none; }
    .auth.multi-step-login .step-form fieldset {
      background: #fff;
      border-radius: 10px;
      padding: 30px 30px;
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      margin: 0 auto;
      width: 100%;
      position: relative; }
      .auth.multi-step-login .step-form fieldset:not(:first-of-type) {
        display: none; }
    .auth.multi-step-login .step-form .form-control, .auth.multi-step-login .step-form .asColorPicker-input, .auth.multi-step-login .step-form .dataTables_wrapper select, .dataTables_wrapper .auth.multi-step-login .step-form select, .auth.multi-step-login .step-form .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row .auth.multi-step-login .step-form input[type=text],
    .auth.multi-step-login .step-form .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row .auth.multi-step-login .step-form select, .auth.multi-step-login .step-form .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row .auth.multi-step-login .step-form input[type=number], .auth.multi-step-login .step-form .select2-container--default .select2-selection--single, .select2-container--default .auth.multi-step-login .step-form .select2-selection--single, .auth.multi-step-login .step-form .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single .auth.multi-step-login .step-form .select2-search__field, .auth.multi-step-login .step-form .typeahead,
    .auth.multi-step-login .step-form .tt-query,
    .auth.multi-step-login .step-form .tt-hint {
      height: 40px;
      border-radius: 4px; }

/* Lock Screen */
.lock-screen {
  position: relative;
  overflow: hidden; }
  .lock-screen .backhground-bg {
    position: absolute;
    top: -20px;
    right: -20px;
    left: -20px;
    bottom: -20px;
    background: url("../images/samples/lockscreen-bg.jpg") no-repeat center center;
    background-size: cover;
    overflow: hidden;
    min-height: 100%; }
  .lock-screen .card {
    background: rgba(0, 0, 0, 0);
    border-radius: 6px; }
    .lock-screen .card .card-body img {
      width: 90px;
      height: 90px;
      border-radius: 100%;
      border: 3px solid rgba(255, 255, 255, 0.2); }
    .lock-screen .card .card-body input[type="text"] {
      background: rgba(255, 255, 255, 0.55);
      border: none;
      width: 80%;
      margin: auto; }

/* Navbar */
.horizontal-menu .top-navbar {
  font-weight: 400;
  background: #ffffff;
  border-bottom: 1px solid #e8e5e5; }
  .horizontal-menu .top-navbar .navbar-brand-wrapper {
    width: auto;
    height: 70px; }
    .horizontal-menu .top-navbar .navbar-brand-wrapper .navbar-brand {
      color: #27367f;
      font-size: 1.5rem;
      line-height: 48px;
      margin-right: 0;
      padding: .25rem 0;
      text-align: left; }
      .horizontal-menu .top-navbar .navbar-brand-wrapper .navbar-brand.brand-logo-mini {
        display: none;
        padding-left: 0;
        text-align: center; }
        .horizontal-menu .top-navbar .navbar-brand-wrapper .navbar-brand.brand-logo-mini img {
          width: auto;
          max-width: 100%;
          margin: auto; }
      .horizontal-menu .top-navbar .navbar-brand-wrapper .navbar-brand:active, .horizontal-menu .top-navbar .navbar-brand-wrapper .navbar-brand:focus, .horizontal-menu .top-navbar .navbar-brand-wrapper .navbar-brand:hover {
        color: #1b2658; }
      .horizontal-menu .top-navbar .navbar-brand-wrapper .navbar-brand img {
        max-width: 100%;
        height: auto;
        margin: auto;
        vertical-align: middle; }
      @media (max-width: 991px) {
        .horizontal-menu .top-navbar .navbar-brand-wrapper .navbar-brand {
          width: auto; }
          .horizontal-menu .top-navbar .navbar-brand-wrapper .navbar-brand.brand-logo {
            display: none; }
          .horizontal-menu .top-navbar .navbar-brand-wrapper .navbar-brand.brand-logo-mini {
            display: block; } }
  
   @media (max-width: 767px) {
        .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .dashboard {
          margin-left: .5rem;
          margin-right: .5rem;
          position: absolute!important;
          top: 10%!important;
          right: 20%!important; } }  

  .horizontal-menu .top-navbar .navbar-menu-wrapper {
    color: #111111;
    width: auto;
    height: 70px;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1; }
    @media (max-width: 991px) {
      .horizontal-menu .top-navbar .navbar-menu-wrapper {
        width: calc(100% - 55px);
        padding-left: 15px;
        padding-right: 0; } }
    .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-toggler {
      border: 0;
      color: inherit;
      font-size: 1.5rem; }
      @media (max-width: 991px) {
        .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-toggler:not(.navbar-toggler-right) {
          display: none; } }
      @media (max-width: 991px) {
        .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-toggler.navbar-toggler-right {
          padding-left: 15px;
          padding-right: 11px;
          position: absolute;
          top: 15%; } }
    .horizontal-menu .top-navbar .navbar-menu-wrapper .search-form {
      position: relative;
      margin-right: 1rem; }
      .horizontal-menu .top-navbar .navbar-menu-wrapper .search-form i {
        font-size: 20px;
        position: absolute;
        left: 0;
        top: 50%;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        color: #626262; }
      .horizontal-menu .top-navbar .navbar-menu-wrapper .search-form input {
        background-color: transparent;
        border: none;
        cursor: pointer;
        width: 0;
        height: 35px;
        padding: 0 0 0 20px;
        position: relative;
        -webkit-transition: width 400ms ease, background 400ms ease;
        transition: width 400ms ease, background 400ms ease; }
        .horizontal-menu .top-navbar .navbar-menu-wrapper .search-form input:focus {
          background-color: transparent;
          border-bottom: 1px solid #626262;
          border-radius: 0;
          padding-left: 30px;
          background-position: 5px 7px;
          cursor: text;
          outline: 0;
          width: 140px; }
    .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item {
      margin-left: 1rem;
      margin-right: 1rem; }
      @media (max-width: 767px) {
        .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item {
          margin-left: .5rem;
          margin-right: .5rem; } }
      .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link {
        color: inherit;
        font-size: 1rem;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center; }
        .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link i {
          font-size: 1rem;
          color: #626262; }
        .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link.count-indicator {
          position: relative; }
          .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link.count-indicator .count {
            -webkit-transform: translate(-50%);
            transform: translate(-50%);
            position: absolute;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #ff4d6b;
            font-size: 6px;
            color: #ffffff;
            text-align: center;
            top: -4px;
            left: 50%;
            border: none; }
          .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item .nav-link.count-indicator:after {
            display: none; }
      .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-profile-img {
        position: relative; }
        .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-profile-img img {
          width: 32px;
          height: 32px;
          border-radius: 100%; }
        .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-profile-img .availability-status {
          position: absolute;
          width: 10px;
          height: 10px;
          border-radius: 100%;
          border: 2px solid #ffffff;
          bottom: 2px;
          left: 25px; }
          .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-profile-img .availability-status.online {
            background: <?php echo $color; ?>; }
          .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-profile-img .availability-status.offline {
            background: #ff4d6b; }
          .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-profile-img .availability-status.busy {
            background: #ffde73; }
      .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-profile-text {
        margin-left: 1.25rem; }
        .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-profile-text p {
          margin-bottom: 0;
          color: #111111; }
        @media (max-width: 767px) {
          .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-profile-text {
            display: none; } }
      .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.nav-profile .nav-link::after {
        font-size: 1rem; }
      .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown {
        position: absolute;
        font-size: 0.9rem;
        margin-top: 0;
        right: 0;
        left: auto;
        top: 70px; }
        .rtl .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown {
          right: auto;
          left: 0; }
        .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item {
          margin-bottom: 0;
          padding: 0.687rem 1.562rem;
          cursor: pointer; }
          .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item:hover {
            color: inherit; }
          .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item i {
            font-size: 17px; }
          .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item .badge {
            margin-left: 2.5rem; }
          .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item .ellipsis {
            max-width: 200px;
            overflow: hidden;
            text-overflow: ellipsis; }
          .rtl .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item i {
            margin-left: 10px; }
          .rtl .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-item .badge {
            margin-left: 0;
            margin-right: 2.5rem; }
        .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown .dropdown-divider {
          margin: 0; }
      .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown i {
        margin-right: .5rem;
        vertical-align: middle; }
        .rtl .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown i {
          margin-right: auto;
          margin-left: .5rem; }
      @media (max-width: 991px) {
        .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown {
          position: static; }
          .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .navbar-dropdown {
            left: 20px;
            right: 20px;
            top: 150px;
            width: calc(100% - 40px); } }
      .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .message-dropdown i {
        margin: 0; }
      .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.dropdown .dropdown-toggle::after {
        margin-right: .5rem; }
      .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item.language-dropdown .nav-link {
        border-left: 1px solid #ecf0f4;
        padding: 0;
        padding-left: 2rem; }
      .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item:last-child {
        margin-right: 0; }
        .rtl .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item:last-child {
          margin-right: 1rem;
          margin-left: 0; }
        @media (max-width: 767px) {
          .rtl .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav .nav-item:last-child {
            margin-right: 0.5 rem; } }
    .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right .nav-item {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center; }
    @media (min-width: 992px) {
      .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
        margin-left: auto; }
        .rtl .horizontal-menu .top-navbar .navbar-menu-wrapper .navbar-nav.navbar-nav-right {
          margin-left: 0;
          margin-right: auto; } }
    .horizontal-menu .top-navbar .navbar-menu-wrapper .dropdown-menu {
      border: none;
      -webkit-box-shadow: 0px 3px 21px 0px rgba(0, 0, 0, 0.2);
      box-shadow: 0px 3px 21px 0px rgba(0, 0, 0, 0.2); }
    .horizontal-menu .top-navbar .navbar-menu-wrapper .count-indicator {
      position: relative;
      padding: 0;
      text-align: center; }
      .horizontal-menu .top-navbar .navbar-menu-wrapper .count-indicator i {
        font-size: 1.25rem;
        margin-right: 0;
        vertical-align: middle; }
      .horizontal-menu .top-navbar .navbar-menu-wrapper .count-indicator .count {
        position: absolute;
        left: 55%;
        width: 12px;
        height: 12px;
        border-radius: 100%;
        background: #ff4d6b;
        top: 1px;
        border: 1px solid #1bdbe0; }
      .horizontal-menu .top-navbar .navbar-menu-wrapper .count-indicator:after {
        display: none; }

.horizontal-menu .bottom-navbar {
  background: #181824;
  position: relative;
  top: 0;
  right: 0;
  left: 0;
  width: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-transition-duration: 3s;
  transition-duration: 3s;
  -webkit-transition-property: position, left, right, top, z-index;
  transition-property: position, left, right, top, z-index;
  box-shadow: 0 19px 34px -15px #d2d2f2;
  -webkit-box-shadow: 0 19px 34px -15px #d2d2f2;
  -moz-box-shadow: 0 19px 34px -15px #d2d2f2; }
  @media (max-width: 991.98px) {
    .horizontal-menu .bottom-navbar {
      display: none; }
      .horizontal-menu .bottom-navbar.header-toggled {
        display: block;
        top: -85px;
        max-height: calc(100vh - 70px);
        overflow: auto; } }
  .horizontal-menu .bottom-navbar .page-navigation {
    position: relative;
    width: 100%;
    z-index: 99;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    /*justify-content: space-between;*/
    -webkit-transition-duration: 0.2s;
    transition-duration: 0.2s;
    -webkit-transition-property: background, box-shadow;
    -webkit-transition-property: background, -webkit-box-shadow;
    transition-property: background, -webkit-box-shadow;
    transition-property: background, box-shadow;
    transition-property: background, box-shadow, -webkit-box-shadow; }
    @media (max-width: 991.98px) {
      .horizontal-menu .bottom-navbar .page-navigation {
        border: none; } }
    .horizontal-menu .bottom-navbar .page-navigation > .nav-item {
      line-height: 1;
      text-align: left; }
      @media (max-width: 991.98px) {
        .horizontal-menu .bottom-navbar .page-navigation > .nav-item {
          display: block;
          width: 100%;
          border-right: none; } }
      @media (min-width: 992px) {
        .horizontal-menu .bottom-navbar .page-navigation > .nav-item:first-child > .nav-link {
          padding-left: 0; } }
      .horizontal-menu .bottom-navbar .page-navigation > .nav-item:last-child {
        border-right: none; }
        @media (min-width: 992px) {
          .horizontal-menu .bottom-navbar .page-navigation > .nav-item:last-child > .nav-link {
            padding-right: 0; } }
      .horizontal-menu .bottom-navbar .page-navigation > .nav-item > .nav-link {
        color: #ffffff;
        padding: 22px 10px;
        line-height: 1;
        font-weight: 400; }
        .horizontal-menu .bottom-navbar .page-navigation > .nav-item > .nav-link .menu-title {
          font-size: 15px;
          font-weight: 400; }
        .horizontal-menu .bottom-navbar .page-navigation > .nav-item > .nav-link .menu-icon {
          margin-right: 10px;
          font-size: 1rem;
          color: #626262;
          font-weight: 400; }
          .rtl .horizontal-menu .bottom-navbar .page-navigation > .nav-item > .nav-link .menu-icon {
            margin-right: 0;
            margin-left: 10px; }
        .horizontal-menu .bottom-navbar .page-navigation > .nav-item > .nav-link .menu-arrow {
          margin-left: 5px;
          display: inline-block;
          -webkit-transform: rotate(0deg);
          transform: rotate(0deg);
          moz-transform-origin: center;
          -webkit-transform-origin: center;
          transform-origin: center;
          -webkit-transition-duration: 0.25s;
          transition-duration: 0.25s; }
          .rtl .horizontal-menu .bottom-navbar .page-navigation > .nav-item > .nav-link .menu-arrow {
            margin-left: auto;
            margin-right: 5px; }
          .horizontal-menu .bottom-navbar .page-navigation > .nav-item > .nav-link .menu-arrow:before {
            content: "\e604";
            font-family: "simple-line-icons";
            font-style: normal;
            display: block;
            font-size: 10px;
            line-height: 10px; }
      @media (min-width: 768px) {
        .horizontal-menu .bottom-navbar .page-navigation > .nav-item:hover .submenu {
          display: block; }
        .horizontal-menu .bottom-navbar .page-navigation > .nav-item:hover > .nav-link .menu-arrow {
          -webkit-transform: rotate(-180deg);
          transform: rotate(-180deg);
          moz-transform-origin: center;
          -webkit-transform-origin: center;
          transform-origin: center;
          -webkit-transition-duration: 0.25s;
          transition-duration: 0.25s; } }
      @media (max-width: 991.98px) {
        .horizontal-menu .bottom-navbar .page-navigation > .nav-item.show-submenu .submenu {
          display: block; }
        .horizontal-menu .bottom-navbar .page-navigation > .nav-item.show-submenu > .nav-link .menu-arrow {
          -webkit-transform: rotate(-180deg);
          transform: rotate(-180deg);
          moz-transform-origin: center;
          -webkit-transform-origin: center;
          transform-origin: center;
          -webkit-transition-duration: 0.25s;
          transition-duration: 0.25s; } }
      .horizontal-menu .bottom-navbar .page-navigation > .nav-item.active > .nav-link {
        position: relative; }
        .horizontal-menu .bottom-navbar .page-navigation > .nav-item.active > .nav-link:before {
          position: absolute;
          content: "";
          left: 0;
          bottom: -2px;
          width: 100%;
          height: 5px; }
          @media (max-width: 991px) {
            .horizontal-menu .bottom-navbar .page-navigation > .nav-item.active > .nav-link:before {
              left: -15px;
              top: 0;
              bottom: 0;
              height: 100%;
              width: 5px; } }
        .horizontal-menu .bottom-navbar .page-navigation > .nav-item.active > .nav-link .menu-title,
        .horizontal-menu .bottom-navbar .page-navigation > .nav-item.active > .nav-link i,
        .horizontal-menu .bottom-navbar .page-navigation > .nav-item.active > .nav-link .menu-arrow {
          color: <?php echo $color; ?>; }
      .horizontal-menu .bottom-navbar .page-navigation > .nav-item .submenu {
        display: none; }
        @media (max-width: 991px) {
          .horizontal-menu .bottom-navbar .page-navigation > .nav-item .submenu {
            background: #181824; } }
        .horizontal-menu .bottom-navbar .page-navigation > .nav-item .submenu ul {
          list-style-type: none;
          padding-left: 0; }
          .horizontal-menu .bottom-navbar .page-navigation > .nav-item .submenu ul li {
            display: block;
            line-height: 20px; }
            .horizontal-menu .bottom-navbar .page-navigation > .nav-item .submenu ul li a {
              display: block;
              padding: 5px 10px;
              font-weight: 300;
              color: #ffffff;
              text-decoration: none;
              text-align: left;
              margin: 4px 0;
              text-overflow: ellipsis;
              overflow: hidden;
              max-width: 100%;
              white-space: nowrap;
              -webkit-transition-duration: 0.2s;
              transition-duration: 0.2s;
              -webkit-transition-property: background;
              transition-property: background;
              border-radius: 6px; }
              .horizontal-menu .bottom-navbar .page-navigation > .nav-item .submenu ul li a:hover {
                color: <?php echo $color; ?>;
                -webkit-transition: color 0.1s linear;
                transition: color 0.1s linear; }
                .horizontal-menu .bottom-navbar .page-navigation > .nav-item .submenu ul li a:hover:before {
                  background: <?php echo $color; ?>; }
              .horizontal-menu .bottom-navbar .page-navigation > .nav-item .submenu ul li a.active {
                color: <?php echo $color; ?>; }
            .horizontal-menu .bottom-navbar .page-navigation > .nav-item .submenu ul li.active a {
              color: <?php echo $color; ?>; }
              .horizontal-menu .bottom-navbar .page-navigation > .nav-item .submenu ul li.active a:before {
                background: <?php echo $color; ?>; }
      .horizontal-menu .bottom-navbar .page-navigation > .nav-item:not(.mega-menu) {
        position: relative; }
        .horizontal-menu .bottom-navbar .page-navigation > .nav-item:not(.mega-menu) .submenu {
          left: 0; }
          @media (min-width: 768px) {
            .horizontal-menu .bottom-navbar .page-navigation > .nav-item:not(.mega-menu) .submenu {
              position: absolute;
              top: 58px;
              z-index: 999;
              background: #181824;
              border-top: none;
              border-radius: 4px;
              box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08);
              -webkit-box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08); }
              .horizontal-menu .bottom-navbar .page-navigation > .nav-item:not(.mega-menu) .submenu li a {
                position: relative;
                padding-left: 20px; }
                .horizontal-menu .bottom-navbar .page-navigation > .nav-item:not(.mega-menu) .submenu li a::before {
                  position: absolute;
                  content: "";
                  width: 6px;
                  height: 2px;
                  border-radius: 100%;
                  background: #d8d8d8;
                  top: 12px;
                  left: 0; } }
          @media (max-width: 991.98px) {
            .horizontal-menu .bottom-navbar .page-navigation > .nav-item:not(.mega-menu) .submenu {
              position: relative;
              top: 0;
              -webkit-box-shadow: none;
              box-shadow: none; } }
          @media (max-width: 991.98px) {
            .horizontal-menu .bottom-navbar .page-navigation > .nav-item:not(.mega-menu) .submenu {
              top: 0; } }
          .horizontal-menu .bottom-navbar .page-navigation > .nav-item:not(.mega-menu) .submenu ul {
            width: auto;
            padding: 25px; }
            @media (max-width: 991.98px) {
              .horizontal-menu .bottom-navbar .page-navigation > .nav-item:not(.mega-menu) .submenu ul {
                padding: 0 23px; } }
      .horizontal-menu .bottom-navbar .page-navigation > .nav-item.mega-menu .submenu {
        width: 100%;
        left: 0;
        right: 0;
        padding: 25px; }
        @media (min-width: 768px) {
          .horizontal-menu .bottom-navbar .page-navigation > .nav-item.mega-menu .submenu {
            position: absolute;
            top: 58px;
            z-index: 999;
            background: #181824;
            border-top: none;
            border-radius: 4px;
            box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08);
            -webkit-box-shadow: 1px 0px 20px rgba(0, 0, 0, 0.08); }
            .horizontal-menu .bottom-navbar .page-navigation > .nav-item.mega-menu .submenu li a {
              position: relative;
              padding-left: 20px; }
              .horizontal-menu .bottom-navbar .page-navigation > .nav-item.mega-menu .submenu li a::before {
                position: absolute;
                content: "";
                width: 6px;
                height: 2px;
                border-radius: 100%;
                background: #d8d8d8;
                top: 12px;
                left: 0; } }
        @media (max-width: 991.98px) {
          .horizontal-menu .bottom-navbar .page-navigation > .nav-item.mega-menu .submenu {
            position: relative;
            top: 0;
            -webkit-box-shadow: none;
            box-shadow: none; } }
        .horizontal-menu .bottom-navbar .page-navigation > .nav-item.mega-menu .submenu .category-heading {
          font-size: .875rem;
          font-weight: 500;
          text-align: left;
          color: #000;
          padding: 1rem 0;
          margin-bottom: 0; }
        .horizontal-menu .bottom-navbar .page-navigation > .nav-item.mega-menu .submenu .col-group-wrapper {
          padding: 0 1rem; }
        @media (max-width: 991.98px) {
          .horizontal-menu .bottom-navbar .page-navigation > .nav-item.mega-menu .submenu {
            padding: 0 32px; }
            .horizontal-menu .bottom-navbar .page-navigation > .nav-item.mega-menu .submenu .col-group-wrapper {
              margin-left: 0;
              margin-right: 0;
              padding: 0; }
              .horizontal-menu .bottom-navbar .page-navigation > .nav-item.mega-menu .submenu .col-group-wrapper .col-group {
                padding-left: 0;
                padding-right: 0;
                margin-bottom: 20px; }
                .horizontal-menu .bottom-navbar .page-navigation > .nav-item.mega-menu .submenu .col-group-wrapper .col-group .category-heading:after {
                  display: none; } }

.horizontal-menu.fixed-on-scroll .bottom-navbar {
  border-bottom: 1px solid #e8e5e5; }

@media (max-width: 991px) {
  .horizontal-menu {
    position: fixed;
    z-index: 1030;
    top: 0;
    left: 0;
    right: 0; } }

.page-body-wrapper {
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -ms-flex-direction: column;
  flex-direction: column; }
  @media (max-width: 991px) {
    .page-body-wrapper {
      padding-top: 140px; } }
  .page-body-wrapper.full-page-wrapper .content-wrapper {
    width: 100%;
    height: 100vh;
    max-width: none; }

.main-panel {
  width: 100%; }

.container-scroller .content-wrapper {
  width: 100%;
  padding-right: 10px;
  padding-left: 10px;
  margin-right: auto;
  margin-left: auto;
  margin: auto;
  padding: 2rem 0.937rem 0; }
  @media (min-width: 576px) {
    .container-scroller .content-wrapper {
      max-width: 540px; } }
  @media (min-width: 768px) {
    .container-scroller .content-wrapper {
      max-width: 720px; } }
  @media (min-width: 992px) {
    .container-scroller .content-wrapper {
      max-width: 960px; } }
  @media (min-width: 1200px) {
    .container-scroller .content-wrapper {
      max-width: 1140px; } }

.container-scroller .page-body-wrapper {
  background: #ecf0f4;
  padding-left: 0;
  padding-right: 0; }

.rtl {
  direction: rtl;
  text-align: right; }
  .rtl .sidebar .nav {
    padding-right: 0; }
  .rtl .product-chart-wrapper::-webkit-scrollbar,
  .rtl .settings-panel .tab-content .tab-pane .scroll-wrapper::-webkit-scrollbar,
  .rtl .sidebar-fixed .nav::-webkit-scrollbar,
  .rtl .table-responsive::-webkit-scrollbar,
  .rtl ul.chats::-webkit-scrollbar {
    width: 0.5em; }
  .rtl .product-chart-wrapper::-webkit-scrollbar-track,
  .rtl .settings-panel .tab-content .tab-pane .scroll-wrapper::-webkit-scrollbar-track,
  .rtl .sidebar-fixed .nav::-webkit-scrollbar-track,
  .rtl .table-responsive::-webkit-scrollbar-track,
  .rtl ul.chats::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3); }
  .rtl .product-chart-wrapper::-webkit-scrollbar-thumb,
  .rtl .settings-panel .tab-content .tab-pane .scroll-wrapper::-webkit-scrollbar-thumb,
  .rtl .sidebar-fixed .nav::-webkit-scrollbar-thumb,
  .rtl .table-responsive::-webkit-scrollbar-thumb,
  .rtl ul.chats::-webkit-scrollbar-thumb {
    background-color: darkgrey;
    outline: 1px solid slategrey; }

.horizontal-menu.fixed-on-scroll + .page-body-wrapper {
  padding-top: 58px; }

.quick-action-toolbar .card .card-header {
  color: #ffffff;
  padding: 12px 30px;
  /*background-image: -webkit-gradient(linear, right top, left top, from(#fad961), to(#f76b1c));*/
  background-image: -webkit-gradient(linear, right top, left top, from(#a3efa5), to(#89da8b));
  border: 0;
  border-radius: 0; }
  .quick-action-toolbar .card .card-header h5 {
    font-weight: 600;
    font-size: 18px; }
  .quick-action-toolbar .card .card-header p {
    color: inherit; }
  .quick-action-toolbar .card .card-header i {
    margin-left: 15px;
    -ms-flex-item-align: center;
    align-self: center; }

.quick-action-toolbar .card .quick-action-btns .btn-light {
  background-color: transparent;
  border: none;
  font-size: 14px;
  color: #111111;
  font-weight: 600;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center; }
  .quick-action-toolbar .card .quick-action-btns .btn-light i {
    color: #626262;
    margin-right: 15px;
    font-size: 18px; }
    .rtl .quick-action-toolbar .card .quick-action-btns .btn-light i {
      margin-left: 15px;
      margin-right: 0; }

.quick-action-toolbar .card .quick-action-btns .btn-wrapper {
  border-right: 1px solid #e8e5e5;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center; }
  .quick-action-toolbar .card .quick-action-btns .btn-wrapper button {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center; }
  @media screen and (max-width: 767px) {
    .quick-action-toolbar .card .quick-action-btns .btn-wrapper:first-child {
      border-bottom: 1px solid #e8e5e5; } }
  @media screen and (max-width: 576px) {
    .quick-action-toolbar .card .quick-action-btns .btn-wrapper:first-child {
      border-right: none; } }
  @media screen and (max-width: 767px) {
    .quick-action-toolbar .card .quick-action-btns .btn-wrapper:nth-child(2) {
      border-right: none;
      border-bottom: 1px solid #e8e5e5; } }
  @media screen and (max-width: 576px) {
    .quick-action-toolbar .card .quick-action-btns .btn-wrapper:nth-child(3) {
      border-right: none;
      border-bottom: 1px solid #e8e5e5; } }
  .quick-action-toolbar .card .quick-action-btns .btn-wrapper:last-child {
    border: none; }

.income-expense-summary-chart-text h5 {
  font-size: 18px;
  font-weight: 600; }

.income-expense-summary-chart-text h3 {
  font-size: 24px;
  font-weight: bold; }

.income-expense-summary-chart-legend {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center; }
  .income-expense-summary-chart-legend span {
    display: inline-block;
    width: 14px;
    height: 14px;
    border: 2px solid transparent;
    margin-right: 10px; }
    .rtl .income-expense-summary-chart-legend span {
      margin-left: 10px;
      margin-right: 0; }

#income-expense-summary-chart-daterange {
  width: 280px;
  border-radius: 4px;
  border: solid 1px #e8e5e5;
  background-color: #ffffff;
  color: #969696; }
  #income-expense-summary-chart-daterange .input-group-text {
    background-color: transparent;
    color: inherit;
    padding: 10px;
    border: 0; }
  #income-expense-summary-chart-daterange .form-control, #income-expense-summary-chart-daterange .asColorPicker-input, #income-expense-summary-chart-daterange .dataTables_wrapper select, .dataTables_wrapper #income-expense-summary-chart-daterange select, #income-expense-summary-chart-daterange .jsgrid .jsgrid-table .jsgrid-filter-row input[type=text], .jsgrid .jsgrid-table .jsgrid-filter-row #income-expense-summary-chart-daterange input[type=text],
  #income-expense-summary-chart-daterange .jsgrid .jsgrid-table .jsgrid-filter-row select, .jsgrid .jsgrid-table .jsgrid-filter-row #income-expense-summary-chart-daterange select, #income-expense-summary-chart-daterange .jsgrid .jsgrid-table .jsgrid-filter-row input[type=number], .jsgrid .jsgrid-table .jsgrid-filter-row #income-expense-summary-chart-daterange input[type=number], #income-expense-summary-chart-daterange .select2-container--default .select2-selection--single, .select2-container--default #income-expense-summary-chart-daterange .select2-selection--single, #income-expense-summary-chart-daterange .select2-container--default .select2-selection--single .select2-search__field, .select2-container--default .select2-selection--single #income-expense-summary-chart-daterange .select2-search__field, #income-expense-summary-chart-daterange .typeahead,
  #income-expense-summary-chart-daterange .tt-query,
  #income-expense-summary-chart-daterange .tt-hint {
    border: 0;
    font-size: 12px;
    font-weight: 600;
    color: inherit;
    padding: 0; }

.income-expense-summary-chart {
  direction: ltr; }
  .income-expense-summary-chart .ct-chart .ct-series .ct-line {
    stroke-width: 3px;
    stroke-dasharray: 0; }
  .income-expense-summary-chart .ct-chart .ct-series-a .ct-line {
    stroke: #6469df; }
  .income-expense-summary-chart .ct-chart .ct-series-a .ct-area {
    fill: #6469df; }
  .income-expense-summary-chart .ct-chart .ct-series-b .ct-line {
    stroke: #33c92d; }
  .income-expense-summary-chart .ct-chart .ct-series-b .ct-area {
    fill: #33c92d; }
  @media screen and (max-width: 480px) {
    .income-expense-summary-chart .ct-chart .ct-labels .ct-label.ct-horizontal {
      -webkit-transform: rotate(-90deg) translateY(-50%);
      transform: rotate(-90deg) translateY(-50%); } }

.ct-chart .ct-line {
  stroke-dasharray: 0; }

.report-summary-header {
  border-bottom: solid 1px #e8ecf1; }

.report-inner-cards-wrapper {
  padding-top: 25px; }
  .report-inner-cards-wrapper .report-inner-card {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    border-right: solid 1px #e8ecf1;
    padding: 0 40px; }
    .rtl .report-inner-cards-wrapper .report-inner-card {
      border-right: none;
      border-left: solid 1px #e8ecf1; }
    @media screen and (max-width: 1199px) {
      .report-inner-cards-wrapper .report-inner-card {
        padding-top: 12.5px;
        padding-bottom: 12.5px; } }
    .report-inner-cards-wrapper .report-inner-card:first-child {
      padding-left: 15px; }
      .rtl .report-inner-cards-wrapper .report-inner-card:first-child {
        padding-right: 15px;
        padding-left: 40px; }
      @media screen and (max-width: 1199px) {
        .report-inner-cards-wrapper .report-inner-card:first-child {
          border-bottom: solid 1px #e8ecf1; } }
      @media screen and (max-width: 767px) {
        .report-inner-cards-wrapper .report-inner-card:first-child {
          border-right: none;
          padding-right: 12.5px; }
          .rtl .report-inner-cards-wrapper .report-inner-card:first-child {
            border-left: none;
            padding-left: 12.5px; } }
    @media screen and (max-width: 1199px) {
      .report-inner-cards-wrapper .report-inner-card:nth-child(2) {
        padding-right: 12.5px;
        border-bottom: solid 1px #e8ecf1;
        border-right: none; }
        .rtl .report-inner-cards-wrapper .report-inner-card:nth-child(2) {
          border-left: none;
          padding-left: 12.5px;
          padding-right: 40px; } }
    @media screen and (max-width: 767px) {
      .report-inner-cards-wrapper .report-inner-card:nth-child(2) {
        padding-left: 12.5px; }
        .rtl .report-inner-cards-wrapper .report-inner-card:nth-child(2) {
          padding-right: 12.5px; } }
    @media screen and (max-width: 1199px) {
      .report-inner-cards-wrapper .report-inner-card:nth-child(3) {
        padding-left: 12.5px; }
        .rtl .report-inner-cards-wrapper .report-inner-card:nth-child(3) {
          padding-left: 40px;
          padding-right: 12.5px; } }
    @media screen and (max-width: 767px) {
      .report-inner-cards-wrapper .report-inner-card:nth-child(3) {
        border-right: none;
        padding-right: 12.5px;
        border-bottom: solid 1px #e8ecf1; }
        .rtl .report-inner-cards-wrapper .report-inner-card:nth-child(3) {
          border-left: none;
          padding-left: 12.5px; } }
    .report-inner-cards-wrapper .report-inner-card:last-child {
      border-right: 0;
      padding-right: 15px; }
      .rtl .report-inner-cards-wrapper .report-inner-card:last-child {
        border-left: none;
        padding-left: 15px;
        padding-right: 40px; }
      @media screen and (max-width: 767px) {
        .report-inner-cards-wrapper .report-inner-card:last-child {
          border-right: none;
          padding-left: 12.5px; }
          .rtl .report-inner-cards-wrapper .report-inner-card:last-child {
            border-left: none;
            padding-right: 12.5px; } }
    .report-inner-cards-wrapper .report-inner-card .inner-card-text {
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      -webkit-box-pack: end;
      -ms-flex-pack: end;
      justify-content: flex-end; }
    .report-inner-cards-wrapper .report-inner-card .report-title {
      font-size: 14px;
      font-weight: 600;
      color: #111111; }
    .report-inner-cards-wrapper .report-inner-card h4 {
      font-weight: bold; }
    .report-inner-cards-wrapper .report-inner-card .report-count {
      font-size: 14px;
      color: #8e32e9; }
    .report-inner-cards-wrapper .report-inner-card .inner-card-icon {
      width: 62px;
      height: 62px;
      font-size: 25px;
      color: #ffffff;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      margin-left: auto; }
      .rtl .report-inner-cards-wrapper .report-inner-card .inner-card-icon {
        margin-left: 0;
        margin-right: auto; }

.sessions-progress-bar-card {
  padding-left: 25px;
  padding-right: 20px; }
  .rtl .sessions-progress-bar-card {
    padding-left: 20px;
    padding-right: 25px; }
  .sessions-progress-bar-card .card-header {
    padding-left: 0;
    padding-right: 0;
    padding-top: 30px;
    border-color: #e8ecf1;
    background-color: transparent; }
    .sessions-progress-bar-card .card-header h4 {
      font-size: 18px;
      font-weight: 600; }
  .sessions-progress-bar-card .card-body {
    padding: 0 0 30px 0; }
  .sessions-progress-bar-card .dashboard-progress-bar-wrapper {
    list-style: none;
    padding: 0; }
    .sessions-progress-bar-card .dashboard-progress-bar-wrapper li {
      border-bottom: solid 1px #e8ecf1;
      padding: 20px 0 15px;
      font-size: 14px; }
      .sessions-progress-bar-card .dashboard-progress-bar-wrapper li h6 {
        font-size: inherit;
        margin: 0; }
      .sessions-progress-bar-card .dashboard-progress-bar-wrapper li p {
        margin: 0; }
      .sessions-progress-bar-card .dashboard-progress-bar-wrapper li .progress {
        margin-top: 10px; }
      .sessions-progress-bar-card .dashboard-progress-bar-wrapper li:last-child {
        border: 0;
        padding-bottom: 5px; }

.aligner-wrapper {
  position: relative; }
  .aligner-wrapper .wrapper {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%); }

.dashboard-inline-datepicker .card-body {
  position: relative;
  padding-left: 10px;
  padding-right: 10px; }

.boxed-layout .dashboard-inline-datepicker .datepicker {
  padding: 0 10px; }

#circle-progress-1, #circle-progress-2 {
  width: 125px;
  height: 125px;
  position: relative;
  margin: 15px auto; }
  @media screen and (min-width: 1200px) {
    .boxed-layout #circle-progress-1, .boxed-layout #circle-progress-2 {
      width: 115px;
      height: 115px; } }

.circle-progress-value {
  font-size: 30px;
  font-weight: bold;
  text-align: center;
  margin: 0;
  color: #001737; }

.circle-progress-label {
  font-size: 12px;
  color: #a7afb7;
  text-align: center;
  margin: 0; }

.quick-status-card .icon-holder {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  width: 45px;
  height: 45px;
  border-radius: 4px;
  background-color: #ecf0f4;
  font-size: 20px;
  color: #626262; }
  @media screen and (max-width: 360px) {
    .quick-status-card .icon-holder {
      display: none; } }

.quick-status-card .wrapper:first-child .icon-holder {
  background-color: #3a69ff;
  color: #fff; }

.social-card {
  color: black; }
  .social-card.card-colored {
    background-size: cover !important;
    background-position: center !important;
    background-repeat: no-repeat !important; }
    .social-card.card-colored.twitter-card {
      /*background-image: url(../../demo_admin_assets/images/social_icons/twitter-bg.svg); */
        
    }
      .social-card.card-colored.twitter-card .card-body i {
        color: #1da1f1; }
    .social-card.card-colored.facebook-card {
      /*background-image: url(../../demo_admin_assets/images/social_icons/facebook-bg.svg); */
        
    }
      .social-card.card-colored.facebook-card .card-body i {
        color: #105fb8; }
    .social-card.card-colored.instagram-card {
      /*background-image: url(../../demo_admin_assets/images/social_icons/instagram-bg.svg); */
        
    }
      .social-card.card-colored.instagram-card .card-body i::before {
        color: #6d41c9;
        background: -webkit-linear-gradient(87deg, #6d41c9, #ea0084 55%, #ffc84e);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent; }
  .social-card .card-body i {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 69px;
    height: 69px;
    font-size: 30px;
    background-color: #fff;
    border-radius: 50%;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center; }
  .social-card .card-body .wrapper h5 {
    font-size: 18px;
    font-weight: 600; }
  .social-card .card-body .wrapper h1 {
    font-weight: bold;
    font-size: 40px; }

.square-indicator {
  display: inline-block;
  width: 13px;
  height: 13px; }
  .square-indicator + p {
    font-size: 12px;
    font-weight: 600;
    color: #a7afb7; }

#performance-indicator-chart .ct-series.ct-series-a line {
  stroke: #ff4d6b; }

#performance-indicator-chart .ct-series.ct-series-b line {
  stroke: #8e32e9; }

#performance-indicator-chart .ct-series.ct-series-c line {
  stroke: #1bdbe0; }

#performance-indicator-chart .ct-series .ct-bar {
  stroke-width: 8px;
  stroke-linecap: round; }
  @media screen and (max-width: 480px) {
    #performance-indicator-chart .ct-series .ct-bar {
      stroke-width: 4px; } }

@media screen and (max-width: 480px) {
  #performance-indicator-chart .ct-labels .ct-label.ct-horizontal {
    -webkit-transform: rotate(-90deg) translateY(20%);
    transform: rotate(-90deg) translateY(20%); } }

.performane-indicator-card .data-time-range {
  color: #a7afb7;
  font-size: 12px;
  font-weight: 600;
  margin-left: 20px; }
  .performane-indicator-card .data-time-range.active {
    color: #111111; }

.sales-report-country a:hover {
  text-decoration: none; }

.sales-report-country .sales-activity:first-child {
  border-bottom: solid 1px #e8ecf1; }
  @media screen and (max-width: 1199px) {
    .sales-report-country .sales-activity:first-child {
      border-bottom: none;
      border-right: solid 1px #e8ecf1; } }
  @media screen and (max-width: 575px) {
    .sales-report-country .sales-activity:first-child {
      border-bottom: solid 1px #e8ecf1;
      border-right: none; } }

@media screen and (max-width: 575px) {
  .sales-report-country .sales-activity {
    padding: 1rem; } }

#dashboard-vmap {
  height: 280px; }

.gateway-icon {
  width: 20px !important;
  height: 20px !important;
  min-width: 20px !important; }

.pagination .page-item .page-link, .jsgrid .jsgrid-pager .page-item .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a,
.jsgrid .jsgrid-pager .jsgrid-pager-page a {
  font-size: 12px;
  font-weight: 600; }
  @media screen and (max-width: 576px) {
    .pagination .page-item .page-link, .jsgrid .jsgrid-pager .page-item .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-page .page-link, .jsgrid .jsgrid-pager .jsgrid-pager-nav-button a,
    .jsgrid .jsgrid-pager .jsgrid-pager-page a {
      padding: 0.25rem 0.5rem; } }

/*# sourceMappingURL=style.css.map */
