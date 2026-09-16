# Swiggy Wala AI Work Log — Jaipur Sightseeing Tour by Cab

Date: 2026-09-16
Work ID: SWG-SEO-2026-09-16-001
Primary topic: Jaipur Sightseeing Tour by Cab
Primary keyword: Jaipur sightseeing tour by cab
Target canonical URL: https://swiggywala.com/blogs/jaipur-sightseeing-tour-by-cab/
Target featured image URL: https://swiggywala.com/blogs/images/jaipur-sightseeing-tour-by-cab.webp
Legacy/requested image copy: https://swiggywala.com/blog/images/jaipur-sightseeing-tour-by-cab.webp

## Workflow completed
1. Reviewed the existing Swiggy Wala repository before editing.
2. Found two blog systems: older `/blog/*.php` pages and the newer clean-URL `/blogs/<slug>/` system.
3. Selected the newer `/blogs/<slug>/` system because `.htaccess` already routes clean SEO URLs through `blogs/post.php`.
4. Added a manual-blog layer to `blogs/catalog.php` so high-value custom SEO posts can coexist with the programmatic travel-guide catalogue without generating the same custom topic for every destination.
5. Added the custom Jaipur sightseeing article with title, meta description, intro, eight detailed sections, target keyword, publication date and featured image path.
6. Updated `blogs/post.php` so manual articles can provide custom title, description, intro, sections and publication date while all existing programmatic posts continue to work unchanged.
7. Updated `blogs/sitemap.php` so manually authored posts are included automatically and can use their own `lastmod` date.
8. Generated a custom Jaipur travel visual with Hawa Mahal, Amber Fort, Jal Mahal and a tourist cab, then prepared a compressed WebP web version.
9. Added the image under `/blogs/images/` for the clean blog system and also under `/blog/images/` to preserve the user's requested `/blog` image location.
10. Prepared an SEO-focused Google Business Profile post linked to the canonical article URL; the final copy is kept below the 1,500-character GBP limit.

## SEO fields
SEO title: Jaipur Sightseeing Tour by Cab: 1-Day Local Jaipur Guide | Swiggy Wala
Meta description: Plan a Jaipur sightseeing tour by cab with a practical one-day route covering Amber Fort, Jal Mahal, Hawa Mahal, Jantar Mantar, City Palace and local markets.
Primary keyword: Jaipur sightseeing tour by cab
Secondary intent terms: Jaipur local sightseeing cab, Jaipur one day tour by cab, Jaipur city tour, Jaipur cab sightseeing, Jaipur private cab tour
Canonical: https://swiggywala.com/blogs/jaipur-sightseeing-tour-by-cab/
Image alt intent: Jaipur sightseeing tour by cab

## Files changed
- `blogs/catalog.php` — added `manual_blogs()` and custom Jaipur article data; merged manual posts into catalogue lookup.
- `blogs/post.php` — added support for manual title, description, intro, sections and date.
- `blogs/sitemap.php` — manual entries inherit their publication date for `lastmod`.
- `blogs/images/jaipur-sightseeing-tour-by-cab.webp` — generated featured image.
- `blog/images/jaipur-sightseeing-tour-by-cab.webp` — compatibility/requested duplicate image path.
- `logs/2026-09-16-jaipur-sightseeing-tour-by-cab.md` — this audit trail.

## Cross-check instructions for any other AI model
Before making additional changes, verify this Work ID and inspect the files above. Do not create a duplicate slug or a second article targeting the exact same primary keyword unless the intent is materially different. Check that the clean URL returns HTTP 200, the canonical points to `/blogs/jaipur-sightseeing-tour-by-cab/`, the image loads, the post appears in `/blogs/`, and the blog sitemap contains the slug. Confirm existing programmatic pages still resolve normally. If improving the content, preserve the slug and canonical unless there is a documented SEO reason to change them. Record all subsequent edits in `/logs` with the same Work ID plus a revision number.

## GBP publishing asset
Topic: Jaipur Sightseeing Tour by Cab
CTA destination: https://swiggywala.com/blogs/jaipur-sightseeing-tour-by-cab/
Image: https://swiggywala.com/blogs/images/jaipur-sightseeing-tour-by-cab.webp
Status: Content prepared; GBP publishing itself was not performed in this repository task.
