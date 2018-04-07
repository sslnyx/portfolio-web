(function ($) {

  $(document).ready(function () {

    function toggleSidebar() {
      $('.hamburger').toggleClass('is-active');
      // $('main').toggleClass('move-to-left');
      // $('.sidebar-item').toggleClass('active');
    }

    $( '.hamburger' ).on('click', function () {
      // console.log('nice!');
      toggleSidebar();
    });

    $(document).keyup(function (e) {
      if (e.keyCode === 27) {
        toggleSidebar();
      }
    });

  });


})(jQuery);