<?php

namespace App\Livewire;

use App\Models\Pets;
use Livewire\Attributes\Validate;
use Livewire\Component;

class LwAgregarMascota extends Component
{
    #[Validate('required', message:'El campo es requerido*')]
    #[Validate('min:3', message:'El campo debe contener al menos 3 caracteres*')]
    #[Validate('max:50', message:'El campo debe contener máximo 50 caracteres*')]
    public string $name = '';

    #[Validate('required', message:'El campo es requerido*')]
    #[Validate('min:3', message:'El campo debe contener al menos 3 caracteres*')]
    #[Validate('max:100', message:'El campo debe contener máximo 100 caracteres*')]
    public string $description = '';

    #[Validate('required', message:'El campo es requerido*')]
    // #[Validate('in:Car,Dog,Turtle', message:'El campo no contiene un valor válido*')]
    public string $type = '';

    #[Validate('required', message:'El campo es requerido*')]
    public $birthday;


    /*
     * Agregar una nueva mascota.
    */
    public function addMascota()
    {
        //! TODO: ya que no continúa con la ejecución del código después de realizar validación, sólo en Tailwind.
        // $this->validate();

        $pet = new Pets();
        $pet->name = trim($this->name);
        $pet->description = trim($this->description);
        $pet->type = $this->type;
        $pet->birthday = $this->birthday;
        $pet->save();

        session()->flash('message', 'Mascota agregada correctamente');
        $this->redirect('/dashboard');
    }



    public function render()
    {
        return view('livewire.lw-agregar-mascota');
    }
}
