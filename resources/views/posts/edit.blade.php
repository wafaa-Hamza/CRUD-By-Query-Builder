<h1>    Edit posts :{{$post->title}}</h1>

<form method="post" action="{{route('post.update' ,$post->id)}}">
@csrf
<input type="text" name="title" value="{{$post->title}}"> <br>
<input type="text" name="body"  value="{{$post->body}}"><br>

<button name="submit">Insert </button>


</form>
