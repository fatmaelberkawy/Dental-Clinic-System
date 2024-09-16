<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function showAddPatient(){
        return view('appointment');

    }

    public function handleAddPatient(Request $request){
       $name = $request->name;
       $phone = $request->phone;
       $email = $request->email;
       $Doctor_Name = $request->Doctor_Name;
       $date = $request->date;
        DB::insert ("insert into patients (name, phone, email, Doctor_Name, date) values (?,?,?,?,?) ", [$name,$phone,$email,$Doctor_Name,$date]);

        return "Your Appointment is Done";

    }

    public function index(){
       $patients = DB::select("select* from patients");
       return view('index',['patients'=>$patients]);

   }

   public function person($id){
       $patient = DB::select("select* from patients where id =?",[$id])[0];
       return view('person',['patient'=>$patient]);

   }

   public function search(Request $request){
    $patients = DB::select("
        select * from patients
        where (:name is null or name like :name)
        and (:date is null or date like :date)
        and (:Doctor_Name is null or Doctor_Name like :Doctor_Name)
    ", [
        'name' => "%$request->name%",
        'date' => "%$request->date%",
        'Doctor_Name'  => "%$request->Doctor_Name%",
    ]);
    return view('index', ['patients'=>$patients]);
}

public function showupdatepatient($id){
    $patient=DB::select("select * from patients where id=?",[$id])[0];
   return view('update_patient',compact('patient'));

}

public function handleupdatePatient(Request $request,$id){
    $name = $request->name;
    $phone = $request->phone;
    $email = $request->email;
    $Doctor_Name = $request->Doctor_Name;
    $date = $request->date;
    DB::update("update patients set name=?,phone=?,email=?,Doctor_Name=?,date=? where id=?",
    [$name,$phone,$email,$Doctor_Name,$date,$id]);
    return redirect(route('person',['id'=>$id]));

}


public function deletepatient($id){
 DB::delete("delete from patients where id=?",[$id]);
 return redirect(route('index'));

}


   
}
