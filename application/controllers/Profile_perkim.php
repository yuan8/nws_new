<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_perkim extends CI_Controller {

  public function index(){


    return view('profile_perkim',['title'=>'Profile Sanitasi']);
  }

}
