`<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="author" content="Xuechu WANG">
    <meta name="description" content="IMDB api test">
    <title>CDAW api demo</title>
</head>
<body>
    <?php 
    $data = file_get_contents('https://imdb-api.com/en/API/Search/k_vx8m5do1/inception%202010');
    $jsonData = json_decode($data,true);
    echo $data;
    echo "<br>";
    $num = 1;
    foreach ($jsonData as $key=>$value) {
        if(is_array($value)){
            $arr = json_decode($value,true);
            foreach($arr as $key=>$value){
                echo $key.$value;
            }
        }
    }

    ?>

</body>
</html>