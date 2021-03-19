<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<h1>Login Page</h1>

	<form method="post">
        @csrf
       
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="{{ old('email') }}">
                        @error('email')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror
                    </td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{ old('password') }}">
                        @error('password')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror
                    </td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
					<td><a href="{{route('registration.index')}}">Registration</a></td>  
        
                    
					<td></td>
                    <span style="color: red">
                        {{ session('error') }}
                    </span>
				</tr>
			</table>
		</fieldset>
	</form>

    {{-- {{session('msg')}} --}}

</body>
</html>