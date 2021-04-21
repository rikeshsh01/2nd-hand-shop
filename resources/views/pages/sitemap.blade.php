@extends('layouts.page')
@section('content')	
<br>
<div class ="container">
   <h1 align ="center">Sitemap </h1> 
</div>
<hr>


  <div class="container" width="100%">
     <table border= '1' class ="table" align ="center">
        <thead>
           <tr align="center">
               <td>SN</td>
               <td>Name</td>
               <td>Details</td>
               <td>Description</td>
               <td>Image</td>
               <td>Upload Date</td>
               <td>Show</td>
           </tr>
        </thead>
        <tbody>
         @foreach($sm as $t)
            <tr align="center">
               
                  <td>{{$loop->iteration}}</td>
                  <td>{{$t->name}}</td>
                  <td>{{$t->details}}</td>
                  <td>{{$t->description}}</td>
                  <td><img src="{{asset('/uploadimage/'. $t->image)}}" width="100px" alt="product"></td>
                  <td>{{$t->updated_at}}</td>
                  <td><button class="btn-btn-success"><a href="/singlepage/{{$t->id}}">DETAILS</a></button></td>
    
            </tr>
            @endforeach
        </tbody>
     </table>
{{--    
<ul>@foreach($sm as $t)
   <li>{{$t->name}}</li>
   @endforeach</ul>
    --}}
  </div>

@endsection