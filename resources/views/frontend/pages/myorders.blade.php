@include('frontend.partials.header')

<div class="table-responsive" style="max-width: 100%; margin: auto;">
<table class="table table-bordered border-dark">
  <thead>
  
    <tr>
            <th>image</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>payment method</th>
            <th>Fname</th>
            <th>Lname</th>
            <th>Company name</th>
            <th>Address</th>
            <th>State Country</th>
            <th>Pincode</th>
            <th>Emaila ddress</th>
            <th>Phone</th> 
    </tr>

  </thead>
  <tbody >
  @foreach ($orders as $items)
    <tr>
            <td> <img style="height:100px; width:100px;" src="{{ asset('storage/' . $items->image_1) }}" alt="Image of" ></td>
            <td>{{ $items->quantity }}</td>
            <td>{{ $items->total_price }}</td>
            <td>{{ $items->payment_method }}</td>
            <td>{{ $items->c_fname }}</td>
            <td>{{ $items->c_lname }}</td>
            <td>{{ $items->c_companyname }}</td>
            <td>{{ $items->c_address }}</td>
            <td>{{ $items->c_state_country }}</td>
            <td>{{ $items->c_postal_zip }}</td>
            <td>{{ $items->c_email_address }}<br></td>
            <td>{{ $items->c_phone }}</td>
    </tr>
    @endforeach
</table>
</tbody>
</div>

