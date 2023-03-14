<?php

namespace App\Mail;

use App\Models\Appointment;
use App\Models\Property;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AppointmentBooked extends Mailable
{
    use Queueable, SerializesModels;

    public $properties;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($appointment)
    {
        //
        $this->properties = $appointment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
        ->from('ebenezer.gyamfi@regnt.edu.gh')
        ->to('ebenezer.gyamfi@regent.edu.gh')
        ->subject('Property Booked from easymann')
        ->markdown('appoint');
    }
}
