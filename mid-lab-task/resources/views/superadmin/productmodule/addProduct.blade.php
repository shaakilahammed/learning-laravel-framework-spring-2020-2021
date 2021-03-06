
 

    <div class="container text-center">
        <h2>Add Products</h2>
        <div class="col-md-12  ">
           
            <form action="{{ route('product.storeProduct') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                <input type="text" class="form-control" name="product_name" value="{{ old('product_name') }}" placeholder="Product name">
                </div>
                <span class="text-danger">@error('product_name'){{ $message }}@enderror</span>
                <div class="input-group mb-3">
                <input type="text" class="form-control" name="unit_prics" value="{{ old('unit_prics') }}" placeholder="Unit Prics">
                </div>
                <span class="text-danger">@error('unit_prics'){{ $message }}@enderror</span>
                <div class="form-group">
                    <select class="custom-select " name="category_id">
                        @forelse($category as $cat)
                        <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                        @empty
                        @endforelse
                    </select>
                </div>
                <div class="input-group mb-3">
                <input type="text" class="form-control" name="quantity" autocomplete="quantity" value="{{ old('quantity') }}" placeholder="quantity">
                </div>
                <span class="text-danger">@error('quantity'){{ $message }}@enderror</span>
                
                <div class="form-group">
                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                    <option value="existing">existing</option>
                    <option value="upcoming">upcoming</option>
                    </select>
                </div>

                <div class="form-group">
                    <select class="custom-select " name="vendor_id">
                        @forelse($vendor as $ven)
                        <option value="{{ $ven->id }}">{{ $ven->vendor_name }}</option>
                        @empty
                        @endforelse
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
                <!-- /.col -->
                </div>
            </form>
        </div>
    </div>


