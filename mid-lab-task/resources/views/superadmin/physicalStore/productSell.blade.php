<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Sell</title>
</head>
<body>
    <a href="/admin">Home</a>
    
    <h2>Product Sales Log</h2>

           
    <form action="{{ route('SalesController.salesLog') }}" method="post">
        @csrf

        <table>
            <tr>
                <td>
                    Full name :
                </td>
                <td>
                    <input type="text" class="form-control" name="customer_name" value="{{ old('customer_name') }}">
                </td>
                <td>
                    @error('customer_name'){{ $message }}@enderror
                </td>
            </tr>

            <tr>
                <td>
                    Username :
                </td>
                <td>
                    <input type="text" class="form-control" name="address" value="{{ old('address') }}" >
                </td>
                <td>
                    @error('address'){{ $message }}@enderror
                </td>
            </tr>

            <tr>
                <td>
                    Phone :
                </td>
                <td>
                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" >
                </td>
                <td>
                    @error('phone'){{ $message }}@enderror
                </td>
            </tr>

            <tr>
                <td>
                    product id :
                </td>
                <td>
                    <input type="text" class="form-control" name="product_id" autocomplete="product_id" value="{{ old('product_id') }}">
                </td>
                <td>
                    @error('product_id'){{ $message }}@enderror
                </td>
            </tr>
            <tr>
                <td>
                    product name :
                </td>
                <td>
                    <input type="text" class="form-control" name="product_name" value="{{ old('product_name') }}" autocomplete="product_name">
                </td>
                <td>
                    @error('product_name'){{ $message }}@enderror
                </td>
            </tr>
            <tr>
                <td>
                    Unit price :
                </td>
                <td>
                    <input type="text" class="form-control" name="unit_prics" value="{{ old('unit_prics') }}"  autocomplete="unit_prics">
                </td>
                <td>
                    @error('unit_prics'){{ $message }}@enderror
                </td>
            </tr>

            <tr>
                <td>
                    Quantity :
                </td>
                <td>
                    <input type="text" class="form-control" name="quantity" value="{{ old('quantity') }}"  autocomplete="quantity">
                </td>
                <td>
                    @error('quantity'){{ $message }}@enderror
                </td>
            </tr>

            <tr>
                <td>
                    Total Price :
                </td>
                <td>
                    <input type="text" class="form-control" name="total_price" value="{{ old('total_price') }}"  autocomplete="total_price">
                </td>
                <td>
                    @error('total_price'){{ $message }}@enderror
                </td>
            </tr>

            <tr>
                <td>
                    Payment Type :
                </td>
                <td>
                    <select name="payment_type" class="form-control" id="exampleFormControlSelect1">
                        <option value="cash">Cash</option>
                        <option value="card">Card</option>
                        <option value="online">Online</option>
                    </select>
                </td>
                
            </tr>
            <tr>
                <td>
                    Status :
                </td>
                <td>
                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                        <option value="sold">Sold</option>
                        <option value="unsold">Unsold</option>
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

        



        {{-- <div class="input-group mb-3">
        <input type="text" class="form-control" name="customer_name" value="{{ old('customer_name') }}" placeholder="Full name">
        </div>
        <span class="text-danger">@error('customer_name'){{ $message }}@enderror</span>


        <div class="input-group mb-3">
        <input type="text" class="form-control" name="address" value="{{ old('address') }}" placeholder="User name">
        </div>
        <span class="text-danger">@error('address'){{ $message }}@enderror</span>


        <div class="input-group mb-3">
        <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="Phone">
        </div>
        <span class="text-danger">@error('phone'){{ $message }}@enderror</span>


        <div class="input-group mb-3">
        <input type="text" class="form-control" name="product_id" autocomplete="product_id" value="{{ old('product_id') }}" placeholder="product_id">
        </div>
        <span class="text-danger">@error('product_id'){{ $message }}@enderror</span> --}}


        
        {{-- <div class="input-group mb-3">
            <input type="text" class="form-control" name="product_name"  placeholder="Company Name" value="{{ old('product_name') }}" autocomplete="product_name">
        </div>
        <span class="text-danger">@error('product_name'){{ $message }}@enderror</span> --}}


        {{-- <div class="input-group mb-3">
            <input type="text" class="form-control" name="unit_prics" value="{{ old('unit_prics') }}" placeholder="unit_prics" autocomplete="unit_prics">
        </div>
        <span class="text-danger">@error('unit_prics'){{ $message }}@enderror</span> --}}


        {{-- <div class="input-group mb-3">
            <input type="text" class="form-control" name="quantity" value="{{ old('quantity') }}" placeholder="Quantity" autocomplete="quantity">
        </div>
        <span class="text-danger">@error('quantity'){{ $message }}@enderror</span> --}}


        {{-- <div class="input-group mb-3">
            <input type="text" class="form-control" name="total_price" value="{{ old('total_price') }}" placeholder="total_price" autocomplete="total_price">
        </div>
        <span class="text-danger">@error('total_price'){{ $message }}@enderror</span> --}}


        {{-- <div class="form-group">
            <select name="payment_type" class="form-control" id="exampleFormControlSelect1">
                <option value="cash">Cash</option>
                <option value="card">Card</option>
                <option value="online">Online</option>
            </select>
        </div>


        <div class="form-group">
            <select name="status" class="form-control" id="exampleFormControlSelect1">
                <option value="sold">Sold</option>
                <option value="unsold">Unsold</option>
            </select>
        </div> --}}


        {{-- <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div> --}}
        <!-- /.col -->
        </div>
    </form>
</div>
</div>



</body>
</html>