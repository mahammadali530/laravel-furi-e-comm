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
<div  class="row">
  <div class="col-lg-12">

    <div style=" overflow-y:auto;"class="card">
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
                <label for="icon-name" class="form-label">Titale</label>
                <input type="text" class="form-control" id="" placeholder="Enter Your Title" name="title" minlength="3" >
                @error('title')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                  </div>
            <div class="mb-3">
                <label for="icon-name" class="form-label">description</label>
                <input type="text" class="form-control" id="" placeholder="Enter Your description" name="description" >
                @error('description')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
                <div class="mb-3">
                <label for="icon-name" class="form-label">description_1</label>
                <input type="text" class="form-control" id="" placeholder="Enter Your description" name="description_1" >
                @error('description_1')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
                <div class="mb-3">
                <label for="icon-name" class="form-label">description_2</label>
                <input type="text" class="form-control" id="" placeholder="Enter Your description" name="description_2" >
                @error('description_2')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
                <div class="mb-3">
                <label for="icon-name" class="form-label">description_3</label>
                <input type="text" class="form-control" id="" placeholder="Enter Your description" name="description_3" >
                @error('description_3')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
                <div class="mb-3">
                <label for="icon-name" class="form-label">description_4</label>
                <input type="text" class="form-control" id="" placeholder="Enter Your description" name="description_4" >
                @error('description_4')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                </div>
            <div class="mb-3">
                <label for="icon-image" class="form-label">Image</label>
                <input class="form-control" type="file" id="" name="image" >
                @error('image')
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
                <label for="icon-name" class="form-label">Titale</label>
                <input type="text" class="form-control" id="title" placeholder="Enter Your Title" name="title" >
                <div class="error-message" style="color:red; display:none;"></div>
            </div>
            <div class="mb-3">
                <label for="icon-name" class="form-label">description</label>
                <input type="text" class="form-control" id="description" placeholder="Enter Your description" name="description" >
            </div>
            <div class="mb-3">
                <label for="icon-name" class="form-label">description_1</label>
                <input type="text" class="form-control" id="description_1" placeholder="Enter Your description" name="description_1" >
            </div>
            <div class="mb-3">
                <label for="icon-name" class="form-label">description_2</label>
                <input type="text" class="form-control" id="description_2" placeholder="Enter Your description" name="description_2" >
            </div>
            <div class="mb-3">
                <label for="icon-name" class="form-label">description_3</label>
                <input type="text" class="form-control" id="description_3" placeholder="Enter Your description" name="description_3" >
            </div>
            <div class="mb-3">
                <label for="icon-name" class="form-label">description_4</label>
                <input type="text" class="form-control" id="description_4" placeholder="Enter Your description" name="description_4" >
            </div>
            <div class="mb-3">
                <label for="icon-image" class="form-label">Image</label>
                <input class="form-control" type="file" id="image" name="image" >
                
                <div class="mt-2">
                  <img id="existing_image" src="" alt="Existing Image" style="width: 100px; height:90px; display: none;">
              </div>
            </div>
               
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="submit">Update Data</button>
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
            <th>Title</th>
            <th>description</th>
            <th>description_1</th>
            <th>description_2</th>
            <th>description_3</th>
            <th>description_4</th>
            <th>image</th>
          
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($about as $items)
        <tr>
           <td>{{$items->id}}</td>
            <td>{{ $items->title }}</td>
            <td>{{ $items->description }}</td>
            <td>{{ $items->description_1 }}</td>
            <td>{{ $items->description_2 }}</td>
            <td>{{ $items->description_3 }}</td>
            <td>{{ $items->description_4 }}</td>

            <td><img src="{{ asset('storage/' . $items->image) }}" alt="Image" width="90" height="70px;"></td> 
            <td>

              <button class="btn btn-primary editbtn btn-sm " value="{{ $items->id }}">Update</button>
              <a class="btn btn-danger  btn-sm" href="{{ route('delete.about', ['id' => $items]) }}" onclick="return confirm('Are you sure?');">Delete</a>
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
            url: '/aboutedit/' + id,
            type: 'GET',
            success: function (response) {
                if (response.data) {
                    // Populate the modal with the data
                    $('#edit_id').val(response.data.id);
                    $('#title').val(response.data.title);
                    $('#description').val(response.data.description);
                    $('#description_1').val(response.data.description_1);
                    $('#description_2').val(response.data.description_2);
                    $('#description_3').val(response.data.description_3);
                    $('#description_4').val(response.data.description_4);

                     if (response.data.image) {
                    $('#existing_image').attr('src', '/storage/' + response.data.image).show();
                   } else {
                    $('#existing_image').hide(); 
                   }

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
            url: '/edit-about/' + id,
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
  