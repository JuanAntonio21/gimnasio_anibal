<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Espalda;
use App\Models\Pecho;
use App\Models\Pierna;
use App\Models\Biceps;
use App\Models\Triceps;
use App\Models\Hombro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function showLogin(){

        // file_put_contents(resource_path().'/scss/customvariables.scss', '$primary:  :coral;');

        return view('registro');

    }

    public function home() {
        return view('home');
    }

    public function añadir() {
         return view('añadir');
    }

    public function nuevo(Request $request) {
        $validatedData = $request->validate([
            'exercise_type' => 'required|string',
            'ejercicio' => 'required|string|max:255',
            'peso' => 'required|numeric',
            'serie' => 'required|numeric',
            'repeticiones' => 'required|integer'
        ]);

        $data = [
            'id_user' => auth()->id(),
            'ejercicio' => $validatedData['ejercicio'],
            'peso' => $validatedData['peso'],
            'repeticiones' => $validatedData['repeticiones'],
            'serie' => $validatedData['serie'],
            'fecha_realizado' => Carbon::now()
        ];

        switch ($validatedData['exercise_type']) {
            case 'espalda':
                Espalda::create($data);
                break;
            case 'pecho':
                Pecho::create($data);
                break;
            case 'biceps':
                Biceps::create($data);
                break;
            case 'triceps':
                Triceps::create($data);
                break;
                case 'hombro':
                    Hombro::create($data);
                    break;
            case 'pierna':
                Pierna::create($data);
                break;
            default:
                return redirect()->route('home')->with('error', 'Tipo de ejercicio no válido');
        }

        return redirect()->route('home')->with('success', 'Ejercicio añadido exitosamente');
    }

    public function espalda() {
        $userId = Auth::id();
        $user_result = User::where('id', $userId)->first();
        
        $datos = Espalda::where('id_user', $user_result->id)->get();
        
        return view('espalda', compact('datos'));
    }

    public function pecho() {
        $userId = Auth::id();
        $user_result = User::where('id', $userId)->first();
        
        $datos = Pecho::where('id_user', $user_result->id)->get();
        return view('pecho', compact('datos'));
    }

    public function pierna() {
        $userId = Auth::id();
        $user_result = User::where('id', $userId)->first();
        
        $datos = Pierna::where('id_user', $user_result->id)->get();
        return view('pierna', compact('datos'));
    }

    public function biceps() {
        $userId = Auth::id();
        $user_result = User::where('id', $userId)->first();
        
        $datos = Biceps::where('id_user', $user_result->id)->get();
        return view('biceps', compact('datos'));
    }

    public function triceps() {
        $userId = Auth::id();
        $user_result = User::where('id', $userId)->first();
        
        $datos = Triceps::where('id_user', $user_result->id)->get();
        return view('triceps', compact('datos'));
    }

    public function hombro() {
        $userId = Auth::id();
        $user_result = User::where('id', $userId)->first();
        
        $datos = Hombro::where('id_user', $user_result->id)->get();
        return view('hombro', compact('datos'));
    }

    public function login(Request $request){

        $credentials = $request->validate([
            'email'=>'required|max:75|email:rfc,dns',
            'password'=>'required'
        ]);

        $rememberMe = isset($request->rememberme) ? true : false;

        if(Auth::attempt($credentials, $rememberMe)){
            $request->session()->regenerate();
            $user = $request->user();

            // if($user->isAdmin()){
            //     $token = $user->createToken('admin-token',['create','update','delete']);
            //     // var_dump($token);
            //     // var_dump("<pre>");
            //     // var_dump($token->plainTextToken);
            //     // die();
            // }
            // session(['lang' => $user->lang]);
            return redirect()->route('home');
        }else{
            dd("credenciales no correctas");
        }

   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
