<?php
    $str=<<<XML
    <?xml version="1.0" encoding="UTF-8"?>
    <BookInfo>
        <book>
            <BookNo>1</BookNo>
            <BookName>w1</BookName>
            <Auther>Kaustubh</Auther>
        </book>
        <book>
            <BookNo>2</BookNo>
            <BookName>os</BookName>
            <Auther>umesh</Auther>
        </book>
    </BookInfo>
    XML;
    $fname="book.xml";
    $fp=fopen($fname,"w");
    fwrite($fp,$str);
    fclose($fp);
    echo "Created succesfully".$fname;

?>