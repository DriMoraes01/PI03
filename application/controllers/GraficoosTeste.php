<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Graficos extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Graficos_model'); // Carrega o Model
    }

    public function index()
    {           
        $data['grafico_adocoes'] = $this->Graficos_model->getAdocoesPorMes(); // Obtém os dados
        $data['grafico_doacoes'] = $this->Graficos_model->getDoacoesPorMes();        
        $this->load->view('graficos/graficos_view', $data);
    }
}