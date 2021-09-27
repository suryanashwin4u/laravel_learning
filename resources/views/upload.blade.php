<h1>upload file</h1>
<form action="/uploader" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit">upload</button>
</form>