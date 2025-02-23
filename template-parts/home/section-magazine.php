<?php
$grupo_noticias = get_field("grupo_noticias");
$revista_destacada = $grupo_noticias["revista"];
?>

<?php echo ($revista_destacada); ?>