<?php
error_reporting(0);
$Coins = $_POST['coins'];
print_r ("<head>

<title>".$Coins." - Bank interest calculator</title>
<meta charset='utf-8'>
</head>");
echo '<link rel="stylesheet" href="intereststyle.css">';
?>
<form action="interest.php" method="post">
Coins: <input type="text" name="coins" value="<?php 
if (isset($Coins)) {
    echo $Coins;
}
?>" class="input" />
<input type="submit" value="Berechnen!" class="bberechnen"/>
</form>
<?php
//error_reporting(0);
$Coins = intval($Coins);
//echo $Coins;
echo '<br>';
if (isset($Coins)) {
    if ($Coins < 10000000) {
        $interest = $Coins * 0.02;
    } else {
        if ($Coins < 20000000) {
            $interest = $Coins * 0.01;
        } else {
            if ($Coins < 30000000) {
                $interest = $Coins * 0.005;
            } else {
                if ($Coins < 50000000) {
                    $interest = $Coins * 0.002;
                } else {
                    if ($Coins < 160000000) {
                        $interest = $Coins * 0.001;
                    } else {
                        $interest = $Coins * 0.001;
                    }
                }
            }
        }
    }
    
    
    print_r ("Dein Interest ist im Moment: ".$interest);
}
?>