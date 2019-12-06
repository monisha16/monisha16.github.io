document.querySelector('.cta-join').addEventListener("click", function() {
  document.querySelector('.bg-modal').style.display = "flex";
  $(".contact-us").hide();
  $(".sign-up-form").show();
  $(".login-form").hide();
  $(".signup").show();
  $(".login").show();
  $(".login").css("background", "rgba(0, 0, 0, 0.4)");
  $(".signup").css("background", "none");
  $(".login").css("color", "#737373");
  $(".signup").css("color", "white");

});

document.querySelector('.login-button').addEventListener("click", function() {
  document.querySelector('.bg-modal').style.display = "flex";
  $(".contact-us").hide();
  $(".sign-up-form").show();
  $(".login-form").hide();
  $(".signup").show();
  $(".login").show();
  $(".login").css("background", "rgba(0, 0, 0, 0.4)");
  $(".signup").css("background", "none");
  $(".login").css("color", "#737373");
  $(".signup").css("color", "white");
});

document.querySelector('.close').addEventListener("click", function() {
  document.querySelector('.bg-modal').style.display = "none";
  $(".login-form").hide();
  $(".login").css("background", "rgba(0, 0, 0, 0.4)");
  $(".login").css("color", "#737373");
  $(".contact-us").hide();
  document.querySelector('.modal-contents').style.height = "395px";


});
 document.getElementById('f').addEventListener("click", function(){
   document.querySelector('.bg-modal').style.display = "flex";
   $(".login-form").hide();
  $(".sign-up-form").hide();
  $(".signup").hide();
  $(".login").hide();
  $(".contact-us").show();
  document.querySelector('.modal-contents').style.height = "425px";

});
var last=0;

$(window).on('scroll', function(){
console.log($(window).scrollTop());

  if($(window).scrollTop()<last){
    document.querySelector('.h').style.top='0px';
    $('header').addClass('black');
    $('#n').addClass('black-nav');
    $('#n').removeClass('nav-link');

    $('#n1').addClass('black-nav');
    $('#n1').removeClass('nav-link');

    $('#n2').addClass('black-nav');
    $('#n2').removeClass('nav-link');

    $('#n3').addClass('black-nav');
    $('#n3').removeClass('nav-link');
  }
  else{
      document.querySelector('.h').style.top='-100px';
  }

 if($(window).scrollTop()==0){

        $('header').removeClass('black');
        $('#n').removeClass('black-nav');
        $('#n').addClass('nav-link');

        $('#n1').removeClass('black-nav');
        $('#n1').addClass('nav-link');

        $('#n2').removeClass('black-nav');
        $('#n2').addClass('nav-link');

        $('#n3').removeClass('black-nav');
        $('#n3').addClass('nav-link');
    }

  last=$(window).scrollTop();

});
$(".login-form").hide();
$(".login").css("background", "rgba(0, 0, 0, 0.4)");
$(".login").css("color", "#737373");
$(".contact-us").hide();

$(".login").click(function(){

  $(".contact-us").hide();
  $(".sign-up-form").hide();
  $(".login-form").show();
  $(".signup").css("background", "rgba(0, 0, 0, 0.4)");
  $(".login").css("background", "none");
  $(".signup").css("color", "#737373");
  $(".login").css("color", "white");

});

$(".signup").click(function(){
  $(".sign-up-form").show();
  $(".login-form").hide();
  $(".login").css("background", "rgba(0, 0, 0, 0.4)");
  $(".signup").css("background", "none");
  $(".login").css("color", "#737373");
  $(".signup").css("color", "white");
  $(".contact-us").hide();
});
