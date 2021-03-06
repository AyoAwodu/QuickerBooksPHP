<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>QUICKER BOOKS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="Templates/Dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="Templates/Dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="Templates/Dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="Templates/Dashboard/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="Templates/Dashboard/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="Templates/Dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="Templates/Dashboard/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="Templates/Dashboard/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-purple navbar-dark ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
     
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-envelope"></i>
          <span class="badge badge-danger navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         
            <!-- Message Start -->
            
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Inbox
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Mail</a>
        </div>
      </li>

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-question-circle"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">Help Topics</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          <i class="fas fa-columns text-red mr-2"></i>Accounts Overview
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
          <i class="fas fa-clipboard-list text-warning mr-2"></i>Reports Overview
          </a>
      </li>
     
      <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="dropdown" href="#">
      <i class="fas fa-calculator"></i>
 </a>
 <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
 <span class="dropdown-header">Calculator</span> 
                                </li>

      <li class="nav-item dropdown">
      <a class="nav-link" data-toggle="datetimepicker"  data-target="#datetimepicker1">
      <i class="fas fa-calendar" id="datetimepicker1" data-target-input="nearest"></i>
 </a>
 <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
 <span class="dropdown-header">Calendar</span> 
                                </li>
    
    <!-- User Account Menu -->
    <li class="user-menu">
            <!-- Menu Toggle Button -->
            <a class="nav-link" data-toggle="dropdown" href="#">
              <!-- The user image in the navbar-->
              <img src="http://via.placeholder.com/150x150" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"> </p></span>
            </a>
            
 <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <!-- The user image in the menu -->
              <span class="dropdown-header">
                <img src="http://via.placeholder.com/150x150" class="img-circle" alt="User Image">
                <p>
              
                  <small></small>
                </p>
</span>
              
              <!-- Menu Footer-->
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </a>
                <a href="#" class="dropdown-item">
                <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                  </a>
          </li>

                                


 </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-purple elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
  
      <img src="assets/images/qb.png" alt="Logo" 
          class="brand-image">
      <span class="brand-text font-weight-light">QUICKER BOOKS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="http://via.placeholder.com/150x150" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['user']['username'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="layout.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="admin/users/userList.php" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin/users/userList.php" class="nav-link">
                  <i class="fas fa-user-edit nav-icon"></i>
                  <p>View Users</p>
                </a>
              </li>
              <?php if(intval($_SESSION['user']['role_id']) == 1): ?>
              <li class="nav-item">
                <a href="admin/users/userForm.php" class="nav-link">
                  <i class="fas fa-user-edit nav-icon"></i>
                  <p>Add Users</p>
                </a>
                <?php endif; ?>
              </li> 

          <li class="nav-item">
            <a href="chartofaccounts.php" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
               Chart of Accounts
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
               Reports
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-clone"></i>
              <p>
               Event Logs
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update Account</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Quicker Books</a></li>
              <li class="breadcrumb-item"><a href="#">Chart of Accounts</a></li>
              <li class="breadcrumb-item active">Update Account</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
            <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
<ul>
<a href="chartofaccounts.php"><strong>Return to Chart of Accounts</strong></a>
</ul>
<?php
include('connect-quickerbooksdb.php');
 
$accountnumber=$_REQUEST['accountnumber'];
$query = "SELECT * from chartofaccounts where accountnumber='".$accountnumber."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>

<body>
    <style>
input[type=text], select {
  width: 33%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 33%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

</style>

<?php
	require_once 'connect-quickerbooksdb.php';
	
	if(ISSET($_POST['update'])){
		$accountnumber = $_POST['accountnumber'];
		$accountname = $_POST['accountname'];
		$description = $_POST['description'];
		$normalside = $_POST['normalside'];
		$category = $_POST['category'];
		$subcategory = $_POST['subcategory'];
		$comment = $_POST['comment'];

		$update_run = mysqli_query($conn, "UPDATE chartofaccounts SET accountname='$accountname', accountnumber='$accountnumber', description='$description', normalside='$normalside', 
			category='$category', subcategory='$subcategory', comment='$comment'
			WHERE accountnumber='$accountnumber'") or die(mysqli_error());

		if($update_run){ 
			echo "Account was updated successfully."; 
    		} 
    	else { 
    		echo "ERROR: Unable to execute $update. "  
                            . mysqli_error($conn); 
        }  
		mysqli_close($conn); 
	}else {
?>
<div>
<form name="form" method="post" action=""> 

<p><label for="accountname">Account Number : </label><br />
<input name="id" type="hidden" value="<?php echo $row['accountnumber'];?>" />
<input type="text" name="accountnumber" placeholder="Account Number" 
required value="<?php echo $row['accountnumber'];?>" /></p>

<p><label for="accountname">Account Name :</label><br />
<input name="id" type="hidden" value="<?php echo $row['accountname'];?>" />
<input type="text" name="accountname" placeholder="Account Name" 
required value="<?php echo $row['accountname'];?>" /></p>

<p><label for="accountname">Description :</label><br />
<input name="id" type="hidden" value="<?php echo $row['description'];?>" />
<input type="text" name="description" placeholder="Enter a Description" 
value="<?php echo $row['description'];?>" /></p>

<p><label for="accountname">Normal Side :</label><br />
<input name="id" type="hidden" value="<?php echo $row['normalside'];?>" />
<input type="text" name="normalside" placeholder="Normal Side" 
required value="<?php echo $row['normalside'];?>" /></p>

<p><label for="accountname">Category :</label><br />
<input name="id" type="hidden" value="<?php echo $row['category'];?>" />
<input type="text" name="category" placeholder="Category" 
required value="<?php echo $row['category'];?>" /></p>

<p><label for="accountname">Sub-Category :</label><br />
<input name="id" type="hidden" value="<?php echo $row['subcategory'];?>" />
<input type="text" name="subcategory" placeholder="Sub-Category" 
required value="<?php echo $row['subcategory'];?>" /></p>

<p><label for="accountname">Comment :</label><br />
<input name="id" type="hidden" value="<?php echo $row['comment'];?>" />
<input type="text" name="comment" placeholder="Enter a Comment" 
value="<?php echo $row['comment'];?>" /></p>

<p><input name="update" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>