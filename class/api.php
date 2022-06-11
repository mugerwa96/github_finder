<?php
class Users
{
    private $api;
    private $details;
  
    
    // function to get users
    public function getUsers()
    {
        $context = stream_context_create(
            array(
                "http" => array(
                    "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
                )
                )
                );
        $data=json_decode(file_get_contents("https://api.github.com/users",false, $context));
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";

        foreach($data as $item)
        {
            echo "<li>".$item->login."</li>";
        }
      
    }
}

?>