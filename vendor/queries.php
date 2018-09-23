<!--Add product query-->
<?php
if(isset($_POST['add_product'])){
    $product_name=trim(mysqli_real_escape_string($conn, $_POST['product_name']));
    $category=trim(mysqli_real_escape_string($conn, $_POST['category']));
    $sub_category=trim(mysqli_real_escape_string($conn, $_POST['sub_category']));
    $qty=trim(mysqli_real_escape_string($conn, $_POST['qty']));
    $price=trim(mysqli_real_escape_string($conn, $_POST['price']));
    //$image=trim(mysqli_real_escape_string($conn, $_POST['image']));
    $description=trim(mysqli_real_escape_string($conn, $_POST['description']));

    $imgFile = $_FILES['image']['name'];
    $imageTmp = $_FILES['image']['tmp_name'];
    $imageSize = $_FILES['image']['size'];
    $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
    $valid = array('jpeg','jpg','png','gif');

    if(in_array($imgExt,$valid))
    {
        move_uploaded_file($imageTmp,"../images/products/".$imgFile);
        $stmt=$conn->query("INSERT INTO products(vendor_id,product_name,category,sub_category,qty,price,description,image) VALUES('$vendor_id','$product_name','$category','$sub_category','$qty','$price','$description','$imgFile')");
        if($stmt){
            echo"<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button>Product added successfully.</div>";
            echo"<script> window.location.href='products.php'</script>";
        }
        else{
            echo"<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button>Failed!.</div>";
        }
    }

}
?>
<!--Add product end-->

<!--Update product start-->
<?php
$p=@$_GET['id'];
require_once('../config/dbconnect.php');

if(isset($_POST['update'])) {
    $product_name = trim(mysqli_real_escape_string($conn, $_POST['product_name']));
    $category = trim(mysqli_real_escape_string($conn, $_POST['category']));
    $qty = trim(mysqli_real_escape_string($conn, $_POST['qty']));
    $price = trim(mysqli_real_escape_string($conn, $_POST['price']));
//$image=trim(mysqli_real_escape_string($conn, $_POST['image']));
    $description = trim(mysqli_real_escape_string($conn, $_POST['description']));

    $imgFile = $_FILES['image']['name'];
    $imageTmp = $_FILES['image']['tmp_name'];
    $imageSize = $_FILES['image']['size'];
    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
    $valid = array('jpeg', 'jpg', 'png', 'gif');

    if (in_array($imgExt, $valid)) {
        move_uploaded_file($imageTmp, "../images/products/" . $imgFile);
        $stmt1=$conn->query("UPDATE products SET product_name='$product_name',category='$category',qty='$qty',price='$price',description='$description',image='$imgFile' WHERE id='$p'");
        if($stmt1){
            echo"<script> window.location.href='products.php'</script>";
            $msg="<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button>Product successfully updated.</div>";
        }
        else{
           $msg="<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>Failed.</div>";
            //echo"<script> window.location.href='products.php'</script>";
        }
    }
}
?>
<!--Update product end-->
