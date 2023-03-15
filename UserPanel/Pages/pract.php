<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@6.0.2/swiper-bundle.min.css">
    <link rel="stylesheet" href="../Assets/css/prac.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap&subset=latin-ext" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <!--loader thx:https://codepen.io/aurer/pen/jEGbA-->
<!-- <div class="loader">
	<svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
		<path fill="#000" d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z">
			<animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 25 25" to="360 25 25" dur="0.6s" repeatCount="indefinite" />
		</path>
	</svg>
</div> -->

<!--gallery-->
<div class="gallery-wrapper">
	<div class="content">
		<div class="gallery full">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="image">
                          <img src="../Assets/Images/it.jpg" alt="" />
						</div>

						<div class="overlay">
							<div class="text-wrap">
								<div class="name">
									<span>Thumbnail Gallery</span>
								</div>
								<div class="caption">
									<p>
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quasi aliquam eius, blanditiis quae, explicabo praesentium corporis tempora quam et rem nulla repellendus placeat, nisi omnis earum sunt suscipit aspernatur!
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="image">
							<img src="../Assets/Images/knives.jpg" alt="" />
						</div>

						<div class="overlay">
							<div class="text-wrap">
								<div class="name">
									<span>Thumbnail Gallery</span>
								</div>
								<div class="caption">
									<p>
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quasi aliquam eius, blanditiis quae, explicabo praesentium corporis tempora quam et rem nulla repellendus placeat, nisi omnis earum sunt suscipit aspernatur!
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="image">
							<img src="../Assets/Images/enola.jpg" alt="" />
						</div>

						<div class="overlay">
							<div class="text-wrap">
								<div class="name">
									<span>Thumbnail Gallery</span>
								</div>
								<div class="caption">
									<p>
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto quasi aliquam eius, blanditiis quae, explicabo praesentium corporis tempora quam et rem nulla repellendus placeat, nisi omnis earum sunt suscipit aspernatur!
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="swiper-next-button">
				<em class="material-icons">chevron_right</em>
			</div>
			<div class="swiper-prev-button">
				<em class="material-icons">chevron_left</em>
			</div>
		</div>

		<div class="gallery thumb">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="image">
							<img src="../Assets/Images/it.jpg" alt="" />

							<div class="overlay">
								<em class="material-icons">remove_red_eye</em>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="image">
							<img src="../Assets/Images/knives.jpg" alt="" />

							<div class="overlay">
								<em class="material-icons">remove_red_eye</em>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="image">
							<img src="../Assets/Images/enola.jpg" alt="" />

							<div class="overlay">
								<em class="material-icons">remove_red_eye</em>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="swiper-next-button">
				<em class="material-icons">arrow_right_alt</em>
			</div>
			<div class="swiper-prev-button">
				<em class="material-icons">arrow_right_alt</em>
			</div>
		</div>
	</div>
</div>

<!--none-->
<!-- <div class="signature">
	<h3>plugin & author</h3>

	<a href="https://swiperjs.com/" target="_blank">swiper slide</a>
	<em>|</em>
	<a href="mailto::cohlejack@gmail.com" target="_blank">jackcohle</a>
</div> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/swiper@6.0.2/swiper-bundle.min.js"></script>
<script src="../Assets/js/prac.js"></script>
</body>
</html>