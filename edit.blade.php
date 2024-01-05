<h1> Edit User </h1>

<form action="/edit" method="POST"> 
  
@csrf
<input type="hidden" name="id" value="{{$data['id']}}"  placeholder="Name"/>

<input type="text" name="fullname" value="{{$data['Name']}}"  placeholder="Name"/></br>
</br>

<input type="password" name="password" value="{{$data['Password']}}" placeholder="Password"/></br>
</br>

<input type="email" name="email" value="{{$data['Email']}}" placeholder="Email"/></br>
</br>

<button type="submit"> Update </button>
  
</form>
