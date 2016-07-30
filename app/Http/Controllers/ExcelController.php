<?php

namespace cultiva\Http\Controllers;

use Illuminate\Http\Request;

use cultiva\Http\Requests;
use cultiva\Http\Controllers\Controller;
use cultiva\Municipalities;
use Maatwebsite\Excel\Facades\Excel;


class ExcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Controlador que devuelve el listado
    public function index()
    {
        
    }
    //generador de archivs excel para usuarios con sus respectivoss perfiles.
    //Usuarios administradores.
    public function importusradmi()
    {
        Excel::create('Usuarios Administradores', function($excel) 
        {
            $excel->sheet('Usuarios', function($sheet) 
            {
                $user = User::select('id_curp','name','firstlastname','secondlastname','email','state_id','celphone','phone','zone')->where('role_id', '=', '1')->get();
                $sheet->cells('A1:I1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true));
                });
                $sheet->fromArray($user);
            });
        })->export('xls');
    }
    //Usuarios residentes generales.
    public function importusrresi()
    {
        Excel::create('Usuarios Residentes', function($excel) 
        {
            $excel->sheet('Usuarios', function($sheet) 
            {
                $user = User::select('id_curp','name','firstlastname','secondlastname','email','state_id','celphone','phone','zone')->where('role_id', '=', '2')->get();
                $sheet->cells('A1:I1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true));
                });
                $sheet->fromArray($user);
            });
        })->export('xls');
    }
    //Usuarios Superintendente de sevicio.
    public function importusrsupint()
    {
        Excel::create('Usuarios Superintendente', function($excel) 
        {
            $excel->sheet('Usuarios', function($sheet) 
            {
                $user = User::select('id_curp','name','firstlastname','secondlastname','email','state_id','celphone','phone','zone')->where('role_id', '=', '3')->get();
                $sheet->cells('A1:I1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true));
                });
                $sheet->fromArray($user);
            });
        })->export('xls');
    }
    //Usuarios Residente de Obra.
    public function importusrresiobr()
    {
        Excel::create('Usuarios Residente de Obra', function($excel) 
        {
            $excel->sheet('Usuarios', function($sheet) 
            {
                $user = User::select('id_curp','name','firstlastname','secondlastname','email','state_id','celphone','phone','zone')->where('role_id', '=', '4')->get();
                $sheet->cells('A1:I1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true));
                });
                $sheet->fromArray($user);
            });
        })->export('xls');
    }
    
    //Usuarios Centro SCT.
    public function importusrcent()
    {
        Excel::create('Usuarios Centro SCT', function($excel) 
        {
            $excel->sheet('Usuarios', function($sheet) 
            {
                $user = User::select('id_curp','name','firstlastname','secondlastname','email','state_id','celphone','phone','zone')->where('role_id', '=', '5')->get();
                $sheet->cells('A1:I1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true));
                });
                $sheet->fromArray($user);
            });
        })->export('xls');
    }

    //Usuarios Jefe de oficina tecnica.
    public function importusrjefe()
    {
        Excel::create('Usuarios Jefe de Oficina', function($excel) 
        {
            $excel->sheet('Usuarios', function($sheet) 
            {
                $user = User::select('id_curp','name','firstlastname','secondlastname','email','state_id','celphone','phone','zone')->where('role_id', '=', '6')->get();
                $sheet->cells('A1:I1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true));
                });
                $sheet->fromArray($user);
            });
        })->export('xls');
    }

    //Empresas Constructoras.
    public function importempcons()
    {
        Excel::create('Empresas Constructoras', function($excel) 
        {
            $excel->sheet('Empresas', function($sheet) 
            {
                $enterprise = Enterprise::select('nameemp','legalagent','type','status','email','address','phone')->where('type', '=', 'Constructora')->get();

                $sheet->cells('A1:G1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true
                                    ));
                });
                $sheet->fromArray($enterprise);
            });
        })->export('xls');
    }

    public function importempsup()
    {
        Excel::create('Empresas Supervisoras', function($excel) 
        {
            $excel->sheet('Empresas', function($sheet) 
            {
                $enterprise = Enterprise::select('nameemp','legalagent','type','status','email','address','phone')->where('type', '=', 'Supervisora')->get();

                $sheet->cells('A1:G1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true
                                    ));
                });
                $sheet->fromArray($enterprise);
            });
        })->export('xls');
    }

    public function import()
    {
        Excel::load('enterprises.csv', function($reader) {
            foreach ($reader->get() as $enterprise) {
                Enterprise::create([
                    'rfc' => $enterprise->rfc,
                    'nameemp' =>$enterprise->nameemp,
                    'legalagent' =>$enterprise->legalagent,
                    'type' =>$enterprise->type,
                    'status' =>$enterprise->status,
                    'email' =>$enterprise->email,
                    'address' =>$enterprise->address,
                    'phone' =>$enterprise->phone
                ]);
            }
        });
        return Enterprise::all();
    }


    public function importMunnicipalities()
    {
        Excel::load('municipalities.csv', function($reader) {
            foreach ($reader->get() as $municipality) {
                Municipalities::create([
                    'state_id' => $municipality->state_id,
                    'namemunicipality' => $municipality->namemunicipality,
                ]);
            }
        });
        return Municipalities::all();
    }


    //Contratos de Obra.
    public function exportConObra()
    {
        Excel::create('Contratos de Obra  ', function($excel) 
        {
            $excel->sheet('ContratosObra', function($sheet) 
            {
                
            $Contratos = ContractWork::with('user','state','commit')->get();
                $sheet->cells('A1:G1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true
                                    ));
                });
                $sheet->fromArray($Contratos);
            });
        })->export('xls');
    }
  //Contratos de Obra.
    public function exportConObra2($fecha)
    {
        //dd($fecha );

   
        Excel::create('Contratos de Obra por año ', function($excel) use($fecha)
        {
            $excel->sheet('ContratosObra', function($sheet) use ($fecha)
            {
                
            $Contratos = ContractWork::Year($fecha)
            ->with('user','state','commit')->get();



                $sheet->cells('A1:G1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true
                                    ));
                });
                $sheet->fromArray($Contratos);
            });
        })->export('xls');
    }


        //Contratos de Obra.
    public function exportConSup()
    {
        Excel::create('Contratos de Supervisión  ', function($excel) 
        {
            $excel->sheet('ContratosSupervisión', function($sheet) 
            {
            $Contratos = ContractSupervision::with('user','enterprise')->get();
                $sheet->cells('A1:G1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true
                                    ));
                });
                $sheet->fromArray($Contratos);
            });
        })->export('xls');
    }
  //Contratos de Obra.
    public function exportConSup2($fecha)
    {
        //dd($fecha );

   
        Excel::create('Contratos de Obra por año ', function($excel) use($fecha)
        {
            $excel->sheet('ContratosObra', function($sheet) use ($fecha)
            {
            $Contratos = ContractSupervision::Year($fecha)
            ->with('user','enterprise')->get();


                $sheet->cells('A1:G1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true
                                    ));
                });
                $sheet->fromArray($Contratos);
            });
        })->export('xls');
    }
        //Contratos de Obra.
    public function exportConAmb()
    {
        Excel::create('Contratos de Supervisión Ambiental  ', function($excel) 
        {
            $excel->sheet('ContratosSupervisiónAmbiental', function($sheet) 
            {
            $Contratos = ContractEnviromental::with('user','enterprise')->get();
                $sheet->cells('A1:G1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true
                                    ));
                });
                $sheet->fromArray($Contratos);
            });
        })->export('xls');
    }
  //Contratos de Obra.
    public function exportConAmb2($fecha)
    {
        //dd($fecha );
        Excel::create('Contratos de Supervisión Ambiental por año', function($excel) use($fecha)
        {
            $excel->sheet('ContratosSupervisiónAmbiental', function($sheet) use ($fecha)
            {
            $Contratos = ContractEnviromental::Year($fecha)
            ->with('user','enterprise')->get();

                $sheet->cells('A1:G1', function($cells) 
                {
                    $cells->setBackground('##0080FF');
                    // Set with font color
                    $cells->setFontColor('#000000');
                    // Set font family
                    $cells->setFontFamily('Calibri');
                    // Set font size
                    $cells->setFontSize(12);
                    // Set font weight to bold
                    $cells->setFontWeight('bold');
                    $cells->setAlignment('center');
                    // Set font
                    $cells->setFont(array(
                      'family'     => 'Calibri',
                        'size'       => '12',
                        'bold'       =>  true
                                    ));
                });
                $sheet->fromArray($Contratos);
            });
        })->export('xls');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
