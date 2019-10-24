<?php
$path = "data/";
$file = "book.csv";

$full_path = $path.$file;
if (file_exists($full_path)){
    $f = file($full_path);
    print '<table>';
    foreach ($f as $ln){
        print "<tr>\n";
            $clm = explode(';', $ln);
            foreach ($clm as $val){
                print "<td>".trim($val)."</td>\n";
            }
        print "</tr>\n";
    }
    print '</table>';
    print "\n";
    $rf = fopen($full_path, 'r-b');
    print '<table>';
    while (!feof($rf)){
        $ln = trim(fgets($rf));
        if ($ln!==""){
            print "<tr>\n";
            $clm = explode(';', $ln);
            foreach ($clm as $val){
                print "<td>".trim($val)."</td>\n";
            }
            print "</tr>\n";
        }
    }
    print '</table>';
    fclose($rf);
} else {
    echo "No such file :(";
}
