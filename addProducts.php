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
        <form action="api.php" method="POST"">
            <input type="text" name="ptitle" id="ptitle" placeholder="اكتب اسم المنتج هنا">
            <br>
            <input type="text" name="pdetails" id="pdetails" placeholder="اكتب تفاصيل المنتج هنا">
            <br>
            <input type="text" name="pimg" id="pimg" placeholder="ضع رابط صورة المنتج هنا">
            <br>
            <input type="submit" value="submit" id="submit">
        </form>
    </main>
</body>
</html>