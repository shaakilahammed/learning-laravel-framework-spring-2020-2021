<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Upcomng Products</title>
</head>
<body>
  <a href="/admin">Home</a> | 
  <a href="{{ route('product.manage') }}">Manage Products</a> | 
  <a href="{{ route('product.existingProducts')  }}">Existing Products</a> | 
  <a href="{{ route('product.upcomingProducts') }}">Upcoming Products</a> | 
  <a href="{{ route('product.addProducts') }}">Add Products</a> | | |
  <a href="/logout">logout</a>

  <table border="1">
    <thead>
    <tr>
        <th>Id</th>
        <th>Product Name</th>
        <th>Unit Price</th>
        <th>Category</th>
        <th>Quantity</th>
        <th>Status</th>
        <th>Vendor Id</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($upcomingpro as $key => $data)
            <tr>
                <th>{{ $data->id }}</th>
                <td>{{ $data->product_name }}</td>
                <td>{{ $data->unit_prics }}</td>
                <td>{{ $data->category_id }}</td>
                <td>{{ $data->quantity }}</td>
                <td>{{ $data->status }}</td>
                <td>{{ $data->vendor_id }}</td>
                <td>
                  <a href="{{ route('upcomingproduct.delete',$data->id) }}">Delete</a> | 
                  <a href="{{ route('upcomingproduct.edit',$data->id) }}">Edit</a> | 
                  <a href="{{ route('upcomingproduct.details',$data->id) }}">Details</a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
  
</body>
</html>


              
              




