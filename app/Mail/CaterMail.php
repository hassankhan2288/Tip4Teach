<?php

namespace App\Mail;

use App\Product_Sale;
use App\Sale;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PDF;
use Picqer\Barcode\BarcodeGeneratorHTML;

class CaterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$id)
    {
        $this->data = $data;
        $this->id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->view('emails.mailInvoice');
                    
    }
}
