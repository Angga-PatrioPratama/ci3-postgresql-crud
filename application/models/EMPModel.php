<?php
class EMPModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_empCRUD()
    {
        $query = $this->db->get("employee");
        //select * from employee
        return $query->result();
    }

    public function delete_emp($id)
    {
        return $this->db->delete('employee', array('id' => $id));
    }

    public function insert_emp()
    {
        $data = array(
            'emp_name' => $this->input->post('emp_name'),
            'dob' => $this->input->post('dob'),
            'gender' => $this->input->post('gender'),
            'phone' => $this->input->post('phone'),
        );
        return $this->db->insert('employee', $data);
    }



    public function find_emp($id)
    {
        return $this->db->get_where('employee', array('id' => $id))->row();
    }

    public function update_emp($id)
    {
        $data = array(
            'emp_name' => $this->input->post('emp_name'),
            'dob' => $this->input->post('dob'),
            'gender' => $this->input->post('gender'),
            'phone' => $this->input->post('phone'),
        );

        if ($id == 0) {
            return $this->db->update('employee', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('employee', $data);
        }
    }
}
