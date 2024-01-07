<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\contact;
use App\Models\notifications;
use App\Models\Blog;
use App\Models\profile;
use App\Models\Comments;
use App\Models\gelisimsel;
use App\Models\prices;
use App\Models\meetings;
use App\Models\Appointment;
use Notification;
use App\Notifications\SendEmailNotification;

class HomeController extends Controller
{
        public function sendNotification($id)
        {
            if($id=='wellcome')
            {
                
            $user=User::where('id','1')->get();
            $details=[
                'subject' => "Birlikte Gelişim'e Hoşgeldiniz !",
                'greeting' => "Birlikte Gelişim'e Hoşgeldiniz !",
                'body'     => 'Sizleri Aramızda Görmekten Çok Mutluyuz !',
                'actiontext'     => "Danışmanlık Al",
                'actionurl'     => 'https://birliktegelisim.com',
                'lastline'     => ''
            ];
        Notification::send($user,new SendEmailNotification($details));
      
    }
    return redirect('/home');
        }
    public function roomdelete($roomname)
    {
        $response = Http::delete("https://birliktegelisim.metered.live/api/v1/room/".$roomname."?secretKey=10mRECj03Qwty4-yIG_gUeNJzfmcZSGee-KrZRqZc6PEaDuW", [
           
        ]);
        $responseData = $response->json(); 
     
        $doctor = doctor::all();
      
        $latestData = Blog:: orderBy('id', 'desc')
      ->limit(3)
      ->get();
         
                if  (Auth::user()->usertype =='0')
                {
                  return redirect('/home');
                }
                else{
                  
                    return redirect('/home');
                }
          
          
    }
    
public function katil($id)
{
    $meeting=meetings::where('appointment_id',$id)->get();
    
    $roomname=$meeting[0]->roomname;
    return view('user.katil',compact('roomname'));
}

    public function gelisimroute()
    {
        $doctor=Doctor::all();
 

        return view('user.gelisimseldegerlendirmeformu',compact('doctor'));
    }

    public function submit(Request $request)
    {
        $iletisim = new contact();
       
        $iletisim->name=$request->name;
        $iletisim->email=$request->email;
        $iletisim->subject=$request->subject;
        $iletisim->message=$request->message;;
        $iletisim->okundu='0';

      $iletisim->save();
      return redirect()->back()->with('message','Mesajınız Başarıyla Gönderildi. Size En Yakın Zamanda Dönüş Yapılacaktır.');
    }
    public function contact()
    {
           return view('user.contact');
    }


    public function gunSecimi($doctorId, $selectedDate)
    {
        $doluzamanlar = [];

      
        for ($i = 10; $i <= 17; $i++) {
            $zaman = $i . ':00';
            
         
            $sorgu = Appointment::where('doctor', $doctorId)
                ->where('date', $selectedDate)
                ->where('time', $zaman)
                ->where('status', 'Kabul Edildi')
                ->count();
        
            if ($sorgu > 0) {
              
                $doluzamanlar[] = $zaman;
            }
        }
        return response()->json([$doluzamanlar]);
    }



    public function test() 
     {   
      

        $doctor = doctor::all();
        $comments=Comments::all();
        $latestData = Blog:: orderBy('id', 'desc') 
      ->limit(3) 
      ->get();
            if(Auth::id())
            {
              
                if  (Auth::user()->usertype =='0')
                {
                    return view('user.test',compact('doctor','latestData','comments'));
                }
                else{
                    $bildirimler = notifications::where('okundu', '0')
                    ->where('kime', Auth::user()->name)
                    ->get();
                    $randevu=appointment::where('doctor',Auth::user()->name)->orderBy('id', 'desc')->get();
                    
                    return view('admin.home',compact('bildirimler','randevu'));
                }
            }
            else
            {
                return view('user.test',compact('doctor','latestData','comments'));
            }

    }


