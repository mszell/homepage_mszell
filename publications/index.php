<?php
$section = "publications";

include "../constants.php";

echo $head;
?>

<body>

<?php
echo $navbar;
echo $portrait;
echo $featuredarea;
?>


			<div class="main-with-sidebar">

      <!--
      <div class="temp" style='font-size:9px;color: white;background-color: #CF6767;display:inline;padding:2px;'>Preprint</div>
      <div class="temp" style='font-size:9px;color: white;background-color: #680505;display:inline;padding:2px;'>Journal</div>
      <div class="temp" style='font-size:9px;color: white;background-color: #666666;display:inline;padding:2px;'>Other</div>
      -->

<h3>My coauthorship network</h3>
<div id="collabnet"><script src="http://michael.szell.net/publications/collabnet.js" type="text/javascript"></script></div>
<p>Last update 2022-11-03</br>
Node color: Most recent date of publication with me</br>
Node size: Duration of collaboration with me</br>
Link weight: Number of co-publications<br/>
Link color: Co-publication with me (red) / between my co-authors (grey)</p>
<br/>

<p>
Download bib file of my publications: <a href="../downloads/szell.bib">szell.bib</a></br>
Download a list of my publications: <a href="../downloads/publicationlist_szell.pdf"><span class="filepdf">Publicationlist</span></a>
</p>

<h3>Non-academic</h3>
<ul>
  <li><b><a href="../downloads/article_politiken01.pdf"><div class="filepdf">Er Danmark en cykelnation?</div></a></b>, Politiken (2022)</li>
  <li><b><a href="https://blogs.biomedcentral.com/on-physicalsciences/2022/05/06/identifying-urban-features-for-vulnerable-road-user-safety-in-europe/">Identifying urban features for vulnerable road user safety in Europe</a></b>, BMC Blog Network (2022)</li>
  <li><b><a href="https://www.altinget.dk/transport/artikel/14-forskere-videnscenter-for-cyklisme-skal-vaere-uafhaengigt-og-forskningsbaseret-ikke-hoere-under-vejdirektoratet">14 forskere: Videnscenter for cyklisme skal ikke høre under Vejdirektoratet</a></b>, Altinget (2021)</li>
  <li><b><a href="https://pro.ing.dk/mobilitytech/holdning/baeredygtige-byer-kraever-maalrettet-investering-i-cykelinfrastruktur">Bæredygtige byer kræver målrettet investering i cykelinfrastruktur</a></b>, Ingeniøren / Mobilitytech (2021)</li>
  <li><b><a href="https://finans.dk/debat/ECE13173026/brug-ny-mobilitetslov-til-at-skabe-et-mere-baeredygtigt-byliv/">Brug ny mobilitetslov til at skabe et mere bæredygtigt byliv</a></b>, FINANS (2021)</li>
  <li><b><a href="https://pro.ing.dk/mobilitytech/holdning/cykling-i-byen-smaa-investeringer-i-infrastruktur-binder-din-sammen">Cykling i byen: Små investeringer i infrastruktur binder din by sammen</a></b>, Ingeniøren / Mobilitytech (2021)</li>
</ul>


