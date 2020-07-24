<?php
//strip_tags(string,allow)
$str = "Hello <b> World</b>,Hello <i>Earth</i>";
//to remove the tags 
//in the second one we allow the bold tag
echo strip_tags($str,"<b>")."<br>";






$a="This world is beautiful";
//wordwrap means
//wordwrap(string,width,break,cut)
echo wordwrap($a,4,"<br>",TRUE);
//true means at where the four character is complete the hit to the next line.






?>