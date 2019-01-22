<?php require_once('admin/scripts/read.php'); 
if(isset($_GET['filter'])){
    $tbl = 'tbl_movies';
    $tbl_2 = 'tbl_genre';
    $tbl_3 = 'tbl_mov_genre';
    $col = 'movies_id';
    $col_2 = 'genre_id';
    $col_3 = 'genre_name';
    $filter = $_GET['filter'];
    $results = filterResults($tbl, $tbl_2, $tbl_3, $col, $col_2, $col_3, $filter);
}else{
    $results = getAll('tbl_movies');

}?>

<!DOCTYPE html>
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
    <h1>  This is the movie site </h1>
    <ul>
        <?php //$results = getAll('tbl_movies'); 
        while($row = $results ->fetch(PDO::FETCH_ASSOC)):?> <!--removing the {, replace it with endwhile;-->
        <?php //TODO: use the following syntax to display at least 3 or more columns from the database;?>       
            <h2><?php echo $row['movies_title'];?></h2>
            <h3><?php echo $row['movies_year'];?></h3>
            <p><?php echo $row['movies_storyline'];?></p>
            <a href="details.php?id=<?php echo $row['movies_id'];?>">Read More</a> <br>
            <img src="images/<?php echo $row['movies_cover'];?>" 
            alt="<?php echo $row['movies_title'];?>">
                <!--echo '<li>'.$row['movies_title'].'</li>';-->
            
        <?php endwhile;?>
    </ul>
</div>
<?php include('templates/footer.html'); ?>
</body>
</html>