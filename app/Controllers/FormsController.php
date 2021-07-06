<?php
namespace App\Controllers;
use CodeIgniter\Controller;
class FormsController extends Controller{
    public function index()
    {
        $var1="";
        $var2="";
        $var3="";
        $var4="";
        if(isset($_POST['text1'])){
            $var1=$_POST['text1'];
        }
        else{
            $var1='';
        }
        if(isset($_POST['textarea1'])){
            $var2=$_POST['textarea1'];
        }
        else{
            $var2='';
        }
        if(isset($_POST['dropdown'])){
            $var3=$_POST['dropdown'];
        }
        else{
            $var3='';
        }
        $data['var1']=$var1;
        $data['var2']=$var2;
        $data['var3']=$var3;
        return view('forma',$data);
    }
}
