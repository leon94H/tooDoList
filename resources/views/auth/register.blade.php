<x-layout>


    @if (session('message'))
    <div class="alert alert-succes py-2 shadow my-4">
        <p>{{session('message')}}</p>
    </div>
    @endif

    @if ($errors->any())
    @foreach ($errors->all() as $error)

    <div class="alert danger-succes py-2 shadow my-4">
        <p>{{$error}}</p>
    </div>

    @endforeach
    @endif



    <div>                                                                                  
        <div class="container-fluid background">
            <div class="row background justify-content-center">
                <div class="col-12 col-md-6 ">
    
                    <h1 class="text-center mt-5">Register now</h1>
    

                    <form action="{{route('register')}}" method="POST" class="app">


                        @csrf
                    
                        <div class="mb-3">
                    
                            <label for="exampleInputName" class="form-label">name</label>
                            <input type="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror " id="exampleInputName" aria-describedby="nameHelp">
                            
                        </div>
                      
                    
                        <div class="mb-3">
                    
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp">
                          
                        </div>
                    
                        <div class="mb-3">
                    
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" aria-describedby="emailHelp">
                    
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Register</button>
                      </form>
                      
                </div>
            </div>
        </div>
    </div>



</x-layout>