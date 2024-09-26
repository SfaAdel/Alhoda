<!-- Start Card Content -->
<div class="card-content">

    {{-- name --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">اسم العقار</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    {!! Form::text('name', null, ['class' => 'input', 'required']) !!}
                </div>
            </div>
        </div>
    </div>
    <hr />

    {{-- City --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">المدينة</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    {!! Form::text('city', null, ['class' => 'input', 'required']) !!}
                </div>
            </div>
        </div>
    </div>

    {{-- area --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required"> المنطقة </label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    {!! Form::text('area', null, ['class' => 'input', 'required']) !!}
                </div>
            </div>
        </div>
    </div>

    {{-- sector --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">القطاع</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    {!! Form::text('sector', null, ['class' => 'input', 'required']) !!}
                </div>
            </div>
        </div>
    </div>

    {{-- phone --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">رقم الهاتف </label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    {!! Form::tel('phone', null, ['class' => 'input', 'required']) !!}
                </div>
            </div>

        </div>
    </div>

    {{-- Tags --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">الوسوم</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    <select-all :inputs="{{ $tags }}" forname="tags[]"
                        @if (isset($Property) && $Property->tags->isNotEmpty()) :oldvalues="{{ $Property->tags }}" @endif>
                    </select-all>
                </div>
            </div>
        </div>
    </div>

    {{-- short_description --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">وصف قصير</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    {!! Form::text('short_description', null, ['class' => 'input', 'required']) !!}
                </div>
            </div>
        </div>
    </div>

    {{-- long_description --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">وصف طويل</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    <ck-editor id="long_description" name="long_description"
                        @if (isset($property)) old-data="{{ $property->long_description }}" @endif></ck-editor>
                </div>
            </div>
        </div>
    </div>

    {{-- active --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">الحالة</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="active" value="1"
                            @if (isset($property) && $property->active) checked @else checked @endif> موجود
                    </label>
                    <label class="radio">
                        <input type="radio" name="active" value="0"
                            @if (isset($property) && !$property->active) checked @endif> تم البيع
                    </label>
                </div>
            </div>
        </div>
    </div>

    {{-- price --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">سعر العقار</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    {!! Form::number('price', null, [
                        'class' => 'input',
                        'min' => 0,
                        'id' => 'price',
                    ]) !!}
                </div>
            </div>
        </div>
    </div>

    {{-- property_space --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">مساحة العقار</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    {!! Form::number('property_space', null, [
                        'class' => 'input',
                        'min' => 0,
                        'id' => 'property_space',
                    ]) !!}
                </div>
            </div>
        </div>
    </div>

    {{-- number_of_floors --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">عدد الادوار</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    {!! Form::number('number_of_floors', null, [
                        'class' => 'input',
                        'min' => 0,
                        'id' => 'number_of_floors',
                    ]) !!}
                </div>
            </div>
        </div>
    </div>

    {{-- number_of_rooms --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label ">عدد الغرف</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    {!! Form::number('number_of_rooms', null, [
                        'class' => 'input',
                        'min' => 0,
                        'id' => 'number_of_rooms',
                    ]) !!}
                </div>
            </div>
        </div>
    </div>

    {{-- number_of_bathrooms --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label ">عدد الحمامات</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    {!! Form::number('number_of_bathrooms', null, [
                        'class' => 'input',
                        'min' => 0,
                        'id' => 'number_of_bathrooms',
                    ]) !!}
                </div>
            </div>
        </div>
    </div>

    {{-- garden --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">يوجد حديقة؟</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="garden" value="1"
                            @if (isset($property) && $property->garden) checked @endif onclick="toggleGardenSpace(true)"> نعم
                    </label>
                    <label class="radio">
                        <input type="radio" name="garden" value="0"
                            @if (isset($property) && !$property->garden) checked @endif onclick="toggleGardenSpace(false)"> لا
                    </label>
                </div>
            </div>
        </div>
    </div>

    {{-- garden_space --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">مساحة الحديقة</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    {!! Form::number('garden_space', null, [
                        'class' => 'input',
                        'required',
                        'min' => 0,
                        'id' => 'garden_space',
                        isset($property) && $property->garden ? '' : 'disabled',
                    ]) !!}
                </div>
            </div>
        </div>
    </div>

    {{-- property_type --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">نوع العقار</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="property_type" value="sale"
                            @if (isset($property) && $property->property_type == 'sale') checked @endif> بيع
                    </label>
                    <label class="radio">
                        <input type="radio" name="property_type" value="rent"
                            @if (isset($property) && $property->property_type == 'rent') checked @endif> ايجار
                    </label>
                </div>
            </div>
        </div>
    </div>

    {{-- finishing_type --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">نوع التشطيب</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="finishing_type" value="full"
                            @if (isset($property) && $property->finishing_type == 'full') checked @endif> تشطيب كامل
                    </label>
                    <label class="radio">
                        <input type="radio" name="finishing_type" value="almost"
                            @if (isset($property) && $property->finishing_type == 'almost') checked @endif>3/4 تشطيب
                    </label>
                    <label class="radio">
                        <input type="radio" name="finishing_type" value="half"
                            @if (isset($property) && $property->finishing_type == 'half') checked @endif> نص تشطيب
                    </label>
                    <label class="radio">
                        <input type="radio" name="finishing_type" value="without"
                            @if (isset($property) && $property->finishing_type == 'without') checked @endif> بدون تشطيب
                    </label>
                </div>
            </div>
        </div>
    </div>

    {{-- facade_finishing --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">نوع تشطيب الواجهة</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    <label class="radio">
                        <input type="radio" name="facade_finishing" value="full"
                            @if (isset($property) && $property->facade_finishing == 'full') checked @endif> تشطيب كامل
                    </label>
                    <label class="radio">
                        <input type="radio" name="facade_finishing" value="almost"
                            @if (isset($property) && $property->facade_finishing == 'almost') checked @endif>3/4 تشطيب
                    </label>
                    <label class="radio">
                        <input type="radio" name="facade_finishing" value="half"
                            @if (isset($property) && $property->facade_finishing == 'half') checked @endif> نص تشطيب
                    </label>
                    <label class="radio">
                        <input type="radio" name="facade_finishing" value="without"
                            @if (isset($property) && $property->facade_finishing == 'without') checked @endif> بدون تشطيب
                    </label>
                </div>
            </div>
        </div>
    </div>

    {{-- location --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label ">رابط موقع العقار علي الخريطة </label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    {!! Form::text('location', null, ['class' => 'input', 'required']) !!}
                </div>
            </div>
        </div>
    </div>

    {{-- Multiple images --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">صور العقار</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    {!! Form::file('images[]', ['class' => 'input', 'multiple', 'accept' => 'image/*']) !!}
                </div>
            </div>
            <br>
            @if (isset($property) && $property->images)
            {{-- Add an image preview section --}}
            @php
                // Decode the JSON-encoded string to an array
                $images = json_decode($property->images, true) ?? [];
            @endphp
            <br>
            <div class="field" id="imagePreview" style="display: flex; gap: 10px;">
                @if (!empty($images))
                    @foreach ($images as $image)
                        <img src="{{ asset('images/Properties/' . $image) }}" style="width: 100px;"
                            alt="Property Image">
                    @endforeach
                @endif
            </div>
@endif
        </div>
    </div>






    {{-- Video Upload --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required">فيديو للعقار</label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    <uploader label="فيديو" name="video" accept="video/*"
                        @if (isset($property) && $property->video) file="{{ asset('images/Property_videos/' . $property->video) }}" @endif
                        id="video" required>
                    </uploader>
                </div>
            </div>
        </div>
    </div>

    {{-- bannar --}}
    <hr />
    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label required"> الصورة الرئيسية </label>
        </div>
        <div class="field-body">
            <div class="field">
                <div class="control">
                    <uploader label="بانر" name="banner"
                        @if (isset($property)) file="{{ asset('images/Property_bannars/' . $property->banner) }}" @endif
                        id ="banner" required disabled></uploader>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Card Content -->

<!-- Start Card Footer -->
<div class="card-footer">
    <div class="buttons has-addons">
        <a class="button is-info" href="{{ route('admin.properties.index') }}"> الغاء </a>
        <button type="submit" class="button is-success">حفظ</button>
    </div>
</div><!-- End Card Footer -->



<script>
    function toggleGardenSpace(isEnabled) {
        const gardenSpaceInput = document.getElementById('garden_space');
        gardenSpaceInput.disabled = !isEnabled;
        if (!isEnabled) {
            gardenSpaceInput.value = ''; // Clear the input when disabled
        }
    }

    // Automatically enable/disable on page load based on the current property state
    window.onload = function() {
        const isGarden = {{ isset($property) && $property->garden ? 'true' : 'false' }};
        toggleGardenSpace(isGarden);
    };
</script>

<script>
    const imageInput = document.querySelector('input[name="images[]"]');
    const imagePreview = document.getElementById('imagePreview');

    imageInput.addEventListener('change', function() {
        imagePreview.innerHTML = ''; // Clear previous preview
        const files = this.files;

        Array.from(files).forEach(file => {
            const reader = new FileReader();
            reader.onload = function(event) {
                const img = document.createElement('img');
                img.src = event.target.result;
                img.style.width = '100px';
                imagePreview.appendChild(img);
            };
            reader.readAsDataURL(file);
        });
    });
</script>
