<html>
    <head>
    <title> All Posts </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">body</th>
       <th scope="col"> Action</th>



    </tr>

  </thead>
  <tbody>
  @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->body}}</td>
      <td>
      <a class="btn btn-primary" href="{{route('post.edit',$post->id)}}" role="button">Edit</a>
      <a class="btn btn-danger" href="{{route('post.delete',$post->id)}}" role="button">Delete</a>

      </td>

    </tr>
    @endforeach

  </tbody>
</table>
</body>
</html>
