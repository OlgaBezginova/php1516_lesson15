<?php
$x = rand(1, 100);
$y = rand(1, 100);
$z = rand(1, 100);
$a = rand(100, 999);

$sum  = $x + $y;
$mult = $x * $y;
$avg  = ($x + $y + $z) / 3;
$res1 = ($x + 1) - 2 * ($z - 2 * $x + $y);
$mod3 = $x % 3;
$mod5 = $x % 5;
$p30  = $x + $x * 0.3;
$p120 = $x + $x * 1.2;
$res2 = 0.4 * $x + 0.84 * $y;
$res3 = intdiv($a, 100) + intdiv($a, 10) % 10 + $a % 10;
$res4 = $a - $a % 100 + $a % 10;
$res5 = 100 * ($a % 10) + 10 * (intdiv($a, 10) % 10) + intdiv($a, 100);
$res6 = $a % 2 ? 'odd' : 'even';

echo $x . ' + ' . $y . ' = ' . $sum . PHP_EOL;
echo $x . ' * ' . $y . ' = ' . $mult . PHP_EOL;
echo $x . ', ' . $y . ', ' . $z . ' average: ' . $avg . PHP_EOL;
echo '(' . $x . ' + 1) - 2*(' . $z . ' - 2*' . $x . ' + '. $y . ') = ' . $res1 . PHP_EOL;
echo $x . ' % 3 = ' . $mod3 . PHP_EOL;
echo $x . ' % 5 = ' . $mod5 . PHP_EOL;
echo $x . ' + 30% = ' . $p30 . PHP_EOL;
echo $x . ' + 120% = ' . $p120 . PHP_EOL;
echo '40% ' . $x . ' + 84% ' . $y . ' = ' . $res2 . PHP_EOL;
echo $a . ' sum = ' . $res3 . PHP_EOL;
echo $a . ' => ' . $res4 . PHP_EOL;
echo $a . ' => ' . $res5 . PHP_EOL;
echo $a . ' is ' . $res6 . PHP_EOL;
