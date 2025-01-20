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

    <section class="section">
<div class="row">
  <div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Datatables</h5>
          <button style="margin-top:-30px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addServiceModal">Add Data</button>

      <!-- Add Service Modal -->
      <div class="modal fade" id="addServiceModal" tabindex="-1" aria-labelledby="addServiceModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="addServiceModalLabel">Add Menu</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
          <div class="modal-body">
        <form action="" method="post" enctype="multipart/form-data" id="addMenuForm">
            @csrf   
            <div class="mb-3">
                <label for="icon-name" class="form-label">Name</label>
                <input type="text" class="form-control" id="" placeholder="Enter Your Name" name="f_name" minlength="3" >
                @error('f_name')
            <small class="text-danger">{{ $message }}</small>
        @enderror
                <div class="invalid-feedback">Please, enter your name (at least 3 characters)!</div>
            </div>
            <div class="mb-3">
                <label for="icon-name" class="form-label">Price</label>
                <input type="text" class="form-control" id="" placeholder="Enter Your Price" name="price" >
                @error('price')
            <small class="text-danger">{{ $message }}</small>
        @enderror
                <div class="invalid-feedback">Please enter a valid mobile number (exactly 10 digits)!</div>
            </div>
            <div class="mb-3">
                <label for="icon-image" class="form-label">Image</label>
                <input class="form-control" type="file" id="" name="image_1" >
                @error('image_1')
            <small class="text-danger">{{ $message }}</small>
        @enderror
            </div>
               
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="submit">Add Data</button>
        </form>
    </div>
 </div>
 </div>
</div>

                                   {{-- update --}}


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
                <label for="icon-name" class="form-label">Name</label>
                <input type="text" class="form-control" id="edit_name" placeholder="Enter Your Name" name="f_name" >
                <div class="error-message" style="color:red; display:none;"></div>
            </div>
            <div class="mb-3">
                <label for="icon-name" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" placeholder="Enter Your Price" name="price" >
            </div>
            <div class="mb-3">
                <label for="icon-image" class="form-label">Image</label>
                <input class="form-control" type="file" id="image_1" name="image_1" >
                
                <div class="mt-2">
                  <img id="existing_image" src="" alt="Existing Image" style="width: 100px; height:90px; display: none;">
              </div>
            </div>
               
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="submit">Add Service</button>
        </form>
    </div>
 </div>
</div>
</div>
              <!-- Table with stripped rows -->
      <table class="table datatable">
        <thead>
          <tr>
            <th>id</th>
            <th>name</th>
            <th>Price</th>
            <th>image</th>
          
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($students as $items)
        <tr>
            <td>{{ $items->u_id }}</td>
            <td>{{ $items->f_name }}</td>
            <td>{{ $items->price }}</td>
            <td><img src="{{ asset('storage/' . $items->image_1) }}" alt="Image" width="90" height="70px;"></td> 
            <td>

              <button class="btn btn-primary editbtn btn-sm " value="{{ $items->u_id }}">Update</button>
              <a class="btn btn-danger  btn-sm" href="{{ route('delete.crud', ['u_id' => $items]) }}" onclick="return confirm('Are you sure?');">Delete</a>
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
      url: '/productedit/' + id,
      type: 'GET',
      success: function (response) {
          if (response.data) {
              $('#edit_id').val(response.data.u_id);
              $('#edit_name').val(response.data.f_name);
              $('#price').val(response.data.price);
             
              if (response.data.image_1) {
                  $('#existing_image').attr('src', '/storage/' + response.data.image_1).show();
              } else {
                  $('#existing_image').hide();
              }
              $('#image_1').val(''); 
              $('#editmodal').modal('show');
          } else {
              
          }
      },
      error: function () {
                }
    });
    });

    
  $('#updateForm').on('submit', function (e) {
      e.preventDefault(); 
      var id = $('#edit_id').val();
      var formData = new FormData(this);
      formData.append('_method', 'PUT'); 
      $.ajax({
          url: '/edit-product/' + id,
          type: 'POST', 
          data: formData,
          contentType: false,
          processData: false,
          headers: {  
          },
          success: function (response) {
              if (response.success) {   
                  location.reload(); 
              } else {
                  
              }
          },
          error: function () {
              
          }
      });
  });
});

</script>

  @include('footer')
  