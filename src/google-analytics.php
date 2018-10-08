<?php

namespace Iksi;

use c;
use r;

class GoogleAnalytics {

  public static function anonymizeIp() {
    $anonymizeIp = c::get('plugin.googleAnalytics.anonymizeIp', true);
    return $anonymizeIp ? 'true' : 'false';
  }

  public static function onLocalhost() {
    $onLocalhost = in_array(r::ip(), ['127.0.0.1', '::1']);
    return $onLocalhost ? 'true' : 'false';
  }

  public static function trackingId() {
    $trackingId = c::get('plugin.googleAnalytics.trackingId');
    return is_callable($trackingId) ? $trackingId(site()) : $trackingId;
  }

}