    public function redirect() 
     {   
      

        $doctor = doctor::all();
        $comments=Comments::all();
        $latestData = Blog:: orderBy('id', 'desc')
      ->limit(3) 
      ->get();
            if(Auth::id())
            {
              
                if  (Auth::user()->usertype =='0')
                {
                    return view('user.home',compact('doctor','latestData','comments'));
                }
                else{
                    $bildirimler = notifications::where('okundu', '0')
                    ->where('kime', Auth::user()->name)
                    ->get();
                    $randevu=appointment::where('doctor',Auth::user()->name)->orderBy('id', 'desc')->get();
                    
                    return view('admin.home',compact('bildirimler','randevu'));
                }
            }
            else
            {
                return view('user.home',compact('doctor','latestData','comments'));
            }

    }


public function testebasla(Request $request)
{
    $gelisim=new gelisimsel;
    $gelisim->cocukadi=$request->cocukadi;
    $gelisim->hastaadi=Auth::user()->name;

    $gelisim->cinsiyet=$request->cinsiyet;
    $gelisim->kresanaokulu=$request->kresanaokulu;
   
    $gelisim->kardesyascinsiyet=$request->kardesyascinsiyet;

    $gelisim->degerlendirmenedeni=$request->degerlendirmenedeni;
    $gelisim->fizikselozur=$request->fizikselozur;
    $gelisim->dogumtarihi=$request->dogumtarihi;
    $gelisim->cocukyas=$request->cocukyas;
    $form="";
    if($gelisim->cocukyas<='3')
    {
     $form="1";
    }
    elseif($gelisim->cocukyas<='5')
    {
        $form="2";
    }
    elseif($gelisim->cocukyas<='7')
    {
        $form="3";
    }
    elseif($gelisim->cocukyas<='9')
    {
        $form="4";
    }
    elseif($gelisim->cocukyas<='11')
    {
        $form="5";
    }
    elseif($gelisim->cocukyas<='13')
    {
        $form="6";
    }
    elseif($gelisim->cocukyas<='15')
    {
        $form="7";
    }
    elseif($gelisim->cocukyas<='17')
    {
        $form="8";
    }
    elseif($gelisim->cocukyas<='23')
    {
        $form="9";
    }
    elseif($gelisim->cocukyas<='29')
    {
        $form="10";
    }
    elseif($gelisim->cocukyas<='35')
    {
        $form="11";
    }
    elseif($gelisim->cocukyas<='47')
    {
        $form="12";
    }
    else
    {
        $form="13";
    }
    $gelisim->privateid=$gelisim->cocukadi.Auth::user()->name;
 $gelisim->save();
  return redirect()->back()->with(['form' => $form, 'privateid' => $gelisim->privateid]);

   
}

public function sonucugonder(Request $request)
{
   
    $form=gelisimsel::where('privateid',$request->privateid)->first();
   
    if($request->formid=="1")
    {
        $form->soru1=$request->soru1;
        $form->soru2=$request->soru2;
        $form->soru3=$request->soru3;
        $form->soru4=$request->soru4;
        $form->soru5=$request->soru5;
        $form->soru6=$request->soru6;
        $form->soru7=$request->soru7;
        $form->soru8=$request->soru8;
        $form->soru9=$request->soru9;
        $form->soru10=$request->soru10;
        $form->soru11=$request->soru11;
        $form->soru12=$request->soru12;
        $form->soru13=$request->soru13;  
        $form->save();
        $forms = gelisimsel::where('privateid', $request->privateid)->first();

        $dilbilissel = $forms->dilbilissel;
       
        $dilozelSorular = [1,2,3,13];
        
        foreach ($dilozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
         
            $dilbilissel += (int)$forms->$soru;
           
        }
       
        $forms->dilbilissel = $dilbilissel;
      
       
        $incemotor = $forms->incemotor;
     
        $inceozelSorular = [9,11];
        
        foreach ($inceozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $incemotor  += (int)$forms->$soru;
        }
      
        $forms->incemotor=$incemotor ;

        $kabamotor = $forms->kabamotor;
      
        $kabaozelSorular = [6,8,12];
        
        foreach ($kabaozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $kabamotor  += (int)$forms->$soru;
        }
      
        $forms->kabamotor=$kabamotor ;

        $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
       
        $sosyalbeceriozbakimsayilar =[4,5,7,10];
        
        foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $sosyalbeceriozbakim  += (int)$forms->$soru;
        }
      
        $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;





        $forms->save();
        return redirect()->back()->with(['tamamlandi' => 'Tablonuz Doktora Başarıyla İletildi, Randevu alabilirsiniz.']);

    }
    else if($request->formid=="2")
    {
        $form->soru14=$request->soru14;
        $form->soru15=$request->soru15;
        $form->soru16=$request->soru16;
        $form->soru17=$request->soru17;
        $form->soru18=$request->soru18;
        $form->soru19=$request->soru19;
        $form->soru20=$request->soru20;
        $form->soru21=$request->soru21;
        $form->soru22=$request->soru22;
        $form->soru23=$request->soru23;
        $form->soru24=$request->soru24;
        $form->soru25=$request->soru25;
        $form->soru26=$request->soru26;    
        $form->soru27=$request->soru27; 
      
        $form->save();
        $sorgula = gelisimsel::where('privateid', $request->privateid)->first();
        $varmi=0;
        $sayac =1;
        $bulundu=0;
        for ($i = 14; $i <= 27; $i++) {
            $columns = "soru{$i}";
          
         
            $varmi += (int)$sorgula->$columns;
           
            if($varmi==0 )
            {
                if($sayac>=3)
                {
                    $bulundu=1;
                }
                else
                {
                    $sayac++;
                }
               
            }
            else
            {
                $varmi=0;
               
            }
        

        }
      
        if ($bulundu == 1) {
            $form->soru14=$request->soru14;
            $form->soru15=$request->soru15;
            $form->soru16=$request->soru16;
            $form->soru17=$request->soru17;
            $form->soru18=$request->soru18;
            $form->soru19=$request->soru19;
            $form->soru20=$request->soru20;
            $form->soru21=$request->soru21;
            $form->soru22=$request->soru22;
            $form->soru23=$request->soru23;
            $form->soru24=$request->soru24;
            $form->soru25=$request->soru25;
            $form->soru26=$request->soru26;    
            $form->soru27=$request->soru27; 
          
            $form->save();
            
            $forms = gelisimsel::where('privateid', $request->privateid)->first();

            $dilbilissel = $forms->dilbilissel;
           
            $dilozelSorular = [14,15,16,20,21];
            
            foreach ($dilozelSorular as $soruNumarasi) {
                $soru = "soru{$soruNumarasi}";
             
                $dilbilissel += (int)$forms->$soru;
               
            }
           
            $forms->dilbilissel = $dilbilissel;
          
           
            $incemotor = $forms->incemotor;
         
            $inceozelSorular = [19,22,23,24];
            
            foreach ($inceozelSorular as $soruNumarasi) {
                $soru = "soru{$soruNumarasi}";
                $incemotor  += (int)$forms->$soru;
            }
          
            $forms->incemotor=$incemotor ;
    
            $kabamotor = $forms->kabamotor;
          
            $kabaozelSorular = [31,34,36,37,47,49,52,53,56,57,63,64,69,73,74,75,78,88,101,109,129];
            
            foreach ($kabaozelSorular as $soruNumarasi) {
                $soru = "soru{$soruNumarasi}";
                $kabamotor  += (int)$forms->$soru;
            }
          
            $forms->kabamotor=$kabamotor ;
    
            $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
           
            $sosyalbeceriozbakimsayilar =[17,18,25,26,27];
            
            foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
                $soru = "soru{$soruNumarasi}";
                $sosyalbeceriozbakim  += (int)$forms->$soru;
            }
          
            $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;
    
    
    
    
    
            $forms->save();
    
            return redirect()->back()->with(['form' => "1", 'privateid' => $request->privateid]);
        } else {
        $form->soru14=$request->soru14;
        $form->soru15=$request->soru15;
        $form->soru16=$request->soru16;
        $form->soru17=$request->soru17;
        $form->soru18=$request->soru18;
        $form->soru19=$request->soru19;
        $form->soru20=$request->soru20;
        $form->soru21=$request->soru21;
        $form->soru22=$request->soru22;
        $form->soru23=$request->soru23;
        $form->soru24=$request->soru24;
        $form->soru25=$request->soru25;
        $form->soru26=$request->soru26;    
        $form->soru27=$request->soru27; 
      
        $form->save();


        $forms = gelisimsel::where('privateid', $request->privateid)->first();

        $dilbilissel = $forms->dilbilissel;
       
        $dilozelSorular = [14,15,16,20,21];
        
        foreach ($dilozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
         
            $dilbilissel += (int)$forms->$soru;
           
        }
       
        $forms->dilbilissel = $dilbilissel;
      
       
        $incemotor = $forms->incemotor;
     
        $inceozelSorular = [19,22,23,24];
        
        foreach ($inceozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $incemotor  += (int)$forms->$soru;
        }
      
        $forms->incemotor=$incemotor ;

        $kabamotor = $forms->kabamotor;
      
        $kabaozelSorular = [31,34,36,37,47,49,52,53,56,57,63,64,69,73,74,75,78,88,101,109,129];
        
        foreach ($kabaozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $kabamotor  += (int)$forms->$soru;
        }
      
        $forms->kabamotor=$kabamotor ;

        $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
       
        $sosyalbeceriozbakimsayilar =[17,18,25,26,27];
        
        foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $sosyalbeceriozbakim  += (int)$forms->$soru;
        }
      
        $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;





        $forms->save();


            return redirect()->back()->with(['tamamlandi' => 'Tablonuz Doktora Başarıyla İletildi, Randevu alabilirsiniz.']);
        }

    }


    
