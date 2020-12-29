<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>Laravel</title>

<!--CSS-->
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/bootstrap-light.css">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<!--/CSS-->

<!--JS-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="assets/js/jquery.plugin.js"></script>
<script src="assets/js/jquery.countdown.js"></script>
<script>
$(function () {
    $('#defaultCountdown').countdown({until: new Date(2016, 3-1, 25)}); 
    //Replace above date with your own, to find out more visit http://keith-wood.name/countdown.html
});

</script>
<!--/JS-->

</head>

<body>

<!--DARK OVERLAY-->
<div class="overlay"></div>
<!--/DARK OVERLAY-->

<!--WRAP-->
<div id="wrap">
    <!--CONTAINER-->
    <div class="container">
        <h1 class="yellow">MAINTENANCE<h1/>
        <h1>
            <span>We are</span><br/>
            Reaching For <span class="yellow">The Moon.</span>
        </h1>
        <p>Our site is currently <strong>under construction</strong> but we are working hard<br/> to create a new and fresh design.</p>
        <div id="defaultCountdown"></div>
        <br/><br/><br/>
        <p class="copyright">Web developed by <a href="#" target="_blank">donniprasetyo</a></p>
    </div>
    <!--/CONTAINER-->
</div>
<!--/WRAP-->

</body>
</html>
