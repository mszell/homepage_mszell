<?php
$section = "home";

include "constants.php";

echo $head;
?>

<body>

<?php
echo $navbar;
echo $portrait;
echo $featuredarea;
?>

			<div class="main-with-sidebar">

<h3>News</h3>
<table>
	<tr><td class='std col1 date'>2022-11-18</td><td class='std'><a href="https://datasci.social"><img src="images/logodatascisocial.png" width="64" height="64" alt="datasci.social" class="logo"></a></td><td class='std'>Mastodon instance <a href="https://datasci.social">datasci.social</a> set up, to provide a platform for researchers in human-centric data science.
	</td></tr>
	<tr><td class='std col1 date'>2022-10-22</td><td class='std'><a href="https://journals.sagepub.com/eprint/JAEWNHDIWHYHGXIDNYJC/full"><img src="images/newsepb.png" width="64" height="64" alt="Environment and Planning B" class="logo"></a></td><td class='std'>Paper published in <a href="https://journals.sagepub.com/eprint/JAEWNHDIWHYHGXIDNYJC/full">Environment and Planning B</a> on Data-driven micromobility network planning for demand and safety. See also the <a href="http://www.datainterfaces.org/projects/biketracks/#turin">project page</a>.</td></tr>
	<tr><td class='std col1 date'>2022-07-20</td><td class='std'><a href="https://journals.sagepub.com/doi/10.1177/23998083221108190"><img src="images/newsepb.png" width="64" height="64" alt="Environment and Planning B" class="logo"></a></td><td class='std'>Paper published in <a href="https://journals.sagepub.com/doi/10.1177/23998083221108190">Environment and Planning B</a> on Multimodal urban mobility and multilayer transport networks.</td></tr>
	<tr><td class='std col1 date'>2022-06-02</td><td class='std'><a href="https://nerds.itu.dk/2022/06/02/nerds-is-research-environment-of-the-year-2022/"><img src="images/logonerds.png" width="64" height="64" alt="NERDS" class="logo"></a></td><td class='std'>Our research group NERDS <a href="https://nerds.itu.dk/2022/06/02/nerds-is-research-environment-of-the-year-2022/">won the Research Environment of the Year 2022 award</a>. See also the <a href="https://www.forskerforum.dk/magasinet/2022/forskerforum-nr-4-2022">Forskerforum article</a> (in Danish).</td></tr>
</table>
	<a href="#" onclick="toggle('news');return false;" id="info-news">&darr; Toggle all news &darr;</a>
	<div class="expansion" id="news">
