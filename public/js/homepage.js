$(document).ready(function() {

  // Nav function - switches active class to menu item clicked.
  $(function() {
     $("li").click(function() {
        // remove classes from all
        $("li").removeClass("active");
        // add class to the one we clicked
        $(this).addClass("active");
     });
  });

  // hide navbar-collapse when clicked if not a dropdown toggle.
  $(document).on("click",".navbar-collapse.in",function(e) {
    if( $(e.target).is("a") && $(e.target).attr("class") != "dropdown-toggle" ) {
        $(this).collapse("hide");
    }
  });
  
  
  /* smooth scroll... found this, not my code. reference: http://stackoverflow.com/questions/7717527/smooth-scrolling-when-clicking-an-anchor-link*/
  $('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
  });  
  
  
  
  //Animate social icons
  $(".social i").hover(function() {
    $(this).stop().animate({ fontSize : "370%", color: "black"}, "fast");
  },
  function() {
    $(this).stop().animate({ fontSize : "330%", color: "##2d2d2d"   }, "fast");
  });
  

  //down arrow hover effect.
  $(".down #down").hover(function() {
    $(this).stop().animate({ 
      color: "rgba(45, 164, 125, 0.9)",
      top: "4px"
    }, 300);
  },
  function() {
    $(this).stop().animate({ 
      color: "rgba(45, 164, 125, 0.9)",
      top: "-4px"
    }, 300);
  });  
  

  
  
  //soccer hover to green
  $(".soccer #soccer").hover(function() {
    $(this).stop().animate({ 
      color: "#6fd700"
    }, 1000);
  },
  function() {
    $(this).stop().animate({ 
      color: "#333333"
    }, 1000);
  }); 
  
  
  //blow up the soccer ball
  $(".soccer").click(function() {
    $(".soccer #soccer").toggle("explode", 500);
  });
  
  
  //Welcome animation when W is clicked.
  $("#w").click(function() {
    $("#wel").effect("shake", { 
      direction: "up", 
      times: 4, 
      distance: 10
    }, 1000 );
  });

  
  //"click" things in welcome page.
  $(".click").click(function() {
    $(this).fadeOut();
  });   
  
  
  //smile animation
  $( ".smile" ).click(function() {
  $(this).toggle( "puff", {percent:400}, 1000)
  });
  
 
  //responsive word animation hover... big/small.
  $("h3 #resp").hover(function() {
    $(this).stop().animate({ fontSize : "100%", color: "white"}, "slow");
  },
  function() {
    $(this).stop().animate({ fontSize : "150%", color: "#6fd700"   }, "slow");
  });
    
  


  
  
});