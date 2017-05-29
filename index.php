<?php
	$fileBegin=fopen("testi/homeStart.txt", r) or die ("unable to open file");
	echo fread($fileBegin, filesize("testi/homeStart.txt");
	fclose($fileBegin);
	$news=("breve riassunto della prima notizia"=>"12/5/16", "I love the ocean, why dont you go get eaten by a shark"=>"12/5/16", 
		"my dearest light, the days are hopeless"=>"5/4/16");
	foreach($news as $x=>$val)
		echo"<dt><a href=\"1.html\">$val</a></dt><dd>$x</dd>";
	$fileEnd=("testi/homeFinish.txt", r) or die ("unable to open file");
	echo fread($fileEnd, filesize("testi/homeFinish.txt");
	fclose($fileEnd);
?>
