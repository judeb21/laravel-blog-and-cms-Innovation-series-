'use strict';
$(document).ready(function() {
    $('.navbar').waypoint(function(direction){
        if (direction == "down") {
          $('nav').addClass('nav-full');
          $('nav').removeClass('nav-center');
        }
        else {
          $('nav').removeClass('nav-full');
          $('nav').addClass('nav-center');
        }
    }, {
      offset: '3%'
    });
});