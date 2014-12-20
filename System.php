<html>
	<body>
		<?php
			
			class AD
			{
				private $title ;
				private $image ;
				private $description;
				private $adID;
				private $userID;
				private $categoryID;
				// personal info
				private $userName;
				private $userMobNumber;
				private $note;
				
				/////////////////////////
				function getTitle(){
					return $this->title;
				}
				
				function getImage(){
					return $this->image;
				}
				
				function getDescription(){
					return $this->description;
				}
				
				
				function getADID(){
					return $this->adID;
				}
				
				function getUserID(){
					return $this->userID;
				}
				
				function getCategoryID(){
					return $this->categoryID;
				}
				
				//
				function setTitle($t){
					$this->title = $t;
				}
				
				function setImage($i){
					$this->image = $i;
				}
				
				function setDescription($d){
					$this->description = $d;
				}
				
				
				function setADID($adid){
					$athis->dID = $adid ;
				}
				
				function setUserID($uid){
					$this->userID = $uid;
				}
				
				function setCategoryID($cid){
					$this->categoryID =$cid;
				}
				
				function getPersonalInfo(){
					$this->personalInfo = "Username: ".$userName."<br> ";
				}
				
				function setPersonalInfo($un, $mobNum, $not){
					$this->userName = $un;
					$this->userMobNumber = $mobNum;
					$this->note = $not;
				}		
				
			}
			
			////////////////////////////////////////////////////////////////////
			
			class ADList
			{
				private $name;
				private $ID;
				private $userID;
				public $adList;
				
				////////////////////
				
				function getName(){
					return $this->name;
				}
				
				function getID(){
					return $this->ID;
				}
				
				function getUserID(){
					return $this->userID;
				}
				
				function setName($n){
					$this->name = $n;
				}
				
				function setID($id){
					$this->ID = $id;
				}
				
				function setUserID($uID){
					$this->userID = $uID;
				}
				
			}
			//////////////////////////////////////////////////////////
			class User
			{
				private $name;
				private $ID;
				private $e_mail;
				private $password;
				private $faceBook;
				private $logged_in;
				public  $lists;
				////////////////////
			
				function getName(){
					return $this->name;
				}
				
				function getID(){
					return $this->ID;
				}
				
				function getE_mail(){
					return $this->e_mail;
				}
				
				function getPassword(){
					return $this->password;
				}
				
				function getFaceBook(){
					return $this->faceBook;
				}
				
				function getLogged_in(){
					return $this->logged_in;
				}
				////
				function setName($n){
					$this->name = $n;
				}
				
				function setID($id){
					$this->ID = $id;
				}
				
				function setE_mail($e){
					$this->e_mail = $e;
				}
				
				function setPassword($p){
					$this->password= $p;
				}
				
				function setFaceBook($fb){
					$this->faceBook = $fb;
				}
				
				function setLogged_in($l){
					$this->logged_in = $l;
				}
				
				
			}
			////////////////////////////////////////////////////////////
			// car class
			class Car extends AD
			{
				private $engineType;
				private $model;
				private $prices;
				private $noOfkilometers;
				private $subCategoryType;
				
				function getSubCategoryType() 
				{
					return $this->subCategoryType;
				}
				
				function setSubCategoryType($cat) 
				{
					$this->subCategoryType = $cat;
				}
				
				function getEngineType() 
				{
					return $this->engineType;
				}
				
				function setEngineType($engType) 
				{
					$this->engineType = $engeType;
				}
				
				function getModel() 
				{
					return $this->model;
				}
				
				function setModel($mod) 
				{
					$this->model = $mod;
				}

				function getPrices() 
				{
					return $this->prices;
				}
				
				function setPrices($pricess) 
				{
					$this->prices = $pricess;
				}
				
				function getNoOfkilometers() 
				{
					return $this->noOfkilometers;
				}
				
				function setNoOfkilometers($noOfkm) 
				{
					$this->noOfkilometers = $noOfkm;
				}
			}
			//////////////////////////////////////////////////////////////////////////////////////////////
			//class JobOffers
			class JobOffers extends AD
			{
				private $salary;
				private $yearsOfExperince;
				private $jobType;
				private $requiredSkills;
				private $subCategoryType;
				
				function getSubCategoryType() 
				{
					return $this->subCategoryType;
				}
				
				function setSubCategoryType($cat) 
				{
					$this->subCategoryType = $cat;
				}
				
				function getSalary() 
				{
					return $this->salary;
				}
				
				function setSalary($sal) 
				{
					$this->salary = $sal;
				}
				
				function getYearsOfExperince() 
				{
					return $this->yearsOfExperince;
				}
				
				function setYearsOfExperince($YOE) 
				{
					$this->yearsOfExperince = $YOE;
				}
				
				function getJobType() 
				{
					return $this->jobType;
				}
				
				function setJobType($jobTyp) 
				{
					$this->jobType = $jobTyp;
				}
				
				function getRequiredSkills() 
				{
					return $this->requiredSkills;
				}
				
				function setRequiredSkills($reqSkills) 
				{
					$this->requiredSkills = $reqSkills;
				}
			}
			/////////////////////////////////////////////////////////////////////////////////////////////////////////
			//class Home
			class Home extends AD
			{
				private $price;
				private $noOfRooms;
				private $noOfToilets;
				private $area;
				private $address;
				
				
				function getPrice() 
				{
					return $this->price;
				}
				
				function setPrice($prc) 
				{
					$this->price = $prc;
				}
				
				function getNoOfRooms() 
				{
					return $this->noOfRooms;
				}
				
				function setNoOfRooms($nOR) 
				{
					$this->noOfRooms = $nOR;
				}
				
				function getNoOfToilets() 
				{
					return $this->noOfToilets;
				}
				
				function setNoOfToilets($nOT) 
				{
					$this->noOfToilets = $nOT;
				}
				
				function getArea() 
				{
					return $this->area;
				}
				
				function setArea($ar) 
				{
					$this->area = $ar;
				}
				
				function getAddress() 
				{
					return $this->address;
				}
				
				function setAddress($addr) 
				{
					$this->address = $addr;
				}
				
				
				
			}

			echo "Test";
			
		?>
		
		
	</body>
</html>