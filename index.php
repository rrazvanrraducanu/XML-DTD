<?php

$xml= new DOMDocument();
$xml->load("test.xml", LIBXML_NOBLANKS); 


if ($xml->validate()) {
    echo "It is valid!\n";exit;
}
else {
    var_dump("Vai! Vai! Vai!");exit;
}
?>