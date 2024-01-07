<?php

namespace App\Console\Commands;
use Carbon\Carbon;
use Illuminate\Console\Command;
use App\Models\Appointment;
use App\Models\User;
use Twilio\Rest\Client;
use Notification;
use App\Notifications\SendEmailNotification;

class CheckAppointments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-appointments';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Checking appointments...');

      $today = Carbon::today()->format('Y-m-d');
       
       
       $appointments = Appointment::all();
      foreach ($appointments as $appointment) {
          
           if ($today==$appointment->date && $appointment->status=='Kabul Edildi') {
                     $email=$appointment->email;
                      $time=$appointment->time;
                    $doctor=$appointment->doctor;
                      $user=User::where('email',$email)->get();
                       $details=[
                       'subject' => "Randevuyu Kaçırma !",
                       'greeting' => "Bugün Randevunuz Bulunuyor !",
                       'body'     => "Bugün Saat : " .$time."'da ".$doctor." ile 45 dakika görüntülü görüşme seansınız bulunuyor !",
                        'actiontext'     => "Randevularım'ı Gör",
                        'actionurl'     => 'https://birliktegelisim.com/myappointment',
                        'lastline'     => ''
                    ];
                Notification::send($user,new SendEmailNotification($details));
               
                $hastaadi=$appointment->name;
                $user2=User::where('name',$doctor)->get();
                 $details=[
                 'subject' => "Randevuyu Kaçırma !",
                 'greeting' => "Bugün Randevunuz Bulunuyor !",
                 'body'     => "Bugün Saat : " .$time."'da ".$hastaadi." ile 45 dakika görüntülü görüşme seansınız bulunuyor !",
                  'actiontext'     => "Randevularım'ı Gör",
                  'actionurl'     => 'https://birliktegelisim.com/showappointment',
                  'lastline'     => ''
              ];




                Notification::send($user2,new SendEmailNotification($details));
                
            }
        }
     
        $this->info('Appointments checked and updated.');
    }
}
