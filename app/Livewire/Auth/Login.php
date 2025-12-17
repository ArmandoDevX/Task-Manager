<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{

    public $email = '';
    public $password = '';

// Regras de Validação do campos

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:5',

    ];

    public function submit() {

        // Validar os campos
        $this->validate();
        

        // Autenticar o usuário

        if (auth()->attempt([
            'email'=>$this->email,
            'password'=>$this->password
        ])) {

            // Regenerando a senha e Redirecionar para a página inicial
            session()->regenerate();

            if (auth()->user()->role === 'superadmin') {
                return redirect()->route('admin.dashboard');
            }
            return redirect()->route('home');
        }
        else {
            
             $this->addError('email', 'As credenciais fornecidas estão incorretas.');
           
        }

        

    }



    public function render(){
        return view('livewire.auth.login');
    }
}
