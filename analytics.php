<?php
/**
 * Analytics plugin for Kirby
 *
 * @author Iksi <info@iksi.cc>
 * @version 1.1
 */
function analytics()
{
    // Get the analytics_id from config
    $analytics_id = c::get('google.analytics_id', false);

    if ( ! $analytics_id || in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) {
        // No id given or on localhost
        return false;
    }

    // Return the template
    return tpl::load(__DIR__ . DS . 'template.php', compact('analytics_id'));
}
