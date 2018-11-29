<?php

class profile{

  public $id;

  public $name = 'Mark Zuckerberg';
  public $school = 'Harvard';
  public $status = 'Single';
  public $sex = 'Male';
  public $residence = 'San Francisco, CA';
  public $birthday = '14/05/1984';
  public $hometown = 'Palo Alto';
  public $highschool = 'MIT';
  public $email = 'zuck@facebook.com';
  public $screenname = 'zuck';
  public $mobile = '5551234';
  public $website = "facebook.com";
  public $lookingfor = 'Female';
  public $interestedin = 'Woman';
  public $relstatus = 'Single';
  public $political = 'Liberal';
  public $interests = 'Traveling, Reading';
  public $music = 'Hip Hop';
  public $defaultpic = 'default.jpg';

  public $profile = array(
    "name"=>"Mark Zuckerberg"
  );

  public function __construct($id) {
    $this->id = $id;
  }

  public function get($key){
    return $this->profile[$key];
  }

}

?>
