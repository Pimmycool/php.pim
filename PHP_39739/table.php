<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table + PHP</title>
</head>
<body>
    <?PHP 
    $array = array(
        "namwan",
        "pimmy" ,
        "bio"
    );
    $phone = array(
        "0424244249",
        "0999999999" ,
        "0111111111"
    );

    $address = array(
        "Bangkok" ,
        "Bangkok" ,
        "Bangkok" 
    );
    $img = array(
        "https://i.pinimg.com/736x/61/b9/ac/61b9acd7c16af3fb5ff50131fcdc23ee.jpg" ,
        "https://i.pinimg.com/236x/f9/ae/26/f9ae26641bcac805a29b525993e53798.jpg" ,
        "https://i.pinimg.com/736x/d3/1a/c1/d31ac1047413774392adaabc76c16ca7.jpg" 
    );
    ?>
    <table border="1" width="100%">
        <tr>
            <th>ลำดับ</th>
            <th>ชื่อ</th>
            <th>เบอร์โทร</th>
            <th>ที่อยู่</th>
            <th>รูปภาพ</th>
        </tr>
        <?PHP
        for($i=0;$i<count($array); $i++){
        echo '
        <tr>
        <td>1</td>
        <td>'.$array[$i+1].'</td>
        <td>'.$phone[$i].'</td>
        <td>'.$address[$i].'</td>
        <td><img src="'.$img[$i].'" width="100" alt="" ></td>
    </tr>
    '; 
}  
        ?>
     
    </table>
</body>
</html>