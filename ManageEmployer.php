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
      </div>
	</section>    
<section class="inner-page">
<div class="container">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>
                                <table width="100%" border="1" bordercolor="#1CB5F1">
                                    <tr>
                                        <th height="32" bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>Id</strong></div>
                                        </th>
                                        <th bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>Company Name</strong></div>
                                        </th>
                                        <th bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>City</strong></div>
                                        </th>
                                        <th bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style12">Contact Person</div>
                                        </th>
                                        <th bgcolor="#1CB5F1" class="style3">
                                            <div align="left" class="style9 style5"><strong>Detail</strong></div>
                                        </th>
                                    </tr>
                                    <?php
                                    // Establish Connection with Database
                                    $con = mysqli_connect("localhost", "root", "", "job");
                                    // Specify the query to execute
                                    $sql = "select * from Employer_Reg where Status='Pending'";
                                    // Execute query
                                    $result = mysqli_query($con,$sql);
                                    // Loop through each records
                                    while ($row = mysqli_fetch_array($result)) {
                                        $Id = $row['EmployerId'];
                                        $Name = $row['CompanyName'];
                                        $City = $row['City'];
                                        $CP = $row['ContactPerson'];

                                        ?>
                                        <tr>
                                            <td class="style3">
                                                <div align="left" class="style9 style5">
                                                    <strong><?php echo $Id; ?></strong></div>
                                            </td>
                                            <td class="style3">
                                                <div align="left" class="style9 style5">
                                                    <strong><?php echo $Name; ?></strong></div>
                                            </td>
                                            <td class="style3">
                                                <div align="left" class="style9 style5">
                                                    <strong><?php echo $City; ?></strong></div>
                                            </td>
                                            <td class="style3">
                                                <div align="left" class="style9 style5">
                                                    <strong><?php echo $CP; ?></strong></div>
                                            </td>
                                            <td class="style3">
                                                <div align="left" class="style9 style5"><strong><a
                                                            href="DetailEmp.php?EmpId=<?php echo $Id; ?>">Detail</a></strong>
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
                                            <div align="left"
                                                 class="style12"><?php echo "Total " . $records . " Records"; ?> </div>
                                        </td>
                                    </tr>
                                    <?php
                                    // Close the connection
                                    mysqli_close($con);
                                    ?>
                                </table>
                            </td>
                        </tr>
                    </table>
    </div></section>               

    <?php
    include "footer.php"
    ?>
</div> <!-- /main -->

</body>
</html>
