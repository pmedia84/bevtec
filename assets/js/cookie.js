///Cookie Policy Script
// cookie policy
// cookie policy
$(window).on('load', function() {
    if (document.cookie.indexOf("accepted_cookies=") < 0) {
        $('.cookie-overlay').removeClass("d-none");
    }
    $('.accept-cookies').on('click', function() {
      document.cookie = "accepted_cookies=yes;"
      
    })
})