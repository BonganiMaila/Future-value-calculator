<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Links-->
    <link rel="stylesheet" href="../Discount calculator 2/CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Discount calculator</title>
</head>
<body>

<div id="content">
<h1>Future value calculator</h1>
        <?php if (!empty($error_message)) {?>
            <p class="error"><?php echo $error_message;?></p>
        <?php }?>
        <!--Form-->

        <form action="../Discount calculator 2/php files/display.php" method="POST">
            <div id="data">
            <!--Input boxes-->
                <label for="">Investment amount:</label>
                <input type="text" name="investment" value="<?php echo $investment;?>"><br/>
                <label for="">Yearly interest rate:</label>
                <input type="text" name="interest_rate" value="<?php echo $interest_rate;?>"><br/>
                <label for="">Number of years</label>
                <input type="text" name="years" value="<?php echo $years;?>"><br/>
                
            </div>
            <!--Button -->
            <div id="button">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate">
            </div> 
        </form>
</div>
    

    <!--Links-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>