   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-plus-sign icon-large"> Enter Your Giving</i></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
                <div class="control-group">

                <?php
// Start session (if not already started)


    if ($user_row) {
        $salary = $user_row['salary'];
        $percentage = $salary/10;
    } else {
        $salary = "Salary not available";
    }
?>
                
    <div class="controls">
        <input class="input focused" name="salary" value="<?php echo $salary; ?>" disabled id="focusedInput" type="text" required>
    </div>
</div>
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $percentage; ?>" disabled name="amount" id="focusedInput" type="text" required>
                                          </div>
                                        </div>

										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" name="trcode" id="focusedInput" type="text" placeholder = "Transaction Code" required>
                                          </div>
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
                    </div>
								
<?php

if (isset($_POST['save'])){
$salary = $_POST['salary'];
$firstname = $_POST['amount'];
$lastname = $_POST['trcode'];





mysqli_query($conn,"insert into tithe (Amount,Trcode,na) values('$firstname','$lastname','$session_id')")or die(mysqli_error());

?>
<script>
window.location = "Tithes.php";
$.jGrowl("The Giving Successfully added", { header: 'Giving added' });
</script>
<?php
}

?>