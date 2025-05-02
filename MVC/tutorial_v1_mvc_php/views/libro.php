<h1>LIBROS</h1>
<ul>
  <?php foreach ($libros as $libro): ?>
  <li><?php echo $libro["Titulo"]; ?> | Autor: <?php echo $libro["Autor"]; ?></li>
  <?php endforeach; ?>
</ul>