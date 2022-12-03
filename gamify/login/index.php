<!DOCTYPE html>
<html lang="zxx">

<!-- Head -->
<head>

    <title>GAMIFY | Login</title>

    <!-- Meta-Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

    <!-- fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Mukta:300,400,500" rel="stylesheet">
    <link href="images/favicon.ico" rel="shortcut icon"/>

</head>
<!-- //Head -->

<!-- Body -->
<body>
<script async src='js/autotrack.js'></script>
<script async src='js/script.js'></script>

<meta name="robots" content="noindex">
<body><link rel="stylesheet" href="assests/css/font-awesome.min.css">
<!-- New toolbar-->
<style>
* {
  box-sizing: border-box;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}
.main{
    background: url(images/1.jpg);

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.toggle-right-sidebar span {
  background: #0D1326;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  color: #e6ebff;
  border-radius: 50px;
  font-size: 26px;
  cursor: pointer;
  opacity: .5;
}
.pull-right {
  float: right;
  position: fixed;
  right: 0px;
  top: 70px;
  width: 90px;
  z-index: 99999;
  text-align: center;
}
/* ============================================================
RIGHT SIDEBAR SECTION
============================================================ */

#right-sidebar {
  width: 90px;
  position: fixed;
  height: 100%;
  z-index: 1000;
  right: 0px;
  top: 0;
  margin-top: 60px;
  -webkit-transition: all .5s ease-in-out;
  -moz-transition: all .5s ease-in-out;
  -o-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
  overflow-y: auto;
}


/* ============================================================
RIGHT SIDEBAR TOGGLE SECTION
============================================================ */

.hide-right-bar-notifications {
  margin-right: -300px !important;
  -webkit-transition: all .3s ease-in-out;
  -moz-transition: all .3s ease-in-out;
  -o-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}
#text {
  display:none;
  color:red;
}
</style>

<div id="right-sidebar" class="right-sidebar-notifcations nav-collapse">
<div class="bs-example bs-example-tabs right-sidebar-tab-notification" data-example-id="togglable-tabs">

    </div>
    <div class="right-sidebar-panel-content animated fadeInRight" tabindex="5003"
        style="overflow: hidden; outline: none;">
    </div>
</div>
</div>
</div>


    <section class="main">
        <div class="bottom-grid">
            <div class="logo">
                <h1> <a href="index.html" style="color:#ffb320">LOGIN FORM</a></h1>
            </div>
        </div>
        <div class="content-w3ls">
            <div class="text-center icon">
                <span class="fa fa-user-circle-o"></span>
                <!-- <img src="images/lg.png"> -->
                
            </div>
            <div style="margin: 0px 25px 15px;font-size: 1rem;font-weight: bold">
              <?php if (isset($_GET['error'])) { ?>
            <p class="error" style="color:red;"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <p id="text">WARNING! Caps lock is ON.</p>
            </div>
      
            <div class="content-bottom">
                <form action="login.php" method="post">
                    <div class="field-group">
                        <span class="fa fa-user" aria-hidden="true" style="color:#ffb320"></span>
                        <div class="wthree-field">
                            <input name="uname" type="text" value="" placeholder="Username" autocomplete="off">
                        </div>
                    </div>
                    <div class="field-group">
                        <span class="fa fa-lock" aria-hidden="true" style="color:#ffb320"></span>
                        <div class="wthree-field">
                            <input name="password" id ="myInput" type="Password" placeholder="Password">
                        </div>
                    </div>
                    <div class="wthree-field">
                        <button type="submit" class="btn" style="background:#ffb320">Sign in</button>
                    </div>
                    <ul class="list-login-bottom" style="margin-top: 10px;margin-left: 50px">
                        <li class=>
                            <a href="Forgot-Password" class="text-right">forgot password?</a>
                        </li>
                        <li class="clearfix"></li>
                    </ul>
                </form>
            </div>
        </div>
    </section>
	</body>
<!-- //Body -->

</html>
