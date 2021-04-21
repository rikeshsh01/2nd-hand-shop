@extends('layouts.page')
@section('content')
<br><br><br>	

<div class ="container">
	

	
   <h1 align ="center">Wishlist</h1> 


  <div class="container" width="100%">
     <table border= '1' style="table-layout:fixed;" class ="table table-hover table-bordered table-dark " align ="center">
        <thead>
           <tr align="center" style="font-weight: bold">
               <td>SN</td>
               <td>Name</td>
               <td style="word-break: break-all;">Description</td>
               <td>Image</td>
               <td>Remove</td>
           </tr>
        </thead>
        <tbody>
         @foreach($posts as $t)
            <tr align="center" style="font-weight: bold">
               
                  <td>{{$loop->iteration}}</td>
                  <td>{{$t->post->name}}</td>
                  <td style="word-break: break-all;">{{$t->post->description}}</td>
                  <td><img src="{{asset('/uploadimage/'. $t->post->image)}}" width="100px" alt="product"></td>
                  <td> 
                     <button class="btn-btn-primary"><a href="{{"dislike/".$t->post_id}}"><i class="fas fa-window-close" aria-hidden="true"></i></a></button>
                  </td>
            </tr>
            @endforeach

        </tbody>
     </table>
{{--    
<ul>@foreach($post as $t)
   <li>{{$t->name}}</li>
   @endforeach</ul>
    --}}
  </div>
</div>

@endsection