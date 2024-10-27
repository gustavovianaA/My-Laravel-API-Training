<?php
namespace App\Services;

class CepService
{
    public function validateCep($cep)
    {
        return preg_match('/^\d{5}-?\d{3}$/', $cep);
    }

    public function getAddressByCep($cep)
    {
        // Logic for fetching address by CEP (e.g., using an API like ViaCEP)
    }
}
