<?php 
	
class user{
	private $name="gaurav";
	private $email;
	private $gender;
	private $mobile;
	private $nationality;
	private $education;
	private $address;
	private $birthdate;
	private $mode;
	private $filename;
	private $list_of_details;
	private $flag=0;
	
	public function __construct($nam,$em,$gen,$birth,$mob,$nat,$edu,$add,$mo,$file){
			$this->name=$nam;
			$this->email=$em;
			$this->gender=$gen;
			$this->mobile=$mob;
			$this->nationality=$nat;
			$this->education=$edu;
			$this->address=$add;
			$this->birthdate=$birth;
			$this->mode=$mo;
			$this->filename=$file;
			//echo $this->name."  ".$this->email;
			//die();
	}
	public function make_array(){ 			//function to make the array which is to be store in the file
		
		$this->list_of_details=array($this->name,$this->email,$this->address,$this->gender,$this->birthdate,$this->mobile,$this->nationality,$this->education,$this->mode);
	
	}
	public function check_data(){			//checking if email is already present in the csv 
		
		 $file = fopen($this->filename,"r");
		 if($file){
			 while(!feof($file))
			 {
				$a=fgetcsv($file);
				if($a[1]==$this->email){
					
					//echo "this email is already registered";
					$this->flag=1;
					break;
				}
			 }
			 fclose($file);
		 }
		 
		 if($this->flag==0){
			 return 1;
		 }
		 else{
			 return 0;
		 }
	}
	public function entry_in_file()			//enter the data in the file
	{
		if($this->check_data()){
		$file=fopen($this->filename,"a");
		if(fputcsv($file,$this->list_of_details)){
			return 1;
		}
		
		fclose($file);
		}
		else{
			return 0;
		}
	}
	
	
	public function delete_user($email,$file){
		$arr=array();
		/*
		$file=fopen($file,"r");
		$user_to_be_deleted=-1;
		$i=0;
		*/
	
		$removed = false;
		$fptemp = fopen("1.csv", "a+");
		$list=array();
		if (($handle = fopen($file, "r")) !== FALSE) {
			while (($data = fgetcsv($handle)) !== FALSE) {
			if ($email != $data[1] ){
				$list = $data;
				fputcsv($fptemp, $list);
				$removed = true;
			}
		}
		}
		fclose($handle);
		fclose($fptemp);
		unlink($file);
		rename("1.csv", $file);
		return 1;
	
	}
	
	public function update($user,$name,$email){
		
	}
	public function get_info($email,$file){
		
		$list=array();
		if (($handle = fopen($file, "r")) !== FALSE) {
			while (($data = fgetcsv($handle)) !== FALSE) {
			if ($email == $data[1] ){
				$list = $data;
				break;
			}
		}
		}
		fclose($handle);
		
		return $list;
	}
	
	public function update_user_info($preemail,$info,$file)
	{
		$removed = false;
		$fptemp = fopen("1.csv", "a+");
		$list=array();
		if (($handle = fopen($file, "r")) !== FALSE) {
			while (($data = fgetcsv($handle)) !== FALSE) {
			if ($preemail != $data[1] ){
				$list = $data;
				fputcsv($fptemp, $list);
			}
			else{
				fputcsv($fptemp,$info);
				
			}
		}
		}
		fclose($handle);
		fclose($fptemp);
		unlink($file);
		rename("1.csv", $file);
		
		return 1;
	}
	
	
	
	
	
}
	
	
	

?>