<?php
echo '<link rel="stylesheet" href="Style.css">';
echo "<button onclick='location.reload();' class='reloadbutton'>Neu laden</button>";
echo "<script>function Sleep(milliseconds) {
    return new Promise(resolve => setTimeout(resolve, milliseconds));
 }</script>";
$test = $_GET['Test'];
if ($test == '') {
   $test = 'standart';
}
echo $test;

$name = 'Snackosaurus';
$profile = 'fb46f13017514d568fb8cb87bef82a44';
$key = '0729eade-a6be-4268-b954-48d5e2b80e94'; 
$eliprofile = '3505c07e5a5b4bc18b121be167154c25';
$skyblock = file_get_contents('https://api.hypixel.net/skyblock/profile?key='.$key.'&profile='.$profile);
$playersb = json_decode($skyblock, true);
$normal = file_get_contents('https://api.hypixel.net/player?key='.$key.'&name='.$name);
$playern = json_decode($normal, true);
$skyblockeli = file_get_contents('https://api.hypixel.net/skyblock/profile?key='.$key.'&profile='.$eliprofile);
$playereli = json_decode($skyblockeli, true);
$Snackosaurusid = 'a5c28377014346d19f06aeeb860cec84';
$Eliasid = '3505c07e5a5b4bc18b121be167154c25';
//print_r ($player);
//print_r ($playereli);
echo '<h1> Skyblock </h1><br>';

echo '<h1>Coins</h1>';

print_r ('Snackosaurus: '.$playersb['profile']['members']['a5c28377014346d19f06aeeb860cec84']['coin_purse']);
echo '<br>';
print_r ('xXElias_1337Xx: '.$playersb['profile']['members']['3505c07e5a5b4bc18b121be167154c25']['coin_purse']);
echo '<h1>Stats</h1>';

echo '<h2>Snackosaurus</h2>';

print_r ('Tode gesamt: '.$playersb['profile']['members'][$Snackosaurusid]['stats']['deaths']);
echo '<br>';
print_r ('Tode durch Void: '.$playersb['profile']['members'][$Snackosaurusid]['stats']['deaths_void'].'<br>');
print_r ('Kills: '.$playersb['profile']['members'][$Snackosaurusid]['stats']['kills'].'<br>');
echo('Kd: ');
$snackosauruskd1 = $playersb['profile']['members'][$Snackosaurusid]['stats']['deaths'] + $playersb['profile']['members'][$Snackosaurusid]['stats']['kills'];
$snackosauruskd2 = $snackosauruskd1 / 2;
echo $snackosauruskd2;
echo '<br>';
print_r ('Höchster Crit-Damage: '.$playersb['profile']['members'][$Snackosaurusid]['stats']['highest_crit_damage'].'<br>');
print_r ('Beste Zeit Ende Race: '.$playersb['profile']['members'][$Snackosaurusid]['stats']['end_race_best_time'].'<br>');
echo '<h3>Fairy Souls</h3>';
print_r ('Gesammelte Fairy Souls: '.$playersb['profile']['members'][$Snackosaurusid]['fairy_souls_collected'].'<br>');
print_r ('Fairy Souls im Inventar: '.$playersb['profile']['members'][$Snackosaurusid]['fairy_souls'].'<br>');
print_r ('Täusche mit Fairy Souls: '.$playersb['profile']['members'][$Snackosaurusid]['fairy_exchanges'].'<br>');
echo '<h3>Xp</h3>';
print_r ('Xp Runecrafting: '.$playersb['profile']['members'][$Snackosaurusid]['experience_skill_runecrafting'].'<br>');
print_r ('Xp Combat: '.$playersb['profile']['members'][$Snackosaurusid]['experience_skill_combat'].'<br>');
print_r ('Xp Mining: '.$playersb['profile']['members'][$Snackosaurusid]['experience_skill_mining'].'<br>');
echo '<br><br>';

echo '<h2>Elias (Co-op)</h2>';

