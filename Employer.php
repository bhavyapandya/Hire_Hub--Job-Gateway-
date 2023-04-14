<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<link href="assets/img/favicon.ico" type="image/x-icon" rel="icon" >
<body id="www-url-cz">
<!-- Main -->
 <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Employer</h2>
      </div>
    </section><!-- End Breadcrumbs -->
<div id="main" class="box">
<?php 
include "Header.php"
?>
  

<div class="container">
<div class="row">
<?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");

// Specify the query to execute
$sql = "select * from employer_reg where Status='Confirm'";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records
//var_dump($result);
while($row = mysqli_fetch_array($result)){ 
    $logo=$row['logo'];
    $CompanyName=$row['CompanyName'];
	$ContactPerson=$row['ContactPerson'];
	$Email=$row['Email'];
   $i=0;
	$dyn_table = '';
    if ($i % 3 == 0) {
        echo '<div class="col-sm">' .'<img src="data:image/jpeg;base64,'.base64_encode($logo ).'" height="200" width="200" class="img-thumnail" /> <br>' ;
		echo '<p style="margin-left:70px">'.$CompanyName.'</p></div>';
		
    }
	else {
      echo '</div>'. '<div class="row">'. ' <div class="col-sm">' .'<img src="data:image/jpeg;base64,'.base64_encode($logo ).'" height="200" width="200" class="img-thumnail" />' ;
	  echo '</div>'.'<div class="col-sm">'.'<p tyle="margin-left:70px">'.$CompanyName. '</div>';
    }
    
}
?>

</div>
</div>
<html>
<body>
<!--Dynamic PHP Grid Layout From a MySQL Result Set-->


<?php
// Close the connection
mysqli_close($con);
?>
</table>
    </td>
  </tr>
</table>
                

<?php
include "footer.php"
?>
</div> 


</body>
</html>
