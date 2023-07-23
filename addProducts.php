<?php

include "includes/connect.php";

error_reporting(0); //hide the errors

//form inputs variables
$ptitle = $_POST["ptitle"];
$pdetails = $_POST["pdetails"];
$pimg = $_POST["pimg"];
$submit = $_POST["submit"];

if (isset($submit)) {
    //insert the form data to the database
    $insert = "INSERT INTO addp(`ptitle`, `pdetails`, `pimg`) VALUES ('$ptitle', '$pdetails', '$pimg')"; 

    //send the data from teh form to the database
    $query = mysqli_query($connect, $insert);
}

?>


<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nezarStation | add products</title>
    <link rel="stylesheet" href="addP.css">
</head>
<body>
    <header>
        <h1>
            !
            <span>NezarStation</span>
            كن شريك مع
        </h1>
        <p>للرجوع للصحفة الرئيسية <a href="home.html">اضغط هنا</a></p>
    </header>

    <main>
        <h2>إضافة منتج جديد</h2>
        <form action="addProducts.php" method="POST"">
            <input type="text" name="ptitle" id="ptitle" placeholder="اكتب اسم المنتج هنا">
            <br>
            <textarea name="pdetails" id="pdetails" cols="18" rows="5" placeholder="اكتب تفاصيل المنتج هنا"></textarea>
            <br>
            <input type="text"  name="pimg" id="pimg" placeholder="ضع رابط صورة المنتج هنا">
            <br>
            <input type="submit" value="submit" id="submit" name="submit">
            
        </form>
        <ul>
            <li> <img src="https://cdn-icons-png.flaticon.com/512/2425/2425919.png" alt="icon" id="img1"> </li>
            <li> <img src="https://www.iconarchive.com/download/i139657/microsoft/fluentui-emoji-flat/Kick-Scooter-Flat.1024.png" alt="icon" id="img2"> </li>
        </ul>
        

    </main>
</body>
</html>