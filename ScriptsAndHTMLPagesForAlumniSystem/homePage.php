<?php 
	require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/SessionManagement/SessionCheck.php'; 
	require_once $_SERVER['DOCUMENT_ROOT'].'/PHPAlumniProject/error.php'; 
	SessionCheck();
	CheckForErrorMessage();
?>



<!DOCTYPE html>
<html>

<head>
	<title>Alumni Association System</title>
	<?php require_once 'Partials/_headerlinks.php'; ?>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<style>
		.scrolltop {
			margin: 0 auto;
			position: fixed;
			bottom: 20px;
			right: 10px;
		}

		.scroll {
			position: absolute;
			right: 15px;
			bottom: 40px;
			background: #b2b2b2;
			background: rgba(178, 178, 178, 0.7);
			padding: 20px;
			text-align: center;
			margin: 0 0 0 0;
			cursor: pointer;
			transition: 0.5s;
			-moz-transition: 0.5s;
			-webkit-transition: 0.5s;
			-o-transition: 0.5s;
		}

		.scroll:hover {
			background: rgba(178, 178, 178, 1.0);
			transition: 0.5s;
			cursor: pointer;
			-moz-transition: 0.5s;
			-webkit-transition: 0.5s;
			-o-transition: 0.5s;
		}

		.scroll:hover .fa {
			padding-top: -10px;
		}

		.scroll .fa {
			font-size: 30px;
			margin-top: -5px;
			margin-left: 1px;
			transition: 0.5s;
			-moz-transition: 0.5s;
			-webkit-transition: 0.5s;
			-o-transition: 0.5s;
		}
	</style>


</head>

