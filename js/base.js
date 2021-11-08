/*global jQuery*/

document.addEventListener("DOMContentLoaded",
  function() {
    var div, n,
        v = document.getElementsByClassName("youtube-player");
    for (n = 0; n < v.length; n++) {
        div = document.createElement("div");
        div.setAttribute("data-id", v[n].dataset.id);
        div.innerHTML = labnolThumb(v[n].dataset.id);
        div.onclick = labnolIframe;
        v[n].appendChild(div);
    }
  }
);

function labnolThumb(id) {
  var thumb = '<img src="https://i.ytimg.com/vi/ID/maxresdefault.jpg">',
    play = '<div class="play"></div>';
  return thumb.replace("ID", id) + play;
}

function labnolIframe() {
  var iframe = document.createElement("iframe");
  var embed = "https://www.youtube.com/embed/ID?autoplay=1";
  iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
  iframe.setAttribute("frameborder", "0");
  iframe.setAttribute("allowfullscreen", "1");
  this.parentNode.replaceChild(iframe, this);
}

jQuery(document).ready(function ($) {
  'use strict'

  // Reverse stuff when necessary
  $.fn.reverse = [].reverse;

  // =========================================
  // FIX LIGHTWEIGHT GRID COLUMN SPACING
  // -----------------------------------------
  if ($('.lgc-clear').length) {
    $('.lgc-clear').each(function() {
      $(this).prevAll('.lgc-column').reverse().wrapAll('<div class="lgc-row"></div>');
    });
  }

  // =========================================
  // SCROLL DOWN ON CLICK
  // -----------------------------------------
  $('.scroll-to').on('click', function (event) {
    var target = $(this).attr('href');
    if (target.length) {
      event.preventDefault();
      $('html, body').animate({
        scrollTop: $(target).offset().top
      }, 1000);
    }
  });
})