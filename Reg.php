<!-- Main -->
<div class="modal fade" id="jobseeker" tabindex="-1" role="dialog" aria-labelledby="jobseekerLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
 <div class="modal-content">
 <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Job seeker Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
</div>
                <form action="JobSeekerInsert.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2" style="margin:10px">
                    <div class="form-group">
					<label for="txtName">Name</label>
                        <input type="text" name="txtName" id="txtName" class="form-control" id="exampleFormControlInput1" placeholder="Name"/ required>
                    </div>
                   
                    <div class="form-group">
						<label for="txtAddress">Address</label>
                        <textarea name="txtAddress" id="txtAddress" class="form-control" cols="45" rows="5"  placeholder="Address" required></textarea>
					</div>
                      
					<div class="form-group">
                        <label for="txtCity">City</label>
                        <input type="text" class="form-control" name="txtCity" id="txtCity"  placeholder="City" required />
                     </div>
					<div class="form-group">
                        <label for="txtEmail">Email</label>
                        <input type="email" class="form-control" name="txtEmail" id="txtEmail"  placeholder="Email" required/>
                     </div>
                    <div class="form-group">
                        <label for="txtMobile">Mobile</label>
                        <input type="tel" minlength="9" maxlength="14" class="form-control" name="txtMobile" id="txtMobile" placeholder="Phone.no" required />
                     </div>  
                      <div class="form-group">
                        <label for="txtQualification">Qualification</label>
                        <input type="text" class="form-control" name="txtQualification" id="txtQualification" placeholder="Qulification" required />
                     </div>
					 <div class="form-group">
                        <label for="txtOther">Other</label>
                        <input type="text" class="form-control" name="txtOther" id="txtOther" placeholder="Other" />
                     </div>                    
					<div class="form-group">
						<label for="cmbGender">Gender</label>
						<select class="form-control" name="cmbGender" id="cmbGender">
							<option selected value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
					</div>
					  <div class="form-group">
                        <label for="txtOther">BirthDate</label>
                        <input type="date" class="form-control" name="txtBirthDate" id="txtBirthDate" required />
                     </div> 
					</script>
					<div class="form-group">
                        <label for="txtUserName">User Name</label>
                        <input type="text" class="form-control" name="txtUserName" id="txtUserName" placeholder="User Name" required />
                    </div>   
					<div class="form-group">
                        <label for="txtPassword">Password</label>
                        <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Password" required />
                    </div>
					<div class="form-group">
						<label for="cmbQue">Security Question</label>
						<select class="form-control" name="cmbQue" id="cmbQue"">
						  <option selected="selected">What is Your Pet Name?</option>
                          <option>Who is Your Favourite Person?</option>
                          <option>What is the Name of Your First School?</option>
						</select>
					</div>
					<div class="form-group">
                        <label for="txtAnswer"> Answer</label>
                        <input type="text" class="form-control" name="txtAnswer" id="txtAnswer" placeholder="Answer" required />
                    </div>   
                        <div class="modal-footer">
						  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <input type="submit" name="button2" id="button2" class="btn btn-primary" value="Submit" />
                          </div>
                      
                 </form>
				 <!-- Button trigger modal -->
</div>
</div>
</div>

<div class="modal fade" id="Employer" tabindex="-1" role="dialog" aria-labelledby="jobseekerLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
 <div class="modal-content">
 <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Employer Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
</div>
                <form action="EmployeInsert.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2" style="margin:10px">
                    <div class="form-group">
					<label for="txtName">Company Name</label>
                        <input type="text" name="txtName" id="txtName" class="form-control" id="exampleFormControlInput1" placeholder="Company Name"/ required>
                    </div> <div class="form-group">
					<label for="txtPerson">Contact Person</label>
                        <input type="text" name="txtPerson" id="txtPerson" class="form-control" id="exampleFormControlInput1" placeholder="Contact Person"/ required>
                    </div>
                   
                   <div class="form-group">
						<label for="txtAddress">Address</label>
                        <textarea name="txtAddress" id="txtAddress" class="form-control" cols="45" rows="5"  placeholder="Address" required></textarea>
					</div>
                      
					<div class="form-group">
                        <label for="txtCity">City</label>
                        <input type="text" class="form-control" name="txtCity" id="txtCity"  placeholder="City" required />
                     </div>
					<div class="form-group">
                        <label for="txtEmail">Email</label>
                        <input type="email" class="form-control" name="txtEmail" id="txtEmail"  placeholder="Email" required />
                     </div>
                    <div class="form-group">
                        <label for="txtMobile">Mobile</label>
                        <input type="tel" minlength="9" maxlength="14" class="form-control" name="txtMobile" id="txtMobile" placeholder="Phone.no" required />
                     </div>  
                      <div class="form-group">
                        <label for="txtAreaWork">Area of Work</label>
                        <input type="text" class="form-control" name="txtAreaWork" id="txtAreaWork" placeholder="Area Of Work" required />
                     </div>
					<div class="form-group">
                        <label for="txtUserName">User Name</label>
                        <input type="text" class="form-control" name="txtUserName" id="txtUserName" placeholder="User Name" required />
                    </div>   
					<div class="form-group">
                        <label for="txtPassword">Password</label>
                        <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Password" required />
                    </div><div class="form-group">
                        <label for="file">Company logo</label>
						<input type="file" class="form-control" accept="image/*" id="file" name="file" required />
                    </div>
					<div class="form-group">
						<label for="cmbQue">Security Question</label>
						<select class="form-control" name="cmbQue" id="cmbQue"">
						  <option selected="selected">What is Your Pet Name?</option>
                          <option>Who is Your Favourite Person?</option>
                          <option>What is the Name of Your First School?</option>
						</select>
					</div>
					<div class="form-group">
                        <label for="txtAnswer"> Answer</label>
                        <input type="text" class="form-control" name="txtAnswer" id="txtAnswer" placeholder="Answer" required />
                    </div>   
                        <div class="modal-footer">
						  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <input type="submit" name="button2" id="button2" class="btn btn-primary" value="Submit" />
                          </div>
                      
                 </form>
				 <!-- Button trigger modal -->
</div>
</div>
</div>

