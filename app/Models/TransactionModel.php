<?php

namespace App\Models;
use CodeIgniter\Model;
use Config\Database;

class TransactionModel extends Model{
    protected $allowedFields=['UserId', 'Id','Type','Amount','Date','Status'];
    protected $primaryKey='Id';
    protected $table='transactions';
    protected $db,$builder;

    public function __construct(){
        $db=Database::connect();
        $this->builder=$db->table($this->table);
    }
    
    public function insertTransaction($data){
        $this->builder->insert($data);
    }

    public function getAllTransactions(){
        return $this->builder->get()->getResultArray();
    }
}

?>