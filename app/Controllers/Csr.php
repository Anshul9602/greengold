<?php

namespace App\Controllers;

class Csr extends BaseController
{
    public function index()
    {
        return view('header')
        . view('csr')
        . view('footer');   
     }
}