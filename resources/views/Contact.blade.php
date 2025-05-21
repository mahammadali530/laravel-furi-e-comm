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
                <label for="icon-name" class="form-label">Location</label>
                <input type="text" class="form-control" id="" placeholder="Enter Your Title" name="location" minlength="3" >
                @error('location')
            <small class="text-danger">{{ $message }}</small>
        @enderror
            </div>
            <div class="mb-3">
                <label for="icon-name" class="form-label">Gmail</label>
                <input type="text" class="form-control" id="" placeholder="Enter Your description" name="gmail" >
                @error('gmail')
            <small class="text-danger">{{ $message }}</small>
        @enderror
            </div>
            <div class="mb-3">
                <label for="icon-name" class="form-label">Number</label>
                <input type="text" class="form-control" id="" placeholder="Enter Your description" name="number" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                pattern="\d{10}" title="please enter exactly 10 digits.">
                @error('number')
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
                <label for="icon-name" class="form-label">Location</label>
                <input type="text" class="form-control" id="location" placeholder="Enter Your Title" name="location" minlength="3" >
            </div>
            <div class="mb-3">
                <label for="icon-name" class="form-label">Gmail</label>
                <input type="text" class="form-control" id="gmail" placeholder="Enter Your description" name="gmail" >
                </div>
            <div class="mb-3">
                <label for="icon-name" class="form-label">Number</label>
                <input type="text" class="form-control" id="number" placeholder="Enter Your description" name="number" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                pattern="\d{10}" title="please enter exactly 10 digits.">
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
            <th>Location</th>
            <th>Gmail</th>
            <th>Number</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($Contact as $items)
        <tr>
           <td>{{ $items->id }}</td>
            <td>{{ $items->location }}</td>
            <td>{{ $items->gmail }}</td>
            <td>{{ $items->number }}</td>
            <td>
              <button class="btn btn-primary editbtn btn-sm " value="{{ $items->id }}">Update</button>
              <a class="btn btn-danger  btn-sm" href="{{ route('delete.Contact', ['id' => $items]) }}" onclick="return confirm('Are you sure?');">Delete</a>
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
            url: '/Contactedit/' + id,
            type: 'GET',
            success: function (response) {
                if (response.data) {
                    // Populate the modal with the data
                    $('#edit_id').val(response.data.id);
                    $('#location').val(response.data.location);
                    $('#gmail').val(response.data.gmail);
                    $('#number').val(response.data.number);

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
            url: '/edit-Contact/' + id,
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
  