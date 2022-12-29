<h1>    create posts</h1>

<form method="post" action="{{url('post/insert')}}">
@csrf
<input type="text" name="title" placeholder="Enter Title"> <br>
<input type="text" name="body" placeholder="Enter Body"><br>

<button name="submit">Insert </button>


</form>
