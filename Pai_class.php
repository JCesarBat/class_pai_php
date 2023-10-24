<?php

class Pai{
    protected $fruit;
    protected $ingredientes;
    public function __construct($fruit){
        $this->ingredientes = null;
        $this->fruit = $fruit;  
    }
    public function get_fruit(){
        return $this->fruit;
    }
    public function set_fruit($fruit){
        $this->fruit = $fruit;

    }
    public function set_ingredientes(){
        $this->ingredientes = 'arina'.' '.'levadura'.' '.$this->fruit;
    }
    public function get_all(){
        return  ['ingredientes'=> $this->ingredientes,'fruta'=> $this->fruit];

    }

}   

$pai_fresa=new Pai('fresa');

echo $pai_fresa->get_fruit()."\n";
$pai_fresa->set_fruit("melocoton");

echo $pai_fresa->get_fruit()."\n";

echo json_encode($pai_fresa->get_all())."\n";

$pai_fresa->set_ingredientes();

echo json_encode($pai_fresa->get_all()) ."\n";
