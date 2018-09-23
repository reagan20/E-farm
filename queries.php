<!--Account creation query starts here-->
<?php
if(isset($_POST['submit'])){
    $fname=trim(mysqli_real_escape_string($conn, $_POST['fname']));
    $mname=trim(mysqli_real_escape_string($conn, $_POST['mname']));
    $lname=trim(mysqli_real_escape_string($conn, $_POST['lname']));
    $national_id=trim(mysqli_real_escape_string($conn, $_POST['national_id']));
    $mobile=trim(mysqli_real_escape_string($conn, $_POST['mobile']));
    $email=trim(mysqli_real_escape_string($conn, $_POST['email']));
    $account_type=trim(mysqli_real_escape_string($conn, $_POST['account_type']));
    $address=trim(mysqli_real_escape_string($conn, $_POST['address']));
    $town=trim(mysqli_real_escape_string($conn, $_POST['town']));
    $password=trim(mysqli_real_escape_string($conn, $_POST['password']));

    $stmt=$conn->query("INSERT INTO users(fname,mname,lname,national_id,mobile,email,address,town,role,password)
                        VALUES('$fname','$mname','$lname','$national_id','$mobile','$email','$address','$town','$account_type','$password')");
    if($stmt){
        echo"<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button>Account successfully created.</div>";
    }
    else{
        echo"<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>Account creation failed.</div>";
    }

    /*if($account_type==2){
        $stmt=$conn->query("INSERT INTO vendor(fname,mname,lname,national_id,mobile,email,address,town)
                        VALUES('$fname','$mname','$lname','$national_id','$mobile','$email','$address','$town')");
        if($stmt){
            $stmt1=$conn->query("INSERT INTO login(username,role,password) VALUES('$email','$account_type','$password')");
            echo"<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button>Account successfully created.</div>";
        }
        else{
            echo"<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>Account creation failed.</div>";
        }
    }
    elseif($account_type==3){
        $stmt2=$conn->query("INSERT INTO customers(fname,mname,lname,national_id,mobile,email,address,town)
                        VALUES('$fname','$mname','$lname','$national_id','$mobile','$email','$address','$town')");
        if($stmt2){
            $stmt3=$conn->query("INSERT INTO login(username,role,password) VALUES('$email','$account_type','$password')");
            echo"<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button>Account successfully created.</div>";
        }
        else{
            echo"<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>Account creation failed.</div>";
        }
    }*/


}
?>

<!--Account creation query ends here-->

<!--Login process starts here-->
<?php
if(isset($_POST['login'])){
    $email=trim(mysqli_real_escape_string($conn, $_POST['email']));
    $password=trim(mysqli_real_escape_string($conn, $_POST['password']));

    $stmt=$conn->query("SELECT * FROM users WHERE email='$email' AND password='$password'");

    $row=$stmt->fetch_array();
    $count=$stmt->num_rows;

    if($count==1) {
        if ($row['role'] == 1) {
            $_SESSION['admin'] = $row['email'];
            $_SESSION['role_session'] = $row['role'];
            echo " <script> window.location.href='admin/index';  </script>";
        }
        elseif($row['role'] == 2){
            $_SESSION['vendor'] = $row['email'];
            $_SESSION['role_session'] = $row['role'];
            echo " <script> window.location.href='vendor/dash';  </script>";
        }
        elseif($row['role'] == 3){
            $_SESSION['customer'] = $row['user_id'];
            $_SESSION['role_session'] = $row['role'];
            echo " <script> window.location.href='Customer_Dashboard';  </script>";
        }
    }
    else{
        echo"<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>Username or password incorrect.!!</div>";
    }
}
    ?>
<!--Login process ends here-->

<!--Updating account details starts here-->
<?php
if(isset($_POST['update_account'])){
    $fname=trim(mysqli_real_escape_string($conn, $_POST['fname']));
    $mname=trim(mysqli_real_escape_string($conn, $_POST['mname']));
    $lname=trim(mysqli_real_escape_string($conn, $_POST['lname']));
    $national_id=trim(mysqli_real_escape_string($conn, $_POST['national_id']));
    $mobile=trim(mysqli_real_escape_string($conn, $_POST['mobile']));
    $email=trim(mysqli_real_escape_string($conn, $_POST['email']));
    $address=trim(mysqli_real_escape_string($conn, $_POST['address']));
    $town=trim(mysqli_real_escape_string($conn, $_POST['town']));

    $sql=$conn->query("UPDATE users SET fname='$fname', mname='$mname', lname='$lname', national_id='$national_id', mobile='$mobile', email='$email', address='$address', town='$town'");
    if($sql){
        echo"<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button>Account details successfully updated.</div>";
    }
    else{
        echo"<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>Details could not be updated. Please try again later.</div>".mysqli_error($conn);
    }
}
?>
<!--Updating account details ends here-->
