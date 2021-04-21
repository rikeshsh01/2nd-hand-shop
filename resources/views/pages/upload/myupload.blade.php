@extends('layouts.page')
@section('content')
<br><br><br>	

  <div class="container">
      <div class="my-upload">

         <a>
      
            <p>My Upload</p>
      
         </a>
      
      </div>
     <table border= '2' style="table-layout: fixed" class ="table table-hover  table-dark" align ="center">
        <thead class="">
           <tr align="center" style="font-weight: bold">
               <td>SN</td>
               <td>Name</td>
               <td style="word-break: break-all;">Details</td>
               <td style="word-break: break-all;">Description</td>
               <td>Image</td>
               <td>Upload Date</td>
               <td>Update</td>
           </tr>
        </thead>
        <tbody>
         @foreach($post as $t)
            <tr align="center" style="font-weight: bold">
               
                  <td>{{$loop->iteration}}</td>
                  <td>{{$t->name}}</td>
                  <td style="word-break: break-all;">{{$t->details}}</td>
                  <td style="word-break: break-all;">{{$t->description}}</td>
                  <td><img src="{{asset('/uploadimage/'. $t->image)}}" width="100px" alt="product"></td>
                  <td>{{$t->updated_at}}</td>
                  <td> 
                     <button class="btn-btn-success"><a href="/singlepage/{{$t->id}}"><i class="fa fa-info-circle" aria-hidden="true"></i></a></button>
                     <button alt="edit" class="btn-btn-info"><a  href="{{"editpost/".$t['id']}}"><i class="fas fa-edit"></i></a></button>
                     <button class="btn-btn-primary"><a href="{{"deletepost/".$t['id']}}"><i class="fa fa-trash" aria-hidden="true"></i></a></button>
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


@endsection