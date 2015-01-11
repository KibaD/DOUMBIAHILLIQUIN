
<!DOCTYPE html>
<html>

<head>
    <title>EDIT</title>
</head>

<body>
    <h1>Editing {{ $entries->username }}</h1>

    {{ Form::open(array('url'=>'critiques/update', 'class' => 'inline', 'method' => 'PUT')) }}


    <p>
        {{ Form::label('name', 'Name:') }}<br />
        {{ Form::text('name', $entries->username) }}
    </p>

    <p>
        {{ Form::label('email', 'Email:') }}<br />
        {{ Form::textarea('email', $entries->email) }}
    </p>

    <p>
        {{ Form::label('comment', 'Comment:') }}<br />
        {{ Form::textarea('comment', $entries->comment) }}
    </p>

    {{ Form::hidden('id', $entries->id) }}

    <p>{{ Form::submit('Updates Critiques') }}</p>

        {{ Form::close() }}

</body>

</html>