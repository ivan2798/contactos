 @extends('layouts/mi_layout') 

 @section('contenido')
<div class="contenido">  
     CONBTACTO 
     
       @for($i=0; $i < 5; $i++) 
            <li>Eelemento {{$i}}</li>
       @endfor 
      
       
    
</div>
@endsection