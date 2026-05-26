/**
 * CREATIFRIENDS THEME — PAGE SETUP GUIDE
 * 
 * This document outlines the WordPress pages that need to be created for the
 * CreatiFriends theme to work properly. All page templates are in place;
 * only the WordPress page posts need to be created with the correct slugs.
 */

/* ============================================================================
   TEMPLATE FILES STATUS
   ============================================================================ */

CREATED TEMPLATES:
✓ templates/page-work.html      → Displays work-grid pattern with portfolio
✓ templates/page-careers.html   → Displays careers-roles pattern with job openings
✓ templates/page-contact.html   → Displays contact-form pattern for inquiries
✓ templates/page-services.html  → Displays services-grid pattern with offerings
✓ templates/page-about.html     → Displays about & studio story patterns
✓ templates/page-journal.html   → NEW: Blog/journal listing with query loop

EXISTING PAGE TEMPLATES:
✓ templates/page.html           → Generic page template
✓ templates/page-wide.html      → Full-width page template (no sidebar)
✓ templates/page-landing.html   → Landing page template (no header/footer)

/* ============================================================================
   WORDPRESS PAGES TO CREATE
   ============================================================================ */

Create these pages in WordPress admin (Pages → Add New):

1. PAGE: Work
   Slug: work
   Status: Published
   Content: Leave blank (template will handle display)
   Template Assignment: Should automatically use page-work.html

2. PAGE: Journal
   Slug: journal
   Status: Published
   Content: Leave blank (template will handle display)
   Template Assignment: Should automatically use page-journal.html

3. PAGE: Careers
   Slug: careers
   Status: Published
   Content: Leave blank (template will handle display)
   Template Assignment: Should automatically use page-careers.html

4. PAGE: Contact
   Slug: contact
   Status: Published
   Content: Leave blank (template will handle display)
   Template Assignment: Should automatically use page-contact.html

/* ============================================================================
   PATTERN REFERENCES
   ============================================================================ */

PATTERNS USED BY EACH PAGE:

Work Page (/work):
  • work-grid pattern        → 6 projects (Nova, Drift, Flux, Lumen, Atlas, Zenith)
  • testimonials pattern     → Client quotes
  • cta-banner pattern       → Call to action

Journal Page (/journal):
  • Query loop for posts     → Blog/journal entries (auto-generated from published posts)
  • Pagination              → Navigate through posts

Careers Page (/careers):
  • studio-values pattern    → 4 value cards
  • careers-roles pattern    → 3 open positions
  • cta-banner pattern       → Call to action

Contact Page (/contact):
  • contact-form pattern     → Contact form with email & social

Services Page (/services):
  • services-grid pattern    → 6 service offerings
  • testimonials pattern     → Client social proof
  • cta-banner pattern       → Call to action

About Page (/about):
  • about-intro pattern      → Studio intro with stats
  • studio-story pattern     → Agency story & mission
  • studio-values pattern    → 4 value cards
  • testimonials pattern     → Client testimonials
  • cta-banner pattern       → Call to action

/* ============================================================================
   WORDPRESS CLI QUICK SETUP
   ============================================================================ */

If you have WP-CLI available, you can create the pages with:

wp post create \
  --post_type=page \
  --post_status=publish \
  --post_title="Work" \
  --post_name="work" \
  --comment_status=closed

wp post create \
  --post_type=page \
  --post_status=publish \
  --post_title="Journal" \
  --post_name="journal" \
  --comment_status=closed

wp post create \
  --post_type=page \
  --post_status=publish \
  --post_title="Careers" \
  --post_name="careers" \
  --comment_status=closed

wp post create \
  --post_type=page \
  --post_status=publish \
  --post_title="Contact" \
  --post_name="contact" \
  --comment_status=closed

/* ============================================================================
   VERIFY TEMPLATE ASSIGNMENT
   ============================================================================ */

After creating pages, verify in WordPress admin:

1. Each page should show a page template dropdown
2. Template resolution follows WordPress slug naming:
   - page-{slug}.html is automatically assigned
   - page-work.html → assigned to /work page
   - page-journal.html → assigned to /journal page
   - page-careers.html → assigned to /careers page
   - page-contact.html → assigned to /contact page

3. If not auto-assigned, manually select the template from the dropdown

/* ============================================================================
   NAVIGATION SETUP
   ============================================================================ */

Update the header navigation to include these new pages:

1. Edit parts/header.html
2. Add navigation links for the new pages
3. Or use WordPress Navigation menu if Site Editor has menu management

Current header links should include:
• Services
• Studio (About page)
• Work
• Journal
• Careers
• Contact

/* ============================================================================
   POST CONTENT FOR BLOG/JOURNAL
   ============================================================================ */

The Journal page will display automatically published posts. To populate it:

1. Go to Posts → Add New
2. Create sample posts with:
   - Title: "Designing in the Age of AI"
   - Title: "Building Remote Creative Teams"
   - Title: "The Future of Brand Systems"
3. Add featured images from Unsplash or upload your own
4. Assign to a category (optional)
5. Publish

Posts will appear on:
• /journal/ page (via page-journal.html query loop)
• Blog homepage (if set as blog homepage in Settings → Reading)

/* ============================================================================
   VERIFICATION CHECKLIST
   ============================================================================ */

After completing setup, verify:

☐ /work page exists and loads with portfolio grid
☐ /journal page exists and loads with blog posts
☐ /careers page exists and loads with job listings
☐ /contact page exists and loads with contact form
☐ Navigation links resolve without 404 errors
☐ Each page displays correct patterns
☐ Design system styling applied consistently
☐ Responsive layout works on mobile

/* ============================================================================
   TROUBLESHOOTING
   ============================================================================ */

If pages show 404:
1. Verify page slugs match template names
2. Check that pages are published (not draft)
3. Flush WordPress cache if applicable
4. Verify permalink structure is set to Post name (Settings → Permalinks)

If patterns don't display:
1. Run: wp_clean_themes_cache() (mentioned in CLAUDE.md)
2. Bump theme version in functions.php
3. Deactivate/reactivate theme
4. Clear all caches

If navigation links don't work:
1. Update header navigation in parts/header.html
2. Or create WordPress navigation menu and assign to header location
