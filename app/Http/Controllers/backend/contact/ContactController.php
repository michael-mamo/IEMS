<?php

namespace App\Http\Controllers\backend\contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //function to view feedbacks
    public function FeedbackView(){
        return view('admin.contact.viewFeedback');
    }
    public function ComposeMessageView(){
        return view('admin.contact.composeMessage');
    }
}
