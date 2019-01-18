<?php
class SiteResultsProvider{
private $con;
public function __construct($con){
      $this->con = $con;

}
public function getNumResults($term){
    $query = $this->con->prepare("SELECT COUNT(*) as total 
                                     FROM sites WHERE title LIKE :term
                                     OR url LIKE :term
                                     OR keywords LIKE :term");
    $query->bindParam(":term",$term);
}



}





?>