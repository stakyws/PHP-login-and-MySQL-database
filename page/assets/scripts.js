
jQuery(document).ready(function(){
	
  /*
  * Navbar transparency
  */
  $('.navbar-bg-change-point').waypoint(function() {
    $('nav').toggleClass('azm-navbar-transparency');
  });
	
  /*
    Scroll To Top 
  */
  $('.to-top a').on('click', function(e) {
    e.preventDefault();
    globalThis.scrollTo({ top: 0, left: 0, behavior: "smooth" });
  });
  
  /*
    Scroll links, example: top navigation menu
  */
  $('.scroll-link').on('click', function(e) {
    e.preventDefault();
    var scrollToId = $(this).attr('href');
    var elementTop = $(scrollToId).offset().top;
    var navHeight = $('nav').outerHeight();
    
    var scrollToCoordinate = elementTop - navHeight;
    if (scrollToCoordinate < 0) {
    	scrollToCoordinate = 0;
    }
    globalThis.scrollTo({ top: scrollToCoordinate, left: 0, behavior: "smooth" });
  });
  
  
  /*
    Wow
  */
  new WOW().init();
  
  
  /*
    Stop video playing when the MODAL is being closed (has finished closing)
  */
  $('#videoModal').on('hidden.bs.modal', function(e) {
    $('#videoModal iframe').each(function() {
      var videoURL = $(this).attr('src');
      $(this).attr('src', videoURL);
    });
  });
  

  /*
    Contact form
  */
  $('.contact-email .form-control').on('focus', function() {
    $(this).next('.invalid-feedback').fadeOut();
  });
  
  
  $('.contact-email form').on('submit', function(e) {
	e.preventDefault();
	$('.contact-email .invalid-feedback').fadeOut();
	
	var form = $(this);
	var postdata = $(this).serialize();
	
    $.ajax({
      method: 'POST',
      url: 'assets/contact-1.php',
      data: postdata,
	  dataType: 'json',
      }).done(function(response) {
        
    	  if(response.emailMessage != '') {
            form.find('#email').next('.invalid-feedback').fadeIn();
          }
          if(response.subjectMessage != '') {
        	form.find('#subject').next('.invalid-feedback').fadeIn();
          }
          if(response.messageMessage != '') {
        	form.find('#message').next('.invalid-feedback').fadeIn();
          }
          if(response.emailMessage == '' && response.subjectMessage == '' && response.messageMessage == '') {
        	form.fadeOut('fast', function() {
              $('.contact-email').append('<p class="mt-3 azm-font-size-1-15 azm-color-ccc">Thanks for contacting us! We will get back to you very soon.</p>');
            });
          }
        
	  });
    
  });

  
});
