<?php

/**
 * Analytics plugin for Kirby
 *
 * @author Iksi <info@iksi.cc>
 * @version 1.2
 */

function analytics() {

    $id = c::get('analytics.id');
    $anonymize = c::get('analytics.anonymize', false);

    if (is_bool($anonymize) === false) {
        $anonymize = false;
    }
    
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    $localhost = ($ipAddress === '127.0.0.1' || $ipAddress === '::1');

    if ($id === null || $localhost === true) {
        return;
    }

    $templateData = compact('id', 'anonymize');

    return tpl::load(__DIR__ . DS . 'template.php', $templateData);
}
