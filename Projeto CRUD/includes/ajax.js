$(document).ready(function () {
    $('#tabela').empty(); //Limpando a tabela
    $.ajax({
        type: 'post',		//Definimos o método HTTP usado
        dataType: 'json',	
        url: 'getUsuarios.php',//Definindo o arquivo onde serão buscados os dados
        success: function (dados) {
            for (var i = 0; dados.length > i; i++) {
                //Adicionando registros retornados na tabela
                $('#tabela').append('<tr><td>' + dados[i].id +
                    '</td><td>' + dados[i].username +
                    '</td><td>' + dados[i].nome +
                    '</td><td>' + dados[i].dataNasc +
                    '</td><td>' + dados[i].email +
                    '<td><a href=edit.php?GetID=' + dados[i].id + '>Editar</a></td>' +
                    '<td><a href=deleta_usuario.php?Del=' + dados[i].id + '>Deletar</a></td></tr>');
            }
        }
    });
});
$(document).ready(function () {
    $('#tabela_tarefas').empty(); //Limpando a tabela
    $.ajax({
        type: 'post',		
        dataType: 'json',	
        url: 'getTarefas.php',
        success: function (dados) {
            for (var i = 0; dados.length > i; i++) {
                //Adicionando registros retornados na tabela
                $('#tabela_tarefas').append('<tr><td>' + dados[i].id +
                    '</td><td>' + dados[i].titulo +
                    '</td><td>' + dados[i].descricao +
                    '</td><td>' + dados[i].status +
                    '<td><a href=edit_tarefa.php?GetID=' + dados[i].id + '>Editar</a></td>' +
                    '<td><a href=deleta_tarefa.php?Del=' + dados[i].id + '>Deletar</a></td></tr>');
            }
        }
    });
});
