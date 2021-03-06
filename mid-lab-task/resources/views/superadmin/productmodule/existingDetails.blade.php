

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item "><a href="{{ route('product.manage') }}">Product Manage</a></li>
                    <li class="breadcrumb-item active">Manage</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">


            <div class="card-header">
              <h1>Product Details</h1>
              
              <a href="{{ route('product.addProducts') }}" class="card-title float-right">
                <i class="fas fa-plus-circle nav-icon"></i>
               Add Product
              </a>
              
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



