<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>EDIT TRANSACTION</h1>
    <form action="{{ route('updateTransaction', ['id' => $user->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="name">Name: </label>
        <input type="text" id="name" name="name" value= "{{ $user->name }}" required><br>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required><br>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password" value= "{{ $user->password }}" required><br>
        <!--<label for="id">ID: </label>
        <input type="number" id="idName" name="idName"required><br>-->
        <label for="transaction_title">Transaction Title: </label>
        <input type="text" id="transaction_title" name="transaction_title" value="{{ $user->transaction_title }}" required><br>
        <label for="description">Description: </label>
        <input type="text" id="description" name="description" value="{{ $user->description }}" required><br>
        <label for="status">Status: </label>
        <select type="select" id="status" name="status" value= "{{ $user->status }}" required>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select><br>
        <label for="total_amount">Total Amount: </label>
        <input type="text" id="total_amount" name="total_amount" value="{{ $user->total_amount }}" required><br>
        <!--<label for="transaction_number">Transaction Number: </label>
        <input type="text" id="tranNum" name="tranNum" required><br>-->
        <!--<label for="timestamp">Created at: </label>
        <input type="date" id="timestamp" name="timestamp" value="{{ $user->timestamp }}" required><br>-->

        <button type="submit">Update Transaction</button>
    </form>

    
</body>
</html>