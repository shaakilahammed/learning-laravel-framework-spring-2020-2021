<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Superadmin Home</title>
</head>
<body>
    <a href="/logout">logout</a><br>
    <a href="{{route('SalesController.physicalStore')}}">Physical Store</a><br>
    <a href="{{ route('SalesController.ecommerceLog') }}">E-commerce Store</a><br>
    <a href="{{ route('SalesController.mediaLog') }}">Social Media STore</a><br>

    <a href="{{ route('product.manage') }}">Manage Products</a><br>
    <a href="{{ route('product.existingProducts')  }}">Existing Products</a><br>
    <a href="{{ route('product.upcomingProducts') }}">Upcoming Products</a><br>
    <a href="{{ route('product.addProducts') }}">Add Products</a><br>


   

    <h1>Super admin Home</h1>
    
</body>
</html>