
var app = $.sammy('#app', function () {

   this.get('#/', function (context) {
      $('#home').addClass('active');
      context.app.swap('');
      context.render('templates/home.html', {})
         .appendTo(context.$element());
   });

   this.get('#/about', function (context) {
      $('#about').addClass('active');
      context.app.swap('');
      context.render('templates/about.html', {})
         .appendTo(context.$element());
   });

   this.get('#/services', function (context) {
      $('#services').addClass('active');
      context.app.swap('');
      context.render('templates/services.html', {})
         .appendTo(context.$element());
   });

   this.get('#/gallery', function (context) {
      $('#gallery').addClass('active');
      context.app.swap('');
      context.render('templates/gallery.html', {})
         .appendTo(context.$element());
   });

   this.get('#/team', function (context) {
      $('#team').addClass('active');
      context.app.swap('');
      context.render('templates/team.html', {})
         .appendTo(context.$element());
   });

   this.get('#/contact', function (context) {
      var map = $('#map');
      if (map.length > 0) {
         google.maps.event.addDomListener(window, 'load', init);
         var lattuide = map.attr('data-lat');
         var longtuided = map.attr('data-lon');
      }
      $('#contact').addClass('active');
      context.app.swap('');
      context.render('templates/contact.html', {})
         .appendTo(context.$element());
   });
});

$(function () {
   app.run('#/');
});

