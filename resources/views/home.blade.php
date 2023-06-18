<x-layout>
    
    
    <div class="container-fluid background">
        
    
        
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
                
                    <li id="list">{{$todolist->name}}</li>



                    <div class="check d-flex">
                              
                                    <form action="{{ route('updatePriority', $todolist->id) }}" method="POST">

                                   
                                        @csrf

                                        
                                        <div class="form-check">
                                            <input type="radio" name="priority" value="low_priority" class="form-check-input bg-success" id="exampleCheck{{ $todolist->id }}_low" {{ $todolist->priority == 'low' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="exampleCheck{{ $todolist->id }}_low">Low</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="priority" value="medium_priority" class="form-check-input bg-warning" id="exampleCheck{{ $todolist->id }}_medium" {{ $todolist->priority == 'medium' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="exampleCheck{{ $todolist->id }}_medium">Medium</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="priority" value="high_priority" class="form-check-input bg-danger" id="exampleCheck{{ $todolist->id }}_high" {{ $todolist->priority == 'high' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="exampleCheck{{ $todolist->id }}_high">High</label>
                                        </div>
                                         
                                    </form>

                               </div>
                            
                      

                       
                        
                        
                        
                        
                       <!-- <form action="{{route('destroy', $todolist->id)}}" method="POST">
                        
                                
                            
                              @csrf
                               
                                
                                
                                @method('delete')
                                
                                <button type="submit"><i class="fas fa-trash"></i></button>
                                
                            </form> 

                         </li>  -->


                    




                  <form class="nav-item dropdown mt-2 mb-5" id="todo-form">
                  
                    <select id="color-dropdown">

                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">

                        <option name="label" value="red_label" id="exampleCheck{{ $todolist->id }}_red"  {{ $todolist->label == 'red' ? 'checked' : '' }}>🟥 healt</option>
                        <option name="label" value="blue_label" id="exampleCheck{{ $todolist->id }}_blue"  {{ $todolist->label == 'blue' ? 'checked' : '' }}>🟦 daily-life</option>
                        <option name="label" value="green_label" id="exampleCheck{{ $todolist->id }}_green"  {{ $todolist->label == 'green' ? 'checked' : '' }}>🟩 sport</option>
                        <option name="label" value="yel_label" id="exampleCheck{{ $todolist->id }}_yellow"  {{ $todolist->label == 'yellow' ? 'checked' : '' }}>🟨work</option>

                    </select>
                    
                 </form>




                

                 @endforeach
                 @endif


                 @endauth


                
                </ul>
                

            </div>
            
            
            
            
            
            
            
            
            
            
            
            
            
        </x-layout>