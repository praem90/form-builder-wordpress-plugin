<?php

namespace Praem90\FormBuilder;

class FormBuilder
{
    public const VERSION = '0.0.1';
    protected static $basename;

    public static function basename($basename = false)
    {
        if (false !== $basename) {
            self::$basename = $basename;
        }

        return self::$basename;
    }

    public static function boot()
    {
        do_action('praem90_form_builder_before_boot');


        self::register_hooks();


        do_action('praem90_form_builder_after_boot');
    }

    public static function register_hooks()
    {
        add_action('admin_menu', array( self::class, 'add_admin_menu' ));
    }

    public static function add_admin_menu()
    {
        add_menu_page(
            'Form Builder',
            'Form Builder',
            'manage_options',
            'form-builder',
            array( self::class, 'load_form_builder_page' ),
            ''
        );
    }

    public static function load_form_builder_page()
    {
        include_once dirname(__DIR__) . '/resources/views/form-builder/list.php';
    }
}
