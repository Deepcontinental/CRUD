<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->model('EmployeeModel');
        $data['employee'] = $this->EmployeeModel->getEmployee();
        $this->load->view('frontend/employee', $data);
        $this->load->view('templates/footer');
    }

    public function create(){
        $this->load->view('templates/header');
        $this->load->view('frontend/create');   
        $this->load->view('templates/footer');
    }

    public function store(){

        //used to validate form and auto display message if field is empty (framework). The set rules method is used to set validation rules.

        //$this->form_validation->set_rules('variable name', 'Humanly name to be outputted' , 'setted rule(inbuilt rules can be found in the rule reference)')
        $this->form_validation->set_rules('first_name','First name', 'required');
        $this->form_validation->set_rules('last_name','Last name', 'required');
        $this->form_validation->set_rules('phone','Phone number', 'required');
        $this->form_validation->set_rules('email','Email ID', 'required');

        if ($this->form_validation->run()){  //The run method will be set to true only if the setted rules(set_rules()) have been satisfied else by default false will be applied.
            $data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email')
            ];

            $this->load->model('EmployeeModel','emp');
            $this->emp->insertEmployee($data);
            redirect(base_url('index.php/employee'));
        }
        else{
            $this->create();
        }
    }

    public function edit($id){
        $this->load->view('templates/header');
        $this->load->model('EmployeeModel');
        $data['employee'] = $this->EmployeeModel->editEmployee($id); //the whole table row will be assigned to the $data associative array inside the key employee
        $this->load->view('frontend/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($id){ 
        $this->form_validation->set_rules('first_name','First name', 'required');
        $this->form_validation->set_rules('last_name','Last name', 'required');
        $this->form_validation->set_rules('phone','Phone number', 'required');
        $this->form_validation->set_rules('email','Email ID', 'required');

        if ($this->form_validation->run()){
            $data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email')
            ];   
            
            $this->load->model('EmployeeModel');
            $this->EmployeeModel->updateEmployee($data, $id);
            redirect(base_url('index.php/employee'));
        }
        else{
            $this->edit($id);
        }
    }

    public function delete($id){
        $this->load->model('EmployeeModel');
        $this->EmployeeModel->deleteEmployee($id);     
        redirect(base_url('index.php/employee'));
    }
}   