<?php

declare(strict_types=1);
// Counting how much the prize money is based on amount of people eliminated
function prizeMoney($players)
{
  $playerWorthWon = 100000000;
  return ($players * $playerWorthWon) / 1000000000 . " billion won";
}

function prizeMoneyInSEK($players)
{
  $playerWorthWon = 100000000;
  $wonToSek = 0.0073;
  $playerWorthSEK = $playerWorthWon * $wonToSek;
  return ($players * $playerWorthSEK) / 10000000 . " million SEK";
}

function daysSinceRelease($releaseDate, $todaysDate)
{
  $days = strtotime($todaysDate) - strtotime($releaseDate);
  return abs($days / 86400);
}
