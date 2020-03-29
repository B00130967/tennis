<div class="table-responsive">
    <table class="table" id="courtratings-table">
        <thead>
            <tr>
                <th>Rating</th>
        <th>Comment</th>
        <th>Courtid</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($courtratings as $courtrating)
            <tr>
                <td>{{ $courtrating->rating }}</td>
            <td>{{ $courtrating->comment }}</td>
            <td>{{ $courtrating->courtid }}</td>
                <td>
                    {!! Form::open(['route' => ['courtratings.destroy', $courtrating->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('courtratings.show', [$courtrating->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('courtratings.edit', [$courtrating->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
