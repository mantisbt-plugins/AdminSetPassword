<?php

Class AdminSetPasswordPlugin extends MantisPlugin
{

    public $cmv_pages;

    public $current_page;

    /**
     * Plugin registration information, some will be shown on plugin overview.
     *
     * The required minimum MantisBT version can be specified too.
     */
    public function register()
    {
        $this->name = plugin_lang_get( 'name' );
        $this->description = plugin_lang_get( 'description' );
        $this->version = '1.0.0';
        $this->requires = ['MantisCore' => '2.0.0'];
        $this->url = 'https://github.com/mantisbt-plugins/AdminSetPassword';
    }

    /**
     * Setup of plugin settings.
     */
    public function config()
    {
        return [];
    }

    /**
     *  Overriding this function allows the plugin to set itself up,
     *  include any necessary API‘s, declare or hook events, etc.
     */
    public function init()
    {
        $this->cmv_pages = [
            'manage_user_edit_page.php',
        ];
        $this->current_page = basename($_SERVER['PHP_SELF']);
    }

    public function hooks()
    {
        return [
            'EVENT_LAYOUT_CONTENT_BEGIN' => 'addPageContent'
        ];
    }

    /**
     * Include file on the user edit page that include fields vie javascript.
     *
     * @return string
     */
    public function addPageContent()
    {
        if (!in_array($this->current_page, $this->cmv_pages, true)) {
            return '';
        }
        include('pages/plugin_myview.php');
        return $p_javascript;
    }
}
