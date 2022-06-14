<?php

namespace Belajar\Library;

class Customer
{

    private $nama;

    public function __construct(string $nama)
    {
        $this->nama = $nama;
    }

    public function sayHello(string $nama)
    {
        return "Hello $nama, My name is $this->nama";
    }
}
