<?php
// Don't ever sanitize the database on the live environment. Doing so would
// destroy the canonical version of the data.
if (defined('PANTHEON_ENVIRONMENT') && (PANTHEON_ENVIRONMENT !== 'live')) {

	// Import all config changes.
	echo "Sanitizing the database...\n";
	passthru('drush sql-sanitize -y');
	echo "Database sanitization complete.\n";
}
