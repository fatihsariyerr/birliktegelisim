<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Blog;
use App\Models\prices;
use App\Models\profile;
use App\Models\Users;
use App\Models\gelisimsel;
use App\Models\contact;
use App\Models\notifications;

use App\Models\meetings;
use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;

use Intervention\Image\Facades\Image;
class AdminController extends Controller
{
    public function addview()
    {

        $bildirimler = notifications::where('okundu', '0')
        ->where('kime', Auth::user()->name)
        ->get();
        if(Auth::user()->usertype=='2')
        {
            return view('admin.add_doctor',compact('bildirimler'));
        }
        else{
            return redirect()->back()->with('message', 'Sayfayı Görüntüleme Yetkiniz Bulunmuyor');
        }
       
    }
    public function musaitlikbelirle()
    {
        $bildirimler = notifications::where('okundu', '0')
        ->where('kime', Auth::user()->name)
        ->get();
        return view('admin.musaitlik',compact('bildirimler'));
    }
    public function updateprofile()
    {
        $doktor=Doctor::where('name',Auth::user()->name)->get();
        $bildirimler = notifications::where('okundu', '0')
        ->where('kime', Auth::user()->name)
        ->get();
        return view('admin.profile',compact('bildirimler','doktor'));
    }
    public function gdfgoruntule(Request $request)
    {
        $gelisimsel = gelisimsel::where('cocukadi', $request->cocukadi)->get();
        $sorubasliklari=[];
        $cevaplanansorular=[];
        $cevaplanansoruid=0;
        for ($i = 1; $i <= 153; $i++) {
            $soruColumn ="soru".$i;
            if($gelisimsel[0]->$soruColumn!=0)
            {
            $sorubasliklari[$soruColumn]=1;
            $cevaplanansoruid++;
            $cevaplanansorular[$cevaplanansoruid]=$soruColumn;
            }
        }

   
        
      
        $bildirimler = notifications::where('okundu', '0')
     
        ->where('kime', Auth::user()->name)
        ->get();
        return view('admin.gdfgoruntule',compact('bildirimler','gelisimsel','sorubasliklari','cevaplanansorular'));
    }
    public function selectgdf(Request $request)
    {
        $gelisimsel = gelisimsel::where('hastaadi', $request->hasta)->get();

        $bildirimler = notifications::where('okundu', '0')
        ->where('kime', Auth::user()->name)
        ->get();
        return view('admin.gdf',compact('bildirimler','gelisimsel'));
    }
    public function formgoruntule()
    {
        $uniqueHastaAdlari = gelisimsel::distinct('hastaadi')->pluck('hastaadi');

        $gelisimsel=gelisimsel::all();
        $bildirimler = notifications::where('okundu', '0')
        ->where('kime', Auth::user()->name)
        ->get();
        return view('admin.gelisimformugoruntule',compact('bildirimler','gelisimsel','uniqueHastaAdlari'));
    }


public function musaitlikdegistir(Request $request)
{
   
    $doktor=Doctor::where('name',Auth::user()->name)->get();
    foreach($doktor as $d)
    {
        $d->musaitlik=$request->musaitlik;
        $d->save();
    }
    if($request->musaitlik=='musaitdegil')
    {
        return redirect()->back()->with('message', 'Müsaitlik Durumu Güncellendi Yeni Durum : Müsait Değil');
    }
    else
    {
        return redirect()->back()->with('message', 'Müsaitlik Durumu Güncellendi Yeni Durum : Müsait');
    }
   

}

public function updateabout(Request $request)
{
    $data=profile::where('doctorid',Auth::user()->name)->get();
   
    if ($data->isEmpty()) 
    {
            $profile = new profile();
            $profile->about=$request->content;
            $profile->doctorid=Auth::user()->name;
            $profile->save();
           
    }
    else
    {
        $profile = $data->first(); // veya $profile = $data[0]; şeklinde de alabilirsiniz
        $profile->about = $request->content;
        $profile->save();
    }
    return redirect()->back()->with('message','Hakkımda Yazısı Başarıyla Güncellendi Görüntüle Butonuna Tıklayarak Sayfayı Görüntüleyebilirsiniz..');
}

