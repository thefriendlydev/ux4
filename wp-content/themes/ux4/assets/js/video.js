(function($) {
  $( document ).ready(function() {
    $("#bgvid").trigger('play')

    $(".openVideo").click( function () {
      $(".heroPopUpVideo").addClass('active')
    })

    $(".closeVideo").click( function () {
      $(".heroPopUpVideo").removeClass('active')

      $(".videoContent video").trigger('pause')
    })
  });
})(jQuery)
