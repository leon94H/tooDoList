
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
                <div class="col-12 col-md-6">
                    
                    <h1 class="text-center mt-5">Sign in</h1>

                    <form action="{{route('login')}}" method="POST" class="app">
                    
                    
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror " id="exampleInputName" aria-describedby="nameHelp">
                        </div>
                        
                        
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror " id="exampleInputName" aria-describedby="nameHelp">                    </div>
                            
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                            
                     </form>
                        
                        
                    
                </div>
            </div>
        </div>
    </div>

    </x-layout>