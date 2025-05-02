<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>CHURCH MANAGER</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Church Manager" />
        <meta name="keywords" content="Church, Manager, Member registration, Donation, Tithe Manager" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
               
               
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>CHURCH MANAGER <span>ACCESS POINT</span></h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="login.php" method="POST" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="Mobile Number"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Keep me logged in</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Login"  name="login"/> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="#toregister" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form method="post" autocomplete="on"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">First Name</label>
                                    <input id="usernamesignup" name="fname" required="required" type="text" placeholder="John" />
                                </p>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u" > Middle Name</label>
                                    <input id="usernamesignup" name="sname" required="required" type="text" placeholder="Doe"/> 
                                </p>
								<p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Last Name</label>
                                    <input id="usernamesignup" name="lname" required="required" type="text" placeholder="John" />
                                </p>
								<p> 
                                    <label for="usernamesignup" class="uname" >Gender</label>
                                    
									 <select name="gender" id="usernamesignup" required="required" type="text">
  <option value="Select Gender">Select Gender</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>

</select> 
                                </p>
								<p> 
                                    <label for="usernamesignup" class="uname">Date Of Birth</label>
                                    <input id="usernamesignup" type="date" name="birthday" min="1900-01-02" />
                                </p>
								<p> 
                                    <label for="usernamesignup" class="uname" >County</label>
                                    <select class="input focused" name="County" id="focusedInput" type="text" required>                         
    <option value=''>Select County</option>
    <option value='Baringo'>Baringo</option>
    <option value='Bomet'>Bomet</option>
    <option value='Bungoma'>Bungoma</option>
    <option value='Busia'>Busia</option>
    <option value='Elgeyo-Marakwet'>Elgeyo-Marakwet</option>
    <option value='Embu'>Embu</option>
    <option value='Garissa'>Garissa</option>
    <option value='Homa Bay'>Homa Bay</option>
    <option value='Isiolo'>Isiolo</option>
    <option value='Kajiado'>Kajiado</option>
    <option value='Kakamega'>Kakamega</option>
    <option value='Kericho'>Kericho</option>
    <option value='Kiambu'>Kiambu</option>
    <option value='Kilifi'>Kilifi</option>
    <option value='Kirinyaga'>Kirinyaga</option>
    <option value='Kisii'>Kisii</option>
    <option value='Kisumu'>Kisumu</option>
    <option value='Kitui'>Kitui</option>
    <option value='Kwale'>Kwale</option>
    <option value='Laikipia'>Laikipia</option>
    <option value='Lamu'>Lamu</option>
    <option value='Machakos'>Machakos</option>
    <option value='Makueni'>Makueni</option>
    <option value='Mandera'>Mandera</option>
    <option value='Marsabit'>Marsabit</option>
    <option value='Meru'>Meru</option>
    <option value='Migori'>Migori</option>
    <option value='Mombasa'>Mombasa</option>
    <option value='Murang'a>Murang'a</option>
    <option value='Nairobi City'>Nairobi City</option>
    <option value='Nakuru'>Nakuru</option>
    <option value='Nandi'>Nandi</option>
    <option value='Narok'>Narok</option>
    <option value='Nyamira'>Nyamira</option>
    <option value='Nyandarua'>Nyandarua</option>
    <option value='Nyeri'>Nyeri</option>
    <option value='Samburu'>Samburu</option>
    <option value='Siaya'>Siaya</option>
    <option value='Taita-Taveta'>Taita-Taveta</option>
    <option value='Tana River'>Tana River</option>
    <option value='Tharaka-Nithi'>Tharaka-Nithi</option>
    <option value='Trans Nzoia'>Trans Nzoia</option>
    <option value='Turkana'>Turkana</option>
    <option value='Uasin Gishu'>Uasin Gishu</option>
    <option value='Vihiga'>Vihiga</option>
    <option value='West Pokot'>West Pokot</option>
    <option value='wajir'>wajir</option>
</select>
                                </p>
								<p> 
                                    <label for="usernamesignup" class="uname" >Hostel</label>
                                    <select class="input focused" name="Hostel" id="focusedInput" required="required" type="text">
  <option value="">Select Hostel</option>
  <option value="Block A">Block A</option>
  <option value="Block B">Block B</option>
  <option value="Block C">Block C</option>
  <option value="Block D">Block D</option>
  <option value="Block E">Block E</option>
  <option value="Health">Block F</option>
  <option value="Mekatilili">Mekatilili</option>
  <option value="Runda">Runda</option>
  <option value="Mwangeka">Mwangeka</option>
  <option value="Non Resident">Non Resident</option>
</select>
                                </p>
								<p> 
                                    <label for="usernamesignup" class="uname" >Ministry</label>
                                    <select class="input focused" name="ministry" id="focusedInput" required="required" type="text">
  <option value="">Select ministry</option>
  <option value="None">None</option>
  <option value="Hospitality">Hospitality</option>
  <option value="Children and Schools">Children and Schools</option>
  <option value="media">Media</option>
  <option value="Sabbath School">Sabbath School</option>
  <option value="Health">Health</option>
  <option value="Music">Music</option>
</select>  
                                </p>
								 <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="email" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Mobile Number </label>
                                    <input id="passwordsignup" name="mobile" required="required" type="text" placeholder="eg.0700000000"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Password </label>
                                    <input id="passwordsignup_confirm" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up" name="submit"/>
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
        
    </body>
</html>