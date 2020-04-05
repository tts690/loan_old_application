<?php

/**
 * Description of Group_Mail_Setup
 *
 * @author HemanthRaj
 */
class Group_mail_setup extends MY_Model {

    public function adding_email($data) {
        $this->db->insert('email', $data);
        return TRUE;
    }

    function add_data($data_user = array()) {
        try {
            foreach ($data_user as $data) {
                $this->db->insert('email', $data);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return true;
    }
    
    public function delete_group_id($id){

        $result = $this->db->query("DELETE FROM group_system WHERE group_id =$id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function editing($data) {
        $email = $data['email'];
        $groupname = $data['group_name'];
        $id = $data['id'];
        $result = $this->db->query("UPDATE `group_system` g join email e on e.group_id = g.group_id set g.group_name = '$groupname', e.email = '$email' WHERE e.id =  '$id'");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function deleteing($id) {
        $result = $this->db->query("DELETE FROM email WHERE id =$id");
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function selecting_group_name() {
        $this->db->select('*');
        $this->db->from('group_system');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $data;
        }
    }

    public function select_group_only() {   
        $this->db->select('*');
        $this->db->from('group_system');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $data;
        }
        return FALSE;
    }

    public function select_group_id($id) {
        $this->db->select('*');
        $this->db->from('group_system');
        $this->db->where('group_id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->row();
            return $data;
        }
        return FALSE;
    }

    public function update_group($group_name, $id) {
        $result = $this->db->query("UPDATE group_system SET group_name='$group_name' WHERE group_id ='$id'");
        
        if ($result) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function select_group() {
        $this->db->select('*');
        $this->db->from('group_system');
        $this->db->join('email', 'email.group_id = group_system.group_id');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $data = $query->result();
            return $data;
        }
        return FALSE;
    }

    public function create_group($data) {
        $this->db->insert('group_system', $data);
        return TRUE;
    }

}
