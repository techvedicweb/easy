<?php 
require_once('Common.php');
class Pagination
{
     
  
     public static function dataview($query)
     {
         
         $data_retrive=Common::FetchData($query);
         return $data_retrive;
//         foreach($pago as $viewres){
// echo $viewres['name']."<br>";
//         }
  
 }
 
 public static function paging($query,$records_per_page)
 {
        $starting_position=0;
        if(isset($_GET["page_no"]))
        {
             $starting_position=($_GET["page_no"]-1)*$records_per_page;
        }
        $query2=$query." limit $starting_position,$records_per_page";
        return $query2;
 }
 
 public static function paginglink($query,$records_per_page)
 {
  
        $self = $_SERVER['PHP_SELF'];
  
        $total_no_of_records = Common::NumRows($query);

        if($total_no_of_records > 0)
        {
            ?><tr><td colspan="3"><?php
            $total_no_of_pages=ceil($total_no_of_records/$records_per_page);
            $current_page=1;
            if(isset($_GET["page_no"]))
            {
               $current_page=$_GET["page_no"];
            }
            if($current_page!=1)
            {
               $previous =$current_page-1;
               echo "<a href='".$self."?page_no=1'>First</a>&nbsp;&nbsp;";
               echo "<a href='".$self."?page_no=".$previous."'>Previous</a>&nbsp;&nbsp;";
            }
            for($i=1;$i<=$total_no_of_pages;$i++)
            {
            if($i==$current_page)
            {
                echo "<strong><a href='".$self."?page_no=".$i."' style='color:red;text-decoration:none'>".$i."</a></strong>&nbsp;&nbsp;";
            }
            else
            {
                echo "<a href='".$self."?page_no=".$i."'>".$i."</a>&nbsp;&nbsp;";
            }
   }
   if($current_page!=$total_no_of_pages)
   {
        $next=$current_page+1;
        echo "<a href='".$self."?page_no=".$next."'>Next</a>&nbsp;&nbsp;";
        echo "<a href='".$self."?page_no=".$total_no_of_pages."'>Last</a>&nbsp;&nbsp;";
   }
   ?></td></tr><?php
  }
 }
}
//$paginate = new Pagination();

//for next one pass
     