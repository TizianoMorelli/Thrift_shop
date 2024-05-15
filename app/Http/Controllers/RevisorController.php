<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class RevisorController extends Controller
{
   public function index(){
    $announcement_to_check = Announcement::where('is_accepted', null)->first();
    return view('revisor.index',compact('announcement_to_check'));
   }

   public function reviseAnnouncements(){
    $announcements_to_revise = Announcement::whereNotNull('is_accepted')->get();
   //  $announcement_to_revise = DB::table('announcements')->whereNotNull('is_accepted')->get();
   //  dd($announcement_to_revise);
    return view('revisor.revise',compact('announcements_to_revise'));
   }

   public function acceptAnnouncement(Announcement $announcement){
      $announcement->setAccepted(true);
      return redirect()->back()->with('message', 'Annuncio approvato');
   }

   public function rejectAnnouncement(Announcement $announcement){
      $announcement->setAccepted(false);
      return redirect()->back()->with('message', 'Annuncio rifiutato');
   }

   public function becomeRevisor() {
      Mail::to('admin@thiftshop.it')->send(new BecomeRevisor(Auth::user()));
      return redirect()->back()->with('message', 'La richiesta di diventare revisore è stata inviata, risponderemo al più presto.');
   }

   public function makeRevisor(User $user) {
      Artisan::call('app:make-user-revisor', ["email"=>$user->email]);
      return redirect('/')->with('message', 'L\'utente è diventato revisore');
   }

}
