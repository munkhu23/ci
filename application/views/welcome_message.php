<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Restaurant</title>
</head>
<body>

<div id="container">
    <?php
        foreach($query as $row) {
            echo $row->mac_id;
        }
    ?>
</div>

</body>
</html>