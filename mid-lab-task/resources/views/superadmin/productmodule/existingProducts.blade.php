


<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <ol class="breadcrumb float-right">
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
              
              
              <a href="{{ route('product.addProducts') }}" class="card-title float-right">
                <i class="fas fa-plus-circle nav-icon"></i>
               Add Product
              </a>
              
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-hover" >
                <thead class="table-dark">
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
                    @foreach($existingpro as $key => $data)
                        <tr>
                            <th>{{ $data->id }}</th>
                            <td>{{ $data->product_name }}</td>
                            <td>{{ $data->unit_prics }}</td>
                            <td>{{ $data->category_id }}</td>
                            <td>{{ $data->quantity }}</td>
                            <td>{{ $data->status }}</td>
                            <td>{{ $data->vendor_id }}</td>
                            <td>
                              <a href="{{ route('existingproduct.delete',$data->id) }}">Delete
                               
                              {{-- <a href="{{ route('existingproduct.delete',$data->id) }}" title="Delete" class="btn text-danger">
                                <i class="fas fa-trash nav-icon"></i> --}}
                            </a>
                            {{-- <a href="{{ route('existingproduct.edit',$data->id) }}" title="Edit" class="btn text-success">
                                <i class="fas fa-edit nav-icon"></i> --}}
                            <a href="{{ route('existingproduct.edit',$data->id) }}">Edit
                            </a>
                            {{-- <a href="{{ route('existingproduct.details',$data->id) }}" title="Details" class="btn text-success">
                                <i class="fas fa-info-circle nav-icon"></i> --}}
                            <a href="{{ route('existingproduct.details',$data->id) }}">Details
                            </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
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

