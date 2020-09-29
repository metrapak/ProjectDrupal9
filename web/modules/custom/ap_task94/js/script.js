
/**
 * @file
 * Simple JavaScript hello world file.
 */

 (function ($, Drupal, settings) {

   "use strict";

   Drupal.behaviors.valueClassAttribute = {
     attach: function (context) {
       let className = document.body.className;
       alert(className);
     }
   }

 })(jQuery, Drupal, drupalSettings);
