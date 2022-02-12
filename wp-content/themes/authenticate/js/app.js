import "bootstrap";
import Headroom from "headroom.js";
import initVhHeight from "./utils/vh";
import touchevents from "./utils/detectTouch";
import initFocusInput from "./plugins/initFocusInput";
import initPopup from "./components/popup";
import initNavbar from "./components/navbar";
import initAnchorLink from "./components/anchor";
import headerOffset from "./components/headerOffset";
import initFancybox from "./components/fancybox";
import CountdownTimer from "./components/countdownTimer";
import Filtration from "./components/filtration";

jQuery(function () {
  initFocusInput();
  initPopup();
  initNavbar(
    ".main-header .navbar-collapse",
    ".main-header .navbar-toggler",
    "navbar-open",
    1280
  );
  initNavbar(
    ".navbar-filter .navbar-collapse",
    ".filter-toggler",
    "filter-open",
    1280
  );
  initVhHeight();
  touchevents();
  initAnchorLink();
  initFancybox();
  CountdownTimer();
  Filtration();
});

headerOffset();

// grab an element
const myElement = document.querySelector(".main-header");
const headroom = new Headroom(myElement, {
  offset: 0,
});
headroom.init();

// close filter navbar after filtration on mobile
$(".navbar-filter .navbar-nav .nav-link").on("click", function () {
  const win = jQuery(window);

  if (win.width() < 1280) {
    $(".navbar-filter .navbar-collapse").collapse("hide");
    $("body").removeClass("filter-open");
  }
});

// close filter navbar after filtration on mobile
$(".navbar-filter .filter-list a").on("click", function () {
  const win = jQuery(window);

  if (win.width() < 1280) {
    $(".navbar-filter .navbar-collapse").collapse("hide");
    $("body").removeClass("filter-open");
  }
});

// loaded state script
window.addEventListener("load", () => {
  const loader = document.querySelector("html");

  if (loader) {
    setTimeout(() => {
      loader.classList.add("loaded");
    }, 500);
  }
});
