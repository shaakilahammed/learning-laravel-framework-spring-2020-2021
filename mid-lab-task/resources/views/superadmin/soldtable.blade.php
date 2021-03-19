<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sold Table</title>
</head>
<body>
  
  <a href="/admin">Home</a> | 
<a href="{{ route('SalesController.physicalStore') }}">Physical Store</a> ||| 
<a href="/logout">logout</a>
<h3 >Export</h3>
  <a href="{{ route('Sales.pdf.download') }}">Export Data</a>
<table border="1">
  <thead>
  <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Address</th>
      <th>Phone</th>
      <th>Product Id</th>
      <th>Product Name</th>
      <th>Unit Price</th>
      <th>Quantity</th>
      <th>Total Price</th>
      <th>Payment Type </th>
      <th>Status </th>
  </tr>
  </thead>
  <tbody>
      @foreach($store as $key => $data)
          <tr>
              <th>{{ $data->id }}</th>
              <td>{{ $data->customer_name }}</td>
              <td>{{ $data->address }}</td>
              <td>{{ $data->phone }}</td>
              <td>{{ $data->product_id }}</td>
              <td>{{ $data->product_name }}</td>
              <td>{{ $data->unit_prics }}</td>
              <td>{{ $data->quantity }}</td>
              <td>{{ $data->total_price }}</td>
              <td>{{ $data->payment_type }}</td>
              <td>{{ $data->status }}</td>
          </tr>
      @endforeach
  </tbody>
</table>





</body>
</html>