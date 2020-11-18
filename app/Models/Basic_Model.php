<?php namespace App\Models;

use CodeIgniter\Model;

class Basic_Model extends Model{

    public function getEmployeesWhere()
    {
        $builder = $this->db->table('employees');
        $builder->where('jobtitle','Sales Rep');
        return $builder->get();
    }

    public function getEmployeesDistinct()
    {
        $builder = $this->db->table('employees');
        $builder->select('*');  
        $builder->distinct('lastName');
        $builder->orderBy('lastName');                                            
        return $builder->get();
    }

    

    // public function getProduct()
    // {
    //     $builder = $this->db->table('products');
    //     $builder->select('*');
    //     $builder->join('category', 'category_id = product_category_id','left');
    //     return $builder->get();
    // }

    // public function saveProduct($data){
    //     $query = $this->db->table('product')->insert($data);
    //     return $query;
    // }

    // public function updateProduct($data, $id)
    // {
    //     $query = $this->db->table('product')->update($data, array('product_id' => $id));
    //     return $query;
    // }

    // public function deleteProduct($id)
    // {
    //     $query = $this->db->table('product')->delete(array('product_id' => $id));
    //     return $query;
    // } 
    
}