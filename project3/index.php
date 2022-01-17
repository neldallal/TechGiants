	<?php 	$customCSS = "
		<link rel='stylesheet' href='sss/sss.css'>
		<link rel='stylesheet' href='http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'>
		<link rel='stylesheet' href='css/home.css'>
		";
		include "inc/html-top.php"; 
		?>

	<header class="page-header">
		<a href="index.php"><h1 class="page-h1">Tech Tycoons</h1></a>
		<div>Legends that shaped the industry</div>
		<?php include "inc/nav.php"; ?>
	</header>

	<body>
		<div class="container">

			<div class="slider">	
				<img src="images/gates-slideshow.png" alt="Bill Gates">
				<img src="images/elon-slideshow.png" alt="Elon Musk">
				<img src="images/lee-slideshow.png" alt="Tim Burners-Lee">
				<img src="images/mark-slideshow.png" alt="Mark Zuckerberg">
			</div>

			<div class="main-grid">

			<section class="part1">
				<header class="main-header"> 
					<h2>Bill Gates</h2>
				</header>

				<section class="lead">
					<p>William Henry Gates III (born October 28, 1955) is an American business magnate, software developer, investor, author, and philanthropist. He is a co-founder of Microsoft Corporation. During his career at Microsoft, Gates held the positions of chairman, chief executive officer (CEO), president and chief software architect, while also being the largest individual shareholder until May 2014. He is one of the best-known entrepreneurs and pioneers of the microcomputer revolution of the 70s and 80s.</p>

					<div><a href="billgates.php">Explore more about Bill Gates</a></div>

				</section>
			</section><!--part1-->

			<section class="part2">
				<header class="main-header">
	                <h2>Tim Burners-Lee</h2>
	            </header>

	            <section class="lead">
	            	<p>Sir Timothy John Berners-Lee is an English computer scientist best known as the inventor of the World Wide Web. He is a Professorial Fellow of Computer Science at the University of Oxford and a professor at the Massachusetts Institute of Technology (MIT). Berners-Lee proposed an information management system on 12 March 1989, then implemented the first successful communication between a Hypertext Transfer Protocol (HTTP) client and server via the Internet in mid-November.</p>

					<div><a href="burners-lee.php">Explore more about Tim Burners-Lee</a></div>

	        	</section>
	        </section><!--part2-->

	        <section class="part3">
	        	<header class="main-header">
	                <h2>Elon Musk</h2>
	            </header>

	            <section class="lead">
		            <p>Elon Reeve Musk FRS (/ˈiːlɒn/ EE-lon; born June 28, 1971) is a business magnate, industrial designer, and engineer. He is the founder, CEO, CTO, and chief designer of SpaceX; early investor, CEO, and product architect of Tesla, Inc.; founder of The Boring Company; co-founder of Neuralink; and co-founder and initial co-chairman of OpenAI. A centibillionaire, Musk is one of the richest people in the world. Musk was born to a Canadian mother and South African father and raised in Pretoria, South Africa.</p>

					<div><a href="elon-musk.php">Explore more about Elon Musk</a></div>

	            </section>
	         </section><!--part3-->

	        <section class="part4">
	            <header class="main-header">
	                <h2>Mark Zuckerberg</h2>
	            </header>

	            <section class="lead">
	            	<p>Mark Elliot Zuckerberg is an American media magnate, internet entrepreneur, and philanthropist. He is known for co-founding Facebook, Inc. and serves as its chairman, chief executive officer, and controlling shareholder. Born in White Plains, New York, Zuckerberg attended Harvard University, where he launched the Facebook social networking service from his dormitory room on February 4, 2004, with college roommates Eduardo Saverin, Andrew McCollum, Dustin Moskovitz, and Chris Hughes. </p>

					<div><a href="zuckerberg.php">Explore more about Mark Zuckerberg</a></div>

	            </section>
            </section><!--part4-->

        	</div><!--main-grid-->
		</div><!--container-->

		<?php include "inc/scripts.php"; ?>
		<script src="sss/sss.js"></script>
		<script>
			$('.slider').sss();
		</script>

	</body>

	<footer class="page-footer">
		<div>Nadine Eldallal - CSC 170 Webpage Design and Development</div>
	</footer>

</html>

