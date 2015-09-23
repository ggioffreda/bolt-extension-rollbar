Rollbar extension for Bolt
==========================

This integrates [Rollbar](https://rollbar.com/) error reporting into your project so you can easily track errors as
soon as they happen and easily debug problems in your production environments.

Requirements
------------

This extension requires you to have `rollbar/rollbar` `~0.11` installed.

Installation
------------

Add `rollbar/rollbar` to your root composer requirements.

    $ composer require rollbar/rollbar

Install the extension from the Bolt marketplace and add the configuration to your project.

Configuration
-------------

The only required configuration parameter is `access_token` (**server-side** access token). You can grab it from your
project settings in Rollbar.

The only default value set by the extension is `included_errno` set to include the PHP errors:
`E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR`

A very basic configuration file may look like this:

```yaml
#filename: app/config/bolt-extension-rollbar.ggioffreda.yml
access_token: 0123456789abcdef0123456789abcdef
included_errno: 4871
```
To know all the configuration option check out the
[Rollbar configuration reference](https://github.com/rollbar/rollbar-php#configuration-reference).