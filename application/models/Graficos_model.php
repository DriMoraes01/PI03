<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Graficos_model extends CI_Model
{

    public function getAdocoesPorMes()
    {
        $query = $this->db->query("
            SELECT MONTH(data_adocao) as mes, COUNT(*) as total 
            FROM adocao
            GROUP BY MONTH(data_adocao)
            ORDER BY mes ASC
        ");
        return $query->result_array();
    }

    public function getDoacoesPorMes()
    {
        $query = $this->db->query("
            SELECT MONTH(data_doacao) as mes, SUM(valor) as total 
            FROM doacao
            GROUP BY MONTH(data_doacao)
            ORDER BY mes ASC
        ");
        return $query->result_array();
    }

}
