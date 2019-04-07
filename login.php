<?php require 'header.php'; ?>
<?php
$msg=array();

 if (isset($_SESSION['username'])) {
    header('location:index.php');
}else {
    if ($_POST) {
        $name=$_POST['username'];
        $pass=md5($_POST['password']);
        $sql="SELECT * FROM customer WHERE username='$name'";
        $tut=mysqli_query($con, $sql);
        if ($tut->num_rows) {
            $lg="SELECT * FROM customer WHERE username='$name' AND password='$pass'";
            $r=mysqli_query($con, $lg);
            if ($r->num_rows) {
                while ($rst=mysqli_fetch_assoc($r)) {
                    $usrnm=$rst['username'];
                    $_SESSION['username']=$usrnm;
                    header('location:index.php');
                }
            }else{
                $msg[]='<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Password is error</div>';
            }
        }else{
            $msg[]='<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Sorry!</strong> No user is found with this username</div>';
        }
    }
} ?>
<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Sign In</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
            </div>
            <div style="padding-top:30px" class="panel-body" >
                
                    <?php foreach ($msg as $key => $value) {
                        echo $value;
                    } ?>
                
                <form action="" id="loginform" class="form-horizontal" role="form" method="POST">
                    
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username">
                    </div>
                    
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                    </div>
                    
                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                            <button id="btn-login" class="btn btn-success">Login</button>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                Don't have an account!
                                <a href="register.php">
                                    Sign Up Here
                                </a>
                                or
                                <a href="admin-login.php">Go to admin login</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
<?php require 'footer.php'; ?>