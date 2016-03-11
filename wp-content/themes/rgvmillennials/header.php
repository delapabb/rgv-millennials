<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" lang="en">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php if (get_field('social_card_title')) { ?>
			<meta property="og:title" content="<?php the_field('social_card_title'); ?>" />
		<?php } elseif (get_the_title()) { ?>
			<meta property="og:title" content="<?php the_title(); ?>" />
		<?php } else { ?>
			<meta property="og:title" content="<?php bloginfo('name'); ?>" />
		<?php } ?>

		<?php if (get_field('social_card_description')) { ?>
			<meta property="og:description" content="<?php the_field('social_card_description'); ?>" />
		<?php } ?>

		<?php if (is_front_page()) { ?>
			<meta property="og:type" content="website" />
		<?php } else { ?>
			<meta property="og:type" content="article" />
		<?php } ?>

		<meta property="og:url" content="<?php the_permalink(); ?>" />

		<?php if (get_field('social_card_image')) { ?>
			<meta property="og:image" content="<?php the_field('social_card_image'); ?>" />
		<?php } ?>

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

	<?php if (is_user_logged_in()) { ?>

		<div class="sb-slidebar sb-left">
			<nav class="drawer-menu" role="nav">
				<?php $args = array(
					'theme_location' => 'Header',
					'menu' => 'primary',
					'container' => '',
					'container_class' => '',
					'container_id' => '',
					'menu_class' => 'menu vertical',
					'menu_id' => '',
					'echo' => true,
					'fallback_cb' => 'wp_page_menu',
					'before' => '',
					'after' => '',
					'link_before' => '',
					'link_after' => '',
					'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
					'depth' => 0,
					'walker' => ''
				);
			
				wp_nav_menu( $args ); ?>
			</nav>
		</div>

		<div class="mobile-nav-bar sb-slide hide-for-xxlarge row collapse">
			<div class="small-3 column text-left">
				<a href="#">
					<svg id="mobile-nav-icon" class="sb-toggle-left" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="41.82" height="44" viewBox="0 0 41.82 44"><title>icon-millennial</title><path d="M159.4,168.3a14.24,14.24,0,0,0,.3-1.83,7.53,7.53,0,0,0,0-1.49,12.34,12.34,0,0,0-.16-1.27,9.57,9.57,0,0,0-.36-1.33,8.39,8.39,0,0,0-.59-1.35,9.43,9.43,0,0,0-1.44-2c-0.27-.29-0.55-0.57-0.84-0.83a9.83,9.83,0,0,0-.83-0.64,9.18,9.18,0,0,0-1.74-1c-0.23-.1-0.45-0.2-0.68-0.27l-0.58-.19c-0.24-.07-0.48-0.12-0.72-0.17a7.68,7.68,0,0,0-1.44-.19h-1a7.52,7.52,0,0,0-1.55.19c-0.33.07-.64,0.16-1,0.25a8.2,8.2,0,0,0-.83.29,10.44,10.44,0,0,0-2.2,1.26,6.66,6.66,0,0,0-.56.45,12.36,12.36,0,0,0-1.18,1.24A10.22,10.22,0,0,0,141,161c-0.15.28-.28,0.57-0.4,0.86a6.75,6.75,0,0,0-.32.89c-0.09.34-.19,0.69-0.25,1a9.6,9.6,0,0,0-.14,1.08,6.76,6.76,0,0,0,0,1.45c0,0.31.09,0.61,0.12,0.92a8,8,0,0,0,.38,1.67,8.41,8.41,0,0,0,.81,1.76c0.13,0.22.26,0.44,0.4,0.64a10,10,0,0,0,1.12,1.32,9.06,9.06,0,0,0,1.53,1.23l1,0.62a1.44,1.44,0,0,1,.61.76,3.7,3.7,0,0,1,.21,1.21c0,0.17,0,.35,0,0.52q0,1.46,0,2.92h0q0,1.81,0,3.61a0.7,0.7,0,0,0,.15.44l0.69,0.91c0.4,0.53.81,1.05,1.2,1.59s0.89,1.23,1.33,1.85l0.16,0.2a0.24,0.24,0,0,0,.19.09,0.27,0.27,0,0,0,.25-0.11c0.18-.25.37-0.49,0.55-0.74,0.58-.8,1.14-1.61,1.76-2.39,0.27-.34.53-0.69,0.79-1l0.26-.34a0.71,0.71,0,0,0,.16-0.44q0-.58,0-1.16,0-2.92,0-5.85a3.73,3.73,0,0,1,.2-1.24,1.44,1.44,0,0,1,.61-0.8l0.6-.38a10.49,10.49,0,0,0,1.49-1.06,9.59,9.59,0,0,0,1.15-1.19,10.14,10.14,0,0,0,1.18-1.86A9,9,0,0,0,159.4,168.3Zm-12.77,11.08q0-1.2,0-2.4a0.15,0.15,0,0,1,.16-0.18h0.81c0.15,0,.19.05,0.19,0.21q0,1.34,0,2.68c0,0.21,0,.43,0,0.64a2.8,2.8,0,0,1-.06.66,1.23,1.23,0,0,1-.54.81,1.59,1.59,0,0,1-.35.15,0.16,0.16,0,0,1-.23-0.17c0-.32,0-0.65,0-1,0-.47,0-0.95,0-1.42h0Zm2.56-16.82c-0.05.21-.13,0.4-0.2,0.61l0,0.06a0.16,0.16,0,0,1-.2.09l-0.13-.05-0.5-.23L148,163a0.14,0.14,0,0,1-.05-0.19l0.06-.1a4.28,4.28,0,0,1,.75-0.94,1.83,1.83,0,0,1,.29-0.21,0.14,0.14,0,0,1,.23.11,0.94,0.94,0,0,1,0,.14s0,0.09,0,.15A1.53,1.53,0,0,1,149.19,162.56Zm0.73-.72a0.57,0.57,0,0,1,0-.09,0.12,0.12,0,0,1,.06-0.12,0.1,0.1,0,0,1,.12,0l0.34,0.48a0.45,0.45,0,0,1,.05.13,0.14,0.14,0,0,1-.05.17l-0.58.41a0.12,0.12,0,0,1,0-.17A1.87,1.87,0,0,0,149.92,161.84Zm0.42,2.49A4.17,4.17,0,0,0,150,164l-0.06,0a0.14,0.14,0,0,1,0-.22,3.5,3.5,0,0,1,.63-0.57l0.08,0a0.11,0.11,0,0,1,.14.05,0.42,0.42,0,0,1,0,.13c0,0.21,0,.43,0,0.64a4.88,4.88,0,0,1-.16,1,3.45,3.45,0,0,1-.39.89,4.45,4.45,0,0,1-.75,1,1.33,1.33,0,0,1-.22.18,0.26,0.26,0,0,1-.36-0.05,0.59,0.59,0,0,1-.12-0.17,2.42,2.42,0,0,1-.12-0.39,0.2,0.2,0,0,1,.21-0.27,1.85,1.85,0,0,0,1-.35,1.4,1.4,0,0,0,.53-0.66A0.75,0.75,0,0,0,150.34,164.33Zm-0.56.69a1.22,1.22,0,0,1-.65.41h-0.06a0.11,0.11,0,0,1-.11-0.16,1.65,1.65,0,0,1,.09-0.2c0.09-.17.19-0.35,0.29-0.52a0.18,0.18,0,0,1,.31,0l0.13,0.14A0.23,0.23,0,0,1,149.79,165Zm-1.32-1.13a0.2,0.2,0,0,1,.13.3c-0.15.35-.3,0.7-0.45,1l-0.06.1a0.18,0.18,0,0,1-.23.07,1,1,0,0,1-.55-0.43,0.77,0.77,0,0,1-.14-0.47,0.6,0.6,0,0,1,0-.12,2.32,2.32,0,0,1,.3-0.77l0-.06a0.13,0.13,0,0,1,.15,0l0.22,0.1Zm-1,2.08,0.09,0a0.11,0.11,0,0,1,.05.16,1.91,1.91,0,0,1-.31.42,0.22,0.22,0,0,1-.34,0,0.65,0.65,0,0,1-.22-0.38c0-.12,0-0.25,0-0.36s0-.19,0-0.27a0.09,0.09,0,0,1,.15-0.05L147,165.6A1.52,1.52,0,0,0,147.51,166Zm-0.67-2.61c-0.07.18-.15,0.37-0.23,0.54a5.16,5.16,0,0,0-.45,1.4,3.2,3.2,0,0,0,0,.8,1.55,1.55,0,0,0,.25.73,1,1,0,0,0,.82.46,0.7,0.7,0,0,0,.41-0.11,0.8,0.8,0,0,0,.35-0.32l0-.06a0.18,0.18,0,0,1,.15-0.1,0.14,0.14,0,0,1,.11.14,1.64,1.64,0,0,0,.17.37,1.07,1.07,0,0,0,.61.46,0.62,0.62,0,0,0,.4,0,1.33,1.33,0,0,0,.51-0.29l0.23-.2a0.07,0.07,0,0,1,.11,0,1.35,1.35,0,0,1,0,.17,1.14,1.14,0,0,0,.28.74,0.67,0.67,0,0,0,.67.22l0.16,0a0.2,0.2,0,0,1,.24.11,0.66,0.66,0,0,0,.35.31,0.76,0.76,0,0,0,.37.06,1.33,1.33,0,0,0,1-.57,2.54,2.54,0,0,0,.33-0.57,0.41,0.41,0,0,1,.15-0.21,0.44,0.44,0,0,1,0,.33,5.78,5.78,0,0,1-.46,1.2,14.64,14.64,0,0,1-1,1.53c-0.1.14-.23,0.26-0.34,0.4s-0.35.41-.5,0.63a1.85,1.85,0,0,0-.35,1.09c0,1.12,0,2.23,0,3.35,0,0,0,.06,0,0.1a0.15,0.15,0,0,1-.16.17h-2.31c-0.36,0-.35,0-0.35-0.37,0-1,0-2.09,0-3.14a2.4,2.4,0,0,0-.19-0.88,3.87,3.87,0,0,0-.29-0.57c-0.36-.61-0.73-1.21-1.14-1.78-0.26-.38-0.52-0.76-0.78-1.14l-0.45-.62L145,167a2.73,2.73,0,0,1-.36-0.85,0.88,0.88,0,0,1,.06-0.6,4.29,4.29,0,0,1,.39-0.65l1-1.44a0.79,0.79,0,0,1,.35-0.28,0.35,0.35,0,0,1,.23,0C146.86,163.18,146.89,163.24,146.84,163.36Zm4.6-.19,0-.16c0-.13.06-0.2,0.15-0.18a1,1,0,0,1,.76.54,0.49,0.49,0,0,1,0,.13,0.13,0.13,0,0,1-.11.16,1.42,1.42,0,0,0-.53.25l-0.06,0a0.11,0.11,0,0,1-.17-0.09,0.38,0.38,0,0,1,0-.07A2.6,2.6,0,0,0,151.44,163.17Zm0.21,1.74a2.33,2.33,0,0,1,.45-0.48l0.14-.09c0.14-.07.21,0,0.2,0.13a2.76,2.76,0,0,1-.15.65c-0.13.46-.28,0.91-0.42,1.36a4.74,4.74,0,0,1-.38.9,0.85,0.85,0,0,1-.21.25,0.19,0.19,0,0,1-.33-0.1,1.36,1.36,0,0,1-.06-0.47,3,3,0,0,1,.12-0.77A4.72,4.72,0,0,1,151.65,164.91Zm1.56,0.89a0.1,0.1,0,0,1,.16.07,1.13,1.13,0,0,1,0,.15,4.1,4.1,0,0,1-.34,1.37,1.84,1.84,0,0,1-.38.54,0.68,0.68,0,0,1-.3.18,0.13,0.13,0,0,1-.18-0.13,1,1,0,0,1,.06-0.42,8.59,8.59,0,0,1,.49-1.13A1.91,1.91,0,0,1,153,166,1.59,1.59,0,0,1,153.21,165.81ZM153,165a0.79,0.79,0,0,1,.06-0.17,0.07,0.07,0,0,1,.11,0,1.19,1.19,0,0,1,0,.11,0.14,0.14,0,0,1-.08.15A0.1,0.1,0,0,1,153,165Zm-4.62,12.15c0-.06,0-0.13,0-0.19a0.17,0.17,0,0,1,.18-0.18h2.35c0.32,0,.34,0,0.34.33q0,0.78,0,1.57h0c0,0.5,0,1,0,1.5a1.5,1.5,0,0,1-.17.75,1.13,1.13,0,0,1-.31.36,1.55,1.55,0,0,1-.68.31,1.83,1.83,0,0,1-.7,0,1.35,1.35,0,0,1-.61-0.35,1.31,1.31,0,0,1-.4-1c0-.14,0-0.29,0-0.43Q148.36,178.52,148.36,177.19Zm2.44,9.25-0.06.1-0.78,1,0,0.06a0.12,0.12,0,0,1-.21,0l-0.44-.56-0.37-.49a0.43,0.43,0,0,1-.07-0.1,0.24,0.24,0,0,1,0-.13,0.1,0.1,0,0,1,.12-0.06h1.78A0.1,0.1,0,0,1,150.8,186.44Zm2.06-2.69-0.59.77c-0.25.33-.51,0.67-0.76,1a0.39,0.39,0,0,1-.36.18h-2.78a0.28,0.28,0,0,1-.22-0.12l-1.37-1.8a0.59,0.59,0,0,1-.14-0.39c0-.21,0-0.43,0-0.64s0-.19.2-0.21a1.56,1.56,0,0,0,1.2-.75l0-.06c0.11-.15.17-0.16,0.3,0a1.85,1.85,0,0,0,.82.46,1.93,1.93,0,0,0,.8.07,2.35,2.35,0,0,0,.64-0.15,2,2,0,0,0,.59-0.39l0.08-.08a0.11,0.11,0,0,1,.15,0l0.07,0.09a1.81,1.81,0,0,0,.55.55,1.57,1.57,0,0,0,.65.26h0a0.18,0.18,0,0,1,.18.21s0,0.08,0,.12,0,0.33,0,.5A0.56,0.56,0,0,1,152.86,183.76Zm0.12-6.44q0,1,0,2.07h0q0,1.16,0,2.33s0,0,0,0c0,0.19-.08.25-0.25,0.18a1.47,1.47,0,0,1-.51-0.29,1.27,1.27,0,0,1-.35-0.61,2.54,2.54,0,0,1-.07-0.59c0-1,0-2,0-3.06,0-.14,0-0.28,0-0.43a0.12,0.12,0,0,1,.12-0.15h0.92a0.13,0.13,0,0,1,.12.15C153,177.08,153,177.2,153,177.32Zm5-7a8.93,8.93,0,0,1-1,1.47,7.93,7.93,0,0,1-1.31,1.2q-0.63.45-1.28,0.86l-0.43.29a1.71,1.71,0,0,0-.53.65,3.31,3.31,0,0,0-.26.74,4.27,4.27,0,0,0-.05.45,0.19,0.19,0,0,1-.21.2H152a0.13,0.13,0,0,1-.15-0.14c0-.12,0-0.24,0-0.36q0-.74,0-1.47h0c0-.55,0-1.09,0-1.64A1.12,1.12,0,0,1,152,172a6.34,6.34,0,0,1,.58-0.75,9.7,9.7,0,0,0,1-1.36,8.85,8.85,0,0,0,.52-1,4.23,4.23,0,0,0,.35-1.16,5,5,0,0,0,.07-0.64,2.67,2.67,0,0,0-.31-1.26L154,165.5a1.3,1.3,0,0,1-.07-0.2c0-.18-0.09-0.35-0.14-0.53a1.64,1.64,0,0,0-.52-0.81,0.53,0.53,0,0,1-.18-0.27,4.64,4.64,0,0,0-.18-0.56,1.5,1.5,0,0,0-.91-0.85,1.55,1.55,0,0,0-.61-0.09h-0.1a0.22,0.22,0,0,1-.24-0.16,2.35,2.35,0,0,0-1-1.14,1.31,1.31,0,0,0-1.3,0,3.16,3.16,0,0,0-.95.82c-0.19.23-.35,0.47-0.52,0.71a0.22,0.22,0,0,1-.29.13l-0.33,0a1.18,1.18,0,0,0-1.07.5c-0.06.08-.11,0.17-0.17,0.26l-1,1.44a2.77,2.77,0,0,0-.34.6,1.52,1.52,0,0,0-.09.39,2.23,2.23,0,0,0,.24,1.22,7.25,7.25,0,0,0,.74,1.16c0.48,0.64.94,1.3,1.37,2,0.32,0.49.64,1,.94,1.48a5.6,5.6,0,0,1,.31.61,1.19,1.19,0,0,1,.11.48c0,0.25,0,.49,0,0.74q0,1.28,0,2.57s0,0,0,.07,0,0.19-.2.19h-0.74a0.19,0.19,0,0,1-.23-0.23,3,3,0,0,0-.35-1.25,1.6,1.6,0,0,0-.57-0.62l-0.76-.49a12,12,0,0,1-1.35-1,5.61,5.61,0,0,1-.68-0.66c-0.23-.27-0.47-0.54-0.68-0.83A9.28,9.28,0,0,1,141,169a8.38,8.38,0,0,1-.45-1.84q-0.08-.59-0.14-1.18a2.75,2.75,0,0,1,0-.4,10.6,10.6,0,0,1,.12-1.4q0.07-.4.16-0.79c0-.13.07-0.26,0.11-0.39s0.16-.51.27-0.76,0.29-.63.45-0.94a9.63,9.63,0,0,1,1.71-2.3,9.67,9.67,0,0,1,1.93-1.45,10.05,10.05,0,0,1,1.92-.82,6.29,6.29,0,0,1,1.3-.29c0.17,0,.34-0.07.52-0.08a12.47,12.47,0,0,1,1.78,0c0.35,0,.7.11,1.05,0.17a7.76,7.76,0,0,1,1.41.42,9.44,9.44,0,0,1,1.9,1,9,9,0,0,1,1.39,1.15,8.4,8.4,0,0,1,1.09,1.32,10.72,10.72,0,0,1,.84,1.49c0.12,0.27.22,0.56,0.32,0.84a7.56,7.56,0,0,1,.25.84,9,9,0,0,1,.22,1.43c0,0.16,0,.32,0,0.47s0,0.35,0,.52,0,0.24,0,.35a12.74,12.74,0,0,1-.2,1.41,8.47,8.47,0,0,1-.39,1.34A9.13,9.13,0,0,1,157.93,170.35Z" transform="translate(-128.9 -144.64)"/><path d="M158.67,157a0.61,0.61,0,0,0,.15-0.11l0.62-.62,0.8-.81,0.52-.52,1.1-1.09,0.73-.75,1.08-1.07,0.85-.83a0.75,0.75,0,0,0,.12-0.15,0.27,0.27,0,0,0-.2-0.41,0.34,0.34,0,0,0-.3.11l-1.08,1.07L161.92,153l-1.11,1.11-1.63,1.63-0.77.77a0.39,0.39,0,0,0-.13.27A0.26,0.26,0,0,0,158.67,157Z" transform="translate(-128.9 -144.64)"/><path d="M141,174a0.69,0.69,0,0,0-.19.09,0.59,0.59,0,0,0-.1.1l-1.13,1.13-2.07,2.06-1.7,1.7-0.72.72a0.77,0.77,0,0,0-.14.19,0.26,0.26,0,0,0,.24.39,0.28,0.28,0,0,0,.25-0.09l0.26-.27,1.76-1.77,1.52-1.51,1.16-1.16,0.94-.94a1.53,1.53,0,0,0,.19-0.24,0.24,0.24,0,0,0,0-.29A0.26,0.26,0,0,0,141,174Z" transform="translate(-128.9 -144.64)"/><path d="M135.11,151.25l0.25,0.22,1.21,1.21,0.55,0.56,1.44,1.45L139.9,156l0.87,0.88a0.7,0.7,0,0,0,.19.14,0.26,0.26,0,0,0,.37-0.23,0.43,0.43,0,0,0-.15-0.34L140,155.31l-1.79-1.77-0.68-.7-1.59-1.6-0.48-.46a0.37,0.37,0,0,0-.24-0.11,0.82,0.82,0,0,0-.21.09,0.29,0.29,0,0,0,0,.33A0.93,0.93,0,0,0,135.11,151.25Z" transform="translate(-128.9 -144.64)"/><path d="M170.54,165.28a0.74,0.74,0,0,0-.28,0h-7.89a1.18,1.18,0,0,0-.24,0,0.28,0.28,0,0,0-.24.35,0.19,0.19,0,0,0,.16.18l0.28,0h8a0.71,0.71,0,0,0,.19,0,0.33,0.33,0,0,0,.14-0.08A0.26,0.26,0,0,0,170.54,165.28Z" transform="translate(-128.9 -144.64)"/><path d="M164.53,179.83l-0.52-.52-1.72-1.71-1-.95-0.94-.94-1.58-1.58L158.7,174a0.28,0.28,0,0,0-.37,0,0.27,0.27,0,0,0,0,.35l0,0.06,0.26,0.27,0.8,0.81,0.78,0.77,1.36,1.36,1.31,1.31,1.24,1.25a0.29,0.29,0,0,0,.24.11,0.26,0.26,0,0,0,.28-0.34A0.41,0.41,0,0,0,164.53,179.83Z" transform="translate(-128.9 -144.64)"/><path d="M137.56,165.77a0.22,0.22,0,0,0,.12-0.1,0.28,0.28,0,0,0-.16-0.4,1.09,1.09,0,0,0-.3,0h-7.94a0.69,0.69,0,0,0-.23,0,0.25,0.25,0,0,0-.15.27,0.26,0.26,0,0,0,.21.23l0.21,0h7.94A1.35,1.35,0,0,0,137.56,165.77Z" transform="translate(-128.9 -144.64)"/><path d="M149.51,153a1.54,1.54,0,0,0,0,.26,0.28,0.28,0,0,0,.56,0,1.17,1.17,0,0,0,0-.19c0-.21,0-0.41,0-0.62q0-3.68,0-7.36a1.09,1.09,0,0,0,0-.17,0.28,0.28,0,0,0-.56,0,1.12,1.12,0,0,0,0,.19c0,0.25,0,.49,0,0.74q0,1.62,0,3.23h0Q149.51,151,149.51,153Z" transform="translate(-128.9 -144.64)"/><path d="M161.1,169.94a0.19,0.19,0,0,0-.14.17v0.08a0.23,0.23,0,0,0,.12.25l0.16,0.1,0.64,0.26,1.1,0.44,0.92,0.37a0.61,0.61,0,0,0,.23,0,0.27,0.27,0,0,0,.26-0.21,0.28,0.28,0,0,0-.17-0.35L164.1,171l-1.32-.54-0.83-.35-0.51-.2A0.5,0.5,0,0,0,161.1,169.94Z" transform="translate(-128.9 -144.64)"/><path d="M138.2,169.82l-0.62.24-1,.41-1.12.45-0.11,0a0.34,0.34,0,0,0-.16.37,0.29,0.29,0,0,0,.36.21l0.29-.09,1-.42,1.46-.58a0.61,0.61,0,0,0,.27-0.19,0.24,0.24,0,0,0,.05-0.2A0.34,0.34,0,0,0,138.2,169.82Z" transform="translate(-128.9 -144.64)"/><path d="M154.3,154.32a0.3,0.3,0,0,0,.42-0.12c0.07-.16.14-0.32,0.2-0.48l0.28-.7,0.21-.48,0.31-.77c0.06-.15.11-0.3,0.16-0.45a0.27,0.27,0,0,0,0-.25,0.29,0.29,0,0,0-.53,0c-0.13.26-.24,0.53-0.35,0.8s-0.19.47-.28,0.71l-0.47,1.19a1.47,1.47,0,0,0-.05.18A0.31,0.31,0,0,0,154.3,154.32Z" transform="translate(-128.9 -144.64)"/><path d="M143.72,151.49l0.55,1.34,0.49,1.18a1,1,0,0,0,.09.19,0.5,0.5,0,0,0,.15.15,0.28,0.28,0,0,0,.41-0.3c0-.06,0-0.18-0.09-0.29l-0.68-1.67-0.25-.64c0-.11-0.09-0.22-0.15-0.32a0.31,0.31,0,0,0-.4-0.17,0.33,0.33,0,0,0-.17.4A1.09,1.09,0,0,0,143.72,151.49Z" transform="translate(-128.9 -144.64)"/><path d="M164.18,160.12l0.13-.07a0.3,0.3,0,0,0,.11-0.38,0.3,0.3,0,0,0-.36-0.16l-0.31.11-1.27.52-1.17.46a1.23,1.23,0,0,0-.23.13,0.24,0.24,0,0,0-.1.23,0.32,0.32,0,0,0,.35.28l0.21-.06,1.19-.48Z" transform="translate(-128.9 -144.64)"/><path d="M138.58,160.7a0.91,0.91,0,0,0-.21-0.15c-0.11-.05-0.22-0.08-0.33-0.13l-2-.84a3.56,3.56,0,0,0-.43-0.15,0.29,0.29,0,0,0-.36.15,0.25,0.25,0,0,0,.07.35l0.23,0.12,0.77,0.31,1.12,0.46,0.66,0.27,0.2,0.05c0.24,0,.34-0.08.36-0.25A0.23,0.23,0,0,0,138.58,160.7Z" transform="translate(-128.9 -144.64)"/><path d="M165.64,159.51a0.54,0.54,0,0,0,.16,0l0.2-.08,1-.38a0.51,0.51,0,0,0,.25-0.18,0.27,0.27,0,0,0,0-.13,0.34,0.34,0,0,0-.35-0.32l-0.15,0-1.15.45a0.66,0.66,0,0,0-.19.13,0.29,0.29,0,0,0,0,.33A0.25,0.25,0,0,0,165.64,159.51Z" transform="translate(-128.9 -144.64)"/><path d="M132.51,158.79a0.48,0.48,0,0,0,.12.08l0.72,0.3,0.46,0.19,0.13,0a0.31,0.31,0,0,0,.35-0.3,0.31,0.31,0,0,0-.22-0.31l-1.14-.47a0.67,0.67,0,0,0-.23,0A0.3,0.3,0,0,0,132.51,158.79Z" transform="translate(-128.9 -144.64)"/><path d="M142.62,148.8l0.36,0.86a1.56,1.56,0,0,0,.14.27,0.26,0.26,0,0,0,.43,0,1.09,1.09,0,0,0,.11-0.21c0-.08,0-0.16-0.07-0.23-0.09-.24-0.19-0.47-0.28-0.71s-0.14-.32-0.22-0.48a0.26,0.26,0,0,0-.17-0.15,0.3,0.3,0,0,0-.38.36A1.62,1.62,0,0,0,142.62,148.8Z" transform="translate(-128.9 -144.64)"/><path d="M133.9,171.56l-0.14,0-1.14.46a0.64,0.64,0,0,0-.18.11,0.26,0.26,0,0,0,0,.42,0.34,0.34,0,0,0,.29.06l0.18-.06,0.64-.26,0.5-.21a0.25,0.25,0,0,0,.15-0.14A0.3,0.3,0,0,0,133.9,171.56Z" transform="translate(-128.9 -144.64)"/><path d="M156.17,150a0.29,0.29,0,0,0,.33-0.18c0.17-.4.34-0.8,0.5-1.21a0.72,0.72,0,0,0,0-.13,0.32,0.32,0,0,0-.19-0.35,0.31,0.31,0,0,0-.36.15,1.24,1.24,0,0,0-.09.19l-0.41,1a0.72,0.72,0,0,0-.05.23A0.29,0.29,0,0,0,156.17,150Z" transform="translate(-128.9 -144.64)"/><path d="M166.94,172.17l-1.18-.48-0.16,0a0.26,0.26,0,0,0-.27.22,0.24,0.24,0,0,0,.1.31,1.77,1.77,0,0,0,.27.14l0.92,0.37,0.22,0.07a0.31,0.31,0,0,0,.34-0.18,0.25,0.25,0,0,0-.06-0.3A0.57,0.57,0,0,0,166.94,172.17Z" transform="translate(-128.9 -144.64)"/><path d="M157.71,163.94a8,8,0,0,0-.28-1,8.46,8.46,0,0,0-1-1.94,7.46,7.46,0,0,0-.92-1.09,7.88,7.88,0,0,0-1.11-.93,7.46,7.46,0,0,0-1.76-.92,8.67,8.67,0,0,0-1.44-.39,6.59,6.59,0,0,0-1.4-.12c-0.23,0-.46,0-0.69,0a8.35,8.35,0,0,0-2.87.79,7.84,7.84,0,0,0-1.52,1,9,9,0,0,0-.83.78,6.93,6.93,0,0,0-.74.9,8.56,8.56,0,0,0-.64,1.11,8.13,8.13,0,0,0-.49,1.31,7.73,7.73,0,0,0-.2,1,8.28,8.28,0,0,0-.09,1.14,0.52,0.52,0,0,0,0,.14,0.53,0.53,0,0,0,.07.17,0.23,0.23,0,0,0,.34,0,0.35,0.35,0,0,0,.15-0.28c0-.19,0-0.38,0-0.57a6.84,6.84,0,0,1,.35-1.74c0.08-.23.18-0.46,0.27-0.68a6.49,6.49,0,0,1,1.15-1.82,8.58,8.58,0,0,1,.75-0.76,7.75,7.75,0,0,1,1.33-.95,7.94,7.94,0,0,1,1.44-.62,7.5,7.5,0,0,1,1.21-.26,7.06,7.06,0,0,1,1.8,0,7.36,7.36,0,0,1,1.39.29l0.51,0.18a6.85,6.85,0,0,1,1.39.72,6.62,6.62,0,0,1,1.14.93,8,8,0,0,1,1,1.26,7.43,7.43,0,0,1,1,2.3,5.52,5.52,0,0,1,.18,1.15c0,0.19,0,.38,0,0.57a0.37,0.37,0,0,0,.16.3,0.24,0.24,0,0,0,.35-0.06,0.35,0.35,0,0,0,.06-0.22c0-.23,0-0.46,0-0.69A5,5,0,0,0,157.71,163.94Z" transform="translate(-128.9 -144.64)"/></svg>
				</a>
			</div>
			<div class="small-9 column text-right">
				<a class="title" href="<?php bloginfo('url'); ?>" title="home">Rgv Millennials</a>
			</div>
		</div>

		<div class="main-menu show-for-xxlarge">
			<div class="row">
				<nav class="small-12 columns" role="nav">

					<?php $args = array(
						'theme_location' => 'Header',
						'menu' => 'primary',
						'container' => '',
						'container_class' => '',
						'container_id' => '',
						'menu_class' => 'menu',
						'menu_id' => '',
						'echo' => true,
						'fallback_cb' => 'wp_page_menu',
						'before' => '',
						'after' => '',
						'link_before' => '',
						'link_after' => '',
						'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
						'depth' => 0,
						'walker' => ''
					);
				
					wp_nav_menu( $args ); ?>

				</nav>
			</div>
		</div>

		<div id="sb-site"><!-- Page wrapper for Slidebars Script -->

	<?php } ?>