else if($request->formid=="3")
{
    $form->soru28=$request->soru28;
    $form->soru29=$request->soru29;
    $form->soru30=$request->soru30;
    $form->soru31=$request->soru31;
    $form->soru32=$request->soru32;
    $form->soru33=$request->soru33;
    $form->soru34=$request->soru34;
    $form->soru35=$request->soru35;
    $form->soru36=$request->soru36;
    $form->soru37=$request->soru37;
    $form->soru38=$request->soru38;
    $form->soru39=$request->soru39;
    $form->soru40=$request->soru40;    
    $form->soru41=$request->soru41; 
  $form->soru42=$request->soru42;    
    $form->soru43=$request->soru43; 

    $form->save();
    $sorgula = gelisimsel::where('privateid', $request->privateid)->first();
    $varmi=0;
    $sayac =1;
    $bulundu=0;
    for ($i = 28; $i <= 43; $i++) {
        $columns = "soru{$i}";
      
     
        $varmi += (int)$sorgula->$columns;
       
        if($varmi==0 )
        {
            if($sayac>=3)
            {
                $bulundu=1;
            }
            else
            {
                $sayac++;
            }
           
        }
        else
        {
            $varmi=0;
           
        }

    }
  
    if ($bulundu == 1) {
        $form->soru28=$request->soru28;
        $form->soru29=$request->soru29;
        $form->soru30=$request->soru30;
        $form->soru31=$request->soru31;
        $form->soru32=$request->soru32;
        $form->soru33=$request->soru33;
        $form->soru34=$request->soru34;
        $form->soru35=$request->soru35;
        $form->soru36=$request->soru36;
        $form->soru37=$request->soru37;
        $form->soru38=$request->soru38;
        $form->soru39=$request->soru39;
        $form->soru40=$request->soru40;    
        $form->soru41=$request->soru41; 
      $form->soru42=$request->soru42;    
        $form->soru43=$request->soru43;  
      
        $form->save();
        
        $forms = gelisimsel::where('privateid', $request->privateid)->first();

        $dilbilissel = $forms->dilbilissel;
       
        $dilozelSorular = [28,33,38,41];
        
        foreach ($dilozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
         
            $dilbilissel += (int)$forms->$soru;
           
        }
       
        $forms->dilbilissel = $dilbilissel;
      
       
        $incemotor = $forms->incemotor;
     
        $inceozelSorular = [29,30,32,35,39];
        
        foreach ($inceozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $incemotor  += (int)$forms->$soru;
        }
      
        $forms->incemotor=$incemotor ;

        $kabamotor = $forms->kabamotor;
      
        $kabaozelSorular = [31,34,36,37];
        
        foreach ($kabaozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $kabamotor  += (int)$forms->$soru;
        }
      
        $forms->kabamotor=$kabamotor ;

        $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
       
        $sosyalbeceriozbakimsayilar =[40,42,43];
        
        foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $sosyalbeceriozbakim  += (int)$forms->$soru;
        }
      
        $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;





        $forms->save();
        return redirect()->back()->with(['form' => "2", 'privateid' => $request->privateid]);
    } else {
        $form->soru28=$request->soru28;
        $form->soru29=$request->soru29;
        $form->soru30=$request->soru30;
        $form->soru31=$request->soru31;
        $form->soru32=$request->soru32;
        $form->soru33=$request->soru33;
        $form->soru34=$request->soru34;
        $form->soru35=$request->soru35;
        $form->soru36=$request->soru36;
        $form->soru37=$request->soru37;
        $form->soru38=$request->soru38;
        $form->soru39=$request->soru39;
        $form->soru40=$request->soru40;    
        $form->soru41=$request->soru41; 
      $form->soru42=$request->soru42;    
        $form->soru43=$request->soru43; 
  
    $form->save();


    $forms = gelisimsel::where('privateid', $request->privateid)->first(); $forms = gelisimsel::where('privateid', $request->privateid)->first();

    $dilbilissel = $forms->dilbilissel;
   
    $dilozelSorular = [28,33,38,41];
    
    foreach ($dilozelSorular as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
     
        $dilbilissel += (int)$forms->$soru;
       
    }
   
    $forms->dilbilissel = $dilbilissel;
  
   
    $incemotor = $forms->incemotor;
 
    $inceozelSorular = [29,30,32,35,39];
    
    foreach ($inceozelSorular as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
        $incemotor  += (int)$forms->$soru;
    }
  
    $forms->incemotor=$incemotor ;

    $kabamotor = $forms->kabamotor;
  
    $kabaozelSorular = [31,34,36,37];
    
    foreach ($kabaozelSorular as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
        $kabamotor  += (int)$forms->$soru;
    }
  
    $forms->kabamotor=$kabamotor ;

    $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
   
    $sosyalbeceriozbakimsayilar =[40,42,43];
    
    foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
        $sosyalbeceriozbakim  += (int)$forms->$soru;
    }
  
    $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;





    $forms->save();


        return redirect()->back()->with(['tamamlandi' => 'Tablonuz Doktora Başarıyla İletildi, Randevu alabilirsiniz.']);
    }


}
else if($request->formid=="4")
{
    $form->soru44=$request->soru44;
    $form->soru45=$request->soru45;
    $form->soru46=$request->soru46;
    $form->soru47=$request->soru47;
    $form->soru48=$request->soru48;
    $form->soru49=$request->soru49;
    

    $form->save();
    $sorgula = gelisimsel::where('privateid', $request->privateid)->first();
    $varmi=0;
    $sayac =1;
    $bulundu=0;
    for ($i = 44; $i <= 49; $i++) {
        $columns = "soru{$i}";
      
     
        $varmi += (int)$sorgula->$columns;
      
        if($varmi==0 )
        {
            if($sayac>=3)
            {
                $bulundu=1;
            }
            else
            {
                $sayac++;
            }
           
        }
        else
        {
            $varmi=0;
           
        }
     
    }
    
    if ($bulundu == 1) {
        $form->soru44=$request->soru44;
    $form->soru45=$request->soru45;
    $form->soru46=$request->soru46;
    $form->soru47=$request->soru47;
    $form->soru48=$request->soru48;
    $form->soru49=$request->soru49;
     
      
        $form->save();
        
        $forms = gelisimsel::where('privateid', $request->privateid)->first();

        $dilbilissel = $forms->dilbilissel;
       
        $dilozelSorular = [44,46];
        
        foreach ($dilozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
         
            $dilbilissel += (int)$forms->$soru;
           
        }
       
        $forms->dilbilissel = $dilbilissel;
      
       
        $incemotor = $forms->incemotor;
     
        $inceozelSorular = [45];
        
        foreach ($inceozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $incemotor  += (int)$forms->$soru;
        }
      
        $forms->incemotor=$incemotor ;

        $kabamotor = $forms->kabamotor;
      
        $kabaozelSorular = [47,49];
        
        foreach ($kabaozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $kabamotor  += (int)$forms->$soru;
        }
      
        $forms->kabamotor=$kabamotor ;

        $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
       
        $sosyalbeceriozbakimsayilar =[48];
        
        foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $sosyalbeceriozbakim  += (int)$forms->$soru;
        }
      
        $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;





        $forms->save();
        return redirect()->back()->with(['form' => "3", 'privateid' => $request->privateid]);
    } else {
        $form->soru44=$request->soru44;
    $form->soru45=$request->soru45;
    $form->soru46=$request->soru46;
    $form->soru47=$request->soru47;
    $form->soru48=$request->soru48;
    $form->soru49=$request->soru49;
    
  
    $form->save();


    $forms = gelisimsel::where('privateid', $request->privateid)->first();

    $dilbilissel = $forms->dilbilissel;
   
    $dilozelSorular = [44,46];
    
    foreach ($dilozelSorular as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
     
        $dilbilissel += (int)$forms->$soru;
       
    }
   
    $forms->dilbilissel = $dilbilissel;
  
   
    $incemotor = $forms->incemotor;
 
    $inceozelSorular = [45];
    
    foreach ($inceozelSorular as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
        $incemotor  += (int)$forms->$soru;
    }
  
    $forms->incemotor=$incemotor ;

    $kabamotor = $forms->kabamotor;
  
    $kabaozelSorular = [47,49];
    
    foreach ($kabaozelSorular as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
        $kabamotor  += (int)$forms->$soru;
    }
  
    $forms->kabamotor=$kabamotor ;

    $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
   
    $sosyalbeceriozbakimsayilar =[48];
    
    foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
        $sosyalbeceriozbakim  += (int)$forms->$soru;
    }
  
    $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;





    $forms->save();


        return redirect()->back()->with(['tamamlandi' => 'Tablonuz Doktora Başarıyla İletildi, Randevu alabilirsiniz.']);
    }

}

else if($request->formid=="5")
{
    $form->soru50=$request->soru50;
    $form->soru51=$request->soru51;
    $form->soru52=$request->soru52;
    $form->soru53=$request->soru53;
    $form->soru54=$request->soru54;
    $form->soru55=$request->soru55;
    $form->soru56=$request->soru56;
    $form->soru57=$request->soru57;
    $form->soru58=$request->soru58;
    $form->soru59=$request->soru59;

    $form->save();
    $sorgula = gelisimsel::where('privateid', $request->privateid)->first();
    $varmi=0;
    $sayac =1;
    $bulundu=0;
    for ($i = 50; $i <= 59; $i++) {
        $columns = "soru{$i}";
      
     
        $varmi += (int)$sorgula->$columns;
      
        if($varmi==0 )
        {
            if($sayac>=3)
            {
                $bulundu=1;
            }
            else
            {
                $sayac++;
            }
           
        }
        else
        {
            $varmi=0;
           
        }
     
    }
    
    if ($bulundu == 1) {
        $form->soru50=$request->soru50;
        $form->soru51=$request->soru51;
        $form->soru52=$request->soru52;
        $form->soru53=$request->soru53;
        $form->soru54=$request->soru54;
        $form->soru55=$request->soru55;
        $form->soru56=$request->soru56;
        $form->soru57=$request->soru57;
        $form->soru58=$request->soru58;
        $form->soru59=$request->soru59;
     
      
        $form->save();
        
        $forms = gelisimsel::where('privateid', $request->privateid)->first();

        $dilbilissel = $forms->dilbilissel;
       
        $dilozelSorular =  [54,58];
        
        foreach ($dilozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
         
            $dilbilissel += (int)$forms->$soru;
           
        }
       
        $forms->dilbilissel = $dilbilissel;
      
       
        $incemotor = $forms->incemotor;
     
        $inceozelSorular = [51];
        
        foreach ($inceozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $incemotor  += (int)$forms->$soru;
        }
      
        $forms->incemotor=$incemotor ;

        $kabamotor = $forms->kabamotor;
      
        $kabaozelSorular = [52,53,56,57];
        
        foreach ($kabaozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $kabamotor  += (int)$forms->$soru;
        }
      
        $forms->kabamotor=$kabamotor ;

        $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
       
        $sosyalbeceriozbakimsayilar =[50,55,59];
        
        foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $sosyalbeceriozbakim  += (int)$forms->$soru;
        }
      
        $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;





        $forms->save();
        return redirect()->back()->with(['form' => "4", 'privateid' => $request->privateid]);
    } else {
        $form->soru50=$request->soru50;
        $form->soru51=$request->soru51;
        $form->soru52=$request->soru52;
        $form->soru53=$request->soru53;
        $form->soru54=$request->soru54;
        $form->soru55=$request->soru55;
        $form->soru56=$request->soru56;
        $form->soru57=$request->soru57;
        $form->soru58=$request->soru58;
        $form->soru59=$request->soru59;
    
  
    $form->save();


    $forms = gelisimsel::where('privateid', $request->privateid)->first();

    $dilbilissel = $forms->dilbilissel;
   
    $dilozelSorular =  [54,58];
    
    foreach ($dilozelSorular as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
     
        $dilbilissel += (int)$forms->$soru;
       
    }
   
    $forms->dilbilissel = $dilbilissel;
  
   
    $incemotor = $forms->incemotor;
 
    $inceozelSorular = [51];
    
    foreach ($inceozelSorular as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
        $incemotor  += (int)$forms->$soru;
    }
  
    $forms->incemotor=$incemotor ;

    $kabamotor = $forms->kabamotor;
  
    $kabaozelSorular = [52,53,56,57];
    
    foreach ($kabaozelSorular as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
        $kabamotor  += (int)$forms->$soru;
    }
  
    $forms->kabamotor=$kabamotor ;

    $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
   
    $sosyalbeceriozbakimsayilar =[50,55,59];
    
    foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
        $sosyalbeceriozbakim  += (int)$forms->$soru;
    }
  
    $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;





    $forms->save();


        return redirect()->back()->with(['tamamlandi' => 'Tablonuz Doktora Başarıyla İletildi, Randevu alabilirsiniz.']);
    }

}




