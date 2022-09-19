<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Str;

class NewOrder extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $cart;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, Cart $cart)
    {
        $this->user = $user;
        $this->cart = $cart;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.new-order')->subject('Your order in listingother #'. Str::padLeft( $this->user->cart->id, 8, '0'));
    }
}
