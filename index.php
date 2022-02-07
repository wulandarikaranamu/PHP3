<!-- belajar perulangan di php -->
<?php
// while loop
$i = 6;
while ($i >=3) {
echo "$i"."</br>";
$i--; 
}
echo "<br>";

// forloop
for($i =1;$i <=4;$i++){
	echo "$i"."</br>";
}
echo "<br>";

$i = 5;
while ($i <=6) {
echo "$i"."</br>";
--$i; 
}
echo "<br>";

for($i =1;$i <=4;++$i){
	echo "$i"."</br>";
}
//$i--  decrement mengurangi variabel sebanyak 1 angka
//$i++  increment menambah variabel sebanyak 1 angka. 
// increment dan decrement inilah yang digunakan dalam perulangan pada php
// --$i kurang nilai sebanyak 1x, lalu kirim $i
// ++$i tambah nilai sebanyak 1x, lalu kirim $i