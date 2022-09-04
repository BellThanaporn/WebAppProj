<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
    $product = [
            ["Id"=>01, "Name"=>"donut pattern bag", "Price"=>120, "Img"=>"img/1.jpg"],
            ["Id"=>02, "Name"=>"peach pattern bag", "Price"=>150, "Img"=>"img/2.jpg"],
            ["Id"=>03, "Name"=>"bear pattern bag", "Price"=>120, "Img"=>"img/3.jpg"],
            ["Id"=>04, "Name"=>"women's pattern bag", "Price"=>120, "Img"=>"img/4.jpg"],
            ["Id"=>05, "Name"=>"flower pattern bag", "Price"=>120, "Img"=>"img/5.jpg"],
            ["Id"=>06, "Name"=>"orange pattern bag", "Price"=>120, "Img"=>"img/6.jpg"],
            ["Id"=>07, "Name"=>"rabbit pattern bag", "Price"=>120, "Img"=>"img/7.jpg"],
            ["Id"=>88, "Name"=>"NCIS pattern bag", "Price"=>150, "Img"=>"img/8.jpg"],
            ["Id"=>99, "Name"=>"Blue pig pattern bag", "Price"=>120, "Img"=>"img/9.jpg"],
            ["Id"=>10, "Name"=>"flower red pattern bag", "Price"=>120, "Img"=>"img/10.jpg"],
    ];  
    echo "<h2 align='center'>Product Table</h2>";
?>       
    <table border=1  width=1000 align='center' bordercolor='#CD5C5C'>
        <tr align='center' bgcolor='#FA8072'>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Img</th>
        </tr>                 
    <?php
        foreach ($product as $value){
            $r = rand(0,256);
            $g = rand(0,256);
            $b = rand(0,256);
            $style = "style='color:rgb($r,$g,$b)'";
    ?>
        
            <tr align='center' >
                <td <?=$style?>> <?=$value['Id']?> </td>
                <td <?=$style?>> <?=$value['Name']?> </td>
                <td <?=$style?>> <?=$value['Price']?> </td>
                <td <?=$style?>> <img  width='250' height='250' src=<?= $value["Img"]?>> </td>
            </tr>
    <?php } ?>
</body>
</html> 
