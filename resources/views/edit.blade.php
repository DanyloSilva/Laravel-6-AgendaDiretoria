<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
@extends("app")

@section("titulo", "Editar contato")

@section("conteudo")

    <div class="row my-row">
        <form style="float: right;" action="/contato/delete" method="POST" onsubmit="return confirm('Realmente deseja excluir ?');">
            @csrf
            @method('DELETE')
            <input type="hidden" name="id" value="{{$contato->id}}">
            <button type="submit" class="btn btn-lg btn-danger" id="btn-submit"><i class="fas fa-trash-alt"></i>
                Excluir Contato
            </button>
        </form>
      

    </div>
    <div class="row">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fas fa-user-edit"></i> Editar Contato</h3>
            </div>
            <div class="panel-body">
                @if(session('msg') || session('msgError'))
                    <div class="alert alert-{{ session('msg') ? "success" : "danger" }} alert-dismissible fade in"
                         role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        {{ session('msg') ? session('msg') : session('msgError') }}
                    </div>
                @endif
                <form action="/contato/update" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{$contato->id}}">

                    <div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
                        <label class="control-label">Nome <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nome"
                               value="{{ old('nome') ? old('nome') : $contato->nome }}">
                        <span class="help-block">{{ $errors->first('nome') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('nome1') ? 'has-error' : ''}}">
                        <label class="control-label">Fantasia<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nome1"
                               value="{{ old('nome1') ? old('nome1') : $contato->nome1 }}">
                        <span class="help-block">{{ $errors->first('fantasia') }}</span>
                    </div>


                    <div class="form-group {{ $errors->has('telefone') ? 'has-error' : ''}}">
                        <label class="control-label">Telefone <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="telefone"
                               value="{{ old('telefone') ? old('telefone') : $contato->telefone }}">
                        <span class="help-block">{{ $errors->first('telefone') }}</span>
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                        <label class="control-label">E-mail <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email"
                               value="{{ old('email') ? old('email') : $contato->email }}">
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    </div>
                    <div id="div-cep" class="form-group div-endereco {{ $errors->has('cep') ? 'has-error' : ''}}">
                        <label class="control-label">Cep <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="cep" name="cep"
                               value="{{ old('cep') ? old('cep') : $contato->cep }}">
                        <span class="help-block msg-endereco" id="msg-cep">{{ $errors->first('cep') }}</span>
                    </div>
                    <div class="form-group div-endereco {{ $errors->has('logradouro') ? 'has-error' : ''}}">
                        <label class="control-label">
                            Rua
                            <span class="text-danger">*</span>
                            <span class="fa fa-spinner fa-spin spinner-endereco" style="display: none"></span>
                        </label>
                        <input type="text" class="form-control" id="rua" name="logradouro"
                               value="{{ old('logradouro') ? old('logradouro') : $contato->logradouro }}">
                        <span class="help-block msg-endereco">{{ $errors->first('logradouro') }}</span>
                    </div>

                    <div class="form-group div-endereco">
                        <label class="control-label">
                            Complemento
                            <span class="fa fa-spinner fa-spin spinner-endereco" style="display: none"></span>
                        </label>
                        <input type="text" class="form-control" id="complemento" name="complemento"
                               value="{{ old('complemento') ? old('complemento') : $contato->complemento }}">
                        <span class="help-block msg-endereco">{{ $errors->first('complemento') }}</span>
                    </div>



                    <div class="form-group div-endereco {{ $errors->has('bairro') ? 'has-error' : ''}}">
                        <label class="control-label">
                            Bairro
                            <span class="text-danger">*</span>
                            <span class="fa fa-spinner fa-spin spinner-endereco" style="display: none"></span>
                        </label>

                        <input type="text" class="form-control" id="bairro" name="bairro"
                               value="{{ old('bairro') ? old('bairro') : $contato->bairro }}">
                        <span class="help-block msg-endereco">{{ $errors->first('bairro') }}</span>
                    </div>


                    <div class="form-group div-endereco {{ $errors->has('localidade') ? 'has-error' : ''}}">
                        <label class="control-label">
                            Cidade
                            <span class="text-danger">*</span>
                            <span class="fa fa-spinner fa-spin spinner-endereco" style="display: none"></span>
                        </label>
                        <input type="text" class="form-control" id="cidade" name="localidade"
                               value="{{ old('localidade') ? old('localidade') : $contato->localidade }}">
                        <span class="help-block msg-endereco">{{ $errors->first('localidade') }}</span>
                    </div>
                    <div class="form-group div-endereco {{ $errors->has('uf') ? 'has-error' : ''}}">
                        <label class="control-label">
                            Estado
                            <span class="text-danger">*</span>
                            <span class="fa fa-spinner fa-spin spinner-endereco" style="display: none"></span>
                        </label>
                        <input type="text" class="form-control" id="uf" name="uf"
                               value="{{ old('uf') ? old('uf') : $contato->uf }}">
                        <span class="help-block msg-endereco">{{ $errors->first('uf') }}</span>
                    </div>


                    


        
        
        <div class="form-group div-endereco col-xs-7">
                        
        <form method="post" id="telefone_dynamic"> 

                 <span id="result"></span>
                 <table class="table table-bordered table-striped" id="user_table">
               <thead>
                <tr>
                    <th width="35%">nome</th>
                    <th width="35%">Telefone</th>
                    <th width="30%">Action</th>
                </tr>
               </thead>
               <tbody>

               </tbody>
               <tfoot>
                <tr>
                                <td colspan="2" align="right">&nbsp;</td>
                                <td>
                  @csrf
                  <input type="submit" name="save" id="save" class="btn btn-primary" value="Save" />
                  </form>

                 </td>
                </tr>
               </tfoot>
           </table>
         
        

                    
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-ms btn-success" id="btn-submit"><i class="fas fa-edit"></i> Editar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>


 
</div>

