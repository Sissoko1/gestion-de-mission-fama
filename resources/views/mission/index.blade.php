<div class="card-header">
  La liste des missions
  </div>
  <div class="d-flex align-items-center p-3 my-3 text-white bg-purple rounded shadow-sm">
    
    
        <table class="table  table-bordered table-responsive ">
          
        
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">intitule</th>
                <th scope="col">lieu</th>
                <th scope="col">duree</th>
                <th scope="col">depart</th>
                <th scope="col">retour</th>
                <th scope="col" colspan="3">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($missions as $mission)
                <tr>
                    <th scope="row">{{$mission->id}}</th>
                    <td>{{$mission->intitule}}</td>
                    <td>{{$mission->lieu}}</td>
                    <td>{{$mission->duree}}</td>
                    <td>{{$mission->depart}}</td>
                    <td>{{$mission->retour}}</td>
                    <td><a href="{{ route('missions.show', $mission->id)}}" class="btn btn-primary">Details</a></td>
                    <td><a href="{{ route('missions.edit', $mission->id)}}" class="btn btn-primary">Modifier</a></td>
                    
                    <td>
                        <form action="{{ route('missions.destroy', $mission->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
           
        </table>
       
    </div>
    
 </div>