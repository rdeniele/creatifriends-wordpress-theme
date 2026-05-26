<?php
/**
 * Title: Footer · Extended
 * Slug: creatifriends/footer-extended
 * Categories: creatifriends-footer
 * Description: Four-column extended footer with newsletter signup, sitemap columns, social links, and legal strip.
 * Keywords: footer, newsletter, sitemap, legal
 * Inserter: no
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","backgroundColor":"base","textColor":"contrast","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|50","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<footer class="wp-block-group alignfull has-contrast-color has-base-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:site-title {"level":0,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--x-large)"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} /-->

			<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var(--wp--preset--font-size--medium)","lineHeight":"1.6"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
			<p class="has-muted-color has-text-color" style="margin-top:var(--wp--preset--spacing--30);font-size:var(--wp--preset--font-size--medium);line-height:1.6">A remote-first creative studio designing brands, products, and the AI-powered stories around them.</p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"iconColor":"muted","iconColorValue":"#B3B3B3","openInNewTab":true,"className":"is-style-logos-only","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
				<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
				<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"https://dribbble.com","service":"dribbble"} /-->
				<!-- wp:social-link {"url":"https://github.com","service":"github"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":6} --><h6 class="wp-block-heading">Services</h6><!-- /wp:heading -->
			<!-- wp:list {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","lineHeight":"2"}}} -->
			<ul class="wp-block-list" style="font-size:var(--wp--preset--font-size--small);line-height:2">
				<!-- wp:list-item --><li><a href="/services/branding">Branding</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="/services/web-design">Web Design</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="/services/ui-ux">UI / UX</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="/services/ai-content">AI Content</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="/services/video">Video Editing</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="/services/social">Social Creative</a></li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":6} --><h6 class="wp-block-heading">Studio</h6><!-- /wp:heading -->
			<!-- wp:list {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","lineHeight":"2"}}} -->
			<ul class="wp-block-list" style="font-size:var(--wp--preset--font-size--small);line-height:2">
				<!-- wp:list-item --><li><a href="/about">About</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="/work">Work</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="/journal">Journal</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="/careers">Careers</a></li><!-- /wp:list-item -->
				<!-- wp:list-item --><li><a href="/contact">Contact</a></li><!-- /wp:list-item -->
			</ul>
			<!-- /wp:list -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":6} --><h6 class="wp-block-heading">Newsletter</h6><!-- /wp:heading -->
			<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)","lineHeight":"1.6"}}} -->
			<p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small);line-height:1.6">Monthly notes on creativity, AI, and brand-building.</p>
			<!-- /wp:paragraph -->
			<!-- wp:html -->
			<form class="cf-newsletter" action="#" method="post">
				<input type="email" name="email" placeholder="you@studio.com" aria-label="Email address" required>
				<button type="submit" class="wp-element-button">Join</button>
			</form>
			<!-- /wp:html -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

	<!-- wp:separator {"className":"is-style-gradient","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|40"}}}} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-gradient" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--40)"/>
	<!-- /wp:separator -->

	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)"}}} -->
		<p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small)">© CreatiFriends Studio. Remote &amp; everywhere.</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var(--wp--preset--font-size--small)"}}} -->
		<p class="has-muted-color has-text-color" style="font-size:var(--wp--preset--font-size--small)"><a href="/privacy">Privacy</a> · <a href="/terms">Terms</a> · <a href="/cookies">Cookies</a></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</footer>
<!-- /wp:group -->
