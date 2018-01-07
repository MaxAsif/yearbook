




<meta name="csrf-token" content="{{ csrf_token() }}">


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
       
       //include('profile_approval');
?>


  <div class="container-fluid">
    <table class="highlight col l12 s12 m12">

          <tbody>
            <?php
           
              $dept = Auth::user()->department;
              $rollno = Auth::user()->rollno;
               $j=0;
               $i=0;
             
    foreach($myviews as $view)
 {
$id=$view['id'];

 echo '<tr class="row"><td style = "word-wrap: break-word;padding:20px; " class="col l9"> <b>'.$view['user'].' said:</b><br>
                      '.$view["views"].'
                  </td>
                  <td class="col l3"><div class="approval" style="padding:20px">'; 


                  if($view['approval']=='1'){
                    
                    echo '<input type="submit" class="btn waves-light disapprove app'.$i.'" value= "disapprove" data-no="'.$i.'" data-id="'.json_encode($id).'" id= "'.json_encode($id).'" >';
                  }else{
                                      

                    echo '<input type="submit" class="btn waves-light red approve app'.$i.'" value= "Approve" data-no="'.json_encode($i).'" data-id="'.json_encode($id).'" id= "'.json_encode($rollno).'" );"> <div class="text_show'.$i.'" style= "padding-left = 15px;"></div>';
                  }

                  echo '</div></td>';







  
  $j=1;
 }         
if($j==0)
 {
  
            echo "<h5>No Testimonials Given</h5>";
          }


          /*
            $i=0;

              $id=$query_row['id'];

                  echo '<tr class="row"><td style = "word-wrap: break-word;padding:20px; " class="col l9"> <b>'.$query_row1["name"].' said:</b><br>
                      '.$query_row["views"].'
                  </td>
                  <td class="col l3"><div class="approval" style="padding:20px">';                  

                  if($query_row['approval']=='approve'){
                    
                    echo '<input type="submit" class="btn waves-light disapprove app'.$i.'" value= "disapprove" data-no="'.$i.'" data-id="'.$id.'" id= "'.$rollno.'"> ';
                  }else{
                                      

                    echo '<input type="submit" class="btn waves-light red approve app'.$i.'" value= "Approve" data-no="'.$i.'" data-id="'.$id.'" id= "'.$rollno.'"> <div class="text_show'.$i.'" style= "padding-left = 15px;"></div>';
                  }

                  echo '</div></td>';
                  $pass= $query_row['deptmate'];
                  $i++;
                }*/
            
              
              
            ?>
          </tbody>
        </table>
  </div>
<script>
  /*
  $(document).on('click', '.approve', function(){
    var rollno = $(this).attr('id');
    var no = $(this).attr('data-no');
    var id = $(this).attr('data-id');
    var query= 'id='+id;
    $.ajax({
      url: 'views_approval_data.php',
      data: query,
      
      type: 'POST',
      success: function (data) {
          console.log(data);
          if(data){
            console.log(data);
            //$('.approve').remove();
            $('.app'+no).attr('value','disapprove');
            $('.app'+no).removeClass('approve');
            $('.app'+no).addClass('disapprove');
            $('.app'+no).removeClass('red');
            $('.text_show'+no).html('Approved');
          }else{
            alert("Please try again");
          }
        }
    });
  }); 
  $(document).on('click', '.disapprove',function(){
    var rollno = $(this).attr('id');
    var no = $(this).attr('data-no');
    var id = $(this).attr('data-id');
    var query= 'id='+id;
    $.ajax({
      url: 'views_disproval_data.php',
      data: query,
      
      type: 'POST',
      success: function (data) {
          console.log(data);
          if(data){
            console.log(data);
            $('.app'+no).attr('value','approve');
            $('.app'+no).removeClass('disapprove');
            $('.app'+no).addClass('approve');
            $('.app'+no).addClass('red');
            $('.text_show'+no).html('');
          }else{
            alert("Please try again");

          }
        }
    });
  }); 
  */  
</script>













    </div>    
    </div>
  </body>
  



<script type="text/javascript">
  
  function call($id)
  {
    alert($id);
  }
$('.approve').click('.approve', function(){

  
    var rollno = $(this).attr('id');
    var no = $(this).attr('data-no');
    var id = $(this).attr('data-id');
    var query= id;
    
    window.location="/approve/"+id;
   
  }); 
  $('.disapprove').click('.disapprove',function(){
    
    var rollno = $(this).attr('id');
    var no = $(this).attr('data-no');
    var id = $(this).attr('data-id');
    
    var query= '1';
    
     window.location="/disapprove/"+id;
   
  }); 


</script>


