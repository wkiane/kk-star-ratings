<?php

/*
 * This file is part of bhittani/kk-star-ratings.
 *
 * (c) Proteina Digital <eduardo@proteina.digital>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Bhittani\StarRating;

if (! defined('ABSPATH')) {
    http_response_code(404);
    exit();
}

add_action('init', __NAMESPACE__.'\load_textdomain');
function load_textdomain()
{
    load_plugin_textdomain('kk-star-ratings', false, __DIR__.'/../languages');
}
