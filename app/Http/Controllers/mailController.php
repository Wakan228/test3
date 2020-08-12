<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class mailController extends Controller
{
  public  function send()
  {
  	Mail::send(['text' => 'mail'] , ['name' , 'Forest'] ,function ($message){
  		$message->to('591997823f-fcb97b@inbox.mailtrap.io' , 'Save Forest')->subject('Message');
  		$message->from('591997823f-fcb97b@inbox.mailtrap.io' , 'Save Forest');
  	});
  	$delivered = 1;
    return view('index',compact('delivered'));
  }
 }
