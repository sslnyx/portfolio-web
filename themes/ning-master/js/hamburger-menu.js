(function ($) {

  $(document).ready(function () {

    function toggleSidebar() {
      $('.hamburger').toggleClass('is-active');
      $('#page, .site-branding').toggleClass('move-to-left');
      // $('.sidebar-item').toggleClass('active');
    }

    $( '.hamburger' ).on('click', function () {
      toggleSidebar();
    });

    $(document).keyup(function (e) {
      if (e.keyCode === 27) {
        toggleSidebar();
      }
    });

  });


})(jQuery);