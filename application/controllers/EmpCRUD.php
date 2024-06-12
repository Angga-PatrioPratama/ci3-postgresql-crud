<?php
defined('BASEPATH') or exit('No direct script access allowed');
class EmpCRUD extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('EMPModel');
        $this->load->library('form_validation');
        $this->empCRUD = new EMPModel;
    }

    public function index()
    {
        $data['data'] = $this->empCRUD->get_empCRUD();

        $this->load->view('theme/header');
        $this->load->view('empCRUD/list', $data);
        $this->load->view('theme/footer');
    }

    public function create()
    {
        $this->load->view('theme/header');
        $this->load->view('empCRUD/create');
        $this->load->view('theme/footer');
    }

    public function store()
    {
        $this->form_validation->set_rules('emp_name', 'Employee Name', 'required');
        $this->form_validation->set_rules('dob', 'Date Of Birth', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('empcrud/create'));
        } else {
            $this->empCRUD->insert_emp();
            redirect(base_url('/'));
        }
    }

    public function edit($id)
    {
        $emp = $this->empCRUD->find_emp($id);

        $this->load->view('theme/header');
        $this->load->view('empCRUD/edit', array('emp' => $emp));
        $this->load->view('theme/footer');
    }

    public function update($id)
    {
        $this->form_validation->set_rules('emp_name', 'Employee Name', 'required');
        $this->form_validation->set_rules('dob', 'Date Of Birth', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('empcrud/edit/' . $id));
        } else {
            $this->empCRUD->update_emp($id);
            redirect(base_url('/'));
        }
    }

    public function delete($id)
    {
        $this->empCRUD->delete_emp($id);
        redirect(base_url('/'));
    }
}
