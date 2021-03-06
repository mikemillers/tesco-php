<?php namespace Tesco\Resource;

class Customer
{
    protected $session;

    public function __construct($session)
    {
        $this->session = $session;
    }

    public function getID()
    {
    	return $this->session['CustomerID'];
    }

    public function getName()
    {
    	return $this->session['CustomerName'];
    }

    public function getFirstName()
    {
    	return $this->session['CustomerForename'];
    }
}