{if $mesg != null}
    <div class="alert alert-success" role="alert">
     <p>{$mesg}</p>
  </div>
{else}

{/if}
<form action="" method="post">

    <div class="form-group">
        <label  class="form-control-label" for="input1">price</label>
        <input type="number" name="price"  value="{$price}" class="form-control" id="input1" required />
    </div>
    <div class="form-group">
     <button type="submit" class="btn btn-primary">save</button>
    </div>
</form>