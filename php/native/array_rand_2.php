<?php
$fruits = ['Apple', 'Banana', 'Lemon', 'Melon'];
$rand_keys = array_rand($fruits, 3);
print_r( $rand_keys );
echo $fruits[$rand_keys[0]] . "\n";
echo $fruits[$rand_keys[1]] . "\n";
echo $fruits[$rand_keys[2]] . "\n";
