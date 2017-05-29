<?php
	$fileBegin=fopen("testi/newsStart.txt", 'r') or die ("unable to open file");
	echo fread($fileBegin, filesize("testi/newsStart.txt"));
	fclose($fileBegin);
	$news=[
    ["breve riassunto della prima notizia", "12/5/16", 
    "questa intera sezione contiene tutto il resto del testo trading everithing, live hte ilkfe you can be a new man dont stop deliving can you beilve this thing is stupid take your time andi be happy"], 
    ["I love the ocean, why dont you go get eaten by a shark","12/5/16",
    "are you aron burr sir? who is askibg? i may have punched him. I am not stupid. I am an orphan too. free advice: talk less smile more, you can't be serious. SHowtime whooo red coat asre doomed."], 
	["my dearest light, the days are hopeless", "5/4/16", "if you stand for notting what do you fall for? alexander hamilton a shiny piece of coal, famished and sly. Brit gotta go, king Feorge gotta go. i am not trowing away my shot i am not trowing away my shot i am not trowing away my shoti am not trowing away my shoti am not trowing away my shoti am not trowing away my shoti am not trowing away my shoti am not trowing away my shot."],
    ["breve riassunto della prima notizia", "12/5/16", 
    "questa intera sezione contiene tutto il resto del testo trading everithing, live hte ilkfe you can be a new man dont stop deliving can you beilve this thing is stupid take your time andi be happy"], 
    ["I love the ocean, why dont you go get eaten by a shark","12/5/16",
    "are you aron burr sir? who is askibg? i may have punched him. I am not stupid. I am an orphan too. free advice: talk less smile more, you can't be serious. SHowtime whooo red coat asre doomed."], 
	["my dearest light, the days are hopeless", "5/4/16", "if you stand for notting what do you fall for? alexander hamilton a shiny piece of coal, famished and sly. Brit gotta go, king Feorge gotta go. i am not trowing away my shot i am not trowing away my shot i am not trowing away my shoti am not trowing away my shoti am not trowing away my shoti am not trowing away my shoti am not trowing away my shoti am not trowing away my shot."],
    ["breve riassunto della prima notizia", "12/5/16", 
    "questa intera sezione contiene tutto il resto del testo trading everithing, live hte ilkfe you can be a new man dont stop deliving can you beilve this thing is stupid take your time andi be happy"], 
    ["I love the ocean, why dont you go get eaten by a shark","12/5/16",
    "are you aron burr sir? who is askibg? i may have punched him. I am not stupid. I am an orphan too. free advice: talk less smile more, you can't be serious. SHowtime whooo red coat asre doomed."], 
	["my dearest light, the days are hopeless", "5/4/16", "if you stand for notting what do you fall for? alexander hamilton a shiny piece of coal, famished and sly. Brit gotta go, king Feorge gotta go. i am not trowing away my shot i am not trowing away my shot i am not trowing away my shoti am not trowing away my shoti am not trowing away my shoti am not trowing away my shoti am not trowing away my shoti am not trowing away my shot."],
    ["breve riassunto della prima notizia", "12/5/16", 
    "questa intera sezione contiene tutto il resto del testo trading everithing, live hte ilkfe you can be a new man dont stop deliving can you beilve this thing is stupid take your time andi be happy"], 
    ["I love the ocean, why dont you go get eaten by a shark","12/5/16",
    "are you aron burr sir? who is askibg? i may have punched him. I am not stupid. I am an orphan too. free advice: talk less smile more, you can't be serious. SHowtime whooo red coat asre doomed."], 
	["my dearest light, the days are hopeless", "5/4/16", "if you stand for notting what do you fall for? alexander hamilton a shiny piece of coal, famished and sly. Brit gotta go, king Feorge gotta go. i am not trowing away my shot i am not trowing away my shot i am not trowing away my shoti am not trowing away my shoti am not trowing away my shoti am not trowing away my shoti am not trowing away my shoti am not trowing away my shot."],
    ["breve riassunto della prima notizia", "12/5/16", 
    "questa intera sezione contiene tutto il resto del testo trading everithing, live hte ilkfe you can be a new man dont stop deliving can you beilve this thing is stupid take your time andi be happy"], 
    ["I love the ocean, why dont you go get eaten by a shark","12/5/16",
    "are you aron burr sir? who is askibg? i may have punched him. I am not stupid. I am an orphan too. free advice: talk less smile more, you can't be serious. SHowtime whooo red coat asre doomed."], 
	["my dearest light, the days are hopeless", "5/4/16", "if you stand for notting what do you fall for? alexander hamilton a shiny piece of coal, famished and sly. Brit gotta go, king Feorge gotta go. i am not trowing away my shot i am not trowing away my shot i am not trowing away my shoti am not trowing away my shoti am not trowing away my shoti am not trowing away my shoti am not trowing away my shoti am not trowing away my shot."]
    ];
    $newsL=count($news);
	for($x = 0; $x < $newsL; $x++) {
            echo "<div><h2>".$news[$x][0]."</h2>";
            echo"<p class=\"data\">".$news[$x][1]."</p>";
            echo"<p>".$news[$x][2]."</p>";
            echo"</div>";
    }
	$fileEnd=fopen("testi/newsFinish.txt", 'r') or die ("unable to open file");
	echo fread($fileEnd, filesize("testi/newsFinish.txt"));
	fclose($fileEnd);
?>