    public function upload(Request $request)
    {
        $doctor = new doctor();
        $image = $request->file;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('doctorimages', $imagename);
    
        // Resmi WebP formatına dönüştür
        $width = 952;
        $imagePath = public_path('doctorimages/' . $imagename);
        $image = Image::make($imagePath)->resize($width, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $image->save(public_path("doctorimages/{$imagename}"), 80, 'webp');
    
        $doctor->doctorimage = $imagename;
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->musaitlik = 'musait';
        $doctor->price = '0';
        $doctor->save();
    
        return redirect()->back()->with('message', 'Doktor Başarıyla Eklendi');
    }

    public function mesajlar()
    {
        $bildirimler = notifications::where('okundu', '0')
                ->where('kime', Auth::user()->name)
                ->get();
        $mesajlar = contact::where('okundu','0')->get();
        if(Auth::user()->usertype=='2')
        {
        return view('admin.mesajlar',compact('mesajlar','bildirimler'));
        }
        else
        {
            return redirect()->back()->with('message','Sayfayı Görüntüleme Yetkiniz Bulunmuyor');
        }
    }

    public function showappointment(Request $request)
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype==1)
            {
                $query = $request->get('query');
       
                if ($query) {
                    $randevu = appointment::where('name', 'like', '%' . $query . '%')
                    ->where('doctor', Auth::user()->name)
                    ->orderBy('created_at', 'desc')
                    ->get();
                  
                } else {
                    $randevu=appointment::where('doctor',Auth::user()->name)->orderBy('id', 'desc')->get();
                  
                }

                $bildirimler = notifications::where('okundu', '0')
                ->where('kime', Auth::user()->name)
                ->get();
                return view ('admin.showappointment',compact('randevu','bildirimler','query'));


            }
            else
            {
                return redirect()->back()->with('message','Bu sayfayı görüntülemek için yetkiniz yok');
            }
        }
        else
        {
            return redirect('login');
        }
    }
   
    public function mesajokundu($id)
    {
        $data=contact::find($id);
        $data->okundu="1";
        $data->save();
        return redirect()->back()->with('message','Mesaj Okundu Olarak İşaretlendi , Veritabanı üzerinde kayıtlı kalmaya devam edecektir .');
    }
    public function adminkatil($id)
    {
        
        $bildirimler = notifications::where('okundu', '0')
        ->where('kime', Auth::user()->name)
        ->get();
    $meeting=meetings::where('appointment_id',$id)->get();
    
    $roomname=$meeting[0]->roomname;
    return view('admin.adminjoin',compact('roomname','bildirimler'));

    }
    public function acceptappointment($id)
    {

       
        $response = Http::post("https://birliktegelisim.metered.live/api/v1/room?secretKey=10mRECj03Qwty4-yIG_gUeNJzfmcZSGee-KrZRqZc6PEaDuW", [
            'autoJoin' => false,
            'maxParticipants'=> 2,
            'recordRoom' =>true
        ]);
        $responseData = $response->json(); 

      
        $roomName = $responseData['roomName'];
        $meeting = new meetings();
        $meeting->appointment_id=$id;
        $meeting->roomname=$roomName;
        $meeting->save();
      
        $data=appointment::find($id);
        $data->status="Kabul Edildi";
        $data->save();
        return redirect()->back()->with([
            'message' => 'Kabul Edildi',
            'roomName' => $roomName, 
        ]);
    }
    public function cancelappointment($id)
    {
        $data=appointment::find($id);
        $data->status="İptal Edildi";
        $data->save();
        return redirect()->back()->with('message','İptal Edildi');
    }
    public function delete($id)
    {
       
            $data=appointment::find($id);
            $data->delete();
            return redirect()->back()->with('message','Randevu Silindi');
       
    }
    public function uploadprice()
    {
        $bildirimler = notifications::where('okundu', '0')
                ->where('kime', Auth::user()->name)
                ->get();
        return view('admin.uploadprice',compact('bildirimler'));
    }
    public function upload_price(Request $istek)
    {
        $seansucreti=Doctor::where('name',Auth::user()->name)->get();
      
        $bildirimler = notifications::where('okundu', '0')
                ->where('kime', Auth::user()->name)
                ->get();

                foreach ($seansucreti as $seans) {
                    $seans->price = $istek->ucret;
                    $seans->save();
                }
            
        return redirect()->back()->with('message','Seans Ücretiniz Güncellendi. Güncel Seans Ücretiniz : '.$istek->ucret.' ₺');
    }

    public function addblog()
    {
        $bildirimler = notifications::where('okundu', '0')
                ->where('kime', Auth::user()->name)
                ->get();
        return view('admin.addblog',compact('bildirimler'));
    }
    public function makaleekle(Request $request)
    {
       
        $makale = new blog();
        $image = $request->file;

      
        $imagename = time() . now()->format('YmdHis') . '.' . $image->getClientOriginalExtension();
        $request->file->move('blogimages', $imagename);

    
        $width = 730;
        $imagePath = 'blogimages/' . $imagename;
        $image = Image::make($imagePath);
        $image->resize($width, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

   
        $image->encode('webp')->save(public_path("blogimages/{$imagename}"));

        $makale->blogimage = $imagename;
        $makale->tag = $request->tag;
        $makale->doctorimage = 'doctorimages/1699189891.png';
        $makale->title = $request->title;
        $makale->date = now()->toDateString();
        $makale->content = $request->content;
        $makale->author = 'Aysel Yavuz';
        $makale->save();

        return redirect()->back()->with('message', 'Makale Başarıyla Eklendi');


    }
    public function okundu()
    {
        $bildirimler = notifications::where('okundu', '0')
        ->where('kime', Auth::user()->name)
        ->get();
        foreach ($bildirimler as $bildirim) {
            $bildirim->okundu = '1';
            $bildirim->save();
        }
       
        return redirect()->back();
    }
    
}
