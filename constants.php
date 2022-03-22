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
    <script type='text/javascript' src='https://d1bxh8uas1mnw7.cloudfront.net/assets/embed.js'></script> <!-- altmetric: https://api.altmetric.com/embeds.html -->
    </head>
EOD;


$selected_publications = ($section == "publications" ? " selected" : "");
$selected_activities = ($section == "activities" ? " selected" : "");
$selected_projects = ($section == "projects" ? " selected" : "");
$selected_media = ($section == "media" ? " selected" : "");
$selected_teaching = ($section == "teaching" ? " selected" : "");


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
                  <li class='menuitem$selected_teaching'><a href='http://michael.szell.net/teaching/'>Teaching</a></li>
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
    Welcome! I am associate professor at <a href="https://en.itu.dk">ITU Copenhagen</a>, <a href="https://nerds.itu.dk/">NERDS</a>. My research focuses on mobility, sustainable transport, and quantification of interlinked human behavior. My preferred research methods are network analysis, data science, and data visualization.
    <br /><br />
    <a href="http://michael.szell.net/downloads/cv_szell.pdf"><div class='filepdf'>Curriculum Vitae<br />
        <div class='updateinfo'>last update 2022-01-11</div>
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
      <a href='m&#97;i&#108;&#116;o&#58;michael&#046;szell&#064;gmail&#046;com'>michael&#046;szell&#064;gmail&#046;com</a>
      </dd>
      <dt>Address</dt>
      <dd>Computer Science Dept.<br /><span style='padding-left: 16px;'>ITU Copenhagen<br /><span style='padding-left: 16px;'>Rued Langgaards Vej 7<br /><span style='padding-left: 16px;'>2300 København, Denmark</span></dd>
      <dt>Office</dt>
      <dd>3F11, Kaj Munks Vej 9</dd>
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

    <p>Geographical Analysis: <a href="https://doi.org/10.1111/gean.12324">Automated Detection of Missing Links in Bicycle Networks</a></p>

    <p>ICWSM 2021: <a href="https://ojs.aaai.org/index.php/ICWSM/article/view/18047">Multilayer Graph Association Rules for Link Prediction</a></p>

    <p>Nature: <a href="https://www.nature.com/articles/s41586-021-03480-9">The universal visitation law of human mobility</a></p>

    <p><a href="../publications/">&rarr; See all papers</a></p>

<hr>

    <h2>Recent media coverage</h2>
      <p>Science ORF.at: <a href="https://science.orf.at/stories/3211308/">Wie soziale Stabilität entsteht</a></p>

      <p>Cyklister: <a href="https://www.cyklistforbundet.dk/aktuelt/magasinet-cyklister/">BRUD I NETVÆRK sender cyklister ud til bilerne i København</a></p>

      <p>Scientific American: <a href="https://www.scientificamerican.com/article/simple-mathematical-law-predicts-movement-in-cities-around-the-world/">Simple Mathematical Law Predicts Movement in Cities around the World</a></p>

      <p>Le Monde: <a href="https://www.lemonde.fr/sciences/article/2021/06/22/une-loi-universelle-regit-la-frequentation-des-villes_6085142_1650684.html">Une loi universelle régit la fréquentation des villes</a></p>

      <p><a href="../media/">&rarr; See all media coverage</a></p>

    			</div>
EOD;


$footer = <<<EOD
<div id="footer">
  <p>
  http://michael.szell.net &nbsp;|&nbsp; Last update 2022-03-22 &nbsp;|&nbsp; <a href="https://github.com/mszell/homepage_mszell">Source code</a><br />
  Design of this page is a derivation of <a href="http://hal.elte.hu/~nepusz/">Tam&aacute;s Nepusz' Homepage</a> licensed under <a rel="license" href="http://creativecommons.org/licenses/by-sa/2.0/uk/">CC BY-SA 2.0</a>.
  </p>
</div>
EOD;

?>