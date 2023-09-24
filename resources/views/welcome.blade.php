<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
</head>
<body>
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif


    <form action="{{url('login')}}" method="POST">
        @csrf
        <div>
            <label for ="email"> Email</label>
            <input type="text" id="email" name="email"> 
        </div>
        <div>
            <label for ="password">Password</label>
            <input type="password" id="password" name="password"> 
        </div>

        <button type="submit">Submit</button>

    </form>

</body>
</html>
