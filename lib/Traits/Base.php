<?php
namespace Voilab\Serviceanswer\Traits;


trait Base {

    public $body;
    public $messages = array();
    public $success = true;
    public $errorCode;
    public $metadatas = array();

    public $internalDatas = array();

    public function getBody() {
        return $this->body;
    }

    public function setBody($body) {
        $this->body = $body;
        return $this;
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

    public function setErrorCode($code) {
        $this->errorCode = $code;
        return $this;
    }

    public function setPublicMessage($message) {
        $this->messages['public'] = $message;
        return $this;
    }

    public function setDeveloperMessage($message) {
        $this->messages['dev'] = $message;
        return $this;
    }

    public function setEmptyBodyMessage($message) {
        $this->messages['empty'] = $message;
        return $this;
    }

    public function setMetadata($key, $value) {
        $this->metadatas[$key] = $value;
        return $this;
    }

    public function setMetadatas($metadatas) {
        $this->metadatas = $metadatas;
        return $this;
    }

    public function getMetadatas() {
        return $this->metadatas;
    }

    public function getMetadata($key) {
        return $this->metadatas[$key];
    }

    public function setInternalData($key, $value) {
        $this->internalDatas[$key] = $value;
        return $this;
    }

    public function setInternalDatas($datas) {
        $this->internalDatas = $datas;
        return $this;
    }

    public function getInternalDatas() {
        return $this->internalDatas;
    }

    public function getInternalData($key) {
        return $this->internalDatas[$key];
    }

    public function isEmpty() {
        return empty($this->body);
    }
}