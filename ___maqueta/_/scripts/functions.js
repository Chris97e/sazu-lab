document.documentElement.addEventListener('touchmove', function (event) {
  event.preventDefault();
}, false);

window.addEventListener('load', (event) =>{
  var loader = document.getElementById("loader");
  loader.classList.add("active");
});

$(window).on('scroll resize load', function () {
  var valScroll = $(window).scrollTop();
  var winHeight = $(window).innerHeight();

  $('.to_viewReset').each(function (index, element) {
    var thisTop = $(this).offset().top;
    if (valScroll >= thisTop - (winHeight - 100)) {
      $(this).addClass('visible');
    }
  });
});


try {
  var icoMenu = document.getElementById("ico_menu");
  icoMenu.addEventListener("click", ShowMenu);
  var mision = document.getElementById("btn_mision");
  mision.addEventListener("click", ShowMision);
} catch (error) {}



function ShowMenu() {
  document.getElementById("header").classList.toggle('active');
}




function ShowMision() {
  document.getElementById("c_mision").classList.toggle('active');
}



$('.slider_our').slick({
  dots: true,
  arrows:false,
  infinite: true,
  speed: 900,
  slidesToShow: 1,
  centerMode: true, 
  slidesToShow: 3,
  slidesToScroll: 1,
  focusOnSelect: true,
  responsive: [
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

$('.slider_clients').slick({
  dots: false,
  autoplay:true,
  arrows:false,
  infinite: true,
  speed: 1000,
  autoplaySpeed: 1000,
  centerMode: true, 
  slidesToShow: 3,
  slidesToScroll: 1,
  variableWidth: true,
  responsive: [
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        variableWidth: false,
        centerMode: false 
      }
    }
  ]
});



function Marquee(selector, speed) {
  const parentSelector = document.querySelector(selector);
  const clone = parentSelector.innerHTML;
  const firstElement = parentSelector.children[0];
  let i = 0;
  // console.log(firstElement);
  parentSelector.insertAdjacentHTML('beforeend', clone);
  parentSelector.insertAdjacentHTML('beforeend', clone);
  

  setInterval(function () {
    firstElement.style.marginLeft = `-${i}px`;
    if (i > firstElement.clientWidth) {
      i = 0;
    }
    i = i + speed;
  }, 0);
}


window.addEventListener('load', (event) =>{
  Marquee('.marquee', .3)
})