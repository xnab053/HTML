<?php
function dd($data){
echo"<pre>";
print_r($data);
echo"</pre>";
}

$data=[
    [
        'id'=>1,
        'name'=>'pochacco1',
        'pic'=>'pic01.jpg',
        'price'=>'100'
    ],
    [
        'id'=>2,
        'name'=>'pochacco2',
        'pic'=>'pic02.jpg',
        'price'=>'100'
    ],
    [
        'id'=>3,
        'name'=>'pochacco3',
        'pic'=>'pic03.jpg',
        'price'=>'100'
    ]
    ];


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         table {
            width: 100%;
            margin: auto;
            text-align: center;
        }

        table,
        td,
        tr,
        th {
            border-collapse: collapse;
            border: 1px solid black;
        }

        th>img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 10px 5px black;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th width="8%">ID</th>
            <th width="10%">NAME</th>
            <th width="10%">PHOTO</th>
            <th>PRICE</th>
        </tr>
<?php foreach ($data as $key => $value): ?>
        <tr>
            <td>
                <?= $value['id']; ?>
            </td>
            <td>
            <?= $value['name']; ?>
            </td>
            <td>
                <?php
                $tmpUrl = "./images/{$value['pic']}";
                ?>
                <img src="<?= $tmpUrl ?>" alt=""></td>
            <td>
            <?= $value['price']; ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
     <!-- js or jqery -->
     <script>
        // 方法一
        $(document).ready(function() {

            let ajaxUrl = "./getData.php";
            $.ajax({
                type: "post",
                url: ajaxUrl,
                // data: "data",
                dataType: "json",
                success: function(res) {
                    console.log('res', res);
                }
            });
            
        });
        // jquery end
    </script>
</body>

</html>