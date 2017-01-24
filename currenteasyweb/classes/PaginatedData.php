<?php
include_once('Pagination.php');
class PaginatedData{

	public $query;
	public $records_per_page;
    public $newquery;

	public  function  __construct($pagination_query,$record_set){
		  $this->query = $pagination_query;       
        $this->records_per_page=$record_set;    
	}

	public function pagination_link(){
 $this->newquery = Pagination::paging($this->query,$this->records_per_page);
        Pagination::paginglink($this->query,$this->records_per_page);  
        return  Pagination::dataview($this->newquery);
	}
}
//$pob=new Test();
//  $pobj=$pob->pagination_link();
// foreach($pobj as $viewd){
// echo $viewd['name']."<br>";
// }
?>