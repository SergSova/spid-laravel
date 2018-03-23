<div class="form-group">
    <img id="holder{{$id}}" style="margin-top:15px;max-height:100px;" src="{{ $model->{$name} }}">
    <div class="input-group">
   <span class="input-group-btn">
     <a id="lfm{{$id}}" data-input="thumb{{$name}}" data-preview="holder{{$id}}" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> {{$title}}
     </a>
   </span>
        <input id="thumb{{$name}}" class="form-control" type="text" name="{{$name}}" value="{{ $model->{$name} }}">
    </div>
</div>
@section('scripts')
    @parent
    <script>
        $('#lfm{{$id}}').filemanager('image');
    </script>
@endsection