<?php
$name="shakib is a good boy";
echo $name;
echo "<br>";
echo "the length of my name ". strlen($name);
echo "<br>";
//name er moddee total word count kore 
echo str_word_count($name);
echo "<br>";
//string ulta kore print kore 
echo strrev($name);
echo "<br>";
//check kore koto number e is ase...jmn etay 7 number e ase..0 theke start.character er position dekhe
echo strpos($name, "is");
echo "<br>";
echo strpos($name, "shakib");
echo "<br>";
//shakib e tamim dia replace kore ,,name theke.....
echo str_replace("shakib","Tamim",$name);
echo "<br>";
//same lekha bar bar ase..5 mane 5 bar repeat hobe.er br mane next line
echo str_repeat($name . "<br>",5);
echo "<br>";
echo "<pre>";
echo rtrim("  this is a good boy  ");
echo "<br>";
echo ltrim("  this is a good boy   ");
echo "</pre>";

?>