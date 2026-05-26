<?php
/**
 * Title: Work · Project Grid
 * Slug: creatifriends/work-grid
 * Categories: creatifriends-portfolio, featured
 * Description: Selected work as a 3-column project grid with category tags, titles, and replaceable cover images.
 * Keywords: portfolio, work, projects, case studies
 * Viewport Width: 1400
 */
$projects = array(
	array( 'title' => 'Nova Branding',     'eyebrow' => 'Branding · Identity',   'blurb' => 'A full identity rebuild for a satellite-imagery startup defining a new category.',                'img' => 'https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?auto=format&fit=crop&w=1600&q=80', 'slug' => 'nova-branding' ),
	array( 'title' => 'Drift Studio',      'eyebrow' => 'Web · Editorial',       'blurb' => 'An editorial site and CMS for a design publication launching its first print issue.',             'img' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=1600&q=80', 'slug' => 'drift-studio' ),
	array( 'title' => 'Flux AI Campaign',  'eyebrow' => 'AI Content · Video',    'blurb' => 'A generative-content launch campaign — 40+ assets across video, social, and print.',              'img' => 'https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&w=1600&q=80', 'slug' => 'flux-ai-campaign' ),
	array( 'title' => 'Lumen UI System',   'eyebrow' => 'UI/UX · Product',       'blurb' => 'A design system and component library powering a public-company product relaunch.',               'img' => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?auto=format&fit=crop&w=1600&q=80', 'slug' => 'lumen-ui-system' ),
	array( 'title' => 'Atlas Identity',    'eyebrow' => 'Branding · Packaging',  'blurb' => 'A maker brand built from a single word — identity, packaging, and a flagship online store.',     'img' => 'https://images.unsplash.com/photo-1531297484001-80022131f5a1?auto=format&fit=crop&w=1600&q=80', 'slug' => 'atlas-identity' ),
	array( 'title' => 'Zenith Creative',   'eyebrow' => 'Brand Film · Motion',   'blurb' => 'A 90-second brand film and motion system for a peer-to-peer money app entering Europe.',          'img' => 'https://images.unsplash.com/photo-1551434678-e076c223a692?auto=format&fit=crop&w=1600&q=80', 'slug' => 'zenith-creative' ),
);
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
		<div class="wp-block-group">

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"640px"}} -->
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

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
		<div class="wp-block-group">

<?php foreach ( $projects as $project ) : ?>
			<!-- wp:group {"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"sizeSlug":"large","linkDestination":"custom","style":{"border":{"radius":"20px"}}} -->
				<figure class="wp-block-image size-large has-custom-border"><a href="/work/<?php echo esc_attr( $project['slug'] ); ?>"><img src="<?php echo esc_url( $project['img'] ); ?>" alt="<?php echo esc_attr( $project['title'] ); ?> — <?php echo esc_attr( $project['eyebrow'] ); ?>" style="border-radius:20px;aspect-ratio:4/3;object-fit:cover;width:100%"/></a></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow"><?php echo esc_html( $project['eyebrow'] ); ?></p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--x-large)"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} --><h3 class="wp-block-heading" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--x-large)"><a href="/work/<?php echo esc_attr( $project['slug'] ); ?>" style="color:inherit;text-decoration:none"><?php echo esc_html( $project['title'] ); ?></a></h3><!-- /wp:heading -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","lineHeight":"1.6"}}} --><p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small);line-height:1.6"><?php echo esc_html( $project['blurb'] ); ?></p><!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
<?php endforeach; ?>

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</section>
<!-- /wp:group -->
