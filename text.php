<?php echo "Ibrahim Kholil";
echo "\n";
 $fistName = "Ibrahim";
 $lastName = "Kholilullah";
 echo "$fistName $lastName"
?>

<?php 
$fname = "Ibrahim";
$Lname = "Kholilullah";

printf("My %s Name is %s %s","Full", $fname, $Lname) ?>

<?php $number = 1;
// $number1 = $number++;
$number3 = ++$number;
echo "$number,  $number3";

?>

<?php
$o = 89898;
$d = 84378349;
printf("Print The Octal Number %x is %d", $o, $d) // argument
?>

<!-- Printf Function try  -->

<?php 
$fName = "Ibrahim Kholilulah";
$lName = "Mia";
$threeName = "Name Nai to ki Hoise";
printf('The name is %2$s  %3$s  %1$s', $fName, $lName, $threeName);
echo "\n";
printf('The Binary equivalent of %1$b %1$o', 23);
echo "\n";
$numberOne = 34765.89634987;
printf("The last Number is a %.2f", $numberOne);
echo  "\n";
$m = 367987.8788548;

printf ("The Four Number is a %06d", $m);
echo "\n";

printf("The last name is a %09.2f ", $m)

?>

<?php 

$fname = "Inrahim Kholilullah";
$lName = "Tomer name ki vai";
// return value Php 
$subject = sprintf ("The Return Value is %s %s", $fName, $lName);

echo $subject;

?>


<?php
$year = 2027;

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "This is a leap year.";
} else {
    echo "This is not a leap year.";
}
?>

<?php
$year = 2004;
if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
    echo "The is a leap Year.";
}else {
    echo ("The Not leap year.");
}
echo "\n"
?>
<?php 
// ternary operator
$numberOneTheHere = 2021;
$resultOfTheNumber = $numberOneTheHere % 2 == 0 ? "Ibrahim" : "kholil";
echo $resultOfTheNumber;
?>