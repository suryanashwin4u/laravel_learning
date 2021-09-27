<h1>form</h1>
<form action="/check_login" method="POST">
    @csrf
    <input type="text" name="username" placeholder="enter email id">
    <br>
    <input type="password" name="password" placeholder="enter password">
    <br>
    <button type="submit">Login</button>
</form>