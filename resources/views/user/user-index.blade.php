<form method="POST" action="{{ route('logout') }}">
        @csrf


        <button type="submit" href="{{ route('logout') }}">Logout</button>

    </form>
user-profile



<form action="{{ route('page.insert') }}" method="Post" enctype='multipart/form-data'>
@csrf


<label for="name">name</label>
<input type="text" name="name">

<br>
<br>



<label for="description">description</label>
<textarea name="description" id="" cols="30" rows="10"></textarea>

<br>
<br>

<label for="user_photo">user_photo</label>
<input type="file" name="user_photo">

<br>
<br>

<label for="country">country</label>
<input type="text" name="country">

<br>
<br>


<label for="cover_photo">cover_photo</label>
<input type="file" name="cover_photo">

<br>
<br>


<label for="status">status</label>
<input type="text" name="status">

<br>
<br>

<button type="submit">Submit</button>


</form>

<br><br>

<a href="{{ route('page.index') }}">pages</a>