//Form 6

else if($request->formid=="6")
{
    $form->soru60=$request->soru60;
    $form->soru61=$request->soru61;
    $form->soru62=$request->soru62;
    $form->soru63=$request->soru63;
    $form->soru64=$request->soru64;
    $form->soru65=$request->soru65;
    $form->soru66=$request->soru66;
    $form->soru67=$request->soru67;
    $form->soru68=$request->soru68;
    $form->soru69=$request->soru69;
    $form->soru70=$request->soru70;


    $form->save();
    $sorgula = gelisimsel::where('privateid', $request->privateid)->first();
    $varmi=0;
    $sayac =1;
    $bulundu=0;
    for ($i = 60; $i <= 70; $i++) {
        $columns = "soru{$i}";
      
     
        $varmi += (int)$sorgula->$columns;
      
        if($varmi==0 )
        {
            if($sayac>=3)
            {
                $bulundu=1;
            }
            else
            {
                $sayac++;
            }
           
        }
        else
        {
            $varmi=0;
           
        }
     
    }
    
    if ($bulundu == 1) {
        $form->soru60=$request->soru60;
        $form->soru61=$request->soru61;
        $form->soru62=$request->soru62;
        $form->soru63=$request->soru63;
        $form->soru64=$request->soru64;
        $form->soru65=$request->soru65;
        $form->soru66=$request->soru66;
        $form->soru67=$request->soru67;
        $form->soru68=$request->soru68;
        $form->soru69=$request->soru69;
        $form->soru70=$request->soru70;
      
        $form->save();
        
        $forms = gelisimsel::where('privateid', $request->privateid)->first();

        $dilbilissel = $forms->dilbilissel;
       
        $dilozelSorular = [61,66,67,70];
        
        foreach ($dilozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
         
            $dilbilissel += (int)$forms->$soru;
           
        }
       
        $forms->dilbilissel = $dilbilissel;
      
       
        $incemotor = $forms->incemotor;
     
        $inceozelSorular = [];
        
        foreach ($inceozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $incemotor  += (int)$forms->$soru;
        }
      
        $forms->incemotor=$incemotor ;

        $kabamotor = $forms->kabamotor;
      
        $kabaozelSorular = [63,64,69];
        
        foreach ($kabaozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $kabamotor  += (int)$forms->$soru;
        }
      
        $forms->kabamotor=$kabamotor ;

        $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
       
        $sosyalbeceriozbakimsayilar =[60,62,65,68];
        
        foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $sosyalbeceriozbakim  += (int)$forms->$soru;
        }
      
        $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;





        $forms->save();
        return redirect()->back()->with(['form' => "5", 'privateid' => $request->privateid]);
    } else {
        $form->soru60=$request->soru60;
        $form->soru61=$request->soru61;
        $form->soru62=$request->soru62;
        $form->soru63=$request->soru63;
        $form->soru64=$request->soru64;
        $form->soru65=$request->soru65;
        $form->soru66=$request->soru66;
        $form->soru67=$request->soru67;
        $form->soru68=$request->soru68;
        $form->soru69=$request->soru69;
        $form->soru70=$request->soru70;
  
    $form->save();


    $forms = gelisimsel::where('privateid', $request->privateid)->first();

    $dilbilissel = $forms->dilbilissel;
   
    $dilozelSorular = [61,66,67,70];
    
    foreach ($dilozelSorular as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
     
        $dilbilissel += (int)$forms->$soru;
       
    }
   
    $forms->dilbilissel = $dilbilissel;
  
   
    $incemotor = $forms->incemotor;
 
    $inceozelSorular = [];
    
    foreach ($inceozelSorular as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
        $incemotor  += (int)$forms->$soru;
    }
  
    $forms->incemotor=$incemotor ;

    $kabamotor = $forms->kabamotor;
  
    $kabaozelSorular = [63,64,69];
    
    foreach ($kabaozelSorular as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
        $kabamotor  += (int)$forms->$soru;
    }
  
    $forms->kabamotor=$kabamotor ;

    $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
   
    $sosyalbeceriozbakimsayilar =[60,62,65,68];
    
    foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
        $sosyalbeceriozbakim  += (int)$forms->$soru;
    }
  
    $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;





    $forms->save();


        return redirect()->back()->with(['tamamlandi' => 'Tablonuz Doktora Başarıyla İletildi, Randevu alabilirsiniz.']);
    }

}



else if($request->formid=="7")
{
    $form->soru71=$request->soru71;
    $form->soru72=$request->soru72;
    $form->soru73=$request->soru73;
    $form->soru74=$request->soru74;
    $form->soru75=$request->soru75;
    $form->soru76=$request->soru76;


    $form->save();
    $sorgula = gelisimsel::where('privateid', $request->privateid)->first();
    $varmi=0;
    $sayac =1;
    $bulundu=0;
    for ($i = 71; $i <= 76; $i++) {
        $columns = "soru{$i}";
      
     
        $varmi += (int)$sorgula->$columns;
      
        if($varmi==0 )
        {
            if($sayac>=3)
            {
                $bulundu=1;
            }
            else
            {
                $sayac++;
            }
           
        }
        else
        {
            $varmi=0;
           
        }
     
    }
    
    if ($bulundu == 1) {
        $form->soru71=$request->soru71;
        $form->soru72=$request->soru72;
        $form->soru73=$request->soru73;
        $form->soru74=$request->soru74;
        $form->soru75=$request->soru75;
        $form->soru76=$request->soru76;
      
        $form->save();
        
        $forms = gelisimsel::where('privateid', $request->privateid)->first();

        $dilbilissel = $forms->dilbilissel;
       
        $dilozelSorular = [71];
        
        foreach ($dilozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
         
            $dilbilissel += (int)$forms->$soru;
           
        }
       
        $forms->dilbilissel = $dilbilissel;
      
       
        $incemotor = $forms->incemotor;
     
        $inceozelSorular = [];
        
        foreach ($inceozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $incemotor  += (int)$forms->$soru;
        }
      
        $forms->incemotor=$incemotor ;
    
        $kabamotor = $forms->kabamotor;
      
        $kabaozelSorular = [73,74,75];
        
        foreach ($kabaozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $kabamotor  += (int)$forms->$soru;
        }
      
        $forms->kabamotor=$kabamotor ;
    
        $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
       
        $sosyalbeceriozbakimsayilar =[72,76];
        
        foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $sosyalbeceriozbakim  += (int)$forms->$soru;
        }
      
        $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;
    
    
    
    
    
        $forms->save();
        return redirect()->back()->with(['form' => "6", 'privateid' => $request->privateid]);
    } else {
        $form->soru71=$request->soru71;
        $form->soru72=$request->soru72;
        $form->soru73=$request->soru73;
        $form->soru74=$request->soru74;
        $form->soru75=$request->soru75;
        $form->soru76=$request->soru76;
  
    $form->save();


    $forms = gelisimsel::where('privateid', $request->privateid)->first();

    $dilbilissel = $forms->dilbilissel;
   
    $dilozelSorular = [71];
    
    foreach ($dilozelSorular as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
     
        $dilbilissel += (int)$forms->$soru;
       
    }
   
    $forms->dilbilissel = $dilbilissel;
  
   
    $incemotor = $forms->incemotor;
 
    $inceozelSorular = [];
    
    foreach ($inceozelSorular as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
        $incemotor  += (int)$forms->$soru;
    }
  
    $forms->incemotor=$incemotor ;

    $kabamotor = $forms->kabamotor;
  
    $kabaozelSorular = [73,74,75];
    
    foreach ($kabaozelSorular as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
        $kabamotor  += (int)$forms->$soru;
    }
  
    $forms->kabamotor=$kabamotor ;

    $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
   
    $sosyalbeceriozbakimsayilar =[72,76];
    
    foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
        $sosyalbeceriozbakim  += (int)$forms->$soru;
    }
  
    $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;





    $forms->save();


        return redirect()->back()->with(['tamamlandi' => 'Tablonuz Doktora Başarıyla İletildi, Randevu alabilirsiniz.']);
    }

}


