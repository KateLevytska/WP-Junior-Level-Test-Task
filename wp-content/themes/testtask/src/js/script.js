var $ = jQuery;
$(document).ready(function(){
    $('#sliderImages').slick({
        prevArrow: '<button class="sliderImages__arrow" aria-label="Previous"></button>',
        nextArrow: '<button class="sliderImages__arrow sliderImages__arrow-next" aria-label="Next"></button>',
    });

    $('#sliderReviews').slick({
        prevArrow: '<button class="sliderReviews__arrow" aria-label="Previous"></button>',
        nextArrow: '<button class="sliderReviews__arrow sliderReviews__arrow-next" aria-label="Next"></button>',
    });
  });
  
