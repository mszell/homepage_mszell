<?php

$head = <<<EOD
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Michael Szell</title>
    <meta name="Title" content="Michael Szell" />
    <meta name="Author" content="Michael Szell" />
    <meta name="Description" content="Professional homepage of Michael Szell" />
    <meta name="Robots" content="index, follow" />
    <link rel="stylesheet" href="http://michael.szell.net/includes/main.css" type="text/css" />
    <link rel="shortcut icon" href="http://michael.szell.net/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="http://michael.szell.net/favicon.ico" type="image/x-icon" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script src="http://michael.szell.net/includes/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="http://michael.szell.net/includes/jquery.curvycorners.min.js" type="text/javascript"></script>
    <script src="http://michael.szell.net/includes/main.js" type="text/javascript"></script>
    <script src="http://michael.szell.net/includes/d3.min.js" charset="utf-8" type="text/javascript"></script>
    <script type="text/javascript" src="http://labratrevenge.com/d3-tip/javascripts/d3.tip.v0.6.3.js"></script>
    <script type="text/javascript">
//<![CDATA[
function toggle(nr) {
  if(document.layers) {
    if(document.layers[nr].display == 'block') {
      document.layers[nr].display = 'none';
    } else {
      document.layers[nr].display = 'block';
    }

  } else if(document.all) {
    if(document.all[nr].style.display == 'block') {
      document.all[nr].style.display = 'none';
    } else {
      document.all[nr].style.display = 'block';
    }
  } else if(document.getElementById) {
    if(document.getElementById(nr).style.display == 'block') {
      document.getElementById(nr).style.display = 'none';
    } else {
      document.getElementById(nr).style.display = 'block';
    }
  }
}
    </script>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-32349100-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

    </head>
EOD;


$selected_publications = ($section == "publications" ? " selected" : "");
$selected_activities = ($section == "activities" ? " selected" : "");
$selected_projects = ($section == "projects" ? " selected" : "");
$selected_media = ($section == "media" ? " selected" : "");


$navbar = "
    	<div class='floating-header' style='opacity: 0.85; max-height: 43px; '>
    		<h1>
    			<div class='container'>
            		<a href='http://michael.szell.net/'>Michael Szell</a>
    	    		<ul id='menu'>
            			<li class='menuitem$selected_publications'><a href='http://michael.szell.net/publications/'>Publications</a></li>
                  <li class='menuitem$selected_activities'><a href='http://michael.szell.net/activities/'>Activities</a></li>
                  <li class='menuitem$selected_projects'><a href='http://michael.szell.net/projects/'>Projects</a></li>
                  <li class='menuitem$selected_media'><a href='http://michael.szell.net/media/'>Media</a></li>
          		</ul>
    			</div>
    		</h1>
        </div>
        ";


$portrait = "
    	<div style='background-color: white; height: 43px; background-position: initial initial; background-repeat: initial initial; ' class='floating-header-spacer'></div>
      <div class='featured-area'>
    	  <div class='container'>
          <div class='float-right' style='padding-right:18px;'>
        		<div class='portrait portrait-$section'></div>
    			</div>";

$featuredarea = <<<EOD
    			<div class="portrait-text">
    Welcome! I am assistant professor at <a href="https://en.itu.dk">ITU Copenhagen</a>, <a href="https://nerds.itu.dk/">NERDS</a>. My research focuses on mobility, sustainable transport, and quantification of interlinked human behavior. My preferred research methods are network analysis, data science, and data visualization.
    <br /><br />
    <a href="http://michael.szell.net/downloads/cv_szell.pdf"><div class='filepdf'>Curriculum Vitae<br />
        <div class='updateinfo'>last update 2019-12-26</div>
    </div></a>
    			</div>

    		</div>
    	</div>

    	<div class="main-area">
    		<div class="container">
    			<div class="sidebar">

    <h2>Contact</h2>

    <dl class="compact">
      <dt>Email</dt>
      <dd>
      <a href='m&#97;i&#108;&#116;o&#58;mic&#104;a&#37;&#54;5l&#46;sze&#108;l%4&#48;%67&#109;a&#105;l%2&#69;&#37;6&#51;&#111;m'>michael&#46;szel&#108;&#64;&#103;mail&#46;com</a>
      </dd>
      <!--<dt>Tel</dt>
      <dd>+36 1 327-3000 x2768</dd>-->
      <dt>Address</dt>
      <dd>Computer Science Dept.<br /><span style='padding-left: 16px;'>ITU Copenhagen<br /><span style='padding-left: 16px;'>Rued Langgaards Vej 7<br /><span style='padding-left: 16px;'>2300 København, Denmark</span></dd>
      <dt>Office</dt>
      <dd>4E04</dd>
    </dl>

