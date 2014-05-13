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

    /**
     * Get all messages
     *
     * @return array
     */
    public function getMessages();

    /**
     * Get a specific message
     *
     * @param string $type
     * @return string
     */
    public function getMessage($type);

    /**
     * Get an error code
     * 
     * @return int
     */
    public function getErrorCode();
} 