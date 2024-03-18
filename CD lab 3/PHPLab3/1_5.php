<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Gallery of Cats</title>
  <style>
    header,
    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 1em;
    }

    nav {
      text-align: center;
      margin: 10px;
    }

    nav a {
      text-decoration: none;
      color: white;
      margin: 0 10px;
    }

    .content {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      grid-gap: 10px;
      padding: 10px;
    }

    .content img {
      width: 100%;
      height: auto;
    }
  </style>
</head>

<body>
  <header>
    <h1>About Cats</h1>
    <nav>
      <a href="#">About Cats</a> |
      <a href="#">News</a> |
      <a href="#">Contacts</a>
    </nav>
    <input type="search" placeholder="Search...">
  </header>
  <section class="content">
    <h2>#cats</h2>
    <p>Explore a world of cats</p>
    <!-- PHP код для вывода изображений -->
    <?php
    $directory = "image"; // Путь к директории с изображениями
    $images = glob($directory . "/*.jpg"); // Получение списка изображений
    foreach ($images as $image) {
      echo "<img src='" . htmlspecialchars($image) . "' alt='Cat'>";
    }
    ?>
  </section>
  <footer>
    <p>&copy; 2024 Cat Gallery</p>
  </footer>
</body>

</html>