var last=0;

$(window).on('scroll', function(){


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



// document.querySelector('.j').addEventListener("click", function() {
//   document.querySelector('.bg-modal').style.display = "flex";
//
// });
// document.querySelector('.close').addEventListener("click", function() {
//   document.querySelector('.bg-modal').style.display = "none";
// });

// var opt= $("#opt option:selected").val();
// console.log(opt);
document.querySelector('.opt1').addEventListener("click", function() {
  document.querySelector('.hostedgames').style.display = "block";
  document.querySelector('.joinedgames').style.display = "none";
    $(".opt2").css("color", "rgba(176, 48, 176,0.4)");
        $(".opt1").css("color", "#b030b0");

  console.log('1');

});
document.querySelector('.opt2').addEventListener("click", function() {
  document.querySelector('.hostedgames').style.display = "none";
  document.querySelector('.joinedgames').style.display = "block";
    $(".opt1").css("color", "rgba(176, 48, 176,0.4)");
        $(".opt2").css("color", "#b030b0");
    console.log('2');
});
// if(document.getElementById('#isSelected').checked) {
//     $(".joinedgames").show();
//       $(".hostedgames").hide();
//       console.log("1");
//
// } else {
//     $(".joinedgames").hide();
//     $(".hostedgames").show();
// }
// if($("#isSelected").prop("checked")==true) {
//     document.querySelector('.hostedgames').style.display = "block";
//     document.querySelector('.joinedgames').style.display = "none";
//   }
//   else {
//      document.querySelector('.hostedgames').style.display = "none";
//       document.querySelector('.joinedgames').style.display = "block";
//   }
