<html lang="fr">
    <head>
	<meta charset="utf-8" />
	<meta name="description" content="" />
	<title>Interface personnelle</title>
	<link rel="stylesheet" href="static/styles.css" />
	<script type="text/javascript" src="static/script.js"></script>
            <!--[if lt IE 9]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]--> <!--si t'es un vieux navigateur, t'as besoin de ça pour comprendre la nouvelle ossature de page issue de html5-->
    </head>
<body>

    <div id="resources">
        
        <nav id="links">
            <ul class="noPuces">
                <li><img class="icon-small" src="static/img/icons/coffee.png" alt="Usual links" /></li>
                <li><img class="icon-small" src="static/img/icons/rss.png" alt="RSS" /></li>
                <li><img class="icon-small" src="static/img/icons/star.png" alt="Favorite links" /></li>
            </ul>
        </nav>
	
	<ul id="tools" class="noPuces txtright">
            <li><img class="icon" src="static/img/icons/calendar2.png" alt="calendar" /></li>
            <li><img class="icon" src="static/img/icons/checklist2.png" alt="todo list" /></li> 
        </ul>

    </div>

<main>
    
    <div id="temps">
        <div id="weather">
            <p><span class="temperature"><?php echo $temperature ; ?>°</span> <img class="icon-small" src="static/img/weather/<?php echo $imgWeather ; ?>.png" alt="weather" /></p>
            <p title="<?php echo 'référence '.$referenceCity ; ?>"><?php echo $nameCity ; ?></p>
        </div>
        <h2><?php echo date('H:i') ;?></h2>
    </div>
    <h1 id="date"><?php echo aujourdhui() ;?></h1>
    <form id="search" method="GET" action="" >
	<input type="text" />
	<input type="submit" value="Qwant !" />
    </form>
    <div id="astrologic">
        <aside>
            <figure>
                <img class="icon" src="static/img/astrologic/<?php echo $imgSign ;?>.png" alt="astrological sign" />
                <figcaption><?php echo $nameSign ;?></figcaption>
            </figure>
        </aside>
        <p><?php echo $textSign ;?></p>
    </div>
    
</main>

<div id="params">
    <img class="icon" src="static/img/icons/gear2.png" alt="calendar" />
    <img class="icon" src="static/img/icons/home.png" alt="calendar" />
</div>

	
</body>
</html>