<button type="submit" class="btn btn-lg btn-success" id="btn-submit"><i class="fas fa-edit"></i> Editar</button>

                    
                </form>
            </div>
        </div>
        
    </div>
@endsection




@section("js")
    <script src="{{asset('js/App/ViaCep.js')}}" type="text/javascript"></script>
@endsection

<script>
$(document).ready(function(){

 var count = 1;

 dynamic_field(count);

 function dynamic_field(number)
 {
  html = '<tr>';
        html += '<td><input type="text" name="nome_dynamic[]" class="form-control" /></td>';
        html += '<td><input type="text" name="telefone_dynamic[]" class="form-control" /></td>';
        if(number > 1)
        {
            html += '<td><button type="button" name="remove" id="" class="btn btn-danger remove">Remove</button></td></tr>';
            $('tbody').append(html);
        }
        else
        {   
            html += '<td><button type="button" name="add" id="add" class="btn btn-success">Add</button></td></tr>';
            $('tbody').html(html);
        }
 }

 $(document).on('click', '#add', function(){
  count++;
  dynamic_field(count);
 });

 $(document).on('click', '.remove', function(){
  count--;
  $(this).closest("tr").remove();
 });

 $('#telefone_dynamic').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url:'{{ route("dynamic-field.insert") }}',
            method:'post',
            data:$(this).serialize(),
            dataType:'json',
            beforeSend:function(){
                $('#save').attr('disabled','disabled');
            },
            success:function(data)
            {
                if(data.error)
                {
                    var error_html = '';
                    for(var count = 0; count < data.error.length; count++)
                    {
                        error_html += '<p>'+data.error[count]+'</p>';
                    }
                    $('#result').html('<div class="alert alert-danger">'+error_html+'</div>');
                }
                else
                {
                    dynamic_field(1);
                    $('#result').html('<div class="alert alert-success">'+data.success+'</div>');
                }
                $('#save').attr('disabled', false);
            }
        })
 });

});
</script>