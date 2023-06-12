<x-layout>
    
    
    <div class="container-fluid background">
        
        
        
        {{-- @dd($request->all()); --}}
        
        <div class="app mb-5 shadow">
            <h2>To-do list</h2>
            
            <form method="POST" action="{{route('store')}}" class="bgRow" enctype="multipart/form-data" autocomplete="off" >
                
                @csrf
                
                <div class="row">
                    
                    <input type="text" name="name" id="input-box" placeholder="write here..">
                    
                    
                    
                </div>
                
                <button type="submit" id="but"><i class="fas fa-plus"></i></button>
                <br>
                <br>
                
                
            </form> 
            
            
            
            
            @auth
            
            @if(count($todolists))
            @foreach ($todolists as $todolist)
            
            <div class="d-flex align-items-center justify-content-start" id="todolist">  
                <ul class="p-0 pointer">
                    <li id="list">{{$todolist->name}}



                           
                                <div class="check d-flex">
                                    <form action="{{ route('updatePriority', $todolist->id) }}" method="POST">
                                        @csrf
                                        <div class="form-check">
                                            <input type="radio" name="priority" value="low" class="form-check-input bg-success" id="exampleCheck{{ $todolist->id }}_1" {{ $todolist->priority == 'low' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="exampleCheck{{ $todolist->id }}_1">Low</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="priority" value="normal" class="form-check-input bg-warning" id="exampleCheck{{ $todolist->id }}_2" {{ $todolist->priority == 'normal' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="exampleCheck{{ $todolist->id }}_2">Normal</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="priority" value="high" class="form-check-input bg-danger" id="exampleCheck{{ $todolist->id }}_3" {{ $todolist->priority == 'high' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="exampleCheck{{ $todolist->id }}_3">High</label>
                                        </div>
                                        {{-- <button type="submit">Save</button> --}}
                                    </form>
                                </div>
                            </ul>
                        </div> 

                       
                        
                        
                        
                        
                        {{-- <form action="{{route('destroy', $todolist->id)}}" method="POST"">
                            
                            {{-- <i></i>  --}}
                            
                            {{-- @csrf
                                
                                
                                
                                @method('delete')
                                
                                <button type="submit"><i class="fas fa-trash"></i></button>
                                
                            </form> --}} 

                        {{-- </li> --}}


                    




                <form class="nav-item dropdown mb-5" id="todo-form">
                  
                    <select id="color-dropdown">

                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                        <option value="red">🟥</option>
                        <option value="blue">🟦</option>
                        <option value="green">🟩</option>
                        <option value="yellow">🟨</option>

                    </select>
                </form>




                

                @endforeach
                @endif


                @endauth


                

                

            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
        </x-layout>