<hr>

    <h2>Profiles</h2>
    <p><a href="http://scholar.google.com/citations?hl=en&user=3kwJhIcAAAAJ">GScholar</a> | <a href="https://orcid.org/0000-0003-3022-2483">ORCID</a> | <a href="http://arxiv.org/a/szell_m_1">arXiv</a> | <a href="https://github.com/mszell">Github</a></p> 
<p>
  <a class="twitter-timeline" href="https://twitter.com/mszll" data-widget-id="438547377662595072">Tweets by @mszll</a>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</p>


<hr>

    <h2>Recent papers</h2>

    <p>ISPRS International Journal of Geo-Information: <a href="https://www.mdpi.com/2220-9964/8/12/584">Human-Centric Data Science for Urban Studies</a></p>

    <p>Nature Reviews Physics: <a href="https://www.nature.com/articles/s42254-018-0005-3">Taking census of physics</a></p>

    <p>Nature Physics: <a href="https://doi.org/10.1038/s41567-018-0314-6">A Nobel opportunity for interdisciplinarity</a></p>

    <p>Urban Planning: <a href="https://www.cogitatiopress.com/urbanplanning/article/view/1209">Crowdsourced Quantification and Visualization of Urban Mobility Space Inequality</a></p>

    <p>Scientific Reports: <a href="http://www.nature.com/articles/srep46677">Identifying and modeling the structural discontinuities of human interactions</a></p>

    <p><a href="../publications/">&rarr; See all papers</a></p>

<hr>

    <h2>Recent media coverage</h2>
    
      <p>Il Sole 24 Ore: <a href="https://www.ilsole24ore.com/art/tecnologie/2018-10-26/se-l-automobile-diventa-mezzo-pubblico-095955.shtml">Se l’automobile diventa un mezzo pubblico</a></p>

      <p>Der Tagesspiegel: <a href="https://www.tagesspiegel.de/berlin/stadtentwicklung-in-berlin-ausstellung-in-mitte-eroeffnet-neue-blicke-aufdie-stadt/23217076.html">Ausstellung in Mitte eröffnet neue Blicke auf die Stadt</a></p>

      <p>trend: <a href="https://www.trend.at/branchen/karrieren/frauen-netzwerke-schuechternheit-zier-8285830">Frauen-Netzwerke: Schüchternheit ist keine Zier</a></p>

      <p>Der Standard: <a href="http://derstandard.at/2000061580102/Weniger-Autos-in-der-Stadt-der-Zukunft">Weniger Autos in der Stadt der Zukunft</a></p>

      <p>Fast Company: <a href="https://www.fastcompany.com/40441392/see-just-how-much-of-a-citys-land-is-used-for-parking-spaces">See Just How Much Of A City’s Land Is Used For Parking Spaces</a></p>

      <p><a href="../media/">&rarr; See all media coverage</a></p>








    			</div>
EOD;


$footer = <<<EOD
<div id="footer">
  <p>
  http://michael.szell.net &nbsp;|&nbsp; last update 2020-06-09<br />
  Design of this page is a derivation of <a href="http://hal.elte.hu/~nepusz/">Tam&aacute;s Nepusz' Homepage</a> licensed under <a rel="license" href="http://creativecommons.org/licenses/by-sa/2.0/uk/">CC BY-SA 2.0</a>.
  </p>
</div>
EOD;

?>