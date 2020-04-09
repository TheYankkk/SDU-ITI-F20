<?php
class Picture extends Database {

    public function upload($username, $header, $description, $file){
      $sql = "INSERT INTO picture (user, header, description, picture) VALUES ( :username , :header , :description , :file );";

       // INSERT INTO picture (user, header, description, picture) VALUES ( 'JohnDoe' , 'sdfsfs' , 'sdfsgf' , 'data:image/png;base64,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');

        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':username', $username,PDO::PARAM_STR);
        $stmt->bindParam(':header', $header,PDO::PARAM_STR);
        $stmt->bindParam(':description', $description,PDO::PARAM_STR);
        $stmt->bindParam(':file', $file,PDO::PARAM_STR);
        $stmt->execute();


        return true;
    }


    public function getAll () {

        $sql = "SELECT * FROM picture;";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();
        $jsonreturn = json_encode($result);
        return $result;
    }

}