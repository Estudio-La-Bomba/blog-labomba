// Loader
$(window).load(() => {
  setTimeout(() => {
    $("#loading").css({ opacity: 0 });

    setTimeout(() => {
      $("#loading").hide();
    }, 1000);
  }, 500);

  setTimeout(() => {
    $(".article-show").css({ opacity: 1, top: "0" });
  });
});

$(document).ready(() => {
  // Carousel Proejcts
  const carousel = $(".article-carousel").flickity({
    cellAlign: "left",
    prevNextButtons: false,
    pageDots: false,
    autoPlay: true,
    pauseAutoPlayOnHover: true
  });

  // Dots
  $(".article-dots-prev").on("click", () => {
    carousel.flickity("previous");
  });

  $(".article-dots-next").on("click", () => {
    carousel.flickity("next");
  });

  // Toggle Theme
  $(".theme-switcher-button-wrap").on("click", function() {
    $(this).toggleClass("theme-switcher-button-active");
    $("body").toggleClass("light");

    const checkLight = $(".light");

    if (checkLight[0]) {
      localStorage.setItem("theme", "light");
    }

    if (!checkLight[0]) {
      localStorage.clear();
    }
  });

  const theme = localStorage.getItem("theme");

  if (theme === "light") {
    $(".theme-switcher-button-wrap").toggleClass(
      "theme-switcher-button-active"
    );
    $("body").toggleClass("light");
  }
});
