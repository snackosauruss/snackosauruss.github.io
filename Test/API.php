<?php
$name = $_POST['name'];
$key = '0729eade-a6be-4268-b954-48d5e2b80e94'; // i have changed this key
$json = file_get_contents('https://api.hypixel.net/player?key='.$key.'&name='.$name);
$player = json_decode($json, true);
error_reporting(0);
print_r ('Name: '.$player['player']['playername']);
echo '<h3>Aliases:</h3>';
print_r ('0: '.$player['player']['knownAliases']['0'].'<br>');
print_r ('1: '.$player['player']['knownAliases']['1'].'<br>');
print_r ('2: '.$player['player']['knownAliases']['2'].'<br>');
print_r ('3: '.$player['player']['knownAliases']['3'].'<br>');
error_reporting(-1);
echo '<h2>Arcade</h2>';
print_r ('Coins: '.$player['player']['stats']['Arcade']['coins'].'<br>');
print_r ('Wöchentliche Coins: '.$player['player']['stats']['Arcade']['weekly_coins_b'].'<br>');
print_r ('Monatliche Coins: '.$player['player']['stats']['Arcade']['monthly_coins_a'].'<br>');
echo "<h3>Zombies</h3>";
print_r ('Tode: '.$player['player']['stats']['Arcade']['deaths_zombies'].'<br>');
?>