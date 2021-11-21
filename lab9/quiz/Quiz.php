<?php
$firstIn = $_POST["first"];
$secIn = $_POST["sec"];
$thirdIn = $_POST["third"];
$fourIn = $_POST["four"];
$fiveIn = $_POST["five"];

echo ("Question 1: Who invented the telephone?");
echo "<br>";
echo "  You answered: " .$firstIn. "<br>";
echo "  Correct answer: Alexander Graham Bell<br>";

echo ("Question 2: Who was the 3rd president of the U.S.A?");
echo "<br>";
echo "  You answered: " .$secIn. "<br>";
echo "  Correct answer: Thomas Jefferson<br>";

echo ("Question 3: What color is the top of a rainbow?");
echo "<br>";
echo "  You answered: " .$thirdIn. "<br>";
echo "  Correct answer: red<br>";

echo ("Question 4: What is 5 times 5?");
echo "<br>";
echo "  You answered: " .$fourIn. "<br>";
echo "  Correct answer: 25<br>";

echo ("Question 5: Who won the super bowl in 2020?");
echo "<br>";
echo "  You answered: " .$fiveIn. "<br>";
echo "  Correct answer: Kansas City Chiefs<br>";


?>