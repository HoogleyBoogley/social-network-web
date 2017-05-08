<?php require_once './template/header.php'; ?>
<div class="container" style="width:1000px; margin:0 auto; padding-top:25px;">
    <?php

        $reg = $_POST['reg'];

        //registration form
        $fn = strip_tags(@$_POST['fname']);
        $ln = strip_tags(@$_POST['lname']);
        $un = strip_tags(@$_POST['username']);
        $em = strip_tags(@$_POST['email']);
        $em2 = strip_tags(@$_POST['email2']);
        $pswd = strip_tags(@$_POST['password']);
        $pswd2 = strip_tags(@$_POST['password2']);
        $d = date("Y-m-d"); // Year - Month - Day

        if ($reg) {
        if ($em==$em2) {
        // Check username
        $u_check = mysql_query("SELECT username FROM users WHERE username='$un'");
        $check = mysql_num_rows($u_check);
        // Check email
        $e_check = mysql_query("SELECT email FROM users WHERE email='$em'");
        $email_check = mysql_num_rows($e_check);
        if ($check == 0) {
          if ($email_check == 0) {
        // are rows filled in
        if ($fn&&$ln&&$un&&$em&&$em2&&$pswd&&$pswd2) {
        // passwords match?
        if ($pswd==$pswd2) {
        // how long are names
        if (strlen($un)>25||strlen($fn)>25||strlen($ln)>25) {
        echo "Your names are too long!";
        }
        else
        {
        // check the maximum length of password does not exceed 25 characters and is not less than 5 characters
        if (strlen($pswd)>16||strlen($pswd)<6) {
        echo "Passwords must be between 6 and 16 characters!";
        }
        else
        {
        //encrypt password
        $pswd = md5($pswd);
        $pswd2 = md5($pswd2);
        $query = mysql_query("INSERT INTO users VALUES ('','$un','$fn','$ln','$em','$pswd','$d','0','Write something about yourself.','','',)") or die(mysql_error());
        die("<h2>Welcome to our community!</h2>Login to your account to begin your journy...");
        }
        }
        }
        else {
        echo "Your passwords don't match!";
        }
        }
        else
        {
        echo "Please fill in all of the fields";
        }
        }
        else
        {
         echo "Sorry, but it looks like someone has already used that email!";
        }
        }
        else
        {
        echo "Username already taken ...";
        }
        }
        else {
        echo "Your E-mails don't match!";
        }
        }
    ?>
    <?php
    if (isset($_POST["user_login"]) && isset($_POST["password_login"])) {
    	$user_login = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["user_login"]); // filter everything but numbers and letters
        $password_login = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["password_login"]); // filter everything but numbers and letters
    	$md5password_login = md5($password_login);
        $sql = mysql_query("SELECT id FROM users WHERE username='$user_login' AND password='$md5password_login' AND closed='no' LIMIT 1"); // query the person
    	//Check for their existance
    	$userCount = mysql_num_rows($sql); //Count the number of rows returned
    	if ($userCount == 1) {
    		while($row = mysql_fetch_array($sql)){
                 $id = $row["id"];
    	}
    		 $_SESSION["id"] = $id;
    		 $_SESSION["user_login"] = $user_login;
    		 $_SESSION["password_login"] = $password_login;
             exit("<meta http-equiv=\"refresh\" content=\"0\">");
    		} else {
    		echo 'That information is incorrect, try again';
    		exit();
    	}
    }
    ?>
    <div id="home">
        <table>
            <tr>
                <td width="50%" valign="top">
                    <h2>Welcome back! Login here!</h2>
                    <input type="text" name="user_login" size="25" placeholder="E-Mail Address" /><br /><br />
                    <input type="password" name="pass_login" size="25" placeholder="Password" /><br /><br />
                    <input type="submit" name="button" id="button" value="Login to your account">
                </td>
                <td width="50%" valign="top">
                    <h2>Welcome! Register for free!</h2>
                        <form action="#" method="post">
                            <input type="text" size="40" name="fname"  class="auto-clear" title="First Name" placeholder="First Name" value="<?php echo $fn; ?>"><p />
                            <input type="text" size="40" name="lname" class="auto-clear" title="Last Name" placeholder="Last Name" value="<?php echo $ln; ?>"><p />
                            <input type="text" size="40" name="username" class="auto-clear" title="Username" placeholder="Username" value="<?php echo $un; ?>"><p />
                            <input type="text" size="40" name="email" class="auto-clear" title="Email" placeholder="Email Address" value="<?php echo $em; ?>"><p />
                            <input type="text" size="40" name="email2" class="auto-clear" title="Repeat Email" placeholder="Email Address" value="<?php echo $em2; ?>"><p />
                            <input type="password" size="40" name="password" placeholder="Password ..."><p />
                            <input type="password" size="40" name="password2" placeholder="Password ..."><p />
                            <input type="submit" name="reg" value="Sign Up!">
                        </form>
                        <!-- <select name="gender">
                            <option value="" disabled selected>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select><br /><br /> -->
                </td>
            </tr>
        </table>
    </div>
</div>

<?php require_once './template/footer.php'; ?>
