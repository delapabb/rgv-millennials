$(document).foundation();

// Initialize Sidebars
(function($) {
$(document).ready(function() {
  $.slidebars({
    siteClose: true,
    disableOver: 767,
    hideControlClasses: true,
    scrollLock: false
  });
});
}) (jQuery);