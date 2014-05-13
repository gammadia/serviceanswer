<?php

namespace Voilab\Serviceanswer;

use Voilab\Restanswer\Answer;

class Container extends \Pimple {

    /**
     * @param array $config Global configuration
     */
    public function __construct(array $config)
    {
        parent::__construct();

        $this['config'] = array_merge(array(
            'wat' => 'meh'
        ), $config);

        $this['answer'] = $this->factory(function ($c) {
            return new Answer($c);
        });

    }
}