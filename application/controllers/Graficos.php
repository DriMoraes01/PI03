<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Graficos extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Graficos_model'); // Carrega o Model
        $this->load->model('core_model'); // Para buscar doações no banco
    }

    public function index()
    {
        $data = array(
            'titulo' => 'Relatórios e Gráficos',
            'sub_titulo' => 'Análise de Adoções e Doações',
            'icone_view' => 'ik ik-bar-chart-2',
            'doacoes' => $this->core_model->get_all('doacao', array('excluido' => 0)),
            'grafico_adocoes' => $this->Graficos_model->getAdocoesPorMes(),
            'grafico_doacoes' => $this->Graficos_model->getDoacoesPorMes(),
            'styles' => array(
                'plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css',
            ),
            'scripts' => array(
                'plugins/datatables.net/js/jquery.dataTables.min.js',
                'plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js',
                'https://cdn.jsdelivr.net/npm/chart.js', // Biblioteca para gráficos            
            ),
        );

        $this->load->view('layout/header', $data);
        $this->load->view('graficos/graficos_view'); // Arquivo da View de gráficos
        $this->load->view('layout/footer');
    }
}
