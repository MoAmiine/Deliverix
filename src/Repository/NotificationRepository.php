<?php 

class NotificationRepository extends Notifications{

 public function __construct($id, $contenu, $date_notification, $utilisateur){
    parent::__construct($id, $contenu, $date_notification, $utilisateur);
 }
}