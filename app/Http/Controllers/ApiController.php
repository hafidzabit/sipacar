<?php 

namespace App\Http\Controllers;

use App\Models\AturanLengkap;
use App\Models\Faq;
use App\Models\Info;
use App\Models\Sop;
use App\Models\Usul;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class ApiController extends Controller {

    public function info(){
        $infos = Info::orderBy('tanggal_terbit', 'desc')->get();;
        return response()->json(['message'=>'Success', 'data'=> $infos]);
    }

    public function usul(){
        $usul = Usul::all();
        return response()->json(['message'=>'Success', 'data'=> $usul]);
    }

    public function sop(){
        $sop = Sop::all();
        return response()->json(['message'=>'Success', 'data'=> $sop]);
    }

    public function aturan(){
        $lengkap = AturanLengkap::all();
        return response()->json(['message'=>'Success', 'data'=> $lengkap]);
    }

    public function faq(){
        $faq = Faq::all();
        return response()->json(['message'=>'Success', 'data'=> $faq]);
    }

    public function show($id){
        $info = Info::find($id);
        return response()->json(['message'=>'Success', 'data'=> $info]);
    }

    public function file($id){
        $file = Info::findOne('info_id',$id);
        return response()->json(['message'=>'Success', 'data'=> $file]);
    }

    public function pencarian(Request $request){
        $cari = Info::where('nama','LIKE', "%".$request->query."%")->paginate(5);
        return response()->json(['message'=>'Success', 'data'=> $cari]);
    }


    public function store(Request $request){
        $usul = new Usul();
        $usul->nama_peraturan = $request->nama_peraturan;
        $usul->nomor = $request->nomor??0;
        $usul->user_pengusul = $request->user_pengusul;
        $usul->tahun = $request->tahun??0000;

        $usul->save();
        if($usul){
            return response()->json(['message'=>'Success']);
        } else
        return response()->json(['message'=>'Failed']);
    }

     public function tanya(Request $request){
        $tanya = new Faq();
        $tanya->user_penanya = $request->user_penanya;
        $tanya->pertanyaan = $request->pertanyaan;

        $tanya->save();
        if($tanya){
            return response()->json(['message'=>'Success']);
        } else
        return response()->json(['message'=>'Failed']);
    }
}

?>