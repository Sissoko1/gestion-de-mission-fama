<form style="width: 50%;margin:auto" method="post" action="{{ route('missions.update', $mission->id)}}">
<div class="form-groupe">
    @csrf
    @method('PATCH')
    <label for="code">intitule :</label>
    <input type="text" class="form-control" name="intitule" value="{{$mission->intitule}}"/>
</div>

<div class="form-groupe">
    <label for="code">lieu :</label>
    <input type="text" class="form-control" name="lieu" value="{{$mission->lieu}}"/>
</div>

<div class="form-groupe">
    <label for="code">duree :</label>
    <input type="text" class="form-control" name="duree" value="{{$mission->duree}}"/>
</div>
<div class="form-groupe">
    <label for="code">date depart :</label>
    <input type="text" class="form-control" name="date" value="{{$mission->date}}"/>
</div>

<div class="form-groupe">
    <label for="code">date retour :</label>
    <input type="text" class="form-control" name="date" value="{{$mission->date}}"/>
</div>

