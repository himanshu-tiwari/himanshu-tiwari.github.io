$(document).ready(function() {

  var carousel = $('#carousel');
  var slide = $('#carousel ul li');
  var dots = $('.dot-nav');
  var currentIndex = null;
  var interval = null;
  var intervalSpeed = 3000;

  // preloading images
  var backgrounds = [];
  slide.each(function() {
    var img = new Image();
    img.src = $(this).data('background');
    backgrounds.push(img);
  });

  // adding initial active slide
  slide.first().addClass('active');
  var background = $('#carousel ul li.active').data('background');
  carousel.css('background-image', 'url("' + background + '")');

  // adding a dot for every slide
  var num = slide.size();
  for(i = 0; i < num; i++) {
    dots.append('<li></li>');
  }

  // adding initial active dot
  dots.find('li').first().addClass('active');

  // getting current index
  currentIndex = $('#carousel ul li.active').index();

  // setting current index based on click
  dots.find('li').click(function() {
    pause();
    currentIndex = $(this).index();
    showCurrentSlide();
    play();
  });

  // setting up the rotation interval
  interval = setInterval(onInterval, intervalSpeed);
  carousel.hover(pause.bind(this), play.bind(this));

  // display chosen slide
  function showCurrentSlide() {
    // removing active states
    dots.find('li').removeClass('active');
    slide.removeClass('active');

    // setting new active states
    dots.find('li').eq(currentIndex).addClass('active');
    slide.eq(currentIndex).addClass('active');
    background = slide.eq(currentIndex).data('background')
    carousel.css('background-image', 'url("' + background + '")');
  }

  // setting automatic play
  function onInterval() {
    currentIndex++;
    if(currentIndex == num) { currentIndex = 0; }
    showCurrentSlide();
  }

  // pausing and playing on hoverIn/hoverOff
  function pause() {
    clearInterval(interval);
  }

  function play() {
    clearInterval(interval);
    interval = setInterval(onInterval, intervalSpeed);
  }

});