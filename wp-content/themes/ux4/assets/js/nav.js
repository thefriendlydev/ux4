(function($) {
  $(document).scroll(function() {
    $(window).scroll(function() {
      var scroll = $(window).scrollTop()
      var os = $('.hero').offset().top
      var ht = $('.hero').height()

      if(scroll > os + ht - 60){
        $(".primaryNav").addClass('primaryNav--secondary')
      } else {
        $(".primaryNav").removeClass('primaryNav--secondary')
      }
    })

  })

  $( document ).ready(function() {
    var menuToggle = false
    $(".icon-menu, .icon-close--nav").click(function () {
      menuToggle = !menuToggle

      if (menuToggle) {
        $(".primaryNav").addClass('active')
      } else {
        $(".primaryNav").removeClass('active')
      }
    })
  });
})(jQuery)
