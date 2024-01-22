import 'bootstrap';
import './bootstrap';

$(document).ready(function () {
   $('input').on('input', function () {
      var input = $(this);
      var is_name = input.val();
      if (is_name) {
         $(".btnDiv").fadeIn();
         $(".btnAddIngredient").fadeIn();
         $(".btnDelIngredient").fadeIn();
      }
      else {
         $(".btnDiv").fadeOut();
         $(".btnAddIngredient").fadeOut();
         $(".btnDelIngredient").fadeOut();
      }
   });


   var count = 1;
   $('.btnAddIngredient').on('click', function (event) {
      event.preventDefault();
      if (count < 6) {
         var inputClone = $('.ingredientQuery').last().clone();
         inputClone.val('');
         inputClone.attr('id', 'ingredientQuery' + $('.ingredientQuery').length);
         $('.ingredientQuery').last().after(inputClone);
         count++;
      } else {
         alert("No puedes agregar más de 6 ingredientes.");
      }
   });
   $('.btnDelIngredient').on('click', function (event) {
      event.preventDefault();
      if (count > 1) {
         $('.ingredientQuery').last().remove();
         count--;
      } else {
         alert("Debes tener al menos 1 ingrediente.");
      }
   });

});
