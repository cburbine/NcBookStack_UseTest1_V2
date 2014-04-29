<!DOCTYPE html>
<?php
include 'connect_test.php'; //connect the connection page
if (empty($_SESSION)) { // if the session not yet started
    session_name('newLogin');
    session_set_cookie_params(2 * 7 * 24 * 60 * 60);
    session_start();
}
 ?>

<html>
  <head>
     <meta charset="UTF-8">
     <title>NC Bookstack</title>
     <link rel="stylesheet" type="text/css" href="css/mainCSS.css">
     <?php $onmain = 1;
	include 'toptab.php'; ?>
     <link rel="stylesheet" type="text/css" href="jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css">
  </head>
  <body>
    <img border="0" alt="homelogo" id="biglogo" src="logocopy2.png">
    <form id="serachfrm" name="search" method="post" action="search_v2.php">
            <span class="serachspan" style="font-size:125%;">Search for:</span>
            <!--Search value -->
            <input type="text" name="find" id="find">
            <span class="serachspan" style="font-size:125%;">in</span>
            <!--Category to search in-->
            <select name="field" id="searchCriteria">
              <optgroup>
                <option value="title">Title</option>
                <option value="author">Author</option>
                <option value="subject_number">Subject</option>
                <option value="class_number">Class</option>
                <option value="isbn">ISBN</option>
              </optgroup>
            </select>
            <input id="searchfrm" type="submit" name="search" value="Search" />
        </form>
  </body>
</html>
