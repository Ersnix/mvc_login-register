<?php
class Login_model
{
    public function __construct()
    {
        $this->db = new Database;
    }
    public function login($data)
    {
        $username = htmlspecialchars($data['username']);
        $password = $data['password'];

        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $this->db->query($query);
        return $this->db->single();
    }
}
