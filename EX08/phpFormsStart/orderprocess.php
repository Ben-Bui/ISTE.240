<?php
	$path = "./";
	$page = "Order Confirmation";
	include($path . "assets/inc/header.php")
?>
    <div id ="container">
        <?php
            // echo "Customer Name: " . $_POST['customerName'] . "<br/>"; 
            // echo "Customer ID: " . $_POST['customerID'] . "<br/>";
            // echo "Pizza Size: " . $_POST['pizzaSize'] . "<br/>";

            $customerName = $_POST['customerName'];
            $customerID = $_POST['customerID'];
            $pizzaSize = $_POST['pizzaSize'];
            $topping =$_POST['topping'];
            
            // If they put in a customer ID
            if( !empty($customerID)){
                if(is_numeric($customerID)){
                    switch($pizzaSize){
                        case 'P':
                            $pizzaCost = 7.99;
                            $pizzaType = "Personal";
                            break;
                        case 'S':
                            $pizzaCost = 10.99;
                            $pizzaType = "Small";
                            break;
                        case 'M':
                            $pizzaCost = 13.99;
                            $pizzaType = "Medium";
                            break;                  
                        case 'L':
                            $pizzaCost = 16.99;
                            $pizzaType = "Personal";
                            break;
                        default:
                            $pizzaCost = 13.99;
                            $pizzaType = "Medium";
                    }
                    switch($topping){
                        case 'no':
                            $toppingCost = 0;
                            $toppingamount = "no";
                            break;
                        case 'one':
                            $toppingCost = 2.00;
                            $toppingamount = "one";
                            break;
                        case 'two':
                            $toppingCost = 3.00;
                            $toppingamount = "two";
                            break;                  
                        case 'three':
                            $toppingCost = 3.75;
                            $toppingamount = "three";
                            break;
                    }
        
                    $taxAmount = $pizzaCost * .094;
                    $total = $pizzaCost + $taxAmount + $toppingCost;
        
                    $fmt = numfmt_create('en_US', NumberFormatter::CURRENCY);
                    $pizzaCost = numfmt_format_currency($fmt, $pizzaCost, "USD");
                    $taxAmount = numfmt_format_currency($fmt, $taxAmount, "USD");
                    $toppingCost = numfmt_format_currency($fmt, $toppingCost, "USD");

                    echo "Pizza Size: " . $pizzaType . "</br>";
                    echo "Pizza Price: " . $pizzaCost . "</br>";
                    echo "Topping Price:" . $toppingCost . "</br>";
                    echo "Tax Amount: " . $taxAmount . "</br>";
                    echo "Total Cost of your order: " . numfmt_format_currency($fmt, $total, "USD") . "</br>";
        
                    echo "Thanks, " . $customerName . " for your order.<br/>";
                    echo "Customer ID:" . $customerID;
                    

                }else{
                    header("Location: orderform.php?name=" . $customerName);
                    echo "Your ID is not numeric!";
                }
            }else{

                header("Location: orderform.php?=" . $customerName);
                echo " You forgot to put an ID dummy!";
            }
            ?>
            
    

    </div>

<?php
	include($path . "assets/inc/footer.php")
?>