
<form  style="width:50%;margin:auto;" method="post" action="{{ route('unites.update', $unites->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
           
              <div class="card">
        <header class="card-header">
            <p class="card-header-title">unite: {{ $unites->Id }}</p>
        </header>
        <div class="card-content">
            <div class="content">
            <label for="code">Id:</label>
              {{ $unites->id }}
          </div>

          <div class="form-group">
              <label for="date">Matricule :</label>
             {{ $unites->matricule }}
          </div>
          <div class="form-group">
              <label for="heure">corps :</label>
             {{ $unites->corps }}
          </div>
          <div class="form-group">
              <label for="plcA">grade:</label>
            {{ $unites->grade }}
          </div>
          <div class="form-group">
              <label for="plcB">nom :</label>
             {{ $unites->nom }}
          </div>
          <div class="form-group">
              <label for="prixA">prenom :</label>
              {{ $unites->prenom }}
          </div>
          <div class="form-group">
              <label for="prixA">telephone :</label>
              {{ $unites->telephone }}
          </div>
            </div>
        </div>
    </div>
          
      </form>