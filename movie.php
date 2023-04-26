<?php
    // $dom = new DomDocument();
    $dom->load("movie.xml");
    echo "<h2>Name of movie </h2>";
    $mname=$dom->getElementByTagName("Movietitle");
    foreach($mname as $m)
    {
        echo "<b>$m->textContent<b><br><bR>";
    }
    $aname = $dom->getElementByTagName("actor");
    foreach($aname as $a)
    {
        echo "<b>$a->textContent<b><br><bR>";
    }
?>