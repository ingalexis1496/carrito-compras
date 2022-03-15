<x-guest-layout>
    
     
    <section class="container mt-4" >
       @if ($errors->any())
         <div class="alert alert-danger">
           <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
           </ul>
         </div>
       @endif
           
            <form action="{{route('category.update',$categories)}}" method="POST" class="form">           
            @csrf
               <div class="form-group">
               <label>Name</label>
               <input type="text" class="form-control" name="name" value="{{$categories->name}}" required/> 
               </div>
               
                
            <button  class="btn btn-info">Save</button>
            </div>
            <br>
            
            
            
        </form>

      
        </section>
   

</x-guest-layout>