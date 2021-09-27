<h1>add members</h1>
<form action="/addnow" method="POST">
    @csrf
    <input type="text" name="name" placeholder="enter name"><br><br>
    <input type="text" name="email" placeholder="enter email"><br><br>
    <input type="text" name="address" placeholder="enter address"><br><br>
    <button type="submit">add members</button>
</form>