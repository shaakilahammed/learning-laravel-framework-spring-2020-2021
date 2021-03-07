
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Products </title>
</head>
<body>
    <h2>Edit Products</h2>
<form action="{{ route('product.updateProducts') }}" method="post">
    @csrf
    <table>
        <tr>
            <td>
                Product name :
            </td>
            <td>
                <input type="text" class="form-control" name="id" value="{{ $data->id }}" placeholder="Product name" hidden>
                <input type="text" class="form-control" name="product_name" value="{{ $data->product_name }}">
            </td>
            <td>
                @error('product_name'){{ $message }}@enderror
            </td>
        </tr>
        <tr>
            <td>
                Unit Price
            </td>
            <td>
                <input type="text" class="form-control" name="unit_prics" value="{{ $data->unit_prics }}" >
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
                    <option value="{{ $cat->id }}"
                        @if ($data->category_id == $cat->id) selected
                        @endif >
                        {{ $cat->category_name }}
                    </option>
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
                <input type="text" class="form-control" name="quantity" autocomplete="quantity" value="{{ $data->quantity }}">
            </td>
            <td>
                <span class="text-danger">@error('quantity'){{ $message }}@enderror</span>
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
                Vendor :
            </td>
            <td>
                <select class="custom-select " name="vendor_id">
                    @forelse($vendor as $cat)
                    <option value="{{ $cat->id }}"
                        @if ($data->vendor_id == $cat->id) selected
                        @endif >
                        {{ $cat->vendor_name }}
                    </option>
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

