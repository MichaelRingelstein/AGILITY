<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>AGILITY</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <header>
    <h1>ANNONCES</h1>
  </header>
  <?php foreach ($offers as $offer): ?>
    <article>
        <h2><?php echo $offer['title'] ?></h2>
        <p><?php echo $offer['content'] ?></p>
    </article>
    <?php endforeach ?>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </p>

</body>
</html>