<body>
	<?php require_once 'Partials/_nav.php'; ?>
	<div id="page " class="site" itemscope itemtype="http://schema.org/LocalBusiness">
		<!-- Header Close -->
		<div class="banner">
			<div class="owl-four owl-carousel" itemprop="image">
				<img src="HomePage_images/Homebackground1.jpg" style="background-size: cover;background-repeat:no-repeat" alt="Image of Bannner">
				<img src="HomePage_images/Homebackground1.jpg" style="background-size: cover;background-repeat:no-repeat" alt="Image of Bannner">
				<img src="HomePage_images/Homebackground1.jpg" style="background-size: cover;background-repeat:no-repeat" alt="Image of Bannner">
			</div>
			<div class="container" id="home" itemprop="description">
				<h1 style="`">Any institutions' alumni are key to its growth</h1>
				<h3> We are focused on giving a global experience to our students.</h3>
			</div>
			<div id="owl-four-nav" class="owl-nav"></div>
		</div>
		<!-- Banner Close -->
		<div class="page-heading">
			<div class="container">
				<h2>popular courses</h2>
			</div>
		</div>
		<!-- Popular courses End -->
		<div class="learn-courses">
			<div class="container">
				<div class="courses">
					<div class="owl-one owl-carousel">
						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap" itemprop="image"><img src="HomePage_images/course-pic.jpg" alt="courses picture"></div>
							<a href="#" class="learn-desining-banner" itemprop="name">Learn Web Designing >>></a>
							<div class="box-body" itemprop="description">
								<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum
									lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
								<section itemprop="time">
									<p><span>Duration:</span> 4 Years</p>
									<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
									<p><span>Fee:</span> 4,00,000</p>
								</section>
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap" itemprop="image"><img src="HomePage_images/course-pic.jpg" alt="courses picture"></div>
							<a href="#" class="learn-desining-banner" itemprop="name">Learn Web Designing >>></a>
							<div class="box-body" itemprop="description">
								<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum
									lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
								<section itemprop="time">
									<p><span>Duration:</span> 4 Years</p>
									<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
									<p><span>Fee:</span> 4,00,000</p>
								</section>
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap" itemprop="image"><img src="HomePage_images/course-pic.jpg" alt="courses picture"></div>
							<a href="#" class="learn-desining-banner" itemprop="name">Learn Web Designing >>></a>
							<div class="box-body" itemprop="description">
								<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum
									lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
								<section itemprop="time">
									<p><span>Duration:</span> 4 Years</p>
									<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
									<p><span>Fee:</span> 4,00,000</p>
								</section>
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap" itemprop="image"><img src="HomePage_images/course-pic.jpg" alt="courses picture"></div>
							<a href="#" class="learn-desining-banner" itemprop="name">Learn Web Designing >>></a>
							<div class="box-body" itemprop="description">
								<p>Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum
									lorem ipsum Lorem Ipsum lorem ipsum Lorem Ipsum lorem ipsum</p>
								<section itemprop="time">
									<p><span>Duration:</span> 4 Years</p>
									<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
									<p><span>Fee:</span> 4,00,000</p>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Learn courses End -->
		<section class="whyUs-section">
			<div class="container">
				<div class="featured-points">

				</div>
				 <div class="whyus-wrap">

				</div> 
			</div>
		</section>
		<!-- Closed WhyUs section -->
		<section class="page-heading">
			<div class="container">
				<h2>gallery</h2>
			</div>
		</section>
		<section class="gallery-images-section" itemprop="image" itemscope itemtype=" http://schema.org/ImageGallery">
			<div class="gallery-img-wrap">
				<a href="images/gallery-img1.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="HomePage_images/gallery-img1.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img2.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="HomePage_images/gallery-img2.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img3.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="HomePage_images/gallery-img3.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img4.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="HomePage_images/gallery-img4.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img5.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="HomePage_images/gallery-img5.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img6.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="HomePage_images/gallery-img6.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img7.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="HomePage_images/gallery-img7.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img8.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="HomePage_images/gallery-img8.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img9.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="HomePage_images/gallery-img9.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img10.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="HomePage_images/gallery-img10.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img11.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="HomePage_images/gallery-img11.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img12.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="HomePage_images/gallery-img12.jpg" alt="gallery-images">
				</a>
			</div>
		</section>
		<!-- End of gallery Images -->
		<!-- <section class="page-heading">
			<div class="container">
				<h2>upcomming events</h2>
			</div>
		</section>
		<section class="events-section" itemprop="event" itemscope itemtype=" http://schema.org/Event">
			<div class="container">
				<div class="event-wrap">
					<div class="img-wrap" itemprop="image">
						<img src="HomePage_images/events.jpg" alt="event images">
					</div>
					<div class="details">
						<a href="">
							<h3 itemprop="name">Orientation Programme for new Students.</h3>
						</a>
						<p itemprop="description">Orientation Programme for new sffs Students. Orientation Programme for
							new sffs Students. Orientation Programme for new sffs Students.</p>

						<h5 itemprop="startDate"><i class="far fa-clock"></i> Dec 30,2018 | 11am</h5>
						<h5 itemprop="location"><i class="fas fa-map-marker-alt"></i> Hotel Malla, Lainchaur</h5>
					</div>
				</div>

				<div class="event-wrap">
					<div class="img-wrap" itemprop="image">
						<img src="HomePage_images/events.jpg" alt="event images">
					</div>
					<div class="details">
						<a href="">
							<h3 itemprop="name">Orientation Programme for new Students.</h3>
						</a>
						<p itemprop="description">Orientation Programme for new sffs Students. Orientation Programme for
							new sffs Students. Orientation Programme for new sffs Students.</p>

						<h5 itemprop="startDate"><i class="far fa-clock"></i> Dec 30,2018 | 11am</h5>
						<h5 itemprop="location"><i class="fas fa-map-marker-alt"></i> Hotel Malla, Lainchaur</h5>
					</div>
				</div>
			</div>
		</section> -->
		<!-- End of Events section -->
		<!-- <section class="what-other-say">
			<div class="container">
				<h4 class="article-subtitle">Get to Know</h4>
				<h2 class="head">what our customer say</h2>
				<div class="three owl-carousel owl-theme">
					<div class="customer-item" itemscope itemtype="http://schema.org/Rating">
						<div class="border">
							<div class="customer">
								<figure>
									<img class="customer-img" src="images/customer-img.jpg" alt="Person image">
									<figcaption>
										<span itemprop="author">SAGAR KUMAR SAPKOTA</span>
										<div class="rateYo" itemprop="ratingValue"></div>
									</figcaption>
								</figure>
							</div>
							<div class="customer-review">
								<p itemprop="description">
									"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non"
								</p>
							</div>
						</div>
					</div>
					<div class="customer-item" itemscope itemtype="http://schema.org/Rating">
						<div class="border">
							<div class="customer">
								<figure>
									<img class="customer-img" src="images/customer-img.jpg" alt="Person image">
									<figcaption>
										<span itemprop="author">SAGAR KUMAR SAPKOTA</span>
										<div class="rateYo" itemprop="ratingValue"></div>
									</figcaption>
								</figure>
							</div>
							<div class="customer-review">
								<p itemprop="description">
									"22222Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non"
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- End of Others talk -->
		<section class="page-heading">
			<div class="container">
				<h2>latest Placements</h2>
			</div>
		</section>
		<section class="latest-news">
			<div class="container" itemprop="event" itemscope itemtype=" http://schema.org/Event">
				<div class="owl-two owl-carousel">
					<div class="news-wrap" itemprop="event">
						<div class="news-img-wrap" itemprop="image">
							<img src="HomePage_images/Viraj_Thakkar.jpg" alt="Latest News Images" height="100">
						</div>
						<div class="news-detail AlumniName" itemprop="description" style="padding: 1.5625em;border:none; box-sizing: border-box; position: absolute; top: 41%; left: 1%; background: transparent;">
							<a href="">
								<h1>Viraj Thakkar</h1>
							</a>
							<!-- <h2> Crest Infosystem Pvt Ltd</h2>
							<h2>Devops Trainee</h2>
							<h1 style="font-size: 25px;">6 LPA</h1> -->
						</div>
					</div>

					<div class="news-wrap" itemprop="event">
						<div class="news-img-wrap" itemprop="image">
							<img src="HomePage_images/priya.jpg" alt="Latest News Images">
						</div>
						<div class="news-detail" itemprop="description" style="padding: 1.5625em;border:none; box-sizing: border-box; position: absolute; top: 41%; left: 1%; background: transparent;">
							<a href="">
								<h1>Priya Kanabar</h1>
							</a>
							<!-- <h2>Crest Infosystem Pvt Ltd</h2>
							<h2>Python Developer</h2>
							<h1 style="font-size: 25px;">5.04 LPA</h1> -->
						</div>
					</div>

					<div class="news-wrap" itemprop="event">
						<div class="news-img-wrap" itemprop="image">
							<img src="HomePage_images/Vanukuru.jpg" alt="Latest News Images">
						</div>
						<div class="news-detail" itemprop="description" style="padding: 1.5625em;border:none; box-sizing: border-box; position: absolute; top: 41%; left: 1%; background: transparent;">
							<a href="">
								<h1>Vanukuru Sowmyashree</h1>
							</a>
						</div>	
						
					</div>

					<div class="news-wrap" itemprop="event">
						<div class="news-img-wrap" itemprop="image">
							<img src="HomePage_images/sourabh.jpg" alt="Latest News Images">
						</div>
						<div class="news-detail" itemprop="description" style="padding: 1.5625em;border:none; box-sizing: border-box; position: absolute; top: 41%; left: 1%; background: transparent;">
							<a href="">
								<h1>Sourabh Singh</h1>
							</a>
						</div>
					</div>

					<div class="news-wrap" itemprop="event">
						<div class="news-img-wrap" itemprop="image">
							<img src="HomePage_images/darshil.jpg" alt="Latest News Images">
						</div>
						<div class="news-detail" itemprop="description" style="padding: 1.5625em;border:none; box-sizing: border-box; position: absolute; top: 41%; left: 1%; background: transparent;">
							<a href="">
								<h1>Darshil Kadiwala</h1>
							</a>
						</div>
					</div>

					<div class="news-wrap" itemprop="event">
						<div class="news-img-wrap" itemprop="image">
							<img src="HomePage_images/viikas.jpg" alt="Latest News Images">
						</div>
						<div class="news-detail" itemprop="description" style="padding: 1.5625em;border:none; box-sizing: border-box; position: absolute; top: 41%; left: 1%; background: transparent;">
							<a href="">
								<h1>Vikas Rajpurohit</h1>
							</a>
						</div>
					</div>

					<div class="news-wrap" itemprop="event">
						<div class="news-img-wrap" itemprop="image">
							<img src="HomePage_images/asif.jpg" alt="Latest News Images">
						</div>
						<div class="news-detail" itemprop="description" style="padding: 1.5625em;border:none; box-sizing: border-box; position: absolute; top: 41%; left: 1%; background: transparent;">
							<a href="">
								<h1>Asif Ahmed</h1>
							</a>
						</div>
					</div>

					<div class="news-wrap" itemprop="event">
						<div class="news-img-wrap" itemprop="image">
							<img src="HomePage_images/raj.jpg" alt="Latest News Images">
						</div>
						<div class="news-detail" itemprop="description" style="padding: 1.5625em;border:none; box-sizing: border-box; position: absolute; top: 41%; left: 1%; background: transparent;">
							<a href="">
								<h1>Raj Zalvadiya</h1>
							</a>
						</div>
					</div>

				</div>
				<div class="scrolltop">
					<div class="scroll icon"><i class="fa fa-4x fa-angle-up"></i></div>
				</div>
			</div>

		</section>
		<!-- Latest News CLosed -->

		<!-- End of Query Section -->
		<?php require_once 'Partials/footer.php' ?>


	</div>


	<?php require_once 'Partials/_navjs.php' ?>
</body>
</html>
