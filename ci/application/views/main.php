<!doctype html>
<html lang="en">

<head>
       <!-- Required meta tags -->
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

       <title>Perpustakaan</title>
</head>

<body>
       <div class="container mt-5 ">
              <h1>Hitung Denda Perpustakaan</h1>
       </div>

       <div class="container mt-5 bg-light p-3" style="box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.2);">
              <form>
                     <div class="container">
                            <div class="form-group">
                                   <label for="exampleInputEmail1">NIM Mahasiswa</label>
                                   <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIM Mahasiswa">
                            </div>
                            <div class="form-group">
                                   <label for="exampleInputPassword1">Kode Inventaris Buku</label>
                                   <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Kode Inventaris Buku">
                            </div>
                     </div>
                     <!-- <h2>Modal Example</h2> -->
                     <!-- Trigger the modal with a button -->
                     <div class="container pb-5">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModalCenter">
                                   Submit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                   <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class="modal-content">
                                                 <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalCenterTitle">Rekap Denda</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                               <span aria-hidden="true">&times;</span>
                                                        </button>
                                                 </div>
                                                 <div class="modal-body">
                                                        <p>Total Denda = Test</p>
                                                        <p>Total Denda = Test</p>
                                                        <p>Total Denda = </p>
                                                        <p>Total Denda = </p>
                                                 </div>
                                                 <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                 </div>
                                          </div>
                                   </div>
                            </div>
                     </div>
              </form>
       </div>
      

       <!-- Optional JavaScript -->
       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>