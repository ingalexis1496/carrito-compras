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
               
           <form action="{{route('product.update',$products)}}" method="POST" class="form">           
            @csrf
               <div class="form-group">
               <label>Name</label>
               <input type="text" class="form-control" value="{{$products->name}}" required/> 
               </div>
               <label>Image</label> <br>
               <div class="input-group mb-3">                   
                   <div class="custom-file">
                     <input type="file" name="url_image" class="custom-file-input"  value="">
                     <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02" value="{{$products->url_image}}">{{$products->url_image}}</label>
                   </div>
                   <div class="input-group-append">
                     <span class="input-group-text"  id="inputGroupFileAddon02">Upload</span>
                   </div>
                 </div>
               <div class="form-group">
                   <label for="exampleFormControlTextarea1">Description</label>
                   <textarea type="text" class="form-control" name="description"    rows="3">{{$products->description}}</textarea>
                 </div>
               <div class="form-group">    
               <label>Price</label>
               <input type="text" class="form-control" name="price"  value="{{$products->price}}" required/> 
            </div>
            <div class="text-center">
                
            <button  class="btn btn-info">Save</button>
            </div>
            <br>
                <br>
                
                
                
            </form>
           
    </section>
    
            </x-guest-layout>
    