<?php
class APi
{
    private $api;
    private $details;
    private function APi()
    {

       return $this->api=json_decode(file_get_contents("api.json"));
    }
    
    // function to get users
    public function getUsers()
    {
        $data=$this->Api();
        return $data;
    }
}

?>