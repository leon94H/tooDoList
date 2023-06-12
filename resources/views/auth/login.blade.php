
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
    
    
                                                                                  
        <div class="container-fluid background">
            {{-- <div class="row justify-content-center">
                <div class="col-12 "> --}}
                    
                    <h1 class="text-center text-white mt-5">Sign in</h1>

                    <form action="{{route('login')}}" method="POST" class="app">
                    
                        @csrf
                    
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" >Email address</label>
                            <input name="email" type="email" value="{{old('email')}}" class="form-control  @error('password') is-invalid @enderror" id="exampleInputEmail" aria-describedby="emailHelp">
                        </div>
                        
                        
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input name="password" type="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror"  id="exampleInputPassword" aria-describedby="passwordHelp"></div>
                            
                            <button type="submit" class="btn btn-primary" id="but">Login</button>
                        </div>
                            
                     </form>
                        
                        
                    
                {{-- </div>
            </div> --}}
        </div>
  
        
       

    </x-layout>