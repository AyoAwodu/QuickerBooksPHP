<?php include('config.php'); ?>

<?php
function getCurrentAssets(){
global $conn;
$sql = "SELECT * from chartofaccounts WHERE subcategory ='Current Assets'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $current_assets = 0;
    while ($row = mysqli_fetch_assoc($result)) { 
                $current_assets = $row['balance'] + $current_assets; 
                //echo $current_assets;                  
    }
    }
    return $current_assets;
}

function getCurrentLiabilities(){
global $conn;
$sql = "SELECT * from chartofaccounts WHERE subcategory ='Current Liabilities'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $current_liabilities = 0;
    while ($row = mysqli_fetch_assoc($result)) { 
                $current_liabilities = $row['balance'] + $current_liabilities; 
                //echo $current_assets;                  
    }
}
return $current_liabilities;
}

function getTotalLiabilities(){
    global $conn;
    $sql = "SELECT * from chartofaccounts WHERE category ='Liabilities'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $total_liabilities = 0;
        while ($row = mysqli_fetch_assoc($result)) { 
                    $total_liabilities = $row['balance'] + $total_liabilities; 
                    //echo $current_assets;                  
        }
    }
    return $total_liabilities;
    }

    function getTotalAssets(){
        global $conn;
        $sql = "SELECT * from chartofaccounts WHERE category ='Assets'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $total_assets = 0;
            while ($row = mysqli_fetch_assoc($result)) { 
                        $total_assets = $row['balance'] + $total_assets; 
                        //echo $current_assets;                  
            }
        }
        return $total_assets;
        }

        function getTotalEquity(){
            global $conn;
            $sql = "SELECT * from chartofaccounts WHERE category = 'Equity'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $total_equity = 0;
                while ($row = mysqli_fetch_assoc($result)) { 
                            $total_equity = $row['balance'] + $total_equity; 
                            //echo $current_assets;                  
                }
            }
            return $total_equity;
            }

function getCurrentRatio(){
$current_ratio = 0;
$current_assets = getCurrentAssets();
$current_liabilities = getCurrentLiabilities();
$current_ratio = $current_assets/$current_liabilities;
return number_format($current_ratio,1);
}

function getPrepaidAccounts(){
    global $conn;
    $sql = "SELECT * FROM chartofaccounts
    WHERE accountname LIKE 'prepaid%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $prepaid_bal = 0;
    while ($row = mysqli_fetch_assoc($result)) { 
                $prepaid_bal = $row['balance'] + $prepaid_bal;                  
    }
}
return $prepaid_bal;
}

function getInventoryAccounts(){
    global $conn;
    $sql = "SELECT * FROM chartofaccounts WHERE `order` = '3'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $inventory_bal = 0;
    while ($row = mysqli_fetch_assoc($result)) { 
                $inventory_bal = $row['balance'] + $inventory_bal;                  
    }
}
return $inventory_bal;
}


function getTotalExpenses(){
    global $conn;
    $sql = "SELECT * FROM chartofaccounts WHERE category = 'Expenses'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $total_expenses = 0;
    while ($row = mysqli_fetch_assoc($result)) { 
        $total_expenses = $row['balance'] + $total_expenses;                 
    }
}
return   $total_expenses;
}


function getTotalRevenue(){
    global $conn;
    $sql = "SELECT * FROM chartofaccounts WHERE `order` = '11'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $total_revenue = 0;
    while ($row = mysqli_fetch_assoc($result)) { 
        $total_revenue = $row['balance'] + $total_revenue;                  
    }
}
return $total_revenue;
}


function getQuickRatio(){
    $quick_ratio = 0;
    $current_assets = getCurrentAssets();
    $current_liabilities = getCurrentLiabilities();
    $prepaid_bal = getPrepaidAccounts();
    $inventory_bal = getInventoryAccounts();
    $quick_ratio = ($current_assets - $inventory_bal + $prepaid_bal)/$current_liabilities;
    return number_format($quick_ratio,1);
    }

    function getDebtAssetRatio(){
        $da_ratio = 0;
        $total_assets = getTotalAssets();
        $total_liabilities = getTotalLiabilities();
        $da_ratio = $total_liabilities/$total_assets;

        return number_format($da_ratio, 2);

        }
    
        function getDebtEquityRatio(){
            $de_ratio = 0;
            $total_equity = getTotalEquity();
            $total_liabilities = getTotalLiabilities();
            $de_ratio = $total_liabilities/$total_equity;

            return number_format($de_ratio, 2);

            }

            function getNetIncome(){
                $net_income = 0;             
                $total_revenue = getTotalRevenue();
                $total_expenses = getTotalExpenses();
                $net_income = $total_revenue - $total_expenses;
                return $net_income;
                }


                function getPendingEntries(){
                    global $conn;
                    $result = $conn->query("SELECT * FROM JournalStatus
                    WHERE TranStatus = 'Pending'");
                     $count = $result->num_rows;                  
                     return  $count;
                }
                
                function getTotalEntries(){
                    global $conn;
                    $result = $conn->query("SELECT * FROM JournalStatus");
                     $count = $result->num_rows;                  
                     return  $count;
                }
             
                function getAssetTurnover(){
                    $asset_turnover = 0;             
                    $total_revenue = getTotalRevenue();
                    $total_assets = getTotalAssets();
                    $asset_turnover = $total_revenue/$total_assets;
                    return round($asset_turnover,2);
                }
           
             
                function getAssetReturn(){
                    $asset_ret = 0;             
                    $net_income = getNetIncome();
                    $total_assets = getTotalAssets();
                    $asset_ret = $net_income/$total_assets;
                    return round($asset_ret, 2);
                }

                function getEquityReturn(){
                    $equity_ret = 0;             
                    $net_income = getNetIncome();
                    $total_equity = getTotalEquity();
                    $equity_ret = $net_income/$total_equity;
                    return round($equity_ret, 2);
                }

               
                function getWorkingCapital(){
                    $capital = 0;             
                    $current_assets = getCurrentAssets();
                    $current_liabilities = getCurrentLiabilities();
                    $capital = $current_assets - $current_liabilities;
                    return $capital;
                }

                function getCashTurnover(){
                    $cash_turnover = 0;             
                    $total_revenue = getTotalRevenue();
                    $total_capital = getWorkingCapital();
                    $cash_turnover = $total_revenue/$total_capital;
                    return round($cash_turnover,2);
                }

                function getNetProfitMargin(){
                    $margin = 0;             
                    $total_revenue = getTotalRevenue();
                    $net_income = getNetIncome();
                    $margin = ($net_income/$total_revenue) * 100;
                    return $margin;
                }
                


    ?>