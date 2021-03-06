
    <div class="container text-center">
        <h2>Product Sales Log</h2>
        <div class="col-md-6 ">
           
            <form action="{{ route('SalesController.salesLog') }}" method="post">
                @csrf
                <div class="input-group mb-3">
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
                <span class="text-danger">@error('product_id'){{ $message }}@enderror</span>
                
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="product_name"  placeholder="Company Name" value="{{ old('product_name') }}" autocomplete="product_name">
                </div>
                <span class="text-danger">@error('product_name'){{ $message }}@enderror</span>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="unit_prics" value="{{ old('unit_prics') }}" placeholder="unit_prics" autocomplete="unit_prics">
                </div>
                <span class="text-danger">@error('unit_prics'){{ $message }}@enderror</span>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="quantity" value="{{ old('quantity') }}" placeholder="Quantity" autocomplete="quantity">
                </div>
                <span class="text-danger">@error('quantity'){{ $message }}@enderror</span>


                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="total_price" value="{{ old('total_price') }}" placeholder="total_price" autocomplete="total_price">
                </div>
                <span class="text-danger">@error('total_price'){{ $message }}@enderror</span>

                <div class="form-group">
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
                </div>

                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
                <!-- /.col -->
                </div>
            </form>
        </div>
    </div>


