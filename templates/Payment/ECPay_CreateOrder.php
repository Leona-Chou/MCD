<?php
require_once 'Integration.php';

$obj = new \ECPay_AllInOne();

//服務參數
//$obj->ServiceURL  = $_POST['ServiceURL'];

$obj->MerchantID  = '2000132';
$obj->HashKey     = '5294y06JbISpM5x9';
$obj->HashIV      = 'v77hoKGq4kWxNNIS';


//
$obj->Send['MerchantTradeNo'] = $_POST['MerchantTradeNo'];
$obj->Send['MerchantTradeDate'] = $_POST['MerchantTradeDate'];
$obj->Send['PaymentType'] = $_POST['PaymentType'];
$obj->Send['TotalAmount'] = (int)$_POST['TotalAmount'];
$obj->Send['TradeDesc'] = $_POST['TradeDesc'];
$obj->Send['ChoosePayment'] = $_POST['ChoosePayment'];
// $obj->Send['ItemName'] = $_POST['ItemName'];
//$obj->Send['CreditInstallment'] = $_POST['CreditInstallment'];

$obj->ServiceURL = "https://payment-stage.ecpay.com.tw/Cashier/AioCheckOut/V5";
$obj->Send['ReturnURL'] = "https://shoparoundnet.com/MCD1/templates/Payment/ECPay_ReturnURL.php";
//$obj->Send['OrderResultURL'] = "https://ble.com.tw/test/ECPay_OrderResultURL.php";

$obj->Send['ClientBackURL'] = "https://shoparoundnet.com/MCD1/templates/clear.php"; //ECPay顯示交易結果頁.裡面帶出返回商店按鈕


$obj->Send['CustomField1']      = date('Y/m/d H:i:s');      //額外的欄位
$obj->Send['CustomField2']      = "";                        //額外的欄位

// 訂單的商品資料
$obj->Send['Items'] = [];
$name = rtrim($_POST['ItemName'], "#");
$price = rtrim($_POST['Price'], "#");
$quan = rtrim($_POST['Quantity'], "#");
$nameArr = explode("#", $name);
$priceArr = explode("#", $price);
$quanArr = explode("#", $quan);

foreach ($nameArr as $k => $val) {
        array_push($obj->Send['Items'], array(
                'Name' => $nameArr[$k],
                'Price' => (int)$priceArr[$k],
                'Currency' => "元",
                'Quantity' => (int)$quanArr[$k],
                'URL' => "dedwed"
        ));
}

// 把order內容存入資料庫
$sid = $_POST['MerchantTradeNo']; // sid
$date = $_POST['MerchantTradeDate']; // date
$meal = $_POST['ItemName']; // meal
$total_price = $_POST['TotalAmount']; // total_price
// 建立MySQL的資料庫連接 
$link = mysqli_connect(
        "74.220.219.18",
        "turswsmy_Leona",
        "12345"
)
        or die("無法開啟MySQL資料庫連接!<br/>");
// 指定開啟的資料庫名稱myschool
$dbname = "turswsmy_MCD";
// 開啟指定的資料庫
if (!mysqli_select_db($link, $dbname))
        die("無法開啟 $dbname 資料庫!<br/>");
else
        //        echo "資料庫: $dbname 開啟成功!<br/>";

        $sql = "INSERT INTO `mcdorder`(`sid`, `date`, `meal`, `total_price`) VALUES (\"" . $sid . "\",\"" . $date . "\",\"" . $meal . "\",\"" . $total_price . "\")"; // 指定SQL字串
// $sql = "UPDATE [IGNORE] `mcdorder` SET `quan` = `quan` + " . $quan . "WHERE (SELECT `meal` FROM `mcdorder` WHERE `meal`=" . $meal . ")";
//送出UTF8編碼的MySQL指令
mysqli_query($link, 'SET NAMES utf8');
mysqli_query($link, $sql);
mysqli_close($link);  // 關閉資料庫連接


//產生訂單(auto submit至ECPay)
$obj->CheckOut();
$Response = (string)$obj->CheckOutString();
echo $Response;

// 自動將表單送出
echo '<script>document.getElementById("__ecpayForm").submit();</script>';
