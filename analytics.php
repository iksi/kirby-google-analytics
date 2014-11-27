<?php
/**
 * Analytics plugin for Kirby
 *
 * @author Iksi <info@iksi.cc>
 * @version 1.0.0
 */
function analytics()
{
    $id = kirby()->option('analytics', FALSE);

    if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1')) || empty($id))
    {
        return FALSE;
    }

    return tpl::load(__DIR__ . DS . 'template.php', array('id' => $id));
}