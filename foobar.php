<?php

$START = 1;
$FINISH = 100;

function isDivisibleByThree($x)
{
  return $x % 3 == 0;
}

function isDivisibleByFive($x)
{
  return $x % 5 == 0;
}

function show($message, $index = 1)
{
  global $FINISH; 
  echo $index == $FINISH ? $message : "$message, ";
}

for($i = $START; $i <= $FINISH; $i++)
{
  if (isDivisibleByThree($i) && isDivisibleByFive($i))
  {
    show('foobar', $i);
  }
  elseif (isDivisibleByThree($i))
  {
    show('foo', $i);
  }
  elseif (isDivisibleByFive($i))
  {
    show('bar', $i);
  }
  else
  {
    show($i);
  }
}
