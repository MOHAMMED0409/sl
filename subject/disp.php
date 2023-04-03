<?php
include_once(dirname(__FILE__).'/../config.php');

$query1 = "SELECT file_name FROM upload WHERE class='class2' AND subject='math' AND chapter='chapter1' ";
$result1 = mysqli_query($conn, $query1);

$query2 = "SELECT file_name FROM upload WHERE class='class2' AND subject='math' AND chapter='chapter2' ";
$result2 = mysqli_query($conn, $query2);

$query3 = "SELECT file_name FROM upload WHERE class='class2' AND subject='math' AND chapter='chapter3' ";
$result3 = mysqli_query($conn, $query3);

$query4 = "SELECT file_name FROM upload WHERE class='class2' AND subject='math' AND chapter='chapter4' ";
$result4 = mysqli_query($conn, $query4);

$query5 = "SELECT file_name FROM upload WHERE class='class2' AND subject='english' AND chapter='chapter1' ";
$result5 = mysqli_query($conn, $query5);

$query6 = "SELECT file_name FROM upload WHERE class='class2' AND subject='english' AND chapter='chapter2' ";
$result6 = mysqli_query($conn, $query6);

$query7 = "SELECT file_name FROM upload WHERE class='class2' AND subject='english' AND chapter='chapter3' ";
$result7 = mysqli_query($conn, $query7);

$query8 = "SELECT file_name FROM upload WHERE class='class2' AND subject='english' AND chapter='chapter4' ";
$result8 = mysqli_query($conn, $query8);

$query9 = "SELECT file_name FROM upload WHERE class='class2' AND subject='evs' AND chapter='chapter1' ";
$result9 = mysqli_query($conn, $query9);

$query10 = "SELECT file_name FROM upload WHERE class='class2' AND subject='evs' AND chapter='chapter2' ";
$result10 = mysqli_query($conn, $query10);

$query11 = "SELECT file_name FROM upload WHERE class='class2' AND subject='evs' AND chapter='chapter3' ";
$result11 = mysqli_query($conn, $query11);

$query12 = "SELECT file_name FROM upload WHERE class='class2' AND subject='evs' AND chapter='chapter4' ";
$result12 = mysqli_query($conn, $query12);

$query13 = "SELECT file_name FROM upload WHERE class='class2' AND subject='hindi' AND chapter='chapter1' ";
$result13 = mysqli_query($conn, $query13);

$query14 = "SELECT file_name FROM upload WHERE class='class2' AND subject='hindi' AND chapter='chapter2' ";
$result14 = mysqli_query($conn, $query14);

$query15 = "SELECT file_name FROM upload WHERE class='class2' AND subject='hindi' AND chapter='chapter3' ";
$result15 = mysqli_query($conn, $query15);

$query16 = "SELECT file_name FROM upload WHERE class='class2' AND subject='hindi' AND chapter='chapter4' ";
$result16 = mysqli_query($conn, $query16);

$query17 = "SELECT file_name FROM upload WHERE class='class2' AND subject='computer' AND chapter='chapter1' ";
$result17 = mysqli_query($conn, $query17);

$query18 = "SELECT file_name FROM upload WHERE class='class2' AND subject='computer' AND chapter='chapter2' ";
$result18 = mysqli_query($conn, $query18);

$query19 = "SELECT file_name FROM upload WHERE class='class2' AND subject='computer' AND chapter='chapter3' ";
$result19 = mysqli_query($conn, $query19);

$query20 = "SELECT file_name FROM upload WHERE class='class2' AND subject='computer' AND chapter='chapter4' ";
$result20 = mysqli_query($conn, $query20);

$query21 = "SELECT file_name FROM upload WHERE class='class2' AND subject='arts' AND chapter='chapter1' ";
$result21 = mysqli_query($conn, $query21);

$query22 = "SELECT file_name FROM upload WHERE class='class2' AND subject='arts' AND chapter='chapter2' ";
$result22 = mysqli_query($conn, $query22);

$query23 = "SELECT file_name FROM upload WHERE class='class2' AND subject='arts' AND chapter='chapter3' ";
$result23 = mysqli_query($conn, $query23);

$query24 = "SELECT file_name FROM upload WHERE class='class2' AND subject='arts' AND chapter='chapter4' ";
$result24 = mysqli_query($conn, $query24);

// class3

$query25 = "SELECT file_name FROM upload WHERE class='class3' AND subject='math' AND chapter='chapter1' ";
$result25 = mysqli_query($conn, $query25);

$query26 = "SELECT file_name FROM upload WHERE class='class3' AND subject='math' AND chapter='chapter2' ";
$result26 = mysqli_query($conn, $query26);

$query27 = "SELECT file_name FROM upload WHERE class='class3' AND subject='math' AND chapter='chapter3' ";
$result27 = mysqli_query($conn, $query27);

$query28 = "SELECT file_name FROM upload WHERE class='class3' AND subject='math' AND chapter='chapter4' ";
$result28 = mysqli_query($conn, $query28);

