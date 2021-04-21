@extends('layouts.page')
@section('content')
<br>
<br>
<br>
<h2 align="center">Search Result</h2>
<hr>
<div class="container" width="100%">
     <table border= '1' style="table-layout: fixed" class ="table table-hover table-bordered table-dark" align ="center">
        <thead>
           <tr align="center">
               <td>SN</td>
               <td>Name</td>
               <td style="word-break: break-all">Details</td>
               <td style="word-break: break-all">Description</td>
               <td>Image</td>
               <td>Upload Date</td>
               <td>Update</td>
           </tr>
        </thead>
        <tbody>
         @foreach($post as $t)
            <tr align="center">
               
                  <td>{{$loop->iteration}}</td>
                  <td>{{$t->name}}</td>
                  <td style="word-break: break-all">{{$t->details}}</td>
                  <td style="word-break: break-all">{{$t->description}}</td>
                  <td><img src="{{asset('/uploadimage/'. $t->image)}}" width="100px" alt="product"></td>
                  <td>{{$t->updated_at}}</td>
                  <td> 
                     <button class="btn-btn-success"><a href="/singlepage/{{$t->id}}">DETAILS</a></button>
                  </td>
            </tr>
            @endforeach
        </tbody>
     </table>

  </div>

@endsection