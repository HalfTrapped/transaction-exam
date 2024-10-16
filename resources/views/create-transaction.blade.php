<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Transaction</title>
</head>
<body>
    <h1>CREATE TRANSACTIONS</h1>
    <form action="{{ route('storeTransaction') }}" method="POST">
        @method('POST')
        @csrf
        <label for="name">Name: </label>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email: </label>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password" required><br>
        <!--<label for="id">ID: </label>
        <input type="number" id="idName" name="idName" required><br>-->
        <label for="transaction_title">Transaction Title: </label>
        <input type="text" id="tranTitle" name="tranTitle" required><br>
        <label for="description">Description: </label>
        <input type="text" id="desc" name="desc" required><br>
        <label for="status">Status: </label>
        <select type="select" id="status" name="status" required>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
        </select><br>
        <label for="total_amount">Total Amount: </label>
        <input type="text" id="totAmount" name="totAmount" required><br>
        <!--<label for="transaction_number">Transaction Number: </label>
        <input type="text" id="tranNum" name="tranNum" required><br>-->
        <!--<label for="timestamp">Created at: </label>
        <input type="date" id="timestamp" name="timestamp" required><br>-->

        <button type="submit">Submit Transaction</button>
    </form>
    <form action="{{ route('showAllUsers') }}" method="GET">
        <button type="submit">Back to Transactions</button>
    </form>
    
</body>
</html>