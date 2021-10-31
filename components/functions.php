<?php

declare(strict_types=1);
// Counting how much the prize money is based on amount of people eliminated
function prizeMoney($players)
{
  $playerWorthWon = 100000000;
  $playerWorthSEK = $playerWorthWon * 0.5;
  return $players * $playerWorthSEK;
}

function daysSinceRelease($releaseDate, $todaysDate)
{
  $days = strtotime($todaysDate) - strtotime($releaseDate);
  return abs($days / 86400);
}

$releaseDate = "2021-09-17";
$todaysDate = date('y-m-d');

echo daysSinceRelease($releaseDate, $todaysDate);
