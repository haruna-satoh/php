<?php
$a = 5;

if ($a === 5) {
echo "\$aは5です";
}
?>

<?php
$a = 7;

if ($a === 5){
echo "\$aは5です";
}else{
echo "\$aは5以外です";
}
?>

<?php
$a = 7;
if ($a === 5) {
echo "\$aは5です";
}elseif ($a === 7) {
echo "\$aは7です";
}else {
echo "\$aは5と7以外です";
}
?>

<?php
$people = "Saburo";

switch ($people) {
    case "Taro":
    echo "太郎です";
    break;
    case "Jiro":
    echo "次郎です";
    break;
    default:
    echo "三郎です";
    break;
}
?>

<?php
$a = 7;
$b = ($a > 5) ? "TRUE" : "FALSE";
echo $b;