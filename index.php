<!DOCTYPE html>
<!-- saved from url=(0040)http://getbootstrap.com/examples/signin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Login Form | Sistem Informasi Pengelolaan Retribusi Pasar</title>

    <!-- Bootstrap core CSS -->
    <link href="files_login/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="files_login/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="files_login/ie-emulation-modes-warning.js"></script><style type="text/css"></style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script type="text/javascript" async="" src="files_login/request"></script></head>

  <body>

    <div class="container">

      <form class="form-signin" action="redirect.php" method="POST">
<center>
        <h5>Sistem Informasi Pengelolaan Retribusi Pasar</h5>
        <img src="images/logoriau1.jpg" height="150px" width="100px"></img><br/>
        <h6 class="form-signin-heading">Silahkan Login</h6>
</center>
        <br/>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Username" required="" autofocus="" name="user">
        <br/>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="pass">
        <br/>
        <label for="inputPassword" class="sr-only">Level</label>
        <select class="form-control" placeholder="Password" required="" name="level">
            <option value="">-- Pilih Hak Akses --</option>
            <option value="admin">Administrator</option>
            <option value="pimpinan">Pimpinan</option>
        </select>
        <br/>
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Log In</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./Signin Template for Bootstrap_files_login/ie10-viewport-bug-workaround.js"></script>
  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Ltpw5OIinlRx4DJRFf3EEmYqVW6WOIB18iJfv7SWUZZF%2foOcZzQ3PFu6ftAk2%2f3rz%2bH1aUUnHcUOy6SYprF5vLCY2Sjly%2fgZXYv9dolSXGHxs98KNK5MjSUjpAj1SquGjUW78F5rgANCgLjod6Zfq0YERjtf8czWkoGZNTSg8Sux1E1pdghSX6OV4j%2fl9aTqZ3E87IFLuDa%2bwEAybf5zXBKn77J59CbK2%2fHk%2f7Nj7AMWLDLx%2bF7bTwcaFd89jgLDkcX7Q5TNgp9iDjWnNjq%2bCANGEycfwC30lY848E8wL1oCu5fMlS1to9G9QtsiP%2fFdi5Zwf%2bdQ5EYi67Z5FPvF3gBNYh0xyW2zwAWL4K%2fBSrtM03GIA8m%2ba3AlEG%2fi7mUus8es0XXHAmBd4QaYDBG7dchNo0oAu3PVgmLfsidxQ1EEH4R%2fktcyCZLuypRd0fikKli%2bqvRchCCP3F%2fCLHm5Qm8isdDUm46cn72WV9ThwlIodHbY5XKX2JF1cLjlLMYP2iQeUzzlTnBXaW4iqC2qh4iC8tbk8J2IzN2yXkDvIh12ASLKtEO1XSGoyE8B%2bVCniz%2bqDLEAqVEmTFQ2T5RBnHm9CEMULkdGQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>

</body></html>