<table>
	<tr><td class='std col1 date'>2022-04-28</td><td class='std'><a href="https://epjdatascience.springeropen.com/articles/10.1140/epjds/s13688-022-00339-5"><img src="images/newsepjdatascience.jpg" width="64" height="64" alt="EPJ Data Science" class="logo"></a></td><td class='std'>Paper published in <a href="https://epjdatascience.springeropen.com/articles/10.1140/epjds/s13688-022-00339-5">EPJ Data Science</a> on Identifying urban features for vulnerable road user safety in Europe. See also the <a href="https://blogs.biomedcentral.com/on-physicalsciences/2022/05/06/identifying-urban-features-for-vulnerable-road-user-safety-in-europe/">blog post</a>.</td></tr>
	<tr><td class='std col1 date'>2022-04-26</td><td class='std'><a href="https://www.nature.com/articles/s41598-022-10783-y"><img src="images/newsscirep.jpg" width="64" height="64" alt="Scientific Reports" class="logo"></a></td><td class='std'>Paper published in <a href="https://www.nature.com/articles/s41598-022-10783-y">Scientific Reports</a> on Growing urban bicycle networks. See also the <a href="http://growbike.net">project page</a>.</td></tr>
	<tr><td class='std col1 date'>2022-03-22</td><td class='std'><a href="https://onlinelibrary.wiley.com/share/author/RJ2FNNYCPUTPCDW5MYP7?target=10.1111/gean.12324"><img src="images/newsgean.png" width="64" height="8" alt="Geographical Analysis" class="logo"></a></td><td class='std'>Paper published in <a href="https://onlinelibrary.wiley.com/share/author/RJ2FNNYCPUTPCDW5MYP7?target=10.1111/gean.12324">Geographical Analysis</a> on Automated Detection of Missing Links in Bicycle Networks. See also the <a href="https://fixbike.net">project page</a>.</td></tr>
	<tr><td class='std col1 date'>2021-11-01</td><td class='std'><a href="https://www.isi.it/en/home"><img src="images/logoisi.png" width="64" height="64" alt="ISI Foundation" class="logo"></a></td><td class='std'>New affiliation at <a href="https://www.isi.it/en/home">ISI Foundation</a></td></tr>
	<tr><td class='std col1 date'>2021-07-07</td><td class='std'><a href="http://growbike.net"><img src="images/logogrowbikenet.png" width="58" height="58" alt="GrowBike.Net" class="logo"></a></td><td class='std'><a href="http://growbike.net">GrowBike.Net</a> released</td></tr>
	<tr><td class='std col1 date'>2021-06-07</td><td class='std'><a href="https://ojs.aaai.org/index.php/ICWSM/article/view/18047"><img src="images/newsicwsm.png" width="64" height="64" alt="ICWSM 2021" class="logo"></a></td><td class='std'>Paper published in <a href="https://ojs.aaai.org/index.php/ICWSM/article/view/18047">ICWSM 2021</a> on Multilayer Graph Association Rules for Link Prediction.</td></tr>
	<tr><td class='std col1 date'>2021-05-26</td><td class='std'><a href="https://www.nature.com/articles/s41586-021-03480-9"><img src="images/newsnature.png" width="64" height="64" alt="Nature" class="logo"></a></td><td class='std'>Paper published in <a href="https://www.nature.com/articles/s41586-021-03480-9">Nature</a> on The universal visitation law of human mobility. See also the <a href="https://senseable.mit.edu/wanderlust/">project page</a>.</td></tr>
	<tr><td class='std col1 date'>2021-01-06</td><td class='std'><a href="https://github.com/mszell/taxonomybikenw"><img src="images/logobikenwapproaches.png" width="58" height="58" alt="Taxonomy of Urban Bicycle Network Approaches" class="logo"></a></td><td class='std'><a href="https://github.com/mszell/taxonomybikenw">Taxonomy of Urban Bicycle Network Approaches</a> released</td></tr>
	<tr><td class='std col1 date'>2020-12-16</td><td class='std'><a href="https://royalsocietypublishing.org/doi/10.1098/rsos.201130"><img src="images/newsroyalsociety.png" width="64" height="64" alt="Royal Society Open Science" class="logo"></a></td><td class='std'>Paper published in <a href="https://royalsocietypublishing.org/doi/10.1098/rsos.201130">Royal Society Open Science</a> on Data-driven strategies for optimal bicycle network growth</td></tr>
	<tr><td class='std col1 date'>2020-10-01</td><td class='std'><a href="https://nerds.itu.dk/2020/10/01/promotions-promotions-promotions/"><img src="images/logoitu.png" width="64" height="64" alt="IT University of Copenhagen" class="logo"></a></td><td class='std'>Promotion to associate professor at <a href="https://en.itu.dk/">ITU Copenhagen</td></tr>
	<tr><td class='std col1 date'>2020-06-10</td><td class='std'><a href="https://transportfindings.org/article/13171-extracting-the-multimodal-fingerprint-of-urban-transportation-networks"><img src="images/newstransportfindings.jpg" width="64" height="51" alt="Transport Findings paper" class="logo"></a></td><td class='std'>Paper published in <a href="https://transportfindings.org/article/13171-extracting-the-multimodal-fingerprint-of-urban-transportation-networks">Transport Findings</a> on multiplex transport networks</td></tr>
	<tr><td class='std col1 date'>2019-12-12</td><td class='std'><a href="https://www.mdpi.com/2220-9964/8/12/584"><img src="images/newsijgi.png" width="76" height="68" alt="International Journal of Geo-information" class="logo"></a></td><td class='std'>Published editorial and completed Special Issue in International Journal of Geo-information:<br /><a href="https://www.mdpi.com/2220-9964/8/12/584">Human-Centric Data Science for Urban Studies</a><br />Editors: Resch, Szell</td></tr>
	<tr><td class='std col1 date'>2019-09-05</td><td class='std'><a href="https://whatthestreet.com"><img src="images/logowhatthestreet.png" width="58" height="58" alt="What the Street?!" class="logo"></a></td><td class='std'>What the Street?! added to <a href="https://futurium.de/">Futurium</a>'s permanent exhibition</a></td></tr>
	<tr><td class='std col1 date'>2019-08-07</td><td class='std'><a href="https://www.mdpi.com/journal/ijgi/editors"><img src="images/newsijgi.png" width="76" height="68" alt="International Journal of Geo-information" class="logo"></a></td><td class='std'>Joined <a href="https://www.mdpi.com/journal/ijgi/editors">editorial board of International Journal of Geo-information</a></td></tr>
	<tr><td class='std col1 date'>2019-08-01</td><td class='std'><a href="https://www.isi.it/en/home"><img src="images/logoisi.png" width="64" height="64" alt="ISI Foundation" class="logo"></a></td><td class='std'>New affiliation at <a href="https://www.isi.it/en/home">ISI Foundation</a></td></tr>
	<tr><td class='std col1 date'>2019-05-09</td><td class='std'><a href="https://nerds.itu.dk/2019/05/09/postdoc-wanted/"><img src="images/logonerds.png" width="64" height="64" alt="Nerds at ITU" class="logo"></a></td><td class='std'><a href="https://nerds.itu.dk/2019/05/09/postdoc-wanted/">Postdoc wanted at NERDS</a></td></tr>
	<tr><td class='std col1 date'>2019-04-24</td><td class='std'><a href="https://nerds.itu.dk/"><img src="images/logonerds.png" width="64" height="64" alt="Nerds at ITU" class="logo"></a></td><td class='std'>New research group founded: <a href="https://nerds.itu.dk/">NEtwoRks, Data, and Society (NERDS)</a> at <a href="https://en.itu.dk/">ITU Copenhagen</a></td></tr>
	<tr><td class='std col1 date'>2019-02-01</td><td class='std'><a href="https://en.itu.dk/"><img src="images/logoitu.png" width="64" height="64" alt="IT University of Copenhagen" class="logo"></a></td><td class='std'>New position at <a href="https://en.itu.dk/">ITU Copenhagen</a></td></tr>
	<tr><td class='std col1 date'>2019-01-08</td><td class='std'><a href="https://www.nature.com/articles/s42254-018-0005-3"><img src="images/newsnaturereviewsphysics.jpg" width="64" height="64" alt="Nature Reviewes Physics paper" class="logo"></a></td><td class='std'>Paper published in <a href="https://www.nature.com/articles/s42254-018-0005-3">Nature Reviews Physics</a> on taking census of physics</td></tr>
	<tr><td class='std col1 date'>2019-01-07</td><td class='std'><a href="https://collections.plos.org/s/science-of-stories"><img src="images/newsplosone.jpg" width="76" height="86" alt="PLOS ONE" class="logo"></a></td><td class='std'>Call for papers at PLOS ONE:<br /><a href="https://collections.plos.org/s/science-of-stories">Science of Stories</a><br />Submission deadline: 2019-06-14</td></tr>
	<tr><td class='std col1 date'>2018-11-01</td><td class='std'><a href="https://rdcu.be/bawST"><img src="images/newsnaturephysics.png" width="64" height="64" alt="Nature Physics paper" class="logo"></a></td><td class='std'>Paper published in <a href="https://rdcu.be/bawST">Nature Physics</a> on interdisciplinarity and the Nobel Prize</td></tr>
	<tr><td class='std col1 date'>2018-10-17</td><td class='std'><a href="https://www.cityvis.io/competition.php?year=2018"><img src="images/logowhatthestreet.png" width="58" height="58" alt="Winner City Vis 2018" class="logo"></a></td><td class='std'>What the Street!? visualization won the <a href="https://www.cityvis.io/competition.php?year=2018">City Vis 2018 competition</a> in Art &amp; Advocacy</td></tr>
	<tr><td class='std col1 date'>2018-03-29</td><td class='std'><a href="https://www.cogitatiopress.com/urbanplanning/article/view/1209/"><img src="images/logowhatthestreet.png" width="58" height="58" alt="Urban Planning paper" class="logo"></a></td><td class='std'>Paper published in <a href="https://www.cogitatiopress.com/urbanplanning/article/view/1209/">Urban Planning</a></td></tr>
	<tr><td class='std col1 date'>2018-03-14</td><td class='std'><a href="http://michael.szell.net/hawking/"><img src="images/logohawking.png" width="58" height="58" alt="Stephen Hawking Tribute" class="logo"></a></td><td class='std'><a href="http://michael.szell.net/hawking/">Tribute to Stephen Hawking published</a></td></tr>
	<tr><td class='std col1 date'>2018-01-09</td><td class='std'><a href="http://www.complex-systems.com/"><img src="images/newscomplexsystems.jpg" width="65" height="86" alt="Complex Systems" class="logo"></a></td><td class='std'>Joined Editorial Board of <a href="http://www.complex-systems.com/">Complex Systems</a></td></tr>
	<tr><td class='std col1 date'>2017-12-15</td><td class='std'><a href="http://journals.plos.org/plosone/static/editorial-board"><img src="images/newsplosone.jpg" width="76" height="86" alt="PLOS ONE" class="logo"></a></td><td class='std'>Joined <a href="http://journals.plos.org/plosone/static/editorial-board">Editorial Board of PLOS ONE</a></td></tr>
	<tr><td class='std col1 date'>2017-12-05</td><td class='std'><a href="http://www.mdpi.com/journal/ijgi/special_issues/Human-Centric_Data_Urban"><img src="images/newsijgi.png" width="76" height="68" alt="International Journal of Geo-information" class="logo"></a></td><td class='std'>Call for papers at International Journal of Geo-information:<br /><a href="http://www.mdpi.com/journal/ijgi/special_issues/Human-Centric_Data_Urban">Human-Centric Data Science for Urban Studies</a><br />Editors: Resch, Szell<br />Submission deadline: 2019-04-30</td></tr>
	<tr><td class='std col1 date'>2017-05-04</td><td class='std'><a href="https://epjdatascience.springeropen.com/cfp-humanmobility"><img src="images/newsepjdatascience.jpg" width="64" height="64" alt="EPJ Data Science" class="logo"></a></td><td class='std'>Call for papers at EPJ Data Science:<br /><a href="https://epjdatascience.springeropen.com/cfp-humanmobility">Individual and Collective Human Mobility:<br />Description, Modelling, Prediction</a><br />Editors: Simini, Ghoshal, Pappalardo, Szell, H&ouml;vel<br />Submission deadline (extended): 2018-01-31</td></tr>
