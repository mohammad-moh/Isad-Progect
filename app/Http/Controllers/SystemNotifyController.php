<?php

namespace App\Http\Controllers;

use App\Models\SystemNotify;
use App\Models\User;
use App\Notifications\CreateNoti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class SystemNotifyController extends Controller
{

    public function index() {
    
    }

    public function create() {
        return view('system-notify.create');
    }

    public function store(Request $request){
        $notify = new SystemNotify();
        $notify->incoming_requests = $request->incoming_requests;
        $notify->other_notifications = $request->other_notifications;
        $notify->save();
        $beneficiary = User::where('id','!=',Auth::user()->id)->get();
        // dd($notify );
        Notification::send($beneficiary, new CreateNoti($notify['incoming_requests'], $notify['other_notifications']));
        
        return redirect()->route('notification.create')->with('msg', 'Notification sent successfully');
    }

    public function show($id) {
        $notify = SystemNotify::find($id);
        return view('systemnotify.show', compact('notify'));
    }
    
    public function edit($id) {
        $notify = SystemNotify::find($id);
        return view('systemnotify.edit', compact('notify'));
    }

    public function update(Request $request, $id) {
        $notify = SystemNotify::find($id);
        $notify->incoming_requests = $request->incoming_requests;
        $notify->other_notifications = $request->other_notifications;
        $notify->save();
        return view('systemnotify.show', compact('notify'));
    }

    public function destroy($id) {
        $notify = SystemNotify::find($id);
        $notify->delete();
        return view('systemnotify.index');
    }

    
}