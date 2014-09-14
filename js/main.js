   $(document).ready(function() {
// Fire LocalScroll
   		$('body').localScroll({offset:0});

//Fire Swipe Classes for Sliders
   window.swipe = new Swipe(document.getElementById('hero'), {
     //startSlide: 0,
     //speed: 400,
     //auto: 5000,
     //continuous: true,
     //disableScroll: false,
     //stopPropagation: false,
     //callback: function(index, elem) {},
     //transitionEnd: function(index, elem) {}
   });

// Weather Load - Docs at http://simpleweatherjs.com
     $.simpleWeather({
       location: 'Sedro Woolley, WA',
       woeid: '',
       unit: 'f',
       success: function(weather) {
         html = '<span>'+weather.currently+', '+weather.temp+'&deg; '+weather.units.temp+'</span>';
         $("#weather").html(html);
       },
       error: function(error) {
         $("#weather").html('<p>'+error+'</p>');
       }
     });
   });