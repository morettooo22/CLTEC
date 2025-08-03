<?php
include_once('config_vagas.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = mysqli_query($conexao, "SELECT imagem FROM vagas WHERE id = $id");

    if ($query && mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        header("Content-type: image/jpeg");
        echo $row['imagem'];
    } else {
        echo "Imagem não encontrada.";
    }
} else {
    echo "ID não especificado.";
}
?>
