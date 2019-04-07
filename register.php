<?php require 'header.php'; ?>
<?php 
$msg= array();
if ($_POST) {
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $is_exist="SELECT * FROM customer WHERE username='$username'";
    $rst=mysqli_query($con, $is_exist);
    if ($rst->num_rows) {

        $msg[]='<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Username already exist</div>';
    }else{
        $query="INSERT INTO customer(name, username, email, password, mobile, address) VALUES('$name','$username','$email','$password','$mobile','$address')";
        if (mysqli_query($con, $query)) {
            $msg[]='<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> Registration successfully completed</div>';
        }else{
            $msg[]='<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Sorry!</strong> Registration is not completed</div>';
        }
    }
}
 ?>
<div class="container">
    <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Sign Up</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="login.php">Sign In</a></div>
            </div>
            <div class="panel-body" >
                <div class="err">
                    <?php foreach ($msg as $key => $value) {
                        echo $value;
                    } ?>
                </div>
                <form id="signupform" class="form-horizontal" role="form" method="POST" action="">
                    <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                    </div>
                    <div class="form-group">
                        <label for="name_id" class="col-md-3 control-label">Full Name</label>
                        <div class="col-md-9">
                            <input type="text" id="name_id" class="form-control" name="name" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email_id" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" id="email_id">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username_id" class="col-md-3 control-label">Username</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="username_id" name="username" placeholder="username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password_id" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password" placeholder="Password" id="password_id">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="mobile_id" class="col-md-3 control-label">Contact</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="mobile" placeholder="Phone number" id="mobile_id">
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="address_id" class="col-md-3 control-label">Address</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="address" id="address_id" placeholder="Address"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-md-offset-3 col-md-9">
                            <button id="btn-signup" class="btn btn-info">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require 'footer.php'; ?>