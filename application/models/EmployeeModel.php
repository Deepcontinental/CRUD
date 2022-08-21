<?php

class EmployeeModel extends CI_model{
    public function getEmployee(){
        $query = $this->db->get('employee_table');
        return $query->result();
    }

    public function insertEmployee($data){
        $this->db->insert('employee_table', $data);  //insert method expects an array to insert data into the table
    }

    public function editEmployee($id){  
        $query = $this->db->get_where('employee_table', ['id' => $id]);  //get_where('table_name', condition) in this case the id field is asigned to the $id variable.
        return $query->row();
    }

    public function updateEmployee($data, $id){
        $this->db->update('employee_table', $data, ['id' => $id]);
    }

    public function deleteEmployee($id){
        return $this->db->delete('employee_table', ['id' => $id]);
    }
}
?>