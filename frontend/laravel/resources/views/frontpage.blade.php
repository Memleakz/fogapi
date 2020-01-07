<h2>Nyeste dokumenter</h2>
<h2>Folketingens medlemmer oversigt</h2>
<h2>Møde oversigt</h2>
<h2>Afstemnings oversigt</h2>

<h2>Emneords oversigt</h2>
<select>
@foreach ($keywords['data']['Keywords'] as $keyword)
    <option value="{{ $keyword["id"] }}">{{ $keyword["emneord"] }}</option>
@endforeach
</select>
<?php //echo var_dump($keywords) ?>
<h2>Sags oversigt oversigt</h2>
<h2>Aktører</h2>

@foreach ($aktører['data']['Aktoers'] as $aktor)
    <p>{{ $aktor["navn"] }}</p>
    <p>{{ $aktor["typeid"] }}</p>
@endforeach

