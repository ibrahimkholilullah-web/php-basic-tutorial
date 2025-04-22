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