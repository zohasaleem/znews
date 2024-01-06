<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;
use Hash;

class AdminController extends Controller
{
    public function index(){

        return view('admin.index');
    }


    public function getAdminData(Request $request){

        if($request->ajax()){

            $fromDate = $request->input('from_date');
            $toDate = $request->input('to_date');

            if($fromDate && $toDate){

                $startOfDay = Carbon::createFromFormat('Y-m-d', $fromDate)->startOfDay();
                $endOfDay = Carbon::createFromFormat('Y-m-d', $toDate)->endOfDay();

                $data = User::whereBetween('created_at', [$startOfDay, $endOfDay])->get();

            } else{

                $data = User::get();
            }

            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<div class="d-flex">';                 
                $btn .= '<a style="background-color: #4347d9;
                                    font-size: 13px;
                                    padding: 8px;
                                    border-radius: 5px;
                                    margin: 4px;
                                    color: white;" 
                                    href="'.url('admin-edit/'.$row->id).'" role="button">
                                    <i class="fa-solid fa-pen"></i>
                        </a>';
                $btn .= '<a style="background-color: #ff3147;
                                    font-size: 13px;
                                    padding: 8px;
                                    border-radius: 5px;
                                    margin: 4px;
                                    color: white;"   
                                    href="'.url('admin-delete/'.$row->id).'" role="button">
                                    <i class="fa-solid fa-trash"></i>
                        </a>';
                $btn .= '</div>';

                return $btn;
            })

            ->addColumn('created', function ($row) {
    
                $created_at = $row->created_at;

                $formatted_date = Carbon::parse($created_at)->format('Y-m-d H:i:s');
                return $formatted_date;
            })
            
            ->rawColumns(['action', 'created'])
            ->make(true);
        }
    }

    public function create(){
         
        return view('admin.create');
    }

    public function store(Request $request){

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect()->route('admin.index')->with('success', "Admin created successfully");

    }

    public function edit($id)
    {

        $admin = User::find($id);
               
        return view('admin.edit', compact('admin'));
    }

   
    public function update(Request $request)
    {
        $admin = User::find($request->id);
       
        if ($admin) {

            $admin->name = $request->name;
            $admin->email = $request->email;
            if($request->password){
                $admin->password = Hash::make($request->password);
            }
            else{
                $admin->password = $admin->password;
            }

            $admin->update();


            return redirect()->route('admin.index')->with('success', 'Admin updated successfully.');
        }
    }

    
    public function destroy($id)
    {
        $admin = User::find($id);
        $admin->delete();

        return redirect()->route('admin.index')->with('success', 'Admin deleted successfully.');

    }
}
