<?php

//Create an object

class Customer{
    public $identity;
    public $name;
    public $email;
    public $balance;

    public function __construct($identity, $name, $email, $balance){
        echo 'The Constructor ran...';
    }

    public function getCustomer($id){
        $this->identity = $id;
        return 'Carl Schlyter';
    }
    
    public function __destruct(){
        echo 'The Destructor ran...';
    }
}

$customer = new Customer;

echo $customer->getCustomer(1002);

// echo $customer->getCustomer(22);

?>