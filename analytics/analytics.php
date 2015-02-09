<?php
/**
 * Analytics plugin for Kirby
 *
 * @author Iksi <info@iksi.cc>
 * @version 1.1
 */
function analytics()
{
    // Get the id either from config or site variables
    $analytics_id = c::get('google.analytics_id', site()->analytics_id());
    
    // Are we on localhost
    $localhost = in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'));

    if ( ! strlen($analytics_id) || $localhost) {
        // No id given or on localhost
        return false;
    }

    // Return the template
    return tpl::load(__DIR__ . DS . 'template.php', compact('analytics_id'));
}
