<?php
  function gradeCalculate($x){
    $y = $x*20;
    return $y;
  }
  $q1 = $_POST["Quiz1"];
  $q2 = $_POST["Quiz2"];
  $q3 = $_POST["Quiz3"];
  $q4 = $_POST["Quiz4"];
  $q5 = $_POST["Quiz5"];

  $right = 0;

  if($q1 == "KC")
  {
     $right++;
  }
  if($q2 == "448")
  {
     $right++;
  }
  if($q3 == "Trump")
  {
     $right++;
  }
  if($q4 == "Musk")
  {
     $right++;
  }
  if($q5 == "Fire")
  {
     $right++;
  }
  echo "<h3>Final Grade:</h3>";
  echo "<p>$right/5</p>";
  echo "<p>".percent($right)."%</p>";
?>
