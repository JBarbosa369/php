<?php
include "actions.php";
$table_users = [];
if (function_exists('selecionarTabela')) {
    $result = selecionarTabela('usuarios');
    if (is_array($result)) {
        $table_users = $result;
    } elseif ($result instanceof Traversable) {
        $table_users = iterator_to_array($result);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de usuarios</title>
</head>
<body>
    <table>
      <tr>
        <th>id</th>
        <th>nome</th>
        <th>email</th>
        <th>senha</th>
        <th>cargo</th>
      </tr>
      <?php foreach ($table_users as $user):?>
        <tr>
            <td>
                <?php echo $user['id']?>
            </td>

              <td>
                <?php echo $user['nome']?>
            </td>

              <td>
                <?php echo $user['email']?>
            </td>

              <td>
                <?php echo $user['senha']?>
            </td>

              <td>
                <?php echo $user['cargo']?>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>

