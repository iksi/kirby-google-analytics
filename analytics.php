<?php
/**
 * Analytics plugin for Kirby
 *
 * @author Iksi <info@iksi.cc>
 * @version 1.1
 */
function analytics()
{
    $analytics_id = c::get('google.analytics_id', false);

    if ( ! $analytics_id || in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) {
        return false;
    }

    return tpl::load(__DIR__ . DS . 'template.php', compact('analytics_id'));
}
