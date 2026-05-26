<?php
/**
 * Title: Hero · Headline
 * Slug: creatifriends/hero-headline
 * Categories: creatifriends-hero, featured
 * Description: Premium full-bleed hero with replaceable media, glass status badge, gold accent headline, and dual CTAs.
 * Keywords: hero, headline, intro, agency, cover, landing
 * Block Types: core/post-content
 * Viewport Width: 1400
 */
$hero_image = 'https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&w=2400&q=80';
?>
<!-- wp:cover {"url":"<?php echo esc_url( $hero_image ); ?>","dimRatio":70,"overlayColor":"base","focalPoint":{"x":0.5,"y":0.5},"minHeight":100,"minHeightUnit":"vh","contentPosition":"center center","isDark":true,"align":"full","className":"cf-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|90","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-cover alignfull is-light cf-hero" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--90);padding-left:var(--wp--preset--spacing--50);min-height:100vh">
	<span aria-hidden="true" class="wp-block-cover__background has-base-background-color has-background-dim-70 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( $hero_image ); ?>" data-object-fit="cover" data-object-position="50% 50%" style="object-position:50% 50%" />
	<div class="wp-block-cover__inner-container">

		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"880px","justifyContent":"center"}} -->
		<div class="wp-block-group alignwide">

			<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0"}}} -->
			<div class="wp-block-group">
				<!-- wp:html -->
				<span class="cf-hero__badge"><span class="cf-dot" aria-hidden="true"></span>Available for new projects · 2026</span>
				<!-- /wp:html -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"textAlign":"center","level":1,"textColor":"contrast","style":{"typography":{"fontSize":"clamp(2.75rem, 8vw, 6.5rem)","fontWeight":"700","lineHeight":"0.98","letterSpacing":"-0.045em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
			<h1 class="wp-block-heading has-text-align-center has-contrast-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:clamp(2.75rem, 8vw, 6.5rem);font-style:normal;font-weight:700;letter-spacing:-0.045em;line-height:0.98">Creative Power for <span class="cf-accent">Modern</span> Brands</h1>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"720px","justifyContent":"center"}} -->
			<div class="wp-block-group">

				<!-- wp:paragraph {"align":"center","textColor":"contrast","style":{"typography":{"fontFamily":"var(--wp--preset--font-family--display)","fontSize":"var(--wp--preset--font-size--large)","fontWeight":"400","lineHeight":"1.5","letterSpacing":"-0.005em"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-text-align-center has-contrast-color has-text-color" style="margin-top:0;margin-bottom:0;font-family:var(--wp--preset--font-family--display);font-size:var(--wp--preset--font-size--large);font-style:normal;font-weight:400;letter-spacing:-0.005em;line-height:1.5">We are a remote-first creative studio crafting bold branding, digital experiences, and content that helps businesses stand out.</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"align":"center","textColor":"muted","style":{"typography":{"fontSize":"var(--wp--preset--font-size--medium)","lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
				<p class="has-text-align-center has-muted-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--medium);line-height:1.6">Design, strategy, and content creation — all built for the modern internet.</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"accent","textColor":"base","style":{"border":{"radius":"12px","width":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"borderColor":"accent"} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-accent-background-color has-text-color has-background has-border-color has-accent-border-color has-link-color wp-element-button" style="border-width:1px;border-radius:12px">Start a Project</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"textColor":"contrast","className":"is-style-outline-pill"} -->
				<div class="wp-block-button is-style-outline-pill"><a class="wp-block-button__link has-contrast-color has-text-color wp-element-button">View Our Work</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:html -->
			<div class="cf-hero__meta" role="list">
				<span role="listitem">Branding</span>
				<span class="cf-hero__meta-divider" aria-hidden="true"></span>
				<span role="listitem">Web · UI/UX</span>
				<span class="cf-hero__meta-divider" aria-hidden="true"></span>
				<span role="listitem">AI Content</span>
				<span class="cf-hero__meta-divider" aria-hidden="true"></span>
				<span role="listitem">Video</span>
				<span class="cf-hero__meta-divider" aria-hidden="true"></span>
				<span role="listitem">Social</span>
			</div>
			<!-- /wp:html -->

		</div>
		<!-- /wp:group -->

		<!-- wp:html -->
		<span class="cf-hero__scroll" aria-hidden="true">Scroll</span>
		<!-- /wp:html -->

	</div>
</div>
<!-- /wp:cover -->
