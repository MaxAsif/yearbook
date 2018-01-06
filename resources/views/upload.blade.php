<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="animate.css">
  <link rel="icon" href="ind/fav.png" type="image/png" >
  <meta charset="utf-8">
  <title>YB|Upload</title>
  <meta name="description" content="Photo uploader for Yearbook 2016, IIT Kharagpur. Designed and maintained by Students' Alumni Cell IIT Kharagpur.">
    <!--material styles
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>-->
    <!-- Bootstrap styles-->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Generic page styles -->
    <link rel="stylesheet" href="css/style.css">
    <script
    src="https://code.jquery.com/jquery-3.2.1.min.js"
    integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/3.1.3/cropper.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropper/3.1.3/cropper.js"></script>
    <script src="js/jquery.bsPhotoGallery.js"></script>
    <link rel="stylesheet" href="css/jquery.bsPhotoGallery.css" />


    <style>
    @font-face {
      font-family: 'Century gothic';
      src: url('font.ttf');
    }
    body
    {
      background-color: #333;
      background-repeat:repeat;
      padding-top: 0;
      
    }
    .container
    {font-family: Century gothic;
      background-color: silver;
      color: #333;
    }
    .preview {
      overflow: hidden;
      width: 200px; 
      height: 300px;
    }
    ul {
      padding:0 0 0 0;
      margin:0 0 0 0;
    }
    ul li {
      list-style:none;
      margin-bottom:0px;
    }
    ul li img {
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container-fluid" style="background-color: black;">
    <div class="col-md-2 col-sm-2 col-lg-2">
     <button type="button" class="waves-effect waves-light btn" style="padding: 10px;" onclick="location.href='/home'" ">HOME </button> </div>
     <div class="col-md-4 col-sm-4 col-lg-4"  align="center"><a href="http://www.sac.iitkgp.ac.in"><img height="90" width="250" src="sac.png" alt="someimg"/></a> </div>
     <div class="col-md-4 col-sm-4 col-lg-4"  align="center"><a href="#"><img height="90" width="250" src="yearbook.png" alt="someimg"/></a>
     </div>
     <div class="col-md-2 col-sm-2 col-lg-2"> <button style="padding: 10px;" type="button" class="waves-effect waves-light btn" style="position: absolute;right: 0;top: 0"onclick="location.href='/logout'">LOGOUT </button> 
     </div> 
   </div>
   <br>
   <div class="container animated zoomInLeft ">
    <div class="row">

      <div class="col-md-12 col-sm-12 col-lg-12" align="center">
        <h2 style="color:#707070;">Upload Photos</h2>
      </div>
    </div>
    <div class="row" align="center" style="padding: 30px;">
      <h4>What better way to capture a memory than printing it in your yearbook? Share with us the pictures of your most memorable times at KGP and we’ll make it a part of your memoir. Select the category for your picture/s and upload them using the option below.</h4>
    </div>



    <div class="container-fluid">

      <div style="max-width: 650px; margin: auto;">

        <!-- Modal -->
        <div id="bootstrap-modal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Selected image : </h4>
              </div>
              <div class="modal-body">
               <div id="image-preview-div" style="display: none">
                <img id="preview-img" src="noimage">

              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
            </div>
          </div>

        </div>
      </div>

      <form id="upload-image-form" action="/upload" method="post" enctype="multipart/form-data">
        <input id="signup-token" type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <label for="classifiers">Select Category: (Max size: 5MB)</label>
          <select class="form-control" name="classifier" >
            <option value="dep">DEPARTMENT PHOTOS</option>
            <option value="hall">HALL PHOTOS</option>
            <option value="fest">FEST PHOTOS</option>
            <option value="misc">OTHER MOMENTS AT KGP</option>
          </select>
        </div>

        <div id="cropp-image-div" style="display: none">
          <img id="crop-image" src="noimage" class="img-thumbnail">
          <div class="form-group">
            <label for="caption">Caption:</label>
            <textarea class="form-control" rows="2" cols="15" name="caption" id="caption"></textarea>
          </div> 
        </div>
        <div class="form-group">
          <input type="file" name="image" id="image" accept="image/*" required>
        </div>
        <button class="btn btn-lg btn-primary" id="upload-button" type="submit" disabled>Upload image</button>
      </form>

      <br>
      <div class="alert alert-info" id="loading" style="display: none;" role="alert">
        Uploading image...
        <div class="progress">
          <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
          </div>
        </div>
      </div>
      <div id="message"></div>
    </div>

  </div>


</div>
<br>

<div class="container">
  <br>  
  <div class="row">
    <ul class="first">
      @foreach($images as $caption=>$url)
      <li>

        <div class="thumbnail">
          <img src="{{$url}}" alt="{{$caption}}" style="width:100%">
          <div class="caption">
            <p style="text-overflow: ellipsis; overflow: hidden;
            white-space: nowrap;">{{$caption}}</p>
          </div>
          
        </div>
        
      </li>
      @endforeach
    </ul>
    

  </div>
</div>

</body>
<script type="text/javascript">
  /*jslint browser: true, white: true, eqeq: true, plusplus: true, sloppy: true, vars: true*/
  /*global $, console, alert, FormData, FileReader*/



  function selectImage(e) {
    $('#file').css("color", "green");
    console.log("selectImage called"); 
    $('#bootstrap-modal').modal('show');
    $("#bootstrap-modal").on("shown.bs.modal", function() {
      $('#image-preview-div').css("display", "block");
      $('#preview-img').attr('src', e.target.result);
      $('#preview-img').css('width', '200px');
      $('#preview-img').css('height', '400px');
      
      $('#preview-img').cropper({
        viewMode : 1,
        preview : '.preview',

        crop : function(e) {
        // Output the result data for cropping image.
        console.log(e.x);
        console.log(e.y);
        console.log(e.width);
        console.log(e.height);
        console.log(e.rotate);
        console.log(e.scaleX);
        console.log(e.scaleY);
      }
    });
    }).on("hidden.bs.modal", function() {

      originalData = $("#preview-img").cropper("getCroppedCanvas");

      var originalPng = originalData.toDataURL("image/png");
      console.log(originalData);
      $("#preview-img").cropper("destroy");
      $('#cropp-image-div').css("display", "block");
      $('#crop-image').attr('src', originalPng);
      $('#crop-image').css('max-width', '200px');
    });
  }

  $(document).ready(function (e) {
    $('ul.first').bsPhotoGallery({
      "classes" : "col-lg-3 col-md-4 col-sm-3 col-xs-4 col-xxs-12",
      "hasModal" : true
    });
    $('form#upload-image-form').on('submit', function(e) {

      e.preventDefault();

      $('#message').empty();
      $('#loading').show();
      console.log(originalData);
      var formdata = new FormData(this); 
      for (var value of formdata.values()) {
        console.log("before",value); 
      }
      originalData.toBlob(function (blob){
       formdata.append('croppedImage',blob);
       for (var value of formdata.values()) {
         console.log("after",value); 
       }
       console.log("crop image",originalData);

       $.ajax({
        url: "/upload",
        type: "POST",
        data: formdata,
        contentType: false,
        cache: false,
        processData: false,
        success: function(data)
        {
          alert('Your pic has been succesfully added.');
          $('#loading').hide();
          $('#cropp-image-div').css("display", "none");

          var $el = $('#image');
          $el.wrap('<form>').closest('form').get(0).reset();
          $el.unwrap();


        },
        error: function(data)
        {
          alert("Sorry, there was an error uploading image");
          console.log(data);
          $('#loading').hide();
          $('#cropp-image-div').css("display", "none");

          var $el = $('#image');
          $el.wrap('<form>').closest('form').get(0).reset();
          $el.unwrap();
        }
      });
     });

    });

    $('#image').change(function() {
      $('#upload-button').removeAttr("disabled");


      var reader = new FileReader();
      reader.onload = selectImage;
      reader.readAsDataURL(this.files[0]);

    });

  });
</script>
</html>
