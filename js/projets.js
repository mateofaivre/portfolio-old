var linkVideo = document.querySelectorAll('.savoir-plus')
var nav = document.querySelector('.slider__navi')
var overlay = document.querySelectorAll('.overlayy')
var slider = document.querySelectorAll(' .js-slider')
var croixClose = document.querySelectorAll('.fa-times')
var containerMenu = document.querySelector('.container')
var scrollIcon = document.querySelector('.icon-scroll')
var body = document.querySelector('body')
var allSlideNav = document.querySelectorAll('.slide-nav')
var arrows = document.querySelectorAll('.arrow')
var arrowDown = document.querySelector('.arrows:first-child')
var arrowUp = document.querySelector('.arrows:last-child')


$('.slide-nav').on('click', function(e) {
  e.preventDefault();
  var current = $('.flex--active').data('slide'),
  next = $(this).data('slide');
  $('.slide-nav').removeClass('active');
  $(this).addClass('active');

  if (current === next) {
    return false;
  } else {
    changeStep(next)
    // $('.slider__wrapper').find('.flex__container[data-slide=' + next + ']').addClass('flex--preStart');
    // $('.flex--active').addClass('animate--end');
    // setTimeout(function() {
    //   $('.flex--preStart').removeClass('animate--start flex--preStart').addClass('flex--active');
    //   $('.animate--end').addClass('animate--start').removeClass('animate--end flex--active');
    // }, 800);
  }
});

window.addEventListener('wheel', function(e){
  e.preventDefault();

  for (let index = 0; index < overlay.length; index++) {
    if (overlay[index].style.display == 'block') {
      return;
    }
  }

  var e = window.event || e;
  var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));

  if(delta > 0){
    var current = $('.flex--active').data('slide'),
    next = current -1;
  }
  else{
    var current = $('.flex--active').data('slide'),
    next = current +1;
  }

  if (current === next || (current == allSlideNav.length && delta <= 0) || (current == 1 && delta > 0)) {
    return false;
  }
  else {
    changeStep(next);
  }

}, {passive:false});


window.addEventListener('keydown', (e) => {
 
  if (e.defaultPrevented) {
    return;
  }

  switch (e.key) {
    case "ArrowDown":
      var current = $('.flex--active').data('slide'),
      next = current +1;
      break;
    case "ArrowUp":
      var current = $('.flex--active').data('slide'),
      next = current -1;
      break;
    default: 
      return;
  }

  e.preventDefault();         
  if ( (current === next) || (current == allSlideNav.length && (e.key == "ArrowDown")) || (current == 1 && e.key == 'ArrowUp') )  {
    return false;
  }
  else {
    changeStep(next);
  }
});

function changeStep(next) {
  console.log(next)
  if (next < allSlideNav.length && next > 1){
    arrows.forEach( arrow => {
      arrow.classList.remove('disabled')
    })
  }
  else if (next == 1) {
    arrows[1].classList.add('disabled')
    arrows[0].className = 'arrow'
  }
  else if (next == allSlideNav.length) {
    arrows[0].classList.add('disabled')
    arrows[1].className = 'arrow'
  }

  $('.slide-nav').removeClass('active');
    allSlideNav[next-1].classList.add('active');
    $('.slider__wrapper').find('.flex__container[data-slide=' + next + ']').addClass('flex--preStart');
    $('.flex--active').addClass('animate--end');

    setTimeout(function() {
      $('.flex--preStart').removeClass('animate--start flex--preStart').addClass('flex--active');
      $('.animate--end').addClass('animate--start').removeClass('animate--end flex--active');
    }, 800);
}

arrows.forEach(arrow => {
  arrow.addEventListener('click', () => {
    var arrowsClass = Array.prototype.slice.call(arrows, 0 );
    var arrowIndex = (arrowsClass.indexOf(event.currentTarget));
    changeArrows(arrowIndex) 
  })
});

function changeArrows(arrowIndex) {
  if (arrowIndex == 0) {
    var next = $('.flex--active').data('slide')+1
  }
  else {
    var next = $('.flex--active').data('slide')-1
  }
  // if (next <= allSlideNav.length && next != 0){
    changeStep(next)
  // }
}

function changeNavState() {
  var current = $('.flex--active').data('slide')
  if (!body.classList.contains('-show-overlay')) {
    body.classList.add('-show-overlay')
    overlay[current-1].style.display="block"
  }
  else {
    body.classList.remove('-show-overlay')
    overlay[current-1].style.display="none"
  }
}

linkVideo.forEach( link => {
  link.addEventListener('click', changeNavState)
});

croixClose.forEach( croix => {
  croix.addEventListener('click', changeNavState)
})
