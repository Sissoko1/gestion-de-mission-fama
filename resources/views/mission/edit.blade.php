<form style="width: 50%;margin:auto" method="post" action="{{ route('reservations.update', $reserv->id)}}">
<div class="form-groupe">
    @csrf
    @method('PATCH')
    <label for="code">Matricule :</label>
    <input type="text" class="form-control" name="matricule" value="{{$reserv->matricule}}"/>
</div>

<div class="form-groupe">
    <label for="code">Corps :</label>
    <input type="text" class="form-control" name="corps" value="{{$reserv->corps}}"/>
</div>

<div class="form-groupe">
    <label for="code">Grade :</label>
    <input type="text" class="form-control" name="grade" value="{{$reserv->grade}}"/>
</div>
<div class="form-groupe">
    <label for="code">Nom :</label>
    <input type="text" class="form-control" name="nom" value="{{$reserv->nom}}"/>
</div>

<div class="form-groupe">
    <label for="code">Prenom :</label>
    <input type="text" class="form-control" name="prenom" value="{{$reserv->prenom}}"/>
</div>

<div class="form-groupe">
    <label for="code">telephone :</label>
    <input type="text" class="form-control" name="sexe" value="{{$reserv->telephone}}"/>
</div>