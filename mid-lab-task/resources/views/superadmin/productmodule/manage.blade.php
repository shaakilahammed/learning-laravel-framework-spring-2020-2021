

 <div class="content">
     <div class="container-fluid">
         <div class="row">
             {{-- Existing --}}
            <div class="col-md-6">
                 <div class="card bg-primary text-white mb-4">
                     <h1 class="card-body text-center">{{ count($data) }}</h1>
                     <div class="card-footer d-flex align-items-center justify-content-center">
                         <span class="text-center text-white stretched-link" href="#">Total Existing Products</span>
                     </div>
                 </div>
            </div>
            {{-- Upcoming --}}
            <div class="col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <h1 class="card-body text-center">{{ count($data1) }}</h1>
                    <div class="card-footer d-flex align-items-center justify-content-center">
                        <span class="text-center text-white stretched-link" href="#">Total Upcoming Products</span>
                    </div>
                </div>
           </div>
         </div>
         <!-- /.row -->
     </div><!-- /.container-fluid -->
 </div>
 
 
   
