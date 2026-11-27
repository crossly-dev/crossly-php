<?php

// Print every listing in your Crossly store, page by page.
//
//     composer require crossly/crossly
//     CROSSLY_TOKEN=crossly_pat_... php list_listings.php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Crossly\Crossly;
use Crossly\CrosslyError;

$crossly = Crossly::seller((string) getenv('CROSSLY_TOKEN'));

try {
    $rows = $crossly->paginate(
        fn (int $page, int $limit) => $crossly->listings()->listListings($page, $limit),
        100
    );
    foreach ($rows as $listing) {
        printf("%s  %-10s  %s\n", $listing->getId(), $listing->getStatus(), $listing->getTitle());
    }
} catch (CrosslyError $e) {
    // getErrorCode() is stable (unauthorized, rate_limited, …); quote getCorrelationId() to support.
    fprintf(STDERR, "%d %s: %s (correlation id %s)\n", $e->getStatus(), $e->getErrorCode(), $e->getMessage(), $e->getCorrelationId() ?? '-');
    exit(1);
}
