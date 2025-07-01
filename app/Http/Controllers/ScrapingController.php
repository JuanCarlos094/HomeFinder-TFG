<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;
use App\Models\Inmueble;

class ScrapingController extends Controller
{
    public function scrapeInmolufran()
    {
        $url = 'https://www.inmolufran.com/';
        $client = HttpClient::create();
        $response = $client->request('GET', $url);

        if ($response->getStatusCode() !== 200) {
            return response()->json(['status' => 'error', 'message' => 'No se pudo acceder al sitio.']);
        }

        $html = $response->getContent();
        $crawler = new Crawler($html);

        $totalGuardados = 0;

        $crawler->filter('.property-item')->each(function ($node) use (&$totalGuardados) {
            $linkNode = $node->filter('a.thumb');
            $tituloNode = $node->filter('.titulo');
            $precioNode = $node->filter('.precio-listado');
            $habitacionesNode = $node->filter('.info-property .beds')->first();
            $banosNode = $node->filter('.info-property .bath')->eq(0);
            $tipoNode = $node->filter('.type')->first();
            $ciudadNode = $node->filter('.ciudad');

            $titulo = $tituloNode->count() ? trim($tituloNode->text()) : null;
            $precio = $precioNode->count() ? trim($precioNode->text()) : null;
            $link = $linkNode->count() ? $linkNode->attr('href') : null;
            $habitaciones = $habitacionesNode->count() ? trim($habitacionesNode->text()) : null;
            $banos = $banosNode->count() ? trim($banosNode->text()) : null;

            $tipo = $tipoNode->count() ? trim($tipoNode->text()) : null;
            $ciudad = $ciudadNode->count() ? trim($ciudadNode->text()) : null;

            // Limpieza de datos
            $precio = str_replace(['€', '.', ' '], '', $precio);
            $habitaciones = preg_replace('/\D/', '', $habitaciones);
            $banos = preg_replace('/\D/', '', $banos);
            // Procesamiento especial de metros
            $metros = null;

            if ($node->filter('.info-property')->eq(2)->filter('span')->count()) {
                $rawMetros = $node->filter('.info-property')->eq(2)->filter('span')->first()->text();
                if (preg_match('/(\d+)\s*m/i', $rawMetros, $matches)) {
                    $metros = $matches[1]; // solo el número antes de la "m"
                }
            }
            $tituloLower = strtolower($titulo);
            $operacion = str_contains($tituloLower, 'alquiler') || str_contains($link, 'alquiler') ? 'alquiler' : 'compra';


            // Evitar duplicados
            if ($titulo && !Inmueble::where('titulo', $titulo)->exists()) {
                Inmueble::create([
                    'titulo' => $titulo,
                    'precio' => $precio,
                    'link' => $link,
                    'habitaciones' => $habitaciones,
                    'banos' => $banos,
                    'metros' => $metros,
                    'vivienda' => $tipo,
                    'ciudad' => $ciudad,
                    'operacion' => $operacion,
                    'estado' => 'no disponible',
                    'portal' => 'inmolufran'
                ]);
                $totalGuardados++;
            }
        });

        if ($totalGuardados > 0) {
            return ['status' => 'success', 'guardados' => $totalGuardados];
        } else {
            return ['status' => 'warning', 'message' => 'No se guardaron inmuebles.'];
        }
    }

    public function scrapeTodo()
    {
        

        $resultado = $this->scrapeInmolufran();

        return redirect()->route('inmuebles')->with('status', $resultado['status'] === 'success'
            ? "Se guardaron {$resultado['guardados']} inmuebles."
            : ($resultado['message'] ?? 'No se guardaron inmuebles.'));
    }
}
