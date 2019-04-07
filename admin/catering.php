<?php require 'inc/header.php'; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Dashboard
    <small>Catering</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Catering</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <?php if (isset($_GET['action'])) {
      if ($_GET['action']=="create") {
        $msg=array();
        if ($_POST):
        $name=$_POST['name'];
        $description=$_POST['description'];
        $price=$_POST['price'];
        if ($name==""||$description=="" || $price=="" ):
        if ($name==""):
        $msg[]='<div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Empty Field</strong> Brand name field is required </div>';
        endif;
        if ($price==""):
        $msg[]='<div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Empty Field</strong> Category name field is required </div>';
        endif;
        else:
          $sql="INSERT INTO catering(id,name,description,price) VALUES(NULL,'$name','$brand','$description','$destination','$price')";
        if (mysqli_query($con, $sql)):
        $msg[]='<div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Well done</strong> Product is successfully inserted </div>';
        else:
        $msg[]='<div class="alert alert-error alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sorry!</strong> Product is not inserted </div>';
        endif;
      endif;
    endif;
    ?>
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <?php foreach ($msg as $key => $value) {
        echo $value;
        } ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>?action=create" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
            <label for="product_name">Cataring Name</label>
            <input type="text" name="product_name" class="form-control" id="product_name" placeholder="Enter Catering Name">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" class="form-control" name="description" id="description" placeholder="Enter description"></textarea>
          </div>
          <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Enter Price">
          </div>
          <button type="submit" class="btn btn-primary pull-right">Create Catering</button>
        </div>
            </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <?php }
    // elseif ($_GET['action']=='delete') {
    //   $id=$_GET['id'];

    //   $sql="DELETE FROM products WHERE products_id='$id'";
    //   if (mysqli_query($con,$sql)) {
    //     echo '<h3>Product is deleted successfully. Go back to <span><a href="'.$_SERVER['PHP_SELF'].'">Product page</a></span></h3>';
    //   }else{
    //     echo '<h3><strong>Sorry! </strong>Product is not deleted. Go back to <span><a href="'.$_SERVER['PHP_SELF'].'">Product page</a></span></h3>';
    //   }
    // }
    elseif ($_GET['action']=='update') { 
      $id=$_GET['id'];
      $msg=array();
        if ($_POST){
        $title=$_POST['name'];
        $description=$_POST['description'];
        $price=$_POST['price'];
        //$sql="UPDATE products SET products_title='$title', products_price='$price', products_quantity='$quantity', products_desc='$description', products_status='$status' WHERE products_id='$id'";
        $sql="UPDATE catering SET name = '$name', description = '$description', price = '$price',  WHERE id = '$id'";
        if ($con->query($sql)) {
          $msg[]='<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Well done</strong> Product is successfully updated </div>';
        }else{
          $msg[]='<div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Update error</strong> Product is not updated </div>';
        }
      }
      if ($result=mysqli_query($con,"SELECT * FROM catering WHERE id='$id'")) {
        while ($row=mysqli_fetch_assoc($result)) { ?>
        <div class="row">
      <div class="col-md-10 col-md-offset-1">
       <?php foreach ($msg as $key => $value) {
         echo $value;
       } ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>?action=update&id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
            <label for="product_name">Catering Name</label>
            <input type="text" name="catering" class="form-control" id="catering" placeholder="Enter Catering Name" value="<?php echo $row['name']; ?>">
          </div>
          <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" class="form-control" name="description" id="description" placeholder="Enter description"><?php echo $row['description']; ?></textarea>
          </div>
          <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" name="price" id="price" placeholder="Enter Price" value="<?php echo $row['products_price']; ?>">
          </div>
          <button type="submit" class="btn btn-primary pull-right">Update Catering</button>
            </div>
            <div class="col-md-4">
           <fieldset disabled>
              <div class="form-group">
            <label for="name">Name</label>
            <select name='name-disable' id='name' class='form-control'>
              <option value="<?php echo $row['name']; ?>">
                <?php echo $row['name']; ?>
              </option>
               </select>
               </div>
           </fieldset>
           
            </div>
          </div>
        </form>
      </div>
    </div>
<?php  }
      }
      ?>
      
   <?php }
    else{
    }
    }else{
    $sql="SELECT * FROM catering";
    $result=mysqli_query($con, $sql);
    if ($result->num_rows) { ?>
    <table id="example" class="display table table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
          <?php $sql="SELECT * FROM catering";
          $result=mysqli_query($con, $sql);
          if ($result->num_rows) {
            while ($row=mysqli_fetch_assoc($result)) {?>
            <tr>
              <td><?php echo $row['name']; ?></td>
              <td><?php echo $row['description']; ?></td>
              <td><?php echo $row['price']; ?></td>
              <td class="text-center"> <a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=update&id=<?php echo $row['id']; ?>"><button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a>  <a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=delete&id=<?php echo $row['id']; ?>"><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a></td>
            </tr>
    <?php    }
           } ?>
        </tbody>
        </table>
    <?php }
    } ?>
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php require 'inc/footer.php'; ?>
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
