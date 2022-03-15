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
           
            <form action="{{route('category.store')}}" method="POST" class="form">           
            @csrf
               <div class="form-group">
               <label>Name</label>
               <input type="text" class="form-control" name="name" required/> 
               </div>
               
                
            <button  class="btn btn-info">Save</button>
            </div>
            <br>
            
            
            
        </form>

        <table class="table table-bordered">
        <thead>
        <tr> 
        <th >Name</th>
        <th>Action</th>
        </tr>

        </thead>
        <tbody>
            @foreach($categories  as $category)
         
            <tr>
                <td>{{$category->name}}</td>
                <td>
                    <a href="{{ route('category.edit' , $category) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('category.delete' , $category) }}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>

        </table>
        </section>
   

</x-guest-layout>