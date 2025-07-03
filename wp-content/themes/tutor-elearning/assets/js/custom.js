jQuery(document).ready(function() {
  jQuery("h2.banner-heading").each(function() {
      var t = jQuery(this).text();
      var splitT = t.split(" ");
      var lastSecondIndex = splitT.length - 2;
      var lastIndex = splitT.length - 1;
      var newText = "";
      for (var i = 0; i < splitT.length; i++) {
          if (i == lastSecondIndex || i == lastIndex) {
              newText += "<span style='color:var(--wp--preset--color--accent)'>";
              newText += splitT[i] + " ";
              newText += "</span>";
          } else {
              newText += splitT[i] + " ";
          }
      }
      jQuery(this).html(newText);
  });
});

// swiper js
jQuery(document).ready(function () {
  var tutor_elearning_swiper_testimonials = new Swiper(".testimonial-swiper-slider.mySwiper", {
    slidesPerView: 3,
      spaceBetween: 15,
      speed: 1000,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".testimonial-swiper-button-next",
        prevEl: ".testimonial-swiper-button-prev",
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        767: {
          slidesPerView: 2,
        },
        1023: {
          slidesPerView: 3,
        }
      },
  })
});