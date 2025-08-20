<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Mail\UserPdfMail;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{    
    // Carregar a pagina software
    public function software()
    {
        // Carregar a VIEW
        return view('pages.software');
    }

    // Carregar a pagina mobile
    public function mobile()
    {
        // Carregar a VIEW
        return view('pages.mobile');
    }

    // Carregar a pagina web
    public function web()
    {
        // Carregar a VIEW
        return view('pages.web');
    }

    // Carregar a pagina Desktop
    public function desktop()
    {
        // Carregar a VIEW
        return view('pages.desktop');
    }
    // Carregar a pagina plans
    public function plans()
    {
        // Carregar a VIEW
        return view('pages.plans');
    }
    // Carregar a pagina about
    public function about()
    {
        // Carregar a VIEW
        return view('pages.about');
    }
    // Carregar a pagina contact
    public function contact()
    {
        // Carregar a VIEW
        return view('pages.contact');
    }

    

    // Gerar PDF
    public function generatePdf(User $user)
    {
        try {
            // Carregar a string com o HTML/conteúdo e determinar a orientação e o tamanho do arquivo
            $pdf = Pdf::loadView('users.genenate-pdf', ['user' => $user])->setPaper('a4', 'portrait');

            // Definir o caminho temporário para salvar o arquivo
            $pdfPath = storage_path("app/public/view_user_{$user->id}.pdf");

            // Salvar o PDF localmente
            $pdf->save($pdfPath);

            // Enviar e-mail com o PDF anexado
            Mail::to($user->email)->send(new UserPdfMail($pdfPath, $user));

            // Remover o arquivo após o envio do e-mail
            if (file_exists($pdfPath)) {
                unlink($pdfPath);
            }

            // Redirecionar o usuário, enviar a mensagem de sucesso
            return redirect()->route('user.show', ['user' => $user->id])->with('success', 'E-mail enviado com sucesso!');
        } catch (Exception $e) {

            // Redirecionar o usuário, enviar a mensagem de erro
            return redirect()->route('user.show', ['user' => $user->id])->with('error', 'E-mail não enviado!');
        }
    }
}
