<?php

        $user = $_POST['user'];
        $pin = $_POST['pass'];
        $gender = $_POST['gender'];
        $hobby = $_POST['hobby'];

        // $hobby1 = $_POST['hobby1'];
        // $hobby2 = $_POST['hobby2'];
        // $hobby3 = $_POST['hobby3'];

        $hobby1 = "Membaca";
        $hobby2 = "Terbang";
        $hobby3 = "Ngoding";

        echo "User Id  = $user ";
        echo "Password = $pin ";
        echo "Gender = $gender ";
        // echo "Hobby = $hobby1 - $hobby2 - $hobby3 ";
        if( $hobby == $hobby1 )
        {
            echo "Hobby = $hobby1";
        }
        else if($hobby == $hobby2)
        {
            echo "Hobby = $hobby2";
        }
        else if($hobby == $hobby3)
        {
            echo "Hobby = $hobby3";
        }
        
?>

<form method="POST" action="/kuliah/html/php/form3.php">
                        <label for="userid">User Id</label>
                        <input type="hidden" id="userId" name="user" value="<?php echo $user; ?>" >
        
                        <br>
                        
                        <label for="password">Password</label>
                        <input type="hidden" id="passwordId" name="pin" value="<?php echo $pin; ?>">

                        <input type="submit" value="form3">
    </form>