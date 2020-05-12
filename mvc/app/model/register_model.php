<?php  
class Register_model{

    public function __construct()
    {
        $this->db = new Database;
    }
    public function register($data){
        $username = htmlspecialchars($data['username']);
        $password = $data['password'];

        $query = "INSERT INTO user VALUES ('','$username','$password')";
        $this->db->query($query);
        $this->db->execute();
        return $this->db->rowCount();
    }
}