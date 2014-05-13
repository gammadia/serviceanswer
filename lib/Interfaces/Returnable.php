<?php
namespace Voilab\Restanswer\Interfaces;


interface Returnable {

    /**
     * Retrieve the content of the returned object
     *
     * @return mixed
     */
    public function getBody();

    /**
     * Define if the called service method is considered as successful
     *
     * @return bool
     */
    public function isSuccess();
} 