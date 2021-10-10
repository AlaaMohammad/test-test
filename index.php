<?php
/*
$employees = array('Ayah','Ashraf','Jenan');

echo $employees[1];

$users  = array(
    array('Ahmad','Anas','Abd AlRahman'),
    array('Ayah','Ashraf','Jenan')
);

echo $users[1][1];


echo $employees[0]['name'];

$users = [['name'=>'Anas','salary'=>0.30],['name'=> 'Lubna','salary'=>'shawerma']];
//echo $users[1];
$s_users = sort($users);
print_r($s_users);
var_dump($users);

echo '<ul>';
for($i = 0; $i < count($users);$i++){
  echo '<li>'.$users[$i]['name'].'</li>';
  echo '<li>'.$users[$i]['salary'].'</li>';
}
echo '</ul>';

$ints = [1,2,3,50];
echo max($ints);
echo min($ints);

function anas($salary){
    return 'My name is Anas and my salary' .$salary;
}

echo anas(5);*/

/*$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);*/

$employees = array(['name'=>'Ayah'],['name'=>'Ashraf'],['name'=>'Jenan']);
$employees2 = array(['name'=>'anas'],['name'=>'Ashraf'],['name'=>'Jenan']);
$result = array_uintersect($employees,$employees2,fn($value1,$value2) => strcmp($value1['name'],$value2['name']));

print_r($result);
//print_r($result);