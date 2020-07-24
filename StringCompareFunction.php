
<?php
/*in string we compare the string through these eight function
1.strcmp(string1,string2) it is case sensitive 
2.strncmp(string1,string2,length) it is case sensitive it is also used for to compare the length
3.strcasecmp(string1,string2) it is case insensitive
4.strncasecmp(string1,string2,length) it is case insensitive
5.strnatcmp 
6.strnatcasecmp
7.substr_compare(string1,string2,start,length,case) case means two value true and false by default it takes always false 
value but if you take case valu is true then it works as a case insensitive.
8.similar_text(string1,string2,percent)
*/

 //if value come positive than left word is greater than right word and vice versa
 echo strcmp("Hello world!","Hello world!")."<br>";
 
 echo strncmp("Hello world!","Hello world!",6)."<br>";
 //this is case insensitive function so it will take both ssame.
 echo strcasecmp("HELLO world!","hello world!")."<br>";

 echo strncasecmp("HELLO world!","hello world!",5)."<br>";
//nat means natural algorithm compare to cmapre the integer value
 echo strnatcmp("hello world!","hello world!")."<br>";
// strnatcasecmp it is case insensitive

echo substr_compare("hello world","world",6,3)."<br>";

echo similar_text("hello worlD!", "Hello yahoobaba");


?>