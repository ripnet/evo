<?php

namespace ripnet\EvoBundle\Twig;

class ripnetExtension extends \Twig_Extension {

    public function getFilters()
    {
        return array(
            'indent' => new \Twig_Filter_Method($this, 'indent', array('is_safe' => array('html'))),
        );
    }

    public function indent($code, $number = 1)
    {
        $lines = array();
        foreach (preg_split("/((\r?\n)|(\n?\r))/", $code) as $line => $value) {
            $lines[$line] = str_repeat('    ', $number).$value;
        }

        return implode("\n", $lines);
    }

    public function getName()
    {
        return 'ripnet_extension';
    }
}