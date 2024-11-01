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

    <h2>Contact</h2>

    <dl class="compact">
      <dt>Email</dt>
      <dd>
      <a href='m&#97;i&#108;&#116;o&#58;michael&#046;szell&#064;gmail&#046;com'>michael&#046;szell&#064;gmail&#046;com</a>
      </dd>
      <dt>Address</dt>
      <dd>Computer Science Dept.<br /><span style='padding-left: 16px;'>ITU Copenhagen<br /><span style='padding-left: 16px;'>Rued Langgaards Vej 7<br /><span style='padding-left: 16px;'>2300 København, DK</span></dd>
      <dt>Office</dt>
      <dd>3F11, Kaj Munks Vej 9</dd>
    </dl>

<hr>

    <h2>Profiles</h2>
    <p><a href="http://scholar.google.com/citations?hl=en&user=3kwJhIcAAAAJ">Scholar</a> | <a href="https://orcid.org/0000-0003-3022-2483">ORCID</a> | <a href="http://arxiv.org/a/szell_m_1">arXiv</a> | <a href="https://github.com/mszell">Github</a> | <a rel="me" href="https://datasci.social/@mszll"><img src="{$URLTOP}/images/iconmastodon.png" height="17" class="logo" style="position: relative; top: 3px;"></a></p> 

<p style="text-align: left;">
Toots from <a rel="me" href="https://datasci.social/@mszll">@mszll@datasci.social</a>
<iframe src="{$URLTOP}/includes/mastodon-on-blog/index.html" height=300 width=230></iframe>
</p>


<hr>
    <h2>Recent papers</h2>
    <p>Nature: <a href="https://www.nature.com/articles/d41586-024-03435-w">Was the Nobel prize for physics? Yes — not that it matters</a></p>

    <p>Journal of Open Source Software: <a href="https://joss.theoj.org/papers/10.21105/joss.06798">superblockify: A Python Package for Automated Generation, Visualization, and Analysis of Potential Superblocks in Cities</a></p>

    <p>Geographical Analysis: <a href="https://onlinelibrary.wiley.com/share/author/Q7YNZYCRITIQXIVEBE4H?target=10.1111/gean.12400">How Good Is Open Bicycle Network Data? A Countrywide Case Study of Denmark</a></p>

    <p><a href="../publications/">&rarr; See all papers</a></p>

<hr>
    <h2>Recent media coverage</h2>

      <p>The Conversation: <a href="https://theconversation.com/hundreds-of-cities-have-achieved-zero-road-deaths-in-a-year-heres-how-they-did-it-229127">Hundreds of cities have achieved zero road deaths in a year. Here’s how they did it</a></p>

      <p>ORF Wien Heute: <a href="https://tvthek.orf.at/profile/Wien-heute/70018/Wien-heute-vom-27-03-2024/14219951/Radinfrastruktur-ausbaufaehig/15608017">Radinfrastruktur ausbaufähig</a></p>

      <p>wien.orf.at: <a href="https://wien.orf.at/stories/3249925/">Radwege sollen möglichst direkt verlaufen</a></p>

      <p><a href="../media/">&rarr; See all media coverage</a></p>

    			</div>
EOD;


$footer = <<<EOD
<div id="footer">
  <p>{$URLTOP} &nbsp;|&nbsp; Last update 2024-11-01 &nbsp;|&nbsp; <a href="https://github.com/mszell/homepage_mszell">Source code</a></p>
</div>
EOD;

?>