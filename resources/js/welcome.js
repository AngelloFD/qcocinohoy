import 'bootstrap';
import './bootstrap';

$(document).ready(function () {
   $('[data-bs-toggle="popover"]').popover();
   
   $('input').on('input', function () {
      var input = $(this);
      var is_name = input.val();
      if (is_name) {
         // fade in .btnDiv and all its child elements
         $(".btnDiv").fadeIn();
         $("div.btnDiv > button").fadeIn();
      }
      else {
         $(".btnDiv").fadeOut();
         $("div.btnDiv > button").fadeOut();
      }
   });

   

});
