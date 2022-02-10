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

        const todayPHP = php_vars;
        let deadline = new Date(todayPHP);

        let counterId = null;

        function declensionNum(num, words) {
            return words[(num % 100 > 4 && num % 100 < 20) ? 2 : [2, 0, 1, 1, 1, 2][(num % 10 < 5) ? num % 10 : 5]];
        }

        function countdowncounter() {
            const diff = deadline - new Date();
            if (diff <= 0) {
                clearInterval(counterId);
            }
            const days = diff > 0 ? Math.floor(diff / 1000 / 60 / 60 / 24) : 0;
            const hours = diff > 0 ? Math.floor(diff / 1000 / 60 / 60) % 24 : 0;
            const minutes = diff > 0 ? Math.floor(diff / 1000 / 60) % 60 : 0;
            const seconds = diff > 0 ? Math.floor(diff / 1000) % 60 : 0;
            $days.textContent = days < 10 ? '0' + days : days;
            $hours.textContent = hours < 10 ? '0' + hours : hours;
            $minutes.textContent = minutes < 10 ? '0' + minutes : minutes;
            $seconds.textContent = seconds < 10 ? '0' + seconds : seconds;

            if (parseInt((days + hours + minutes + seconds)) === 0) {
                console.log(1)
                document.querySelector('.counter').innerHTML = "Expired"
            }
        }
        
        const $days = document.querySelector('.counter__days');
        const $hours = document.querySelector('.counter__hours');
        const $minutes = document.querySelector('.counter__minutes');
        const $seconds = document.querySelector('.counter__seconds');
        countdowncounter();
        counterId = setInterval(countdowncounter, 1000);
  });
  
