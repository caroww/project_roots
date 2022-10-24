import {domReady} from '@roots/sage/client';

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  // application code
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);

//Change navbar when scrolling

window.addEventListener('load', scrollFunction);
window.addEventListener('scroll', scrollFunction);

function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.bottom >= 0
  );
}

function scrollFunction() {

  const header = document.querySelector('header');

  if (isInViewport(header)) {
    document.getElementById("navbar").style.color = '#f8d2c9';
  } else {
    document.getElementById("navbar").style.color = '#111111';
  }
}



