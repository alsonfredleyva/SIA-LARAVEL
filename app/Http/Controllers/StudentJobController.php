<?php
namespace App\Http\Controllers;
//use App\User;
use App\Models\UserJob;
use Illuminate\Http\Response; // Response Components
use App\Traits\ApiResponser; // <-- use to standardized our code
use Illuminate\Http\Request; // <-- handling http request in lumen
use DB; 


Class StudentJobController extends Controller {
// use to add your Traits ApiResponser
use ApiResponser;
private $request;
public function __construct(Request $request){
    $this->request = $request;
}

public function index()
{
$usersjob = UserJob::all();
return $this->successResponse($usersjob);
}

public function show($id)
{
$userjob = UserJob::findOrFail($id);
return $this->successResponse($userjob);
}
}