<?php
    $xmlDoc=new DOMDocument();
    $xmlDoc->load("livesearch.xml");
    $x=$xmlDoc->getElementsByTagName('link');
    $q=$_GET["q"];
    if (strlen($q)>0) {
        $hint="";
        for($i=0; $i<($x->length); $i++) {
            $y=$x->item($i)->getElementsByTagName('title');
            $z=$x->item($i)->getElementsByTagName('url');
            if ($y->item(0)->nodeType==1) {
                if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
                    if ($hint=="") {
                        $hint="<a href='" .
                        $z->item(0)->childNodes->item(0)->nodeValue .
                          "' target='_blank'>" .
                            $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
                    } else {
                        $hint=$hint . "<br /><a href='" .
                        $z->item(0)->childNodes->item(0)->nodeValue .
                        "' target='_blank'>" .
                            $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
                    }
                }
            }
        }
    }
        // Set output to "no suggestion" if no hint was found
        // or to the correct values
    if ($hint=="") {
        $response="no suggestion";
    } else {
        $response=$hint;
    }
    //output the response
    echo $response;
?>