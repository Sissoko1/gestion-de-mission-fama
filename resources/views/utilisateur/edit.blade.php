<form style="width: 50%;margin:auto" method="post" action="{{ route('unites.update', $unite->id)}}">
<div class="form-groupe">
    @csrf
    @method('PATCH')
    <label for="code">Matricule :</label>
    <input type="text" class="form-control" name="matricule" value="{{$unite->matricule}}"/>
</div>

<div class="form-groupe">
    <label for="code">Corps :</label>
    <input type="text" class="form-control" name="corps" value="{{$unite->corps}}"/>
</div>

<div class="form-groupe">
    <label for="code">Grade :</label>
    <input type="text" class="form-control" name="grade" value="{{$unite->grade}}"/>
</div>
<div class="form-groupe">
    <label for="code">Nom :</label>
    <input type="text" class="form-control" name="nom" value="{{$unite->nom}}"/>
</div>

<div class="form-groupe">
    <label for="code">Prenom :</label>
    <input type="text" class="form-control" name="prenom" value="{{$unite->prenom}}"/>
</div>

<div class="form-groupe">
    <label for="code">telephone :</label>
    <input type="number" class="form-control" name="telephone" value="{{$unite->telephone}}"/>
</div>