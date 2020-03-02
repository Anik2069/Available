<!DOCTYPE html>
<html lang="en">


<!-- basic-form.html  21 Nov 2019 03:54:41 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Atlas Software Park</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{'assets'}}/css/app.min.css">
  <link rel="stylesheet" href="{{'assets'}}/bundles/datatables/datatables.min.css">
  <link rel="stylesheet" href="{{'assets'}}/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{'assets'}}/css/style.css">
  <link rel="stylesheet" href="{{'assets'}}/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{'assets'}}/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='{{'assets'}}/img/favicon.ico' />
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
          @include('nav')
      </div>
      <!-- Main Content -->
      <div class="main-content">
          @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ $message }}</strong>
              </div>
          @endif

        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Add Products Group</h4>
                  </div>
                    <form method="post" action="/submitproduct">
                  <div class="card-body">

                          @csrf
                    <div class="form-group">
                      <label>Select Product Group</label>
                      <select class="form-control" name="selectgroup">
                        <option>Select One</option>
                          @foreach($groupname as $group)
                              <option value="{{$group['name']}}">{{$group['name']}}</option>

                          @endforeach

                      </select>
                    </div>
                    <div class="form-group">
                      <label>Products Name</label>
                      <input type="text" placeholder="write here..." name="name" class="form-control">
                    </div>
                    <div class="form-group">
                      <label>Select Unit</label>
                      <select class="form-control" name="selectunit">
                        <option>Select One</option>
                        <option value="Piece">Piece</option>
                        <option value="Gm">Gm</option>
                        <option value="Kg">Kg</option>
                        <option value="Packet">Packet</option>
                        <option value="Sacks">Sacks</option>
                        <option value="Carton">Carton</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Unit Price</label>
                      <input type="text" placeholder="BDT" name="price" class="form-control">
                    </div>

                  </div>
                  <div class="card-footer text-right">
                    <button class="btn btn-primary mr-1" type="submit">Submit</button>
                  </div>
                    </form>
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
                            <th>Unit</th>
                            <th>Unit Price</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product )
                          <tr>
                            <td>
                              {{$c=$c+1}}
                            </td>
                            <td>{{$product['groupName']}}</td>
                            <td>{{$product['productName']}}</td>
                            <td>{{$product['unit']}}</td>
                            <td>{{$product['price']}}</td>
                            <td><a href="/deleteproduct/{{$product['id']}}" class="btn btn-danger">Delete</a></td>
                          </tr>
                          @endforeach
                       {{--   <tr>
                            <td>
                              2
                            </td>
                            <td>Pran</td>
                            <td>Juice</td>
                            <td>Carton</td>
                            <td>1500</td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                          </tr>
                          <tr>
                            <td>
                              3
                            </td>
                            <td>Pran</td>
                            <td>Juice</td>
                            <td>Carton</td>
                            <td>1500</td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                          </tr>
                          <tr>
                            <td>
                              4
                            </td>
                            <td>Pran</td>
                            <td>Juice</td>
                            <td>Carton</td>
                            <td>1500</td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                          </tr>
                          <tr>
                            <td>
                              5
                            </td>
                            <td>Pran</td>
                            <td>Juice</td>
                            <td>Carton</td>
                            <td>1500</td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                          </tr>
                          <tr>
                            <td>
                              6
                            </td>
                            <td>Pran</td>
                            <td>Juice</td>
                            <td>Carton</td>
                            <td>1500</td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                          </tr>
                          <tr>
                            <td>
                              7
                            </td>
                            <td>Pran</td>
                            <td>Juice</td>
                            <td>Carton</td>
                            <td>1500</td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                          </tr>
                          <tr>
                            <td>
                              8
                            </td>
                            <td>Pran</td>
                            <td>Juice</td>
                            <td>Carton</td>
                            <td>1500</td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                          </tr>
                          <tr>
                            <td>
                              9
                            </td>
                            <td>Pran</td>
                            <td>Juice</td>
                            <td>Carton</td>
                            <td>1500</td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                          </tr>
                          <tr>
                            <td>
                              10
                            </td>
                            <td>Pran</td>
                            <td>Juice</td>
                            <td>Carton</td>
                            <td>1500</td>
                            <td><a href="#" class="btn btn-danger">Delete</a></td>
                          </tr>--}}
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
  <script src="{{'assets'}}/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="{{'assets'}}/bundles/datatables/datatables.min.js"></script>
  <script src="{{'assets'}}/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
  <script src="{{'assets'}}/bundles/jquery-ui/jquery-ui.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="{{'assets'}}/js/page/datatables.js"></script>
  <!-- Template JS File -->
  <script src="{{'assets'}}/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="{{'assets'}}/js/custom.js"></script>
</body>


<!-- basic-form.html  21 Nov 2019 03:54:41 GMT -->
</html>
