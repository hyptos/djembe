@extends('layouts.master')

@section('title', 'Texte à trou')

@section('content')

<h3>Texte à trous</h3>
<p> </p>
 <p class="listedesmots"><u>mots à utiliser :</u>
 cette, amis, maison, ce, poissons, se, rivière,  car, aussi, pont
</p>
<p> </p>

<form role="form" action="textatrou" method="post" class="registration-form">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p>
     Lucas vit dans une <input size="8" type="text" name="a">
     en bois au bord de la <input size="8" type="text" name="b">.
     Il va souvent <input size="8" type="text" name="c">
     baigner dans <input size="8" type="text" name="d"> cours d'eau. Il
     pêche aussi des <input size="8" type="text" name="e">. Lucas doit passer sur le petit <input size="8" type="text" name="f">
     pour aller à l'école <input size="8" type="text" name="g"> elle est de l'autre côté de la rivière. Tous les
     <input size="8" type="text" name="h"> de Lucas vont <input size="8" type="text" name="i"> dans
     <input size="8" type="text" name="j"> école.
    </p>
    <p> </p>
    <p> </p>
    <p class="rep">
    <input type="submit" name="envoyer" value="Vérifier les réponses">
    <input type="reset" name="effacer" value="Tout effacer !">
    <p>
    </table>
</form>

@stop
