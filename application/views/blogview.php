<html>
<head>
    <title><?php echo $title;?></title>
</head>
<body>
<h1><?php echo $heading;?></h1>

<h3>My Todo List</h3>

<ul>
    <?php foreach ($todo_list as $item):?>

        <li><?php echo $item;?></li>

    <?php endforeach;?>
</ul>
<script>
    console.log("<?=$title?>");
    console.log(<?php echo json_encode($heading); ?>);
</script>
</body>
</html>