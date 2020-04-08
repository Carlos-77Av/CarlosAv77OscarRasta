<h1>Lista de Categorias</h1>
<table>
    <tr>
        <td>
            Codigo de Categoria
        </td>
        <td>
            Categoria
        </td>
    </tr>
<?php
    while ($categoria = $categorias->fetch_object()):?>
    <tr>
        <td>
            <?=$categoria->id_categoria?>
        </td>
        <td>
            <?=$categoria->categoria?>
        </td>
    </tr>
    <?php endwhile; ?>
</table>