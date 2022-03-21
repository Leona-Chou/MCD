<?php
session_start();
// print_r( $_SESSION["order"] );
// foreach ($_SESSION["order"] as $k => $val) {
// print_r($_SESSION["order"][$k]);
// }
?>

<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <title>麥當勞語音點餐</title>
    <img src ="../static/images/first/safety.jpg" width="400"style="top:0px;left:38%;position:relative;"></img>
    
</head>
<!-- <header></header> -->
<main>
    <section>
        <table align="center" height="300">
            <tr align="center">
                <td><font face="DFKai-sb" font size="6">編號</font></td>
                <td><font face="DFKai-sb" font size="6">餐點名稱</font></td>
                <td><font face="DFKai-sb" font size="6">&nbsp&nbsp數量</font></td>
                <td><font face="DFKai-sb" font size="6">&nbsp&nbsp單價</font></td>
                <td><font face="DFKai-sb" font size="6">&nbsp&nbsp金額</font></td>
                <!-- <td><font face="DFKai-sb" font size="6">&nbsp&nbsp操作</font></td> -->
            
            <?php
            foreach ($_SESSION["order"] as $k => $val) {
                echo '<tr align="center">';
                echo '<td>' . ($k+1) . '</td>';
                //意思是for $datas each $value( as ) 
                foreach ($val as $value) echo '<td>' . $value . '</td>';
                echo '<td><a id="delete' . ($k+1) . '" href="delete.php?ids=' . $k . '">-1</a></td>';
                echo '<td><a id="plus' . ($k+1) . '" href="plus.php?ids=' . $k . '">+1</a> </td>';
                // echo '<br>' . $_SESSION["order"][$k][0];
                echo '</tr>';
            }
            ?>
            </tr>
            
            <tr>
                <td><font face="DFKai-sb" font size="6"><a href="combo.php">繼續點餐</a></font></td>
            
                <td>
              
                    <form id="idFormAioCheckOut" method="post" action="Payment/ECPay_CreateOrder.php">

                        <!-- 編號: -->
                            <input type="text" name="MerchantTradeNo" value="<?php echo time(); ?>" class="form-control" style="display:none" />
                        <!-- 時間: -->
                            <input type="text" name="MerchantTradeDate" value="<?php echo date('Y/m/d H:i:s'); ?>" class="form-control" style="display:none" />
                        <!-- 類型: -->
                            <input type="text" name="PaymentType" value="aio" class="form-control" style="display:none" />
                        <!-- 描述: -->
                            <input type="text" name="TradeDesc" value="餐飲費用" class="form-control" style="display:none" />
                        <!-- 付款方式: -->
                            <input type="text" name="ChoosePayment" value="Credit" style="display:none" />


                        <!-- 單價: -->
                            <input type="text" name="Price" value="<?php 
                            foreach ($_SESSION["order"] as $k => $val) {
                                echo $val[2] . "#";
                            }
                             ?>" class="form-control" style="display:none" />
                        <!-- 名稱: -->
                            <input type="text" name="ItemName" value="<?php
                            foreach ($_SESSION["order"] as $k => $val) {
                                echo $val[0] . "#";
                            }
                            ?>" class="form-control" style="display:none" />
                        <!-- 總金額: -->
                            <input type="text" name="TotalAmount" value="<?php
                            foreach ($_SESSION["order"] as $k => $val) {
                                $total_price += (int)$val[3];
                            }
                            echo $total_price;
                            ?>" class="form-control" style="display:none" />
                        <!-- 數量: -->
                            <input type="text" name="Quantity" value="<?php
                            foreach ($_SESSION["order"] as $k => $val) {
                                echo $val[1] . "#";
                            }
                            ?>" class="form-control" style="display:none" />

                        <button id="enter"style="top:0px;left: 250px;;position:relative;" type="submit" class="btn btn-default"><font face="DFKai-sb" font size="6">付款</font></button>
                        
                    </form>
                    
                </td>
                
            </tr>
        </table>
        <img src ="../static/images/tips.jpg" width="400"style="top:50px;left:35%;position:relative;"></img>
    </section>
</main>
<!-- <aside></aside> -->
<!-- <footer></footer> -->
</body>

</html>