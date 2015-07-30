/*================================================
  document.ready
================================================*/
$(document).ready(function() {

    // Modal popup window - videos
    $('.video-overlay').magnificPopup({
      type: 'iframe',
      mainClass: 'mfp-fade'
    });

    // Sliding mobile menu
    $('.menu-toggle').on('click', function(e){
        $('#side-nav').toggleClass('open');
    });

}); // end document.ready