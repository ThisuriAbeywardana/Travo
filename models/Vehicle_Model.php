<?php
    class Vehicle_Model extends Model {
        function __construct () {
            parent::__construct();
        }
        function getFaq(){
            return $this->db->runQuery("SELECT faq_id,question,answer FROM faq");
        }
        function getVehicleDetails($user){
            //return $this->db->runQuery("SELECT * FROM vehicles");
           return $this->db->runQuery("SELECT vehicles.*, vehicle_owners.* FROM vehicles INNER JOIN vehicle_owners ON vehicles.owner_id = vehicle_owners.owner_id WHERE vehicle_owners.email = '$user' ");
        }
        function getOwnerDetails($user){
            return $this->db->runQuery("SELECT * FROM vehicle_owners WHERE email='$user'");
        }
        function addVehicle($owner_id,$vehicle_id, $city,$vehicle_no, $type,$Vehicle_model,$no_of_passengers,$price_for_1km,$price_for_day,$driver_type,$driver_charge,$ac,$image,$driver_name,$driver_contact1,$driver_contact2){
            return $this->db->runQuery("INSERT INTO vehicles (vehicle_id, vehicle_no, type, vehicle_model, city, owner_id, price_for_1km, price_for_day, driver_type, driver_charge, ac, no_of_passengers, vehicle_image, driver_name, driver_contact1, driver_contact2) VALUES ('$vehicle_id', '$vehicle_no', '$type', '$Vehicle_model', '$city', '$owner_id', '$price_for_1km', '$price_for_day', '$driver_type', '$driver_charge', '$ac', '$no_of_passengers', '$image', '$driver_name', '$driver_contact1', '$driver_contact2')");
        }
    }