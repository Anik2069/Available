<!DOCTYPE html>
<html lang="en">


<!-- basic-form.html  21 Nov 2019 03:54:41 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Atlas Software Park</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/user.png"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello Sarah Smith</div>
              <div class="dropdown-divider"></div>
              <a href="auth-login.html" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span
                class="logo-name">ASP</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Main Menu</li>
            <li class="dropdown">
              <a href="index.html" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown active">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="file-text"></i><span>Daily Work</span></a>
              <ul class="dropdown-menu">
                <li class="active"><a class="nav-link" href="work.html">Order</a></li>
                <li><a class="nav-link" href="return_list.html">Return</a></li>
              </ul>
            </li>
            <li><a class="nav-link" href="record.html"><i data-feather="file-text"></i><span>All Record</span></a></li>
            <li><a class="nav-link" href="dsr.html"><i data-feather="user-plus"></i><span>DSR</span></a></li>
            <li><a class="nav-link" href="group.html"><i data-feather="award"></i><span>Group Add</span></a></li>
            <li><a class="nav-link" href="products.html"><i data-feather="plus-square"></i><span>Add Product</span></a></li>
            <li class="menu-header">Additional</li>
            <li><a class="nav-link" href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
            <li><a class="nav-link" href="#"><i data-feather="log-out"></i><span>Log Out</span></a></li>
          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card">
                  <div class="card-header">
                    <h4>DSR Details</h4>
                  </div>
                  <div class="card-body">
                    <div class="py-4">
                      <p class="clearfix">
                        <span class="float-left">
                          Date
                        </span>
                        <span class="float-right text-muted">
                          30-05-1998
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Phone
                        </span>
                        <span class="float-right text-muted">
                          (0123)123456789
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Name
                        </span>
                        <span class="float-right text-muted">
                          Arif Uddin
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Rute or Area
                        </span>
                        <span class="float-right text-muted">
                          1/32, Muhammodpur
                        </span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                  <div class="card-header">
                    <h4>Products Listing</h4>
                  </div>
                  <div class="card-body">
                    <form method="post" id="insert_form">
                   <div class="table-repsonsive">
                    <span id="error"></span>
                    <table class="table table-striped" id="item_table">
                     <tr>
                      <th>Select Group</th>
                      <th>Product Name</th>
                      <th>Quantity</th>
                      <th><button type="button" name="add" class="btn btn-success btn-sm add"><span class="fas fa-plus"></span></button></th>
                     </tr>
                    </table>
                    <div align="left">
                     <button class="btn btn-primary">Listed</button>
                    </div>
                   </div>
                    </form>
                    <!-- <div class="card-body p-0">
                      <div class="table-responsive">
                        <table class="table table-striped table-md">
                          <thead>
                              <th></th>
                              <th>Select Group</th>
                              <th>Product Name</th>
                              <th>Quantity</th>
                          </thead>
                          <tbody id="myTable">
                            <tr id="myRow">
                              <td></td>
                              <td>
                                <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                              </select>
                            </td>
                              <td>
                                <select id="inputState" class="form-control">
                                  <option selected>Choose...</option>
                                  <option>...</option>
                                </select>
                              </td>
                              <td>
                                <input type="text" class="form-control" id="inputZip">
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Products List</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Products Group</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Unit Price</th>
                            <th>Price</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              1
                            </td>
                            <td>Pran</td>
                            <td>Juice</td>
                            <td>2 Carton</td>
                            <td>1500</td>
                            <td>3000</td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                          </tr>
                          <tr>
                            <td>
                              2
                            </td>
                            <td>Pran</td>
                            <td>Juice</td>
                            <td>2 Carton</td>
                            <td>1500</td>
                            <td>3000</td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                          </tr>
                          <tr>
                            <td>
                              3
                            </td>
                            <td>Pran</td>
                            <td>Juice</td>
                            <td>2 Carton</td>
                            <td>1500</td>
                            <td>3000</td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                          </tr>
                          <tr>
                            <td>
                              4
                            </td>
                            <td>Pran</td>
                            <td>Juice</td>
                            <td>2 Carton</td>
                            <td>1500</td>
                            <td>3000</td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                          </tr>
                          <tr>
                            <td>
                              5
                            </td>
                            <td>Pran</td>
                            <td>Juice</td>
                            <td>2 Carton</td>
                            <td>1500</td>
                            <td>3000</td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td> <b>Total Amount</b> </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td> <b>15000 BDT</b> </td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <script>
$(document).ready(function(){

 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tr>';
  html += '<td><select name="item_unit[]" onchange="myfun(this.value)" class="form-control item_unit">
  <option value="">-----</option> 
  <option value="">Pran</option>
  <option value="">-----</option>
  </select></td>';
  html += '<td><select name="item_unit[]" 
  class="form-control item_unit">
  <option value="">------</option>
   <option value="">-----</option>
   <option value="">Oil</option></select>
   </td>';
  html += '<td><input type="text" name="item_quantity[]" class="form-control item_quantity" /></select></td>';
  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="fas fa-minus"></span></button></td></tr>';
  $('#item_table').append(html);
 });

 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });

 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.item_name').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Name at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });

  $('.item_quantity').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Item Quantity at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });

  $('.item_unit').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select Unit at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  var form_data = $(this).serialize();
  if(error == '')
  {
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     if(data == 'ok')
     {
      $('#item_table').find("tr:gt(0)").remove();
      $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
     }
    }
   });
  }
  else
  {
   $('#error').html('<div class="alert alert-danger">'+error+'</div>');
  }
 });

});
</script>

<script type="text/javascript">
 function myfun(value1) {
     $.ajax({
         url:"new.php",
         type:"POST",
         data: {datapost : value1},
         success: function (result) {
             $("#dataset").html(result);
             
         }


     });

 }

</script>

      <footer class="main-footer">
        <div class="footer-left">
          <a href="https://www.atlassoftwarepark.com/">Atlas Software Park</a></a>
        </div>
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/datatables/datatables.min.js"></script>
  <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- basic-form.html  21 Nov 2019 03:54:41 GMT -->
</html>
