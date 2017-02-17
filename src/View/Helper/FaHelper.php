<?php

namespace FontAwesome\View\Helper;

use Cake\View\Helper;

class FaHelper extends Helper
{

    public $helpers = ['Html'];

    /**
     * Create link containing a Font Awesome icon.
     *
     * @param string $icon Font Awesome icon (excluding the fa- prefix)
     * @param string $title Link text
     * @param string|array $url Cake-relative URL or array of URL parameters, or external URL (starts with http://)
     * @param array $options Array of options and HTML attributes.
     * @param string $confirmMessage JavaScript confirmation message.
     * @return string An `<a />` element.
     */
    public function link($icon, $title, $url = null, $options = [], $confirmMessage = false)
    {
        $escapeTitle = true;
        if (isset($options['escapeTitle'])) {
            $escapeTitle = $options['escapeTitle'];
            unset($options['escapeTitle']);
        } elseif (isset($options['escape'])) {
            $escapeTitle = $options['escape'];
        }

        if ($escapeTitle === true) {
            $title = h($title);
        } elseif (is_string($escapeTitle)) {
            $title = htmlentities($title, ENT_QUOTES, $escapeTitle);
        }

        // Append/Prepend the Font Awesome icon.
        if (empty($title)) {
            $title = '<i class="fa fa-' . $icon . '"></i>';
        } elseif (empty($options['before'])) {
            $title .= ' <i class="fa fa-' . $icon . '"></i>';
        } else {
            $title = '<i class="fa fa-' . $icon . '"></i> ' . $title;
        }
        unset($options['before']);

        $options['escape'] = false;

        return $this->Html->link($title, $url, $options, $confirmMessage);
    }
}
