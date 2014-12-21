<html>
  <head>
    <title>Register</title>
  </head>
  <body>

    {!! Form::open(array('action' => 'RegisterController@registerMember', 'method' => 'post')) !!}

    {!! Form::text('name') !!}

    {!! Form::email('email') !!}

    {!! Form::password('password') !!}

    {!! Form::submit('Update!') !!}

    {!! Form::close() !!}
  </body>
</html>
