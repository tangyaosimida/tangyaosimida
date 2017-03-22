<?php
class Flower_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_flower_items($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('flower');
            return $query->result_array();
        }

        $query = $this->db->get_where('flower', array('slug' => $slug));
        return $query->result_array();


    }


}