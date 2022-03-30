@extends('master.master')
@section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="panel">

            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Cria Pedido</h3>
                </div>
                <div class="panel-body">
                    <form action="" method="POST">
                    <label for="">Titlu</label>
                    <input type="text" class="form-control" placeholder="text field" id="ti" >
                    <br>
                    <label for="">Numero Pedido</label>
                    <input type="text" class="form-control" value="asecret" id="nu">
                    <br>
                    <label for="">REDASAUN</label>
                    <textarea class="form-control" placeholder="textarea" rows="4" id="editor"></textarea>
                    <br>



                    <label class="fancy-checkbox">
                        <input type="checkbox">
                        <span>Fancy Checkbox 3</span>
                    </label>

                    <button type="submit" class="btn btn-success">Save</button>
                </form>

                </div>
            </div>




        </div>

    </div>

</div>

@endsection

@section('footer')
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#nu' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#ti' ) )
        .catch( error => {
            console.error( error );
        } );
</script>



@stop
