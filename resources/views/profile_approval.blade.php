@use Auth
<?php
$DB_NAME = 'sac_yearbook';
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$connection = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($connection->connect_error) {
  // die("Connecton failed: ".$connection->connect_error);
  die("It seems that we cannot talk to our DB right now. Please try again in a couple of minutes");
} else {
//  echo "Connection Successful<br>";
}

?>
	<div class="container-fluid">
		<table class="highlight col l12 s12 m12">

	        <tbody>
	          <?php
	          	$dept = Auth::user()->department;
	          	$roll = Auth::user()->roll;
	          	$query = "select * from views where deptmate = '$roll'";
	          	$query_run = $connection->query($query);

	          	/*
  				if(mysqli_num_rows($query_run)==NULL)
    				echo "<h5>No Testimonials Given</h5>";
  				else{
  					$i=0;
  				while ($query_row = mysqli_fetch_assoc($query_run)){
  					$rollno=$query_row['user'];
	          	$query1 = "select * from register where rollno = '$rollno'";
	          	$query_run1 = $connection->query($query1);
	          	$query_row1 = mysqli_fetch_assoc($query_run1);

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
		          	}
		       	
		          }
		          */
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
