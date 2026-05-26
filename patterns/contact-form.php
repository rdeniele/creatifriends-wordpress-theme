<?php
/**
 * Title: Contact · Form
 * Slug: creatifriends/contact-form
 * Categories: creatifriends-about
 * Description: Two-column contact section with project form, studio email, and social links.
 * Keywords: contact, form, email, social
 * Viewport Width: 1400
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:columns {"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-top">

		<!-- wp:column {"verticalAlignment":"top","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:40%">

			<!-- wp:paragraph {"className":"cf-eyebrow","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
			<p class="cf-eyebrow" style="margin-bottom:var(--wp--preset--spacing--30)">— Get in touch</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var(--wp--preset--font-size--huge)","fontWeight":"600","letterSpacing":"-0.035em","lineHeight":"1.02"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}}} -->
			<h2 class="wp-block-heading" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50);font-size:var(--wp--preset--font-size--huge);font-weight:600;letter-spacing:-0.035em;line-height:1.02">Tell us about <span class="cf-accent">your brand.</span></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var(--wp--preset--font-size--medium)","lineHeight":"1.65"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}}} -->
			<p class="has-muted-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--50);font-size:var(--wp--preset--font-size--medium);line-height:1.65">We reply to every brief within two working days. If we're the right fit, we'll set up a 30-minute intro call to scope the work.</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow">Email</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"var(--wp--preset--font-size--large)"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--large)"><a href="mailto:you@studio.com">you@studio.com</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow">Response time</p><!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"muted","style":{"typography":{"fontSize":"var(--wp--preset--font-size--medium)"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
					<p class="has-muted-color has-text-color" style="margin-top:0;margin-bottom:0;font-size:var(--wp--preset--font-size--medium)">Within 2 working days.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:paragraph {"className":"cf-eyebrow"} --><p class="cf-eyebrow">Find us</p><!-- /wp:paragraph -->
					<!-- wp:social-links {"iconColor":"muted","iconColorValue":"#B3B3B3","openInNewTab":true,"className":"is-style-logos-only"} -->
					<ul class="wp-block-social-links has-icon-color is-style-logos-only">
						<!-- wp:social-link {"url":"https://twitter.com","service":"twitter"} /-->
						<!-- wp:social-link {"url":"https://instagram.com","service":"instagram"} /-->
						<!-- wp:social-link {"url":"https://linkedin.com","service":"linkedin"} /-->
						<!-- wp:social-link {"url":"https://dribbble.com","service":"dribbble"} /-->
						<!-- wp:social-link {"url":"https://github.com","service":"github"} /-->
					</ul>
					<!-- /wp:social-links -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"top"} -->
		<div class="wp-block-column is-vertically-aligned-top">

			<!-- wp:group {"className":"is-style-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">

				<!-- wp:html -->
				<form class="cf-contact-form" action="#" method="post" novalidate>

					<div class="cf-field">
						<label for="cf-name">Your name</label>
						<input type="text" id="cf-name" name="name" placeholder="Maya Chen" autocomplete="name" required>
					</div>

					<div class="cf-field">
						<label for="cf-email">Email</label>
						<input type="email" id="cf-email" name="email" placeholder="you@studio.com" autocomplete="email" required>
					</div>

					<div class="cf-field">
						<label for="cf-company">Company</label>
						<input type="text" id="cf-company" name="company" placeholder="Orbital Studio" autocomplete="organization">
					</div>

					<div class="cf-field">
						<label for="cf-scope">What do you need?</label>
						<select id="cf-scope" name="scope">
							<option>Branding</option>
							<option>Web design</option>
							<option>UI / UX</option>
							<option>AI content</option>
							<option>Video editing</option>
							<option>Social creative</option>
							<option>Multiple — let's talk</option>
						</select>
					</div>

					<div class="cf-field">
						<label for="cf-budget">Budget range</label>
						<select id="cf-budget" name="budget">
							<option>Under $15k</option>
							<option>$15k–$50k</option>
							<option>$50k–$150k</option>
							<option>$150k+</option>
							<option>Not sure yet</option>
						</select>
					</div>

					<div class="cf-field">
						<label for="cf-message">Tell us about the project</label>
						<textarea id="cf-message" name="message" rows="5" placeholder="What are you building, and what's the timeline?"></textarea>
					</div>

					<button type="submit" class="wp-element-button cf-contact-submit">Send Brief</button>

				</form>
				<!-- /wp:html -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</section>
<!-- /wp:group -->
