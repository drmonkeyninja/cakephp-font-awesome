CakePHP FontAwesome
===================

[![License](https://poser.pugx.org/drmonkeyninja/cakephp-font-awesome/license)](https://packagist.org/packages/drmonkeyninja/cakephp-font-awesome)

This plugin provides a simple helper for creating links containing markup for Font Awesome icons with properly escaped link text. You will need to install Font Awesome separately.


Requirements
------------

* CakePHP 2.x


Installation
------------

This plugin can be installed using Composer:-

    composer require drmonkeyninja/cakephp-font-awesome:2.*

Alternatively copy the plugin to your app/Plugin directory and rename the plugin's directory 'FontAwesome'.

Then add the following line to your bootstrap.php to load the plugin.

    CakePlugin::load('FontAwesome');


Usage
-----

    echo $this->Fa->('chevron-circle-right', __('Proceed'), ['controller' => 'pages', 'display', 'next']);
