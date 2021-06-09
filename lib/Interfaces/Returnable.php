<?php
namespace Voilab\Serviceanswer\Interfaces;


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
     * @return array<string, string>
     */
    public function getMessages();

    /**
     * Get a specific message
     *
     * @param string $type
     * @return string|null
     */
    public function getMessage($type = null);

    /**
     * Get an error code
     *
     * @return int
     */
    public function getErrorCode();

    /**
     * Récupération des métadonnées de la réponse
     *
     * @return mixed[]
     */
    public function getMetadatas();
} 