<!--Details Modal-->
<?php
  require_once '../core/init.php';
  $id=$_POST['id'];
  $id=(int)$id;
  $sql="SELECT * FROM products WHERE id='$id'";
  $result=$db->query($sql);
  $product=mysqli_fetch_assoc($result);
  $brand_id=$product['brand'];
  $sql="SELECT brand FROM brand WHERE id='$brand_id'";
  $brand_query=$db->query($sql);
  $brand=mysqli_fetch_assoc($brand_query);
  $sizestring=$product['sizes'];
  $sizestring=rtrim($sizestring,',');
  $size_array=explode(',',$sizestring);
?>

<?php ob_start();?>
<div class="modal fade details-1" id="details-modal" tabindex="-1" role="dialog" aria-labeledby="details-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-header">

      <button class="close" type="button" onclick="closeModal()" aria-label="Close">
        <span aria-hideen="true">&times;</span>
      </button>
       <h4 class="modal-title text-center" ><?=$product['title'];?></h4>
    </div>
    <div class="modal-body">
      <div class="container-fluid">
        <div class="row col-sm-6" >
          <div class="col-sm-6">
            <div class="center block">
              <img src="<?=$product['image'];?>" alt="<?=$product['title'];?>" class="details img-responsive">
            </div>
          </div>
          </div>
            <h4> Details</h4>
            <p> <?=nl2br($product['description']);?></p>
            <hr>
            <p>Price:$<?=$product['price'];?></p>
            <p> Brand:<?=$brand['brand'];?></p>

            <form action="add_cart.php" method="post">
            <div class="form-group">
              <div class="col-xs-3">
                <label for="quantity">Qty:</label>
                <input type="text" class="form-control" id="quantity" name="quantity">
              </div>
            </div>
            <div class="form-group">
              <label for="size"></label>
              <select name="size" id="size" class="form-control">
                <?php foreach($size_array as $string){
                    $string_array=explode(':', $string);
                    $size=$string_array[0];
                    $quantity=$string_array[1];
                    echo '<option value="'.$size.'">'.$size.' ('.$quantity.' In stock)</option>';
                  }?>
                
              </select>
            </div>
            </form>
          </div>
           <div class="modal-footer">
            <button class="btn btn-default" onclick="closeModal()">Close</button>
            <button class="btn btn-warning" type="submit"><span class="glaphicon glaphicon-shopping-cart"></span>Add to cart</button>
          </div>
        </div>
    </div>


</div>
<script>
function closeModal(){
  jQuery('#details-modal').modal('hide');
  setTimeout(function(){
    jQuery('#details-modal').remove();
    jQuery('.modal-backdrop').remove();
  },500)
}
</script>
<?php echo ob_get_clean();?>