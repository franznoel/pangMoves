<?php
get_header();
?>
<div class="container">
<div class="regform">
<div class="row">
<?php
  global $current_user;
    $user_id= $current_user-> ID;
if ( is_user_logged_in()) {
  get_currentuserinfo();
 ?>
<?php if(isset($_POST['update'])){
	update_user_meta( $user_id, 'password', $_POST['meta']['password']);
	update_user_meta( $user_id, 'first_name', $_POST['meta']['first_name']);
	update_user_meta( $user_id, 'last_name', $_POST['meta']['last_name']);
	echo '<h4>'."Updated Successfullu".'</h4>';
	}
?>
<form action="" method="post">
<div class="col-md-5">
	<fieldset>
    	<legend>Account Information</legend>
        <label>User Name <span class="req">*</span>:</label>
        <input type="text" name="meta[user_name]" class="reg-form form-control" value="<?php echo $current_user-> user_login ;?>" disabled><br />
        <label>Email <span class="req">*</span>:</label>
        <input type="email" name="meta[email]" class="reg-form form-control" value="<?php echo $current_user-> user_email ;?>" disabled><br />
        <label>Password <span class="req">*</span>:</label>
        <input type="password" name="meta[password]" class="reg-form form-control" value="<?php echo $current_user-> user_pass ;?>" disabled><br />
    </fieldset>
</div>
<div class="col-md-5 col-md-offset-2">
	<fieldset>
    	<legend>Personal Information</legend>
        <label>First Name <span class="req">*</span>:</label>
        <input type="text" name="meta[first_name]" class="reg-form form-control" value="<?php echo get_user_meta( $user_id, 'first_name',true) ;?>"><br />
        <label>Last name <span class="req">*</span>:</label>
        <input type="text" name="meta[last_name]" class="reg-form form-control" value="<?php  echo get_user_meta( $user_id, 'last_name',true) ;?>"><br />
        <label>Phone Number <span class="req">*</span>:</label>
        <input type="text" class="reg-form form-control" value=""><br />
    </fieldset>
    <div class="res-btn"><input type="submit" name="update" class="btn btn-41" value="Update"></div>
</div>

</form>

<?php
}
?>
</div>
</div>
</div>
<?php
get_footer();
  ?>