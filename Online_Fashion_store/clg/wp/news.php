<!DOCTYPE html>
<html>
<head>
<title>
Google News
</title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet">
 <script 
src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></scri
pt>
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
</style>
<body>
<?php
$url = 
"https://newsapi.org/v2/everything?q=bitcoin&apiKey=277966be0926427ea3f0d994194bb
9e6";
$response = file_get_contents($url);
$NewsData = json_decode($response);
?>
<div class="container-fluid">
<div class="row bg-light bg " style="height: 100px">
<p style="margin: auto;font-size: 50px;font-family:Elephant;" 
align="center">DAILY NEWS</p>
</div>
 <?php
 foreach ($NewsData->articles as $News) {
 ?>
 <div class="row">
 <div class="col-md-3">
 <img style="background-size: cover; width: 360px; height: 260px; margin-bottom:10px " src="<?php echo $News->urlToImage ?>" alt=" News thumbnail" 
class="rounded img-responsive" >
 </div>
 <div class="col-md-9">
 <h2>Title:<?php echo $News->title ?></h2>
 <h5>Decription:<?php echo $News->description ?></h5>
 <p>Content:<?php echo $News->content ?></p>
 <h6>Author:<?php echo $News->author ?></h6>
 <h6>published:<?php echo $News->publishedAt ?></h6>
 <a href="<?php echo $News->url ?>" target="_blank"><button type="button" 
class="btn btn-danger" style="margin-bottom: 10px;">Read More</button></a>
 </div>
 </div>
 <?php
 }
 ?>
</div>
</body>
</html>