var $ = jQuery;
$(document).ready(function(){
    $('#sliderImages').slick({
        prevArrow: '<button class="sliderImages__arrow"></button>',
        nextArrow: '<button class="sliderImages__arrow sliderImages__arrow-next"></button>',
    });

    $('#sliderReviews').slick({
        prevArrow: '<button class="sliderReviews__arrow"></button>',
        nextArrow: '<button class="sliderReviews__arrow sliderReviews__arrow-next"></button>',
    });
  });
  