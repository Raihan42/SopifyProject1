<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuninate\Support\Facades\Http;

class GQLController extends Controller
{
   public function getUser(string $userName){

        $query = <<<GQL

        query{
            user(login:"raihan42"){
              
              name
              url
              repositories(first:3){
                edges{
                  node{
                    name
                    
                  }
                }
              }
            }
          }

        GQL;

        $response = Http::withHeaders([
            "Content-Type" =>"application.json",
            "Authorization" => "Bearer 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"

        ])->post('https://api.github.com/graphql',[
            "query" => $query
        ]);

        return response()->json($response->json());

        }
}
