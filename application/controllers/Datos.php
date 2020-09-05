<?php

class Datos extends CI_Controller
{

    public function index()
    {
        echo "soy inicio";
    }

    public function nuevo()
    {

        // $this->load->helper("url");

        $this->load->helper('form');
        $this->load->view('datos/nuevo');
    }

    public function guardar()
    {

        $nombre = $this->input->get('Nombre');
        $apellido = $this->input->get('Apellido');
        $edad = $this->input->get('Edad');
        $carnet = $this->input->get('Carnet');


        echo "GUARDANDO LOS DATOS de " . $nombre . $apellido . " con la edad " . $edad . " y su carnet es: " . $carnet;
    }
}
