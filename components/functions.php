<?php

// Counting how much the prize money is based on amount of people eliminated
function prizeMoney($players)
{
  $playerWorthWon = 100000000;
  $playerWorthSEK = $playerWorthWon * 0.5;
  return $players * $playerWorthSEK;
}
