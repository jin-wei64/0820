<?php
header("content-type: text/html; charset=utf-8");

// 1. 初始設定
$ch = curl_init();

// 2. 設定 / 調整參數
curl_setopt($ch, CURLOPT_URL, "https://opendata.cwb.gov.tw/api/v1/rest/datastore/F-C0032-001?Authorization=CWB-EAD35A23-4827-4F86-85CF-E4898711F30C&elementName=PoP");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);

// 3. 執行，取回 response 結果
$pageContent = curl_exec($ch);

// 4. 關閉與釋放資源
// var_dump($a);
// foreach ($a as $key => $value){
// 	echo $key, "=>", $value, "<br>";
// }

//  echo htmlspecialchars($a);
$a = json_decode($pageContent,true);
foreach ($a['records']['location'] as $i) {
    echo $i["locationName"]."降雨率";
    for($count=0;$count<3;$count++){
        echo $i["weatherElement"][0]["time"][$count]["parameter"]["parameterName"];
    }
    echo "<br>";
   
}




// echo $a
// $doc = new DOMDocument();
// libxml_use_internal_errors(true); //有錯誤繼續  
// $doc->loadHTML($pageContent);

// $xpath = new DOMXPath($doc);
// $entries = $xpath->query('records');
// foreach ($entries as $entry) 
// {
//     $title = $xpath->query("records", $entry);
//     echo "Title：" . $title->item(0)->nodeValue . "<br>";
// }

?>
