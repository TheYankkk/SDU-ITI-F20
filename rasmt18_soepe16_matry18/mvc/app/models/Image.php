<?php
class Image extends Database {

    public function upload($title, $description, $user, $image) {
        //https://www.geeksforgeeks.org/php-_files-array-http-file-upload-variables/
        $convertedimage = "data:".$_FILES['type'].";base64,".base64_encode(file_get_contents($_FILES['image']['tmp_name']));
                
        try {

            $stmt = $this->conn->prepare("INSERT INTO image (title, description, username, image) VALUES(:title, :description, :username, :image)");
            
            $title = filter_var($title, FILTER_SANITIZE_STRING);
            $stmt->bindParam(':title', $title, PDO::PARAM_STR);
            
            $description = filter_var($description, FILTER_SANITIZE_STRING);
            $stmt->bindParam(':description', $description, PDO::PARAM_STR);
            
            $user = filter_var($user, FILTER_SANITIZE_STRING);
            $stmt->bindParam(':username', $user, PDO::PARAM_STR);
            
            $stmt->bindParam(':image', $convertedimage, PDO::PARAM_STR);
            
            if($stmt->execute()){
                return "You have succesfully uploaded an image";
            }
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }

    }

    public function loadImagesFromModel() {
        $stmt = $this->conn->prepare("Select * from image");
        $stmt->execute();
        $result = $stmt->fetchAll();
        ?>
        <div class='image'>
        
        <?php 
            foreach ($result as $row) {
                $title = htmlentities($row['title']);
                $description = htmlentities($row['description']);
                $username = htmlentities($row['username']);
                $image = htmlentities($row['image']);
        ?>
            <div class='picture'><b>Title of the image:</b><p><?=$title?></p>
            <br>
            <b>Description:</b><p><?=$description?><p>
            <br>
            <b>Contributer:</b><p><?=$username?><p>
            <br>
            <b>Image:</b>
            <br>
            <image src='<?=$image?>' alt=''></image>
            <br></div>
        <?php
            }
        ?>
        </div>
        <?php
    }

}
?>