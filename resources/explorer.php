<?php
session_start();
$_SESSION['colid'] = 38;
include('../dependencies/functions.php');
getHeader('<link href="../css/bdr.css" type="text/css" rel="stylesheet">',"Portraits from the Anne S. K. Brown Collection","resources") ?>
<div class="container">

  <div class="row">
    <ul class="breadcrumb">
      <? resourceBreadCrumbs(); ?>
    </ul>
  </div>

 <div id="project">
  <div class="span4 offset1 pull-right">
      
  </div>
  <div class="row">

    <div class="span7">
      <h2>The Garibaldi Panorama &amp; the Risorgimento Resource Explorer</h2>
        <a href="fullexplorer.php"><button class="btn">View Full Explorer</button></a> 
        <a href="../latest-scene/#/scene/1/resources/"><button class="btn">Research the Panorama</button></a><br><br>
      <p style="text-align:justify"> 
          The Garibaldi Panorama &amp; the Risorgimento Resource Explorer [GPE] is a visual interface aimed to provide a better understanding of the relationships between the Garibaldi Panorama and the visual and textual materials collected in the Harvard Risorgimento Preservation Collection (HRPC) as well as other library resources at Brown or elsewhere, made available through our project.
      </p>
      <p style="text-align:justify"> 
          <a href="https://search.library.brown.edu/catalog/b3682233">HRPC</a> is an archive of approximately sixteen thousand documents (books, pamphlets, broadsides) related to the Italian Risorgimento and owned by Harvard University (a complete set is also available at the Brown University library in microfilm format). Over 4,000 items from this collection were selected to build the GPE (see below).
      </p>
      <p style="text-align:justify"> 
            The GPE enables the user to access these resources by interlacing data about topics, language, year, and location of publications with the scenes of the Panorama, and making this data searchable through facets (filters). The GPE also allows to reach rarely accessed sources from the HRPC contemporary to the panorama. Once selected, each facet updates the others in order to refine the list of publications that appear on the right side of the screen. If a publication is available online, the GPE will link to the digital scan. 
      </p>
        
      <h3>How the GPE came to be</h3>

      <p style="text-align:justify"> 
            After acquiring the full record of HRPC from the Brown University library, four thousand items were selected according to their relevance and pertinence to Risorgimento episodes described in scenes of the Garibaldi Panorama. Searchable categories were assigned to each item whose publication date spans from 1800 to 1862, the year the Garibaldi Panorama story ends. Although mainly concentrated on publications issued in Europe, the GPE also includes publications from the Americas, reflecting the attention paid to the figure of Garibaldi across the Atlantic Ocean. The GPE, however, does not include HRCP items whose place or year of publication is not available (approximately 600 items).
      </p>
        
      <p style="text-align:justify"> 
            By offering a point of access to a collection that, for the most part, existed in microfilm format, the GPE ultimately aims to make HRPC items more accessible to students and scholars alike, allowing them to discover connections through visualizations. 
      </p>

        
      <h3>How does the GPE help to access items in the HRPC?</h3>

      <p style="text-align:justify"> 
            Some of the over 4,000 items available for exploration are associated with one or more scenes of the Garibaldi Panorama. This association was established taking into consideration the episode depicted and the content of the original source. The relationship highlighted by this association helps investigate questions such as, for example: How did different parts of Italy react to Garibaldi’s military campaign? How did other nations in Europe respond to Italian political and military events and when?  Which were the main centers of publication for anonymous political propaganda as represented in pamphlets or broadsides? Which events spurred the highest number of publications? 
      </p>

      <p style="text-align:justify"> 
            However, a large number of items from the HRPC do not directly relate to a specific scene of the panorama. Why did we include them? These sources speak to episodes, places, and characters of the Risorgimento which provide the larger context and/or backdrop to the events depicted in the panorama. In particular, the GPE sheds light on a variety of anonymous sources, especially publications issued by, or in response to, the Catholic Church (main focus of the HRPC), as well as popular songs, documents from freemason or women’s associations, memorials, obituaries or commemorative discourses.
      </p>
        
      <h3>How to read the results of a search in the GPE?</h3>

      <p style="text-align:justify"> 
            Resources can be explored through the facets by selecting one or more scenes, one or more locations on the map, one or more years of publications, and one or more languages. A list of publications will automatically update according to the filters or facets selected. Publications are divided into primary and secondary sources. The label of primary sources is used to mark materials allegedly used by J. J. Story, the Panorama’s author, to depict some of the scenes, as well as material that refers to the story of the Panorama before or after its making. These sources mainly, but not exclusively, dated between 1860, the year of composition of the panorama, and 1862, the year of the last episode from Garibaldi’s life it depicts, are for the most part pulled from the Digital Repository at Brown University (BDR), Google books, and other online archives, such as, for example, HATHI Trust. Items include articles and prints from illustrated magazines of the time, such as The Illustrated London News, Illustrated Times, Illustrirte Zeitung, L'Illustration: Journal Universel, and Univers illustré, among others. 
      </p>

      <p style="text-align:justify"> 
            When the GPE was built, some of the primary sources were already available on this website thanks to the work done by scholars participating in the project. The GPE provides access to these sources as well as, more broadly, to a wealth of secondary sources. As mentioned, secondary sources date exclusively from 1800 to 1862. They include pamphlets, prints, paper clips, flyers, ephemeral publications, songs, papal bulls, national government records, local legislation records, free press, anonymous political propaganda items, and writings on and by political leaders and popular figures, and more. The GPE allows to sort out this vast collection according to the criteria outlined above.
      </p>

      <p style="text-align:justify"> 
          Additional digitized items from HRPC published after 1862 can be found <a href="http://library.brown.edu/cds/garibaldi/resources/pamphlets.php">here</a>.
      </p>

      <p style="text-align:justify"> 
            Although a significant amount of material is available online, not all items from HRPC have been digitized yet. Google books, Hathi trust, archive.org and other entities continue the digitization process, which will contribute to further expanding the investigation of the multiple facets of the Panorama’s historical context. We hope that in the future the GPE will include links to digital scans of all of the remaining sources now displayed as library entries.
      </p>

      <p style="text-align:justify"> 
            The GPE is not, and does not pretend to be, a comprehensive tool to analyze the figure of Garibaldi within the context of the Italian Risorgimento and its reception abroad. Rather, our project stands as a proof of the vastness and variety of sources and materials increasingly available in digital format for the study of the Risorgimento. Visualizing the geographic and temporal distribution of these bibliographical sources contributes to a mapping of the growing historical archive, and helps generate questions for further research.  
      </p>
        
      <p style="text-align:justify"> 
            This project was made possible thanks to the collaboration of the Center for Digital Scholarship at Brown University and research funding from Italian Studies department at Brown University. 
      </p>
        
      <h4>Project credits</h4>
        <p>Manager and creator: Valeria Federici</p>
        <p>Design and implementation: Patrick Rashleigh</p>
        <p>Web implementation: Cissy Yu '18</p>
        <p>Supervisor: Prof. Massimo Riva</p>
    </div>
  </div>
</div>
</div>
<?php footer(null, false);?>
</body></html>
