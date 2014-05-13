<?php
namespace Voilab\Restanswer\Traits;


trait Base {

    public $body;
    public $success;

    public function getBody() {
        return $this->body;
    }

    public function isSuccess() {
        return $this->success;
    }
} 