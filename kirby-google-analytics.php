<?php

/**
 * Google Analytics plugin for Kirby 2
 *
 * @author Jurriaan Topper <jurriaan@iksi.eu> (http://www.iksi.eu/)
 * @version 2.0
 * @license MIT
 */

load([
  'iksi\\googleanalytics' => __DIR__ . DS . 'src' . DS . 'google-analytics.php'
]);

kirby()->set('snippet', 'google-analytics', __DIR__ . DS . 'snippets'. DS . 'google-analytics.php');
