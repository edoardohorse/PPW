<div class="custom-file mt-3 mb-4">




    @if($errors->has($input_name))
        <input type="file" class="custom-file-input is-invalid was-validated" name="{{$input_name}}" id="{{$input_name}}">
        <label class="custom-file-label" for=" {{ $input_name  }} "> {{ $label  }}  </label>
        <span class="invalid-feedback d-block" role="alert">
            {{$errors->first( $input_name )}}
        </span>
    @else
        @if(old($input_name) == '')
            <input type="file" class="custom-file-input" name="{{$input_name}}" id="{{$input_name}}">

        @else
            <input type="file" class="custom-file-input  is-valid" name="{{$input_name}}" id="{{$input_name}}">
        @endif

            <label class="custom-file-label" for=" {{ $input_name  }} "> {{ $label  }}  </label>
    @endif

</div>
<script>

$('#{{$input_name}}').on('change',function(){
//get the file name
//     debugger
var fileName = this.files[0].name;
//replace the "Choose a file" label
$(this).next('.custom-file-label').html(fileName);
})
</script>
