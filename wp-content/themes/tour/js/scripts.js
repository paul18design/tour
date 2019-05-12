$(document).ready(function () {
   let $services = $('.services');
   let $contact = $('.contact-section');
   $services.append(`<div class="overlay" style="height: ${$services.height()}px"></div>`);
   $contact.append(`<div class="overlay" style="height: ${$contact.height()}px"></div>`);

   $(window).resize(function () {
      $services.find('.overlay').css('height', $services.height());
      $contact.find('.overlay').css('height', $contact.height());
   });
});