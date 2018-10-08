# Google Analytics plugin for Kirby 2

## What is it?

Runs Google Analytics as soon as the site is not running on localhost and the Do Not Track header is not set by the browser.

## Why use it?

I maded it because I often forgot to (re)activate the Google Analytics snippet after a site went live.

## How to use it?

Add it as a submodule using git: `git submodule add https://github.com/iksi/kirby-google-analytics.git site/plugins/kirby-google-analytics` or put the contents of the repository in a folder called `analytics` in `/site/plugins`.

Next add a Google Analytics tracking ID to your configuration. The tracking ID is a string like `UA-000000-01`. You can also set anonymize to false to disable IP anonymization (the default is true).

```PHP
c::set('plugin.googleAnalytics.trackingId', 'UA-000000-01');
c::set('plugin.googleAnalytics.anonymizeIp', false);
```

Instead of a string you can also provide a callback function for the tracking ID:

```PHP
c::set('plugin.googleAnalytics.trackingId', function() {
  return site()->googleAnalyticsTrackingId()->value();
});
```

You can add it to your website as a snippet:

```PHP
<?php snippet('google-analytics') ?>
```

## Author

Jurriaan Topper, <jurriaan@iksi.eu> (http://www.iksi.eu/)
