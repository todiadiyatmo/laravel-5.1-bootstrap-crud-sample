<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group @if($errors->has('title')) has-error @endif">
   <label for="title-field">Title</label>
   {!! Form::input('text','title', $tweet->title , ['class'=> 'form-control']) !!}
   @if($errors->has("title"))
    <span class="help-block">{{ $errors->first("title") }}</span>
   @endif
</div>
<div class="form-group @if($errors->has('body')) has-error @endif">
   <label for="body-field">Body</label>
   {!! Form::text('body', $tweet->body , ['class'=> 'form-control']) !!}
   @if($errors->has("body"))
    <span class="help-block">{{ $errors->first("body") }}</span>
   @endif
</div>