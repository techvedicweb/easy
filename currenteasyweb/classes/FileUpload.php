<?php

require_once('Common.php');
require_once('UserDirectory.php');

class FileUpload{

	public   $create_directory_name;
	public   $image_name;
	public   $image_var;
	public   $image_name_tmp;
	public   $upload_filesize;
	public   $rename_file;
  public   $file_size_value;
   
    public $directory_create;

    public function __construct(){

                  if(!isset($_SESSION)){

             session_start();
    }

}



	public  function createdirectory($get_directory_name){
	
		$this->create_directory_name=$get_directory_name;
 	$this->create_directory_name="../docs/".$_SESSION['userid']."/".$this->create_directory_name."/";

if (file_exists($this->create_directory_name)) {
       // echo "The directory".self::$directory_name." exists";
    } else {
        mkdir("../docs/".$this->create_directory_name, 0777);
        //echo "The directory ".self::$directory_name." was successfully created.";
    }

	}

  public function getimageproperty($img,$img_tmp,$img_type,$img_size,$img_size_value){
        $this->image_name=$img;
        $this->image_name_tmp=$img_tmp;
        $this->image_type=$img_type;
        $this->upload_filesize=$img_size;
        $this->file_size_value=$img_size_value;

  }


	public  function imagetype(){
 $allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".",$this->image_name);
$extension = end($temp);
if ((($this->image_type == "image/gif")
|| ($this->image_type== "image/jpeg")
|| ($this->image_type == "image/jpg")
|| ($this->image_type == "image/pjpeg")
|| ($this->image_type == "image/x-png")
|| ($this->image_type  == "image/png"))
&& in_array($extension, $allowedExts)){
  
  $image_type_test=1;      
    return $image_type_test;
} 

	}

		public  function renamefile(){
           $addtional="1";
        while (file_exists($this->image_var)) {
    $info=pathinfo($this->image_var);
    $this->image_var=$info['dirname']."/".$info['filename'].$addtional.'.'.$info['extension'];
    $this->image_name=$info['filename'].$addtional.'.'.$info['extension'];
}

$f_rename=1;

return $f_rename;

	}

	public  function filesize(){

if ($this->upload_filesize > $this->file_size_value) {
   
    return 0;
}

else{
  return 1;
}


	}

	public  function uploadfile(){

move_uploaded_file($this->image_name_tmp,$this->image_var);

	}

public function file_error_test(){


     $this->image_var=$this->create_directory_name.$this->image_name;

$imagetype_check=$this->imagetype();
if($imagetype_check==1){

      $rename_file_check=$this->renamefile();
      if($rename_file_check==1){

 $upload_size_file_check=$this->filesize();


if($upload_size_file_check==1){
  $upload_file_check=$this->uploadfile();
return "Success";
}

else{

  return "File Size Too Large";
}


      }
      else{

        return "File Already Exists";
      }

    }

    else{

      return "Invalid Image Type";
    }



  }




}


?>