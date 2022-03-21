<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>麥當勞語音點餐</title>
    <img src ="../static/images/first/safety.jpg" width="400"style="top:0px;left:35%;position:relative;"></img>
    <script>
        let mealURL = new URL(location.href);
        let params = mealURL.searchParams;
        var key = parseInt(params.get('key'));
        var img1 = params.get('img1');
    </script>
</head>    
<body>
    <!-- <header></header> -->
    <main>
        <section style="left:40%;position:absolute;">
            <img src="../static/images/meal/薯條_飲料.jpg"></img>
            <h3><a href="order.php" 
                   onclick="location.href=this.href+'?key='+(key+60)+'&img1='+img1+'&img2=薯條_飲料'; return false;">薯條_飲料</a></h3>
            <h3>+60元</h3>
            <img src=""></img>

            <img src="../static/images/meal/沙拉_飲料.jpg"></img>
            <h3><a href="order.php" 
                   onclick="location.href=this.href+'?key='+(key+55)+'&img1='+img1+'&img2=沙拉_飲料'; return false;">沙拉_飲料</a></h3>
            <h3>+55元</h3>
        
            <img src="../static/images/meal/炸雞_飲料.jpg"></img>
            <h3><a href="order.php" 
                   onclick="location.href=this.href+'?key='+(key+70)+'&img1='+img1+'&img2=炸雞_飲料'; return false;">炸雞_飲料</a></h3>
            <h3>+70元</h3>
        </section>
    </main>
    <!-- <aside></aside> -->
    <!-- <footer></footer> -->
</body>
</html>
