<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    //
    public function insert(Request $request)
    {

        $count = count(Message::where('user_id',Auth::id())->get());

        if ($count >= 5)
            Message::where('user_id',Auth::id())->delete();

        date_default_timezone_set('Europe/Berlin'); // For Germany
        $time = date('h:i:s a');
        $request->validate([
            'text' => 'required|min:4'
        ]);
        Message::create([
            'user_id' => Auth::id(),
            'text' => $request->text,
            'time' => $time,
        ]);

        return redirect()->back()->with('response', 'Message created successfully');
    }
    public function display()
    {
        $messages = Message::where('user_id', Auth::id())->get();

        $user = User::where('id',Auth::id())->first();

        $username = $user->name;

        return view('index', compact('messages','username'));
    }
    public function delete($id)
    {
        $message = Message::where('id',$id)->first();
        $message->delete();
        return redirect()->back()->with('response', 'Message deleted successfully');
    }
    public function edit($id)
    {
        $message = Message::where('id',$id)->first();
        return view('edit',compact('message'));
    }

    public function update(Request $request,$id)
    {
        date_default_timezone_set('Europe/Berlin'); // For Germany
        $request->validate([
            'text' => 'required|min:4'
        ]);
        $message = Message::where('id',$id)->update([
            'text' => $request->text,
            'time' => date('h:i:s a')
        ]);

        return redirect()->route('show')->with('response', 'Message updated successfully');
    }
}
