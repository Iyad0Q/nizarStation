<?php

include "includes/connect.php";

//form inputs variables
$ptitle = $_POST["ptitle"];
$pdetails = $_POST["pdetails"];
$pimg = $_POST["pimg"];
$submit = $_POST["submit"];

if (isset($submit)) {
    //insert the form data to the database
    $insert = "INSERT INTO addp(`ptitle`, `pdetails`, `pimg`) VALUES ('$ptitle', '$pdetails', '$pimg')"; 
    //send the data from teh form to the database
    mysqli_query($connect, $insert);
}

?>


<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nezarStation | add products</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            !
            NezarStation
            <span>كن شريك مع</span>
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
    </main>
</body>
</html>