else if($request->formid=="8")
{
    $form->soru77=$request->soru77;
    $form->soru78=$request->soru78;
    $form->soru79=$request->soru79;
    $form->soru80=$request->soru80;
    $form->soru81=$request->soru81;
    $form->soru82=$request->soru82;
    $form->soru83=$request->soru83;
    $form->soru84=$request->soru84;

    $form->save();
    $sorgula = gelisimsel::where('privateid', $request->privateid)->first();
    $varmi=0;
    $sayac =1;
    $bulundu=0;
    for ($i = 77; $i <= 84; $i++) {
        $columns = "soru{$i}";
      
     
        $varmi += (int)$sorgula->$columns;
      
        if($varmi==0 )
        {
            if($sayac>=3)
            {
                $bulundu=1;
            }
            else
            {
                $sayac++;
            }
           
        }
        else
        {
            $varmi=0;
           
        }
     
    }
    
    if ($bulundu == 1) {
        $form->soru77=$request->soru77;
        $form->soru78=$request->soru78;
        $form->soru79=$request->soru79;
        $form->soru80=$request->soru80;
        $form->soru81=$request->soru81;
        $form->soru82=$request->soru82;
        $form->soru83=$request->soru83;
        $form->soru84=$request->soru84;
      
        $form->save();
        
        $forms = gelisimsel::where('privateid', $request->privateid)->first();

        $dilbilissel = $forms->dilbilissel;
       
        $dilozelSorular = [80,81,82,83];
        
        foreach ($dilozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
         
            $dilbilissel += (int)$forms->$soru;
           
        }
       
        $forms->dilbilissel = $dilbilissel;
      
       
        $incemotor = $forms->incemotor;
     
        $inceozelSorular = [79,84];
        
        foreach ($inceozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $incemotor  += (int)$forms->$soru;
        }
      
        $forms->incemotor=$incemotor ;
    
        $kabamotor = $forms->kabamotor;
      
        $kabaozelSorular = [78];
        
        foreach ($kabaozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $kabamotor  += (int)$forms->$soru;
        }
      
        $forms->kabamotor=$kabamotor ;
    
        $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
       
        $sosyalbeceriozbakimsayilar =[77];
        
        foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $sosyalbeceriozbakim  += (int)$forms->$soru;
        }
      
        $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;
    
    
    
    
    
        $forms->save();
        return redirect()->back()->with(['form' => "7", 'privateid' => $request->privateid]);
    } else {
        $form->soru77=$request->soru77;
        $form->soru78=$request->soru78;
        $form->soru79=$request->soru79;
        $form->soru80=$request->soru80;
        $form->soru81=$request->soru81;
        $form->soru82=$request->soru82;
        $form->soru83=$request->soru83;
        $form->soru84=$request->soru84;
  
    $form->save();


    $forms = gelisimsel::where('privateid', $request->privateid)->first();

    $dilbilissel = $forms->dilbilissel;
   
    $dilozelSorular = [80,81,82,83];
    
    foreach ($dilozelSorular as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
     
        $dilbilissel += (int)$forms->$soru;
       
    }
   
    $forms->dilbilissel = $dilbilissel;
  
   
    $incemotor = $forms->incemotor;
 
    $inceozelSorular = [79,84];
    
    foreach ($inceozelSorular as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
        $incemotor  += (int)$forms->$soru;
    }
  
    $forms->incemotor=$incemotor ;

    $kabamotor = $forms->kabamotor;
  
    $kabaozelSorular = [78];
    
    foreach ($kabaozelSorular as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
        $kabamotor  += (int)$forms->$soru;
    }
  
    $forms->kabamotor=$kabamotor ;

    $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
   
    $sosyalbeceriozbakimsayilar =[77];
    
    foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
        $soru = "soru{$soruNumarasi}";
        $sosyalbeceriozbakim  += (int)$forms->$soru;
    }
  
    $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;





    $forms->save();


        return redirect()->back()->with(['tamamlandi' => 'Tablonuz Doktora Başarıyla İletildi, Randevu alabilirsiniz.']);
    }

}


else if($request->formid=="9")
{
    $form->soru85=$request->soru85;
    $form->soru86=$request->soru86;
    $form->soru87=$request->soru87;
    $form->soru88=$request->soru88;
    $form->soru89=$request->soru89;
    $form->soru90=$request->soru90;
    $form->soru91=$request->soru91;
    $form->soru92=$request->soru92;
    $form->soru93=$request->soru93;
    $form->soru94=$request->soru94;
    $form->soru95=$request->soru95;
    $form->soru96=$request->soru96;
    $form->soru97=$request->soru97;
    $form->soru98=$request->soru98;
    $form->soru99=$request->soru99;
    $form->soru100=$request->soru100;
    $form->soru101=$request->soru101;

    $form->save();
    $sorgula = gelisimsel::where('privateid', $request->privateid)->first();
    $varmi=0;
    $sayac =1;
    $bulundu=0;
    for ($i = 85; $i <= 101; $i++) {
        $columns = "soru{$i}";
      
     
        $varmi += (int)$sorgula->$columns;
      
        if($varmi==0 )
        {
            if($sayac>=3)
            {
                $bulundu=1;
            }
            else
            {
                $sayac++;
            }
           
        }
        else
        {
            $varmi=0;
           
        }
     
    }
    
    if ($bulundu == 1) {
        $form->soru85=$request->soru85;
        $form->soru86=$request->soru86;
        $form->soru87=$request->soru87;
        $form->soru88=$request->soru88;
        $form->soru89=$request->soru89;
        $form->soru90=$request->soru90;
        $form->soru91=$request->soru91;
        $form->soru92=$request->soru92;
        $form->soru93=$request->soru93;
        $form->soru94=$request->soru94;
        $form->soru95=$request->soru95;
        $form->soru96=$request->soru96;
        $form->soru97=$request->soru97;
        $form->soru98=$request->soru98;
        $form->soru99=$request->soru99;
        $form->soru100=$request->soru100;
        $form->soru101=$request->soru101;
      
        $form->save();
        
        $forms = gelisimsel::where('privateid', $request->privateid)->first();

        $dilbilissel = $forms->dilbilissel;
       
        $dilozelSorular = [85,92,94,95,96,97,99];
        
        foreach ($dilozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
         
            $dilbilissel += (int)$forms->$soru;
           
        }
       
        $forms->dilbilissel = $dilbilissel;
      
       
        $incemotor = $forms->incemotor;
     
        $inceozelSorular = [87,91];
        
        foreach ($inceozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $incemotor  += (int)$forms->$soru;
        }
      
        $forms->incemotor=$incemotor ;
    
        $kabamotor = $forms->kabamotor;
      
        $kabaozelSorular = [88,101];
        
        foreach ($kabaozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $kabamotor  += (int)$forms->$soru;
        }
      
        $forms->kabamotor=$kabamotor ;
    
        $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
       
        $sosyalbeceriozbakimsayilar =[86,89,90,93,98,100];
        
        foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $sosyalbeceriozbakim  += (int)$forms->$soru;
        }
      
        $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;
    
    
    
    
    
        $forms->save();
        return redirect()->back()->with(['form' => "8", 'privateid' => $request->privateid]);
    } else {
        $form->soru85=$request->soru85;
        $form->soru86=$request->soru86;
        $form->soru87=$request->soru87;
        $form->soru88=$request->soru88;
        $form->soru89=$request->soru89;
        $form->soru90=$request->soru90;
        $form->soru91=$request->soru91;
        $form->soru92=$request->soru92;
        $form->soru93=$request->soru93;
        $form->soru94=$request->soru94;
        $form->soru95=$request->soru95;
        $form->soru96=$request->soru96;
        $form->soru97=$request->soru97;
        $form->soru98=$request->soru98;
        $form->soru99=$request->soru99;
        $form->soru100=$request->soru100;
        $form->soru101=$request->soru101;
  
    $form->save();


    $forms = gelisimsel::where('privateid', $request->privateid)->first();

        $dilbilissel = $forms->dilbilissel;
       
        $dilozelSorular = [85,92,94,95,96,97,99];
        
        foreach ($dilozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
         
            $dilbilissel += (int)$forms->$soru;
           
        }
       
        $forms->dilbilissel = $dilbilissel;
      
       
        $incemotor = $forms->incemotor;
     
        $inceozelSorular = [87,91];
        
        foreach ($inceozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $incemotor  += (int)$forms->$soru;
        }
      
        $forms->incemotor=$incemotor ;
    
        $kabamotor = $forms->kabamotor;
      
        $kabaozelSorular = [88,101];
        
        foreach ($kabaozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $kabamotor  += (int)$forms->$soru;
        }
      
        $forms->kabamotor=$kabamotor ;
    
        $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
       
        $sosyalbeceriozbakimsayilar =[86,89,90,93,98,100];
        
        foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $sosyalbeceriozbakim  += (int)$forms->$soru;
        }
      
        $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;
    
    
    
    
    
        $forms->save();


        return redirect()->back()->with(['tamamlandi' => 'Tablonuz Doktora Başarıyla İletildi, Randevu alabilirsiniz.']);
    }

}


