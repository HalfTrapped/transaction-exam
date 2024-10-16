<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Page</title>
</head>
<body>
    <h1>Client Page</h1>
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
    <hr>

    <form action="{{ route('deleteTransaction', ['id' => $user->id]) }}" method="Post"
        onsubmit="return confirm('Are you sure you want to delete this transaction?')">
        @method('DELETE')
        @csrf
        <button type="submit">Delete User</button>
    </form>

    <form action="{{ route('showAllUsers')}}" method="GET">
            <button type="submit">Back to users</button>
    </form>

    <form action="{{ route('editTransaction', ['id' => $user->id]) }}" method="GET">
            <button type="submit">Edit User</button>
    </form>
        
</body>
</html>