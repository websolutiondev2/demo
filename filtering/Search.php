<?php
class Search{
    public $host     = "localhost";
    public $username = "root";
    public $password = "";
    public $database     = "demo";    
    public function __construct(){
        if(!isset($this->db)){           
            $conn = new mysqli($this->host, $this->username, $this->password, $this->database);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }
    public function searchResult($sqlQueryConditions = array()){
        $sqlQuery = 'SELECT ';
        $sqlQuery .= array_key_exists("select",$sqlQueryConditions)?$sqlQueryConditions['select']:'*';
        $sqlQuery .= ' FROM orders';
        if(array_key_exists("where",$sqlQueryConditions)){
            $sqlQuery .= ' WHERE ';
            $i = 0;
            foreach($sqlQueryConditions['where'] as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $sqlQuery .= $pre.$key." = '".$value."'";
                $i++;
            }
        }        
        if(array_key_exists("search",$sqlQueryConditions)){
            $sqlQuery .= (strpos($sqlQuery, 'WHERE') !== false)?' AND (':' WHERE (';
            $i = 0;
            foreach($sqlQueryConditions['search'] as $key => $value){
                $pre = ($i > 0)?' OR ':' ';
                $sqlQuery .= $pre.$key." LIKE '%".$value."%'";
                $i++;
            }
			$sqlQuery .= ")";
        }        
        if(array_key_exists("order_by",$sqlQueryConditions)){
            $sqlQuery .= ' ORDER BY '.$sqlQueryConditions['order_by']; 
        }        
        if(array_key_exists("start",$sqlQueryConditions) && array_key_exists("limit",$sqlQueryConditions)){
            $sqlQuery .= ' LIMIT '.$sqlQueryConditions['start'].','.$sqlQueryConditions['limit']; 
        }elseif(!array_key_exists("start",$sqlQueryConditions) && array_key_exists("limit",$sqlQueryConditions)){
            $sqlQuery .= ' LIMIT '.$sqlQueryConditions['limit']; 
        }
		$searchResult = $this->db->query($sqlQuery);       
        if(array_key_exists("return_type",$sqlQueryConditions) && $sqlQueryConditions['return_type'] != 'all'){
            switch($sqlQueryConditions['return_type']){
                case 'count':
                    $searchData = $searchResult->num_rows;
                    break;
                case 'single':
                    $searchData = $searchResult->fetch_assoc();
                    break;
                default:
                    $searchData = '';
            }
        }else{
            if($searchResult && $searchResult->num_rows > 0){
                while($row = $searchResult->fetch_assoc()){
                    $searchData[] = $row;
                }
            }
        }
        return !empty($searchData)?$searchData:false;
    }
}