else if($request->formid=="10")
{
    $form->soru102=$request->soru102;
    $form->soru103=$request->soru103;
    $form->soru104=$request->soru104;
    $form->soru105=$request->soru105;
    $form->soru106=$request->soru106;
    $form->soru107=$request->soru107;
    $form->soru108=$request->soru108;
    $form->soru109=$request->soru109;
  

    $form->save();
    $sorgula = gelisimsel::where('privateid', $request->privateid)->first();
    $varmi=0;
    $sayac =1;
    $bulundu=0;
    for ($i = 102; $i <= 109; $i++) {
        $columns = "soru{$i}";
      
     
        $varmi += (int)$sorgula->$columns;
      
        if($varmi==0 )
        {
            if($sayac>=3)
            {
                $bulundu=1;
            }
            else
            {
                $sayac++;
            }
           
        }
        else
        {
            $varmi=0;
           
        }
     
    }
    
    if ($bulundu == 1) {
        $form->soru102=$request->soru102;
        $form->soru103=$request->soru103;
        $form->soru104=$request->soru104;
        $form->soru105=$request->soru105;
        $form->soru106=$request->soru106;
        $form->soru107=$request->soru107;
        $form->soru108=$request->soru108;
        $form->soru109=$request->soru109;
      
    
      
        $form->save();
        
        $forms = gelisimsel::where('privateid', $request->privateid)->first();

        $dilbilissel = $forms->dilbilissel;
       
        $dilozelSorular = [102,103,105,106,107];
        
        foreach ($dilozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
         
            $dilbilissel += (int)$forms->$soru;
           
        }
       
        $forms->dilbilissel = $dilbilissel;
      
       
        $incemotor = $forms->incemotor;
     
        $inceozelSorular = [];
        
        foreach ($inceozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $incemotor  += (int)$forms->$soru;
        }
      
        $forms->incemotor=$incemotor ;
    
        $kabamotor = $forms->kabamotor;
      
        $kabaozelSorular = [109];
        
        foreach ($kabaozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $kabamotor  += (int)$forms->$soru;
        }
      
        $forms->kabamotor=$kabamotor ;
    
        $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
       
        $sosyalbeceriozbakimsayilar =[104,108];
        
        foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $sosyalbeceriozbakim  += (int)$forms->$soru;
        }
      
        $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;
    
    
    
    
    
        $forms->save();
        return redirect()->back()->with(['form' => "9", 'privateid' => $request->privateid]);
    } else {
        $form->soru102=$request->soru102;
    $form->soru103=$request->soru103;
    $form->soru104=$request->soru104;
    $form->soru105=$request->soru105;
    $form->soru106=$request->soru106;
    $form->soru107=$request->soru107;
    $form->soru108=$request->soru108;
    $form->soru109=$request->soru109;
  

  
    $form->save();


    $forms = gelisimsel::where('privateid', $request->privateid)->first();

        $dilbilissel = $forms->dilbilissel;
       
        $dilozelSorular = [102,103,105,106,107];
        
        foreach ($dilozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
         
            $dilbilissel += (int)$forms->$soru;
           
        }
       
        $forms->dilbilissel = $dilbilissel;
      
       
        $incemotor = $forms->incemotor;
     
        $inceozelSorular = [];
        
        foreach ($inceozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $incemotor  += (int)$forms->$soru;
        }
      
        $forms->incemotor=$incemotor ;
    
        $kabamotor = $forms->kabamotor;
      
        $kabaozelSorular = [109];
        
        foreach ($kabaozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $kabamotor  += (int)$forms->$soru;
        }
      
        $forms->kabamotor=$kabamotor ;
    
        $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
       
        $sosyalbeceriozbakimsayilar =[104,108];
        
        foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $sosyalbeceriozbakim  += (int)$forms->$soru;
        }
      
        $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;
    
    
    
    
    
        $forms->save();


        return redirect()->back()->with(['tamamlandi' => 'Tablonuz Doktora Başarıyla İletildi, Randevu alabilirsiniz.']);
    }

}



else if($request->formid=="11")
{
    $form->soru110=$request->soru110;
    $form->soru111=$request->soru111;
    $form->soru112=$request->soru112;
    $form->soru113=$request->soru113;
    $form->soru114=$request->soru114;
    $form->soru115=$request->soru115;
    $form->soru116=$request->soru116;
    $form->soru117=$request->soru117;  
    $form->soru118=$request->soru118;
    $form->soru119=$request->soru119;
    $form->soru120=$request->soru120;
  
    $form->save();
    $sorgula = gelisimsel::where('privateid', $request->privateid)->first();
    $varmi=0;
    $sayac =1;
    $bulundu=0;
    for ($i = 110; $i <= 120; $i++) {
        $columns = "soru{$i}";
      
     
        $varmi += (int)$sorgula->$columns;
      
        if($varmi==0 )
        {
            if($sayac>=3)
            {
                $bulundu=1;
            }
            else
            {
                $sayac++;
            }
           
        }
        else
        {
            $varmi=0;
           
        }
     
    }
    
    if ($bulundu == 1) {
        $form->soru110=$request->soru110;
        $form->soru111=$request->soru111;
        $form->soru112=$request->soru112;
        $form->soru113=$request->soru113;
        $form->soru114=$request->soru114;
        $form->soru115=$request->soru115;
        $form->soru116=$request->soru116;
        $form->soru117=$request->soru117;  
        $form->soru118=$request->soru118;
        $form->soru119=$request->soru119;
        $form->soru120=$request->soru120;
      
    
      
        $form->save();
        
        $forms = gelisimsel::where('privateid', $request->privateid)->first();

        $dilbilissel = $forms->dilbilissel;
       
        $dilozelSorular = [111,113,115,116,117,118,119,120];
        
        foreach ($dilozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
         
            $dilbilissel += (int)$forms->$soru;
           
        }
       
        $forms->dilbilissel = $dilbilissel;
      
       
        $incemotor = $forms->incemotor;
     
        $inceozelSorular = [110];
        
        foreach ($inceozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $incemotor  += (int)$forms->$soru;
        }
      
        $forms->incemotor=$incemotor ;
    
        $kabamotor = $forms->kabamotor;
      
        $kabaozelSorular = [109];
        
        foreach ($kabaozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $kabamotor  += (int)$forms->$soru;
        }
      
        $forms->kabamotor=$kabamotor ;
    
        $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
       
        $sosyalbeceriozbakimsayilar =[112,114];
        
        foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $sosyalbeceriozbakim  += (int)$forms->$soru;
        }
      
        $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;
    
    
    
    
    
        $forms->save();
        return redirect()->back()->with(['form' => "10", 'privateid' => $request->privateid]);
    } else {
        $form->soru110=$request->soru110;
    $form->soru111=$request->soru111;
    $form->soru112=$request->soru112;
    $form->soru113=$request->soru113;
    $form->soru114=$request->soru114;
    $form->soru115=$request->soru115;
    $form->soru116=$request->soru116;
    $form->soru117=$request->soru117;  
    $form->soru118=$request->soru118;
    $form->soru119=$request->soru119;
    $form->soru120=$request->soru120;
  

  
    $form->save();


    $forms = gelisimsel::where('privateid', $request->privateid)->first();

        $dilbilissel = $forms->dilbilissel;
       
        $dilozelSorular = [111,113,115,116,117,118,119,120];
        
        foreach ($dilozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
         
            $dilbilissel += (int)$forms->$soru;
           
        }
       
        $forms->dilbilissel = $dilbilissel;
      
       
        $incemotor = $forms->incemotor;
     
        $inceozelSorular = [110];
        
        foreach ($inceozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $incemotor  += (int)$forms->$soru;
        }
      
        $forms->incemotor=$incemotor ;
    
        $kabamotor = $forms->kabamotor;
      
        $kabaozelSorular = [109];
        
        foreach ($kabaozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $kabamotor  += (int)$forms->$soru;
        }
      
        $forms->kabamotor=$kabamotor ;
    
        $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
       
        $sosyalbeceriozbakimsayilar =[112,114];
        
        foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $sosyalbeceriozbakim  += (int)$forms->$soru;
        }
      
        $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;
    
    
    
    
    
        $forms->save();


        return redirect()->back()->with(['tamamlandi' => 'Tablonuz Doktora Başarıyla İletildi, Randevu alabilirsiniz.']);
    }

}



