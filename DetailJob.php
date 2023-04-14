<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<link href="../assets/img/favicon.ico" type="image/x-icon" rel="icon" >
<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
    <?php
    include "Header.php"
    ?>
   <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Welcome To Control Panel</h2>
      </div></div>
    </section><!-- End Breadcrumbs -->
	<section class="inner-page">
      <div class="container">

                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <?php
                                $ID = $_GET['JobId'];
                                // Establish Connection with Database
                                $con = mysqli_connect("localhost", "root", "", "job");
                                // Specify the query to execute
                                $sql = "select * from JobSeeker_Reg where JobSeekId='" . $ID . "'  ";
                                // Execute query
                                $result = mysqli_query($con,$sql);
                                // Loop through each records
                                $row = mysqli_fetch_array($result)
                                ?>
                                <table width="100%" border="1" cellspacing="2" cellpadding="2">
                                    <tr>
                                        <td>Id:</td>
                                        <td><?php echo $row['JobSeekId']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Name:</td>
                                        <td><?php echo $row['JobSeekerName']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Address:</td>
                                        <td><?php echo $row['Address']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>City:</td>
                                        <td><?php echo $row['City']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td><?php echo $row['Email']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Mobile:</td>
                                        <td><?php echo $row['Mobile']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Highest Qualification:</td>
                                        <td><?php echo $row['Qualification']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Gender:</td>
                                        <td><?php echo $row['Gender']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Birth Date:</td>
                                        <td><?php echo $row['BirthDate']; ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong><a href="ApprovJob.php?JobId=<?php echo $row['JobSeekId']; ?>">Approv
                                                    Job Seeker</a></strong></td>
                                        <td><strong><a href="Denyjobs.php?JobId=<?php echo $row['JobSeekId']; ?>" style="color: red;">Deny</a></strong></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    
    </div></section>


    <?php
    mysqli_close($con);
    include "footer.php"

    ?>
</div> <!-- /main -->

</body>
</html>
