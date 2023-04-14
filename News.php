<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cs" lang="cs">
<link href="../assets/img/favicon.ico" type="image/x-icon" rel="icon" >

<body id="www-url-cz">
<!-- Main -->
<div id="main" class="box">
    <?php
    include "Header.php"
    ?>
    
    <!-- Page (2 columns) -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Welcome To Control Panel</h2>
      </div>
</section><!-- End Breadcrumbs -->
<section class="inner-page">
<div class="container">

                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td height="27" bgcolor="#A0B9F3"><span class="style4 style10">Create News</span></td>
                        </tr>
                        <tr>
                            <td height="26">
                                <form id="form1" method="post" action="InsertNews.php">
                                    <table width="100%" height="109" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td height="36"><span class="style9">News:</span></td>
                                            <td><span id="sprytextfield1">
                              <label>
                              <input type="text" name="txtNews" id="txtNews"/>
                              </label>
                            </span></td>
                                        </tr>
                                        <tr>
                                            <td height="35"><span class="style9">News Date:</span></td>
                                            <td><span id="sprytextfield2">
                              <label>
                              <input type="date" onclick="ds_sh(this);" name="txtDate" id="txtDate"/>
                              </label>
                              </span></td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                            <td><label>
                                                    <input type="submit" name="button" id="button" value="Submit"/>
                                                </label></td>
                                        </tr>
                                    </table>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td height="25" bgcolor="#A0B9F3"><span class="style3">News List</span></td>
                        </tr>
                        <tr>
                            <td>
                                <table width="100%" border="1" bordercolor="#1CB5F1">
                                    <tr>
                                        <th height="32" bgcolor="#1CB5F1">
                                            <div align="left" class="style12 style13 style7 style8">Id</div>
                                        </th>
                                        <th bgcolor="#1CB5F1">
                                            <div align="left" class="style11 style7 style8">News</div>
                                        </th>
                                        <th bgcolor="#1CB5F1">
                                            <div align="left" class="style11 style7 style8">Date</div>
                                        </th>
                                        
                                        <th bgcolor="#1CB5F1">
                                            <div align="left" class="style11 style7 style8">Delete</div>
                                        </th>
                                    </tr>
                                    <?php
                                    // Establish Connection with Database
                                    $con = mysqli_connect("localhost","root","","job");
                                    // Specify the query to execute
                                    $sql = "select * from news_master";

                                    // Execute query
                                    $result = mysqli_query($con,$sql);

                                    // Loop through each records
                                    while ($row = mysqli_fetch_array($result)) {
                                        $Id = $row['NewsId'];
                                        $News = $row['News'];
                                        $NewsDate = $row['NewsDate'];
                                        ?>
                                        <tr>
                                            <td>
                                                <div align="left" class="style11 style7 style8"><?php echo $Id; ?></div>
                                            </td>
                                            <td>
                                                <div align="left"
                                                     class="style11 style7 style8"><?php echo $News; ?></div>
                                            </td>
                                            <td>
                                                <div align="left"
                                                     class="style11 style7 style8"><?php echo $NewsDate; ?></div>
                                            </td>
                                            
                                            <td>
                                                <div align="left" class="style11 style7 style8"><a
                                                        href="DeleteNews.php?NewsId=<?php echo $Id; ?>">Delete</a></div>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    // Retrieve Number of records returned
                                    $records = mysqli_num_rows($result);
                                    ?>
                                    <tr>
                                        <td colspan="5">
                                            <div align="left"
                                                 class="style11 style7 style8"><?php echo "Total " . $records . " Records"; ?> </div>
                                        </td>
                                    </tr>
                                    <?php
                                    // Close the connection
                                    mysqli_close($con);
                                    ?>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td height="26">
                                <form method="post" action="InsertNews.php">
                                    <table width="100%" height="109" border="0" cellpadding="0" cellspacing="0">
                                    </table>
                                </form>
                            </td>
                        </tr>
                    </table>
                    <p>&nbsp;</p>

                    <p class="btn-more box noprint">&nbsp;</p>
                </div> <!-- /article -->

                <hr class="noscreen"/>

            </div> <!-- /content -->

            

        </div> <!-- /page-in -->
    </div> <!-- /page -->
</section>

    <?php
    include "footer.php"
    ?>
</div> <!-- /main -->


</body>
</html>
