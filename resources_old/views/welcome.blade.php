<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>UPLOAD Pajak</title>
  </head>
  <style type="text/css">
      body {
        padding: 10px;
      }

      th {
        font-size: 11px;
        white-space: nowrap;
      }

      td {
        font-size: 12px;
        font-weight: 700;
        white-space: nowrap;
        vertical-align: middle;
      }
  </style>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="table-responsive">
                    <h4 class="text-center"><u>DATA PAJAK</u></h4>
                    
                    <button class="btn btn-success text-white" onclick="document.getElementById('file').click()">UPLOAD</button> <button class="btn btn-danger text-white" onclick="location.href = 'clear_db' ">CLEAR TABLE</button> 
                    <form id="form" action="upload" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="file" id="file" style="display:none" name="file_upload">
                    </form>
                    <hr>

                    <table target="_blank" class="table table-bordered table-hover table-primary data-table">
                      <caption>List of users</caption>
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">NO STRUK</th>
                          <th scope="col">NO REGISTER</th>
                          <th scope="col">TANGGAL</th>
                          <th scope="col">ITEM</th>
                          <th scope="col">QTY</th>
                          <th scope="col">JUMLAH</th>
                          <th scope="col">TTL QTY</th>
                          <th scope="col">TTL BAYAR</th>
                          <th scope="col">KEMBALIAN</th>
                          <th scope="col">ACTION</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        @php 
                            $no = 1;
                        @endphp
                        @foreach($datas as $data)
                        <tr>
                          <td>{{$no++}}</td>
                          <td>{{$data["no_struk"]}}</td>
                          <td>{{$data["no_register"]}}</td>
                          <td>{{$data["tanggal"]}}</td>
                          <td>{{$data["item"]}}</td>
                          <td class="text-center">{{$data["qty"]}}</td>
                          <td>Rp. {{number_format($data["jumlah"])}}</td>
                          <td class="text-center">{{$data["total_qty"]}}</td>
                          <td>Rp. {{number_format($data["total_bayar"])}}</td>
                          <td>Rp. {{number_format($data["kembalian"])}}</td>
                          <td class="text-center"><button onclick="window.open('print/{{$data["id"]}}','_blank') " class="btn btn-primary btn-sm">PRINT</button> 
                            {{-- <button onclick="window.location.href = 'print_pdf/{{$data["id"]}}' " class="btn btn-danger btn-sm">PDF</button> --}}
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script> 
    <script type="text/javascript">
        //On Change show alert submit
        $('#file').change(function(){
            $('#form').submit();
        });

        $(document).ready(
            function(){
                $('.data-table').DataTable();
            }
        );
    </script>
  </body>
</html>