<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Requisitos Funcionais do Subsistema</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
    <?php include '../bd/Subsistema.php';
			$subsistema = new Subsistema();
			$dados = $subsistema->listar();
			?>
    
        <h1 style="margin-left: 30%">Cadastro de Requisitos Funcionais do Subsistema</h1>
        <form style="margin-left: 42%;">
            <label>Requisito do Sistema</label><br/>
            <input type="text" value="" id="nome" name="nome">
            <br/><label>Sistema</label><br/>
            
            <select name="idsistema" id="idsistema">
			<?php 
	            	foreach($dados['sistema'] as $valores){ 
            ?>
            <option onclick="preEncheDeptoN2()" value="<?php echo $valores->id?>"><?php echo $valores->nome?></option>
					<?php }?>
			</select>
            <br/><label>Subsistema</label><br/>
            <select name="idSubsistema" id="idSubsistema">
			<?php foreach ($dados['subsistema'] as $valores){
			?>
            <option value="<?php echo $valores->id.'+'.$valores->idsistema?>"><?php echo $valores->nome?></option>
					<?php }?>
			</select>
            <br/><input type="submit" value="Gravar" id="gravar" style="margin-left: 40px;">
        </form>
    </body>
</html>
