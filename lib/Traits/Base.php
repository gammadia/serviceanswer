<?php
namespace Voilab\Serviceanswer\Traits;


trait Base {

    public $body;
    public $messages = array();
    public $success = true;
    public $errorCode;

    public function getBody() {
        return $this->body;
    }

    public function getMessages() {
        return $this->messages;
    }

    public function isSuccess() {
        return $this->success;
    }

    public function getErrorCode() {
        return $this->errorCode;
    }
}