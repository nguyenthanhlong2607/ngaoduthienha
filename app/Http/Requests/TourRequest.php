<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class TourRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::check()) {
            return true;
        }
        else {
            return false; 
        } 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'image' => $this->customRuleImage(),
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:tours,slug,'.$this->id,
            'destination_id' => 'required',
            'type_tour_id' => 'required',
            'max_people' => 'required|min:1|max:50',
            'price' => 'required|integer',
            'status' => 'required'
        ];
    }

    public function customRuleImage() {
        if($this->method() == 'POST') {
            $possible_date = 'required';
            $imageRule = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000';
        }

        if($this->method() == 'PUT') {
            $imageRule = 'image|mimes:jpeg,png,jpg,gif,svg|max:10000';
        }
        return $imageRule;
    }
}
