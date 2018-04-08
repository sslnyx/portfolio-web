(function ($) {

  $(document).ready(function () {

    function toggleSidebar() {
      $('.hamburger').toggleClass('is-active');
      $('.hamburger,#page').toggleClass('move-to-left');
      // $('.site-content').toggleClass('move-to-left');
      // $('#site-navigation').toggleClass('hide');
      
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