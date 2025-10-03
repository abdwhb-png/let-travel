# Asset sourcing

The theme keeps the Webflow-exported markup intact and loads imagery, icons, and media directly from the original Webflow CDN URLs that ship with the template export. This avoids checking large binary blobs into the Git repository and keeps deployments compatible with repositories that disallow binary assets.

If you would rather host the media locally instead of using the CDN links, download the assets from the original export (`template/cdn.prod.website-files.com/...`) and place them inside `wp-content/themes/wp-let-travel/assets/media/`. Fonts can be added to `wp-content/themes/wp-let-travel/assets/fonts/` if you prefer to self-host them. Because the directories are git-ignored, they will not be committed accidentally.
