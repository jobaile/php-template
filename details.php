<?php require_once('admin/scripts/read.php'); 
if(isset($_GET['id'])){
    $tbl = 'tbl_movies';
    $col = 'movies_id';
    $value = $_GET['id'];
    $results = getSingle($tbl, $col, $value);
}else{

}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Movie Reviews</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous"> 
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php include('templates/header.html'); ?>
    <div class="container-fluid">
    <h1>This is the movie site</h1>
    <div>
    <?php while($row = $results ->fetch(PDO::FETCH_ASSOC)):?> <!--removing the {, replace it with endwhile;-->
        <h2><?php echo $row['movies_title'];?></h2>
    
        <?php endwhile;?>
    </div>
    </div>
	<?php include('templates/footer.html');?>
</body>
</html>