
  <div class="row-fluid">
                        <!-- block -->
 <div class="block">
 <div class="navbar navbar-inner block-header">
<div class="muted pull-left"><i class="icon-plus-sign icon-large"> Register New Visitor</i></div>
</div>
<div class="block-content collapse in">
                                <div class="span12">
								
								 <!--------------------form------------------->
								<form method="post">
					<div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                     <input class="input focused" name="fname" id="focusedInput" type="text" placeholder = "First Name" required> 
                                   </p>
                                 </div>
                                  </div>
								  </p>
								  <div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                     <input class="input focused" name="sname" id="focusedInput" type="text" placeholder = "Surname" required> 
                                   </p>
                                 </div>
                                  </div>
								  <div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                     <input class="input focused" name="lname" id="focusedInput" type="text" placeholder = "Last name" required> 
                                   </p>
                                 </div>
                                  </div>
								  <div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                      <select class="input focused" name="gender" id="focusedInput" required="required" type="text">
  <option value="Select Gender">Select Gender</option>
  <option value="male">male</option>
  <option value="Female">Female</option>

</select>  
                                   </p>
                                 </div>
                                  </div>
								  </p>
								  <div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                     <input class="input focused" name="birthday" id="focusedInput" type="date" placeholder = "Birthday" required> 
                                   </p>
                                 </div>
                                  </div>
								  </p>
								  <div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                     <input class="input focused" name="Home-County" id="focusedInput" type="text" placeholder = "Home-County" required> 
                                   </p>
                                 </div>
                                  </div>
								  </p>
								<!-- <div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                     <input class="input focused" name="Hostel" id="focusedInput" type="text" placeholder = "Hostel" required> 
                                   </p>
                                 </div>
                                  </div>
								  </p>		 -->
										
                  <div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                    <select class="input focused" name="ministry" id="focusedInput" required="required" type="text">
  <option value="">Select ministry Attended</option>
  <option value="None">None</option>
  <option value="Hospitalit">Hospitality</option>
  <option value="Children and Schools">Children and Schools</option>
  <option value="media">Media</option>
  <option value="Sabbath School">Sabbath School</option>
  <option value="Health">Health</option>
  <option value="Music">Music</option>
</select>   
                                   </p>
                                 </div>
                                  </div>
								  </p>
									<div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                     <input class="input focused" name="mobile" id="focusedInput" type="text" placeholder = "mobile number" required> 
                                   </p>
                                 </div>
                                  </div>
								  </p>
								  <div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                   </p>
                                 </div>
                                  </div>
								  </p>
								 							 
								  </p>
								  <div class="control-group">
                                <p> <div class="controls">
                                   <p>
                                   </p>
                                 </div>
                                  </div>
								  </p>
                                    </div>
										
                                
                                        
										<div class="control-group">
                                          <div class="controls">
 <button name="save" class="btn btn-info" id="save" data-placement="right" title="Click to Save"><i class="icon-plus-sign icon-large"> Save</i></button>
												<script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#save').tooltip('show');
	                                            $('#save').tooltip('hide');
	                                            });
	                                            </script>
                                          </div>
                                        </div>
                                </form>
								
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                  				 
<?php
if (isset($_POST['save'])){
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$lname = $_POST['lname'];
$Gender = $_POST['Gender'];
$birthday = $_POST['birthday'];
$HomeCounty= $_POST['Home-County'];
$Hostel = $_POST['Hostel'];
$ministry = $_POST['ministry'];
$mobile= $_POST['mobile'];
$email= $_POST['email'];
$password = $_POST['password'];


$query = @mysqli_query($conn,"select * from visitor where  mobile = '$mobile'  ")or die(mysqli_error());
$count = mysqli_num_rows($query);

if ($count > 0){ ?>
<script>
alert('This Visitor  Already Exists');
</script>
<?php
}else{
mysqli_query($conn,"insert into Visitor(fname,sname,lname,Gender,birthday,Home-County,Hostel,ministry,mobile,thumbnail) 
values('$fname','$sname','$lname','$Gender','$birthday','$HomeCounty','$Hostel','$ministry','$mobile','uploads/none.png')")or die(mysqli_error());

mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$admin_username','Added member $mobile')")or die(mysqli_error());
?>
<script>
window.location = "add_visitor.php";
$.jGrowl("member Successfully added", { header: 'member add' });
</script>
<?php
}
}
?>