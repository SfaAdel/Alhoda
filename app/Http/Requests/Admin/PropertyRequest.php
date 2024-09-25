<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PropertyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {

        $propertyId = $this->property->id ?? null;

        return [
            'name' => [
                'required',
                'string',
                'min:3',
                Rule::unique('properties', 'name')->ignore($propertyId),
            ],
            'phone' => [
                'required',
                'string',
                'size:11', // Ensure the phone number is exactly 10 characters long
                // 'regex:/^05[0-9]{8}$/', // Saudi phone number format
            ],
            'city' => 'required|string',
            'area' => 'required|string',
            'sector' => 'required|string',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'video' => 'mimes:mp4,mov,avi,wmv|max:20480',
            'banner' => 'image|mimes:jpeg,png,bmp,gif,jpg,svg,webp|max:10240',
            'active' => 'required|boolean',
            'garden' => 'required|boolean',
            'price' => 'numeric|min:0|required',
            'garden_space' => 'numeric|min:0|nullable',
            'number_of_floors' => 'numeric|min:0|required',
            'property_space' => 'numeric|min:0|required',
            'property_type' => [
                'required',
                Rule::in(['rent', 'sale'])
            ],
            'finishing_type' => [
                'required',
                Rule::in(['full', 'almost', 'half', 'fully-without'])
            ],
            'facade_finishing' => [
                'required',
                Rule::in(['full', 'almost', 'half', 'fully-without'])
            ],
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'اسم العقار',
            'phone' => 'رقم الهاتف',
            'city' => 'المدينة',
            'area' => 'المنطقة',
            'sector' => 'القطاع',
            'short_description' => 'وصف قصير',
            'long_description' => 'وصف طويل',
            'images' => 'صور العقار',
            'video' => 'فيديو للعقار',
            'banner' => 'صورة البانر',
            'active' => 'حالة العقار',
            'garden' => 'الحديقة',
            'price' => 'سعر العقار',
            'garden_space' => 'مساحة الحديقة',
            'number_of_floors' => 'عدد الادوار',
            'property_space' => 'مساحة العقار',
            'property_type' => 'نوع العقار',
            'finishing_type' => 'نوع التشطيب ',
            'facade_finishing' => 'نوع تشطيب الواجهة',
        ];
    }
}
