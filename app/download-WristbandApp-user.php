<html xmlns=http://www.w3.org/1999/xhtml>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0"/>
</head>
<body>
<?php
function isInString1($haystack, $needle) {
        //防止$needle 位于开始的位置 
        $haystack = '-_-!' . $haystack;
        return (bool)strpos($haystack, $needle);
}
$url = "";
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$user_agent = strtolower($user_agent);
if(isInString1($user_agent,"micromessenger")){//微信

   if(isInString1($user_agent,"android")){
    echo "<section>
            <img src='./weixin_openerror.png' style='width:100%;'>
         </section>";
   }else{
    echo "<section>
            <img src='./weixin_ios.png' style='width:100%;'>
         </section>";
   }

}else if(isInString1($user_agent,"android")){
  $url = "https://www.lenovomm.com/appdetail/com.lenovo.health/60020";
}else if(isInString1($user_agent,"mac os x")){
        $url = "http://iot.youqidongli.com/app/download?app_id=101";
}else if(isInString1($user_agent,"iphone")){
        $url = "http://iot.youqidongli.com/app/download?app_id=101";
}else if(isInString1($user_agent,"ipad")){
        $url = "http://iot.youqidongli.com/app/download?app_id=101";
}
if($url != ""){
?>
        <script type="text/javascript">
       document.location.href="<?php echo $url ?>"
    </script>
<?php
}
?>
</body>
</html>
          
