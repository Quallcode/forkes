
jQuery(document).ready(function() {

    /*
        Fullscreen background
    */
    $.backstretch("includes/css_login/assets/img/backgrounds/1.jpg");

    /*
        Form validation
    */
    $('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function() {
    	$(this).removeClass('input-error');
    });

    $('.login-form').on('submit', function(e) {

    	$(this).find('input[type="text"], input[type="password"], textarea').each(function(){
    		if( $(this).val() == "" ) {
    			e.preventDefault();
    			$(this).addClass('input-error');
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
      //AJAX QUERY POST
      var usernameId  = $("#form-username").val();
      var passwordId  = $("#form-password").val();
      var request = $.ajax({
        url: base_url + "login/verify",
        method: "POST",
        data: { username : usernameId, password : passwordId },
        dataType: "json"
      });

      request.done(function( msg ) {
        if(msg.response == 11 || msg.response == 10)
          alert(msg.msg);
        else{
          alert('Selamat datang '+msg.msg['name']);
          window.location.replace(base_url+"dashboard");
        }
      });

      request.fail(function( jqXHR, textStatus ) {
        alert( "Request failed Error Connection reason : " + textStatus );
      });
    });



});
