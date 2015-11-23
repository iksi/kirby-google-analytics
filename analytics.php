<?php

/**
 * Analytics plugin for Kirby
 *
 * @author Iksi <info@iksi.cc>
 * @version 1.2
 */

function analytics() {

    if (c::get('analytics', false) === false) return;

    $id = c::get('analytics.id');
    $anonymize = c::get('analytics.anonymize');

    if (is_bool($anonymize) === false) {
        $anonymize = false;
    }
    
    $ipAddress = r::ip();
    $localhost = in_array($ipAddress, array('127.0.0.1', '::1'));

    if ($id === null || $localhost === true) return;

    $templateData = compact('id', 'anonymize');

    return tpl::load(__DIR__ . DS . 'template.php', $templateData);
}
