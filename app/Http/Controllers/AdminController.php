<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;

use App\Http\Requests;
use App\Http\Controllers\AdminController;
use Session;
use Carbon;
use Illuminate\Support\Facades\Validator;


use Illuminate\Support\Facades\Http;
class AdminController extends Controller
{

   
     public function adminList() {
      $admin=Admin::get();
        return view('admin/adminList')->with('admin',$admin);
    }
    public function addAdmin() {
      $admin=Admin::get();
        return view('admin/addAdmin')->with('admin',$admin);
    }
    public function submitAdmin(Request $request)
      {

            $input=$request->all();
    
             $validator = Validator::make($request->all(), [
                
                          // 'AdminName' => 'required',
                                      ]);
    
              if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
    
                  }
                 else{
                    $admin_name=$input['admin_name'];
                    $admin_email=$input['admin_email'];
                   $admin_contact=$input['admin_contact'];
                    $admin_address=$input['admin_address'];
                    
                // model name
                      Admin::insertGetId([
                        'admin_name'=>$admin_name,
                        'admin_email'=>$admin_email,
                         'admin_contact'=>$admin_contact,
                           'admin_address'=>$admin_address,
                          
    
                     ]);
                         }
                  return redirect('/adminList')->with('message','Success! Admin Added Successfully'); 
    
                      }

                      public function editAdmin($ID) {
                        $admin=Admin::where([['id',$ID]])->select('*')->first();
                          return view('admin/editAdmin')->with('admin',$admin);
                      }
                      public function updateAdmin(Request $request)
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
                                  $admin_name=$input['admin_name'];
                                  $admin_email=$input['admin_email'];
                                  $admin_contact=$input['admin_contact'];
                                  $admin_address=$input['admin_address'];
                                // model name
                                Admin::where('id',$id)->update([
                                  'admin_name'=>$admin_name,
                                  'admin_email'=>$admin_email,
                                  'admin_contact'=>$admin_contact,
                                  'admin_address'=>$admin_address,
                                  'updated_at'=>date("Y-m-d H:i:s"),
                                     ]);
                                         }
                                  return redirect('/adminList')->with('message','Success! Admin Updated Successfully'); 
                    
                                      }
                          public function deleteAdmin($ID)
                          {
                            $admin= Admin::find($ID);
                            if($admin){
                            $admin->delete([
                                'isDelete'=>0,
                            ]);
                            }
                            return redirect('/adminList')->with('message','Success! Admin Deleted Successfully'); 
                            
                          }
                          public function viewAdmin($ID) {
                            $admin=Admin::where([['id',$ID]])->select('*')->first();
                             return view('admin/viewAdmin')->with('admin',$admin);
                         }
                         public function backAdmin(Request $request)
                      {
                
                            
                                  return redirect('/adminList')->with('message','Success! Admin Updated Successfully'); 
                    
                                      }
                

}
