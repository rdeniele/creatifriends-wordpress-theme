<?php
/**
 * Title: About · Intro
 * Slug: creatifriends/about-intro
 * Categories: creatifriends-about, featured
 * Description: Two-column intro section with a headline, supporting copy, stat row, and a replaceable image.
 * Keywords: about, studio, intro, who we are
 * Viewport Width: 1400
 */
$about_image = 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1600&q=80';
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">

			<!-- wp:paragraph {"className":"cf-eyebrow","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
			<p class="cf-eyebrow" style="margin-bottom:var(--wp--preset--spacing--30)">— The Studio</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--huge)","fontWeight":"600","letterSpacing":"-0.035em","lineHeight":"1.02"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}}} -->
			<h2 class="wp-block-heading" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40);font-size:var(--wp--preset--font-size--huge);font-weight:600;letter-spacing:-0.035em;line-height:1.02">A small studio. <span class="cf-accent">Bold ideas.</span> Built to ship.</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var(--wp--preset--font-size--large)","lineHeight":"1.55"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
			<p class="has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--40);font-size:var(--wp--preset--font-size--large);line-height:1.55">CreatiFriends is a remote-first creative studio designing brands, products, and the AI-powered stories around them. We work in small teams, ship in short cycles, and treat craft as a non-negotiable.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var(--wp--preset--font-size--medium)","lineHeight":"1.6"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
			<p class="has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--50);font-size:var(--wp--preset--font-size--medium);line-height:1.6">From early-stage founders defining a category to public companies relaunching a flagship product, we partner end-to-end — strategy, design, and content under one roof.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline-pill"} -->
				<div class="wp-block-button is-style-outline-pill"><a class="wp-block-button__link wp-element-button" href="/about">More about the studio</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}}} -->
			<hr class="wp-block-separator has-alpha-channel-opacity"/>
			<!-- /wp:separator -->

			<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|50"}}}} -->
			<div class="wp-block-columns">

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow">Since</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xx-large)"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}}} --><h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:var(--wp--preset--font-size--xx-large)">2013</h3><!-- /wp:heading -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow">Launches</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xx-large)"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}}} --><h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:var(--wp--preset--font-size--xx-large)">180+</h3><!-- /wp:heading -->
				</div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow">Studio</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--xx-large)"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}}} --><h3 class="wp-block-heading" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:var(--wp--preset--font-size--xx-large)">100% remote</h3><!-- /wp:heading -->
				</div>
				<!-- /wp:column -->

			</div>
			<!-- /wp:columns -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"sizeSlug":"large","className":"is-style-rounded-xl","style":{"border":{"radius":"20px"}}} -->
			<figure class="wp-block-image size-large is-style-rounded-xl has-custom-border"><img src="<?php echo esc_url( $about_image ); ?>" alt="CreatiFriends working session" style="border-radius:20px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</section>
<!-- /wp:group -->
