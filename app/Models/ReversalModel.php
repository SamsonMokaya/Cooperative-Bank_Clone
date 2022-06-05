<?php

namespace App\Models;
use CodeIgniter\Model;
use Config\Database;

class ReversalModel extends Model{
    protected $allowedFields=['Id','TransId','Date'];
    protected $primaryKey='Id';
    protected $table='reversals';
    protected $db,$builder;

    public function __construct(){
        $db=Database::connect();
        $this->builder=$db->table($this->table);
    }

    
}

?>