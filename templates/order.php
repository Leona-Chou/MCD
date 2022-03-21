<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>麥當勞語音點餐</title>
    <img src ="../static/images/first/safety.jpg" width="400"style="top:0px;left:38%;position:relative;"></img>
    <link rel="icon" href="{{ url_for('static', filename='images/turkey.ico') }}">
    <script>
        let mealURL = new URL(location.href);
        let params = mealURL.searchParams;
        var key = params.get('key');
        var img1 = params.get('img1');
        var img2 = params.get('img2');


        // document.getElementById("img1").src = img1;
        // document.getElementsByTagName("img1").src = img1;

        function MinusOne() {
            var quantity = parseInt(document.getElementById("quantity").innerHTML);
            var amount = parseInt(document.getElementById("amount").innerHTML);
            if (quantity > 1) {
                document.getElementById("quantity").textContent = quantity - 1;
                document.getElementById("amount").textContent = document.getElementById("amount").innerHTML - parseInt(key);
            } else {
                window.alert("不能再少啦><");
            }
        }

        function PlusOne() {
            var quantity = parseInt(document.getElementById("quantity").innerHTML);
            var amount = parseInt(document.getElementById("amount").innerHTML);
            document.getElementById("quantity").textContent = quantity + 1;
            document.getElementById("amount").textContent = parseInt(key) * document.getElementById("quantity").innerHTML;
        }

        function SetSession() {
            var quan = parseInt(document.getElementById("quantity").innerHTML);
            window.location.href='add.php?price=' + key + '&img1=' + img1 + '&img2=' + img2 + '&quan=' + quan;
        }
    </script>
</head>

<body>
    <!-- <header></header> -->
    <main>
        <section>
            <table align="center">
                <tr>
                    <td>
                        <script>
                            document.write("<img src='../static/images/meal/" + img1 + ".jpg'/>")
                        </script>
                    </td>
                        <script>
                            if (img2){
                                document.write("<td><img src='../static/images/meal/" + img2 + ".jpg'/></td>")
                            }
                            
                        </script>
                </tr> 
                    <td><input type="button" id="MinusOne" value="-" onclick="MinusOne();" /></td>
                    <td><p class="shopping_w2" id="quantity">1</p></td>
                    <td><input type="button" id="PlusOne" value="+" onclick="PlusOne();" /></td>                
                <tr>
                    <td>金额: <span class="shopping_w2" id="amount">
                            <script>
                                document.write(key)
                            </script>
                        </span>元
                    </td>
                    <td><input type="button" id="enter" value="確認" onclick="SetSession();" /></td>
                </tr>
            </table>
        </section>
    </main>
    <!-- <aside></aside> -->
    <!-- <footer></footer> -->
</body>

</html>