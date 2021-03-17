<?php
	/**
	 * 
	 */
	class database
	{
		function connect(){
			$con1 = mysqli_connect("localhost","root","");
			mysqli_select_db($con1,"excel_forms");
			return($con1);
		}
	}