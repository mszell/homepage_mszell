<?php

$URLTOP = "http://michael.szell.net";

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
    <link rel="stylesheet" href="{$URLTOP}/includes/main.css" type="text/css" />
    <link rel="shortcut icon" href="{$URLTOP}/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="{$URLTOP}/favicon.ico" type="image/x-icon" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script src="{$URLTOP}/includes/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script src="{$URLTOP}/includes/jquery.curvycorners.min.js" type="text/javascript"></script>
    <script src="{$URLTOP}/includes/main.js" type="text/javascript"></script>
    <script src="{$URLTOP}/includes/d3.min.js" charset="utf-8" type="text/javascript"></script>
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
            		<a href='{$URLTOP}/'>Michael Szell</a>
    	    		<ul id='menu'>
            			<li class='menuitem$selected_publications'><a href='{$URLTOP}/publications/'>Publications</a></li>
                  <li class='menuitem$selected_activities'><a href='{$URLTOP}/activities/'>Activities</a></li>
                  <li class='menuitem$selected_projects'><a href='{$URLTOP}/projects/'>Projects</a></li>
                  <li class='menuitem$selected_media'><a href='{$URLTOP}/media/'>Media</a></li>
                  <li class='menuitem$selected_teaching'><a href='{$URLTOP}/teaching/'>Teaching</a></li>
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
    <a href="{$URLTOP}/downloads/cv_szell.pdf"><div class='filepdf'>Curriculum Vitae<br />
        <div class='updateinfo'>last update 2022-11-03</div>
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
    <p><a href="http://scholar.google.com/citations?hl=en&user=3kwJhIcAAAAJ">Scholar</a> | <a href="https://orcid.org/0000-0003-3022-2483">ORCID</a> | <a href="http://arxiv.org/a/szell_m_1">arXiv</a> | <a href="https://github.com/mszell">Github</a> | <a href="https://twitter.com/@mszll"><img src="{$URLTOP}/images/icontwitter.png" height="16" class="logo" style="position: relative; top: 3px;"></a></p> 

<p style="text-align: left;">
Toots from <a rel="me" href="https://mastodon.social/@mszll">🐘@mszll</a>:
<iframe src="{$URLTOP}/includes/mastodon-on-blog/index.html" height=300 width=230></iframe>
</p>


<hr>

    <h2>Recent papers</h2>

    <p>Environment and Planning B: <a href="https://journals.sagepub.com/eprint/JAEWNHDIWHYHGXIDNYJC/full">Data-driven micromobility network planning for demand and safety</a></p>

    <p>Environment and Planning B: <a href="https://journals.sagepub.com/doi/10.1177/23998083221108190">Multimodal urban mobility and multilayer transport networks</a></p>

    <p>EPJ Data Science: <a href="https://epjdatascience.springeropen.com/articles/10.1140/epjds/s13688-022-00339-5">Identifying urban features for vulnerable road user safety in Europe</a></p>

    <p>Scientific Reports: <a href="https://www.nature.com/articles/s41598-022-10783-y">Growing urban bicycle networks</a></p>

    <p><a href="../publications/">&rarr; See all papers</a></p>

<hr>

    <h2>Recent media coverage</h2>

      <p>Forskerforum: <a href="https://www.forskerforum.dk/magasinet/2022/forskerforum-nr-4-2022">DATANØRDER HAR FUNDET KODEN TIL DET GODE FORSKNINGSMILJØ</a></p>

      <p>Radio Ö1: <a href="../downloads/radio_oe102.mp3">Wissen Aktuell - Radwege verbessern durch Netzwerkforschung</a></p>

      <p>Prosabladet: <a href="../downloads/article_prosabladet01.pdf">Ny forskning: "Automated Detection of Missing Links in Bicycle Networks</a></p>

      <p>Ingeniøren: <a href="https://pro.ing.dk/datatech/artikel/ugens-data-itu-forskergruppe-vinder-prisen-aarets-forskningsmiljoe-2022">Ugens data: ITU-forskergruppe vinder prisen for årets forskningsmiljø 2022</a></p>

      <p><a href="../media/">&rarr; See all media coverage</a></p>

    			</div>
EOD;


$footer = <<<EOD
<div id="footer">
  <p>{$URLTOP} &nbsp;|&nbsp; Last update 2022-11-05 &nbsp;|&nbsp; <a href="https://github.com/mszell/homepage_mszell">Source code</a></p>
</div>
EOD;

?>