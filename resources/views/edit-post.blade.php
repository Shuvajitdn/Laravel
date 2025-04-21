<form action="/posts/{{$post->id}}" method="POST">
@csrf
{{method_field('PATCH')}}
<input type="text" name="title" placeholder="Enter post title" value="{{$post->title}}"> <br>
<input type="text" name="body" placeholder="Enter the post description" value="{{$post->body}}"><br>
<input type="submit" value="Update Post">
</form>