<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule; 
use DB;
use App\book;
use Illuminate\Support\Facades\Mail;
use App\Mail\updatemail;
use App\Mail\deleteemail;
//php -S 127.0.0.1:8000 -t public/

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function register(){
        return view('register');
    }
    public function insert(Request $r){
        $name=$r->name;
        $email=$r->email;
        $password= $r->password;
        $cpassword=$r->cpassword;
        $radio=$r->gender;
      
        //die('hii');
    
    
         
        $r->validate([
            'name' => [
                'required',
                   'min:4'
            ],
           
            'password' => 'required',
            'cpassword' => 'required|same:password',
          
            
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('admin')
            ],
           
           
        ]);
        $data=array('name'=>$name,'email'=>$email,'password'=>$password,'cpassword'=>$cpassword);
    //Session::put('variableName', $data);
  //  Mail::to($data['email'])->send(new mailme($data));
  DB::table('admin')->insert($data);

  
  //return $data;
    //echo $thisUser;die();
   return redirect('login')->with('success','register succesfully please login!');
}

public function login(Request $r){
    $r->session()->forget('data');

    return  view('login');
}
public function dashboard(Request $r){
    $email=$r->email;
   
    $password=$r->password;
   
  

    $r->validate([
        'email' => [
            'required',
            'email',
            'max:255'
            
        ],
        'password' => 'required',
        
    ]);
    $data= DB::select('select * from admin where email = ? and password=?',[$email,$password]);
    
    
    //print_r($data);die();
    if (count($data) == 1) {
        $r->session()->put('data',$data);
     
        return redirect('addbook');
       // return view('addbook');
 
}
else{
    return back()->with('error','please enter correct cretendials');
}
}

public function forgetpassword(){

    return view('forgetpassword');
}



    public function conformpassword(Request $r){
        $email=$r->email;
        $password=$r->password;
        $cpassword=$r->cpassword;
       
       
        $r->validate([
            'email' => [
                'required',
                'email',
                'max:255'
                
            ],
            'password' => 'required',
            'cpassword' => 'required|same:password',
        ]);
      
        $data=  DB::update('update admin set password = ?, cpassword=? where email = ?',[$password,$cpassword,$email]);
      //  echo $data;die();
        if($data==1){
            return redirect('login')->with('success','Your password is ready please login!');
        }
       else{
        return redirect('login')->with('error','Your email is not register please register!');;
       }
    } 
    

public function addbook(){
  $data=DB::select('select * FROM book INNER JOIN admin on admin.id=book.admin_id');

    return view('addbook',['data'=>$data]);

}

    public function insertpopup(){
   return view('insert');
    }
    public function insertbook(Request $request){
      
         
       
        $insertbook = new book;
        $insertbook->bookname =$request->bookname;
        $insertbook->price= $request->price;
        $insertbook->quantity = $request->quantity;
        $info=$request->session()->get('data');
      

        $id=$info[0]->id;
        $insertbook->admin_id = $id;
        
       
              
        //dd($userImage);
        $insertbook->save();
        //$data=$insertbook;
        //echo $data['price'];die();
       
       // echo $email;die();
       $data=$request->session()->get('data');


         Mail::to($data[0]->email)->send(new updatemail($data));

          return redirect('selectbooklist');
        }


        public function selectbooklist(Request $r){
           
            $user= $r->session()->get('data');
            
            $id=$user[0]->id;
           // die('hii');
           
          // dd($user);
         $users=DB::select('select *from book where admin_id='.$user[0]->id);
          //$users=DB::table('posts')->where('userss_id',$user[0]->id)->get();
          //------------------------query builder-------------------------------------
          //$users=Post::where('userss_id',$id)->get();
        
        
        
          //---------------------------model-----------------------------------------------------
          return view('dashboard',['users'=>$users]);
         // return view('accountselect');

        }
        public function bookedit(Request $r,$id) {
           // echo $id;die();
            $users = DB::select('select * from book where id = ?',[$id]);
          // print_r($users);die();
          
           // $users=DB::table('posts')->where('id',[$id])->get();//query builder
          //  $users=Post::where('id', $id)->get();
                    
            return view('bookedit',['users'=>$users]);
            }
            public function booklistedit(Request $request,$id){
            
                $users=book::where('id',[$id])->update(['bookname'=>$request->bookname,'price'=>$request->price,'quantity'=>$request->quantity]);
             //   $data=DB::select('select * FROM book INNER JOIN admin on admin.id=book.admin_id');
                      //   Mail::to($data[0]->email)->send(new updatemail($data));

             
      
                //dd($users);
                     return redirect('selectbooklist');
               }
               public function delete(Request $request,$id) {
                  // echo $id;die();
                $users= DB::delete('delete from book where id = ?',[$id]);
              // $users=  DB::table('posts')->where('id',[$id])->delete();//---------querybuilder---------------------------
              // $users=book::where('id',[$id])->delete();
              // echo $users;die();
               //-----------------model------------------------------------
               $data=$request->session()->get('data');


               Mail::to($data[0]->email)->send(new deleteemail($data));
                 return redirect('selectbooklist');
                 }

           

            }
        
        
 



