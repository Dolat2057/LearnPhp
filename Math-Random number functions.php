<?php
//rand(min,max)
//mt_rand (min,max) this is the advance veersion of rand and mt means Mersenne Twister algorithm
//mt_rand is four times faster than rand function
//lcg_value()


echo(rand()."<br>");
echo(rand()."<br>");

echo(rand(0,20)."<br>");

echo(mt_rand(10,20)."<br>");

echo(lcg_value()."<br>");






?>