</table>
	</div>

<h3>Current research</h3>
<p>Watch my keynote to learn about my current research:</p>
<iframe width="619" height="348" src="https://www.youtube-nocookie.com/embed/yGW2TsV-LDA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


<h3>Bio</h3>
<p>
Michael Szell is associate professor in Data Science at IT University of Copenhagen, and external researcher at ISI Foundation and at the Complexity Science Hub Vienna. His research quantifies the patterns behind interlinked human behavior and human-built structures through mining large-scale data sets. He follows an anti-disciplinary approach using methods from data science and network science. Michael's current focus is on sustainable urban mobility and urban data science. He has also developed several interactive data visualization platforms such as <a href="https://whatthestreet.com">What the Street!?</a>, and the award-winning massive multiplayer online game <a href="https://www.pardus.at">Pardus</a>.
</p>


<h3>Research interests</h3>
<ul>
	<li>Urban Data Science, Human mobility, Sustainable transport</li>
	<li>Data visualization, Complex systems, Network science</li>
	<li>Quantifying human behavior and social networks, in particular online and in cities</li>
</ul>


<h3>Research highlights</h3>
<table width="619px">
<tr>
	<td><a href='https://www.nature.com/articles/s41586-021-03480-9'><img src='images/papernaturemobility.jpg' width='95' title='2021-05-26: Nature paper on mobility published' alt='2021-05-26: Nature paper on mobility published'></a></td>
	<td><a href='https://doi.org/10.1038/s41567-018-0314-6'><img src='images/papernaturephysicsnobel.jpg' width='95' title='2018-11-01: Nature Physics perspective on Nobel Prizes published' alt='2018-11-01: Nature Physics perspective on Nobel Prizes published'></a></td>
	<td><a href='https://www.cogitatiopress.com/urbanplanning/article/view/1209/'><img src='images/paperurbanplanningmobility.jpg' width='95' title='2018-03-29: Urban Planning paper on mobility space inequality published' alt='2018-03-29: Urban Planning paper on mobility space inequality published'></a></td>
	<td><a href='http://www.nature.com/nphys/journal/v11/n10/full/nphys3494.html'><img src='images/papernaturephysicstenyears.jpg' width='95' title='2015-10-01: Nature Physics paper on citation networks published and on the cover' alt='2015-10-01: Nature Physics paper on citation networks published and on the cover'></a></td>
	<td><a href='http://www.pnas.org/content/111/37/13290'><img src='images/paperpnastaxi.jpg' width='94' title='2014-09-16: PNAS paper on taxi shareability published and on the cover' alt='2014-09-16: PNAS paper on taxi shareability published and on the cover'></a></td>
	<!--<td><a href='http://www.sciencemag.org/content/343/6174/970.full?ijkey=doMi4KrdCymkw&keytype=ref&siteid=sci'><img src='images/sciencebookreview.jpg' width='94' title='2014-02-28: Book review published in Science' alt='2014-02-28: Book review published in Science'></a></td>-->
	<!--<td><a href='http://www.pnas.org/content/110/12/4703'><img src='images/paperpnasdiabetes.jpg' width='94' title='2013-03-19: PNAS paper on diabetes risk published' alt='2013-03-19: PNAS paper on diabetes risk published'></a></td>-->
	<td><a href='http://www.pnas.org/content/107/31/13636'><img src='images/paperpnasmultiplex.jpg' width='94' title='2010-08-03: PNAS paper on multiplex networks published' alt='2010-08-03: PNAS paper on multiplex networks published'></a></td>
