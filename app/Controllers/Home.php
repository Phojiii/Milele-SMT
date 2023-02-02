<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\UserModel;
use App\Models\SserModel;
use App\Models\GenPo;
use App\Models\GenSo;
use App\Models\GenVehs;
use App\Models\DisPo;
use App\Models\Mainmodel;
use App\Models\Vehicles;
use App\Models\Updateveh;
use App\Models\Exportveh;
use App\Models\Sales;
use App\Models\Pdi;
use App\Models\Updatepo;
use App\Models\Updatevehpo;
use App\Models\Addvari;
use App\Models\Addsupplier;
use App\Models\Viewinventory;
use App\Models\Updateincentorydatamodel;
use App\Models\Editinventory;
use App\Models\Checkmodel;
use App\Models\Newmodels;
use App\Models\Genentity;
use App\Models\Gencolours;
use App\Models\Demands;
class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }
	public function auth()
    {
        $session = session();
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->where('username', $username)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'user_id'       => $data['user_id'],
                    'username'     => $data['username'],
                    'department'     => $data['department'],
                    'permission'     => $data['permission'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/home');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return view('login');
            }
        }else{
            $session->setFlashdata('msg', 'Username not Found');
            return view('login');
        } 
    }
  
    function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
    function dashboard()
    {
        return view('login');
    }
	function registor()
    {
        $session = session();
        $user_id = 0;
        $user_id = $session->get('user_id');
        $department = $session->get('department');
        if($user_id == 0)
        {
           // return view('registor');
          return redirect()->to('/');  
        }
        else {
        if($department == 'admin')
        {
            return view('registor');
        }
        else{
            return redirect()->to('404');  
        }
        } 
    }
	function registers()
    {
	    $model = new UserModel();
            $data = [
                'username'     => $this->request->getVar('username'),
			    'password' 	   => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'department'   => $this->request->getVar('department'),
                'permission'   => $this->request->getVar('permission')
            ];
            $model->save($data);
            return view('login');
    }
	function adminpanel()
    {
        $session = session();
        $user_id = 0;
        $user_id = $session->get('user_id');
        if($user_id == 0)
        {
          return redirect()->to('/');  
        }
        else {
        return view('adminpanel');
        } 
    }
	function addnewpo()
    {
        $session = session();
        $user_id = 0;
        $user_id = $session->get('user_id');
        if($user_id == 0)
        {
          return redirect()->to('/');  
        }
        else {
        return view('pur/add_new');
        } 
        
    }
	function genpo()
    {
	        $model = new GenPo();
            $po_date = $this->request->getVar('po_date');  
            $po_date = date("d-m-Y", strtotime($po_date));  
            $estimate_arrival = $this->request->getVar('estimate_arrival');  
            $estimate_arrival = date("d-m-Y", strtotime($estimate_arrival)); 
            $data = [
                'po_number'     		=> $this->request->getVar('po_number'),
                'po_date'     			=> $po_date,
                'estimate_arrival'  	=> $estimate_arrival,
                'created_by'  	        => $this->request->getVar('created_by'),
                'number_of_vehicles'   	=> $this->request->getVar('number_of_vehicles')
            ];
            $model->save($data);
			$number_of_vehicles = $this->request->getVar('number_of_vehicles');
			$po_number = $this->request->getVar('po_number');
            $created_by = $this->request->getVar('created_by');
			$db = \Config\Database::connect();
			$query = $db->query('SELECT po_id FROM po ORDER BY po_id DESC LIMIT 1');
			foreach ($query->getResult() as $row) {
			$po_id = $row->po_id;
			}
			for ($i=0;$i<$number_of_vehicles;$i++) 
			{
		  $model1 = new GenVehs();
          $datas = [
           'po_number'   => $po_number,
           'created_by'   => $created_by,
		   'po_id'		 => $po_id
            ];
            $model1->save($datas);
		}
            $session = session();
            $session->setFlashdata('msg', 'PO Generated ');
            return redirect()->to('/poinfo');
    }
	function poinfo()
	{
        $DisPo = new DisPo();
        $session = session();
        $user_id = 0;
        $user_id = $session->get('user_id');
        $department = $session->get('department');
        if($department == 'admin')
        {
            $data['po'] = $DisPo->findAll();
            return view('pur/po_info', $data);
        }
        else{
        $data['po'] = $DisPo->where('created_by', $user_id)->findAll();
        return view('pur/po_info', $data);
        }
	}
	function vehicles()
	{
        $Vehicles = new Vehicles();
        $data['vehicles'] = $Vehicles->findAll();
        return view('purchasing/veh_info', $data);
	}
    function sales()
	{
		$Vehicles = new Vehicles();
        $datas['vehicles'] = $Vehicles->findAll();
        return view('sales/sales_info', $datas);
	}
	    public function edit($id = null)
    {
        $model = new SserModel();
 
       $data['vehicles'] = $model->where('vehicles_id', $id)->first();
       return view('sales/sales_update', $data);
    }
		function insertsales()
    {
	       $model = new GenSo();
           $data = [
                'so_number'     		=> $this->request->getVar('so_number'),
                'so_date'     			=> $this->request->getVar('so_date'),
                'sale_person'  	        => $this->request->getVar('choices-single-groups'),
                'vehicles_id'   	    => $this->request->getVar('vehicles_id')
           ];
            $model->save($data);
           return redirect()->to('/sales');
    }
	function qa()
	{
		$Vehicles = new Vehicles();
        $datas['vehicles'] = $Vehicles->findAll();
        return view('qa/qa_info', $datas);
	}
	function purchasing()
	{
		$Vehicles = new Vehicles();
        $datas['vehicles'] = $Vehicles->findAll();
        return view('purchasing/purchasing_info', $datas);
	}
    public function updatedetails($id = null)
    {
		//echo "waqar";
       $model = new SserModel();
       $data['vehicles'] = $model->where('vehicles_id', $id)->first();
       return view('purchasing/update_pur', $data);
    }
	function vehcsv()
    {
        return view('veh/updatecvs');
    }
	public function importfile(){
	// Validation
$input = $this->validate([
'file' => 'uploaded[file]|max_size[file,1024]|ext_in[file,csv],'
]);
if (!$input) { // Not valid
$data['validation'] = $this->validator;
//echo "waqar";
//return view('veh/updatecvs',$data); 
}else{ // Valid
//echo "sucess";
if($file = $this->request->getFile('file')) {
if ($file->isValid() && ! $file->hasMoved()) {
// Get random file name
$newName = $file->getRandomName();
// Store file in public/csvfile/ folder
$file->move('./public/csvfile', $newName);
//echo "waqar";
// Reading file
$file = fopen("./public/csvfile/".$newName,"r");
$i = 0;
$numberOfFields = 28; // Total number of fields
$importData_arr = array();
// Initialize $importData_arr Array
while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
	//echo "waqar";
$num = count($filedata);
// Skip first row & check number of fields
if($i > 0 && $num == $numberOfFields){ 
// Key names are the insert table field names - name, email, city, and status
$importData_arr[$i]['vehicles_id'] 			= 	$filedata[0];
$importData_arr[$i]['po_id'] 				= 	$filedata[1];
$importData_arr[$i]['po_number'] 			= 	$filedata[2];
$importData_arr[$i]['grn'] 					= 	$filedata[3];
$importData_arr[$i]['grn_date'] 			= 	$filedata[4];
$importData_arr[$i]['aging'] 				= 	$filedata[5];
$importData_arr[$i]['gdn'] 					= 	$filedata[6];
$importData_arr[$i]['gdn_date'] 			= 	$filedata[7];
$importData_arr[$i]['remarks'] 				= 	$filedata[8];
$importData_arr[$i]['conversion'] 			= 	$filedata[9];
$importData_arr[$i]['purchaser_name'] 		= 	$filedata[10];
$importData_arr[$i]['brand'] 				= 	$filedata[11];
$importData_arr[$i]['model_line'] 			= 	$filedata[12];
$importData_arr[$i]['model'] 				= 	$filedata[13];
$importData_arr[$i]['variant'] 				= 	$filedata[14];
$importData_arr[$i]['variant_details'] 		= 	$filedata[15];
$importData_arr[$i]['vin'] 					= 	$filedata[16];
$importData_arr[$i]['engine'] 				= 	$filedata[17];
$importData_arr[$i]['model_des'] 			= 	$filedata[18];
$importData_arr[$i]['my'] 					= 	$filedata[19];
$importData_arr[$i]['steering'] 			= 	$filedata[20];
$importData_arr[$i]['seats'] 				= 	$filedata[21];
$importData_arr[$i]['fuel'] 				= 	$filedata[22];
$importData_arr[$i]['gear'] 				= 	$filedata[23];
$importData_arr[$i]['ex_color'] 			= 	$filedata[24];
$importData_arr[$i]['int_color'] 			= 	$filedata[25];
$importData_arr[$i]['upholestry'] 			= 	$filedata[26];
$importData_arr[$i]['max_price'] 			= 	$filedata[27];
}
$i++;
}
fclose($file);
// Insert data
$count = 0;
foreach($importData_arr as $vehicles){
$Vehicles = new Vehicles();
// Check record
$checkrecord = $Vehicles->where('vehicles_id',$vehicles['vehicles_id'])->countAllResults();
if($checkrecord == 0){
## Insert Record
if($Vehicles->insert($vehicles)){
$count++;
}
}
else
{
	$vehicles_id=$vehicles['vehicles_id'];
	$data = [
			'po_id'				=> 	$vehicles['po_id'],
			'po_number'			=> 	$vehicles['po_number'],
			'grn'				=> 	$vehicles['grn'],
			'grn_date'			=> 	$vehicles['grn_date'],
			'aging'				=> 	$vehicles['aging'],
			'gdn'				=> 	$vehicles['gdn'],
			'gdn_date'			=> 	$vehicles['gdn_date'],
			'remarks'			=> 	$vehicles['remarks'],
			'conversion'		=> 	$vehicles['conversion'],
			'purchaser_name'	=> 	$vehicles['purchaser_name'],
			'brand'				=> 	$vehicles['brand'],
			'model_line'		=> 	$vehicles['model_line'],
			'model'				=> 	$vehicles['model'],
			'variant'			=> 	$vehicles['variant'],
			'variant_details'	=> 	$vehicles['variant_details'],
			'vin'				=> 	$vehicles['vin'],
			'engine'			=> 	$vehicles['engine'],
			'model_des'			=> 	$vehicles['model_des'],
			'my'				=> 	$vehicles['my'],
			'my'				=> 	$vehicles['my'],
			'steering'			=> 	$vehicles['steering'],
			'seats'				=> 	$vehicles['seats'],
			'fuel'				=> 	$vehicles['fuel'],
			'gear'				=> 	$vehicles['gear'],
			'ex_color'			=> 	$vehicles['ex_color'],
			'int_color'			=> 	$vehicles['int_color'],
			'upholestry'		=> 	$vehicles['upholestry'],
			'max_price'			=> 	$vehicles['max_price']
		];
		$model = new Vehicles();
		$model->update($vehicles_id, $data);
        // Set Session
		session()->setFlashdata('message Record inserted successfully!');
		session()->setFlashdata('alert-class', 'alert-success');
		}
		}
// Set Session
session()->setFlashdata('message Record inserted successfully!');
session()->setFlashdata('alert-class', 'alert-success');
}else{
// Set Session
session()->setFlashdata('message', 'File not imported.');
session()->setFlashdata('alert-class', 'alert-danger');
}
}else{
// Set Session
session()->setFlashdata('message', 'File not imported.');
session()->setFlashdata('alert-class', 'alert-danger');
}
}
return redirect()->route('vehicles');
}
public function exportveh()
{ 
// file name 
     $filename = 'Vehicles'.date('Ymd').'.csv'; 
     header("Content-Description: File Transfer"); 
     header("Content-Disposition: attachment; filename=$filename"); 
     header("Content-Type: application/csv;");
     // get data 
     $users = new Exportveh();
     $usersData = $users->select('vehicles_id, po_id, po_number,grn,grn_date,aging,gdn,gdn_date,remarks,conversion,purchaser_name,brand,model_line,model,variant,variant_details,vin,engine,model_des,my,steering,seats,fuel,gear,ex_color,int_color, upholestry, max_price')->findAll();
     // file creation 
     $file = fopen('php://output', 'w');
     $header = array("vehicles_id", "po_id", "po_number", "grn","grn_date", "aging", "gdn", "gdn_date", "remarks", "conversion", "purchaser_name", "brand","model_line", "model","variant", "variant_details", "vin", "engine", "model_des", "my", "steering", "seats", "fuel", "gear", "ex_color", "int_color", "upholestry", "max_price"); 
     fputcsv($file, $header);
     foreach ($usersData as $key=>$line){ 
     fputcsv($file,$line); 
     }
     fclose($file); 
     exit; 
   }
   function pdiinfo()
	{
        $session = session();
        $user_id = 0;
        $user_id = $session->get('user_id');
        if($user_id == 0)
        {
          return redirect()->to('/');  
        }
        else {
            $Vehicles = new Vehicles();
            $datas['vehicles'] = $Vehicles->findAll();
            return view('pdi/pdiinfo', $datas);
        } 
		
	}
    function uploadpdi($id = null)
    {
		//echo "waqar";
       $model = new SserModel();
       $data['vehicles'] = $model->where('vehicles_id', $id)->first();
       return view('pdi/uploadpdi', $data);
    }
    public function importpdi()
    {
        $input = $this->validate([
            'file' => 'uploaded[file]|max_size[file,1024]|ext_in[file,pdf],'
            ]);
            if (!$input) { // Not valid
            $data['validation'] = $this->validator;
            //echo "waqar";
            //return view('veh/updatecvs',$data); 
            }else{ // Valid
            //echo "sucess";
            if($file = $this->request->getFile('file')) {
            if ($file->isValid() && ! $file->hasMoved()) {
            // Get random file name
            $newName = $file->getRandomName();
            // Store file in public/csvfile/ folder
            $file->move('./public/pdi', $newName);
            $session    = session();
            $user_id   = $session->get('user_id');
            $data = [
                'file_path' => $newName,
                'vehicles_id' => $this->request->getVar('vehicles_id'),
                'user_id'   => $user_id
            ];
            $model = new Pdi();
            $model->save($data);
            }
            }
    }
}
public function exportvehdata($po_id = null)
{ 
// file name 
     $filename = 'Vehicles'.date('Ymd').'.csv'; 
     header("Content-Description: File Transfer"); 
     header("Content-Disposition: attachment; filename=$filename"); 
     header("Content-Type: application/csv;");
     // get data 
     $users = new Exportveh();
     $usersData = $users->where('po_id', $po_id)->select('vehicles_id, po_id, po_number,brand,model_line,model,variant,variant_details,vin,engine,model_des,my,steering,seats,fuel,gear,ex_color,int_color, upholestry','territory')->findAll();
     // file creation 
     $file = fopen('php://output', 'w');
     $header = array("vehicles_id", "po_id", "po_number", "brand","model_line", "model","variant", "variant_details", "vin", "engine", "model_des", "my", "steering", "seats", "fuel", "gear", "ex_color", "int_color", "upholestry","territory"); 
     fputcsv($file, $header);
     foreach ($usersData as $key=>$line){ 
        fputcsv($file,$line); 
     }
     fclose($file); 
     exit; 
   }
   function updatevehles()
   {
       $session = session();
       $user_id = 0;
       $department = $session->get('department');
       if($department == "Purcahser")
       {
        return view('purchasing/updatecvs'); 
       }
       else if($department == "admin")
       {
        return view('purchasing/updatecvs'); 
       }
       else {
        return redirect()->to('/404');  
       } 
      
   }
   public function vehimportfile(){
	// Validation
$input = $this->validate([
'file' => 'uploaded[file]|max_size[file,1024]|ext_in[file,csv],'
]);
if (!$input) { // Not valid
$data['validation'] = $this->validator;
//echo "waqar";
//return view('veh/updatecvs',$data); 
}else{ // Valid
//echo "sucess";
if($file = $this->request->getFile('file')) {
if ($file->isValid() && ! $file->hasMoved()) {
// Get random file name
$newName = $file->getRandomName();
// Store file in public/csvfile/ folder
$file->move('./public/csvfile', $newName);
//echo "waqar";
// Reading file
$file = fopen("./public/csvfile/".$newName,"r");
$i = 0;
$numberOfFields = 20; // Total number of fields
$importData_arr = array();
// Initialize $importData_arr Array
while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
	//echo "waqar";
$num = count($filedata);
// Skip first row & check number of fields
if($i > 0 && $num == $numberOfFields){ 
// Key names are the insert table field names - name, email, city, and status
$importData_arr[$i]['vehicles_id'] 			= 	$filedata[0];
$importData_arr[$i]['po_id'] 				= 	$filedata[1];
$importData_arr[$i]['po_number'] 			= 	$filedata[2];
$importData_arr[$i]['brand'] 				= 	$filedata[3];
$importData_arr[$i]['model_line'] 			= 	$filedata[4];
$importData_arr[$i]['model'] 				= 	$filedata[5];
$importData_arr[$i]['variant'] 				= 	$filedata[6];
$importData_arr[$i]['variant_details'] 		= 	$filedata[7];
$importData_arr[$i]['vin'] 					= 	$filedata[8];
$importData_arr[$i]['engine'] 				= 	$filedata[9];
$importData_arr[$i]['model_des'] 			= 	$filedata[10];
$importData_arr[$i]['my'] 					= 	$filedata[11];
$importData_arr[$i]['steering'] 			= 	$filedata[12];
$importData_arr[$i]['seats'] 				= 	$filedata[13];
$importData_arr[$i]['fuel'] 				= 	$filedata[14];
$importData_arr[$i]['gear'] 				= 	$filedata[15];
$importData_arr[$i]['ex_color'] 			= 	$filedata[16];
$importData_arr[$i]['int_color'] 			= 	$filedata[17];
$importData_arr[$i]['upholestry'] 			= 	$filedata[18];
$importData_arr[$i]['territory'] 			= 	$filedata[19];
}
$i++;
}
fclose($file);
// Insert data
$count = 0;
foreach($importData_arr as $vehicles){
$Vehicles = new Updateveh();
// Check record
$checkrecord = $Vehicles->where('vehicles_id',$vehicles['vehicles_id'])->countAllResults();
if($checkrecord == 0){
## Insert Record
if($Vehicles->insert($vehicles)){
$count++;
}
}
else
{
	$vehicles_id=$vehicles['vehicles_id'];
	$data = [
			'po_id'				=> 	$vehicles['po_id'],
			'po_number'			=> 	$vehicles['po_number'],
			'brand'				=> 	$vehicles['brand'],
			'model_line'		=> 	$vehicles['model_line'],
			'model'				=> 	$vehicles['model'],
			'variant'			=> 	$vehicles['variant'],
			'variant_details'	=> 	$vehicles['variant_details'],
			'vin'				=> 	$vehicles['vin'],
			'engine'			=> 	$vehicles['engine'],
			'model_des'			=> 	$vehicles['model_des'],
			'my'				=> 	$vehicles['my'],
			'my'				=> 	$vehicles['my'],
			'steering'			=> 	$vehicles['steering'],
			'seats'				=> 	$vehicles['seats'],
			'fuel'				=> 	$vehicles['fuel'],
			'gear'				=> 	$vehicles['gear'],
			'ex_color'			=> 	$vehicles['ex_color'],
			'int_color'			=> 	$vehicles['int_color'],
			'upholestry'		=> 	$vehicles['upholestry'],
            'territory'		    => 	$vehicles['territory'],
		];
		$model = new Updateveh();
		$model->update($vehicles_id, $data);
        // Set Session
		session()->setFlashdata('message Record inserted successfully!');
		session()->setFlashdata('alert-class', 'alert-success');
		}
		}
// Set Session
session()->setFlashdata('message Record inserted successfully!');
session()->setFlashdata('alert-class', 'alert-success');
}else{
// Set Session
session()->setFlashdata('message', 'File not imported.');
session()->setFlashdata('alert-class', 'alert-danger');
}
}else{
// Set Session
session()->setFlashdata('message', 'File not imported.');
session()->setFlashdata('alert-class', 'alert-danger');
}
}
return redirect()->route('poinfo');
}
public function updatevehes($vehicles_id = null)
{
    $model = new Updateveh();
    $data = [
        'brand' => $this->request->getPost('brand'),
    ];
    $model->update($vehicles_id,$data);
    return redirect()->route('purchasing');
}
function editpo($id = null)
    {
       $model = new GenPo();
       $data['po'] = $model->where('po_id', $id)->first();
       return view('pur/editpo', $data);
    }
    function updatepos($po_id =  null)
    {
        $updatemodel = new Updatepo();
       $updatevehmodel = new Updatevehpo();
       $po_date = $this->request->getVar('po_date');  
       $po_date = date("d-m-Y", strtotime($po_date));  
       $estimate_arrival = $this->request->getVar('estimate_arrival');  
       $estimate_arrival = date("d-m-Y", strtotime($estimate_arrival)); 
        $data = [
            'po_number' => $this->request->getPost('po_number'),
            'po_date' => $po_date,
            'modification_id' => $this->request->getPost('modification_id'),
            'number_of_vehicles' => $this->request->getPost('number_of_vehicles'),
            'estimate_arrival' => $estimate_arrival
        ];
        $updatemodel->update($po_id,$data);
        $data = [
            'po_number' => $this->request->getPost('po_number')
        ];
        $updatevehmodel->update($po_id,$data);
        return redirect()->to('poinfo');
    }
    function editpovehinfo($id = null)
    {
       $model = new Vehicles();
       $data['vehicles'] = $model->where('vehicles_id', $id)->first();
       return view('pur/editvehicles', $data);
    }
    function addnewveriant()
    {
        $session = session();
        $user_id = 0;
        $user_id = $session->get('user_id');
        if($user_id == 0)
        {
          return redirect()->to('/');  
        }
        else {
        return view('variant/add_new');
        } 
        
    }
    function addnewvariant()
    {
	        $model = new Addvari();
            $data = [
                'name'     		    => $this->request->getVar('name'),
                'model'  	        => $this->request->getVar('model'),
                'engine'   	        => $this->request->getVar('engine'),
                'number_of_cylinders'   	=> $this->request->getVar('number_of_cylinders'),
                'engine_type'   	=> $this->request->getVar('engine_type'),
                'fuel_type'   	    => $this->request->getVar('fuel_type'),
                'displacement'   	=> $this->request->getVar('displacement'),
                'max_power_kw'   	=> $this->request->getVar('max_power_kw'),
                'max_power_hp'   	=> $this->request->getVar('max_power_hp'),
                'max_torque_mn'   	=> $this->request->getVar('max_torque_mn'),
                'body_style'    	=> $this->request->getVar('body_style'),
                'number_of_doors'   => $this->request->getVar('number_of_doors'),
                'ground_clearance'   => $this->request->getVar('ground_clearance'),
                'wheelbase'   	=> $this->request->getVar('wheelbase'),
                'dimensions'   	=> $this->request->getVar('engine'),
                'transmission'   	=> $this->request->getVar('transmission'),
                'gearbox'   	=> $this->request->getVar('gearbox'),
                'front_differential'   	=> $this->request->getVar('front_differential'),
                'rear_differential'   	=> $this->request->getVar('rear_differential'),
                'fuel_tank_capacity'   	=> $this->request->getVar('fuel_tank_capacity'),
                'additional_fuel_tank_capacity'   	=> $this->request->getVar('additional_fuel_tank_capacity'),
                'curb_weight'   	=> $this->request->getVar('curb_weight'),
                'gross_vehicles_weight'   	=> $this->request->getVar('gross_vehicles_weight'),
                'seat'   	=> $this->request->getVar('seat'),
                'front_brake'   	=> $this->request->getVar('front_brake'),
                'rear_brake'   	=> $this->request->getVar('rear_brake'),
                'parking_brake'   	=> $this->request->getVar('parking_brake'),
                'front_suspension'   	=> $this->request->getVar('front_suspension'),
                'tyre_dimension'   	=> $this->request->getVar('tyre_dimension'),
                'exterior'   	=> $this->request->getVar('exterior'),
                'towing_hook'   	=> $this->request->getVar('towing_hook'),
                'wheels'   	=> $this->request->getVar('wheels'),
                'snorkel'   	=> $this->request->getVar('snorkel'),
                'door_mirrors'   	=> $this->request->getVar('door_mirrors'),
                'bumper_fornt'   	=> $this->request->getVar('bumper_fornt'),
                'bumper_rear'   	=> $this->request->getVar('bumper_rear'),
                'mudguars'   	=> $this->request->getVar('mudguars'),
                'interior_confort'   	=> $this->request->getVar('interior_confort'),
                'radio'   	=> $this->request->getVar('radio'),
                'connections'   	=> $this->request->getVar('connections'),
                'loud_sprakers'   	=> $this->request->getVar('loud_sprakers'),
                'air_conditionnings'   	=> $this->request->getVar('air_conditionnings'),
                'locking_glove_box'   	=> $this->request->getVar('locking_glove_box'),
                'cup_holders'   	=> $this->request->getVar('cup_holders'),
                'power_windows'   	=> $this->request->getVar('power_windows'),
                'central_door_lock'   	=> $this->request->getVar('central_door_lock'),
                'steering_wheel'   	=> $this->request->getVar('steering_wheel'),
                'adjustable_steering_wheel'   	=> $this->request->getVar('adjustable_steering_wheel'),
                'plug_12v'   	=> $this->request->getVar('plug_12v'),
                'upholstery'   	=> $this->request->getVar('upholstery'),
                'front_seats'   => $this->request->getVar('front_seats'),
                'driver_seat'   => $this->request->getVar('driver_seat'),
                'power_steering'   	=> $this->request->getVar('power_steering'),
                'driver_footrest'   	=> $this->request->getVar('driver_footrest'),
                'gearshift'   	=> $this->request->getVar('gearshift'),
                'brake_lever'   	=> $this->request->getVar('brake_lever'),
                'car_mat'   	=> $this->request->getVar('car_mat'),
                'passive_safety'   	=> $this->request->getVar('passive_safety'),
                'airbags'   	=> $this->request->getVar('airbags'),
                'seatbelts_front'   	=> $this->request->getVar('seatbelts_front'),
                'seatbelts_2ndrow'   	=> $this->request->getVar('seatbelts_2ndrow'),
                'fire_extinguisher'   	=> $this->request->getVar('fire_extinguisher'),
                'headrests'   	=> $this->request->getVar('headrests'),
                'active_safety'   	=> $this->request->getVar('active_safety'),
                'abs'   	=> $this->request->getVar('abs'),
                'emergency_warning_triangle'   	=> $this->request->getVar('emergency_warning_triangle'),
                'headlamps'   	=> $this->request->getVar('headlamps'),
                'door_unlock_alert'   	=> $this->request->getVar('door_unlock_alert')
            ];
            $model->save($data);
            $session = session();
            $session->setFlashdata('msg', 'Variant Generated ');
            return redirect()->to('/addnewveriant');
    }
    function suppliers()
    {
        $session = session();
        $user_id = 0;
        $user_id = $session->get('user_id');
        if($user_id == 0)
        {
          return redirect()->to('/');  
        }
        else {
            $Supplier = new Addsupplier();
            $data['supplier'] = $Supplier->findAll();
            return view('supplier/info', $data);
        } 
        
    }
    function addnewsuppliers()
    {
        $session = session();
        $user_id = 0;
        $user_id = $session->get('user_id');
        if($user_id == 0)
        {
          return redirect()->to('/');  
        }
        else {
        return view('supplier/add_new');
        } 
        
    }
    function gensupplier()
    {
	        $model = new Addsupplier();
            $data = [
                'name'     		=> $this->request->getVar('name'),
                'created_by'    => $this->request->getVar('created_by')
            ];
           // echo $this->request->getVar('name');
            $model->save($data);
            $session = session();
            $session->setFlashdata('msg', 'Supplier Generated ');
            return redirect()->to('/addnewveriant');
    }
    function sinventory()
    {
        $session = session();
        $user_id = 0;
        $user_id = $session->get('user_id');
        if($user_id == 0)
        {
          return redirect()->to('/');  
        }
        else {
        return view('supplier/inventory');
        } 
        
    }
    function updateinventoryc()
   {
       $session = session();
       $user_id = 0;
       $department = $session->get('department');
       if($department == "Purcahser")
       {
        return view('supplier/updatecsv'); 
       }
       else if($department == "admin")
       {
        return view('supplier/updatecsv'); 
       }
       else {
        return redirect()->to('/404');  
       } 
      
   }
   public function supplierimportfile(){
	// Validation
$input = $this->validate([
'file' => 'uploaded[file]|max_size[file,102400]|ext_in[file,csv],'
]);
if (!$input) { // Not valid
$data['validation'] = $this->validator;
//echo "waqar";
//return view('veh/updatecvs',$data); 
}else{ // Valid
//echo "sucess";
if($file = $this->request->getFile('file')) {
if ($file->isValid() && ! $file->hasMoved()) {
// Get random file name
$newName = $file->getRandomName();
// Store file in public/csvfile/ folder
$file->move('./public/csvfile/inventory', $newName);
//echo "waqar";
// Reading file
$file = fopen("./public/csvfile/inventory/".$newName,"r");
$i = 0;
$numberOfFields = 9; // Total number of fields
$importData_arr = array();
// Initialize $importData_arr Array
while (($filedata = fgetcsv($file, 5000, ",")) !== FALSE) {
	//echo "waqar";
$num = count($filedata);
// Skip first row & check number of fields
if($i > 0 && $num == $numberOfFields){ 
// Key names are the insert table field names - name, email, city, and status
$month = $this->request->getVar('month');
$supplier_id = $this->request->getVar('supplier_id');
$whole_sales = $this->request->getVar('whole_sales');
$country = $this->request->getVar('country');
$date = $this->request->getVar('date');
$importData_arr[$i]['model'] 			    = 	$filedata[0];
$importData_arr[$i]['sfx'] 			        = 	$filedata[1];
$importData_arr[$i]['chasis'] 				= 	$filedata[2];
$importData_arr[$i]['engine_no'] 			= 	$filedata[3];
$importData_arr[$i]['color_code'] 			= 	$filedata[4];
$importData_arr[$i]['pord_month'] 			= 	$filedata[5];
$importData_arr[$i]['po_arm'] 		        = 	$filedata[6];
$importData_arr[$i]['status'] 		        = 	$filedata[7];
$importData_arr[$i]['eta_import'] 			= 	$filedata[8];
$importData_arr[$i]['month'] 			    = 	$month;
$importData_arr[$i]['supplier_id'] 			= 	$supplier_id;
$importData_arr[$i]['whole_sales'] 			= 	$whole_sales;
$importData_arr[$i]['country'] 			    = 	$country;
$importData_arr[$i]['date'] 			    = 	$date;
$importData_arr[$i]['uniques'] 			    = 	$i;
}
$i++;
}
fclose($file);
$checkrecords  = 0;
foreach($importData_arr as $supplier_inverntory){
$checkmodeldbss = new Checkmodel();
$checkdbs    =   $checkmodeldbss->where('model',$supplier_inverntory['model'])->countAllResults();
if($checkdbs == 0)
{
           $model = new Newmodels();
           $date = date('Y/m/d H:i:s');
           $data = [
                'models'     		=> $supplier_inverntory['model'],
                'date'              => $date
           ];
           $model->save($data);
           $checkrecords = 1;
}
        $checkdbs++;
}
if ($checkrecords  == 0){
$count = 0;
foreach($importData_arr as $supplier_inverntory){
$Supplier_inverntory = new Updateincentorydatamodel();
//$checkmodeldbss = new Checkmodel();
$checkmodel     =   $Supplier_inverntory->where('model',$supplier_inverntory['model'])->countAllResults();
$checkunique     =   $Supplier_inverntory->where('uniques',$supplier_inverntory['uniques'])->countAllResults();
if($checkmodel == 0 ){
    if($Supplier_inverntory->insert($supplier_inverntory)){
    $count++;
    }
}
else if (($checkunique == 0) && ($checkmodel != 0))
{
    if($Supplier_inverntory->insert($supplier_inverntory)){
    $count++;
    }
}
else {
        $carmodel=$supplier_inverntory['model'];
        $engine_no=$supplier_inverntory['engine_no'];
        $sfx=$supplier_inverntory['sfx'];
        $status=$supplier_inverntory['status'];
        $chasis=$supplier_inverntory['chasis'];
        $color_code=$supplier_inverntory['color_code'];
        $pord_month=$supplier_inverntory['pord_month'];
        $po_arm=$supplier_inverntory['po_arm'];
        $eta_import=$supplier_inverntory['eta_import'];
        $db = \Config\Database::connect();
        $supplier_inverntory_id = 0;
        if(($chasis != '') OR ($chasis = ''))
        {
        $query = $db->query("SELECT supplier_inverntory_id FROM supplier_inverntory where (model = '$carmodel' AND sfx = '$sfx') AND (chasis = '$chasis' OR chasis = '') LIMIT 1");
        foreach ($query->getResult() as $row) {
        $supplier_inverntory_id = $row->supplier_inverntory_id;
        } 
        $data = [
            'model'				=> 	$carmodel,
            'sfx'				=> 	$sfx,
            'engine_no'         =>  $engine_no,
            'chasis'			=> 	$chasis,
            'color_code'		=> 	$color_code,
            'pord_month'		=> 	$pord_month,
            'po_arm'			=> 	$po_arm,
            'status'			=> 	$status,
            'eta_import'		=> 	$eta_import
        ];
        $model = new Updateincentorydatamodel();
        $model->update($supplier_inverntory_id, $data);
        $carmodel="";
        $engine_no="";
        $sfx="";
        $chasis="";
        $color_code="";
        $pord_month="";
        $po_arm="";
        $eta_import="";
}
}
}
    $session = session();
    $session->setFlashdata('msg', 'Records Successfully Insert / Updated');
    return redirect()->to('/sinventory');
}
else{
    //$session = session();
    //$session->setFlashdata('msg', 'Some Model New & Not Existing in Our Records Please Input the Model First');
    // file name 
    $filename = 'Models'.date('Ymd').'.csv'; 
    header("Content-Description: File Transfer"); 
    header("Content-Disposition: attachment; filename=$filename"); 
    header("Content-Type: application/csv;");
    // get data 
    $users = new Newmodels();
    $date = date('Y/m/d H:i:s');
    $usersData = $users->select('models')->where('date',$date)->findAll();
    // file creation 
    $file = fopen('php://output', 'w');
    $header = array("models"); 
    fputcsv($file, $header);
    foreach ($usersData as $key=>$line){ 
    fputcsv($file,$line); 
    }
    fclose($file); 
    exit; 
                }
            }
        }
    }
}
function addnewentity()
{
    $session = session();
    $user_id = 0;
    $user_id = $session->get('user_id');
    if($user_id == 0)
    {
      return redirect()->to('/');  
    }
    else {
    return view('entity/add_new');
    } 
    
}
function addenitydetails() { 
    $model = new Genentity();
    helper(['form', 'url']);
    $license = $this->request->getFile('license');
    $license->move('./public/upload');
    $tax = $this->request->getFile('tax');
    $tax->move('./public/upload');
    $passport = $this->request->getFile('passport');
    $passport->move('./public/upload');
    $national = $this->request->getFile('national');
    $national->move('./public/upload');
    $data = [
              'license' =>  $license->getName(),
              'tax_certificate'     =>   $tax->getName(),
              'passport' =>  $passport->getName(),
              'name' =>  $this->request->getVar('name'),
              'document_no' =>  $this->request->getVar('document_no'),
              'category' =>  $this->request->getVar('category'),
              'source' =>  $this->request->getVar('source'),
              'country' =>  $this->request->getVar('country'),
              'type' =>  $this->request->getVar('type'),
              'country' =>  $this->request->getVar('country'),
              'created_by' =>  $this->request->getVar('created_by'),
              'status' =>  $this->request->getVar('status'),
              'national_id' =>  $national->getName()
        ];
        $model->save($data);
        return redirect()->to('/entityinfo');    
    }
    function entityinfo()
    {
        $session = session();
        $user_id = 0;
        $user_id = $session->get('user_id');
        if($user_id == 0)
        {
          return redirect()->to('/');  
        }
        else {
            $model = new Genentity();
            $data['entity'] = $model->findAll();
            return view('entity/entity_info', $data);
        } 
        
    }
    function addnewcolour()
{
    $session = session();
    $user_id = 0;
    $user_id = $session->get('user_id');
    if($user_id == 0)
    {
      return redirect()->to('/');  
    }
    else {
    return view('colours/add_new');
    } 
    
}
function colours()
{
    $session = session();
    $user_id = 0;
    $user_id = $session->get('user_id');
    if($user_id == 0)
    {
      return redirect()->to('/');  
    }
    else {
        $model = new Gencolours();
        $data['color_codes'] = $model->findAll();
        return view('colours/info', $data);
    } 
    
}
function addcolours() { 
    $model = new Gencolours();
    $colourcode = $this->request->getVar('code');
    $checkcolourcode    =   $model->where('code',$colourcode)->countAllResults();
if($checkcolourcode == 0){
    $data = [
              'code' =>  $this->request->getVar('code'),
              'name' =>  $this->request->getVar('name'),
              'belong_to' =>  $this->request->getVar('belong_to'),
              'created_by' =>  $this->request->getVar('created_by'),
              'status' =>  $this->request->getVar('status')
        ];
        $model->save($data);
        $session = session();
        $session->setFlashdata('Msg', 'Colour Code Added');
        return redirect()->to('/addnewcolour');    
    }
    else {
        $session = session();
        $session->setFlashdata('msg', 'Colour Code already Existing');
        return redirect()->to('/addnewcolour');
    }
}
function newdeals()
{
    $session = session();
    $user_id = 0;
    $user_id = $session->get('user_id');
    if($user_id == 0)
    {
      return redirect()->to('/');  
    }
    else {
    return view('deals/add_new');
    } 
    
}
function demandinfo()
{
    $session = session();
    $user_id = 0;
    $user_id = $session->get('user_id');
    if($user_id == 0)
    {
      return redirect()->to('/');  
    }
    else {
        $model = new Demands();
        $data['demands'] = $model->findAll();
        return view('demands/info', $data);
    } 
    
}
function addnewdemands()
{
    $session = session();
    $user_id = 0;
    $user_id = $session->get('user_id');
    if($user_id == 0)
    {
      return redirect()->to('/');  
    }
    else {
    return view('demands/add_new');
    } 
    
}
function uploadingdemandcsv()
{
    $session = session();
    $user_id = 0;
    $user_id = $session->get('user_id');
    if($user_id == 0)
    {
      return redirect()->to('/');  
    }
    else {
    return view('demands/updatecsv');
    } 
}
public function updatedemandsrecord(){
	// Validation
$input = $this->validate([
'file' => 'uploaded[file]|max_size[file,102400]|ext_in[file,csv],'
]);
if (!$input) { // Not valid
$data['validation'] = $this->validator;
//echo "waqar";
//return view('veh/updatecvs',$data); 
}else{ // Valid
//echo "sucess";
if($file = $this->request->getFile('file')) {
if ($file->isValid() && ! $file->hasMoved()) {
// Get random file name
$newName = $file->getRandomName();
// Store file in public/csvfile/ folder
$file->move('./public/csvfile/demands', $newName);
//echo "waqar";
// Reading file
$file = fopen("./public/csvfile/demands/".$newName,"r");
$i = 0;
$numberOfFields = 5; // Total number of fields
$importData_arr = array();
// Initialize $importData_arr Array
while (($filedata = fgetcsv($file, 5000, ",")) !== FALSE) {
	//echo "waqar";
$num = count($filedata);
// Skip first row & check number of fields
if($i > 0 && $num == $numberOfFields){ 
// Key names are the insert table field names - name, email, city, and status
$month = $this->request->getVar('month');
$supplier_id = $this->request->getVar('supplier_id');
$date = $this->request->getVar('date');
$importData_arr[$i]['model'] 			    = 	$filedata[0];
$importData_arr[$i]['sfx'] 			        = 	$filedata[1];
$importData_arr[$i]['qty'] 				    = 	$filedata[2];
$importData_arr[$i]['whole_saler'] 			= 	$filedata[3];
$importData_arr[$i]['color'] 			    = 	$filedata[4];
$importData_arr[$i]['month'] 			    = 	$month;
$importData_arr[$i]['supplier_id'] 			= 	$supplier_id;
$importData_arr[$i]['date'] 			    = 	$date;
$importData_arr[$i]['uniques'] 			    = 	$i;
}
$i++;
}
fclose($file);
$checkrecords  = 0;
foreach($importData_arr as $supplier_inverntory)
{
$checkmodeldbss = new Checkmodel();
$checkdbs    =   $checkmodeldbss->where('model',$supplier_inverntory['model'])->countAllResults();
if($checkdbs == 0)
            {
           $model = new Newmodels();
           $date = date('Y/m/d H:i:s');
           $data = [
                'models'     		=> $supplier_inverntory['model'],
                'date'              => $date
           ];
           $model->save($data);
           $checkrecords = 1;
}
        $checkdbs++;
}
if ($checkrecords  == 0)
{
$count = 0;
foreach($importData_arr as $supplier_inverntory){
$Supplier_inverntory = new Updateincentorydatamodel();
//$checkmodeldbss = new Checkmodel();
$checkmodel     =   $Supplier_inverntory->where('model',$supplier_inverntory['model'])->countAllResults();
$checkunique     =   $Supplier_inverntory->where('uniques',$supplier_inverntory['uniques'])->countAllResults();
if($checkmodel == 0 ){
    if($Supplier_inverntory->insert($supplier_inverntory)){
    $count++;
    }
}
else if (($checkunique == 0) && ($checkmodel != 0))
{
    if($Supplier_inverntory->insert($supplier_inverntory)){
    $count++;
    }
}
else {
        $carmodel=$supplier_inverntory['model'];
        $engine_no=$supplier_inverntory['engine_no'];
        $sfx=$supplier_inverntory['sfx'];
        $status=$supplier_inverntory['status'];
        $chasis=$supplier_inverntory['chasis'];
        $color_code=$supplier_inverntory['color_code'];
        $pord_month=$supplier_inverntory['pord_month'];
        $po_arm=$supplier_inverntory['po_arm'];
        $eta_import=$supplier_inverntory['eta_import'];
        $db = \Config\Database::connect();
        $supplier_inverntory_id = 0;
        if(($chasis != '') OR ($chasis = ''))
        {
        $query = $db->query("SELECT supplier_inverntory_id FROM supplier_inverntory where (model = '$carmodel' AND sfx = '$sfx') AND (chasis = '$chasis' OR chasis = '') LIMIT 1");
        foreach ($query->getResult() as $row) {
        $supplier_inverntory_id = $row->supplier_inverntory_id;
        } 
        $data = [
            'model'				=> 	$carmodel,
            'sfx'				=> 	$sfx,
            'engine_no'         =>  $engine_no,
            'chasis'			=> 	$chasis,
            'color_code'		=> 	$color_code,
            'pord_month'		=> 	$pord_month,
            'po_arm'			=> 	$po_arm,
            'status'			=> 	$status,
            'eta_import'		=> 	$eta_import
        ];
        $model = new Updateincentorydatamodel();
        $model->update($supplier_inverntory_id, $data);
        $carmodel="";
        $engine_no="";
        $sfx="";
        $chasis="";
        $color_code="";
        $pord_month="";
        $po_arm="";
        $eta_import="";
}
}
}
    $session = session();
    $session->setFlashdata('msg', 'Records Successfully Insert / Updated');
    return redirect()->to('/sinventory');
}
else{
    //$session = session();
    //$session->setFlashdata('msg', 'Some Model New & Not Existing in Our Records Please Input the Model First');
    // file name 
    $filename = 'Models'.date('Ymd').'.csv'; 
    header("Content-Description: File Transfer"); 
    header("Content-Disposition: attachment; filename=$filename"); 
    header("Content-Type: application/csv;");
    // get data 
    $users = new Newmodels();
    $date = date('Y/m/d H:i:s');
    $usersData = $users->select('models')->where('date',$date)->findAll();
    // file creation 
    $file = fopen('php://output', 'w');
    $header = array("models"); 
    fputcsv($file, $header);
    foreach ($usersData as $key=>$line){ 
    fputcsv($file,$line); 
    }
    fclose($file); 
    exit; 
                }
            }
        }
    }
}
}
