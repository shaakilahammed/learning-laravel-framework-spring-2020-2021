<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
</head>
<body>
	<h1>Registration Page</h1>

	<form method="post" action="{{route('registration.register')}}">
        @csrf
       
		<fieldset>
			<legend>Registration</legend>
			<table>
                <tr>
					<td>Full Name</td>
					<td><input type="text" name="full_name" value="{{ old('full_name') }}">
                        @error('full_name')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror
                    </td>
				</tr>
                
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="{{ old('email') }}">
                        @error('email')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror
                    </td>
				</tr>
                <tr>
					<td>City</td>
					<td><input type="text" name="city" value="{{ old('city') }}">
                        @error('city')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror
                    </td>
				</tr>
                <tr>
					<td>Country</td>
					<td><input type="text" name="country" value="{{ old('country') }}">
                        @error('country')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror
                    </td>
				</tr>
                <tr>
					<td>Phone</td>
					<td><input type="text" name="phone" value="{{ old('phone') }}">
                        @error('phone')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror
                    </td>
				</tr>
                <tr>
					<td>Company Name</td>
					<td><input type="text" name="company_name" value="{{ old('company_name') }}">
                        @error('company_name')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror
                    </td>
				</tr>
                <tr>
					<td>Username</td>
					<td><input type="text" name="user_name" value="{{ old('user_name') }}">
                        @error('user_name')
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
					<td>Confirm Password</td>
					<td><input type="password" name="password_confirmation" value="{{ old('confirmPassword') }}">
                        @error('confirmPassword')
                        <span style="margin:auto; color:red">{{ $message }}</span>
                        @enderror
                    </td>
				</tr>
                <tr>
					<td>User Type</td>
					<td>
						<select name='type'>
							<option value="admin"> ADMIN </option>
							<option value="customer"> Customer </option>
                            <option value="vendor"> Vendor </option>
							<option value="accountant"> Accountant </option>
						</select>
					</td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit"> </td>
                    <td><a href="{{route('login.index')}}">Login</a></td>     
        
                   
					
                    {{-- <span style="color: red">
                        {{ session('error') }}
                    </span> --}}
				</tr>
			</table>
		</fieldset>
	</form>

    <!-- {{-- {{session('msg')}} --}} -->

</body>
</html>