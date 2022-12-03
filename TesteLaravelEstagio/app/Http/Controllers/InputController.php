<?php

namespace App\Http\Controllers;

use ArrayObject;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Array_;

class InputController extends Controller
{
    //
    public function InputTV(Request $request)
    {
        /////////////////////////////////////// Grid TVs /////////////////////////////////////////

        $quant32pol = $request->input('quant32pol');
        $valor32pol = $request->input('valor32pol');
        $quant40pol = $request->input('quant40pol');
        $valor40pol = $request->input('valor40pol');
        $quant43pol = $request->input('quant43pol');
        $valor43pol = $request->input('valor43pol');
        $quant49pol = $request->input('quant49pol');
        $valor49pol = $request->input('valor49pol');
        $quant50pol = $request->input('quant50pol');
        $valor50pol = $request->input('valor50pol');
        $quant55pol = $request->input('quant55pol');
        $valor55pol = $request->input('valor55pol');
        $quant58pol = $request->input('quant58pol');
        $valor58pol = $request->input('valor58pol');
        $quant65pol = $request->input('quant65pol');
        $valor65pol = $request->input('valor65pol');
        $quant75pol = $request->input('quant75pol');
        $valor75pol = $request->input('valor75pol');
        $monitorLED = $request->input('monitorLED');
        $valorLED = $request->input('valorLED');
        $monitorVideo = $request->input('monitorVideo');
        $valorVideo = $request->input('valorVideo');

        $total32pol = $quant32pol * $valor32pol;
        $total40pol = $quant40pol * $valor40pol;
        $total43pol = $quant43pol * $valor43pol;
        $total49pol = $quant49pol * $valor49pol;
        $total50pol = $quant50pol * $valor50pol;
        $total55pol = $quant55pol * $valor55pol;
        $total58pol = $quant58pol * $valor58pol;
        $total65pol = $quant65pol * $valor65pol;
        $total75pol = $quant75pol * $valor75pol;
        $totalLED = $monitorLED * $valorLED;
        $totalVideo = $monitorVideo * $valorVideo;
        
        $custoTotalTv = $total32pol + $total40pol + $total43pol + $total49pol + $total50pol + $total55pol + $total58pol + $total65pol + $total75pol + $totalLED + $totalVideo;

        /////////////////////////////////////// Grid Players /////////////////////////////////////////

        $quantAlpha = $request->input('quantAlpha');
        $valorAlpha = $request->input('valorAlpha');
        $quantAlpha2 = $request->input('quantAlpha2');
        $valorAlpha2 = $request->input('valorAlpha2');
        $quantTvBox = $request->input('quantTvBox');
        $valorTvBox = $request->input('valorTvBox');

        $totalAlpha = $quantAlpha * $valorAlpha;
        $totalAlpha2 = $quantAlpha2 * $valorAlpha2;
        $totalTvBox = $quantTvBox * $valorTvBox;

        $custoTotalPlayers = $totalAlpha + $totalAlpha2 + $totalTvBox;

        /////////////////////////////////////// Input Mao de Obra /////////////////////////////////////////

        $valorMaoObra = $request->input('valorMaoObra');

        /////////////////////////////////////// Grid Planos /////////////////////////////////////////

        $quantPlanos = $request->input('quantPlanos');
        $valorPlano = $request->input('valorPlano');

        $totalPlanos = $quantPlanos * $valorPlano;

        /////////////////////////////////////// Grid Orcamento /////////////////////////////////////////

        $totalOrcamento = $custoTotalTv + $custoTotalPlayers + $valorMaoObra + $totalPlanos;


        return view('main', [
            'quant32pol' => $quant32pol,
            'quant40pol' => $quant40pol,
            'quant43pol' => $quant43pol,
            'quant49pol' => $quant49pol,
            'quant50pol' => $quant50pol,
            'quant55pol' => $quant55pol,
            'quant58pol' => $quant58pol,
            'quant65pol' => $quant65pol,
            'quant75pol' => $quant75pol,
            'monitorLED' => $monitorLED,
            'monitorVideo' => $monitorVideo,

            'valor32pol' => $valor32pol,	
            'valor40pol' => $valor40pol,
            'valor43pol' => $valor43pol,
            'valor49pol' => $valor49pol,
            'valor50pol' => $valor50pol,
            'valor55pol' => $valor55pol,
            'valor58pol' => $valor58pol,
            'valor65pol' => $valor65pol,
            'valor75pol' => $valor75pol,
            'valorLED' => $valorLED,
            'valorVideo' => $valorVideo,

            'total32pol' => $total32pol,
            'total40pol' => $total40pol,
            'total43pol' => $total43pol,
            'total49pol' => $total49pol,
            'total50pol' => $total50pol,
            'total55pol' => $total55pol,
            'total58pol' => $total58pol,
            'total65pol' => $total65pol,
            'total75pol' => $total75pol,
            'totalLED' => $totalLED,
            'totalVideo' => $totalVideo,
            'custoTotalTv' => $custoTotalTv,

            'quantAlpha' => $quantAlpha,
            'quantAlpha2' => $quantAlpha2,	
            'quantTvBox' => $quantTvBox,

            'valorAlpha' => $valorAlpha,
            'valorAlpha2' => $valorAlpha2,
            'valorTvBox' => $valorTvBox,

            'totalAlpha' => $totalAlpha,
            'totalAlpha2' => $totalAlpha2,
            'totalTvBox' => $totalTvBox,
            'custoTotalPlayers' => $custoTotalPlayers,	

            'valorMaoObra' => $valorMaoObra,

            'quantPlanos' => $quantPlanos,

            'valorPlano' => $valorPlano,
            'totalPlanos' => $totalPlanos,

            'totalOrcamento' => $totalOrcamento,
            
        ]);
    }
}
