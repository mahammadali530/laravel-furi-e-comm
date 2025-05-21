@include('header')
@include('sider')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<style>
    label {
            margin-left:30px;
            font-size: 16px;
            font-weight: bold;
            display: block;
            /* margin: 10px 0 5px; */
        }

        input[type="date"] {
            width: 21%;
            padding: 8px;
            font-size: 14px;
            border: 2px solid #ccc;
            border-radius: 5px;
        }

        .redy {
            margin-top: 15px;
            margin-left: 30px;
            padding: 10px 20px;
            font-weight: bold; 
             width: 90px; 
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 15px;
            font-size: 18px;
            cursor: pointer;
        }
        .redy2 {
            text-decoration: none;
            margin-top: 15px;
            margin-left: 30px;
            padding: 10px 30px;
             width: 90px; 
             font-weight: bold; 
            background-color:rgb(100, 29, 186);
            color: white;
            border: none;
            border-radius: 15px;
            font-size: 18px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
        

   
</style>
    <section class="section">
<div  class="row">
  <div class="col-lg-12">
  
    <div style=" overflow-y:auto;"class="card">
    <form  action="/filter" method="GET">
            <label for="start_date">Start Date:</label>
            <input type="date" id="start_date" name="start_date" required>
            
            <label for="end_date">End Date:</label>
            <input type="date" id="end_date" name="end_date" required>

            <button class="redy" type="submit">Filter</button>
                <a class="redy2"  href="{{ route('export.csv', ['start_date' => request('start_date'), 'end_date' => request('end_date')]) }}" class="btn btn-success">
        Export
    </a>
        </form>
      <div class="card-body">
      
       <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="addServiceModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                <h5 class="modal-title" id="addServiceModalLabel">Add Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
             <form action="" method="post" enctype="multipart/form-data" id="updateForm">  
            @csrf
            <input type="hidden" id="edit_id"> 
            <div class="mb-3">
                <label for="icon-name" class="form-label">c_fname</label>
                <input type="text" class="form-control" id="c_fname" placeholder="Enter Your fname" name="c_fname" >
            </div>
            <div class="mb-3">
                <label for="icon-name" class="form-label">c_lname</label>
                <input type="text" class="form-control" id="c_lname" placeholder="Enter Your lname" name="c_lname" >
            </div>
            <div class="mb-3">
                <label for="icon-name" class="form-label">c_companyname</label>
                <input type="text" class="form-control" id="c_companyname" placeholder="Enter Your companyname" name="c_companyname" >
            </div>
            <div class="mb-3">
                <label for="icon-name" class="form-label">c_address</label>
                <input type="text" class="form-control" id="c_address" placeholder="Enter Your address" name="c_address" >
            </div>
            <div class="mb-3">
                <label for="icon-name" class="form-label">c_state_country</label>
                <input type="text" class="form-control" id="c_state_country" placeholder="Enter Your state country" name="c_state_country" >
            </div>
            <div class="mb-3">
                <label for="icon-name" class="form-label">c_postal_zip</label>
                <input type="text" class="form-control" id="c_postal_zip" placeholder="Enter Your postal zip" name="c_postal_zip" >
            </div>
            <div class="mb-3">
                <label for="icon-name" class="form-label">c_email_address</label>
                <input type="text" class="form-control" id="c_email_address" placeholder="Enter Your email address" name="c_email_address" >
            </div>
            <div class="mb-3">
                <label for="icon-name" class="form-label">c_phone</label>
                <input type="text" class="form-control" id="c_phone" placeholder="Enter Your phone" name="c_phone" >
            </div>     
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="submit">Update Data</button>
        </form>
    </div>
 </div>
</div>
</div>
<table class="  table datatable">
        <thead>
          <tr>
            <th>id</th>
            <th>product_id</th>
            <th>user_id</th>
            <th>Quantity</th>
            <th>Total_Price</th>
            <th>payment_method</th>
            <th>Fname</th>
            <th>Lname</th>
            <th>Companyname</th>
            <th>Address</th>
            <th>State_Country</th>
            <th>Pincode</th>
            <th>Emailaddress</th>
            <th>Phone</th> 
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($orders as $items)
        <tr>
            <td>{{ $items->id }}</td>
            <td>{{ $items->product_id }}</td>
            <td>{{ $items->user_id }}</td>
            <td>{{ $items->quantity }}</td>
            <td>{{ $items->total_price }}</td>
            <td>{{ $items->payment_method }}</td>
            <td>{{ $items->c_fname }}</td>
            <td>{{ $items->c_lname }}</td>
            <td>{{ $items->c_companyname }}</td>
            <td>{{ $items->c_address }}</td>
            <td>{{ $items->c_state_country }}</td>
            <td>{{ $items->c_postal_zip }}</td>
            <td>{{ $items->c_email_address }}</td>
            <td>{{ $items->c_phone }}</td>
              <td>

              <button class="btn btn-primary editbtn btn-sm " value="{{ $items->id }}">Update</button>
              <a class="btn btn-danger  btn-sm" href="{{ route('delete.order', ['id' => $items]) }}" onclick="return confirm('Are you sure?');">Delete</a>
            </td>
        </tr>
       @endforeach
       </tbody>
       </table>
       </div>
  </div>
</div>
</div>
</section>
</main>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
  $(document).ready(function () {
    $(document).on('click', '.editbtn', function () {
        var id = $(this).val();
        $.ajax({
            url: '/orderedit/' + id,
            type: 'GET',
            success: function (response) {
                if (response.data) {
                   
                    $('#edit_id').val(response.data.id);
                    $('#c_fname').val(response.data.c_fname);
                    $('#c_lname').val(response.data.c_lname);
                    $('#c_companyname').val(response.data.c_companyname);
                    $('#c_address').val(response.data.c_address);
                    $('#c_state_country').val(response.data.c_state_country);
                    $('#c_postal_zip').val(response.data.c_postal_zip);
                    $('#c_email_address').val(response.data.c_email_address);
                    $('#c_phone').val(response.data.c_phone);

                    $('#editmodal').modal('show'); 
                 }
            },
            error: function () {
                alert('Error loading data');
            }
        });
    });

    
    $('#updateForm').on('submit', function (e) {
        e.preventDefault();
        var id = $('#edit_id').val();
        var formData = new FormData(this);
        formData.append('_method', 'PUT'); 

        $.ajax({
            url: '/edit-order/' + id,
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.success) {
                    location.reload(); 
                } else {
                    alert('Error updating data');
                }
            },
            error: function () {
                alert('Error in updating');
            }
        });
    });
});
</script>

       @include('footer')