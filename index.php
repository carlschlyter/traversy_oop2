<?php

//Create an object

class Customer{
    private $identity;
    private $name;
    protected $email;
    private $balance;

    public function __construct($identity, $name, $email, $balance){
        $this->identity = $identity;
        $this->name = $name;
        $this->email = $email;
        $this->balance = $balance;
    }

    public function getEmail(){
        return $this->email;
    } 
}

// $customer = new Customer(1, 'kalle', 'kalle@anka.com', 100);
// echo $customer->getEmail();

class Subscriber extends Customer{
    public $plan;

    public function __construct($identity, $name, $email, $balance, $plan){
        parent::__construct($identity, $name, $email, $balance); 
        $this->plan = $plan;
    }

}

// echo $customer->getCustomer(1002);

// echo $customer->getCustomer(22);

$subscriber = new Subscriber(2, 'kajsa', 'mimmi@pigg.com', 200, 'b');

echo $subscriber->getEmail();

?>