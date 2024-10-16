<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users page</title>
</head>
<body>
    <h1>Users Page</h1>

    <form action="{{ route('createTransaction') }}" method="GET">
        @method('GET')
        @csrf
        <button type="submit">Create User</button>
    </form>
    <div>
        @foreach ( $users as $user )
            <div>Name: {{ $user->id }}</div>
            <div>Name: {{ $user->name }}</div>
            <div>email: {{ $user->email }}</div>
            <!--<div>password: {{ $user->password }}</div>-->
            <div>id: {{ $user->id }}</div>
            <div>transaction title: {{ $user->transaction_title }}</div>
            <div>description: {{ $user->description }}</div>
            <div>status: {{ $user->status }}</div>
            <div>total amount: {{ $user->total_amount }}</div>
            <div>transaction number: {{ $user->transaction_number }}</div>
            <!--<div>Name: {{ $user->timestamps }}</div>-->

            
            <form action="{{ route('viewTransaction', ['id' => $user->id]) }}" method="GET">
                @method('GET')
                <button type="submit">view User</button>
            </form>
           
            

            <hr>
        @endforeach

    </div>  
</body>
</html>