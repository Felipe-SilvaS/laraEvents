<?php

namespace App\Http\Requests\Organization\Event;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'speaker_name' => 'required',
            'start_date' => ['required', 'date_format:d/m/Y H:i'],
            'end_date' =>  ['required', 'date_format:d/m/Y H:i', 'after:' . $this->start_date ?? null],
            'participants_limit' => ['required', 'numeric', 'integer', 'min:1'],
            'target_audience' => ['required', 'max:50']
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nome',
            'speaker_name' => 'palestrante',
            'start_date' => 'data de inicio',
            'end_date' =>  'data de fim',
            'participants_limit' => 'limite de participantes',
            'target_audience' => 'público-alvo'
        ];
    }

    public function messages()
    {
        return [
            'date_format' => 'O campo :attribute não corresponde ao formato 00/00/0000 00:00',
            'end_date.after' => 'A data final deve ser posterior a data inicial'
        ];
    }
}
