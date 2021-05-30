<?php

/**
 * Description of file
 * 
 * @author Jesús Martín
 */
class file {
    private $name;
    private $rute;
    private $size;
    private $type;
    private $rename;
    
    function __construct($name,$rute,$size,$type,$rename) {
        
        $this->name = $name;
        $this->rute = $rute;
        $this->size = $size;
        $this->type = $type;
        $this->rename = $rename;
    }
    
    public function getName() {
        return $this->name;
    }

    public function getRute() {
        return $this->rute;
    }

    public function getSize() {
        return $this->size;
    }

    public function getType() {
        $ext = explode("/",$this->type);
        return $ext[1];
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setRute($rute): void {
        $this->rute = $rute;
    }

    public function setSize($size): void {
        $this->size = $size;
    }

    public function setType($type): void {
        $this->type = $type;
    }

    public function getRename(){
        return $this->rename;
    }


}
