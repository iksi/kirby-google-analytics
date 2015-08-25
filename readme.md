# Analytics plugin for Kirby

## What is it?

Adds a Google Analytics code automatically as soon as the site is not running on localhost.

## Why use it?

I maded it because I often forgot to uncomment the Google Analytics code after uploading changes to the live site.

## How to use it?

Add it as a submodule using git:  
`git submodule add https://github.com/iksi/KirbyAnalytics.git site/plugins/analytics`

Or put the contents of the repository in a folder called `analytics` in `/site/plugins`. Next add a Google Analytics id to your config. The analytics id is a string like `UA-000000-01`. You can also set anonymize to true to enable IP anonymization.

```PHP
c::set('analytics', true);
c::set('analytics.id', 'UA-000000-01');
c::set('analytics.anonymize', true);
```

You can simply call it from a template or snippet:

```PHP
<?php echo analytics() ?>
```

## Author
Iksi, <http://www.iksi.cc>
