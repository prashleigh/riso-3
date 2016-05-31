<?php
session_start();
$_SESSION['colid'] = 38;
include('../dependencies/functions.php');
getHeader('<link href="../css/bdr.css" type="text/css" rel="stylesheet">',"Portraits from the Anne S. K. Brown Collection","resources") ?>
<link rel="stylesheet" href="../latest-scene/stylesheets/app.css">

<div class="container" style="width:100%;">

  <div class="row">
    <ul class="breadcrumb">
      <? resourceBreadCrumbs(); ?>
    </ul>
  </div>

 <div id="project">
    <div id="wrapper" class="container">
    <div class="row" id="resources-row">
<!--
      <div class="page-header">
        
      </div>
-->

      <!-- Left column - facets -->

      <div id="charts" class="col-md-6">
        <h3>
            <small>Explore over 4,000 resources from a variety of collections to know more about how artist John James Story constructed each scene of the Panorama, and to learn more about historical contingencies and political climate around the Risorgimento in Italy, Europe, and the Americas at the time. <a href="explorer.php">Read More</a></small>
          </h3>
                      <br>
        <h4>Filters 
          <button class="btn btn-xs btn-info" style="" id="clear-filters-button">Reset</button>
        </h4>
        <p>Click on the charts to select items of interest &mdash; the listing will update.</p>
        
        <!-- Facet: Scene -->

        <h4>Scene</h4>
          <h3><small>To see related publications, select one or more scenes of the Panorama. Click on [Non-scene related sources] to find out more about publications on the Risorgimento.</small></h3>
        <div id="text-facet-language" class="facet facet-scene" 
             data-facet-type="scene" data-dimension="scene"></div>
        
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
          
        <!-- Facet: Publication year -->
        
        <h4>Year Published</h4>
          <h3><small>Click and drag the mouse over the timeline to select a time range of interest or use the buttons below to see publications published in 1860, 1861, 1862 only</small></h3>
        
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
              <span class="badge ps">S</span> <small>Secondary source</small>
                </span>
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
</div>
</div>
<?php footer(null, false);?>
<script src="http://code.jquery.com/jquery-1.8.1.min.js"></script>
  <script data-main="../latest-scene/js/cds-facet/main" data-source="../latest-scene/data/gre-data.js" src="../latest-scene/js/cds-facet/require.js"></script>
  <script src="../latest-scene/javascripts/jquery-ui-1.8.23.custom.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../latest-scene/javascripts/mediaelement-and-player.min.js"></script>
  <script src="../latest-scene/js/cds-facet/crossfilter.min.js"></script>
</body></html>
