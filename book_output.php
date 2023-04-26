<?php
    $xml=simplexml_load_file("A3.xml");
    foreach($xml->book as $b)
    {
        echo "Book No - $b->BookNo"."<br>";
        echo "Book Name - $b->BookName"."<br>";
        echo "Book Auther - $b->Auther"."<br>";
    }
?>