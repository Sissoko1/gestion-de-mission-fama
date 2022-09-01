<div class="card-header">
  La liste des militaires de l unite
  </div>
  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
    
    
        <table class="table  table-bordered table-responsive ">
          
        
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Matricule</th>
                <th scope="col">Corps</th>
                <th scope="col">Grade</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Telephone</th>
                <th scope="col" colspan="3">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($unites as $unite)
                <tr>
                    <th scope="row">{{$unite->id}}</th>
                    <td>{{$unite->matricule}}</td>
                    <td>{{$unite->corps}}</td>
                    <td>{{$unite->grade}}</td>
                    <td>{{$unite->nom}}</td>
                    <td>{{$unite->prenom}}</td>
                    <td>{{$unite->telephone}}</td>
                    <td><a href="{{ route('unites.show', $unite->id)}}" class="btn btn-primary">Details</a></td>
                    <td><a href="{{ route('unites.edit', $unite->id)}}" class="btn btn-primary">Modifier</a></td>
                    <td>
                        <form action="{{ route('unites.destroy', $unite->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
           
        </table>
       
   