$query29 = "SELECT file_name FROM upload WHERE class='class3' AND subject='english' AND chapter='chapter1' ";
$result29 = mysqli_query($conn, $query29);

$query30 = "SELECT file_name FROM upload WHERE class='class3' AND subject='english' AND chapter='chapter2' ";
$result30 = mysqli_query($conn, $query30);

$query31 = "SELECT file_name FROM upload WHERE class='class3' AND subject='english' AND chapter='chapter3' ";
$result31 = mysqli_query($conn, $query31);

$query32 = "SELECT file_name FROM upload WHERE class='class3' AND subject='english' AND chapter='chapter4' ";
$result32 = mysqli_query($conn, $query32);

$query33 = "SELECT file_name FROM upload WHERE class='class3' AND subject='evs' AND chapter='chapter1' ";
$result33 = mysqli_query($conn, $query33);

$query34 = "SELECT file_name FROM upload WHERE class='class3' AND subject='evs' AND chapter='chapter2' ";
$result34 = mysqli_query($conn, $query34);

$query35 = "SELECT file_name FROM upload WHERE class='class3' AND subject='evs' AND chapter='chapter3' ";
$result35 = mysqli_query($conn, 35);

$query36 = "SELECT file_name FROM upload WHERE class='class3' AND subject='evs' AND chapter='chapter4' ";
$result36 = mysqli_query($conn, $query36);

$query37 = "SELECT file_name FROM upload WHERE class='class3' AND subject='hindi' AND chapter='chapter1' ";
$result37 = mysqli_query($conn, $query37);

$query38 = "SELECT file_name FROM upload WHERE class='class3' AND subject='hindi' AND chapter='chapter2' ";
$result38 = mysqli_query($conn, $query38);

$query39 = "SELECT file_name FROM upload WHERE class='class3' AND subject='hindi' AND chapter='chapter3' ";
$result39 = mysqli_query($conn, $query39);

$query40 = "SELECT file_name FROM upload WHERE class='class3' AND subject='hindi' AND chapter='chapter4' ";
$result40 = mysqli_query($conn, $query40);

$query45 = "SELECT file_name FROM upload WHERE class='class3' AND subject='computer' AND chapter='chapter1' ";
$result45 = mysqli_query($conn, $query45);

$query46 = "SELECT file_name FROM upload WHERE class='class3' AND subject='computer' AND chapter='chapter2' ";
$result46 = mysqli_query($conn, $query46);

$query47 = "SELECT file_name FROM upload WHERE class='class3' AND subject='computer' AND chapter='chapter3' ";
$result47 = mysqli_query($conn, $query47);

$query48 = "SELECT file_name FROM upload WHERE class='class3' AND subject='computer' AND chapter='chapter4' ";
$result48 = mysqli_query($conn, $query48);

$query49 = "SELECT file_name FROM upload WHERE class='class3' AND subject='arts' AND chapter='chapter1' ";
$result49 = mysqli_query($conn, $query49);

$query50 = "SELECT file_name FROM upload WHERE class='class3' AND subject='arts' AND chapter='chapter2' ";
$result50 = mysqli_query($conn, $query50);

$query51 = "SELECT file_name FROM upload WHERE class='class3' AND subject='arts' AND chapter='chapter3' ";
$result51 = mysqli_query($conn, $query51);

$query52 = "SELECT file_name FROM upload WHERE class='class3' AND subject='arts' AND chapter='chapter4' ";
$result52 = mysqli_query($conn, $query52);

$query53 = "SELECT file_name FROM upload WHERE class='class3' AND subject='social' AND chapter='chapter1' ";
$result53 = mysqli_query($conn, $query53);

$query54 = "SELECT file_name FROM upload WHERE class='class3' AND subject='social' AND chapter='chapter2' ";
$result54 = mysqli_query($conn, $query54);

$query55 = "SELECT file_name FROM upload WHERE class='class3' AND subject='social' AND chapter='chapter3' ";
$result55 = mysqli_query($conn, $query55);

$query56 = "SELECT file_name FROM upload WHERE class='class3' AND subject='social' AND chapter='chapter4' ";
$result56 = mysqli_query($conn, $query56);

$query57 = "SELECT file_name FROM upload WHERE class='class3' AND subject='science' AND chapter='chapter1' ";
$result57 = mysqli_query($conn, $query57);

$query58 = "SELECT file_name FROM upload WHERE class='class3' AND subject='science' AND chapter='chapter2' ";
$result58 = mysqli_query($conn, $query58);

$query59 = "SELECT file_name FROM upload WHERE class='class3' AND subject='science' AND chapter='chapter3' ";
$result59 = mysqli_query($conn, $query59);

$query60 = "SELECT file_name FROM upload WHERE class='class3' AND subject='science' AND chapter='chapter4' ";
$result60 = mysqli_query($conn, $query60);
?>