<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit student data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="editcode.php" method="POST">
      <div class="modal-body">

      <div class="form-group">
    <label>Serial Number</label>
    <input type="text" name="serialnumber" id="serialnumber" class="form-control" placeholder="Enter your serial number">
    </div>

    

  <div class="form-group">
    <label>Purchase Date</label>
    <input type="date" name="purchasedate" id="purchasedate" class="form-control" placeholder="Enter your purchase date">
    </div>

  <div class="form-group">
  <label>Modal Number</label>
    <input type="text" name="modalnumber"  id="modalnumber" class="form-control" placeholder="Enter modal number">
    </div>
  
    <div class="form-group">
 <div class="image-upload-wrap">
 <input type="file" name="productimage" class="file-upload-input" id="productimage" >
 </div>
 </div>
 
    <div class="form-group">
  <label>Warranty status</label>
    <input type="text" name="warrantystatus" id="warrantystatus" class="form-control" placeholder="Enter warranty status">
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
      </div>

      </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
$(document).ready(function (){
$('.editbtn').on('click',function(){
$('#editmodal').modal('show');
$tr = $(this).closest('tr');
var data =$tr.children("td").map(function(){
    return $(this).text();
}).get();
console.log(data);
$('#serialnumber').val(data[0]);
$('#purchasedate').val(data[1]);
$('#modalnumber').val(data[2]);
$('#productimage').val(data[3]);
$('#warrantystaus').val(data[4]);
});
});
</script>
</body>

</html>
