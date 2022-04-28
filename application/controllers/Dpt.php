<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dpt extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function Panakukang()
    {
        $data['title'] = 'DPT Kec. Panakukang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); //arraynya sebaris

        $this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dpt/panakukang', $data);
        $this->load->view('templates/footer');
    }

    public function Panakukang_list()
    {
        $this->load->model('Panakukkang_Model', 'dpt');
        $list = $this->dpt->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $dpt) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $dpt->noktp;
            $row[] = $dpt->nama;
            $row[] = $dpt->alamat;
            $row[] = $dpt->rw;
            $row[] = $dpt->rt;
            $row[] = $dpt->namakel;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->dpt->count_all(),
            "recordsFiltered" => $this->dpt->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }


    public function manggala()
    {
        $data['title'] = 'DPT Kec. Manggala';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); //arraynya sebaris

        $this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dpt/manggala', $data);
        $this->load->view('templates/footer');
    }

    public function manggala_list()
    {
        $this->load->model('Manggala_Model', 'dpt');
        $list = $this->dpt->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $dpt) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $dpt->noktp;
            $row[] = $dpt->nama;
            $row[] = $dpt->alamat;
            $row[] = $dpt->rw;
            $row[] = $dpt->rt;
            $row[] = $dpt->namakel;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->dpt->count_all(),
            "recordsFiltered" => $this->dpt->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function biringkanaya()
    {
        $data['title'] = 'DPT Kec. Biringkanaya';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); //arraynya sebaris

        $this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dpt/biringkanaya', $data);
        $this->load->view('templates/footer');
    }

    public function biringkanaya_list()
    {
        $this->load->model('biringkanaya_Model', 'dpt');
        $list = $this->dpt->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $dpt) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $dpt->noktp;
            $row[] = $dpt->nama;
            $row[] = $dpt->alamat;
            $row[] = $dpt->rw;
            $row[] = $dpt->rt;
            $row[] = $dpt->namakel;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->dpt->count_all(),
            "recordsFiltered" => $this->dpt->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function tamalanrea()
    {
        $data['title'] = 'DPT Kec. Tamalanrea';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array(); //arraynya sebaris

        $this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('dpt/Tamalanrea', $data);
        $this->load->view('templates/footer');
    }

    public function tamalanrea_list()
    {
        $this->load->model('Tamalanrea_Model', 'dpt');
        $list = $this->dpt->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $dpt) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $dpt->noktp;
            $row[] = $dpt->nama;
            $row[] = $dpt->alamat;
            $row[] = $dpt->rw;
            $row[] = $dpt->rt;
            $row[] = $dpt->namakel;

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->dpt->count_all(),
            "recordsFiltered" => $this->dpt->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }
}