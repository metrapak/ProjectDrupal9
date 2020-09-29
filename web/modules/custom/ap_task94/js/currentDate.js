/**
* @file
* Simple JavaScript  file.
*/

(function ($, Drupal, settings) {

  "use strict";

  Drupal.behaviors.currentDate = {
    attach: function (context) {
       let time = new Date();
      $('.currentDate').html(time);
    }
  }

})(jQuery, Drupal, drupalSettings);
