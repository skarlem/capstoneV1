<?php
/**
 * 
 */
class Emergency
{
	private $emergency_id;
	private $fullname;
	private $lat;
	private $lng;
	private $contact_number;
	private $gender;
	private $details;
	private $image;
	private $report_status;
	private $reporter_id;
	private $datereported;

	function setId($id){$this->emergency_id = $id;}
	function setFullname($fullname){$this->fullname = $fullname;}
	function setReporterId($id){$this->reporter_id = $id;}
	function setLat($lat){$this->lat = $lat;}
	function setLng($lng){$this->lng = $lng;}
	function setContactNo($contact_number){$this->contact_number = $contact_number;}
	function setGender($gender){$this->gender = $gender;}
	function setDetails($details){$this->details = $details;}
	function setImage($image){$this->image = $image;}
	function setReportStatus($status){$this->report_status = $status;}
	function setDate($date){$this->datereported = $date;}

	function getId(){return $this->emergency_id;}
	function getFullname(){return $this->fullname;}
	function getReporterId(){return $this->reporter_id;}
	function getLat(){return $this->lat;}
	function getLng(){return $this->lng;}
	function getContactNo(){return $this->contact_number;}
	function getGender(){return $this->gender;}
	function getDetails(){return $this->details;}
	function getImage(){return $this->image;}
	function getReportStatus(){return $this->report_status;}
	function getDate($date){return $this->datereported;}

	public function connectdb(){
		include "connection.php";
	}

	public function save(){
		include "connection.php";
		$values = array(
			'reporter_fullname' 	=> $this->fullname,
			'lat' 					=> $this->lat,
			'lng' 					=> $this->lng,
			'contact_number' 		=> $this->contact_number,
			'reporter_gender' 		=> $this->gender,
			'report_details' 		=> $this->details,
			'report_image' 			=> $this->image,
			'reporter_id' 			=> $this->reporter_id,
			'e_report_status' 		=> $this->report_status,
			'e_report_id' 			=> $this->emergency_id,
			'date_reported'			=> $this->datereported
		);

		pg_insert($conn, 'crime_db.emergency_report', $values);
	}

	public function generateEmergencyId(){
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < 5; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return date("Y")."-".$randomString;
	}

	

	public function getResponder(){
		require_once("connection.php");

		$query = 'SELECT * FROM crime_db.accounts';
		$result = pg_query($conn, $query);

		while ($row = pg_fetch_row($result)) {
			echo $row[3];
			echo "<br />\n";
		}

	}

}