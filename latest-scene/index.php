<?php
$header = '

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width">
  <meta name="scene" content="0">
	  
  <!-- Included CSS Files -->
  <link rel="stylesheet" href="stylesheets/royalslider.css">
  <link rel="stylesheet" href="stylesheets/rs-default-inverted.css">
  <link rel="stylesheet" href="stylesheets/mediaelementplayer.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">
  
	<style type="text/css">
	 .navbar{margin-bottom: 0;}
	</style>
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <script>
  function callback(rscData){
    window.rscData = JSON.parse(rscData);
  }
  </script>
  <script src="https://script.google.com/macros/s/AKfycbysSW4_qjnyjvVsuNsJGvaaZIQsdtzVdPhxZ_kMzKFtttwj-hKx/exec"></script>
  
  
  ';

require_once("../dependencies/functions.php");
getHeader($header,'Research the Panorama', 'scene');?>
  <!-- Begin #container -->
  <div id="container">
  	<!-- Draw the scene navigator -->
    <header>
    	<nav class="rsDefaultInv">
      	<div id="prevSceneArrow" class="sceneArrow">
          1
        </div>
        <div id="nextSceneArrow" class="sceneArrow">
          2
        </div>
      </nav>
    </header>
    <!-- end scene navigator -->
		<nav id="view-changer">
    	
    </nav>
    <article id="content" class="royalSlider row-fluid">
    <section id="scene-by-script" class="rsContent span7">
    	<div class="rsTmb" data-placement="bottom" title="View scene and manuscript text"><i class="icon-picture icon-white"></i><i class="icon-align-justify icon-white"></i></div>
			<div id="scene-image" class="row-fluid">
        <div id="scene-caption" class="row-fluid"></div>
      	<div id="scene-container" class="royalSlider rsDefaultInv">
      	<?php include_once("data/Panorama.php"); ?>
        </div>
      </div>
    </section><!-- end #scene-script -->
    <section id="script-by-pages" class="rsContent">
      <div class="rsTmb" data-placement="bottom" title="View manuscript text and page images"><i class="icon-align-justify icon-white"></i><i class="icon-file icon-white"></i></div>
			<div id="script-container" class="span5 tabbable tabs-right">
        <ul class="nav nav-tabs" id="lang-chooser">
          <li class="en"><a href="#">En</a></li>
          <li class="it"><a href="#">It</a></li>
        </ul>
        <div class="tab-content well well-small" >
          <h4 class="row-fluid">
            <div class="span4">Manuscript Text</div>
            <audio class="audio pull-left no-svg" preload="none" type="audio/mp3" src="en.mp3"></audio>
            <a class="btn btn-mini pull-right" id="line-breaker">Line breaks: <span>Off</span><span class="hide">On</span></a>
          </h4>
          <article id="script-text" class="row-fluid">
            <img class="preloader" src="preloaders/preloader.gif" alt="Loading...">
          </article>
        </div>
      </div>
      
      <div id="page-container" class="span7 tabbable tabs-left">
      	<h4>Pages <span class="scene-id label label-inverse"></span></h4>
        <ul class="nav nav-tabs">
        </ul>      
    		<div id="pages" class="tab-content"></div>
      </div>
      
    </section><!-- end #script-pages -->
    <section id="resources-only" class="rsContent">
      <div class="rsTmb" data-placement="bottom" title="View resources for this scene"><i class="icon-info-sign icon-white" ></i><i class="icon-th-large icon-white"></i></div>
      <div id="resources-container" class="container">
<!--        <h4 class="row">Garibaldi Resources Explorer</h4>-->
<!--        <div id="resources" class="row"><img src="preloaders/preloader.gif" alt="Loading..."></div>-->
          <div id="wrapper" class="container">
    <div class="row" id="resources-row">
<!--
      <div class="page-header">
        
      </div>
