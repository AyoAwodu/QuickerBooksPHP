<?php include('../../config.php'); ?>
<?php include(INCLUDE_PATH . '/logic/common_functions.php') ?>
<?php include(ROOT_PATH . '/admin/users/userLogic.php'); ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RETAINED EARNINGS :: QUICKER BOOKS</title>
    <?php include('../../header.php') ?>
    <style>
        body {
            margin: 0;
        }
    
        .income-statement {
            width: 90%;
            margin: auto;
            margin-top: 2rem;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
        .title-heading {
            background-color: #6f42c1;
            border-radius: 5px;
            color: whitesmoke;
            margin-bottom: 20px;
            padding: 10px;
        }
        .income-statement .income-statement-main-heading {
            font-size: 18px;
            margin-top: 0rem;
            color: white;
        }
        .income-statement .business-name {
            font-size: 26px;
            margin-top: 0rem;
            color: white;
        }
        .income-statement .as-of-date {
            font-size: 16px;
            margin-top: 0rem;
            color: white;
        }
        .income-statement-heading {
            margin-top: 0px;
            margin-left: 50px;
            font-size: 20px;
            color: #6f42c1;
            text-decoration: underline;
            text-align:left;
        }
        .accountNameCol {
            width: 80%;
        }
        .debitCol,
        .creditCol {
            min-width: 10rem;
        }
        .subtotal {
            text-decoration: overline underline;
        }
        .total {
            text-decoration: overline;
            padding-bottom: 1px;
            border-bottom: double 5px;
        }
        .income-statement-table {
            width: 90%;
        }
        .income-statement th,
        td {
            padding: 8px;
        }
        
        tr:nth-child(even) {background-color: #f2f2f2;
        }
        .print {
  display: block;
  width: 5%;
  border: none;
  background-color: #6f42c1;
  color: white;
  padding: 15px 10px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  position:absolute;
  left: 915px;
  top: 175px;

}
    </style>

    
    
        
	  
  </head>
  
  <body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<script>
function printDiv() { 
            document.getElementById("print").style.display = "none";
            window.print();
            document.getElementById("print").style.display = "";
        } 
</script>
<?php include('../../navigation.php') ?>



<!-- Sidebar Menu -->
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../../layout.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="../../admin/users/userList.php" class="nav-link">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../admin/users/userList.php" class="nav-link">
                  <i class="fas fa-user-edit nav-icon"></i>
                  <p>View Users</p>
                </a>
              </li>
              <?php if(intval($_SESSION['user']['role_id']) == 1): ?>
              <li class="nav-item">
                <a href="../../admin/users/userForm.php" class="nav-link">
                  <i class="fas fa-user-edit nav-icon"></i>
                  <p>Add Users</p>
                </a>
                <?php endif; ?>
              </li>              
              </ul>
          </li>
          
          <?php if(intval($_SESSION['user']['role_id']) == 2 || intval($_SESSION['user']['role_id']) == 3): ?>
          <li class="nav-item has-treeview menu-open">
                    <a href="../../Journalizing.php" class="nav-link">
                        <i class="nav-icon fas fa-book"></i> 
                        <p>
                            Journalizing
                          <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="../../Journalizing.php" class="nav-link">
                        <i class="nav-icon fas fa-book-open"></i>
                        <p>
                            Create Journal Entry
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../../ListFiles2.php" class="nav-link">
                        <i class="nav-icon fas fa-book-reader"></i>
                        <p>
                            View Journal
                        </p>
                    </a>
                </li>
                </ul>
              <?php endif; ?>
          </li>
          <li class="nav-item">
            <a href="../../admin/accounts/accountsList.php" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
               Accounts
              </p>
            </a>
          </li>
          <?php if(intval($_SESSION['user']['role_id']) == 2 || intval($_SESSION['user']['role_id']) == 3): ?> 
          <li class="nav-item has-treeview menu-open">
            <a href="" class="nav-link active">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
               Reports
               <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          <!--</li>-->
			<ul class="nav nav-treeview">
      <li class="nav-item">
                <a href="../../admin/reports/balancesheet.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Balance Sheet</p>
                </a>
              </li> 
			<li class="nav-item">
                <a href="../../admin/reports/retearnings.php" class="nav-link active">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Retained Earnings</p>
                </a>
              </li> 
			<li class="nav-item">
                <a href="../../admin/reports/incomestatement.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Income Statement</p>
                </a>
              </li> 
			<li class="nav-item">
                <a href="../../admin/reports/trialbalance.php" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Trial Balance</p>
                </a>
              </li>              
              </ul>
              <?php endif; ?>
          </li>
          <li class="nav-item">
            <a href="../../ViewLogs.php" class="nav-link">
              <i class="nav-icon fas fa-clone"></i>
              <p>
               Event Logs
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../admin/mailbox/email.php" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
               Email
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
            <h1 class="m-0 text-dark">Retained Earnings</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../layout.php">Quicker Books</a></li>
              <li class="breadcrumb-item active">Retained Earnings</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <button class = "print" id = "print" onclick="printDiv()">Print</button>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
    <div style="padding:20px;margin-top:30px;height:100;"></div>
    <div class="container col-md-9 col-sm-8 col-xs-12">
        <div class="income-statement" style="">
            <div class="text-center title-heading">
                <div class="business-name" align = "center">Addams & Family Inc.</div>
                <div class="income-statement-main-heading" align = "center">Retained Earnings</div>
                <div class="as-of-date " align = "center"><?php echo "<p align=center>For the Period Ending " . date("F jS, Y") . "<br></p>"; ?></div>
            </div>

            <div class="tableWrapper">
                <table class="table income-statement-table">
                <thead>
            <tr>
              <th class="accountNameCol"></th>
              <th class="debitCol"></th>
              <th class="creditCol" align = "right">Total Amount</th>
            </tr>
          </thead>
          <tbody>
            <tr></tr>
          </tbody>
        </table>
      </div>
      <div class="tableWrapper">
        
        
      <?php

$sql = "SELECT * from chartofaccounts WHERE category ='Revenue'";
$result = $conn->query($sql);

$totalrevenue = 0.00;
$beginningbalance = 0.00;
$dollarsign = 0;
while ($row = mysqli_fetch_assoc($result)) { ?>


<?php
$totalrevenue = $row["balance"] + $totalrevenue;
// $_SESSION["totalrev"] = $totalrevenue["totalrev"];
}

?>
<?php

$sql = "SELECT * from chartofaccounts WHERE category ='Expenses'";
$result = $conn->query($sql);

$totalexpenses = 0.00;
$dollarsign = 0;
while ($row = mysqli_fetch_assoc($result)) { ?>


<?php
$totalexpenses = $row["balance"] + $totalexpenses;
$netincome = $totalrevenue - $totalexpenses;

// $_SESSION["totalrev"] = $totalrevenue["totalrev"];
}

?>
<?php

$sql = "SELECT * from chartofaccounts WHERE balance <'0'";
$result = $conn->query($sql);

$lessincome = 0.00;
$dollarsign = 0;
while ($row = mysqli_fetch_assoc($result)) { ?>


<?php
$lessincome = $row["balance"] + $lessincome;

// $_SESSION["totalrev"] = $totalrevenue["totalrev"];
}

?>
        <table class="income-statement-table">
          <tbody>
            <tr>
              <td class="subjectTitle">Beginning Balance</td>
              <td class="amount" align="right"><?php echo "$" . number_format($beginningbalance,2)?></td>
            </tr>
            <tr>
              <td class="subjectTitle">Net Income</td>
              <td class="amount" align="right"><?php  echo "$" . number_format($netincome,2)?></td>
            </tr>
            <tr>
              <td class="subjectTitle">Less Drawings</td>
               
              <td class="amount" align="right"><?php echo "(". number_format(abs($lessincome),2). ")"?></td>
            </tr>
            <tr>
              <td class="subjectTitle">Ending Balance</td>
              <td class="amount" align="right"><label class="total"><?php echo "$" . number_format(($beginningbalance + $netincome + $lessincome),2)?></label></td>
            </tr>
          </tbody>
                </table>
            </div>
        </div>
    </div>


  
                
<script type="text/javascript" src="assets/js/display_profile_image.js"></script>
<?php include('../../footer.php') ?>    
  </body>
</html>