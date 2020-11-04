<?php


namespace App\Pos;


use App\Pos\Model\Products\Products;
use App\Pos\Model\Sessions\Transaction;
use App\Pos\Model\Sessions\TransactionDetails;
use Cart;

trait Paid
{
    public static  function paid()
    {
        $add = new Transaction();
        $add->session_id = Auth()->user()->open_seesion;
        $add->user_id = Auth()->user()->id;
        $add->total = Cart::total();
        $add->type = 1;
        $add->disc = 0;
        if($add->save()){
            foreach (Cart::content() as $row) {
                $produc = Products::find($row->id);
                $produc->count = $produc->count - $row->qty;
                $produc->save();

                $detills = new TransactionDetails();
                $detills->pro_id = $row->id;
                $detills->trans_id = $add->transaction_id;
                $detills->quantity = $row->qty;
                $detills->paid = $row->price;
                $detills->pruch_prices = $produc->pruch_prices;
                $detills->save();
            }

            return $add->transaction_id;
        }

        return false;

    }
}