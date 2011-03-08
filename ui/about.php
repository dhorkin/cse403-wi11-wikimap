<!-- This file is one of the main UI components which divides the UI into a MainFrame,
SideBar, Thumbnail, etc. -->

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">

<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>WikiMap</title>
		<link rel="stylesheet" href="css/wikipedia.css" type="text/css" />
		<link rel="stylesheet" href="css/main.css" type="text/css" />
		<link rel="stylesheet" href="css/wikiSearch.css" type="text/css" />
		<SCRIPT LANGUAGE="JavaScript" type="text/javascript" SRC="scripts/articleNode.js" >
        </SCRIPT>
		<SCRIPT LANGUAGE="JavaScript" type="text/javascript" SRC="scripts/wikiSearch.js" >
        </SCRIPT>
		<SCRIPT LANGUAGE="JavaScript"  type="text/javascript" SRC="scripts/drawMap.js" >
        </SCRIPT>
		<SCRIPT LANGUAGE="JavaScript"  type="text/javascript" SRC="scripts/jquery-1_5.js" >
        </SCRIPT>
		<SCRIPT LANGUAGE="JavaScript" type="text/javascript" SRC="scripts/swapImage.js">
		</SCRIPT>

		<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<!--[if lte IE 7]>
			<script src="js/IE8.js" type="text/javascript"></script><![endif]-->
		<!--[if lt IE 7]>
			<link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->
	</head>

	<body id="pageBody" class="home">
		<div id="searchBar">
			<span id="title">
				<a href="index.php">Wiki<b>Map</b></a>
			</span>
			<?php include("searchbar.php") ?>
		</div>
		<div id="centerDiv">
			<div id="textArea">
			<h1>About WikiMap</h1>
			<p>WikiMap is an interactive, web-browser based visualization of Wikipedia articles and their relationships.
			It is designed by and for knowledge and Wikipedia enthusiasts: people who regularly browse Wikipedia for casual fun, research, homework,
			and more.  We believe that Wikipedia is an amazing tool, but often find it difficult to visualize how ideas are related from a linear
			page of text and article links.</p>
			
			<p>On Wikipedia, you may not always know what a linked article is about without visiting it, you are limited to looking at one related article at time, and there's no metric to determine how strongly related that article is to your original searcg.</p>
			<p>By providing a visual, interactive way to navigate Wikipedia, we hope to bring simplicity to the massive amount of human
			knowledge which Wikipedia has to offer.</p>
			
			<h1>Our Mission</h1>
			
			<p>WikiMap's mission is to visualize article relatedness by identifying and representing the strongest article relationships.</p>
			<p>We are 
			all about finding new and interesting ways to explore knowledge and related ideas, and that's at the heart of our product.</p>

			<p>We want to simplify the process of quickly viewing many related articles  while providing  a fun, easy-to-use, simple, and visually appealing way to explore Wikipedia at a high level.</p>

			 <h1>Our Beginning </h1>
			 
			 <p>WikiMap originated as a student project from undergraduates in the University of Washington's <a href="http://www.cs.washington.edu/" target="_blank">
			 Computer Science and Engineering department</a>.  Beginning as a <a href="http://www.cs.washington.edu/education/courses/cse403/11wi/"
			 target="_blank">Software Engineering</a> course student project in Winter 2011, we hope to continue working on it as a side project.</p>
			 
			 <p>WikiMap was originally pitched by a team of three; we are now a team of eight working toward the common goal of making WikiMap a great tool for everyone.</p>
			 
			 <h1>Become a Contributor</h1>
			 
			 <p>WikiMap is open-source and under a <a href="http://www.gnu.org/licenses/gpl.html" target="_blank">GNU GPL license</a>.  
			 If you want to contribute to the WikiMap project or provide feedback, please <a href="contact.php">contact us</a>.  Our
			 source code is also <a href="http://code.google.com/p/cse403-wi11-wikimap/" target="_blank">available on Google Code</a>.</p>
		</div>
	</div>
   </body>
   </html>
