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
    <meta name="fediverse:creator" content="mszll@datasci.social" />
    <link rel="stylesheet" href="{$URLTOP}/includes/main.css" type="text/css" />
    <link rel="shortcut icon" href="{$URLTOP}/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="{$URLTOP}/favicon.ico" type="image/x-icon" />
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
    <script type='text/javascript' src='https://d1bxh8uas1mnw7.cloudfront.net/assets/embed.js'></script>
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
    Welcome! I am associate professor at <a href="https://nerds.itu.dk/">NERDS, ITU Copenhagen</a>, researching sustainable mobility, bicycle networks, and social networks. My preferred research methods are network analysis, data science, and data visualization.
    <br /><br />
    <a href="{$URLTOP}/downloads/cv_szell.pdf"><div class='filepdf' style="position: relative; z-index: 10;">Curriculum Vitae<br />
        <div class='updateinfo'>last update 2024-11-01</div>
    </div></a>
    			</div>

    		</div>
    	</div>

    	<div class="main-area">
    		<div class="container">
    			<div class="sidebar">

    <dl class="compact">
      <dt>Email</dt>
      <dd>
      <a href='m&#97;i&#108;&#116;o&#58;michael&#046;szell&#064;gmail&#046;com'>michael&#046;szell&#064;gmail&#046;com</a>
      </dd>
      <dt>Address</dt>
      <dd>Computer Science Dept.<br /><span style='padding-left: 16px;'>ITU Copenhagen<br /><span style='padding-left: 16px;'>Rued Langgaards Vej 7<br /><span style='padding-left: 16px;'>2300 København, DK</span></dd>
      <dt>Office</dt>
      <dd>3F11, Kaj Munks Vej 9</dd>
      <dt>Profiles</dt>
      <dd>
        <a rel="me" href="http://scholar.google.com/citations?hl=en&user=3kwJhIcAAAAJ"><img src="{$URLTOP}/images/icongooglescholar.png" height="17" class="logo" style="position: relative; top: 3px;"></a>&nbsp;
        <a rel="me" href="https://orcid.org/0000-0003-3022-2483"><img src="{$URLTOP}/images/iconorcid.png" height="17" class="logo" style="position: relative; top: 3px;"></a>&nbsp;
        <a rel="me" href="http://arxiv.org/a/szell_m_1"><img src="{$URLTOP}/images/iconarxiv.png" height="17" class="logo" style="position: relative; top: 3px;"></a>&nbsp;
        <a rel="me" href="https://github.com/mszell"><img src="{$URLTOP}/images/icongithub.png" height="17" class="logo" style="position: relative; top: 3px;"></a>&nbsp;
        <a rel="me" href="https://datasci.social/@mszll"><img src="{$URLTOP}/images/iconmastodon.png" height="17" class="logo" style="position: relative; top: 3px;"></a></dd>
    </dl>

<p style="text-align: left;"></br>
Toots from <a rel="me" href="https://datasci.social/@mszll">@mszll@datasci.social</a>
<iframe src="{$URLTOP}/includes/mastodon-on-blog/index.html" height=360 width=230></iframe>
</p>

    			</div>
EOD;


$footer = <<<EOD
<div id="footer">
  <p>{$URLTOP} &nbsp;|&nbsp; Last update 2024-11-01 &nbsp;|&nbsp; <a href="https://github.com/mszell/homepage_mszell">Source code</a></p>
</div>
EOD;

?>