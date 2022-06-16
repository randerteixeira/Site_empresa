<?php $render('header');

?>
<div class="form_pessoais">
    <h2>Dados Pessoais</h2>
    <form action="<?= $base ?>/novo" method="post">

        <label class="input nome">
            Nome Completo:
            <input type="text" name="nome" class="input_item" id="name">
        </label>
        <label class="input cpf">
            Cpf:
            <input type="number" name="cpf" class="input_item" id="cpf">
        </label>
        <label class="input data">
            data Nascimento :
            <input type="date" name="data_nascimento" class="input_item" id="date_nascimento">
        </label>
        <label class="input nome_mae">
            Nome da Mae :
            <input type="text" name="nome_mae" class="input_item" id="name_mother">
        </label>
        <label class="input cpf_mae">
            cpf mae:
            <input type="number" name="cpf_mae" class="input_item" id="cpf_mother">
        </label>
</div>
<div class="form_enderecos">
    <h2>Dados Pessoais</h2>
    <label class="input rua">
        Rua:
        <input type="text" name="end_rua" class="input_item" id="end_rua">
    </label>
    <label class="input bairro">
        Bairro:
        <input type="text" name="end_bairro" class="input_item" id="end_bairro">
    </label>
    <label class="input complemento">
        complemento:
        <input type="text" name="end_complemento" class="input_item" id="end_complento">
    </label>
    <label class="input numero">
        numero:
        <input type="text" name="end_numero" class="input_item" id="end_numero">
    </label>
    <label class="input cep">
        cep:
        <input type="text" name="end_numero" class="input_item" id="end_numero">
    </label>
    <label class="input bairro">
        bairro:
        <input type="text" name="end_bairro" class="input_item" id="end_bairro">
    </label>
    <label class="input cidade">
        cidade:
        <input type="text" name="end_cidade" class="input_item" id="end_cidade">
    </label>
    <label class="input estado">
        estado:
        <input type="text" name="end_estado" class="input_item" id="end_estado">
    </label>
</div>
<div class="form_usuario">
    <h2>Dados do Usuario</h2>
    <label class="input email">
        email:
        <input type="email" name="dados_email" class="input_item" id="dados_email">
    </label>

    <label class="input telefone">
        Principal telefone:
        <input type="tel" name="dados_telefone1" class="input_item" id="dados_telefone1">
    </label>
    <label class="input telefone">
        telefone responsavel:
        <input type="tel" name="dados_telefone2" class="input_item" id="dados_telefone2">
    </label>
    <label class="input senha">
        Digite senha :
        <input type="tel" name="dados_senha" class="input_item" id="dados_senha">
    </label>
    <label class="input senha">
        Repita a senha :
        <input type="tel" name="dados_senha" class="input_item" id="dados_senha">
    </label>
    <div class="form_dados_curso">
        <h2>dados do curso</h2>
        medio integrado
        <input type="checkbox" name="medio" id="chekcurso">

        superior
        <input type="checkbox" name="superior" id="chekcurso">

        <label class="input curso_superior">
            <h3>superior</h3>
            <select name="curso" id="select_curso">
                <option value="if_gti">Gestão da Tecnologia da Informação</option>
                <option value="if_si">Sistemas de Informação</option>
                <option value="if_mat">licenciatura Matematica</option>
                <option value="if_qui">licenciatura Quimica</option>
                <option value="if_bio">licenciatura Biologia</option>
                <option value="if_bio">licenciatura </option>
                <option value="if_edfisica">licenciatura Educacao Fisica</option>
                <option value="if_medvetrinaria">Medicina Vetrinaria</option>
                <option value="if_engagricula">Engenharia Agricola</option>
                <option value="if_Agronomia">Agronomia</option>

            </select>
        </label>
        <label class="input curso_tecnico_integrado">
            <h3>medio integrado</h3>
            <select name="curso" id="select_curso" class="input_item">
                <option value="if_medio_tecinfo">Ensino medio Tecnico informatica</option>
                <option value="if_medio_tecbio">Ensino medio Tecnico biotecnologia</option>
                <option value="if_medio_tecagric">Ensino medio Tecnico agricola</option>
                <option value="if_medio_tecagrop">Ensino medio Tecnico agropequaria</option>


            </select>
        </label>
        <label class="input matricula">
            matricula if goiano
            <input type="text" name="matricula" class="input_item" id="matricula_if">
        </label>
    </div>

</div>
</form>
<hr>
<?php $render('footer');

?>