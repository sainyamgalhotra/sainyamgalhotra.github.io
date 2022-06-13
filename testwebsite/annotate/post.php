<!DOCTYPE html>
<html>
<body>

<?php
echo $_POST['city1'];

$random = rand(1,100);

$file = fopen("./data/".$random.".txt" , "a");

fwrite($file, $_POST['city1']);
$ret = fwrite($file, " ");

fwrite($file, $_POST['city2']);
fwrite($file, " ");

fwrite($file, $_POST['city3']);
fwrite($file, " ");

fwrite($file, $_POST['city4']);
fwrite($file, " ");

if ($_POST['action'] == 'Yes') {
   fwrite($file, "y");
} else if ($_POST['action'] == 'No') {
   fwrite($file, "n");
}

fwrite($file, "\n");

fclose($file);

echo $_POST['city2'];
?>
<meta http-equiv="refresh" content="0;url=https://people.cs.umass.edu/~sainyam/annotate/sample.php" />

</body>
</html>
