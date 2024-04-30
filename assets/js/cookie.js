///Cookie Policy Script
// cookie policy
// cookie policy
$(window).on('load', function() {
    if (document.cookie.indexOf("accepted_cookies=") < 0) {
        $('.cookie-overlay').addClass("show");
    } else {
      $('.cookie-overlay').addClass("d-none");
    }
  
    $('.accept-cookies').on('click', function() {
      document.cookie = "accepted_cookies=yes;"
      
    })
  
   
 
})