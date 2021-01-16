<?php

namespace App\Observers;

use App\Models\ContactForm;
use App\Models\Setting;
use App\Notifications\NewContactForm;
use Illuminate\Support\Facades\Notification;

class ContactFormObserver
{
  //use Queueable;
  
    public function created(ContactForm $model)
    {

        $mailto = config('app.contact_email');

        try {
            Notification::route('mail', $mailto)->notify(new NewContactForm($model));
            \Log::info('email de contacto enviado a ' . $mailto);
        } catch (\Exception $e) {
            \Log::error($e);
        }
    }
}
