<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <!-- Title will be dynamically set for each page -->
    <title><?php echo $pageTitle; ?></title>
    <style>
    /* Breadcrumb  */
        .breadcrumb {
            margin: 10px 0;
            font-size: 16px;
            font-weight: bold;
        }
        
    </style>
    
</head>
<body>
    <h1><a href="http://solace.ist.rit.edu/~btb4516/ISTE240/final/index.php"><?php echo $welcometitle; ?></a></h1>
    
    <hr>
    <nav class="dropdown">
        <ul>
            <li>
                <!-- Use what I learn in class -->
                <a href="#">Home </a> 
                <ul class="submenu">
                    <li> <a href="http://solace.ist.rit.edu/~btb4516/ISTE240/final/index.php">General Information</a></li>
                    <li> <a href="http://solace.ist.rit.edu/~btb4516/ISTE240/final/citation/index.php">Citation</a></li>
                </ul>
            </li>
            <!-- I will use this as the seperator -->
            <li> | </li>

            <li>
                <a href="#">What to Do?</a> 
                <ul class="submenu">
                    <li><a href="http://solace.ist.rit.edu/~btb4516/ISTE240/final/placetovisit/britishmuseum/index.php">The British Museum</a></li>
                    <li><a href="http://solace.ist.rit.edu/~btb4516/ISTE240/final/placetovisit/tower/index.php">The Tower of London</a></li>
                    <li><a href="http://solace.ist.rit.edu/~btb4516/ISTE240/final/placetovisit/palace/index.php">Buckingham Palace</a></li>
                    <li><a href="http://solace.ist.rit.edu/~btb4516/ISTE240/final/placetovisit/bigben/index.php">The Houses of Parliament and Big Ben</a></li>
                </ul>
            </li>
            <li> | </li>
            <!-- Use my food place that I have search up-->
            <li>
                <a href="#">What to Eat?</a> 
                <ul class="submenu">
                    <li> <a href="http://solace.ist.rit.edu/~btb4516/ISTE240/final/whattoeat/st.john/index.php">British: St. John</a></li>
                    <li> <a href="http://solace.ist.rit.edu/~btb4516/ISTE240/final/whattoeat/cecilia/index.php">Café Cecilia</a></li>
                    <li> <a href="http://solace.ist.rit.edu/~btb4516/ISTE240/final/whattoeat/quovadis/index.php">Quo Vadis</a></li>
                </ul>
            </li>
            <li> | </li>
            <li>
                <!-- Use hotel that i look up from just google-->
                <a href="#">Where to Stay </a> 
                <ul class="submenu">
                    <li> <a href="http://solace.ist.rit.edu/~btb4516/ISTE240/final/stay/melia/index.php">Melia London Kensington a Melia Collection Hotel</a></li>
                    <li> <a href="http://solace.ist.rit.edu/~btb4516/ISTE240/final/stay/emberlocke/index.php">Ember Locke</a></li>
                    <li> <a href="http://solace.ist.rit.edu/~btb4516/ISTE240/final/stay/millennium/index.php">Millennium Hotel London Knightsbridge</a></li>
                </ul> 
            </li>
            <li> | </li>
            <li>
                <!-- Use hotel that i look up from just google-->
                <a href="#">Comments </a> 
                <ul class="submenu">
                    <li> <a href="http://solace.ist.rit.edu/~btb4516/ISTE240/final/comments/comments.php">Comments</a></li>
                </ul> 
            </li>
        </ul>       
    </nav>
    
    <!-- Breadcrumb for indicating page hierarchy -->
    <div class="breadcrumb">
        <a href="http://solace.ist.rit.edu/~btb4516/ISTE240/final/index.php">Home</a> &raquo; 
        <!-- Add dynamic breadcrumb for the subpage -->
        <?php echo $pageTitle; ?>
    </div>