else if($request->formid=="12")
{
    $form->soru121=$request->soru121;
    $form->soru122=$request->soru122;
    $form->soru123=$request->soru123;
    $form->soru124=$request->soru124;
    $form->soru125=$request->soru125;
    $form->soru126=$request->soru126;
    $form->soru127=$request->soru127;
    $form->soru128=$request->soru128;
    $form->soru129=$request->soru129;
    $form->soru130=$request->soru130;
    $form->soru131=$request->soru131;
    $form->soru132=$request->soru132;
    $form->soru133=$request->soru133;
    $form->soru134=$request->soru134;
    $form->soru135=$request->soru135;

    $form->save();
    $sorgula = gelisimsel::where('privateid', $request->privateid)->first();
    $varmi=0;
    $sayac =1;
    $bulundu=0;
    for ($i = 121; $i <= 135; $i++) {
        $columns = "soru{$i}";
      
     
        $varmi += (int)$sorgula->$columns;
      
        if($varmi==0 )
        {
            if($sayac>=3)
            {
                $bulundu=1;
            }
            else
            {
                $sayac++;
            }
           
        }
        else
        {
            $varmi=0;
           
        }
     
    }
    
    if ($bulundu == 1) {
        $form->soru121=$request->soru121;
        $form->soru122=$request->soru122;
        $form->soru123=$request->soru123;
        $form->soru124=$request->soru124;
        $form->soru125=$request->soru125;
        $form->soru126=$request->soru126;
        $form->soru127=$request->soru127;
        $form->soru128=$request->soru128;
        $form->soru129=$request->soru129;
        $form->soru130=$request->soru130;
        $form->soru131=$request->soru131;
        $form->soru132=$request->soru132;
        $form->soru133=$request->soru133;
        $form->soru134=$request->soru134;
        $form->soru135=$request->soru135;
      
    
      
        $form->save();
        $forms = gelisimsel::where('privateid', $request->privateid)->first();

        $dilbilissel = $forms->dilbilissel;
       
        $dilozelSorular = [123,126,127,131,135];
        
        foreach ($dilozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
         
            $dilbilissel += (int)$forms->$soru;
           
        }
       
        $forms->dilbilissel = $dilbilissel;
      
       
        $incemotor = $forms->incemotor;
     
        $inceozelSorular = [122,125,134];
        
        foreach ($inceozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $incemotor  += (int)$forms->$soru;
        }
      
        $forms->incemotor=$incemotor ;
    
        $kabamotor = $forms->kabamotor;
      
        $kabaozelSorular = [129];
        
        foreach ($kabaozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $kabamotor  += (int)$forms->$soru;
        }
      
        $forms->kabamotor=$kabamotor ;
    
        $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
       
        $sosyalbeceriozbakimsayilar =[124,128,130,132,133];
        
        foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $sosyalbeceriozbakim  += (int)$forms->$soru;
        }
      
        $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;
    
    
    
    
    
        $forms->save();
        return redirect()->back()->with(['form' => "11", 'privateid' => $request->privateid]);
    } else {
        $form->soru121=$request->soru121;
        $form->soru122=$request->soru122;
        $form->soru123=$request->soru123;
        $form->soru124=$request->soru124;
        $form->soru125=$request->soru125;
        $form->soru126=$request->soru126;
        $form->soru127=$request->soru127;
        $form->soru128=$request->soru128;
        $form->soru129=$request->soru129;
        $form->soru130=$request->soru130;
        $form->soru131=$request->soru131;
        $form->soru132=$request->soru132;
        $form->soru133=$request->soru133;
        $form->soru134=$request->soru134;
        $form->soru135=$request->soru135;
  

  
    $form->save();


    $forms = gelisimsel::where('privateid', $request->privateid)->first();

        $dilbilissel = $forms->dilbilissel;
       
        $dilozelSorular = [123,126,127,131,135];
        
        foreach ($dilozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
         
            $dilbilissel += (int)$forms->$soru;
           
        }
       
        $forms->dilbilissel = $dilbilissel;
      
       
        $incemotor = $forms->incemotor;
     
        $inceozelSorular = [122,125,134];
        
        foreach ($inceozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $incemotor  += (int)$forms->$soru;
        }
      
        $forms->incemotor=$incemotor ;
    
        $kabamotor = $forms->kabamotor;
      
        $kabaozelSorular = [129];
        
        foreach ($kabaozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $kabamotor  += (int)$forms->$soru;
        }
      
        $forms->kabamotor=$kabamotor ;
    
        $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
       
        $sosyalbeceriozbakimsayilar =[124,128,130,132,133];
        
        foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $sosyalbeceriozbakim  += (int)$forms->$soru;
        }
      
        $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;
    
    
    
    
    
        $forms->save();


        return redirect()->back()->with(['tamamlandi' => 'Tablonuz Doktora Başarıyla İletildi, Randevu alabilirsiniz.']);
    }

}



