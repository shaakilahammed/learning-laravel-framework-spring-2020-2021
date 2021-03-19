
<a href="/admin">Home</a> | 
<a href="{{ route('product.manage') }}">Product Manage</a> | 
<a href="{{ route('product.addProducts') }}" >Add Product</a>

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h1>Product Details</h1>
              
              
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <h2>Product Name : {{  $data->product_name }}</h2>
                <h2>Price : {{  $data->unit_prics }}</h2>
                <h2>Quantity : {{  $data->quantity }}</h2>
                <h2>Status : {{  $data->status }}</h2>
                <h2>Product Name : {{  $data->product_name }}</h2>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>



