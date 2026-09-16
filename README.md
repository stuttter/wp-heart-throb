# WP Heart Throb

Shows a beating heart in the WordPress toolbar for each tick of the Heartbeat API.

WordPress uses an API called "Heartbeat" to monitor certain conditions and report to the user if something went wrong.

If your login cookie expires while you're writing a post, for example, Heartbeat will open a modal window and allow you to log in again.

This plugin adds a small menu item to the WordPress toolbar that does the following things:

* Beats every 1 second to remind you about the API
* Throbs every interval of the Heartbeat API to confirm connection is active

Future versions of this plugin could add a drop-down to this menu with more information.

## Installation

* Download and install using the built in WordPress plugin installer.
* Activate in the "Plugins" area of your admin by clicking the "Activate" link.
* No further setup or configuration is necessary.

## Development

Install the locked development dependencies and run the regression suite:

```sh
composer install
composer test
```

The plugin and its development tooling require PHP 7.4 or newer. Production
Composer installs should omit development dependencies.

## Support

Use the [WordPress.org support forum](https://wordpress.org/support/plugin/wp-heart-throb/)
for installation and usage questions. Use GitHub issues for reproducible defects
and focused enhancements.

## Contributing

Read [CONTRIBUTING.md](CONTRIBUTING.md) before opening a pull request.
