<?php
$host="localhost";
		$uname="root";
		$pas="";
		$db_name="cman";
		$tbl_name="members";
		
		// @mysqli_connect("$host","$uname","$pas") or die ("cannot connect");
		// mysqli_select_db("$db_name") or die ("cannot select db");
		$conn = @mysqli_connect("$host","$uname","$pas","$db_name") or die ("cannot connect to the database");
		?>