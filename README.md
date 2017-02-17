CakePHP FontAwesome
===================

[![License](https://poser.pugx.org/drmonkeyninja/cakephp-font-awesome/license)](https://packagist.org/packages/drmonkeyninja/cakephp-font-awesome)

This plugin provides a simple helper for creating links containing markup for Font Awesome icons with properly escaped link text. You will need to install Font Awesome separately.


Requirements
------------

* CakePHP 3.x

Use the 2.x version for CakePHP 2.


Installation
------------

This plugin can be installed using Composer:-

    composer require drmonkeyninja/cakephp-font-awesome:3.*

Then add the following line to your bootstrap.php to load the plugin.

    Plugin::load('FontAwesome');

You need to ensure the helper is loaded before you use it in your templates. You can do this from your `AppView.php` file in the `initialize()` method:-

    public function initialize()
    {
        $this->loadHelper('FontAwesome.Fa');
    }


Usage
-----

To render a link containing the markup for the `fa-chevron-circle-right` icon at the end you can do:-

    <?= $this->Fa->('chevron-circle-right', __('Proceed'), ['controller' => 'pages', 'display', 'next']) ?>
