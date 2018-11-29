<?php
class profile{

  public $id;

  public $name = "";
  public $member_sine = "";
  public $last_update = "";
  public $school = "";
  public $status = "";
  public $sex = "";
  public $birthday = "";
  public $home_town = "";
  public $high_school = "";
  public $email = "";
  public $screenname = "";
  public $mobile = "";
  public $website = "";
  public $looking_for = "";
  public $interested_in = "";
  public $relationship = "";
  public $political_view = "";
  public $interests = "";
  public $favourite_music = "";
  public $default_pic = "";

  public $profile = array();

  public function __construct($id) {
    $this->id = $id;

    /*
    BEGIN DATA
    select * from users where id = $id
    */
    $zuck = array(
      "name"=>"Mark Zuckerberg",
      "member_since"=>"01/01/2004",
      "last_update"=>"01/01/2005",
      "school"=>"Harvard",
      "status"=>"Student",
      "sex"=>"Male",
      "birthday"=>"14/05/1984",
      "home_town"=>"San Francisco, CA",
      "high_school"=>"MIT",
      "email"=>"zuck@facebook.com",
      "screenname"=>"zuck",
      "mobile"=>"5551234",
      "looking_for"=>"Female",
      "interested_in"=>"Woman",
      "relaionship"=>"Single",
      "political_view"=>"Liberal",
      "interests"=>"Traveling, Reading",
      "favourite_music"=>"Hip Hop",
      "default_pic"=>"default.jpg",
    );
    foreach ($zuck as $key => $value) {
      $profile[$key]=$value;
    };
    /* END DATA */

    $this->name = $profile["name"];
    $this->member_since = $profile["member_since"];
    $this->last_update = $profile["last_update"];
    $this->school = $profile["school"];
    $this->status = $profile["status"];
    $this->sex = $profile["sex"];
    $this->birthday = $profile["birthday"];
    $this->home_town = $profile["home_town"];
    $this->high_school = $profile["high_school"];
    $this->email = $profile["email"];
    $this->screenname = $profile["screenname"];
    $this->mobile = $profile["mobile"];
    $this->looking_for = $profile["looking_for"];
    $this->interested_in = $profile["interested_in"];
    $this->reltionship = $profile["relationship"];
    $this->political_view = $profile["political_view"];
    $this->interests = $profile["interests"];
    $this->favourite_music = $profile["favourite_music"];
    $this->default_pic = $profile["default_pic"];

  }

  public function get($key){
    return $this->profile[$key];
  }

}

?>
