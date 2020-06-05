<?php

namespace ncYaml;

class SecretTypeTokenValueGetter {

    private $secretDir = '/var/secret/';

    public function __construct() {
	$secretDir = getenv('SECRET_DIR');
        if(!empty($secretDir)){
                $this->secretDir = $secretDir;
        }

    }

    public function getTokenValue($token) {
        if(!file_exists($this->secretDir . $token)){
                throw new \Exception($this->secretDir . $token. "");
        }
        return file_get_contents($this->secretDir . $token);
    }

}
