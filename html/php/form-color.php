<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Css From</title>

    <!-- META TAG CUSTOME
    ==================================== -->
    <meta name="description" content="CSS FORM DESIGN WEB PROGRAMMING" >
    <meta name="keywords" content="CSS, HTML" >
    <meta name="author" content="Yogi Arif Widodo" >
    <!-- <meta http-equiv="refresh" content="360" > -->

    <!-- CSS FORM
    =============================== -->
    <link rel="stylesheet" href="/css/from-v1.css">

    <!-- FOR LOCALHOST -->
    <link rel="stylesheet" href="/kuliah/css/from-v1.css">

    <?php

            $warna = $_POST['color'];
            if(empty ($warna))
            $warna = "#ffffff";
            echo "<body bgcolor=$warna>";
    ?>
</head>
<body>
<img src="/img/scodeid.jpg" alt="logo" class="author">
        <h1 style="color: white" >FORM</h1>

        <input type="text" placeholder="Search . ." class="input-v1" >

        <!-- <style contenteditable >
            
            /* p { color: Black; this trick for STYLE with display block}; */
        </style> -->

        <br>
        <br>
        <div class="container-v1">
            <form method="POST" action="/css/from-v1.css">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name" >

                <br>
                
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name" >

                <br>

                <label for="country">Language</label>
                <select name="country" id="country">
                    <option value="australia">React Native</option>
                    <option value="indonesia">Laravel</option>
                    </select>

                    <br>

                    <input type="submit" name="submit" id="submit" value="Submit" >

                    <br>
                    <input type="date" value="1980-08-26">
                    <input type="date" min="2017-08-15" max="2018-08-26" step="7">
                    <input id="today" type="date">
                    <input type="week" value="2014-W02">
                    <input type="month" value="2018-08">

                    <br>
                    <input type="datetime-local" value="2017-06-13T13:00">
                    <input type="time" value="13:00" step="900">
                    <br>
                    
                    <textarea name="Message" id="message" cols="30" rows="10" onfocus="this.value=''; this.value=null" style="max-width: 100%;"  >Hint Goes Here</textarea>
                </form>
            </div>


            <!-- new -->

            <br>

            <div class="container-v1">
                    <form method="POST" action="/kuliah/html/php/form2.php">
                        <label for="userid">User Id</label>
                        <input type="text" id="userId" name="user" placeholder="Username" >
        
                        <br>
                        
                        <label for="password">Password</label>
                        <input type="password" id="passwordId" name="pass" placeholder="Password" >

                        
                        <br>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="emailId" placeholder="email@mail.com">

                        <br>

                        <label for="kelamin">Kelamin</label>
                        <input type="radio" name="gender" value="Pria"> Pria
                        <input type="radio" name="gender" value="Wanita"> Wanita

                        <br>

                        <label for="hoby">Hobby</label>
                        <!-- <input type="checkbox" name="hobby" value="anu">
                        Anu -->
                        <!-- <input type="checkbox" name="hobby1" value="Membaca">
                        Membaca
                        <input type="checkbox" name="hobby2" value="Ngoding">
                        Ngoding
                        <input type="checkbox" name="hobby3" value="Terbang">
                        Terbang -->

                        <input type="checkbox" name="hobby" value="Membaca">
                        Membaca
                        <input type="checkbox" name="hobby" value="Ngoding">
                        Ngoding
                        <input type="checkbox" name="hobby" value="Terbang">
                        Terbang
                        <br>

                        <label for="Agama">Agama</label>
                        <select name="agama" id="agamaId">
                            <option value="islam">islam</option>
                            <option value="islam">kristen</option>
                            <option value="islam">hindu</option>
                        </select>

                        <br>
                        <label for="kota">kota</label>
                        <input type="file" name="kota" >
                        <input type="date" name="date">
                        <input type="month" name="month">
                        <input type="hidden" name="kota" id="kotaId">

                        <br>
                        <label for="warna">warna</label>
                        <input type="color" name="color" id="colorId">
                        <br>
                        <input type="submit" value="GO">
                        <input type="reset" value="clear">
                        
                        </form>
                    </div>

                    <div class="container-v1">
                        <form action="">
                            <table>
                                <tr>
                                    <td>
                                        user     
                                    </td>
                                    <td>
                                        : <input type="text" id="userId" name="user" placeholder="Username" >
                                    </td>
                                </tr>
                                <td>
                                        pass    
                                    </td>
                                    <td>
                                        : <input type="text" id="userId" name="user" placeholder="password" >
                                    </td>
                                    <tr>
                                    <td valign="top">
                                            Kelamin
                                        </td>
                                        <td valign="top">
                                                : <input type="radio" name="gender" value="Pria"> Pria
                                                <br>
                                                &nbsp <input type="radio" name="gender" value="Wanita"> Wanita
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            hobby
                                        </td>
                                        <td>
                                                : <input type="checkbox" name="hobby" value="Membaca">
                                                Membaca
                                               
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            

                                        </td>
                                        <td>
                                                &nbsp <input type="checkbox" name="hobby" value="Ngoding">
                                                Ngoding
                                                <br>
                                                &nbsp <input type="checkbox" name="hobby" value="Terbang">
                                                Terbang 
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                                
                                               
                                        </td>
                                        <td>
                                                <input type="submit" value="submit">
                                                <input type="reset" value="clear">
                                        </td>
                                    </tr>
                            </table>
                        </form>
                    </div>
</body>
</html>