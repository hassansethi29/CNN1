<?php include 'config.php';
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM articles WHERE id = ?");
$stmt->execute([$id]);
$article = $stmt->fetch();
?>
<!DOCTYPE html>
<html>
<head><title><?php echo $article['title']; ?></title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header><h1><?php echo $article['title']; ?></h1></header>
<div class="article">
    <img src="<?php echo $article['image']; ?>">
    <p><?php echo $article['content']; ?></p>
</div>
</body>
</html>
