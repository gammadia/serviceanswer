<?php

namespace Voilab\Serviceanswer;

class Container extends \Pimple\Container {

    /**
     * @param array $config Global configuration
     */
    public function __construct(array $config)
    {
        parent::__construct();

        $this['config'] = array_merge(array(
            'wording' => array(
                'devMessagePrefix' => 'Technical message: '
            )
        ), $config);

        $this['answer'] = $this->factory(function ($c) {
            return new Answer($c);
        });

        $this['error'] = $this->factory(function ($c) {
            $answer = new Answer($c);
            $answer->success = false;
            return $answer;
        });

    }
}