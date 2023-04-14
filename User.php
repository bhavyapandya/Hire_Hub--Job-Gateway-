<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="cs">
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
    </section><!-- End Breadcrumbs -->
	<section class="inner-page">
		<div class="container">
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="27" bgcolor="#A0B9F3"><strong>Create New User</strong></td>
        </tr>
        <tr>
          <td height="26">
          <form id="form1" name="form1" method="post" action="InsertUser.php">
            <table width="100%" height="95" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="35"><span class="style10">User Name:</span></td>
                <td><span id="sprytextfield1">
                  <label>
                  <input type="text" name="txtUserName" id="txtUserName" />
                  </label>
                  </span></td>
              </tr>
              <tr>
                <td><span class="style10">Password:</span></td>
                <td><span id="sprytextfield2">
                  <label>
                  <input type="password" name="txtPassword" id="txtPassword" />
                  </label>
                  </span></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><label>
                  <input type="submit" name="button" id="button" value="Submit" />
                </label></td>
              </tr>
            </table>
          </form>            </td>
        </tr>
        <tr>
          <td height="25" bgcolor="#A0B9F3"><strong>User List</strong></td>
        </tr>
        <tr>
          <td>
          <table width="100%" border="1" bordercolor="#1CB5F1" >
<tr>

<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style9 style5"><strong>UserName</strong></div></th>

<th bgcolor="#1CB5F1" class="style3"><div align="left" class="style12">Delete</div></th>
</tr>
<?php
// Establish Connection with Database
$con = mysqli_connect("localhost","root","","job");
// Specify the query to execute
$sql = "select * from User_Master";
// Execute query
$result = mysqli_query($con,$sql);
// Loop through each records 
while($row = mysqli_fetch_array($result))
{
$Id=$row['UserId'];
$UserName=$row['UserName'];

?>
<tr>
<td class="style3"><div align="left" class="style9 style5"><strong><?php echo $UserName;?></strong></div></td>
<td class="style3"><div align="left" class="style9 style5"><strong><a href="DeleteUser.php?UserId=<?php echo $Id;?>">Delete</a></strong></div></td>
</tr>
<?php
}
// Retrieve Number of records returned
$records = mysqli_num_rows($result);
?>
<tr>
<td colspan="4" class="style3"><div align="left" class="style12"><?php echo "Total ".$records." Records"; ?> </div></td>
</tr>
<?php
// Close the connection
mysqli_close($con);
?>
</table>
          </td>
        </tr>
      </table>

		</div>
    </section>
	<?php
include "footer.php"
?>


</body>
</html>
