@extends('layouts.staff_navbar')

@section('title', 'Orders')
@section('content')

<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $("#mytable #checkall").click(function () {
            if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
});

    function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("mytable").deleteRow(i);
}
</script>


<style>
/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
h5{
  text-align: center;
  padding-top: 10px;
}
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-16">
            <h3>Order List</h3>
            <div class="table-responsive">

                <table id="mytable" class="table table-bordered table-striped">
                  
                   <thead> 
                   <th><input type="checkbox" id="checkall" /> Select All</th>
                   <th>Order ID</th>
                   <th>Order Date</th>
                    <th>Total Price</th>
                    <th>Customer Name</th>
                    <th>Customer Email</th>
                    <th>Contact</th>
                    <th>Status</th>
                    <th>Delete</th>
                 </thead>
                 <tbody>

                  @foreach($orders as $order)
                    <tr>
                        <td><input type="checkbox" class="checkthis" /></td>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->order_date }}</td>
                        <td>{{ $order->total }}</td>
                        <td>{{ $order->cust_name }}</td>
                        <td>{{ $order->cust_email }}</td>
                        <td>{{ $order->contact }}</td>

                        <td>
                        <label class="switch">
                          <p>
                          <input id="checkBox" type="checkbox" >
                          <span class="slider round"></span>
                          <h5>Done</h5>
                        </p>
                        </label>
                        </td>

                        <td>
                            <button class="btn btn-danger glyphicon glyphicon-trash delete-item" value="Delete" onclick="deleteRow(this)"></button>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
              </table>


<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>

</div>
</div>
</div>
</div>

<!-- <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      </div>
          <div class="modal-body">
       
       <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>  Are you sure you want to delete this record?</div>
       
      </div>
        <div class="modal-footer ">
        <button type="button" class="btn btn-primary" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
      </div>
        </div> 
  </div>
</div> -->
@endsection