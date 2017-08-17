/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import './bootstrap';
import $ from 'jquery';

import 'swiper/dist/js/swiper.jquery.min';
// import 'animate.css';
import mixitup from 'mixitup';

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

let mySwiper = new Swiper('.swiper-container', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    pagination: '.swiper-pagination',
    paginationType: 'progress',
    autoplay: 5000,
    speed: 1000,
    preloadImages: true
});

$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        this.addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
        return this;
    }
});

const word = 'This is a story';

$(document).scroll((function () {
    const expand_business_teaser_height = $("#expand-business-teaser").height();
    const section_register_height = $("#section__register").offset().top - 300;
    const $navbarBtm = $('.navbar--btm');
    let navbarBtm_animate = 0;

    if ((scrollY > expand_business_teaser_height) && (scrollY < section_register_height)) {
        if (navbarBtm_animate === 0) {
            navbarBtm_animate = 1;
            $navbarBtm.removeClass('animated').removeClass('fadeOutDownBig');
            $navbarBtm.addClass('animated fadeInUpBig');
        } else if (navbarBtm_animate === 1 && $navbarBtm.hasClass('fadeOutDownBig')){
            console.log('animated higher');
            $navbarBtm.removeClass('animated').removeClass('fadeOutDownBig');
            $navbarBtm.addClass('animated fadeInUpBig');
        }
    } else if ((scrollY < expand_business_teaser_height) || (scrollY > section_register_height)) {
        if (navbarBtm_animate === 0) {
            navbarBtm_animate = 1;
            $navbarBtm.removeClass('animated').removeClass('fadeInUpBig');
            $navbarBtm.addClass('animated fadeOutDownBig');
        } else if (navbarBtm_animate === 1 && $navbarBtm.hasClass('fadeInUpBig')){
            console.log('animated lower');
            $navbarBtm.removeClass('animated').removeClass('fadeInUpBig');
            $navbarBtm.addClass('animated fadeOutDownBig');
        }
    }

   /* switch (true) {

        case ((scrollY > expand_business_teaser_height) && (scrollY < latest_product_height)) && ():
            console.log('more than');
            // $navbarBtm.animateCss('fadeInUpBig');
            $navbarBtm.removeClass('fadeOutDownBig').removeClass('animated');
            $navbarBtm.addClass('animated fadeInUpBig');
            break;
        case ((scrollY < expand_business_teaser_height) || (scrollY > latest_product_height)) && ($navbarBtm.hasClass('fadeInUpBig')):
            console.log('less than');
            // $navbarBtm.animateCss('fadeOutDownBig');
            $navbarBtm.removeClass('fadeInUpBig').removeClass('animated');
            $navbarBtm.addClass('fadeOutDownBig');
            break;
    }*/
}));

$('.to-top').click(function() {
    $('html, body').animate({scrollTop: 0}, 300);
});

$('.nav-toggler').click(function () {
    $('.nav-toggler__open').fadeToggle();
    $('#siteNavCont').fadeToggle();
    $('.nav-toggler__close').fadeToggle();
});

const mixer= mixitup('.card-row');

// Prevent default so id doesn't go to the link if we have javascript
$('.products__category__nav').click((e)=>{
    if (e.target.classList.contains('nav-link')){
        e.preventDefault();
    }
});