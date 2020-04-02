<?php
  include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/sweetalert2.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="js/sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <title>ADMIN CTCOVID19</title>
  </head>
  <body>

    <div class="d-flex" id="wrapper">
      <!-- awal Sidebar -->
      <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading bold"><img src="images/pp.png" style="" width="20" height="20" alt="logo CTCOVID-19"> ADMIN CTCOVID-19</div>
        <div class="row">
          <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
   
              <a class="list-group-item list-group-item-action border-top-0 border-left-0 border-right-0" id="user_activity" data-toggle="list" href="#list-user-activity" role="tab" aria-controls="user-activity">Tabel User Activity</a>
              <a class="list-group-item list-group-item-action border-top-0 border-left-0 border-right-0" id="user_diagnosis" data-toggle="list" href="#list-user-diagnosis" role="tab" aria-controls="user-diagnosis">Table User Diagnosis</a>
              <a class="list-group-item list-group-item-action border-top-0 border-left-0 border-right-0" id="grafik" data-toggle="list" href="#list-grafik" role="tab" aria-controls="grafik">Grafik</a>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir sidebar  -->

      <!-- awal konten -->
      <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
          <button class="btn btn-primary" id="menu-toggle">MENU</button>
        </nav>
          <div class="col-12">
            <div class="tab-content" id="nav-tabContent">

              <div class="tab-pane fade" id="list-user-activity" role="tabpanel" aria-labelledby="user-activity">
                <div class="card mt-3">
                  <div class="card-header text-center font-weight-bold">
                    TABEL USER_ACTIVITY
                  </div>
                  <div class="card-body">
                    <div class="table-wrapper-scroll-y my-custom-scrollbar">
                      <div class="wrapper-editor">

                        <table id="example" class="table-sm table-hover datatable table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead class="thead-dark">
                            <tr>
                              <th class="th-sm">
                                TIMESTAMP
                              </th>
                              <th class="th-sm">
                                ID_T
                              </th>
                              <th class="th-sm">
                                USERNAME_T
                              </th>
                              <th class="th-sm">
                                NAMA_T
                              </th>
                              <th class="th-sm">
                                DIAGNOSIS
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <?php

                                $conn = open_db();

                                    $sql = "SELECT * FROM user_activity";
                                            
                                    $query = mysqli_query($conn, $sql);
                                            
                                    while ($row = mysqli_fetch_array($query))
                                    {
                                      echo '<tr>
                                            <td>'.$row['timestamp'].'</td>
                                            <td>'.$row['id_telegram'].'</td>
                                            <td>'.$row['username_telegram'].'</td>
                                            <td>'.$row['nama_telegram'].'</td>
                                            <td>'.$row['diagnosis'].'</td>
                                            </tr>';
                                    }
                                    

                                close_db($conn);
                                ?>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="list-user-diagnosis" role="tabpanel" aria-labelledby="user-diagnosis">
                <div class="card mt-3">
                  <div class="card-header text-center font-weight-bold">
                    TABEL USER_DIAGNOSIS
                  </div>
                  <div class="card-body">
                    <div class="table-wrapper-scroll-y my-custom-scrollbar">
                      <div class="wrapper-editor">

                        <table id="example" class="table-sm table-hover datatable table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead class="thead-dark">
                            <tr>
                              <th class="th-sm">
                                TIMESTAMP
                              </th>
                              <th class="th-sm">
                                ID_T
                              </th>
                              <th class="th-sm">
                                USERNAME_T
                              </th>
                              <th class="th-sm">
                                NAMA_T
                              </th>
                              <th class="th-sm">
                                NAMA
                              </th>
                              <th class="th-sm">
                                AIMS
                              </th>
                              <th class="th-sm">
                                GENDER
                              </th>
                              <th class="th-sm">
                                USIA
                              </th>
                              <th class="th-sm">
                                CABANG
                              </th>
                              <th class="th-sm">
                                DIAGNOSIS
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <?php

                                $conn = open_db();

                                    $sql = "SELECT * FROM user_diagnosis";
                                            
                                    $query = mysqli_query($conn, $sql);
                                            
                                    while ($row = mysqli_fetch_array($query))
                                    {
                                      echo '<tr>
                                            <td>'.$row['timestamp'].'</td>
                                            <td>'.$row['id_telegram'].'</td>
                                            <td>'.$row['username_telegram'].'</td>
                                            <td>'.$row['nama_telegram'].'</td>
                                            <td>'.$row['nama'].'</td>
                                            <td>'.$row['aims'].'</td>
                                            <td>'.$row['gender'].'</td>
                                            <td>'.$row['usia'].'</td>
                                            <td>'.$row['cabang'].'</td>
                                            <td>'.$row['diagnosis'].'</td>
                                            </tr>';
                                    }
                                    

                                close_db($conn);
                                ?>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="list-grafik" role="tabpanel" aria-labelledby="grafik">
                <div class="row">
                  <div class="col-sm-3">
                    <div class="card mt-3">
                      <div class="card-header text-center font-weight-bold">
                        START
                      </div>
                      <div class="card-body text-center">
                        <table id="example" class="table-sm table-hover" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <?php
                                $conn = open_db();

                                $sql = mysqli_query($conn, "SELECT * FROM user_activity WHERE diagnosis='start'");
                                $tes = mysqli_num_rows($sql);
                                echo '<tr>
                                      '.$tes.'
                                      </tr>';

                                close_db($conn);
                              ?>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="card mt-3">
                      <div class="card-header text-center font-weight-bold">
                        DETEKSI
                      </div>
                      <div class="card-body text-center">
                        <table id="example" class="table-sm table-hover" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <?php
                                $conn = open_db();

                                $sql = mysqli_query($conn, "SELECT * FROM user_activity WHERE diagnosis='deteksi'");
                                $tes = mysqli_num_rows($sql);
                                echo '<tr>
                                      '.$tes.'
                                      </tr>';

                                close_db($conn);
                              ?>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="card mt-3">
                      <div class="card-header text-center font-weight-bold">
                        INFO
                      </div>
                      <div class="card-body text-center">
                        <table id="example" class="table-sm table-hover" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <?php
                                $conn = open_db();

                                $sql = mysqli_query($conn, "SELECT * FROM user_activity WHERE diagnosis='info'");
                                $tes = mysqli_num_rows($sql);
                                echo '<tr>
                                      '.$tes.'
                                      </tr>';

                                close_db($conn);
                              ?>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="card mt-3">
                      <div class="card-header text-center font-weight-bold">
                        CEGAH
                      </div>
                      <div class="card-body text-center">
                        <table id="example" class="table-sm table-hover" cellspacing="0" width="100%">
                          <tbody>
                            <tr>
                              <?php
                                $conn = open_db();

                                $sql = mysqli_query($conn, "SELECT * FROM user_activity WHERE diagnosis='cegah'");
                                $tes = mysqli_num_rows($sql);
                                echo '<tr>
                                      '.$tes.'
                                      </tr>';

                                close_db($conn);
                              ?>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
    </script>

    <script>
    $(document).ready(function () {
    $('#dtBasicExample').DataTable();
    $('.dataTables_length').addClass('bs-select');
    });
    </script>

    <script>
    $(document).ready(function() {
    $('#example').DataTable( {
        responsive: true,
        "pageLength": 10
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    } );
    } );
    </script>
  </body>
</html>