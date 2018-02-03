<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>YB|Home</title>

  <!-- Bootstrap core CSS -->

  <link rel="stylesheet" type="text/css" href="../css/animate.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script  src="https://code.jquery.com/jquery-3.2.1.min.js"  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

</head>

<body>

  @include('navbar2')
  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Yearbook'2018</span>
    <span class="site-heading-lower">A Travel Through Time</span>
  </h1>


  <div id="modal2" class="modal fade" role="dialog">

    <div class="modal-dialog">



      <!-- Modal content-->

      <div class="modal-content" style="text-align: center;">

        <div class="modal-header">



          <h4 class="modal-title" style="color: white;">Upload Picture and Caption</h4>

          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>

        <div class="modal-body">

          <form action="/upload_pic_moto" method="post" enctype="multipart/form-data">

            {{csrf_field()}}

            @if (count($errors) > 0)

            <script type="text/javascript">

              alert('<?php foreach($errors->all() as $error) { echo "$error"; } ?>');

            </script>

            @endif

            <input type="file" name="fileToUpload" id="fileToUpload" style="display: none;" onchange="readURL(this);">

            <img src="<?php if (!empty(Auth::user()->pro_pic)){echo Auth::user()->pro_pic; } else { echo 'ind/shot.jpg';}?>" alt="" class="intro-img img-fluid mb-3 mb-lg-0 rounded" id="OpenImgUpload" style="cursor: pointer;width: 180px;height: 180px;">

            <div class="input-field col sm-12 lg-12 md-12">

              <div class="form-group">

                <label for="comment">Caption (Max 50 characters)</label>

                <textarea name="motto" id="icon_prefix2" class="form-control" placeholder="Enter Your Caption Here (Max 50 characters)" style="text-align: center;color: black;" maxlength="50" rows="2" id="comment"><?php if (!empty(Auth::user()->view_self)) { echo Auth::user()->view_self;}else {echo 'Enter Your Caption Here';}?></textarea>

              </div>



            </div>

            <input type="submit" name="save" value="Save" class="waves-effect waves-light btn" style="width: 150px;" id="imgsave">

          </form>

        </div>

      </div>



    </div>

  </div>

  <!-- 
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="about.html">About</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="products.html">Products</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="store.html">Store</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  Navigation -->

  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        @if(!empty(Auth::user()->pro_pic))
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" style="height: 600px" src="{{Auth::user()->pro_pic}}" alt="">
        @else
         <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" style="height: 600px" src="img/intro.jpg" alt="">
        @endif
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <!--<span class="section-heading-upper">{{Auth::user()->name}}</span>-->
            <span class="section-heading-lower">{{Auth::user()->name}}</span>
          </h2>
          @if(!empty(Auth::user()->view_self))
          <p class="mb-3">"{{Auth::user()->view_self}}"</p>
          @else
          <p class="mb-3">"Your Caption Here!"</p>
          @endif
          <div class="intro-button mx-auto">

            <button type="button" class="btn btn-primary btn-xl" data-toggle="modal" data-target="#modal2" style=" padding-top: 0;padding-left: 25px;padding-right: 25px;">Upload Profile Picture and Caption
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta" style="background-color: rgba(67,100,107,0.55);">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper"></span>
              <span class="section-heading-lower">Yearbook</span>
            </h2>
            <p class="mb-0"> The yearbook is an opus of memories that you would carry along graduating from the institute. The wonderful years spent in the campus are engraved and expressed via photographs and writeups in this departing souvenir from IIT KGP. 

            With an assortment of your thoughts and snaps from various experiences through the years, the book truly collaborates your time in KGP and is a walk down your memory lane every time you look through it.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 2018</p>
    </div>
  </footer>
</body>


<script type="text/javascript">

            /*

              This script is used to check if the profile pic and caption is uplaoded or not

              If not then triggers the modal to upload the pic and caption

              */

              var back = "<?php if (!empty(Auth::user()->view_self)) echo 1;else echo 0; ?>" ;

              var back2 = "<?php echo Auth::user()->pro_pic; ?>" ;

              $(document).ready(function() {

                $('#modal2').modal('hide');



                if ( (!back)||!(back2) ) {

                  $("#modal2").modal('show');

                } else {

                }



              });
              $('#photo').click(function(){

                $('#photo').submit();

              });

              $('#writeup').click(function(){

                $('#writeup').submit();

              });

              $('#views').click(function(){

                $('#views').submit();

              });



              $('#OpenImgUpload').click(function(){ $('#fileToUpload').trigger('click'); });

              function readURL(input) {



                if (input.files && input.files[0]) {

                  var reader = new FileReader();



                  reader.onload = function (e) {

                    $('#OpenImgUpload')

                    .attr('src', e.target.result)

                  };



                  reader.readAsDataURL(input.files[0]);

                }

              }

            </script>
            </html>