</tr>
</table>


<h3>Data visualization highlights</h3>
<table width="619px">
<tr>
	<td><a href='http://growbike.net'><img src='images/datavizgrowbikenet.jpg' width='300' height='188' title='2021-07: GrowBike.Net' alt='2021-07: GrowBike.Net'></a></td>
	<td><a href='https://github.com/mszell/taxonomybikenw'><img src='images/datavizbikenwapproaches.png' width='300' height='188' title='2021-01: Taxonomy of Urban Bicycle Network Approaches' alt='2021-01: Taxonomy of Urban Bicycle Network Approaches'></a></td>
</tr>
<tr>
	<td><a href='https://whatthestreet.com/'><img src='images/datavizwts.png' width='300' title='2017-06: What the Street!?' alt='2017-06: What the Street!?'></a></td>
	<td><a href='http://senseable.mit.edu/tweetbursts/'><img src='images/dataviztweetbursts.png' width='300' height='188' title='2014-02: Tweet Bursts' alt='2014-02: Tweet Bursts'></a></td>
</tr>
</table>


<h3>Education</h3>
<table>
	<tr><td class='std col1 date'>2012 / 03</td><td class='std' style='text-align: center;'><a href="http://www.univie.ac.at/en/"><img src="images/logounivienna.png" width="64" height="64" alt="University of Vienna" class="logo"></a></td><td class='std'>Ph.D. in Physics, University of Vienna<br/>
		<a href="downloads/szell2011spa.pdf"><div class='filepdf'>Ph.D. Thesis</div></a>
		<br />Advisors: Stefan Thurner, Christoph Dellago</td></tr>

	<tr><td class='std col1 date'>2007 / 10</td><td class='std' style='text-align: center;'><a href="http://www.tuwien.ac.at/en/"><img src="images/logotuvienna.png" width="58" height="58" alt="Vienna University of Technology" class="logo"></a></td><td class='std'>M.Sc. in Technical Mathematics with focus on computer science, Vienna University of Technology<br/>
			<a href="downloads/szell2007fdv.pdf"><div class='filepdf'>M.Sc. Thesis<br /></div></a></td></tr>
