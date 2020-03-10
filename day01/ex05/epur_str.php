<?php
    $str = trim($argv[1]);
    $newstr = preg_replace('/\s+/', ' ', $str);
    echo $newstr;
?>