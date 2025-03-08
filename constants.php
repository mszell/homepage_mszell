<?php

$URLTOP = "http://michael.szell.net";

if ($section == "publications") { # Load d3 js only on the publications page
  $jsload = "<script src='{$URLTOP}/includes/d3.min.js' charset='utf-8' type='text/javascript'></script>
    <script type='text/javascript' src='http://labratrevenge.com/d3-tip/javascripts/d3.tip.v0.6.3.js'></script>";
} else {
  $jsload = "";
}

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
    <meta name="fediverse:creator" content="mszll@datasci.social" />
    <meta name="viewport" content="width=840, initial-scale=0.45">
    <link rel="stylesheet" href="{$URLTOP}/includes/main.css" type="text/css" />
    <link rel="shortcut icon" href="{$URLTOP}/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="{$URLTOP}/favicon.ico" type="image/x-icon" />
    {$jsload}
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
    Hi! I am associate professor at <a href="https://nerds.itu.dk/">NERDS (ITU Copenhagen)</a> researching sustainable mobility and bicycle networks through network analysis, data science, and data visualization.
    <br /><br />
    <table class="full">
      <tr>
        <td>
          <a href="{$URLTOP}/downloads/cv_szell.pdf">
            <div class='filepdf' style="position: relative; z-index: 10;">Curriculum Vitae<br />
            </div>
          </a>
        </td>
        <td style="text-align: right; position: relative; z-index: 10;">
          <a rel="me" href="mailto:michael.szell@gmail.com"><img src="{$URLTOP}/images/iconemail.png" height="20" class="logo" style="position: relative; top: 3px;"></a>&nbsp;
          <a rel="me" href="http://scholar.google.com/citations?hl=en&user=3kwJhIcAAAAJ"><img src="{$URLTOP}/images/icongooglescholar.png" height="20" class="logo" style="position: relative; top: 3px;"></a>&nbsp;
          <a rel="me" href="https://orcid.org/0000-0003-3022-2483"><img src="{$URLTOP}/images/iconorcid.png" height="20" class="logo" style="position: relative; top: 3px;"></a>&nbsp;
          <a rel="me" href="https://github.com/mszell"><img src="{$URLTOP}/images/icongithub.png" height="20" class="logo" style="position: relative; top: 3px;"></a>&nbsp;
          <a rel="me" href="https://bsky.app/profile/mszll.datasci.social.ap.brid.gy"><img src="{$URLTOP}/images/iconbluesky.png" height="20" class="logo" style="position: relative; top: 3px;"></a>&nbsp;
          <a rel="me" href="https://datasci.social/@mszll"><img src="{$URLTOP}/images/iconmastodon.png" height="20" class="logo" style="position: relative; top: 3px;"></a>
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
  <p>michael.szell.net &nbsp;|&nbsp; Last update 2025-03-08 &nbsp;|&nbsp; <a href="https://github.com/mszell/homepage_mszell">Source code</a></br>
    ITU Copenhagen, Rued Langgaards Vej 7, 2300 København, DK
  </p>
</div>
EOD;

?>