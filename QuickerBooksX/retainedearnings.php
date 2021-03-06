<?php include "Templates/header.php"; ?>
<?php             session_start();
?>
<!DOCTYPE html>
<html>

<head>

    <ul>
        <li><a href="trialbalance.php" name="trialbalanceLink">Trial Balance</a></li>
        <li><a href="incomestatement.php" name="incomestatementLink">Income Statement</a></li>
        <li><a href="balancesheet.php" name="balancesheetLink">Balance Sheet</a></li>
        <li><a href="retainedearnings.php" name="retainedearningsLink">Retained Earnings</a></li>
        <li><a href="index.php" name="home">Return Home</a></li>

    </ul>
    <style>
        body {
            margin: 0;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            position: fixed;
            top: 0;
            width: 100%;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #4CAF50;
        }

        .income-statement {
            width: 70%;
            margin: auto;
            margin-top: 0rem;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        .title-heading {
            background-color: #BA55D3;
            border-radius: 5px;
            color: whitesmoke;
            margin-bottom: 20px;
            padding: 0px;
        }

        .income-statement .income-statement-main-heading {
            font-size: 18px;
            margin-top: 0rem;

        }

        .income-statement .business-name {
            font-size: 26px;
            margin-top: 0rem;
        }

        .income-statement .as-of-date {
            font-size: 16px;
            margin-top: 1rem;
        }

        .income-statement-heading {
            margin-top: 0px;
            margin-left: 50px;
            font-size: 20px;
            color: #BA55D3;
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
        }
        tr:nth-child(even) {background-color: #f2f2f2;
}
    </style>
</head>

<body>
    <div style="padding:20px;margin-top:30px;height:100;"></div>
    <div class="overflow-container col-md-9 col-sm-8 col-xs-12">
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
        $beginningbalance = 0;
        ?>
        <table class="income-statement-table">
          <tbody>
            <tr>
              <td class="subjectTitle">Beginning Balance</td>
              <td class="amount" align="right"><label><?php echo number_format($beginningbalance,2)?>.</label></td>
            </tr>
            <tr>
              <td class="subjectTitle">Net Income</td>
              <td class="amount" align="right"><label><?php  echo "$" . number_format($_SESSION["netinc"],2)?></label></td>
            </tr>
            <tr>
              <td class="subjectTitle">Less Drawings</td>
              <td class="amount" align="right"><label>$0.00</label></td>
            </tr>
            <tr>
              <td class="subjectTitle">Ending Balance</td>
              <td class="amount" align="right"><label class="total"><?php echo "$" . number_format($beginningbalance + $_SESSION["netinc"],2)?></label></td>
            </tr>
          </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
<?php include "Templates/footer.php"; ?>