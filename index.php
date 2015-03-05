<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sky Lyy | Photography</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">

	<link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/sky_photo.css">

	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel='stylesheet'>
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel='stylesheet'>
	
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-sb.copy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="http://www.skylyy.com">
                    <i class="glyphicon glyphicon-star"></i>  <span class="light">Web UX/UI Design</span> 
                </a>
            </div>

            <!-- nav links -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#focus">Focus</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#photos">Gallery</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#social">Social</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact2">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Photography</h1>
                        <p class="intro-text">Photos and finding the perfect shot.<br>By Skyler Lyytinen.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="glyphicon glyphicon-camera animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

	<!-- About -->
    <section id="about" class="content-section text-center">
        <div class="container">
            <div class="row">
                <h2>How I got here</h2> 
                <p>While I was planning my Design Studies portfolio for the graphic design course application 
                    in 2013, I stumbled upon the course description for the <strong>Interactive Media Design</strong> 
                    program also at Algonquin College.</p><p>With basic understanding of manual photography post fall 2014, 
                    and having experienced in-depth design practices in the <strong>Design Studies Program</strong>. I decided 
                    to stick with my strengths in being a freelance front end web developer and push it to the next level.</p>
            </div>
        </div>
    </section>

  	<!-- focus -->
    <section id="focus" class="content-section text-center">     
            <div class="container"> 
                <div class="focus-section">
            <div class="row">              
                   <h2>Focus</h2>
                   <p>Along with design and code, photography can easily compliment any design project.</p> 
        	</div>
        </div>
        </div>
    </section>

    <!-- Contact -->
	<section id="photos" class="content-section text-center">
            <div class="container">  
            <div class="row">            
                <h2>Photo Gallery</h2>
                <p>Here are some of my favorite shots from my 2014 experience.</p>
                <br><br>
                        <script></script>       
            </div>
        </div>
	</section>

	<!-- social -->
	<section id="social" class="content-section text-center">         
            <div class="container"> 
                <div class="social-section">
            <div class="row">  
            <h2>Follow Me</h2>
                <p>If you liked this page and want to see more of my work, or get bootstrap theme's like <a href="http://startbootstrap.com/template-overviews/grayscale/">this</a> one, check out the following.</p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://instagram.com/skyyskybone/" class="btn btn-default btn-lg"><i class="fa fa-globe fa-fw"></i></a>
                    </li>
                    <li>
                        <a href="https://twitter.com/Skyyskybone/" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i></a>
                    </li>
                    <li>
                        <a href="https://instagram.com/skyyskybone/" class="btn btn-default btn-lg"><i class="fa fa-instagram fa-fw"></i></a>
                    </li>
                </ul>
    		</div>
        </div>
        </div>
	</section>

	<!--  contact2  -->
	<section id="contact2" class="content-section text-center">
        <div class="container">
            <div class="row">
        
                
                    <h2>Contact</h2>
                            <?php $check = $_GET['success']; ?>

                                <p <?php if(isset($_GET['success'])) { echo " style='display:none;'";}?>>Have any questions or looking for something in perticular? Send me a message.</p>
                                <?php if(isset($_GET['success'])) { echo " <p>Thanks for you submission. We will be in touch soon.</p>'";}?>
                        
                            <form role="form"<?php if(isset($_GET['success'])) { echo " style='display:none;'";}?> data-toggle="validator" name="contactform" method="post" action="mail.php">
                      
                                        <label for="InputName">Your Name</label>
                                        <input type="text" class="form-control" id="InputName" name="name" placeholder="Your Name" required>
                       
                                        <label for="InputEmail">Email address</label>
                                        <input type="email" class="form-control" id="InputEmail" name="email" placeholder="Your Email" required>                                  
                                
                                        <label for="InputMessage">Message Here</label>
                                        <textarea cols="20" rows="5" class="form-control" id="InputMessage" name="message" placeholder="Your Message"></textarea>
                             

                                    <button type="submit" value="submit" class="btn btn-blue large">Submit</button>
                                
                            </form>

            </div>
        </div>
    </section>

	<!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; <a href="http://www.skylyy.com">www.skylyy.com</a> 2015.</p>
        </div>
    </footer>


<script src="js/jquery.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.easing.min.js"></script>

<script src="js/photo.js"></script>

</body>
</html>