$(document).ready(
    //inicializa o html adicionando os envetos js especificados abaixo
    function()
    {
        $('#bt_delete').click(function()
        {
            Main.delete_registro();
        });
    }
);