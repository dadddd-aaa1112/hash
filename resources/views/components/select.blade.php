<div class="col-md-12">
    <div class="form-group">
        <div class="d-flex flex-row">
            <label for="{{ $fieldName }}" class="col-md-3 col-form-label">{{ $title }}</label>
            <select name="{{ $fieldName }}" id="{{ $fieldName }}" class="form-control">
                <option value="0">выбрать</option>
                @foreach($entities as $entity)
                    <option value="{{ $entity->id }}"
                            @if(isset($value))
                                @if($entity->id === $value)
                                    selected
                        @endif
                        @endif
                    >{{ $entity->title }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>
