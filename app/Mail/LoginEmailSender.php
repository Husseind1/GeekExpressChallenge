<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class LoginEmailSender extends Mailable
{
    use Queueable, SerializesModels;
 
    public $uname;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($uname)
    {
        $this->uname = $uname;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Security alert')    
        ->from($name = 'no-reply@geek-express.com')
        ->view('email.welcome');
    }
}
?>