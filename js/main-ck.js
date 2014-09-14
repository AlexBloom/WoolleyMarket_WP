//Fire Swipe Classes for Sliders
// slider
// var slider = new Swipe(document.getElementById('hero'), {
//       callback: function(e, pos) {
//
//         var i = bullets.length;
//         while (i--) {
//           bullets[i].className = ' ';
//         }
//         bullets[pos].className = 'on';
//
//       }
//     }),
//     bullets = document.getElementById('position').getElementsByTagName('em'),
//
//window.swipe = Swipe(document.getElementById('hero'));
window.swipe=new Swipe(document.getElementById("hero"),{});$(document).ready(function(){$.simpleWeather({location:"Sedro Woolley, WA",woeid:"",unit:"f",success:function(e){html="<span>"+e.currently+", "+e.temp+"&deg; "+e.units.temp+"</span>";$("#weather").html(html)},error:function(e){$("#weather").html("<p>"+e+"</p>")}})});