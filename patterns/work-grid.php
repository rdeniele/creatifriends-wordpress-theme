<?php
/**
 * Title: Work · Project Grid
 * Slug: creatifriends/work-grid
 * Categories: creatifriends-portfolio, featured
 * Description: Selected work as a 2-column project grid with category tags, titles, and replaceable cover images.
 * Keywords: portfolio, work, projects, case studies
 * Viewport Width: 1400
 */
$work_1 = 'https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?auto=format&fit=crop&w=1600&q=80';
$work_2 = 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=1600&q=80';
$work_3 = 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=1600&q=80';
$work_4 = 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=1600&q=80';
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
		<div class="wp-block-group">

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"600px"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow">— Selected Work</p><!-- /wp:paragraph -->
				<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--huge)","fontWeight":"600","letterSpacing":"-0.035em","lineHeight":"1.02"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<h2 class="wp-block-heading" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--huge);font-weight:600;letter-spacing:-0.035em;line-height:1.02">Brands and products <span class="cf-accent">we've shipped.</span></h2>
				<!-- /wp:heading -->
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons {"layout":{"type":"flex"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline-pill"} -->
				<div class="wp-block-button is-style-outline-pill"><a class="wp-block-button__link wp-element-button" href="/work">View all projects</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
		<div class="wp-block-group">

			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"custom","style":{"border":{"radius":"20px"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><a href="/work/orbital-studio"><img src="<?php echo esc_url( $work_1 ); ?>" alt="Orbital Studio — brand and web rebuild" style="border-radius:20px;aspect-ratio:4/3;object-fit:cover;width:100%"/></a></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow">Branding · Web</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--x-large)"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} --><h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--x-large)"><a href="/work/orbital-studio" style="color:inherit;text-decoration:none">Orbital Studio</a></h3><!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","lineHeight":"1.6"}}} --><p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small);line-height:1.6">A category-defining identity and editorial site for a satellite imagery startup.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"custom","style":{"border":{"radius":"20px"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><a href="/work/north-coast"><img src="<?php echo esc_url( $work_2 ); ?>" alt="North Coast Coffee — packaging and storefront" style="border-radius:20px;aspect-ratio:4/3;object-fit:cover;width:100%"/></a></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow">Identity · Packaging</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--x-large)"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} --><h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--x-large)"><a href="/work/north-coast" style="color:inherit;text-decoration:none">North Coast Coffee</a></h3><!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","lineHeight":"1.6"}}} --><p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small);line-height:1.6">A specialty roaster's full rebrand — packaging, storefront, and an e-commerce flagship.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"custom","style":{"border":{"radius":"20px"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><a href="/work/loop-mobile"><img src="<?php echo esc_url( $work_3 ); ?>" alt="Loop Mobile — app design and launch" style="border-radius:20px;aspect-ratio:4/3;object-fit:cover;width:100%"/></a></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow">UI/UX · Motion</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--x-large)"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} --><h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--x-large)"><a href="/work/loop-mobile" style="color:inherit;text-decoration:none">Loop Mobile</a></h3><!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","lineHeight":"1.6"}}} --><p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small);line-height:1.6">Product design and launch motion for a peer-to-peer money app's category push.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"custom","style":{"border":{"radius":"20px"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><a href="/work/atlas-ai"><img src="<?php echo esc_url( $work_4 ); ?>" alt="Atlas AI — brand and content system" style="border-radius:20px;aspect-ratio:4/3;object-fit:cover;width:100%"/></a></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow">AI Content · Web</p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--x-large)"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} --><h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--x-large)"><a href="/work/atlas-ai" style="color:inherit;text-decoration:none">Atlas AI</a></h3><!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","lineHeight":"1.6"}}} --><p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small);line-height:1.6">An AI research lab's editorial system — content pipeline, voice, and a publishing site.</p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
