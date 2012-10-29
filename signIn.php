
<?php 
	if($_POST["submit"]){echo "submited";}
	if($_POST["register"]){echo "registered";}
?>
<center>
	<?php 	if($_POST["register"]){
			echo "<form name='register' action='formHandler.php' method='post'>";
		}
		else {
			echo "<form name='login' action='signIn.php' method='post'>";
		}
	?>
		Username:<input type="text" name="username" value="<?php echo $_POST['username']; ?>" /><br />
		Password:<input type="password" name="password" value="<?php echo $_POST['password']; ?>" /><br />
		<?php
		if($_POST["register"])
		{  ?>
		First Name:<input type="text" name="first" /><br />
		Last Name:<input type="text" name="last" /><br />
		Avatar:<input type="text" name="last" value="URL to image" /><br />
		<input type="hidden" name="sendToDatabase" value="<?php echo $_POST['register']; ?>" />
		<?php } ?>
		<input type="submit" value="Log In" name="submit" />
		<input type="submit" value="Register" name="register"/>
	</form>
</center>

