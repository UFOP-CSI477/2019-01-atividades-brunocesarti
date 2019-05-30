<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Lista de estados</title>
</head>
<body>
<table border="1">
    <tr><td>ID</td><td>Sigla</td><td>Estado</td></tr>
    <?php

    while ($e = $estados->fetch()) {
        echo "<tr>". "<td>".$e['id']."</td>"."<td>".$e['nome']."</td>". "<td>".$e['sigla']."</td>"."</tr><br>";
    }
    ?>
</table>
</body>
</html>