<?php

namespace App\Models;

use App\Core\Model;

class Alumnos extends Model
{
    protected $table = 'alumnos';

    public function get()
    {
        return $this->db->selectAll($this->table);
    }

    public function insert(array $user)
    {
        $this->db->insert($this->table, $user);
    }
    
}
