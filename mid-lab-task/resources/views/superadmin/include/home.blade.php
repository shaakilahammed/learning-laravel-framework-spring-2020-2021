@extends('superadmin.master')

@section('title')
    Admin || Dashboard
@endsection

@section('content')
<div class="content">
    <div class="container-fluid" style="margin-left: 25rem; margin-top:17rem;">
        <div class="row">
            <div class="text-center">
                <h1>Welcome  {{ Auth::user()->user_name }}</h1>
                <h3>to your dashboard</h3>
            </div> 
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>



@endsection
