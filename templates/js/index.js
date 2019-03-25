//SIDENAV
$(document).ready(function(){
	$('.sidenav').sidenav();
});

//DROPDOWN
$('.dropdown-trigger').dropdown();


//MATERIALBOX
$(document).ready(function(){
	$('.materialboxed').materialbox();
});


//FLOATING ACTION BUTTON
$(document).ready(function(){
	$('.fixed-action-btn').floatingActionButton();
});


//SCROLLSPY
$(document).ready(function(){
  $('.scrollspy').scrollSpy({
  });
});


//TOOLTIPS
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.tooltipped');
    var instances = M.Tooltip.init({
      position:'bottom'
    });
  });


// CAROUSEL
$(document).ready(function(){
  $('.carousel').carousel();
});


//PRELOADER
document.addEventListener("DOMContentLoaded", function(){
  $('.preloader-background').delay(100).fadeOut('slow');  
  $('.preloader-wrapper')
    .delay(100)
    .fadeOut();
});

