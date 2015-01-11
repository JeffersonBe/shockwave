<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- adaptation mobile -->
<title>Shockwave</title>
<meta name=description content="BLABLABLA" /> <!-- description référencement -->
<meta name=keywords content="keyword1, keyword2, keyword3, etc" /> <!-- mot-clés réf -->
<meta property="og:title" content="Titre du site pour facebook" />
<meta property="og:type" content="website" /> <!-- De quoi il s'agit -->
<meta property="og:url" content="index.html" /> <!-- cette page.html -->
<meta property="og:image" content="/images/image1.jpg" /> <!-- image facebook -->
<meta property="og:description" content="Descitpion sympathique pour facebook" />
<meta name=robots content="index, follow" /> <!-- Indexation de la page sur google sinon noindex, nofollow -->
<link rel="icon" type="image/png" href="images/favicon.png" />  <!-- image à coté du nom de domaine -->
<link rel="stylesheet" href="main.css" />
</head>

<body>

<div id="container">
    <header>
        <div id="social" class="hide_mob">
			       <a href="#" target="blank" class="fb"></a>
			       <a href="#" target="blank" class="in"></a>
			       <a href="#" class="twit"></a>
			       <a href="#" class="youtube"></a>
		    </div>
        <div id="logo"></div>
        <div id="menu" class="hide_mob">
            <a class="accueil" href="index.php">
            </a>
            <ul>
                <li><a href="presentation.php">Présentation</a></li>
                <li><a href="programme.php">Programme</a></li>
                <li><a href="pougnes.php">Pougnes</a></li>
                <li><a href="fun.php">Fun</a></li>
                <li><a href="sponsors.php">Sponsors</a></li>
            </ul>
        </div>
    </header>
    <div id="contenu">
        <div class="blocG flotL_mob">
            <div class="interface">
                <div class="image"></div>
                <h1 style="margin-top:40px;margin-left:20px;">Présentation du BDE</h1><br/>
                <p>Paris est également le chef-lieu de la région Île-de-France et l'unique commune française qui est en même temps un département. Comme les villes de Lyon et de Marseille, elle est divisée en arrondissements (au nombre de vingt). Elle possède un préfet de police.<br/><br/>
Ville longtemps la plus peuplée d'Europe, elle reste la plus peuplée de France. D'après le recensement de l’Inseeb 1, la commune de Paris comptait au 1er janvier 2011 plus de 2,2 millions d'habitants.<br/><br/> L'agglomération de Paris s’est largement développée au cours du xxe siècle, rassemblant 10,5 millions d'habitants au 1er janvier 2011b 2, et son aire urbaine (l'agglomération et la couronne périurbaine) comptait environ 12,3 millions d'habitants au 1er janvier 2011<br/> Elle est l'une des agglomérations européennes les plus peuplées.</p>
            </div>
        </div>
        <div class="blocD flotL_mob">
            <div class="news" style="margin-top:40px;"><h1 >News</h1><br/>
            <p>&#8226 Evenements à venir<br/>
            &#8226 Dernières actualités<br/>
            </p>
            </div>
            <div class="news" style="margin-top:40px;"><h1>Liens Utiles</h1><br/>
            <p>&#8226 Liste de nos partenaires<br/>
            &#8226 Réseaux sociaux<br/>
            </p>
            </div>
        </div>
    </div>
    <footer></footer>
</div>



<!-- SCRIPT -->
<script>
var cb=function(){var l=document.createElement('link');l.rel='stylesheet';l.href='css/style.css';var h=document.getElementsByTagName('head')[0];h.parentNode.insertBefore(l,h)};var raf=requestAnimationFrame||mozRequestAnimationFrame||webkitRequestAnimationFrame||msRequestAnimationFrame;if(raf)raf(cb);else window.addEventListener('load',cb);
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/jquery.jcanvas/13.04.26/jcanvas.min.js"></script>
<script type="text/javascript">
// code javascript
</script>


</body>
</html>
