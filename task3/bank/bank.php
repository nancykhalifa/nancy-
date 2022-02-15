<?php
include_once "layouts/header.php";
require_once "layouts/nav.php";
?>


    
        <div class="col-12">
            <div class="card" style="padding: 10px;">
                <div id="card-body">
                    <form method="post">
                        <h2 style="text-align: center;">bank loan system</h2><br>
                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="username">username</label>
                                        <input type="text" name="username" class="form-control">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="amount">amount</label>
                                        <input type="text" name="amount" class="form-control">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="rate">rate</label>
                                        <input type="number" name="rate" class="form-control">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="year">year</label>
                                        <input type="text" name="period" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-4">
                                        <input type="submit" value="calculate" name="check" class="btn btn-info" >
                                </div>
                            </div>
                    </form>

                </div>
            </div>
        </div>
        <?php
        $interest="";
        $total_interest="";
        $total_amount="";
        $return_fund_per_month="";
        $result="";
        
        if (isset($_POST['check'])){
            $name= $_POST['username'];
            $amount=$_POST['amount'];
            $rate=$_POST['rate'];
            $period=$_POST['period'];
            $interest=$rate/100*$amount;
            $total_interest= $rate /100 * $period ;
            $total_amount= $amount+$total_interest;
            $return_fund_per_month=$total_amount / $period;

            if($name&&$interest&&$total_interest&&$total_amount&&$return_fund_per_month){
                $result .= "
                <div class = 'alert alert-success' role = 'alert'>
                <h1>name:$name</h1><br>
                <h1>interest:$interest</h1><br>
                <h1>total interest:$total_interest</h1><br>
                <h1>total amount: $total_amount</h1><br>
                <h1>return fund per month:$return_fund_per_month</h1><br>
                </div>
                ";
            }
            echo $result;

        }
        ?>





<?php
include_once "layouts/footer.php";
require_once "layouts/script.php";
?>