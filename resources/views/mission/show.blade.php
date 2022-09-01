
<form  style="width:50%;margin:auto;" method="post" action="{{ route('missions.update', $missions->id ) }}">
          <div class="form-group">
              @csrf
              @method('PATCH')
           
              <div class="card">
        <header class="card-header">
            <p class="card-header-title">Mission: {{ $missions->Id }}</p>
        </header>
        <div class="card-content">
            <div class="content">
            <label for="code">Id:</label>
              {{ $missions->id }}
          </div>

          <div class="form-group">
              <label for="intitule">Intitule :</label>
             {{ $missions->intitule }}
          </div>
          <div class="form-group">
              <label for="Lieu">Lieu :</label>
             {{ $missions->Lieu }}
          </div>
          <div class="form-group">
              <label for="duree">Duree :</label>
            {{ $missions->Duree }}
          </div>
          <div class="form-group">
              <label for="date">Depart :</label>
             {{ $missions->depart  }}
          </div>
          <div class="form-group">
              <label for="date">Retour :</label>
              {{ $missions->retour }}
          </div>

            </div>
        </div>
    </div>
          
      </form>