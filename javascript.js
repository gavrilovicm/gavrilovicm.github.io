$(document).ready(function(){
  var didScroll;

  $(this).scrollTop(0);

  $(".hed-2").slideDown(1000);
  $("#naslovna").animate({
    opacity: '1'
  });

//animacija za prikazivanje ostatka teksta
  $("#prikazi_vise").click(function(){
    if (($("#produzi").height() == $("#produzi")[0].scrollHeight)&&($("#produzi").height() != 0)){
      $("#prikazi_vise").html("Prikaži više..");
    }
      else $("#prikazi_vise").html("Prikaži manje..");
    });
//animacija za skakanje na deo strane
  $("#prvi a, #toTop, #logo").on('click', function(event){
    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 500,function(){
        window.location.hash = hash;
        var wTop = $(window).scrollTop();
        //provera da li je brauzer mozilla
        if ((navigator.userAgent.indexOf("Firefox") > 0)) {$(window).scrollTop(wTop);}
        else {$(window).scrollTop(wTop);};
      });
    }//end if-a
  });

  $('.navbar-collapse a').click(function(){
    $(".navbar-collapse").collapse('hide');
  });
//click off navbar, close it
  $('main').on('click',function(){
	$('.navbar-collapse').collapse('hide');
});
$("#logo").on('click', function(){
  $('.navbar-collapse').collapse('hide');
});

  $(window).scroll(function(){
//animacija za slajd div-ova
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
      if (pos < winTop + 600) {
        $(this).addClass("slide");
      }

    });
// dugme za skrolovanje na pocetak
    var pos=$(window).scrollTop();

    if (pos > 300) {
      $("#toTop").css("opacity", 1).addClass("fade");
    }
    else{
      $("#toTop").css("opacity", 0).addClass("fade");
    }

    didScroll = true;
  });
//
// //automatsko sakrivanje navbar-a
//   setInterval(function(event)  {
//     if (didScroll) {
//       hasScrolled();
//       didScroll=false;
//     }
//   },200);
//   var lastScrollTop = 0;
//   var delta=5;
//   var navbarHeight = $("#myNavbar").outerHeight();
//
//   function hasScrolled(){
//     var st = $(this).scrollTop();
//     if (Math.abs(lastScrollTop - st) <= delta) {
//       return;
//     }
//
//     if (st > lastScrollTop && st > navbarHeight){
//       $("nav").removeClass('nav-down').addClass('nav-up');
//     }else{
//       if (st + $(window).height() < $(document).height()){
//         $('nav').removeClass("nav-up").addClass("nav-down");
//       }
//     }
//     $("#myNavbar").removeClass("in");
//     lastScrollTop = st;
//   }
});
