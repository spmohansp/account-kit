<?php
    $app_id = "155053671798564";
    $secret = "b1f7ddbed2a99d7f891c766a4ab2dc7e";
    $version = "v1.1"; // 'v1.1' for example

    function doCurl($url) 
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      $data = json_decode(curl_exec($ch), true);
      curl_close($ch);
      return $data;
    }
    
      $token_exchange_url = 'https://graph.accountkit.com/'.$version.'/access_token?'.'grant_type=authorization_code'.  '&code='.$_POST['code']."&access_token=AA|$app_id|$secret";
      $data = doCurl($token_exchange_url);
      echo $user_id = $data['id'];
      
      if ($user_id=="152789125490096") {   //equalent 
         header("location:../view/home.php");
      }
      else{
          header("location:../view/error.php");
      }
      
 ?>


