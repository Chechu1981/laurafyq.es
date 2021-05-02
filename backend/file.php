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
    
    function __construct($name,$rute,$size,$type) {
        
        $this->name = $name;
        $this->rute = $rute;
        $this->size = $size;
        $this->type = $type;
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
        return $this->type;
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


}
