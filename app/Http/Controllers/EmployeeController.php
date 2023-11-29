<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;

use App\Http\Requests;
use App\Http\Controllers\EmployeeController;
use Session;
use Carbon;
use Illuminate\Support\Facades\Validator;


use Illuminate\Support\Facades\Http;
class EmployeeController extends Controller
{

   
     public function employeeList() {
      $employee=Employee::get();
        return view('employee/employeeList')->with('employee',$employee);
    }
    public function addEmployee() {
      $employee=Employee::get();
        return view('employee/addEmployee')->with('employee',$employee);
    }
    public function submitEmployee(Request $request)
      {

            $input=$request->all();
    
             $validator = Validator::make($request->all(), [
                
                          // 'EmployeeName' => 'required',
                                      ]);
    
              if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
    
                  }
                 else{
                    $Employeename=$input['name'];
                   $Email=$input['email_id'];
                    $Password=$input['password'];
                     $Contact=$input['contact'];
                     $Address=$input['address'];
                // model name
                      Employee::insertGetId([
                        'name'=>$Employeename,
                         'email_id'=>$Email,
                           'password'=>$Password,
                          'contact'=>$Contact,
                          'address'=>$Address,
    
                     ]);
                         }
                  return redirect('/employeeList')->with('message','Success! Employee Added Successfully'); 
    
                      }



                      public function editEmployee($ID) {
                        $employee=Employee::where([['id',$ID]])->select('*')->first();
                          return view('employee/editEmployee')->with('employee',$employee);
                      }

          public function updateEmployee(Request $request)
      {

            $input=$request->all();
    
             $validator = Validator::make($request->all(), [
                
                          // 'EmployeeName' => 'required',
                                      ]);
    
              if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
    
                  }
                 else{
                  $id=$input['id'];
                    $Employeename=$input['name'];
                   $Email=$input['email_id'];
                    $Password=$input['password'];
                     $Contact=$input['contact'];
                     $Address=$input['address'];
                // model name
                Employee::where('id',$id)->update([
                  'name'=>$Employeename,
                   'email_id'=>$Email,
                     'password'=>$Password,
                    'contact'=>$Contact,
                    'address'=>$Address,
                    'updated_at'=>date("Y-m-d H:i:s"),
                     ]);
                         }
                  return redirect('/employeeList')->with('message','Success! Employee Updated Successfully'); 
    
                      }
          // public function deleteEmployee($ID)
          // {
          //   $employee = Employee::where('id', $ID)->firstorfail()->delete();
            
          //   return redirect('/employeeList')->with('message','Success! Employee Deleted Successfully'); 
            
          // }
          public function deleteEmployee($ID)
  {
    $employee = Employee::find($ID);
    $employee->delete();
    return redirect('/employeeList')->with('message','Success! Employee Deleted Successfully'); 

  }
  public function viewEmployee($ID) {
    $employee=Employee::where([['id',$ID]])->select('*')->first();
     return view('employee/viewEmployee')->with('employee',$employee);
 }
 public function backEmployee(Request $request)
                      {
                
                            
                                  return redirect('/employeeList')->with('message','Success! Employee Viewed Successfully'); 
                    
                                      }
                


}