</table>



<h3>Current positions</h3>
<table>
	<tr><td class='std col1 date'>since<br />2020 / 10</td></td><td class='std' style='text-align: center;'><a href="https://en.itu.dk/"><img src="images/logoitu.png" width="58" height="58" alt="IT University of Copenhagen" class="logo"></a></td><td class='std'>Associate professor, <a href="https://en.itu.dk/research/departments/computer-science-department">Computer Science Department</a>, <a href="https://en.itu.dk/">IT University of Copenhagen</a></td></tr>
	<tr><td class='std col1 date'>since<br />2021 /11</td></td><td class='std' style='text-align: center;'><a href="https://www.isi.it/en/home"><img src="images/logoisi.png" width="58" height="58" alt="ISI Foundation" class="logo"></a></td><td class='std'>Researcher, <a href="https://www.isi.it/en/home">ISI Foundation</a></td></tr>
	<tr><td class='std col1 date'>since<br />2017 / 04</td></td><td class='std' style='text-align: center;'><a href="http://csh.ac.at/"><img src="images/logocsh.png" width="58" height="58" alt="Complexity Science Hub Vienna" class="logo"></a></td><td class='std'>External faculty, <a href="http://csh.ac.at/">Complexity Science Hub Vienna</a></td></tr>
	<tr><td class='std col1 date'>since<br />2006 / 09</td><td></td><td class='std'>Founder and manager of Bayer &amp; Szell OG</td></tr>
	<tr><td class='std col1 date'>since<br />2004 / 07</td><td class='std' style='text-align: center;'><a href="http://www.pardus.at/"><img src="images/logopardus.png" width="58" height="58" alt="Pardus" class="logo"></a></td><td class='std'>Developer and administrator of the Massive Multiplayer Online Game <a href="http://www.pardus.at/">Pardus</a></td></tr>
