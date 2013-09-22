<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>menu</title>
</head>
<body>

<div id="container">
    <?php
            foreach($menus as $row){
                echo $row->title;
            }

    ?>
</div>

</body>
</html>