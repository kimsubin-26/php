<!DOCTYPE html>
<html>
    <head>
        <meta charset = 'utf-8'> 
        
    </head>

<body>
    <h3>
        <?php
        echo "고양이와 토끼";
        ?>
    </h3>
    <?php
    $filename = "cat.jpg"; //문자열 cat.jpg를 저장
    echo "<img src = '$filename'>"; //echo는 결국 이미지라는 문자를 출력하게됨,
    //img src = html 태그
    echo "<br>";
    
    $filename = "rabit.jpg";
    echo "<img src = '$filename'>";
    ?>
</body>
</html>