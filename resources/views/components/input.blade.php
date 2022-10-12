<div class="col-md-12 mb-2">
    <div class="form-group">
        <div class="d-flex flex-row w-50">
            <label for="{{ $fieldName }}" class="col-md-3 col-form-label">{{ $title }}</label>
            <input id="{{ $fieldName }}" type="{{ $type ?? 'text'}}"
                   class="form-control mr-2 @error($fieldName) is-invalid @enderror" name="{{ $fieldName }}"
                   value="{{ isset($password) ? '' :
               old($fieldName, isset($additional_value) ? $additional_value : (isset($entity) ? $entity->$property : null)) }}"
                   @isset($autocomplete) autocomplete="{{ $autocomplete }}" @endisset
                   @isset($placeholder) placeholder="{{ $placeholder }}" @endisset
                   @if(isset($readonly) && $readonly) readonly @endif
                   @if(isset($disabled) && $disabled) disabled @endif
                   @isset($required) required @endisset
                   @isset($maxlength) maxlength="{{ $maxlength }}" @endisset
            >
            @include('components.error', ['fieldName' => $fieldName])
        </div>
    </div>
</div>
