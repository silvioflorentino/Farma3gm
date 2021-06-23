
<div id="formCad">

<form id="formulario" method="Post">

<?=isset($msg)?$msg:""?>


<div class="mb-3">
    <label for="inputProduto" class="form-label">Produto</label>
    <input type="text" name="produto" class="form-control" id="inputProduto">
</div>

<div class="mb-3">
    <label for="inputQtd" class="form-label">Quantidade</label>
    <input type="text" name="qtd" class="form-control" id="inputQtd" >
</div>

<div class="mb-3">
    <label for="inputValor" class="form-label">Valor</label>
    <input type="text" name="valor" class="form-control" id="inputValor">
</div>

<div class="mb-3">
<input type="submit" value="Salvar" class="btn btn-info">
</div>

</form>

</div>