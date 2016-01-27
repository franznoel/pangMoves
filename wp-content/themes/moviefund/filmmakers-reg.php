<style>
.regform label {
    width: 177px;
}
</style>
<?php 
$err=$err_email=$err_pass= "";
$user_name=$email=$pass=$reg= "";

if( isset($_POST['register']) ){
	if(!empty($_POST['meta']['user_name']) && !empty($_POST['meta']['email']) && !empty($_POST['meta']['password']) && !$user_id and email_exists($_POST['meta']['email']) == false){wp_redirect( "http://adsli.com/demo/moviefund/login/" ); exit;}else{$reg = "All fields Requeried";}
	if(!empty($_POST['meta']['user_name'])){
		$user_name = $_POST['meta']['user_name'];
		}
	else{
		$err = "User Name Must Be Filled Out";
		}
	if(!empty($_POST['meta']['email'])){
		$email = $_POST['meta']['email'];
		}
	else{
		$err_email = "Email Must Be Filled Out";
		}
	if(!empty($_POST['meta']['password'])){
		$pass = $_POST['meta']['password'];
		}
	else{
		$err_pass = "Pass Must Be Filled Out";
		}
		
$user_id = username_exists( $_POST['meta']['email'] );
if ( !$user_id and email_exists($_POST['meta']['email']) == false ) {	
$user_id = wp_create_user( $_POST['meta']['user_name'] , $_POST['meta']['password'] ,$_POST['meta']['email']);

$user = new WP_User($user_id);
$user->set_role('film_makers');

	update_user_meta( $user_id, 'first_name', $_POST['meta']['first_name']);
	update_user_meta( $user_id, 'last_name', $_POST['meta']['last_name']);

}
else{
	echo "User already Registered";	
}

}

?>

<div class="container">
<div class="regform">
<div class="row">
<?php echo $reg;
?>
<form action="" method="post">
<div class="col-md-5">
	<fieldset>
    	<legend>Account Information</legend>
        <label>User Name <span class="req">*</span>:</label>
        <input type="text" name="meta[user_name]" class="reg-form form-control" value="<?php echo $user_name;?>"><?php echo $err;?><br />
        <label>Email <span class="req">*</span>:</label>
        <input type="email" name="meta[email]" class="reg-form form-control" value="<?php echo $email;?>"><?php echo $err_email;?><br />
        <label>Password <span class="req">*</span>:</label>
        <input type="password" name="meta[password]" class="reg-form form-control"><br />
    </fieldset>
</div>
<div class="col-md-5 col-md-offset-2">
	<fieldset>
    	<legend>Personal Information</legend>
        <label>First Name <span class="req">*</span>:</label>
        <input type="text" name="meta[first_name]" class="reg-form form-control"><br />
        <label>Last name <span class="req">*</span>:</label>
        <input type="text" name="meta[last_email]" class="reg-form form-control"><br />
        <label>Phone Number <span class="req">*</span>:</label>
        <input type="text" name="meta[phone_number]" class="reg-form form-control"><br />
    </fieldset>
    <div class="res-btn"><input type="submit" name="register" class="btn btn-41" value="Register"></div>
</div>

</form>
</div>
</div>
</div>