</table>


<h3>Past positions</h3>
<table>
	<tr><td class='std col1 date'>2020 / 09<br />2019 / 02</td></td><td class='std' style='text-align: center;'><a href="https://en.itu.dk/"><img src="images/logoitu.png" width="58" height="58" alt="IT University of Copenhagen" class="logo"></a></td><td class='std'>Assistant professor, <a href="https://en.itu.dk/research/departments/computer-science-department">Computer Science Department</a>, <a href="https://en.itu.dk/">IT University of Copenhagen</a></td></tr>
	<tr><td class='std col1 date'>2020 / 07<br />2019 / 08</td></td><td class='std' style='text-align: center;'><a href="https://www.isi.it/en/home"><img src="images/logoisi.png" width="58" height="58" alt="ISI Foundation" class="logo"></a></td><td class='std'>Researcher, <a href="https://www.isi.it/en/home">ISI Foundation</a></td></tr>
	<tr><td class='std col1 date'>2019 / 01<br />2017 / 10</td></td><td class='std' style='text-align: center;'><a href="http://www.ceu.edu/"><img src="images/logoceu.png" width="58" height="58" alt="Central European University" class="logo"></a></td><td class='std'>Assistant professor, <a href="https://cns.ceu.edu/">Department of Network and Data Science</a>, <a href="http://www.ceu.edu/">Central European University</a></td></tr>
	<tr><td class='std col1 date'>2019 / 01<br />2017 / 09</td></td><td class='std' style='text-align: center;'><a href="http://mta.hu/english"><img src="images/logomta.png" width="44" height="58" alt="Hungarian Academy of Sciences" class="logo"></a></td><td class='std'>Researcher, <a href="http://www.krtk.mta.hu/">Centre for Economic and Regional Studies</a>, <a href="http://mta.hu/english">Hungarian Academy of Sciences</a></td></tr>
	<tr><td class='std col1 date'>2019 / 01<br />2016 / 09</td></td><td class='std' style='text-align: center;'><a href="http://www.northeastern.edu/"><img src="images/logoneu.png" width="58" height="58" alt="Northeastern University" class="logo"></a></td><td class='std'>Adjunct visiting professor, <a href="http://www.barabasilab.com/">Center for Complex Network Research</a>, <a href="http://www.northeastern.edu/">Northeastern University</a></td></tr>
	<tr><td class='std col1 date'>2017 / 09<br />2016 / 10</td></td><td class='std' style='text-align: center;'><a href="http://www.ceu.edu/"><img src="images/logoceu.png" width="58" height="58" alt="Central European University" class="logo"></a></td><td class='std'>Visiting research fellow, <a href="https://cns.ceu.edu/">Center for Network Science</a>, <a href="http://www.ceu.edu/">Central European University</a></td></tr>
	<tr><td class='std col1 date'>2017 / 09<br />2016 / 09</td></td><td class='std' style='text-align: center;'><a href="http://mta.hu/english"><img src="images/logomta.png" width="44" height="58" alt="Hungarian Academy of Sciences" class="logo"></a></td><td class='std'>Research fellow, <a href="http://www.tk.mta.hu/en">Centre for Social Sciences</a>, <a href="http://mta.hu/english">Hungarian Academy of Sciences</a></td></tr>
	<tr><td class='std col1 date'>2016 / 12<br />2016 / 09</td></td><td class='std' style='text-align: center;'><a href="http://www.moovel.com/"><img src="images/logomoovel.png" width="58" height="58" alt="moovel" class="logo"></a></td><td class='std'>Researcher in residence, <a href="http://lab.moovel.com/">moovel lab</a></td></tr>
	<tr><td class='std col1 date'>2016 / 09<br />2014 / 07</td></td><td class='std' style='text-align: center;'><a href="http://www.northeastern.edu/"><img src="images/logoneu.png" width="58" height="58" alt="Northeastern University" class="logo"></a></td><td class='std'>Postdoctoral research associate, <a href="http://www.barabasilab.com/">Center for Complex Network Research</a>, <a href="http://www.northeastern.edu/">Northeastern University</a></td></tr>
	<tr><td class='std col1 date'>2014 / 07<br />2012 / 04</td></td><td class='std' style='text-align: center;'><a href="http://www.mit.edu"><img src="images/logomit.png" width="64" height="36" alt="Massachusetts Institute of Technology" class="logo"></a></td><td class='std'>Postdoctoral research fellow, <a href="http://senseable.mit.edu/">Senseable City Laboratory</a>, <a href="http://www.mit.edu/">Massachusetts Institute of Technology</a></td></tr>
	<tr><td class='std col1 date'>2011 / 12<br />2009 / 01</td><td class='std' style='text-align: center;'><a href="http://www.meduniwien.ac.at/homepage/homepage/en/"><img src="images/logomedunivienna.png" width="58" height="58" alt="Medical University of Vienna" class="logo"></a></td><td class='std'>Research assistant, <a href="http://www.complex-systems.meduniwien.ac.at/">Section for Science of Complex Systems</a>, <a href="http://www.meduniwien.ac.at/">Medical University of Vienna</a></td></tr>
</table>


    			<div class="clear"></div>
    		</div>
		</div>
	</div>


<?php
echo $footer;
?>

</body>
</html>
