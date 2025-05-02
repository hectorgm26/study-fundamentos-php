<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Usuarios</title>
</head>
<body>

    <table>

        <thead>
            <tr>
                <td>Usuario</td>
                <td>Contraseña</td>
                <td>Nombre Real</td>
            </tr>
        </thead>

        <tbody>
            <?php
                foreach($usuarios as $user) {
                  echo "<tr>";
                  echo "<td>" . $user['username'] . "</td>"; // El punto es para concatenar
                  echo "<td>" . $user['password'] . "</td>";
                  echo "<td>" . $user['nombre'] . "</td>";
                  echo "<tr>";
                }
            ?>
        </tbody>
    </table>

</body>
</html>