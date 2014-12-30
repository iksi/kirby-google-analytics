<?php
/**
 * Analytics plugin for Kirby
 *
 * @author Iksi <info@iksi.cc>
 * @version 1.0.5
 */
function analytics()
{
    // Get it from config
    // $analytics = c::get('analytics', FALSE);
    
    // Get it from a site field
    $analytics = site()->analytics();
    
    $data = array();

    if ( ! $analytics->empty() && ! in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1')))
    {
        $data['analytics'] = $analytics;
    }

    return tpl::load(__DIR__ . DS . 'template.php', $data);
}
