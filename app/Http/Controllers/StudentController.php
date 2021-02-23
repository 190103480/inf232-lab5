<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    public function get_name(){
        static $name=array(0=>"Anel",1=>"Aruzhan",2=>"Dina");
        return $name;
    }


    public function get_date(){
        static $date=array(0=>"2020.01.18",1=>"2002.02.19",2=>"2001.09.11");
        return $date;
    }


    public function get_age(){
        static $age=array(0=>"19",1=>"20",2=>"18");
        return $age;
    }


    public function show($id){
        $name=$this->get_name();
        $date=$this->get_date();       
        $age=$this->get_age();
        return view("fname",["name"=>$name[$id]]);
        return view("age",["age"=>$age[$id]]);
        return view("dateofbirth",["date of birth"=>$date[$id]]);
    }
}
        

    /*public function get_name($id){
        
        static $studentName = array(0=>"Anel", 1=>"Aruzhan", 2=>"Dina");
        $name = $studentName[$id];
        return view('fname', compact('name'));
    }

    public function get_date($id){
        static $studentBirth = array(0=>"18.01.2002", 1=> "109.10.2001", 2=> "12.05.2002");
        $date = $studentBirth[$id];
        return view('dateofbirth', compact('date'));
    }

    public function get_age($id){
        static $studentAge = array(0=>"19", 1=> "20", 2=> "18");
        $age = $studentAge[$id];
        return view('age', compact('age'));
    }

    public static function show($id) :void{
         get_name($id);
         get_date($id);
         get_age($id);
    }
}*/

