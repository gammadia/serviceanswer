<?php

namespace Voilab\Serviceanswer;

class Container extends \Pimple {

    /**
     * @param array $config Global configuration
     * @param mixed $engine Engine used for the Rest API
     */
    public function __construct(array $config, $engine)
    {
        parent::__construct();

        $this['config'] = array_merge(array(
            'wat' => 'meh'
        ), $config);

    }
}