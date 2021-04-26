<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クラス利用テスト</title>
</head>
<Main>
    <h1>クラス利用テスト</h1>
<?php
    //Eventクラスの動作テスト
    include_once 'Classes/Event/Event.php';
    include_once 'Classes/Event/Database/Twenty.php';
    include_once 'Classes/Event/Database/Thirty.php';
    include_once  'Classes/Event/Database/Fourty.php';

    print '<p>20代のイベント</p>';
    for($i = 0; $i < count($twenty); $i++){
        print '<p>イベント名:'.$twenty[$i]->getName().'</p>';
        print '<p>イベント情報;'.$twenty[$i]->getInfo().'</p>';
        print '<p>--------------------------------------------------------------</p>';
    }
    
    
    include_once 'Classes/Map.php';
    $map = new Map($twenty,$thirty,$fourty,45);
    echo Count($map->createdMap);
    for($i =0;$i<Count($map->createdMap);$i++){
        echo $map->createdMap[$i]->getName();
    }
    
    
    
    
    /*$aa = new Map($twenty);
    $out = $aa->createMap[0];
    echo $out->getName();*/

        
    

?>
</Main>
<body>
    
</body>
</html>