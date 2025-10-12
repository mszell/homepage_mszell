<?php

$URLTOP = "https://michael.szell.net";

if ($section == "publications") { # Load d3 and bib toggle js only on the publications page
  $jsload = "<script src='{$URLTOP}/includes/d3.min.js'></script>
    <script src='https://labratrevenge.com/d3-tip/javascripts/d3.tip.v0.6.3.js'></script>
    <script>
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
    </script>";
} else {
  $jsload = "";
}

if ($section == "publications") {
  $metadesc = "Academic and non-academic publications of Michael Szell, and his co-authorship network";
} elseif ($section == "activities") {
  $metadesc = "Organization, committees, editorial work, presentations, review service, and advanced training and visits of Michael Szell";
} elseif ($section == "projects") {
  $metadesc = "Funded grants and data visualization and software projects of Michael Szell";
} elseif ($section == "media") {
  $metadesc = "Media and media coverage about Michael Szell";
} elseif ($section == "teaching") {
  $metadesc = "Supervision (information to apply, theses, project ideas), teaching materials, and teaching activities of Michael Szell";
} else {
  $metadesc = "Professional homepage of Michael Szell";
}

$head = <<<EOD
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Michael Szell's professional homepage</title>
    <meta name="Title" content="Michael Szell">
    <meta name="Author" content="Michael Szell">
    <meta name="Description" content="{$metadesc}">
    <meta name="Robots" content="index, follow">
    <meta name="fediverse:creator" content="mszll@datasci.social">
    <meta name="viewport" content="width=840, initial-scale=0.45">
    <link rel="stylesheet" href="{$URLTOP}/includes/main.css" type="text/css">
    <link rel="shortcut icon" href="{$URLTOP}/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{$URLTOP}/favicon.ico" type="image/x-icon">
    {$jsload}
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
    			<span class='container' style='display: block;'>
            		<a href='{$URLTOP}/'>Michael Szell</a>
    	    		<ul id='menu'>
            			<li class='menuitem$selected_publications'><a href='{$URLTOP}/publications/'>Publications</a></li>
                  <li class='menuitem$selected_activities'><a href='{$URLTOP}/activities/'>Activities</a></li>
                  <li class='menuitem$selected_projects'><a href='{$URLTOP}/projects/'>Projects</a></li>
                  <li class='menuitem$selected_media'><a href='{$URLTOP}/media/'>Media</a></li>
                  <li class='menuitem$selected_teaching'><a href='{$URLTOP}/teaching/'>Teaching</a></li>
          		</ul>
    			</span>
    		</h1>
        </div>
        ";


$portrait = "
    	<div style='background-color: white; height: 43px; background-position: center; background-repeat: initial; ' class='floating-header-spacer'></div>
      <div class='featured-area'>
    	  <div class='container'>
          <div class='float-right' style='padding-right:18px;'>
        		<div class='portrait portrait-$section'></div>
    			</div>";

$featuredarea = <<<EOD
  <div class="portrait-text">
    Hi! I am associate professor at <a href="https://nerds.itu.dk/">NERDS (ITU Copenhagen)</a> researching sustainable mobility and bicycle networks through network analysis, data science, and data visualization.
    <br><br>
    <table class="full">
      <tr>
        <td>
          <a href="{$URLTOP}/downloads/cv_szell.pdf">
            <div class='filepdf' style="position: relative; z-index: 10;">Curriculum Vitae<br>
            </div>
          </a>
        </td>
        <td style="text-align: right; position: relative; z-index: 10;">
          <a rel="me" href="mailto:michael.szell@gmail.com"><img src="{$URLTOP}/images/iconemail.png" height="20" class="logo" style="position: relative; top: 3px;" alt="Email"></a>&nbsp;
          <a rel="me" href="https://scholar.google.com/citations?hl=en&user=3kwJhIcAAAAJ"><img src="{$URLTOP}/images/icongooglescholar.png" height="20" class="logo" style="position: relative; top: 3px;" alt="Google Scholar"></a>&nbsp;
          <a rel="me" href="https://orcid.org/0000-0003-3022-2483"><img src="{$URLTOP}/images/iconorcid.png" height="20" class="logo" style="position: relative; top: 3px;" alt="ORCID"></a>&nbsp;
          <a rel="me" href="https://github.com/mszell"><img src="{$URLTOP}/images/icongithub.png" height="20" class="logo" style="position: relative; top: 3px;" alt="Github"></a>&nbsp;
          <a rel="me" href="https://bsky.app/profile/mszll.datasci.social.ap.brid.gy"><img src="{$URLTOP}/images/iconbluesky.png" height="20" class="logo" style="position: relative; top: 3px;" alt="Bluesky"></a>&nbsp;
          <a rel="me" href="https://datasci.social/@mszll"><img src="{$URLTOP}/images/iconmastodon.png" height="20" class="logo" style="position: relative; top: 3px;" alt="Mastodon"></a>
        </td>
      </tr>
    </table>
  </div>

  </div>
  </div>

	<div class="main-area">
		<div class="container">
EOD;


$footer = <<<EOD
<div id="footer">
  <p>michael.szell.net &nbsp;|&nbsp; Last update 2025-10-12 &nbsp;|&nbsp; <a href="https://github.com/mszell/homepage_mszell">Source code</a><br>
    ITU Copenhagen, Rued Langgaards Vej 7, 2300 København, DK
  </p>
</div>
EOD;

?>