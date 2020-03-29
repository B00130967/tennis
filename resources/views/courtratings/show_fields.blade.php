<!-- Rating Field -->
<div class="form-group">
    {!! Form::label('rating', 'Rating:') !!}
    <p>{{ $courtrating->rating }}</p>
</div>

<!-- Comment Field -->
<div class="form-group">
    {!! Form::label('comment', 'Comment:') !!}
    <p>{{ $courtrating->comment }}</p>
</div>

<!-- Courtid Field -->
<div class="form-group">
    {!! Form::label('courtid', 'Courtid:') !!}
    <p>{{ $courtrating->courtid }}</p>
</div>

