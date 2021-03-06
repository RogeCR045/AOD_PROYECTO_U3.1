<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">
    <br><br>

    <div class="card">

        <div class="card-header">

         <div class="row">
          <div class="col md 8">

            <h2 class="card-title">Listado de contactos registrados en la base de datos</h2>
            </div>
            <div class="col md 4">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                
               <a class="btn btn-primary" href="{{ route('contacts.create') }}"><i class="fa fas-add"></i> +Nuevo</a>
              
              </div>
            </div>
            </div>
        </div>

        <div class="card-body">
         <table class="table table-striped">

        <thead>
            <tr>
                <th>Nombre del contacto</th>
                <th>Información</th>
                <th>Descripción</th>
                <th>Acciones</th>
                
            </tr>
        </thead>

        <tbody>
            @forelse ($contacts as $contact)
       
        
       <tr>
       
      <td>
        <a class="btn btn-info btn-small" href="{{ route('contacts.show', $contact->id) }}">  
        <h4>{{ $contact->fullname }} {{  $contact->years }}</h4> Años</td>
    </a>
      <td>
         <p><b>Dirección de correo:</b> {{ $contact->mailaddress  }}</p>
         <p><b>Calle y codigo postal:</b> {{ $contact->Street }}</p>
         <p><b>Localidad:</b> {{ $contact->location }}</p>
        
         <p><b>Ciudad:</b> {{ $contact->city }}</p>
         <p><b>Estado:</b> {{ $contact->condition }}</p>
      </td>
      <td><p>{{ $contact->website }}</p></td>
        <td>ver | editar | eliminar</td>
      
        
        @empty
        <h1>La tabla no tiene datos</h1>
    </tr>
        @endforelse
    </tbody>
        </table> 

        </div>
        </div>


       