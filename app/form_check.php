<?php

class FormCheck{
    public function __construct()
    {
        $this->errors = [];
    }

    public function count($errors){
        if (count($errors)>0){
            $res['errors'] = $errors;
            return $res;
        }else{
            $res=[];
            return $res;
        }
    }

    public function check($title,$body){
        if (!isset($title) || $title == ""){
            $this->errors[] = "title not input";
        }
        if (!isset($body) || $body == "") {
            $this->errors[] = "body not input";
        }

        return $this->count($this->errors);
    }
}