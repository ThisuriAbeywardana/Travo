<?php

class Unregistered_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }
    function getFaq(){
        return $this->db->runQuery("SELECT faq_id,question,answer FROM faq");
    }
    function getFeedback(){
        return $this->db->runQuery("SELECT feedback_id,date,feedback FROM feedback");
    }
    function addTraveler($traveler_id,  $name,  $email, $contact2, $contact1, $password, $adressLine1, $adressLine2, $city, $otp){
        $this->db->runQuery("INSERT INTO travelers VALUES ('$traveler_id', '$name', '$adressLine1', '$adressLine2', '$city', '$email', '$password', '$contact2', '$contact1', '$otp')");
    }
    function checkForExistingUsers($email){
        return $this->db->runQuery("SELECT email FROM hotels WHERE email = '$email' UNION SELECT email FROM travelers WHERE email = '$email' UNION SELECT email FROM vehicle_owners WHERE email = '$email'");
    }
}
