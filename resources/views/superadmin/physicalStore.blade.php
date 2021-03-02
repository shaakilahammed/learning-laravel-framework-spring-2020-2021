
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Superadmin Home</title>
</head>
<body>
    <a href="/logout">logout</a>
    
    <a  href="{{ route('salesLogDetails') }}">View Sales Log</a> 
    <a href="{{ route('SalesController.salesLog') }}">Sell Product</a>

    <h1>Todays Total Sell :{{ count($data1)}}</h1>
    <h1>Last 7day sell :{{ count($data2)}}</h1>
    <h1>Most Sold item :{{ count($data3)}}</h1>
    <h1>Avg sell amount of month :{{ $data4}}</h1>
    
</body>
</html>