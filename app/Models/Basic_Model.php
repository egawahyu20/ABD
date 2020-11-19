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
        $builder->select('employeeNumber, firstName, lastName, email, jobTitle');
        // $builder->distinct();
        // $builder->orderBy('lastName');                                            
        return $builder->get();
    }

    public function getCustomerAnd()
    {
        $builder = $this->db->table('customers');
        $builder->select('customername, country, state, creditlimit');  
        $builder->where("country = 'USA' AND state = 'CA' AND creditlimit > 100000;");                                          
        return $builder->get();
    }

    public function getCustomerOr()
    {
        $builder = $this->db->table('customers');
        $builder->select('customername, country, state');  
        $builder->where("country = 'USA' OR country = 'France';");                                          
        return $builder->get();
    }

    public function getCustomerIn()
    {
        $builder = $this->db->table('offices');
        $builder->select('officeCode, city, phone, country');  
        $builder->where("country IN ('USA' , 'France');");                                          
        return $builder->get();
    }

    public function getProductBetween()
    {
        $builder = $this->db->table('products');
        $builder->select('productCode, productName, buyPrice');  
        $builder->where("buyPrice BETWEEN 90 AND 100;");                                          
        return $builder->get();
    }

    // public function getProductNotBetween()
    // {
    //     $builder = $this->db->table('products');
    //     $builder->select('productCode, productName, buyPrice');  
    //     $builder->where("buyPrice NOTBETWEEN 20 AND 100;");                                          
    //     return $builder->get();
    // }

    public function getProductLike1()
    {
        $builder = $this->db->table('employees');
        $builder->select('employeeNumber, lastName, firstName');  
        $builder->where("firstName LIKE 'a%';");                                          
        return $builder->get();
    }

    public function getProductLike2()
    {
        $builder = $this->db->table('employees');
        $builder->select('employeeNumber, lastName, firstName');  
        $builder->where("firstname LIKE 'T_m';");                                          
        return $builder->get();
    }

    public function getCustomerLimitDesc()
    {
        $builder = $this->db->table('customers');
        $builder->select('customerNumber, customerName, creditLimit');  
        $builder->orderBy('creditLimit','DESC');
        $builder->limit(5);                                       
        return $builder->get();
    }

    public function getCustomerLimitAsc()
    {
        $builder = $this->db->table('customers');
        $builder->select('customerNumber, customerName, creditLimit');  
        $builder->orderBy('creditLimit','ASC');
        $builder->limit(5);                                       
        return $builder->get();
    }

    public function getCustomerIsNull()
    {
        $builder = $this->db->table('customers');
        $builder->select('customerName, country, salesrepemployeenumber');  
        $builder->where("salesrepemployeenumber IS NULL");
        $builder->orderBy('customerName');                                     
        return $builder->get();
    }

    public function getCustomerIsNotNull()
    {
        $builder = $this->db->table('customers');
        $builder->select('customerName, country, salesrepemployeenumber');  
        $builder->where("salesrepemployeenumber IS NOT NULL");
        $builder->orderBy('customerName');                                     
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