$(function(){
    $('.service-nav').on('click', function(){
        var panelId = $(this).attr('data-panelId');
        $(panelId).removeClass('hidden');
    });
});

$(function(){
    $('.prod-footer').on('click', function(){
        $("#products").removeClass('hidden');
        $(".hide-service").addClass('hidden');
        $(".show-service").removeClass('hidden');
    });
});

$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('nav').addClass('shrink');
  } else {
    $('nav').removeClass('shrink');
  }
});