<?php

namespace App\Models;
use CodeIgniter\Model;
use Config\Database;

class UserModel extends Model{
    protected $allowedFields=['FirstName','LastName', 'Gender','EmailAddress','Password','Amount','UserId'];
    protected $primaryKey='UserId';
    protected $table='users';
    protected $db,$builder;

    public function __construct(){
        $db=\Config\Database::connect();
        $this->builder=$db->table('users');
    }

    public function getALlUsers(){
        return $this->builder->get()->getResultArray();
    }

    public function insertUser($data){
        $this->builder->insert($data);
    }

    public function getUserWhere($data){
        return $this->builder->where($data)->get()->getResultArray()[0];
    }
}

?>