<?php
//htmlentities(string,flags)
//html_entity_decode(string,flags)
//in flags we can use three default values
//.ENT_COMPAT:default encodes only double quottes
//.ENT_QUOTES:Encodes double and single quotes
//.ENT_NOQUOTES:Does not encode any quotes.
//htmlspecialchars(string,flags):it can work as same as htmlentities but it can only decode some special characters.
//htmlspecialchars_decode(string,flags)
//to see all the html entitites code than we use the function
// called as get_html_translation_table(function,flags):in function we write HTML_ENTITIES or HTML_SPECIALCHARS



//$str = "A 'quote' is <b>bold</b>";
$str='<a href="https://www.yahoobaba.net">Yahoo baba website</a>';
echo $str."<br><br>";
$htmlent= htmlentities($str,ENT_QUOTES); 

//echo htmlspecialchars($str,ENT_QUOTES); 
echo $htmlent;

echo html_entity_decode($htmlent);

?>