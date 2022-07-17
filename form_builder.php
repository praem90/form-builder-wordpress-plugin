<?php

/**
 * Plugin Name:       Form Builder
 * Plugin URI:        https://github.com/praem90/form-builder-wordpress-plugin
 * Description:       Allows you create dynamic forms
 * Version:           0.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Mohan Raj
 * Author URI:        https://github.com/praem90
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       form-builder
 * Domain Path:       /languages
 */

require __DIR__ . '/vendor/autoload.php';

\Praem90\FormBuilder\FormBuilder::boot();
\Praem90\FormBuilder\FormBuilder::basename( plugin_basename( __FILE__ ) );
