<?php

/*
 * This file is part of bhittani/kk-star-ratings.
 *
 * (c) Kamal Khan <shout@bhittani.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Bhittani\StarRating\core\actions;

use function Bhittani\StarRating\core\functions\filter;
use function Bhittani\StarRating\core\functions\post_meta;

if (! defined('KK_STAR_RATINGS')) {
    http_response_code(404);
    exit();
}

function save(float $outOf5, int $id, string $slug, array $payload): void
{
    $count = (int) filter('count', null, $id, $slug);
    $ratings = (float) filter('ratings', null, $id, $slug);
    $legacySlug = $slug == 'default' ? '' : "_{$slug}";

    // For safe keeping, ensure we have not already casted this vote.
    if ($count == ((int) $payload['count'] ?? 0)
        && $ratings == ((float) $payload['ratings'] ?? 0)
    ) {
        $newCount = $count + 1;
        $newRatings = $ratings + $outOf5;

        $fingerprint = filter('fingerprint', null, $id, $slug);

        post_meta($id, [
            "count_{$slug}" => $newCount,
            "ratings_{$slug}" => $newRatings,
            "avg_{$slug}" => $newRatings / $newCount,
            "fingerprint_{$slug}[]" => $fingerprint,
        ]);

        // Legacy support...

        post_meta($id, [
            "casts{$legacySlug}" => $newCount, // < v5
            "ratings{$legacySlug}" => $newRatings, // < v5
            "ref{$legacySlug}[]" => $fingerprint, // v3, v4
            "avg{$legacySlug}" => $newRatings / $newCount, // < v3
        ]);
    }

    // Backwards compatibility!
    // Allow third-party code to continue relying
    // on legacy/depecrated action hook.

    // < v3
    do_action('kksr_rate', $id, $outOf5, $fingerprint);

    // v3 (replaced by v4)
    // do_action('kksr_vote', $id, $outOf5, $fingerprint);

    // < v5
    do_action('kksr_vote', $outOf5, 5, $id, $legacySlug, $fingerprint);
}