-->

      <!-- Left column - facets -->

      <div id="charts" class="col-md-6">
        <h3>
            <small>Explore over 4,000 resources from a variety of collections to know more about how artist John James Story constructed each scene of the Panorama, and to learn more about historical contingencies and political climate around the Risorgimento in Italy, Europe, and the Americas at the time. <a href="../resources/explorer.php">Read More</a></small>
          </h3>
                      <br>
        <h4>Filters 
          <button class="btn btn-xs btn-info" style="" id="clear-filters-button">Reset</button>
        </h4>
        <p>Click on the charts to select items of interest &mdash; the listing will update.</p>
        
        <!-- Facet: Scene -->
          <div style="display:none">
        <h4>Scene</h4>
          <h3><small>To see related publications, select one or more scenes of the Panorama. Click on [Non-scene related sources] to find out more about publications on the Risorgimento.</small></h3>
        <div id="text-facet-language" class="facet facet-scene" 
             data-facet-type="scene" data-dimension="scene"></div>
        </div>
        <!-- Facet: location -->
        
        <h4>Place of publication</h4>
          <h3><small>To select publication sites, click and draw a square around the area of interest.</small></h3>
        <div id="map">
          <div class="facet" data-facet-type="map" 
               data-dimension="location.geometry.coordinates[0];location.geometry.coordinates[1]">
          </div>
          <div class="facet" data-facet-type="template" data-dimension="year"></div>
        </div>
          
          <!-- Facet: Language -->

        <h4>Language</h4>
          <h3><small>Select one or more languages</small></h3>
        <div id="text-facet-language" class="facet" 
             data-facet-type="text" data-dimension="language"></div>
          
        <!-- Facet: Primary or secondary -->
        <!--
        <h4>Primary or Secondary</h4>
        
        <div id="text-facet-resource-type" class="facet"
             data-facet-type="text" data-dimension="resource-type"></div>-->
             
             <!--item['resource-type']-->
        
        <!-- Facet: Publication year -->
        
        <h4>Year Published</h4>
          <h3><small>Click and drag the mouse over the timeline to select a time range of interest.</small></h3>
        
        <div id="year-chart" class="facet"
             data-facet-type="barchart" data-dimension="year"></div>
          
        
      </div>

      <!-- Right column - results -->

      <div id="results-list" class="col-md-6">
        <!--
        <div id="results-facet" class="facet"
             data-facet-type="garibaldi-results" data-dimension="year"></div>-->
        
        <div class="panel panel-default" id="bookBox-container">
          <div class="panel-heading">
            <h4 class="panel-title">
              <span style="float:left">
              Filtered resources
              <span id="active" class="badge">-</span>
                  </span>
                <span style="float:right">
               <span class="badge ps">P</span> <small>Primary source</small>
              <!--<span class="badge ps">S</span> <small>Secondary source</small>
                </span>-->
            </h4>
              <div style="clear:both;"></div>
             
          </div>
          <div class="panel-body">
            <div id="lists">
              <div id="resource-list" class="facet list" data-facet-type="garibaldi-results" data-dimension="year"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      </div>
    </section><!-- end #resources -->
    </article>   
  </div><!-- End #container -->

  <script src="http://code.jquery.com/jquery-1.8.1.min.js"></script>
  <script data-main="js/cds-facet/main" data-source="data/gre-data.js" src="js/cds-facet/require.js"></script>
  <script src="javascripts/jquery-ui-1.8.23.custom.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="javascripts/jquery.placeholder.js"></script>
  <script src="javascripts/jquery.royalslider.min.js"></script>
  <script src="javascripts/jquery.scrollTo.min.js"></script>
  <script src="javascripts/mediaelement-and-player.min.js"></script>
  <script src="javascripts/app.js?<?php echo time();?>"></script>
  <script src="js/cds-facet/crossfilter.min.js"></script>


	
	<!-- Optional regions 
	<script type="text/javascript">
	
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-3203647-16']);
		_gaq.push(['_trackPageview']);
	
		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	
	</script>-->
  <!-- Don't use the php footer() function here, it adds markup we dont want. -->
  <!-- old google script URL script src="https://script.google.com/macros/s/AKfycbzn4ZtK67spxPUzEScRq9IvyVwupE7ECjepmBzwYmj_UJd5YzQ/exec"  /script -->
</body></html>
