<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suggestions</title>
    <link rel="stylesheet" href="style.css">
    <script src="jamrolex.js"></script>
</head>
<body>
    <!--Start Header-->
    <a name="atas">
    <!--End Header-->
            
        <!--Start navbar-->
        <center>
            <div class="logo"><h1>Thoughts of Fais</h1></div>
             <hr>
                <div class="menu">
                    <a href="home.html">Home</a> |
                    <a href="about.html">About</a> |
                    <a href="blog.html">Blog</a> |
                    <a href="suggestions.php">Suggestions</a> |
                    <a href="Rating.html">Rating</a>
                </div>
            <hr>
        </center>
        <!--End navbar-->

        <br><br>

        <div class="input">
            <center><h3>Give Me an Idea for The Next Blog!</h3></center>
            <br>
            <center>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <div>
                        <label>Nama</label>
                        <br>
                        <input type="text" name="fname">
                    </div>
                    <br>
                    <div>
                        <label>Email</label>
                        <br>
                        <input type="email" name="femail">
                    </div>
                    <br>
                    <div>
                        <label>No HP</label>
                        <br>
                        <input type="number" name="fnumber">
                    </div>
                    <br>
                    <div>
                        <label>Saran Blog</label>
                        <br>
                        <input type="text" name="fsuggest">
                    </div>
                    <br>
                    <div class="submit">
                    <button type="submit">Submit</button>
                    </div>
            </center>
        </div>

        <br><br>
        
            <center>
                <?php
                if(isset($_POST['fname'])){
                    $nama = $_POST['fname'];
                    $email = $_POST['femail'];
                    $number = $_POST['fnumber'];
                    $saran = $_POST['fsuggest'];
                    echo "
                    <hr>
                    <br><br>
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>$nama</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>$email</td>
                        </tr>
                        <tr>
                            <td>No HP</td>
                            <td>:</td>
                            <td>$number</td>
                        </tr>
                        <tr>
                            <td>Saran</td>
                            <td>:</td>
                            <td>$saran</td>
                        </tr>
                    </table>
                    ";
                }
                ?>
            </center>

            <br><br>

        <!--Start footer-->
        <hr>  
            <div class="jam_digital">
                <span id="hours">00</span>
                <span>:</span>
                <span id="minutes">00</span>
                <span>:</span>
                <span id="seconds">00</span>
            </div>
        <hr>
        <br><br>
        <p align="center"><b>Copyright @2022 Muhammad Faisal Zuhair</b></p>
        <br><br>
        <div class="footer">
            <p align="center"><a href="#atas">&#128285</a></p>
        </div>
    <!--End footer-->
</body>
</html>