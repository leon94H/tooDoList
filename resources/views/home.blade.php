<x-layout>
    
    
    <div class="container-fluid ">
        
        
        
        {{-- @dd($request->all()); --}}
        
        <div class="app mb-5">
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
            
            
            
            
            
            
            @if(count($todolists))
            @foreach ($todolists as $todolist)
            
            <div class="d-flex align-items-center justify-content-start" id="todolist">  
                <ul class="p-0 pointer">
                    <li id="list">{{$todolist->name}}

                       
                        
                        
                        
                        
                        {{-- <form action="{{route('destroy', $todolist->id)}}" method="POST"">
                            
                            {{-- <i></i>  --}}
                            
                            {{-- @csrf
                                
                                
                                
                                @method('delete')
                                
                                <button type="submit"><i class="fas fa-trash"></i></button>
                                
                            </form> --}} 

                        </li>


                       

                
                        <li class="list-group-item">Priority</li>

                      

                        <div class="check d-flex justify-content-center">

                            @php
                           $counter = 1;
                            @endphp
                            
                            
                            <div class="form-check">
                                <input type="radio" name="option_[{{ $todolist->id }}]"  class="form-check-input bg-success"id="exampleCheck{{ $todolist->id }}_{{ $counter }}">
                                <label class="form-check-label" for="exampleCheck{{ $todolist->id }}_{{ $counter }}"></label>
                            </div>
                          
                            <div class="form-check ">
                                <input type="radio" name="option_[{{ $todolist->id }}]"  class="form-check-input bg-warning" id="exampleCheck{{ $todolist->id }}_{{ $counter +1 }}">
                                <label class="form-check-label" for="exampleCheck{{ $todolist->id }}_{{ $counter+ 1 }}"><br></label>
                            </div>
                            <div class="form-check ">
                                <input type="radio" name="option_[{{ $todolist->id }}]"  class="form-check-input bg-danger" id="exampleCheck{{ $todolist->id }}_{{ $counter +2 }}">
                                <label class="form-check-label" for="exampleCheck{{ $todolist->id }}_{{ $counter + 2}}"><br></label>
                            </div>
                        
                        </div>
                    </ul>
                </div> 



            {{-- <div id="todolist">
                <ul>
                    @foreach($labels as $label)
                        <li>
                            <span style="background-color: {{ $label->color }};">&nbsp;&nbsp;&nbsp;&nbsp;</span>
                            {{ $label->name }}
                        </li>
                    @endforeach
                </ul>

                <a href="/labels/create">Create a new label</a>


                <h1>Crea Etichetta</h1>
    
                <form method="post" action="/labels">
                    @csrf
                    
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name">
                    
                    <label for="color">Color:</label>
                    <input type="color" id="color" name="color">
                    
                    <button type="submit">Salva</button>
                </form>

            </div> --}}




                

                @endforeach
                @endif





                

                

            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
        </x-layout>