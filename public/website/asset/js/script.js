// $(window).scroll(function(){
//   if($(window).scrollTop() > 50){
//     $(".menu").addClass("kata")
//   }else{
//     $(".menu").removeClass("kata")
//   }

// })




$(window).on('scroll',function(){
  let scrolling = $(this).scrollTop()

  if( scrolling > 250){
    $(".extra_nav").addClass("nav_ex")
  }else{
    $(".extra_nav").removeClass("nav_ex")
  }

  if( scrolling > 250){
    $(".nav_ani").addClass("nav_ex")
  }else{
    $(".nav_ani").removeClass("nav_ex")
  }

  if( scrolling > 20){
    $(".preloader").addClass("pre_ex")
  }else{
    $(".preloader").removeClass("pre_ex")
  }



  if( scrolling > 250){
    $(".onecontainer").addClass("vanish")
    $(".twocontainer").addClass("vanish")
    $(".threecontainer").addClass("vanish")
  }else{
    $(".onecontainer").removeClass("vanish")
    $(".twocontainer").removeClass("vanish")
    $(".threecontainer").removeClass("vanish")
  }





//   if( scrolling <50){
//     $(".preloader").addClass("pre_re")
//   }else{
//     $(".preloader").removeClass("pre_re")
//   }
})









$(function () {
  'use strict';


  // var navoff = $('.main_manu').offset().top;

  // $(window).scroll(function () {

  //   var scrolling = $(this).scrollTop();

  //   if (scrolling > navoff) {
  //     $('.main_manu').addClass('manu_fixed')
  //   } else {
  //     $('.main_manu').removeClass('manu_fixed')
  //   }

  // });


  // var navoff = $('.img_manu').offset().top;

  // $(window).scroll(function () {

  //   var scrolling = $(this).scrollTop();

  //   if (scrolling > navoff) {
  //     $('.img_manu').addClass('img_fix')
  //   } else {
  //     $('.img_manu').removeClass('img_fix')
  //   }

  // });














});
