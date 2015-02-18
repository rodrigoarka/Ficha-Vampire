<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" id="min-width" lang="pt" xml:lang="pt">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <script src="jquery.min.js" type="text/javascript"></script>

        <link rel="stylesheet" type="text/css" href="css/html5reset-1.6.1.css"/>
        <link rel="stylesheet" type="text/css" href="css/styles.css"/>
        <title>Ficha Vampire</title>
    </head>


    <body>
    <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '635293156527486',
      xfbml      : true,
      version    : 'v2.2'
    });

    // ADD ADDITIONAL FACEBOOK CODE HERE
  };

// Place following code after FB.init call.

function onLogin(response) {
  if (response.status == 'connected') {
    FB.api('/me?fields=first_name', function(data) {
      var welcomeBlock = document.getElementById('fb-welcome');
      welcomeBlock.innerHTML = 'Hello, ' + data.first_name + '!';
    });
  }
}

FB.getLoginStatus(function(response) {
  // Check login status on load, and if the user is
  // already logged in, go directly to the welcome message.
  if (response.status == 'connected') {
    onLogin(response);
  } else {
    // Otherwise, show Login dialog first.
    FB.login(function(response) {
      onLogin(response);
    }, {scope: 'user_friends, email'});
  }
});

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>


<h1 id="fb-welcome"></h1>
        <?php
        if (!isset($_GET['passo']) or $_GET['passo'] == NULL):
            include 'passo1.php';
        elseif ($_GET['passo'] == "passo1"):
            include 'passo1.php';
        elseif ($_GET['passo'] == "passo2"):
            include 'passo2.php';
        elseif ($_GET['passo'] == "passo3"):
            include 'passo3.php';
        endif;
        ?>      
    </body>
</HTML>