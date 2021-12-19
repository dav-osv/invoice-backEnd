<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Models\invoice;
use App\Http\Models\client;
use App\Http\Models\company;
use App\Http\Models\descriptions;

use Symfony\Component\HttpFoundation\Response;

/* Crud Backend  */ 


class EmpresaController extends Controller
{

    public function listInvoices(){
        
        try{
            
            $invoices=Inovice::all();
            return response()->json($invoices ,Response::HTTP_OK);
    
          }catch(Excepcion $ex){
             return response()->json(['error'=> $ex.getMessage(),206]);
          }

    }
    
    public function show(Request $request,$id)
    {
       try{

            $invoice = Invoice::find($id);
            return response()->json($invoice,Response::HTTP_OK);

         }catch(Excepcion $ex){
           return response()->json([
                             'error' => 'error finding the invoice => '. $id ." : ". $ex->getMessage()
                         ], 404);
         }
    }

      /* I need to separate the json to save in the company, descriptions and client models */

    public function store(Request $request){

        try{

           /*invoice::create($request->all());

           return response()->json(Response::HTTP_OK);*/

      }catch (Exception $ex){
          return response()
          ->json([
                    'error' => 'error store invoice => '.$id." : ". $ex->getMessage()
          ], 400);
      }
    }

    
    /* I need to separate the json to save in the company, descriptions and client models */

    public function update(Request $request, $id){
        try{

         $invoice = invoice::find($id);

         /*$invoice->fill($request->all());
          $invoice->save();*/


        return response()->json($empresa,Response::HTTP_OK);

      }catch (Exception $ex){
          return response()
          ->json([
                    'error' => 'Hubo un error al actualizar el operativo con id => '.$id." : ". $ex->getMessage()
          ], 400);
      }
   }
    

   /* by his foreign keys everything is eliminated in cascade */

    public function delete($id){

        try{

            $invoice = invoice::find($id);
            $invoice->delete();
   
           return response()->json($empresa,Response::HTTP_OK);
   
         }catch (Exception $ex){
             return response()
             ->json([
                       'error' => '  error deleting invoice  => '.$id." : ". $ex->getMessage()
             ], 400);
         }
    }
}
