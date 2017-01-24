<?php
require_once('Common.php');
         

// Connect to the DB
// store in the DB 
if(!empty($_POST['ok'])) {  
  // first delete the records marked for deletion. Why? Because we don't want to process them in the code below
  if( !empty($_POST['delete_ids']) and is_array($_POST['delete_ids'])) {
    // you can optimize below into a single query, but let's keep it simple and clear for now:
    foreach($_POST['delete_ids'] as $id) {
      $sql = "DELETE FROM assets_form WHERE id=$id && assets_type_id='".$_GET['id']."' ";
      $link->query($sql);
    }
  }

  // now, to edit the existing data, we have to select all the records in a variable.
  $sql="SELECT * FROM assets_form where assets_type_id='".$_GET['id']."' ORDER BY id";
  $result = $link->query($sql);
  
  // now edit them
  while($product = mysqli_fetch_array($result)) {
    // remember how we constructed the field names above? This was with the idea to access the values easy now
    $sql = "UPDATE assets_form SET assets_type_id='".$_GET['id']."' , name='".$_POST['name'.$product['id']]."'
    WHERE id='$product[id]' && assets_type_id='".$_GET['id']."'";   
    $link->query($sql);
  }
  // (feel free to optimize this so query is executed only when a product is actually changed)
  
  // adding new products
  if(!empty($_POST['name'])) {
    foreach($_POST['name'] as $cnt => $qty) {
      $sql = "INSERT INTO assets_form (assets_type_id,name) VALUES ('".$_GET['id']."','".$_POST['name'][$cnt]."');";
      $link->query($sql);
    }
  } 
}

// select existing products here
$sql="SELECT * FROM assets_form where assets_type_id='".$_GET['id']."' ORDER BY id";
$result = $link->query($sql);
?>
  <br><br>   <div class="row">
  <?php
  // let's assume you have the product data from the DB in variable called $products


          $item_id=mysql_real_escape_string($_GET['item_id']);
              $items_d="select form_data from items where items.id='$item_id'";
           $items=Common::FetchData($items_d);
if($items!=''){
foreach ($items as  $items_value){

   $d=unserialize($items_value['form_data']);
  $i=0;

  while($product = mysqli_fetch_array($result)){

    ?>

                <div class="col-sm-6 padding-bottom-10">
                  <label> <?=$product['name']?> </label>
                  <input type="text" name="dynamic_form[]"  class="form-control" value="<?php echo $d[$i];?>" />
                </div>
               
             
                
  <?php 
 $i++;
}


}
}
?>

 </div>



