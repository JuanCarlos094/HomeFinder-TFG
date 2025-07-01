<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;
use Illuminate\Support\Carbon;
use App\Models\usuario;
use App\Models\cliente;
use Barryvdh\DomPDF\Facade\Pdf;

class PDFController extends Controller
{
    public function generatePDFUser()
    {
        $users = usuario::get();

        $data = [
            'title' => 'Welcome to Proyect of Laravel Juan Carlos M',
            'date' => date('d/m/Y'),
            'users' => $users
        ];

        $pdf = PDF::loadView('pdf.usersPdf', $data);
        return $pdf->download('users-lists.pdf');
    }
    public function generatePDFCliente()
    {
        $clientes = cliente::get();


        $data = [
            'title' => 'Welcome to Proyect of Laravel Juan Carlos M',
            'date' => date('d/m/Y'),
            'clientes' => $clientes
        ];

        $pdf = PDF::loadView('pdf.clientsPdf', $data);
        return $pdf->download('clients-lists.pdf');
    }

    public function generatePDFReserva($id)
    {
        $reserva = Reserva::with('inmueble')->findOrFail($id);

        $pdf = Pdf::loadView('pdf.reservaPdf', [
            'reserva' => $reserva,
            'date' => Carbon::now()->format('d/m/Y'),
            'title' => 'Reserva Nº ' . $reserva->id
        ]);

        return $pdf->download('reserva_' . $reserva->id . '.pdf');
    }
}
