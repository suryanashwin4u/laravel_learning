<h1>ADD A MEMBER</h1>
@if(session('user'))
<h1>data saved for {{session('user')}}</h1>
@endif
<form action="/storecontroller" method="POST">
    @csrf
    <input type="text" name="user" placeholder="enter user name"> <br></br>
    <input type="password" name="password" placeholder="enter user password"> <br></br>
    <input type="text" name="email" placeholder="enter user email id"> <br></br>
    <button type="submit">add user</button>
</form>