@props([
'name','value' => '','label','placeholder' => '',
'required' => false,'disabled' => false,
'items',
])

<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <select class="form-control @error($name) is-invalid @enderror" id="{{$name}}" name="{{$name}}"
        placeholder="{{$placeholder}}" {{ $required ? 'required' : '' }} {{ $disabled ? 'disabled' : '' }}
        {{$attributes}}>
        <option value="">Pilih</option>
        @forelse ($items as $key => $value)
        <option value="{{$key}}" @if (old($name,$value)==$key) {{"selected=selected"}} @endif>{{$value}}</option>
        @empty

        @endforelse
    </select>

    @error($name)
    <span class="error invalid-feedback" role="error">{{$message}}</span>
    @enderror
</div>