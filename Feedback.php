<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<link href="../assets/img/favicon.ico" type="image/x-icon" rel="icon" >
<body id="www-url-cz">
<!-- Main -->

    <?php
    include "Header.php"
    ?>
   
 <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Welcome To Control Panel</h2>
      </div>
</section>

<section class="inner-page">
		<div class="container">
                    <table width="100%" border="1" bordercolor="#1CB5F1">
                        <tr>
                           
                            <th bgcolor="#1CB5F1" class="style3">
                                <div align="left" class="style9 style5"><strong>Job Seeker Name</strong></div>
                            </th>
                            <th bgcolor="#1CB5F1" class="style3">
                                <div align="left" class="style9 style5"><strong>Feedback</strong></div>
                            </th>
                            <th bgcolor="#1CB5F1" class="style3">
                                <div align="left" class="style12">Date</div>
                            </th>
                        </tr>
                        <?php

                        $con = mysqli_connect("localhost", "root", "", "job");
                        // Specify the query to execute
                        $sql = "select * from Feedback,JobSeeker_Reg where Feedback.JobSeekId=JobSeeker_Reg.JobSeekId";
                        // Execute query
                        $result = mysqli_query($con,$sql) or die();
                        // Loop through each records
                        while ($row = mysqli_fetch_array($result)) {
						
                            $Name = $row['JobSeekerName'];
                            $Feedback = $row['Feedback'];
                            $FeedbakDate = $row['FeedbakDate'];

                            ?>
                            <tr>
                                <td class="style3">
                                    <div align="left" class="style9 style5"><strong><?php echo $Name; ?></strong></div>
                                </td>
                                <td class="style3">
                                    <div align="left" class="style9 style5"><strong><?php echo $Feedback; ?></strong>
                                    </div>
                                </td>
                                <td class="style3">
                                    <div align="left" class="style9 style5"><strong><?php echo $FeedbakDate; ?></strong>
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }
                        // Retrieve Number of records returned
                        $records = mysqli_num_rows($result);
                        ?>
                        <tr>
                            <td colspan="4" class="style3">
                                <div align="left" class="style12"><?php echo "Total " . $records . " Records"; ?> </div>
                            </td>
                        </tr>
                        <?php
                        // Close the connection
                        mysqli_close($con);
                        ?>
                    </table>
                    
 </div> <!-- /article -->
</section>
                

         

            

     
   


    <?php
    include "footer.php"
    ?>
</div> <!-- /main -->

</body>
</html>
