<h2>Confirmation</h2><br>

<h3>Are you sure?</h3>

<form method="POST" action="{{ route('upcomingproduct.deleted',[$data->id]) }}">
    @csrf
    <input class="form-control" type="submit" Value="Yes">
</form>
<form method="GET" action="{{ route('product.existingProducts') }}">
    <input class="form-control" type="submit" Value="No">
</form>