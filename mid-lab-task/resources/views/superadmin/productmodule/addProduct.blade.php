
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
</head>
<body>
    <h2>Add Products</h2>
    <form action="{{ route('product.storeProduct') }}" method="post">
        @csrf

        <table>
            <tr>
                <td>
                    Product name :
                </td>
                <td>
                    <input type="text" class="form-control" name="product_name" value="{{ old('product_name') }}">
                </td>
                <td>
                    @error('product_name'){{ $message }}@enderror
                </td>
            </tr>

            <tr>
                <td>
                    Unit Price :
                </td>
                <td>
                    <input type="text" class="form-control" name="unit_prics" value="{{ old('unit_prics') }}" >
                </td>
                <td>
                    @error('unit_prics'){{ $message }}@enderror
                </td>
            </tr>
            <tr>
                <td>
                    Category :
                </td>
                <td>
                    <select class="custom-select " name="category_id">
                        @forelse($category as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                        @empty
                        @endforelse
                    </select>
                </td>
                
            </tr>
            <tr>
                <td>
                    Quantity :
                </td>
                <td>
                    <input type="text" class="form-control" name="quantity" autocomplete="quantity" value="{{ old('quantity') }}">
                </td>
                <td>
                    @error('quantity'){{ $message }}@enderror
                </td>
            </tr>
            <tr>
                <td>
                    Status :
                </td>
                <td>
                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                        <option value="existing">existing</option>
                        <option value="upcoming">upcoming</option>
                    </select>
                </td>
                
            </tr>
            <tr>
                <td>
                    Vendor id :
                </td>
                <td>
                    <select class="custom-select " name="vendor_id">
                        @forelse($vendor as $ven)
                        <option value="{{ $ven->id }}">{{ $ven->vendor_name }}</option>
                        @empty
                        @endforelse
                    </select>
                </td>
                
            </tr>
            <tr>
                <td>
                    
                </td>
                <td>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </td>
                
            </tr>
        </table>


    </form>
</body>
</html>
