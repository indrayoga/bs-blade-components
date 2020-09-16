@props(['name','value' => '','label','placeholder' => '','required' => false,'disabled' => false, 'type' => 'text'])

<div class="form-group">
<label for="{{ $name }}">{{ $label }}</label>
    <textarea class="form-control @error($name) is-invalid @enderror" 
    id="{{$name}}" 
    value="{{old($name,$value)}}" 
    name="{{$name}}" 
    placeholder="{{$placeholder}}"
    {{ $required ? 'required' : '' }}
    {{ $disabled ? 'disabled' : '' }}></textarea>
    @error($name)
    <span class="error invalid-feedback" role="error">{{$message}}</span>
    @enderror
</div>