else if($request->formid=="13")
{
    $form->soru136=$request->soru136;
    $form->soru137=$request->soru137;
    $form->soru138=$request->soru138;
    $form->soru139=$request->soru139;
    $form->soru140=$request->soru140;
    $form->soru141=$request->soru141;
    $form->soru142=$request->soru142;
    $form->soru143=$request->soru143;
    $form->soru144=$request->soru144;
    $form->soru145=$request->soru145;
    $form->soru146=$request->soru146;
    $form->soru147=$request->soru147;
    $form->soru148=$request->soru148;
    $form->soru149=$request->soru149;
    $form->soru150=$request->soru150;
    $form->soru151=$request->soru151;
    $form->soru152=$request->soru152;
    $form->soru153=$request->soru153;
    $form->soru154=$request->soru154;


    $form->save();
    $sorgula = gelisimsel::where('privateid', $request->privateid)->first();
    $varmi=0;
    $sayac =1;
    $bulundu=0;
    for ($i = 136; $i <= 154; $i++) {
        $columns = "soru{$i}";
      
     
        $varmi += (int)$sorgula->$columns;
      
        if($varmi==0 )
        {
            if($sayac>=3)
            {
                $bulundu=1;
            }
            else
            {
                $sayac++;
            }
           
        }
        else
        {
            $varmi=0;
           
        }
     
    }
    
    if ($bulundu == 1) {
        $form->soru136=$request->soru136;
    $form->soru137=$request->soru137;
    $form->soru138=$request->soru138;
    $form->soru139=$request->soru139;
    $form->soru140=$request->soru140;
    $form->soru141=$request->soru141;
    $form->soru142=$request->soru142;
    $form->soru143=$request->soru143;
    $form->soru144=$request->soru144;
    $form->soru145=$request->soru145;
    $form->soru146=$request->soru146;
    $form->soru147=$request->soru147;
    $form->soru148=$request->soru148;
    $form->soru149=$request->soru149;
    $form->soru150=$request->soru150;
    $form->soru151=$request->soru151;
    $form->soru152=$request->soru152;
    $form->soru153=$request->soru153;
    $form->soru154=$request->soru154;
      
    
      
        $form->save();
        $forms = gelisimsel::where('privateid', $request->privateid)->first();

        $dilbilissel = $forms->dilbilissel;
       
        $dilozelSorular = [137,138,139,140,141,143,144,147,149,150,151,152,154];
        
        foreach ($dilozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
         
            $dilbilissel += (int)$forms->$soru;
           
        }
       
        $forms->dilbilissel = $dilbilissel;
      
       
        $incemotor = $forms->incemotor;
     
        $inceozelSorular = [145,146,148,153];
        
        foreach ($inceozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $incemotor  += (int)$forms->$soru;
        }
      
        $forms->incemotor=$incemotor ;
    
        $kabamotor = $forms->kabamotor;
      
        $kabaozelSorular = [];
        
        foreach ($kabaozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $kabamotor  += (int)$forms->$soru;
        }
      
        $forms->kabamotor=$kabamotor ;
    
        $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
       
        $sosyalbeceriozbakimsayilar =[142];
        
        foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $sosyalbeceriozbakim  += (int)$forms->$soru;
        }
      
        $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;
    
    
    
    
    
        $forms->save();
        return redirect()->back()->with(['form' => "11", 'privateid' => $request->privateid]);
    } else {
        $form->soru136=$request->soru136;
        $form->soru137=$request->soru137;
        $form->soru138=$request->soru138;
        $form->soru139=$request->soru139;
        $form->soru140=$request->soru140;
        $form->soru141=$request->soru141;
        $form->soru142=$request->soru142;
        $form->soru143=$request->soru143;
        $form->soru144=$request->soru144;
        $form->soru145=$request->soru145;
        $form->soru146=$request->soru146;
        $form->soru147=$request->soru147;
        $form->soru148=$request->soru148;
        $form->soru149=$request->soru149;
        $form->soru150=$request->soru150;
        $form->soru151=$request->soru151;
        $form->soru152=$request->soru152;
        $form->soru153=$request->soru153;
        $form->soru154=$request->soru154;
  

  
    $form->save();


    $forms = gelisimsel::where('privateid', $request->privateid)->first();

        $dilbilissel = $forms->dilbilissel;
       
        $dilozelSorular = [137,138,139,140,141,143,144,147,149,150,151,152,154];
        
        foreach ($dilozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
         
            $dilbilissel += (int)$forms->$soru;
           
        }
       
        $forms->dilbilissel = $dilbilissel;
      
       
        $incemotor = $forms->incemotor;
     
        $inceozelSorular = [145,146,148,153];
        
        foreach ($inceozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $incemotor  += (int)$forms->$soru;
        }
      
        $forms->incemotor=$incemotor ;
    
        $kabamotor = $forms->kabamotor;
      
        $kabaozelSorular = [];
        
        foreach ($kabaozelSorular as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $kabamotor  += (int)$forms->$soru;
        }
      
        $forms->kabamotor=$kabamotor ;
    
        $sosyalbeceriozbakim = $forms->sosyalbeceriozbakim;
       
        $sosyalbeceriozbakimsayilar =[142];
        
        foreach ($sosyalbeceriozbakimsayilar as $soruNumarasi) {
            $soru = "soru{$soruNumarasi}";
            $sosyalbeceriozbakim  += (int)$forms->$soru;
        }
      
        $forms->sosyalbeceriozbakim=$sosyalbeceriozbakim ;
    
    
    
    
    
        $forms->save();


        return redirect()->back()->with(['tamamlandi' => 'Tablonuz Doktora Başarıyla İletildi, Randevu alabilirsiniz.']);
    }

}

}
public function gelisimseldegerlendirmeformu()
{
    return view('user.gelisimseldegerlendirmeformu');
}

    public function appointment(Request $request){
        $data= new  appointment;
        $data->name=Auth::user()->name;
        $data->email=Auth::user()->email;
        $data->phone=$request->phone;
        $data->date=$request->date;
        $data->time=$request->time;
        $data->message=$request->message;
        $data->doctor=$request->doctor;
        $data->status='Ödeme Bekleniyor';
       
            $data->user_id=Auth::user()->id;
       
        $data->save();

        $bildirim=new notifications();
        $bildirim->baslik='Yeni Randevu';
        $bildirim->kime=$request->doctor;
        $bildirim->randevutarihi=$request->date;
        $bildirim->randevusaati=$request->time;
        $bildirim->kimden=Auth::user()->name;
        $bildirim->okundu='0';
        $bildirim->icerik=$bildirim->kimden.' ile '.$bildirim->randevutarihi." tarihinde saat ".$bildirim->randevusaati." 'de randevunuz bulunuyor";
        $bildirim->save();      
        return redirect()->back()->with('message','Randevunuz Başarıyla Oluşturuldu. Randevularım menüsünden ödeme işlemini yapabilirsiniz.');

    }

    public function odemeyapblade($id)
    {
        $appoint=appointment::where('id',$id)->get();
        $doctors=Doctor::where('name',$appoint[0]->doctor)->get();
        $siparis = [];
        foreach($appoint as $randevu)
        {
            $siparis['hastaadi'] =$randevu->name;
            $siparis['hastamail'] =$randevu->email;
            $siparis['hastatelefon'] =$randevu->phone;

            
          
           
         
        }
        
       foreach($doctors as $doktorbilgileri)
       {
   
            $siparis['doktoradi'] =$doktorbilgileri->name;
            $siparis['bolum'] =$doktorbilgileri->speciality;
            $siparis['ucret'] =$doktorbilgileri->price;
            
       
        
       }
     
        return view('user.payment',compact('siparis'));
    }
    public function yaslaragoregelisim()
    {
        return view('user.yaslaragoregelisim');
    }
    public function getDoctorFee($doctorName) {
      
        $doctor = Doctor::find($doctorName);
        if ($doctor) {
            return response()->json(['fee' => $doctor->price]);
        } else {
            return response()->json(['fee' => '0']);
        }
    }
    
    public function doctors()
    {
        $doctor=doctor::all();
        $comments=Comments::all();
        return view('user.doctors',compact('doctor','comments'));
    }
    public function about()
    {
        $doctor=doctor::all();
        return view('user.about',compact('doctor'));
    }
    public function myappointment()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id',$userid)->orderBy('created_at', 'desc')->get();
            return view('user.my_appointment',compact('appoint'));
        }
      else
      {
          return redirect()->back();
      }
    }
    public function yorumyap(Request $request)
    {
    
        $yorumlar= new  Comments;
        $yorumlar->yorum=$request->yorum;
        $yorumlar->kimden=Auth::user()->name;
        $yorumlar->doktor=$request->doktor;
        $yorumlar->rank=$request->rate;
        $yorumlar->save();
        return redirect()->back()->with('message','Yorum Gönderildi');
    }
    public function getprofile($id)
    {
        $doktoradi=doctor::where('id',$id)->get();
        $comments=Comments::where('doktor',$id)->get();
        $doctor=doctor::all();
        $profile=profile::where('doctorid',$doktoradi[0]->name)->get();
        $latestData = Blog:: orderBy('id', 'desc') // id değeri en yüksek olan ilk gelir
      ->limit(5) // Geriye doğru 3 veri al
      ->get();
     
        return view('user.profile',compact('doctor','doktoradi','latestData','comments','profile'));
    }

    public function cancelappointment($id)
    {
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back()->with('message','Randevu İptal Edildi.');
    }
    public function statusCheck()
    {
        // E-posta gönderme işlemleri burada yapılacak
        $user = User::where('id', '1')->get();

        $status = "Siteye Erişilemiyor" ;// status parametresini al
        $details = [
            'subject' => "Websitesi Durumu",
            'greeting' => "Websitesi Durumu",
            'body'     => "Siteye Erişilemiyor",
            'actiontext' => "Siteye Git",
            'actionurl'  => 'https://birliktegelisim.com',
            'lastline'   => ''
        ];

        Notification::send($user, new SendEmailNotification($details));

        return response()->json(['message' => 'E-posta basariyla gonderildi'], 200);
    }
    public function makaleler(Request $request)
    {
       
        $query = $request->get('query');
       
        if ($query) {
            $articles = Blog::where('title', 'like', '%' . $query . '%')->orderBy('created_at', 'desc')->paginate(6);
          
        } else {
            $articles = Blog::orderBy('created_at', 'desc')->paginate(6);
          
        }
     
        return view('user.makaleler', compact('articles', 'query'));
       
    }

}