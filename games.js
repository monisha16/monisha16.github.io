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
