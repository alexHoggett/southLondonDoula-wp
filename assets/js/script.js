// For navbar

const burger = document.querySelector('.navbar__burger');
const overlay = document.querySelector('.navbar__overlay')
const navlist = document.querySelector('.navbar__list');
const navbar = document.querySelector('.navbar');
const logo = document.querySelector('.navbar__logo');

const timeline = document.querySelector(".timeline__container"),
    elH = document.querySelectorAll(".timeline__text"),
    arrows = document.querySelectorAll(".timeline__arrows .arrow"),
    arrowPrev = document.querySelector(".timeline__arrows .arrow__prev"),
    arrowNext = document.querySelector(".timeline__arrows .arrow__next"),
    firstItem = document.querySelector(".timeline__dot:first-child"),
    lastItem = document.querySelector(".timeline__dot:last-child"),
    xScrolling = 280,
    disabledClass = "disabled";


window.addEventListener("load", init);

function init() {
  // setEqualHeights(elH);
  animateTl(xScrolling, arrows, timeline);
}

// SET EQUAL HEIGHTS
function setEqualHeights(el) {
  let counter = 0;
  for (let i = 0; i < el.length; i++) {
    const singleHeight = el[i].offsetHeight;

    if (counter < singleHeight) {
      counter = singleHeight;
    }
  }

  for (let i = 0; i < el.length; i++) {
    el[i].style.height = `${counter}px`;
  }
}

// CHECK IF AN ELEMENT IS IN VIEWPORT
// http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
function isElementInViewport(el) {
  const rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

// SET STATE OF PREV/NEXT ARROWS
function setBtnState(el, flag = true) {
  if (flag) {
    el.classList.add(disabledClass);
  } else {
    if (el.classList.contains(disabledClass)) {
      el.classList.remove(disabledClass);
    }
    el.disabled = false;
  }
}

// ANIMATE TIMELINE
function animateTl(scrolling, el, tl) {
  let counter = 0;
  for (let i = 0; i < el.length; i++) {
    el[i].addEventListener("click", function() {
      if (!arrowPrev.disabled) {
        arrowPrev.disabled = true;
      }
      if (!arrowNext.disabled) {
        arrowNext.disabled = true;
      }
      const sign = (this.classList.contains("arrow__prev")) ? "" : "-";
      if (counter === 0) {
        tl.style.transform = `translateX(-${scrolling}px)`;
      } else {
        const tlStyle = getComputedStyle(tl);
        // add more browser prefixes if needed here
        const tlTransform = tlStyle.getPropertyValue("-webkit-transform") || tlStyle.getPropertyValue("transform");
        const values = parseInt(tlTransform.split(",")[4]) + parseInt(`${sign}${scrolling}`);
        tl.style.transform = `translateX(${values}px)`;
      }

      setTimeout(() => {
        isElementInViewport(firstItem) ? setBtnState(arrowPrev) : setBtnState(arrowPrev, false);
        isElementInViewport(lastItem) ? setBtnState(arrowNext) : setBtnState(arrowNext, false);
      }, 1100);

      counter++;
    });
  }
}

burger.addEventListener('click', (e) => {
  burger.classList.toggle('navbar__burger--active');
  overlay.classList.toggle('navbar__overlay--active');
  document.body.classList.toggle('no-scroll');
  navlist.classList.toggle('navbar__list--active');
});

// implementing navbar hiding on scroll down
let lastScrollTop;
window.addEventListener('scroll', function(){
  let scrollTop = window.pageYOffset ||
  this.document.documentElement.scrollTop;
  if (scrollTop > lastScrollTop){
    navbar.style.top = '-10rem';
  } else {
    navbar.style.top = '0';
  }
  lastScrollTop = scrollTop;
});

// Add event listener for logo
logo.addEventListener('click', function(e){
  document.location.href = "/";
})