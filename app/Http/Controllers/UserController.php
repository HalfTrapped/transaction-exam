<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Redirect;

class UserController extends Controller
{
    public function showAllUsers(){
        $users = User::orderBy('updated_at', 'desc')->get();
        return view('users', ['users' => $users]);
    }

    public function createTransaction(){
        return view('create-transaction');
    }

    public function storeTransaction(Request $request){
        $validated = $request-> validate([
            'id' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'transaction_title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'total_amount' => 'required|string|max:255',
            'transaction_number' => 'required|string|max:255',
            'timestamps' => 'required|date',

        ]);

        $user = new User();
        $user->id = $validated['id'];
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = $validated['password'];
        $user->transaction_title = $validated['transaction_title'];
        $user->description = $validated['description'];
        $user->status = $validated['status'];
        $user->total_amount = $validated['total_amount'];
        $user->transaction_number = $validated['transaction_number'];
        $user->timestamps = now();

        $user->save();
        return redirect()->route('showAllUsers')->with('sucess', 'Transaction completed successfully');
    }

    public function viewTransaction(Request $request){
        $user = User::find($request->id);
        return view('user', ['user' => $user]);
    }

    public function editTransaction(Request $request){
        $user = User::find($request->id);
        return view('edit-transaction', ['user' => $user]);
    }

    public function updateTransaction(Request $request){
        $user = User::find($request->id);
        $validated = $request-> validate([
            'id' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'transaction_title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'total_amount' => 'required|string|max:255',
            'transaction_number' => 'required|string|max:255',
            'timestamps' => 'required|date',

        ]);

        $user = User::find($request->id);

        $user->id = $validated['id'];
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = $validated['password'];
        $user->transaction_title = $validated['transaction_title'];
        $user->description = $validated['description'];
        $user->status = $validated['status'];
        $user->total_amount = $validated['total_amount'];
        $user->transaction_number = $validated['transaction_number'];
        $user->timestamps = now();;
        $user->save();
        return redirect()->route('viewTransaction', ['id' => $user->id])->with('sucess', 'Update completed successfully');
    }

    public function deleteTransaction(Request $request){
        $user = User::find($request->id);
        if($user){
            $user->delete();
        }
        return redirect()->route('showAllUsers')->with('sucess', 'Deleted Transaction successfully');
    }
}