<h3>2022</h3>
  <ul>
    <li class="publi pub-preprint">M. Coscia, C. Borgelt, M. Szell<br /><b>Fast Multiplex Graph Association Rules for Link Prediction</b><br />
    <a href="#" onclick="toggle('coscia2022fmg');return false;" id="info-coscia2022fmg"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/coscia2022fmg.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="https://arxiv.org/abs/2211.12094"><div class="linkexternal">arXiv</div></a><div class="info-expansion" id="coscia2022fmg"><pre><code>@inproceedings{coscia2022fmg,
  title = {Fast Multiplex Graph Association Rules for Link Prediction},
  author = {Coscia, Michele and Borgelt, Christian and Szell, Michael},
  journal = {arXiv preprint arXiv:2211.12094},
  year = {2022}
}</code></pre></div></li>
    <li class="publi pub-preprint">S.M. Breum, B. Kostic, M. Szell<br /><b>Computational Desire Line Analysis of Cyclists on the Dybbølsbro Intersection in Copenhagen</b><br />
    <a href="#" onclick="toggle('breum2022cdl');return false;" id="info-breum2022cdl"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/breum2022cdl.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="https://arxiv.org/abs/2211.01301"><div class="linkexternal">arXiv</div></a> &nbsp; <a href="https://github.com/SimonBreum/desirelines"><div class="linkexternal">Code</div></a><div class="info-expansion" id="breum2022cdl"><pre><code>@article{breum2022cdl,
  title = {Computational Desire Line Analysis of Cyclists on the Dybb{\o}lsbro Intersection in Copenhagen},
  author = {Breum, Simon Martin and Kostic, Bojan and Szell, Michael},
  journal = {arXiv preprint arXiv:2211.01301},
  year = {2022}
}</code></pre></div></li>
    <li class="publi pub-preprint">L. Alessandretti, M. Szell<br /><b>Urban Mobility</b><br />
    <a href="#" onclick="toggle('alessandretti2022um');return false;" id="info-alessandretti2022um"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/alessandretti2022um.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="https://arxiv.org/abs/2211.00355"><div class="linkexternal">arXiv</div></a> &nbsp; <a href="https://github.com/mszell/geospatialdatascience"><div class="linkexternal">Teaching material</div></a><div class="info-expansion" id="alessandretti2022um"><pre><code>@inbook{alessandretti2022um,
  title = {Compendium of Urban Complexity},
  author = {Alessandretti, Laura and Szell, Michael},
  chapter = {Urban Mobility},
  year = {2022},
  note = {arXiv preprint arXiv:2211.00355}
}</code></pre></div></li>
    <li class="publi pub-preprint">A. Battiston, L. Napoli, P. Bajardi, A. Panisson, A. Perotti, M. Szell, R. Schifanella<br /><b>Revealing the determinants of gender inequality in urban cycling with large-scale data</b><br />
    <a href="#" onclick="toggle('battiston2022rdg');return false;" id="info-battiston2022rdg"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/battiston2022rdg.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="https://arxiv.org/abs/2203.09378"><div class="linkexternal">arXiv</div></a> &nbsp; <a href="https://github.com/alibatti/GenderCyclingGapUsingStrava"><div class="linkexternal">Code</div></a><div class="info-expansion" id="battiston2022rdg"><pre><code>@article{battiston2022rdg,
  title = {Revealing the determinants of gender inequality in urban cycling with large-scale data},
  author = {Battison, Alice and Napoli, Ludovico and Bajardi, Paolo and Panisson, Andr{\'e} and Perotti, Alan and Szell, Michael and Schifanella, Rossano},
  journal = {arXiv preprint arXiv:2203.09378},
  year = {2022}
}</code></pre></div></li>
    <li class="publi pub-journal">P. Folco, L. Gauvin, M. Tizzoni, M. Szell<br /><b>Data-driven micromobility network planning for demand and safety</b><br /><a href="https://journals.sagepub.com/eprint/JAEWNHDIWHYHGXIDNYJC/full">Environment and Planning B 0, 1-16 (2022)</a><br />
    <a href="#" onclick="toggle('folco2022dmn');return false;" id="info-folco2022dmn"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/folco2022dmn.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="https://arxiv.org/abs/2203.14619"><div class="linkexternal">arXiv</div></a> &nbsp; <a href="https://github.com/pietrofolco/Data-driven_bicycle_network_planning_for_demand_and_safety"><div class="linkexternal">Code</div></a> &nbsp; <a href="http://www.datainterfaces.org/projects/biketracks/#turin"><div class="linkexternal">Project page</div></a><div class="info-expansion" id="folco2022dmn"><pre><code>@article{folco2022dmn,
  title = {Data-driven micromobility network planning for demand and safety},
  author = {Folco, Pietro and Gauvin, Laetitia and Tizzoni, Michele and Szell, Michael},
  journal = {Environment and Planning B: Urban Analytics and City Science},
  year = {2022},
  volume = {0},
  number = {0},
  pages = {1--16},
  doi = {10.1177/23998083221135611}
}</code></pre></div></li>
    <li class="publi pub-journal">L. Alessandretti, L.G. Natera Orozco, M. Saberi, M. Szell, F. Battiston<br /><b>Multimodal urban mobility and multilayer transport networks</b><br /><a href="https://journals.sagepub.com/doi/10.1177/23998083221108190">Environment and Planning B 0, 1-33 (2022)</a><br />
    <a href="#" onclick="toggle('alessandretti2022mum');return false;" id="info-alessandretti2022mum"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/alessandretti2022mum.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="https://arxiv.org/abs/2111.02152"><div class="linkexternal">arXiv</div></a><div class="info-expansion" id="alessandretti2022mum"><pre><code>@article{alessandretti2022mum,
  title = {Multimodal urban mobility and multilayer transport networks},
  author = {Alessandretti, Laura and Natera Orozco, Luis Guillermo and Saberi, Meead and Szell, Michael and Battiston, Federico},
  journal = {Environment and Planning B: Urban Analytics and City Science},
  year = {2022},
  volume = {0},
  number = {0},
  pages = {1--33},
  doi = {10.1177/23998083221108190}
}</code></pre></div></li>
    <li class="publi pub-journal">M. Klanjčić, L. Gauvin, M. Tizzoni, M. Szell<br /><b>Identifying urban features for vulnerable road user safety in Europe</b><br /><a href="https://epjdatascience.springeropen.com/articles/10.1140/epjds/s13688-022-00339-5">EPJ Data Science 11, 27 (2022)</a><br />
    <a href="#" onclick="toggle('klanjcic2022iuf');return false;" id="info-klanjcic2022iuf"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/klanjcic2022iuf.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="https://osf.io/preprints/socarxiv/89cyu/"><div class="linkexternal">SocArXiv</div></a> &nbsp; <a href="https://github.com/klnmrn/urbanroadsafety"><div class="linkexternal">Code</div></a> &nbsp; <a href="https://blogs.biomedcentral.com/on-physicalsciences/2022/05/06/identifying-urban-features-for-vulnerable-road-user-safety-in-europe/"><div class="linkexternal">Blog post</div></a><div class="info-expansion" id="klanjcic2022iuf"><pre><code>@article{klanjcic2022iuf,
  title = {Identifying urban features for vulnerable road user safety in {E}urope},
  author = {Klanj\v{c}i{\'c}, Marina and Gauvin, Laetitia and Tizzoni, Michele and Szell, Michael},
  journal = {EPJ Data Science},
  year = {2022},
  volume = {11},
  number = {27},
  doi = {10.1140/epjds/s13688-022-00339-5}
}</code></pre></div></li>
    <li class="publi pub-journal">M. Szell, S. Mimar, T. Perlman, G. Ghoshal, R. Sinatra<br /><b>Growing urban bicycle networks</b><br /><a href="https://www.nature.com/articles/s41598-022-10783-y">Scientific Reports 12, 6765 (2022)</a><br />
    <a href="#" onclick="toggle('szell2022gub');return false;" id="info-szell2022gub"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/szell2022gub.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="../downloads/szell2022gub_si.pdf"><div class="filepdf">SI</div></a> &nbsp; <a href="https://arxiv.org/abs/2107.02185"><div class="linkexternal">arXiv</div></a> &nbsp; <a href="https://github.com/mszell/bikenwgrowth"><div class="linkexternal">Code</div></a> &nbsp; <a href="https://zenodo.org/record/5083049"><div class="linkexternal">Data</div></a> &nbsp; <a href="http://growbike.net"><div class="linkexternal">Project page</div></a><div class="info-expansion" id="szell2022gub"><pre><code>@article{szell2022gub,
  title = {Growing urban bicycle networks},
  author = {Szell, Michael and Mimar, Sayat and Perlman, Tyler and Ghoshal, Gourab and Sinatra, Roberta},
  journal = {Scientific Reports},
  year = {2022},
  volume = {12},
  number = {6765},
  doi = {10.1038/s41598-022-10783-y}
}</code></pre></div></li>
  
    <li class="publi pub-journal">A. Vybornova, T. Cunha, A. Gühnemann, M. Szell<br /><b>Automated Detection of Missing Links in Bicycle Networks</b><br /><a href="https://onlinelibrary.wiley.com/doi/epdf/10.1111/gean.12324">Geographical Analysis 0, 1-29 (2022)</a><br />
    <a href="#" onclick="toggle('vybornova2022adm');return false;" id="info-vybornova2022adm"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/vybornova2022adm.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="../downloads/vybornova2022adm_si.pdf"><div class="filepdf">SI</div></a> &nbsp; <a href="https://arxiv.org/abs/2201.03402"><div class="linkexternal">arXiv</div></a> &nbsp; <a href="https://github.com/anastassiavybornova/bikenwgaps"><div class="linkexternal">Code</div></a> &nbsp; <a href="http://fixbike.net"><div class="linkexternal">Project page</div></a><div class="info-expansion" id="vybornova2022adm"><pre><code>@article{vybornova2022adm,
  title = {Automated Detection of Missing Links in Bicycle Networks},
  author = {Vybornova, Anastassia and Cunha, Tiago and G{\"u}hnemann, Astrid and Szell, Michael},
  journal = {Geographical Analysis},
  year = {2022},
  volume = {0},
  pages = {1--29}
}</code></pre></div></li>
  </ul>

<h3>2021</h3>
  <ul>
    <li class="publi pub-journal">M. Coscia, M. Szell<br /><b>Multilayer Graph Association Rules for Link Prediction</b><br /><a href="https://ojs.aaai.org/index.php/ICWSM/article/view/18047">
      Proceedings of the International AAAI Conference on Web and Social Media 15(1), 129-139 (2021)</a><br />
    <a href="#" onclick="toggle('coscia2021mga');return false;" id="info-coscia2021mga"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/coscia2021mga.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="https://arxiv.org/abs/2008.08351"><div class="linkexternal">arXiv</div></a><div class="info-expansion" id="coscia2021mga"><pre><code>@inproceedings{coscia2021mga,
  title = {Multilayer Graph Association Rules for Link Prediction},
  author = {Coscia, Michele and Szell, Michael},
  journal = {Proceedings of the International AAAI Conference on Web and Social Media},
  year = {2021},
  volume = {15},
  number = {1},
  pages = {129--139}
}</code></pre></div></li>
  <li class="publi pub-journal">M. Schläpfer, L. Dong, K. O'Keeffe, P. Santi, M. Szell,
  H. Salat, S. Anklesaria, M. Vazifeh, C. Ratti, G.B. West<br /><b>The universal visitation law of human mobility</b><br />
  <a href="https://www.nature.com/articles/s41586-021-03480-9">Nature 593(7860), 522-527 (2021)</a><br />
  <a href="#" onclick="toggle('schlapfer2021uvl');return false;" id="info-schlapfer2021uvl"><div vb  class="filebib">Bib</div></a> &nbsp; <a href="../downloads/schlapfer2021uvl.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="https://senseable.mit.edu/wanderlust/"><div class="linkexternal">Project page</div></a><div class="info-expansion" id="schlapfer2021uvl"><pre><code>@article{schlapfer2021uvl,
  title = {The universal visitation law of human mobility},
  author = {Schl{\"a}pfer, Markus and Dong, Lei and O'Keefee, Kevin and Santi, Paolo and Szell, Michael and Salat, Hadrien and Anklesaria, Samuel and Vazifeh, Mohammad and Ratti, Carlo and West, Geoffrey B.},
  journal = {Nature},
  year = {2021},
  volume = {593},
  number = {7860},
  pages = {522--527},
  doi = {10.1038/s41586-021-03480-9}
}</code></pre></div></li>
</ul>

<h3>2020</h3>
  <ul>
    <li class="publi pub-journal">L.G. Natera Orozco, F. Battiston, G. Iñiguez, M. Szell<br /><b>Data-driven strategies for optimal bicycle network growth</b><br />
    <a href="https://royalsocietypublishing.org/doi/10.1098/rsos.201130">Royal Society Open Science 7:201130 (2020)</a><br />
    <a href="#" onclick="toggle('nateraorozco2020dso');return false;" id="info-nateraorozco2019dso"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/nateraorozco2020dso.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="https://arxiv.org/abs/1907.07080"><div class="linkexternal">arXiv</div></a><div class="info-expansion" id="nateraorozco2020dso"><pre><code>@article{nateraorozco2020dso,
  title = {Data-driven strategies for optimal bicycle network growth},
  author = {Natera Orozco, Luis Guillermo and Battiston, Federico and I{\~n}iguez, Gerardo and Szell, Michael},
  journal = {Royal Society Open Science},
  year = {2020},
  volume = {7},
  number = {201130},
  doi = {10.1098/rsos.201130}
}</code></pre></div></li>
    <li class="publi pub-journal">L.G. Natera Orozco, F. Battiston, G. Iñiguez, M. Szell<br /><b>Extracting the multimodal fingerprint of urban transportation networks</b><br /><a href="https://transportfindings.org/article/13171-extracting-the-multimodal-fingerprint-of-urban-transportation-networks">Transport Findings 13171 (2020)</a><br />
    <a href="#" onclick="toggle('nateraorozco2020emf');return false;" id="info-nateraorozco2020emf"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/nateraorozco2020emf.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="https://arxiv.org/abs/2006.03435"><div class="linkexternal">arXiv</div></a><div class="info-expansion" id="nateraorozco2020emf"><pre><code>@article{nateraorozco2020emf,
  title = {Extracting the multimodal fingerprint of urban transportation networks},
  author = {Natera Orozco, Luis Guillermo and Battiston, Federico and I{\~n}iguez, Gerardo and Szell, Michael},
  journal = {Transport Findings},
  year = {2020},
  volume = {13171},
  doi = {10.32866/001c.13171}
}</code></pre></div></li>
  </ul>


<h3>2019</h3>
  <ul>
    <li class="publi pub-other">B. Resch, M. Szell<br /><b>Human-Centric Data Science for Urban Studies</b><br /><a href="https://www.mdpi.com/2220-9964/8/12/584">ISPRS International Journal of Geo-Information 8, 584 (2019)</a><br />
    <a href="#" onclick="toggle('resch2019hds');return false;" id="info-resch2019hds"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/resch2019hds.pdf"><div class="filepdf">Article</div></a><div class="info-expansion" id="resch2019hds"><pre><code>@article{resch2019hds,
  title = {Human-Centric Data Science for Urban Studies},
  author = {Resch, Bernd and Szell, Michael},
  journal = {ISPRS International Journal of Geo-Information},
  year = {2019},
  volume = {8},
  number = {584},
  doi = {10.3390/ijgi8120584}
}</code></pre></div></li>
    <li class="publi pub-journal">F. Battiston, F. Musciotto, D. Wang, A.-L. Barab&aacute;si, M. Szell, R. Sinatra<br /><b>Taking census of physics</b><br /><a href="https://www.nature.com/articles/s42254-018-0005-3">Nature Reviews Physics 1, 89-97 (2019)</a><br />
    <a href="#" onclick="toggle('battiston2019tcp');return false;" id="info-battiston2019tcp"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/battiston2019tcp.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="../downloads/battiston2019tcp_si.pdf"><div class="filepdf">SI</div></a> &nbsp; <a href="https://arxiv.org/abs/1901.02789"><div class="linkexternal">arXiv</div></a><div class="info-expansion" id="battiston2019tcp"><pre><code>@article{battiston2019tcp,
  title = {Taking census of physics},
  author = {Battiston, Federico and Musciotto, Federico and Wang, Dashun and Barab{\'a}si, Albert-L{\'a}szl{\'o} and Szell, Michael and Sinatra, Roberta},
  journal = {Nature Reviews Physics},
  year = {2019},
  volume = {1},
  pages = {89--97},
  doi = {10.1038/s42254-018-0005-3}
}</code></pre></div></li>
  </ul>



<h3>2018</h3>
  <ul>
    <li class="publi pub-journal">M. Szell, Y. Ma, R. Sinatra<br /><b>A Nobel opportunity for interdisciplinarity</b><br /><a href="https://doi.org/10.1038/s41567-018-0314-6">Nature Physics 14, 1075-1078 (2018)</a><br />
    <a href="#" onclick="toggle('szell2018noi');return false;" id="info-szell2018noi"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/szell2018noi.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="../downloads/szell2018noi_si.pdf"><div class="filepdf">SI</div></a> &nbsp; <a href="https://arxiv.org/abs/1811.00286"><div class="linkexternal">arXiv</div></a><div class="info-expansion" id="szell2018noi"><pre><code>@article{szell2018noi,
  title = {A Nobel opportunity for interdisciplinarity},
  author = {Szell, Michael and Ma, Yifang and Sinatra, Roberta},
  journal = {Nature Physics},
  year = {2018},
  volume = {14},
  pages = {1075--1078},
  doi = {10.1038/s41567-018-0314-6}
}</code></pre></div></li>
    <li class="publi pub-journal">M. Szell<br /><b>Crowdsourced quantification and visualization of urban mobility space inequality</b><br /><a href="https://www.cogitatiopress.com/urbanplanning/article/view/1209/">Urban Planning 3, 1-20 (2018)</a><br />
    <a href="#" onclick="toggle('szell2018cqv');return false;" id="info-szell2018cqv"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/szell2018cqv.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="https://osf.io/preprints/socarxiv/je5r4"><div class="linkexternal">SocArXiv</div></a><div class="info-expansion" id="szell2018cqv"><pre><code>@article{szell2018cqv,
  title = {Crowdsourced quantification and visualization of urban mobility space inequality},
  author = {Szell, Michael},
  journal = {Urban Planning},
  year = {2018},
  volume = {3},
  pages = {1--20},
  doi = {10.17645/up.v3i1.1209}
}</code></pre></div></li>
  </ul>



<h3>2017</h3>
  <ul>
    <li class="publi pub-journal">S. Grauwin, M. Szell, S. Sobolevsky, P. H&ouml;vel, F. Simini, M. Vanhoof, Z. Smoreda, A.-L. Barab&aacute;si, C. Ratti<br /><b>Identifying and modeling the structural discontinuities of human interactions</b><br /><a href="http://www.nature.com/articles/srep46677">Scientific Reports 7, 46677 (2017)</a><br />
    <a href="#" onclick="toggle('grauwin2017ims');return false;" id="info-grauwin2017ims"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/grauwin2017ims.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="../downloads/grauwin2017ims_si.pdf"><div class="filepdf">SI</div></a> &nbsp; <a href="https://arxiv.org/abs/1509.03149"><div class="linkexternal">arXiv</div></a><div class="info-expansion" id="grauwin2017ims"><pre><code>@article{grauwin2017ims,
  title = {Identifying and modeling the structural discontinuities of human interactions},
  author = {Grauwin, Sebastian and Szell, Michael and Sobolevsky, Stanislav and H{\"o}vel, Philipp and Simini, Filippo and Vanhoof, Maarten and Smoreda, bigniew and Barab{\'a}si, Albert-L{\'a}szl{\'o} and Ratti, Carlo},
  journal = {Scientific Reports},
  year = {2017},
  volume = {7},
  number = {46677},
  doi = {10.1038/srep46677}
}</code></pre></div></li>
    <li class="publi pub-journal">R. Tachet, O. Sagarra, P. Santi, G. Resta, M. Szell, S. Strogatz, C. Ratti<br /><b>Scaling law of urban ride sharing</b><br /><a href="http://www.nature.com/articles/srep42868">Scientific Reports 7, 42868 (2017)</a><br />
    <a href="#" onclick="toggle('tachet2017slu');return false;" id="info-tachet2017slu"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/tachet2017slu.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="../downloads/tachet2017slu_si.pdf"><div class="filepdf">SI</div></a> &nbsp; <a href="http://arxiv.org/abs/1610.09921"><div class="linkexternal">arXiv</div></a><div class="info-expansion" id="tachet2017slu"><pre><code>@article{tachet2017slu,
  title = {Scaling law of urban ride sharing},
  author = {Tachet, Remi and Sagarra, Oleguer and Santi, Paolo and Resta, Giovanni and Szell, Michael and Strogatz, Steven H and Ratti, Carlo},
  journal = {Scientific Reports},
  year = {2017},
  volume = {7},
  number = {42868},
  doi = {10.1038/srep42868}
}</code></pre></div></li>
    <li class="publi pub-other">Y. Holovatch, O. Mryglod, M. Szell, S. Thurner<br /><b>Analyses of a Virtual World</b><br />In: Maths Meets Myths: Complexity-science approaches to folktales, myths, sagas, and histories (2017), Springer. Eds: R. Kenna, M. MacCarron, P. MacCarron<br />
    <a href="#" onclick="toggle('holovatch2017avw');return false;" id="info-holovatch2017avw"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/holovatch2017avw.pdf"><div class="filepdf">Chapter</div></a> &nbsp; <a href="https://link.springer.com/chapter/10.1007/978-3-319-39445-9_7"><div class="linkexternal">Publisher</div></a> &nbsp; <a href="http://arxiv.org/abs/1602.01388"><div class="linkexternal">arXiv</div></a><div class="info-expansion" id="holovatch2017avw"><pre><code>@inbook{holovatch2017avw,
  title = {Maths Meets Myths: Complexity-science approaches to folktales, myths, sagas, and histories},
  author = {Holovatch, Yurij and Mryglod, Olesya and Szell, Michael and Thurner, Stefan},
  chapter = {Analyses of a Virtual World},
  editor = {Kenna, Ralph and MacCarron, P{\'a}draig and MacCarron, M{\'a}ir{\'i}n},
  publisher = {Springer},
  year = {2017},
  pages = {115--130},
  doi = {10.1007/978-3-319-39445-9_7}
}</code></pre></div></li>
  </ul>

<h3>2016</h3>
  <ul>
    <li class="publi pub-journal">M. Nyhan, S. Sobolevsky, C. Kang, P. Robinson, A. Corti, M. Szell, D. Streets, Z. Lu, R. Britter, S.R.H. Barrett, C. Ratti<br /><b>Predicting vehicular emissions in high spatial resolution using pervasively measured transportation data and microscopic emissions model</b><br /><a href="http://www.sciencedirect.com/science/article/pii/S1352231016304502">Atmospheric Environment 140, 352-363 (2016)</a><br />
    <a href="#" onclick="toggle('nyhan2016pve');return false;" id="info-nyhan2016pve"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/nyhan2016pve.pdf"><div class="filepdf">Article</div></a><div class="info-expansion" id="nyhan2016pve"><pre><code>@article{nyhan2016pve,
  title = {Predicting vehicular emissions in high spatial resolution using pervasively measured transportation data and microscopic emissions model},
  author = {Nyhan, Marguerite and Sobolevsky, Stanislav and Kang, Chaogui and Robinson, Prudence and Corti, Andrea and Szell, Michael and Streets, David and Lu, Zifeng and Britter, Rex and  Barrett, Steven R.H. and Ratti, Carlo},
  journal = {Atmospheric Environment},
  volume = {140},
  pages = {352--363},
  year = {2016},
  publisher = {Elsevier},
  doi = {10.1016/j.atmosenv.2016.06.018}
}</code></pre></div></li>
  </ul>

<h3>2015</h3>
	<ul>
		<li class="publi pub-other">M. Szell, R. Sinatra<br /><b>Research funding goes to rich clubs</b><br /><a href="http://www.pnas.org/content/112/48/14749.extract">Proceedings of the National Academy of Sciences 112(48), 14749-14750 (2015)</a><br />
		<a href="#" onclick="toggle('szell2015rfg');return false;" id="info-szell2015rfg"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/szell2015rfg.pdf"><div class="filepdf">Article</div></a><div class="info-expansion" id="szell2015rfg"><pre><code>@article{szell2015rfg,
  title = {Research funding goes to rich clubs},
  author = {Szell, Michael and Sinatra, Roberta},
  journal = {Proceedings of the National Academy of Sciences},
  year  = {2015},
  volume = {112},
  number = {48},
  pages = {14749--14750},
  doi = {10.1073/pnas.1520118112}
}</code></pre></div></li>
		<li class="publi pub-journal">R. Sinatra, P. Deville, M. Szell, D. Wang, A.-L. Barab&aacute;si<br /><b>A century of physics</b><br /><a href="http://www.nature.com/nphys/journal/v11/n10/full/nphys3494.html">Nature Physics 11(10), 791-796 (2015)</a><br />
		<a href="#" onclick="toggle('sinatra2015cp');return false;" id="info-sinatra2015cp"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/sinatra2015cp.pdf"><div class="filepdf">Article</div></a><div class="info-expansion" id="sinatra2015cp"><pre><code>@article{sinatra2015cp,
  title = {A century of physics},
  author = {Sinatra, Roberta and Deville, Pierre and Szell, Michael and Wang, Dashun and Barab{\'a}si, Albert-L{\'a}szl{\'o}},
  journal = {Nature Physics},
  year = {2015},
  volume = {11},
  number = {10},
  pages = {791--796},
  doi = {10.1038/nphys3494}
}</code></pre></div></li>
		<li class="publi pub-other">M. Szell, P. Santi, C. Ratti<br /><b>Trip sharing in the era of self-driving cars</b><br />NYU Marron Institute conference on self-driving vehicles (2015)<br />
    <a href="#" onclick="toggle('szell2015tse');return false;" id="info-szell2015tse"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/szell2015tse.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="http://marroninstitute.nyu.edu/content/working-papers/trip-sharing-in-the-era-of-self-driving-cars"><div class="linkexternal">Conference</div></a><div class="info-expansion" id="szell2015tse"><pre><code>@conference{szell2015tse,
  title = {Trip sharing in the era of self-driving cars},
  author = {Szell, Michael and Santi, Paolo and Ratti, Carlo},
  booktitle = {NYU Marron Institute conference on self-driving vehicles},
  year = {2015}
}</code></pre></div></li>
		<li class="publi pub-journal">O. Sagarra, M. Szell, P. Santi, A. Diaz-Guilera, C. Ratti<br /><b>Supersampling and network reconstruction of urban mobility</b><br /><a href="http://journals.plos.org/plosone/article?id=10.1371/journal.pone.0134508">PLOS ONE 10(8), e0134508, (2015)</a><br />
		<a href="#" onclick="toggle('sagarra2015snr');return false;" id="info-sagarra2015snr"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/sagarra2015snr.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="http://arxiv.org/abs/1504.01939"><div class="linkexternal">arXiv</div></a><div class="info-expansion" id="sagarra2015snr"><pre><code>@article{sagarra2015snr,
  title = {Supersampling and Network Reconstruction of Urban Mobility},
  author = {Sagarra, Oleguer and Szell, Michael and Santi, Paolo and Diaz-Guilera, Albert and Ratti, Carlo},
  journal = {PLOS ONE},
  year = {2015},
  volume = {10},
  number = {8},
  pages = {e0134508},
  doi = {10.1371/journal.pone.0134508}
}</code></pre></div></li>
    <li class="publi pub-journal">O. Mryglod, B. Fuchs, M. Szell, Y. Holovatch, S. Thurner<br /><b>Interevent time distributions of human multi-level activity in a virtual world</b><br /><a href="http://www.sciencedirect.com/science/article/pii/S0378437114008243">Physica A 419, 681-690 (2015)</a><br />
    <a href="#" onclick="toggle('mryglod2015itd');return false;" id="info-mryglod2015itd"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/mryglod2015itd.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="http://arxiv.org/abs/1407.2006"><div class="linkexternal">arXiv</div></a><div class="info-expansion" id="mryglod2015itd"><pre><code>@article{mryglod2015itd,
  title = {Interevent time distributions of human multi-level activity in a virtual world},
  author = {Mryglod, Olesya and Fuchs, Benedikt and Szell, Michael and Holovatch, Yurij and Thurner, Stefan},
  journal = {Physica A: Statistical Mechanics and its Applications},
  year = {2015},
  volume = {419},
  pages = {681--690},
  doi = {10.1016/j.physa.2014.09.056}
}</code></pre></div></li>
	</ul>


<h3>2014</h3>
	<ul>
		<li class="publi pub-other">P. Santi, G. Resta, M. Szell, S. Sobolevsky, S. Strogatz, C. Ratti<br /><b>Reply to Lopez et al.: Sustainable implementation of taxi sharing requires understanding systemic effects</b><br /><a href="http://www.pnas.org/content/early/2014/12/11/1421300112">Proceedings of the National Academy of Sciences 111(51), E5489 (2014)</a><br />
    <a href="#" onclick="toggle('santi2014rls');return false;" id="info-santi2014rls"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/santi2014rls.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="http://www.hubcab.org"><div class="linkexternal">Project page</div></a><div class="info-expansion" id="santi2014rls"><pre><code>@article{santi2014rls,
  title = {Reply to Lopez et al.: Sustainable implementation of taxi sharing requires understanding systemic effects},
  author = {Santi, Paolo and Resta, Giovanni and Szell, Michael and Sobolevsky, Stanislav and Strogatz, Steven H and Ratti, Carlo},
  journal = {Proceedings of the National Academy of Sciences},
  year = {2014},
  volume = {111},
  number = {51},
  pages = {E5489--E5489},
  doi = {10.1073/pnas.1421300112}
}</code></pre></div></li>
		<li class="publi pub-other">M. Szell, B. Groß<br /><b>Hubcab - Exploring the Benefits of Shared Taxi Services</b><br /><a href="http://www.degruyter.com/view/books/9783038213925/9783038213925.28/9783038213925.28.xml">In: Decoding the City (2014), Berlin, Basel: De Gruyter. Eds: D. Offenhuber, C. Ratti</a><br /><a href="#" onclick="toggle('szell2014heb');return false;" id="info-szell2014heb"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/szell2014heb.pdf"><div class="filepdf">Chapter</div></a><div class="info-expansion" id="szell2014heb"><pre><code>@inbook{szell2014heb,
  title = {Decoding the City},
  author = {Szell, Michael and Gro{\ss}, Benedikt},
  chapter = {Hubcab - Exploring the Benefits of Shared Taxi Services},
  editor = {Offenhuber, Dietmar and Ratti, Carlo},
  pages = {28--39},
  publisher = {De Gruyter},
  year = {2014},
  doi = {10.1515/9783038213925.28}
}</code></pre></div></li>
		<li class="publi pub-journal">P. Santi, G. Resta, M. Szell, S. Sobolevsky, S. Strogatz, C. Ratti<br /><b>Quantifying the benefits of vehicle pooling with shareability networks</b><br /><a href="http://www.pnas.org/content/111/37/13290">Proceedings of the National Academy of Sciences 111(37), 13290-13294 (2014)</a><br />
    <a href="#" onclick="toggle('santi2014qbv');return false;" id="info-santi2014qbv"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/santi2014qbv.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="../downloads/santi2014qbv_si.pdf"><div class="filepdf">SI</div></a> &nbsp; <a href="http://arxiv.org/abs/1310.2963"><div class="linkexternal">arXiv</div></a> &nbsp; <a href="http://www.hubcab.org"><div class="linkexternal">Project page</div></a><div class="info-expansion" id="santi2014qbv"><pre><code>@article{santi2014qbv,
  title = {Quantifying the benefits of vehicle pooling with shareability networks},
  author = {Santi, Paolo and Resta, Giovanni and Szell, Michael and Sobolevsky, Stanislav and Strogatz, Steven H and Ratti, Carlo},
  journal = {Proceedings of the National Academy of Sciences},
  year = {2014},
  volume = {111},
  number = {37},
  pages = {13290--13294},
  doi = {10.1073/pnas.1403657111}
}</code></pre></div></li>
		<li class="publi pub-other">M. Szell<br /><b>Connecting Paradigms</b><br /><a href="https://www.science.org/doi/full/10.1126/science.1249599">Science 343(6174), 970-971 (2014)</a><br />
    <a href="#" onclick="toggle('szell2014cp');return false;" id="info-szell2014cp"><div class="filebib">Bib</div></a> &nbsp; <a href="http://www.sciencemag.org/cgi/rapidpdf/343/6174/970?ijkey=doMi4KrdCymkw&keytype=ref&siteid=sci"><div class="filepdf">Article</div></a><div class="info-expansion" id="szell2014cp"><pre><code>@article{szell2014cp,
  title = {Connecting Paradigms},
  author = {Szell, Michael},
  journal = {Science},
  year = {2014},
  volume = {343},
  number = {6174},
  pages = {970-971},
  doi = {10.1126/science.1249599}
}</code></pre></div></li>
		<li class="publi pub-journal">M. Szell, S. Grauwin, C. Ratti<br /><b>Contraction of online response to major events</b><br /><a href="http://www.plosone.org/article/info%3Adoi%2F10.1371%2Fjournal.pone.0089052">PLOS ONE 9(2), e89052, (2014)</a><br />
    <a href="#" onclick="toggle('szell2014cor');return false;" id="info-szell2014cor"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/szell2014cor.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="../downloads/szell2014cor_si.pdf"><div class="filepdf">SI</div></a> &nbsp; <a href="http://arxiv.org/abs/1308.5190"><div class="linkexternal">arXiv</div></a> &nbsp; <a href="http://senseable.mit.edu/tweetbursts/"><div class="linkexternal">Project page</div></a><div class="info-expansion" id="szell2014cor"><pre><code>@article{szell2014cor,
  title = {Contraction of online response to major events},
  author = {Szell, Michael and Grauwin, Sebastian and Ratti, Carlo},
  journal = {PLOS ONE},
  year = {2014},
  volume = {9},
  number = {2},
  pages = {e89052},
  doi = {10.1371/journal.pone.0089052}
}</code></pre></div></li>
		<li class="publi pub-journal">R. Sinatra, M. Szell<br /><b>Entropy and the Predictability of Online Life</b><br /><a href="http://www.mdpi.com/1099-4300/16/1/543">Entropy 16(1), 543-556 (2014)</a><br />
    <a href="#" onclick="toggle('sinatra2014epo');return false;" id="info-sinatra2014epo"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/sinatra2014epo.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="http://arxiv.org/abs/1312.0169"><div class="linkexternal">arXiv</div></a><div class="info-expansion" id="sinatra2014epo"><pre><code>@article{sinatra2014epo,
  title = {Entropy and the Predictability of Online Life},
  author = {Sinatra, Roberta and Szell, Michael},
  journal = {Entropy},
  year = {2014},
  volume = {16},
  number = {1},
  pages = {543--556},
  doi = {10.3390/e16010543}
}</code></pre></div></li>
	</ul>

<h3>2013</h3>
	<ul>
		<li class="publi pub-journal">S. Sobolevsky, M. Szell, R. Campari, T. Couronné, Z. Smoreda, C. Ratti<br /><b>Delineating geographical regions with networks of human interactions in an extensive set of countries</b><br /><a href="http://www.plosone.org/article/info%3Adoi%2F10.1371%2Fjournal.pone.0081707">PLOS ONE 8(12), e81707 (2013)</a><br />
    <a href="#" onclick="toggle('sobolevsky2013dgr');return false;" id="info-sobolevsky2013dgr"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/sobolevsky2013dgr.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="../downloads/sobolevsky2013dgr_si.pdf"><div class="filepdf">SI</div></a> &nbsp; <a href="http://arxiv.org/abs/1310.1829"><div class="linkexternal">arXiv</div></a><div class="info-expansion" id="sobolevsky2013dgr"><pre><code>@article{sobolevsky2013dgr,
  title = {Delineating geographical regions with networks of human interactions in an extensive set of countries},
  author = {Sobolevsky, Stanislav and Szell, Michael and Campari, Riccardo and Couronn{\'e}, Thomas and Smoreda, Zbigniew and Ratti, Carlo},
  journal = {PLOS ONE},
  year = {2013},
  volume = {8},
  number = {12},
  pages = {e81707},
  doi = {10.1371/journal.pone.0081707}
}</code></pre></div></li>
		<li class="publi pub-other">M. Szell, B. Groß<br /><b>Hubcab - Taxi-Fahrgemeinschaften, digital erkundet</b><br /><a href="http://dx.doi.org/10.1515/9783038210399.29">In: Die Stadt entschlüsseln (2013), Bauwelt Fundamente 150, Birkh&auml;user. Eds: D. Offenhuber, C. Ratti</a><br />
    <a href="#" onclick="toggle('szell2013htf');return false;" id="info-szell2013htf"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/szell2013htf.pdf"><div class="filepdf">Chapter</div></a><div class="info-expansion" id="szell2013htf"><pre><code>@inbook{szell2013htf,
  title = {Die Stadt entschl{\"u}sseln},
  author = {Szell, Michael and Gro{\ss}, Benedikt},
  chapter = {Hubcab - Taxi-Fahrgemeinschaften, digital erkundet},
  editor = {Offenhuber, Dietmar and Ratti, Carlo},
  pages = {29--42},
  publisher = {Birkh{\"a}user},
  series = {Bauwelt Fundamente},
  year = {2013},
  doi = {10.1515/9783038210399.29}
}</code></pre></div></li>
		<li class="publi pub-other">S. Thurner, P. Klimek, M. Szell, G. Duftschmid, G. Endel, A. Kautzky-Willer, D. Kasper<br /><b>Reply to Klitz and Niklasson: Can viral infections explain the cross-sectional Austrian diabetes data?</b><br /><a href="http://dx.doi.org/10.1073/pnas.1305494110">Proceedings of the National Academy of Sciences 110(30), E2751 (2013)</a><br />
	  <a href="#" onclick="toggle('thurner2013rkn');return false;" id="info-thurner2013rkn"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/thurner2013rkn.pdf"><div class="filepdf">Article</div></a><div class="info-expansion" id="thurner2013rkn"><pre><code>@article{thurner2013rkn,
  title = {Reply to Klitz and Niklasson: Can viral infections explain the cross-sectional Austrian diabetes data?},
  author = {Thurner, Stefan and Klimek, Peter and Szell, Michael and Duftschmid, Georg and Endel, Gottfried and Kautzky-Willer, Alexandra and Kasper, David C},
  journal = {Proceedings of the National Academy of Sciences},
  year = {2013},
  volume = {110},
  number = {30},
  pages = {E2751--E2751},
  doi = {10.1073/pnas.1305494110}
}</code></pre></div></li>
	  <li class="publi pub-journal">S. Thurner, P. Klimek, M. Szell, G. Duftschmid, G. Endel, A. Kautzky-Willer, D. Kasper<br /><b>Quantification of excess-risk for diabetes when born in times of hunger, in an entire population of a nation, across a century</b><br /><a href="http://dx.doi.org/10.1073/pnas.1215626110">Proceedings of the National Academy of Sciences 110(12), 4703-4707 (2013)</a><br />
	  <a href="#" onclick="toggle('thurner2013qer');return false;" id="info-thurner2013qer"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/thurner2013qer.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="../downloads/thurner2013qer_si.pdf"><div class="filepdf">SI</div></a><div class="info-expansion" id="thurner2013qer"><pre><code>@article{thurner2013qer,
  title = {Quantification of excess risk for diabetes for those born in times of hunger, in an entire population of a nation, across a century},
  author = {Thurner, Stefan and Klimek, Peter and Szell, Michael and Duftschmid, Georg and Endel, Gottfried and Kautzky-Willer, Alexandra and Kasper, David C},
  journal = {Proceedings of the National Academy of Sciences},
  year = {2013},
  volume = {110},
  number = {12},
  pages = {4703--4707},
  doi = {10.1073/pnas.1215626110}
}</code></pre></div></li>
		<li class="publi pub-journal">M. Szell, S. Thurner<br /><b>How women organize social networks different from men</b><br /><a href="http://www.nature.com/srep/2013/130207/srep01214/full/srep01214.html">Scientific Reports 3, 1214 (2013)</a><br />
    <a href="#" onclick="toggle('szell2013hwo');return false;" id="info-szell2013hwo"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/szell2013hwo.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="../downloads/szell2013hwo_si.pdf"><div class="filepdf">SI</div></a> &nbsp; <a href="http://arxiv.org/abs/1205.4683"><div class="linkexternal">arXiv</div></a><div class="info-expansion" id="szell2013hwo"><pre><code>@article{szell2013hwo,
  title = {How women organize social networks different from men},
  author = {Szell, Michael and Thurner, Stefan},
  journal = {Scientific Reports},
  year = {2013},
  volume = {3},
  number = {1214},
  doi = {10.1038/srep01214}
}</code></pre></div></li>
	</ul>

<h3>2012</h3>
	<ul>
		<li class="publi pub-journal">M. Szell, R. Sinatra, G. Petri, S. Thurner, V. Latora<br /><b>Understanding mobility in a social petri dish</b><br /><a href="http://www.nature.com/srep/2012/120614/srep00457/full/srep00457.html">Scientific Reports 2, 457 (2012)</a><br />
    <a href="#" onclick="toggle('szell2012ums');return false;" id="info-szell2012ums"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/szell2012ums.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="../downloads/szell2012ums_si.pdf"><div class="filepdf">SI</div></a> &nbsp; <a href="http://arxiv.org/abs/1112.1220"><div class="linkexternal">arXiv</div></a><div class="info-expansion" id="szell2012ums"><pre><code>@article{szell2012ums,
  title = {Understanding mobility in a social petri dish},
  author = {Szell, Michael and Sinatra, Roberta and Petri, Giovanni and Thurner, Stefan and Latora, Vito},
  journal = {Scientific Reports},
  year = {2012},
  volume = {2},
  number = {457},
  doi = {10.1038/srep00457}
}</code></pre></div></li>
		<li class="publi pub-journal">M. Szell, S. Thurner<br /><b>Social dynamics in a large-scale online game</b><br /><a href="http://www.worldscientific.com/doi/abs/10.1142/S0219525912500646">Advances in Complex Systems 15, 1250064 (2012)</a><br />
    <a href="#" onclick="toggle('szell2012sdl');return false;" id="info-szell2012sdl"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/szell2012sdl.pdf"><div class="filepdf">Article</div></a><div class="info-expansion" id="szell2012sdl"><pre><code>@article{szell2012sdl,
  title = {Social dynamics in a large-scale online game},
  author = {Szell, Michael and Thurner, Stefan},
  journal = {Advances in Complex Systems},
  year = {2012},
  volume = {15},
  pages = {1250064},
  doi = {10.1142/S0219525912500646}
}</code></pre></div></li>
		<li class="publi pub-journal">S. Thurner, M. Szell, R. Sinatra<br /><b>Emergence of good conduct, scaling and Zipf laws in human behavioral sequences in an online world</b><br /><a href="http://www.plosone.org/article/info%3Adoi%2F10.1371%2Fjournal.pone.0029796">PLOS ONE 7(1), e29796 (2012)</a><br />
    <a href="#" onclick="toggle('thurner2012egc');return false;" id="info-thurner2012egc"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/thurner2012egc.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="http://arxiv.org/abs/1107.0392"><div class="linkexternal">arXiv</div></a><div class="info-expansion" id="thurner2012egc"><pre><code>@article{thurner2012egc,
  title = {Emergence of Good Conduct, Scaling and Zipf Laws in Human Behavioral Sequences in an Online World},
  author = {Thurner, Stefan and Szell, Michael and Sinatra, Roberta},
  journal = {PLOS ONE},
  year = {2012},
  volume = {7},
  number = {1},
  pages = {e29796},
  doi = {10.1371/journal.pone.0029796}
}</code></pre></div></li>
	</ul>

<h3>2011</h3>
    <ul>
		<li class="publi pub-other">M. Szell<br /><b>Statistical physics approaches to large-scale socio-economic networks</b><br />Ph.D. Thesis, University of Vienna (2011)<br />
    <a href="#" onclick="toggle('szell2011spa');return false;" id="info-szell2011spa"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/szell2011spa.pdf"><div class="filepdf">Thesis</div></a> &nbsp; <a href="http://othes.univie.ac.at/19044/"><div class="linkexternal">E-Thesis</div></a><div class="info-expansion" id="szell2011spa"><pre><code>@phdthesis{szell2011spa,
  title = {Statistical physics approaches to large-scale socio-economic networks},
  author = {Szell, Michael},
  school = {University of Vienna},
  year = {2011}
}</code></pre></div></li>
		<li class="publi pub-other">S. Thurner, M. Szell (Eds.)<br /><b>Book of Abstracts - ECCS'11 Vienna</b><br />L&ouml;cker (2011)<br /><a href="../downloads/thurner2011bae.pdf"><div class="filepdf">Book</div></a></li>
	</ul>


<h3>2010</h3>
    <ul>
		<li class="publi pub-journal">M. Szell, S. Thurner<br /><b>Measuring social dynamics in a massive multiplayer online game</b><br /><a href="http://www.sciencedirect.com/science/article/pii/S0378873310000316">Social Networks 32, 313-329 (2010)</a><br />
    <a href="#" onclick="toggle('szell2010msd');return false;" id="info-szell2010msd"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/szell2010msd.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="http://arxiv.org/abs/0911.1084"><div class="linkexternal">arXiv</div></a><div class="info-expansion" id="szell2010msd"><pre><code>@article{szell2010msd,
  title = {Measuring social dynamics in a massive multiplayer online game},
  author = {Szell, Michael and Thurner, Stefan},
  journal = {Social Networks},
  year = {2010},
  volume = {32},
  pages = {313--329},
  doi = {10.1016/j.socnet.2010.06.001}
}</code></pre></div></li>
		<li class="publi pub-journal">M. Szell, R. Lambiotte, S. Thurner<br /><b>Multirelational organization of large-scale social networks in an online world</b><br /><a href="http://www.pnas.org/content/107/31/13636">Proceedings of the National Academy of Sciences 107(31), 13636-13641 (2010)</a><br />
    <a href="#" onclick="toggle('szell2010mol');return false;" id="info-szell2010mol"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/szell2010mol.pdf"><div class="filepdf">Article</div></a> &nbsp; <a href="../downloads/szell2010mol_si.pdf"><div class="filepdf">SI</div></a> &nbsp; <a href="http://arxiv.org/abs/1003.5137"><div class="linkexternal">arXiv</div></a><div class="info-expansion" id="szell2010mol"><pre><code>@article{szell2010mol,
  title = {Multirelational organization of large-scale social networks in an online world},
  author = {Szell, Michael and Lambiotte, Renaud and Thurner, Stefan},
  journal = {Proceedings of the National Academy of Sciences},
  year = {2010},
  volume = {107},
  number = {31},
  pages = {13636--13641},
  doi = {10.1073/pnas.1004008107}
}</code></pre></div></li>
	</ul>


<h3>pre-2010</h3>
	<ul>
		<li class="publi pub-other">M. Szell<br /><b>Finite Differenzen Verfahren zur numerischen Lawinensimulation</b><br />M.Sc. Thesis, Vienna University of Technology (2007)<br />
    <a href="#" onclick="toggle('szell2007fdv');return false;" id="info-szell2007fdv"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/szell2007fdv.pdf"><div class="filepdf">Thesis</div></a> &nbsp; <a href="http://media.obvsg.at/AC05035344"><div class="linkexternal">E-Thesis</div></a><div class="info-expansion" id="szell2007fdv"><pre><code>@mastersthesis{szell2007fdv,
  title = {Finite Differenzen Verfahren zur numerischen Lawinensimulation},
  author = {Szell, Michael},
  school = {Vienna University of Technology},
  year = {2007}
}</code></pre></div></li>
		<li class="publi pub-other">M. Szell, F. Judex<br /><b>Petri Net Modelling of Different Strategies in ARGESIM Comparison C4 "Dining Philosophers" with HPSim</b><br />Simulation News Europe 17(1), 57-58 (2007)<br />
    <a href="#" onclick="toggle('szell2007pnm');return false;" id="info-szell2007pnm"><div class="filebib">Bib</div></a> &nbsp; <a href="../downloads/szell2007pnm.pdf"><div class="filepdf">Article</div></a><div class="info-expansion" id="szell2007pnm"><pre><code>@article{szell2007pnm,
  title = {Petri Net Modelling of Different Strategies in ARGESIM Comparison C4 "Dining Philosophers" with HPSim},
  author = {Szell, Michael and Judex, Florian},
  journal = {Simulation News Europe},
  year = {2007},
  volume = {17},
  number = {1},
  pages = {57--58}
}</code></pre></div></li>
		<li class="publi pub-other">M. Szell<br /><b>Rekursive Strukturen - Fraktale Wachstumsprozesse von Pflanzen</b><br />Gymnasium des Instituts Sacr&eacute; Coeur Pressbaum (2001)<br /><a href="../downloads/szell2001rsf.doc"><div class="filedoc">Project</div></a> &nbsp; <a href="../fba/"><div class="linkexternal">Project page</div></a></li>
	</ul>



    			<div class="clear"></div>
    		</div>
		</div>
	</div>


<?php
echo $footer;
?>

</body>
</html>
