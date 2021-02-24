@extends('layouts.firstlayout')
 @section('content')
<div id="form">
  <form action="firstpost" method="post">
    {{ csrf_field() }}
   <h2 class="name">名前</h2> 
    <input class="name" type="text"name="name">
   <h2 class="age">年齢</h2>
    <input class="agetext" type="text" name="age">
   <h2 class="come">コメント</h2>
    <textarea class="cometext" name="come" cols="50" rows="10"></textarea>
  <button class='button'type='submit'>投稿する</button>  
 </form>
</div>
 @endsection