print_r ('Tode gesamt: '.$playersb['profile']['members'][$Eliasid]['stats']['deaths']);
echo '<br>';
print_r ('Tode durch Void: '.$playersb['profile']['members'][$Eliasid]['stats']['deaths_void'].'<br>');
print_r ('Kills: '.$playersb['profile']['members'][$Eliasid]['stats']['kills'].'<br>');
echo('Kd: ');
$eliaskd1 = $playersb['profile']['members'][$Eliasid]['stats']['deaths'] + $playersb['profile']['members'][$Eliasid]['stats']['kills'];
$eliaskd2 = $eliaskd1 / 2;
echo $eliaskd2;
echo '<br>';
print_r ('Höchster Crit-Damage: '.$playersb['profile']['members'][$Eliasid]['stats']['highest_crit_damage'].'<br>');
//print_r ('Beste Zeit Ende Race: '.$playersb['profile']['members'][$Eliasid]['stats']['end_race_best_time'].'<br>');
echo '<h3>Fairy Souls</h3>';
print_r ('Gesammelte Fairy Souls: '.$playersb['profile']['members'][$Eliasid]['fairy_souls_collected'].'<br>');
print_r ('Fairy Souls im Inventar: '.$playersb['profile']['members'][$Eliasid]['fairy_souls'].'<br>');
print_r ('Täusche mit Fairy Souls: '.$playersb['profile']['members'][$Eliasid]['fairy_exchanges'].'<br>');

echo '<h2>Elias (Normal)</h2>';

print_r ('Tode gesamt: '.$playereli['profile']['members'][$Eliasid]['stats']['deaths']);
echo '<br>';
print_r ('Tode durch Void: '.$playereli['profile']['members'][$Eliasid]['stats']['deaths_void'].'<br>');
print_r ('Kills: '.$playereli['profile']['members'][$Eliasid]['stats']['kills'].'<br>');
echo('Kd: ');
$snackosauruskd1 = $playereli['profile']['members'][$Eliasid]['stats']['deaths'] + $playereli['profile']['members'][$Eliasid]['stats']['kills'];
$snackosauruskd2 = $snackosauruskd1 / 2;
echo $snackosauruskd2;
echo '<br>';
print_r ('Höchster Crit-Damage: '.$playereli['profile']['members'][$Eliasid]['stats']['highest_crit_damage'].'<br>');
print_r ('Beste Zeit Ende Race: '.$playereli['profile']['members'][$Eliasid]['stats']['end_race_best_time'].'<br>');
echo '<h3>Fairy Souls</h3>';
print_r ('Gesammelte Fairy Souls: '.$playereli['profile']['members'][$Eliasid]['fairy_souls_collected'].'<br>');
print_r ('Fairy Souls im Inventar: '.$playereli['profile']['members'][$Eliasid]['fairy_souls'].'<br>');
print_r ('Täusche mit Fairy Souls: '.$playereli['profile']['members'][$Eliasid]['fairy_exchanges'].'<br>');
echo '<h3>Xp</h3>';
print_r ('Xp Runecrafting: '.$playereli['profile']['members'][$Eliasid]['experience_skill_runecrafting'].'<br>');
print_r ('Xp Combat: '.$playereli['profile']['members'][$Eliasid]['experience_skill_combat'].'<br>');
print_r ('Xp Mining: '.$playereli['profile']['members'][$Eliasid]['experience_skill_mining'].'<br>');
echo '<br><br>';
echo '<h3>Xp</h3>';
//print_r ('Xp Runecrafting: '.$playersb['profile']['members'][$Eliasid]['experience_skill_runecrafting'].'<br>');
//print_r ('Xp Combat: '.$playersb['profile']['members'][$Eliasid]['experience_skill_combat'].'<br>');
//print_r ('Xp Mining: '.$playersb['profile']['members'][$Eliasid]['experience_skill_mining'].'<br>');
echo '<h1> Zeiten </h1>';
echo '<h2> Snackosaurus </h2>';

echo "<script>async function test() {
    await Sleep(60000);
    location.reload();
 }
 test();</script>";
 $firstloginrs = $playern['player']['firstLogin'];
 $firstlogins = gmdate("d-m-y\TH:i:s\Z", $firstloginrs);
 print_r ('Erster Login: '.$firstlogins.'<br>');
 print_r (gmdate("d-m-y\TH:i:s\Z", '01333699439'));
?>