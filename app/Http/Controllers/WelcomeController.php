<?php 

namespace App\Http\Controllers;

class WelcomeController extends Controller {

    public $y = 20;
    public $x = 30;

    public function welcome()
    {
        $nombre = "Pepe";
        return view('welcome', 
        ['name' => $nombre, 'y' => $this->y, 'x' => $this->x, 'suma' => $this->suma($this->y, $this->x)]);
    }

    public function getContacto()
    {
        return view('contacto');
    }

    public function suma($x, $y){
        return $x + $y;
    }

}
