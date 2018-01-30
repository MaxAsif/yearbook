<html>
<head>
    <link rel="icon" href="/img/fav.png" type="image/png" >

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="/css/animate.css">
    <title>Yearbook</title>
</head>

<style>
@font-face{
 font-family:'digital-clock-font';
 src: url('clock.ttf');
}
h2
{
    font-family: 'digital-clock-font';
}
.container-fluid
{
    position: absolute;
    top: 0;
    text-align: center;
    font-family: Century gothic;

}
.container1
{
    background-color: transparent;
    padding:40px;
    height: 100px;
}
.heading
{
    text-align: center;
    font-size: 350%;
}
.box
{
    margin-top: 300px;
    color: #707070;
    font-size: 20px;
}
#heading{
    background-color: black;
    opacity: 0.5;
    position: absolute;
    left: 0 !important;
    right: 0 !important;
}
.large-header {
    position: relative;
    width: 100%;
    background: #333;
    overflow: hidden;
    background-size: cover;
    background-position: center center;
    z-index: 1;
}

.main-title {
    position: absolute;
    margin: 0;
    padding: 0;
    color: #f9f1e9;
    text-align: center;
    font-size: 40px;
    top: 15%;
    left: 50%;
    -webkit-transform: translate3d(-50%,-50%,0);
    transform: translate3d(-50%,-50%,0);
}
.sub-title{
    position: absolute;
    top: 90%;
    font-size: 20px;
}
.form{
    position: absolute;
    top: 35%;
}
#clock{
    background-color:black;
    color:#1CD06E;
    display:inline;
    font-size:60px;
    padding:10px;
    border: 3px solid red;
    }
a{
    color: #fff;
}
a span {display: none;  color: #fff; background: #000; padding: 5px;margin-bottom: 80px;font-size: 15px;}
a {position: relative;}
a:hover span {display: block; text-align: center;z-index: 1000;}

</style>
<body>
    <div class="container-fluid">
        <div id="large-header" class="large-header" style="height: 613px; z-index: 100">
            <canvas id="demo-canvas" width="1366" height="613"></canvas>

            <h2 class="center main-title animated zoomIn">
    <div class="clock-wrap">
  <div class="clock">
    <div class="clock__date">
    </div>
    <div class="clock__time">
    </div>
  </div>
</div>
<div class="clock-toogle">
  <div class="clock-toogle__toogle"></div>
</div>           
<br>
Welcome to<b> Yearbook'17</b> Portal </h2>

            <form method="post" action="{{ route('login') }}" class="form main-title center">

                {{ csrf_field() }}

                <div class="row"> <br> <br> <br>

                    <div class="input-field col s12 l6 m12 ">                   
                        <input name="rollno" id="rollno" autofocus placeholder="Roll Number" type="text" style="margin-top: 5px;" required>
                        <label for="rollno">Roll Number (14THXXXXX)</label>
                    </div>
                    <div class="input-field col s12 l6 m12 ">                   
                        <input name="password" id="dob" placeholder="Date of Birth" pattern="\d{1,2}-\d{1,2}-\d{4}" type="text" style="margin-top: 5px;" required>
                        <label for="dob">Date of Birth (dd-mm-yyyy)</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 l4 m12 offset-l4">
                        <button type="submit" id="submit" name="submit" class="waves-effect waves-light btn" style="font-size: 15px;" required >Submit</button>
                    </div>
                </div>
            </form>
            <p class=" center sub-title main-title" style="font-family: 'digital-clock-font';">Contact us at:<br> <a href="mailto:yearbook2k17.kgp@gmail.com"> yearbook2k17.kgp@gmail.com<a><i class="material-icons">error_outline</i><span class="tooltip">If you are not graduating this year, but want to write about your friends who are graduating, send us the testimonials via mail at yearbook2k17.kgp@gmail.com</span></a></p>

        </div>

    </div>
    <script type="text/javascript">
        var myTimer = setInterval(setClock,1000);
function setClock(){    
       document.getElementById("clock").innerHTML=new Date().toLocaleTimeString();}
    </script>
    <script src="/js/TweenLite.min.js.download"></script>
    <script src="/js/EasePack.min.js.download"></script>
    <script src="/js/demo-1.js.download"></script>
</body>
</html>