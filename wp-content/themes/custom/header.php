<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
	<script>
		function myFunction() {
			var x = document.getElementById("navUl");
			if (x.style.display === "block") {
				x.style.display = "none";
			} else {
				x.style.display = "block";
				}
		}
	</script>

</head>

<body <?php body_class(); ?>>
	<header>
		<div class="headersWrap">
			<div class="headerContainer">
				<nav class="topMenuContainer">
					<div class="headerBar">
						<a href="javascript:void(0);" class="icon" onclick="myFunction()">
							<i class="fa fa-bars"></i>
						</a>
						<a href="<?php echo site_url('/')?>" ><img src=<?php echo get_theme_file_uri('/images/hifs.png') ?> height="auto"/></a>
					</div>
					<ul class="topMenu" id="navUl">
						<li>
							<a href="<?php echo site_url('/')?>" style='<?php echo is_page('Hem') ? "color: #008751" : " " ?>'>Hem</a>
						</li>
						<li>
							<a href="<?php echo site_url('/nyheter')?>" style='<?php echo is_page('nyheter') ? "color: #008751" : " " ?>'>Nyheter</a>
						</li>
						<li class="menu-item-has-children">
							<a href="<?php echo site_url('/aktiviteter')?>" style='<?php echo is_page('aktiviteter') ? "color: #008751" : " " ?>'>Aktiviteter 
							<svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 1L7.5 11L14.5 1" stroke='<?php echo is_page('aktiviteter') ? "#008751" : "white" ?>' stroke="#008751" stroke-width="2" />
							</svg></a>
							<div class="sub-menu">
								<a href="<?php echo site_url('/aktiviteter/#activities')?>">Aktiviteter</a>
								<a href="<?php echo site_url('/aktiviteter/#activitiesSchedule')?>">Aktivitetsschema</a>
								<a href="<?php echo site_url('/aktiviteter/#hallSection')?>">Idrottshallen</a>
								<a href="<?php echo site_url('/aktiviteter/#parkingSection')?>">Parkering</a>
								<a href="<?php echo site_url('/aktiviteter/#allActivitiesSection')?>">Våra aktiviteter</a>
							</div>
						</li>
						<li>
							<a href="<?php echo site_url('/medlemskap')?>" style='<?php echo is_page('medlemskap') ? "color: #008751" : " " ?>'>Medlemskap</a>
						</li>
						<li class="menu-item-has-children">
							<a href="<?php echo site_url('/foreningen')?>" style='<?php echo is_page('foreningen') || is_page('foreningen/styrelsen') ? "color: #008751" : " "?>'>Föreningen
							<svg width="17" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M1 1L7.5 11L14.5 1" stroke='<?php echo is_page('foreningen') || is_page('foreningen/styrelsen') ? "#008751" : "white" ?>' stroke="#008751" stroke-width="2" />
							</svg></a>
							<div class="sub-menu">
								<a href="<?php echo site_url('/foreningen')?>">Föreningen</a>
								<a href="<?php echo site_url('/foreningen/styrelsen')?>">Styrelsen</a>
								<a href="<?php echo site_url('/foreningen/kalender')?>">Kalender</a>
							</div>
						</li>
						<li>
							<a href="<?php echo site_url('/kontakt')?>" style='<?php echo is_page('kontakt') ? "color: #008751" : " " ?>'>Kontakt</a>
						</li>
						<li class="menu-item-has-children">
							<a href="<?php echo site_url('/arkiv/dokument')?>" style='<?php echo is_page('arkiv') || is_page('arkiv/bilder') || is_page('arkiv/dokument')? "color: #008751" : " " ?>'>Arkiv
								<svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg" >
									<path d="M1 1L7.5 11L14.5 1" stroke='<?php echo is_page('arkiv') || is_page('arkiv/bilder') || is_page('arkiv/dokument')? "#008751" : "white" ?>' stroke="#008751" stroke-width="2" />
								</svg>
							</a>
							<div class="sub-menu">
								<a href="<?php echo site_url('/arkiv/dokument')?>">Dokument</a>
								<a href="<?php echo site_url('/arkiv/bilder')?>">Bilder</a>
							</div>
						</li>
					</ul>
				</nav>
			</div>
			<?php global $template;
			
			if ( basename( $template ) === 'template-subheader.php' ){?>
					<div class="subHeaderContainer">
						<nav class="subMenuContainer">
							<ul class="subMenu">
								<li>
									<a href="<?php echo site_url('/foreningen')?>" style='<?php echo is_page('foreningen') ? "color: #008751" : " " ?>'>Föreningen</a>
								</li>
								<li>
									<a href="<?php echo site_url('/styrelsen')?>" style='<?php echo is_page('styrelsen') ? "color: #008751" : " " ?>'>Styrelsen</a>
								</li>
								<li>
									<a href="<?php echo site_url('/kalender')?>" style='<?php echo is_page('kalender') ? "color: #008751" : " " ?>'>Kalender</a>
								</li>
							</ul>
						</nav>
					</div>
					<?php
			} 
			if ( basename( $template ) === 'template-archive.php' ){?>
				<div class="subHeaderContainer">
					<nav class="subMenuContainer">
						<ul class="subMenu">
							<li>
								<a href="<?php echo site_url('/dokument')?>" style='<?php echo is_page('dokument') ? "color: #008751" : " " ?>'>Dokument</a>
							</li>
							<li>
								<a href="<?php echo site_url('/bilder')?>" style='<?php echo is_page('bilder') ? "color: #008751" : " " ?>'>bilder</a>
							</li>
						</ul>
					</nav>
				</div>
				<?php
			} 
			
			if ( basename( $template ) === 'template-activities.php'  ){?>
					<div class="subHeaderContainer">
						<nav class="subMenuContainer">
							<ul class="subMenu">
								<li>
									<a href="#activities">Aktiviteter</a>
								</li>
								<li>
									<a href="#activitiesSchedule">Aktivitetsschema</a>
								</li>
								<li>
									<a href="#hallSection">Idrottshallen</a>
								</li>
								<li>
									<a href="#parkingSection">Parkering</a>
								</li>
								<li>
									<a href="#allActivitiesSection">Våra aktiviteter</a>
								</li>
							</ul>
						</nav>
					</div>
					<?php
			} 
			?>
		</div>
			
	</header>