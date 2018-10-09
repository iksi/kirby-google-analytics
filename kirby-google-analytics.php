<?php

/**
 * Google Analytics plugin for Kirby 2
 *
 * @author Jurriaan Topper <jurriaan@iksi.eu> (http://www.iksi.eu/)
 * @version 2.0
 * @license MIT
 */


if (c::get('plugin.googleAnalytics', false) === true) {
  load([
    'iksi\\googleanalytics' => __DIR__ . '/src/google-analytics.php'
  ]);

  kirby()->set('snippet', 'google-analytics', __DIR__ . '/snippets/google-analytics.php');
}
