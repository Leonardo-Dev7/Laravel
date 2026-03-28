<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function sobre()
    {
        return view('site.sobre');
    }

    public function cadPacientes()
    {
        // simulação de cadastro de pacientes
        return view('site.cad-pacientes');
    }

    public function cadMedicos()
    {
        // simulação de cadastro de médicos
        return view('site.cad-medicos');
    }

    public function agendamento()
    {
        // simulação de agendamento
        return view('site.agendamento');
    }

    public function consultas()
    {
        // lista simulada de consultas
        return view('site.consultas');
    }
}
