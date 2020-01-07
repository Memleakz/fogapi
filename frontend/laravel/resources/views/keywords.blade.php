<select>
@foreach ($keywords['data']['Keywords'] as $keyword)
    <option value="{{ $keyword["id"] }}">{{ $keyword["emneord"] }}</option>
@endforeach
</select>
