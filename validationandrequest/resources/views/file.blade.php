<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}} </li>
                @endforeach
            </ul>
        @endif

        @if(\Session::get('success'))
            <p>{{\Session::get('success')}}</p>
        @endif

        {!! Form::open(['route'=>'update', 'files'=>true])!!}

        {!! Form::file('image'); !!}

          <br>
          {!! Form::submit('save'); !!}
        {!! Form::close();!!}
    </body>
</html>
