<?php



$file = fopen ("http://localhost/crud.io/test.php", "r");
//$file = fopen ("http://michaelmcneil.com", "r");
if (!$file) {
    echo "<p>Unable to open remote file.\n";
    exit;
}
while (!feof ($file)) {
    $line = fgets ($file, 1024);
    /* This only works if the title and its tags are on one line */
//    if (preg_match ("@\<title\>(.*)\</title\>@i", $line, $out)) {
//echo "*";

if ($line=="AHH FUCK") {
echo "hmm";
}
echo $line;

       // $title = $line;

//        break;
//    }
}
fclose($file);



?>