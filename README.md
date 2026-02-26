# Description
Implimentation of WooCommerce functionalies within a website builder section of Elementor.

## Root File Structure
```
.
├── bin/            # command-line executables
├── config/         # configuration files
├── docs/           # documentation files
├── public/         # web server files
├── resources/      # other resource files
├── src/            # PHP source code
├── README.md       # This file
├── LICENCE.md      # The license for the package
└── tests/          # test code
```
## Technology

1. PHP 8
2. MariaDB
3. Elementor
4. WooCommerce

## Prerequisite Steps
Note: installation steps for WordPress is provided by WordPress

1. Install [PHP](#PHP-Install) for your operating system distribution
2. Install Wordpress locally: [canada-link](https://en-ca.wordpress.org/download/) or follow these [instructions](https://phptherightway.com/#use_the_current_stable_version)
3. Install the [Elementor](https://wordpress.org/plugins/elementor/) plugin from WordPress
4. Install the [WooCommerce](https://en-ca.wordpress.org/plugins/woocommerce/) plugin

## PHP Install

**Windows**: Download the [latest](https://en-ca.wordpress.org/download/) thread-safe ZIP. Unzip and follow the instructions in the readme file.

**Debian distros**: `sudo apt update && sudo apt install php libapache2-mod-php`

**macOS**: `brew install php`

**Fedora**: `sudo dnf install php-cli phpunit composer`

### Verify
On Terminal/Command type `php -v`
