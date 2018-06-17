<?php
$fruits = ['Apple', 'Banana', 'Lemon', 'Melon'];
echo $fruits[array_rand($fruits)] . "\n";
# Banana
echo $fruits[array_rand($fruits, 1)] . "\n";
# Lemon


