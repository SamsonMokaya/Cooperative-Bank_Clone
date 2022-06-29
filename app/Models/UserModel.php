<?php

namespace App\Models;
use CodeIgniter\Model;
use Config\Database;

class UserModel extends Model{
    protected $allowedFields=['UserId','FirstName','LastName', 'Gender','Email','Password','Amount','PhysicalAddress','Profession', 'CardNumber'];
    protected $primaryKey='UserId';
    protected $table='users';
    protected $db,$builder;

    public function __construct(){
        $db=Database::connect();
        $this->builder=$db->table('users');
    }

    public function getAllUsers(){
        return $this->builder->get()->getResultArray();
    }

    public function insertUser($data){
        $this->builder->insert($data);
    }

    public function getUserWhere($condition){
        return count($this->builder->where($condition)->get()->getResultArray())>0?$this->builder->where($condition)->get()->getResultArray()[0]:'No-User';
    }

    
}

?>