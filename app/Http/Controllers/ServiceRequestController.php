<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreServiceRequest;
use App\Mail\ServiceRequestConfirmation;
use App\Models\ServiceRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;

class ServiceRequestController extends Controller
{
    /**
     * Processa e  armazena um novo pedido de serviço
     * 
     * @param \App\Http\Requests\StoreServiceRequest $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function store(StoreServiceRequest $request)
    {
        try {
            //Salva o pedido no banco de dados
            $serviceRequest = ServiceRequest::create($request->validated());

            // Gera o PDF com os detalhes do pedido
            $pdf = Pdf::loadView('pdfs.service_request_report', ['requestData' => $request->validated()])->setPaper('a4', 'portrait');

            // Envia o e-mail de confirmação com o PDF anexado
            Mail::to($request->email)->send(new ServiceRequestConfirmation($serviceRequest, $pdf));

            // Retorna uma reposta de sucesso para o frontend
            return response()->json(['message' => 'Pedido enviado com sucesso! Uma confirmação foi enviada para seu e-mail.'], 200);

        } catch (\Exception $e) {
            //Em caso de erro, retorna uma resposta de erro
            return response()->json(['message', 'Erro ao processar o seu pedido. Por favor, tente novamente.'], 500);
        }
    }
}
