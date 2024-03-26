<?php
require_once("includes/dbh.inc.php");
$query = "select * from masuk";
$result = $pdo->query($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Barang Masuk - Warehouse BMKG</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php"><img src="assets/img/logo.png"></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="pelaporan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Pelaporan
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data Barang
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="barangMasuk.php">Barang Masuk</a>
                                    <a class="nav-link" href="barangKeluar.php">Barang Keluar</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Barang Masuk</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Barang Masuk</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                    Tambah Barang
                                  </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>ID Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Jenis Peralatan</th>
                                            <th>Merk</th>
                                            <th>SN</th>
                                            <th>Asal Perolehan</th>
                                            <th>Jumlah Barang</th>
                                            <th>Harga</th>
                                            <th>Keterangan</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                        while($row = $result->fetch(PDO::FETCH_ASSOC)){
                                            ?>
                                            <tr>
                                            <td><?php echo (new DateTime($row['tanggal']))->format('Y-m-d'); ?></td>
                                            <td><?php echo $row['id_barang']; ?></td>
                                            <td><?php echo $row['nama_barang']; ?></td>
                                            <td><?php echo $row['jenis_peralatan']; ?></td>
                                            <td><?php echo $row['merk']; ?></td>
                                            <td><?php echo $row['sn']; ?></td>
                                            <td><?php echo $row['asal_perolehan']; ?></td>
                                            <td><?php echo $row['jumlah_barang']; ?></td>
                                            <td><?php echo $row['harga']; ?></td>
                                            <td><?php echo $row['keterangan']; ?></td>
                                            <td><img src="<?php echo $row['foto']; ?>" alt="Photo"></td>
                                            <td>
                                                <!-- <a>
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
                                                Edit
                                                </button>
                                                </a> -->
                                                <a><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" onclick="setDeleteId(<?php echo $row['id']; ?>)">
                                                Delete
                                                </button></a>
                                            </td>
                                            </tr>
                                            <?php
                                        }
                                      ?>
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
        <script>
  // Function to set the value of the hidden input field before the form is submitted
  function setDeleteId(id) {
    document.getElementById("deleteId").value = id;
  }

  // Event listener to capture the click event on the delete button
  document.getElementById("deleteButton").addEventListener("click", function() {
    // Get the ID of the item to be deleted
    var id = <?php echo $row['id']; ?>;
    // Set the value of the hidden input field
    setDeleteId(id);
  });
</script>
    </body>
    <!-- MODAL BUAT CREATE -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Tambah Barang</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
  
        <!-- Modal body -->
        <div class="modal-body">
          <form action="includes/formhandler.inc.php" method="post">
            <div class="modal-body">
                <input type="date" name="tanggal" placeholder="Tanggal Barang Masuk" class="form-control" required>
                <br>
                <input type="text" name="id_barang" placeholder="ID Barang" class="form-control" required>
                <br>
                <input type="text" name="nama_barang" placeholder="Nama Barang" class="form-control" required>
                <br>
                <input type="text" name="jenis_peralatan" placeholder="Jenis Peralatan" class="form-control" required>
                <br>
                <input type="text" name="merk" placeholder="Merk" class="form-control" required>
                <br>
                <input type="text" name="sn" placeholder="SN" class="form-control" required>
                <br>
                <input type="text" name="asal_perolehan" placeholder="Asal Perolehan" class="form-control" required>
                <br>
                <input type="number" name="jumlah_barang" placeholder="Jumlah Barang" class="form-control" required>
                <br>
                <input type="number" name="harga" placeholder="Harga Barang" class="form-control" required>
                <br>
                <input type="text" name="keterangan" placeholder="Keterangan" class="form-control" required>
                <br>                     
                <input type="file" name="foto" placeholder="Foto" class="form-control" required>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
  
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
  
      </div>
    </div>
  </div>

<!-- EDIT MODAL
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="includes/formhandler.inc.php" method="post">
            <input type="hidden" value="<?php echo $name;?>">
            <div class="modal-body">
                <input type="date" name="tanggal" placeholder="Tanggal Barang Masuk" class="form-control" required>
                <br>
                <input type="text" name="id_barang" placeholder="ID Barang" class="form-control" required>
                <br>
                <input type="text" name="nama_barang" placeholder="Nama Barang" class="form-control" required>
                <br>
                <input type="text" name="jenis_peralatan" placeholder="Jenis Peralatan" class="form-control" required>
                <br>
                <input type="text" name="merk" placeholder="Merk" class="form-control" required>
                <br>
                <input type="text" name="sn" placeholder="SN" class="form-control" required>
                <br>
                <input type="text" name="asal_perolehan" placeholder="Asal Perolehan" class="form-control" required>
                <br>
                <input type="number" name="jumlah_barang" placeholder="Jumlah Barang" class="form-control" required>
                <br>
                <input type="number" name="harga" placeholder="Harga Barang" class="form-control" required>
                <br>
                <input type="text" name="keterangan" placeholder="Keterangan" class="form-control" required>
                <br>                     
                <input type="file" name="foto" placeholder="Foto" class="form-control" required>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

<!-- DELETE MODAL -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Barang</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p>Apakah Anda yakin ingin menghapus data ini?</p>
      </div>
      <div class="modal-footer">
        <form action="includes/delete_handler.inc.php" method="post">
            <input type="hidden" name="id" id="deleteId">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
            <button type="submit" class="btn btn-danger">Ya, Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>
</html>
