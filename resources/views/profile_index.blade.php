
<!doctype html>
<html>
  <head>
    <title>YB|Profile</title>
    <link rel="icon" href="../ind/fav.png" type="image/png" >
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="myself2.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <meta name=viewport content='width=700'>

   <script>
 $(document).ready(function(){
   if ($(window).width()<770) {
    (function($){ $('.body').addClass('container-fluid');
      $('#logo_mob').show();
     
    })(jQuery, undefined); }
    else{$('.body').addClass('container');
    $('.logo_desk').show();}
    
  });
</script>

    <style type="text/css">
    @font-face {
  font-family: 'Century gothic';
  src: url('font.ttf');
}
 #modal1{
        overflow: hidden;
      }

    table{
      table-layout: fixed;
    }
      .btn{
        width: 180px;
      }
      body{

      font-family: Century gothic;
      }
.caption{
  margin-top: -40px;
  background-color: #26a69a;
}

.caption h2{
  text-align: left;
  font-size: 20px;
  color: #fff;
  padding:10px;

}
.header{

  background-image: url("2.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
@media only screen and (min-width: 1000px) {
    #capt {
      text-align: right;
      padding-top: 0;
    }
    @media only screen and (min-width: 770px){
      
    }
    .row{
      margin: 0 !important;
    }

    </style>
  </head>
 
  <body><div class="container-fluid">
 @include('navbar');
    <div>
  <div class="body">
    <div class="header">
      <div class="">

        <div class="row">
          <div class="col l6 m6 s6" style="padding: 20px;"><img class="circle" width="180px"; height= "180px";  src="<?php if (!empty(Auth::user()->pro_pic)){echo Auth::user()->pro_pic; } else { echo 'ind/shot.jpg';}?>" alt="" class="circle responsive-img" id="OpenImgUpload" style="cursor: pointer;width: 180px;height: 180px;"></div>
          <div class="col l6 m6 s6" style=""><h1 style="font-size: 30px; color: #fff;background-color: black;opacity: 0.6;padding: 10px;"><?php echo Auth::user()->name; ?></h1></div>

        </div> 
      </div>
    </div>

    <div class="caption">
      <div class="">
      <div class="row">
      <div class="l6 m6 s6"></div>
        <div class=" m6 s6 l6">
          <h2 id="capt">

          "<?php 
          if (Auth::user()->view_self&&Auth::user()->view_self!='NULL') {
          echo Auth::user()->view_self;
           }else{
            echo "No Caption Uploaded";
           }
          ?>"
          </h2>
        </div>
      </div>
      </div>
    </div>            

      <div class="">
        <div class="row">
        <div class="col l3 m3 s3 center">
          <h6 style="font-weight:bolder">Roll No.</h6>
          <h6><?php echo Auth::user()->rollno; ?></h6>
        </div>
        <div class="col l3 m3 s3 center">
          <h6 style="font-weight:bolder">Hall</h6>
          <h6><?php echo Auth::user()->HOR; ?></h6>
        </div>
        <div class="col l3 m3 s3 center">

          <h6 style="font-weight:bolder">Email</h6>
          <h6>
          <?php 
          if (Auth::user()->email) {
          echo Auth::user()->email;
           }else{
            echo "No Email Provided";
           }
          ?></h6>
        </div>

        <div class="col l3 m3 s3 center">
          <h6 style="font-weight:bolder">Department</h6>
          <h6>
          <?php 
          if (Auth::user()->department) {
          echo Auth::user()->department;
           }else{
            echo "No Data";
           }
          ?></h6>
        </div>
     
      </div>
      </div>
      <div class=" center" style="padding: 20px;">

      <?php 
        echo "Here’s what your friends written about you! Your testimonials are displayed below. You can approve or disapprove them by selecting the option shown beside each testimonial. The approved ones shall be a part of your yearbook.";
      //include 'profile_approval.blade.php';
       ?>
       <? //include('profile_approval');
?>
    </div>    
    </div>
  </body>
  