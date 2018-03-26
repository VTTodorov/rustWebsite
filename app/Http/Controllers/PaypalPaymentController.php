<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Paypalpayment;
class PaypalPaymentController extends Controller {

    /*
    * Process payment using credit card
    */
    public function paywithCreditCard()
    {
        // ### Address
        // Base Address object used as shipping or billing
        // address in a payment. [Optional]
        // $shippingAddress = Paypalpayment::shippingAddress();
        // $shippingAddress->setLine1("3909 Witmer Road")
        //     ->setLine2("Niagara Falls")
        //     ->setCity("Niagara Falls")
        //     ->setState("NY")
        //     ->setPostalCode("14305")
        //     ->setCountryCode("US")
        //     ->setPhone("716-298-1822")
        //     ->setRecipientName("Jhone");

        // ### CreditCard
        $card = Paypalpayment::creditCard();
        $card->setType("visa")
            ->setNumber("4838863451396460")
            ->setExpireMonth("08")
            ->setExpireYear("2019")
            ->setCvv2("257")
            ->setFirstName("VOLEN")
            ->setLastName("TODOROV");

        // ### FundingInstrument
        // A resource representing a Payer's funding instrument.
        // Use a Payer ID (A unique identifier of the payer generated
        // and provided by the facilitator. This is required when
        // creating or using a tokenized funding instrument)
        // and the `CreditCardDetails`
        $fi = Paypalpayment::fundingInstrument();
        $fi->setCreditCard($card);

        // ### Payer
        // A resource representing a Payer that funds a payment
        // Use the List of `FundingInstrument` and the Payment Method
        // as 'credit_card'
        $payer = Paypalpayment::payer();
        $payer->setPaymentMethod("credit_card")
            ->setFundingInstruments([$fi]);

        $item1 = Paypalpayment::item();
        $item1->setName('Ground Coffee 40 oz')
                ->setDescription('Ground Coffee 40 oz')
                ->setCurrency('USD')
                ->setQuantity(1.00)
                ->setTax(0.20)
                ->setPrice(1.00);


        $itemList = Paypalpayment::itemList();
        $itemList->setItems([$item1]);
            // ->setShippingAddress($shippingAddress);


        $details = Paypalpayment::details();
        $details->setShipping("0.00")
                ->setTax("0.00")
                //total of items prices
                ->setSubtotal("1.20");

        //Payment Amount
        $amount = Paypalpayment::amount();
        $amount->setCurrency("USD")
                // the total is $17.8 = (16 + 0.6) * 1 ( of quantity) + 1.2 ( of Shipping).
                ->setTotal("1.20")
                ->setDetails($details);

        // ### Transaction
        // A transaction defines the contract of a
        // payment - what is the payment for and who
        // is fulfilling it. Transaction is created with
        // a `Payee` and `Amount` types

        $transaction = Paypalpayment::transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment test")
            ->setInvoiceNumber(uniqid());

        // ### Payment
        // A Payment Resource; create one using
        // the above types and intent as 'sale'

        $payment = Paypalpayment::payment();

        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setTransactions([$transaction]);

        // try {
        //     // ### Create Payment
        //     // Create a payment by posting to the APIService
        //     // using a valid ApiContext
        //     // The return object contains the status;
        //     $payment->create(Paypalpayment::apiContext());
        // } catch (\PPConnectionException $ex) {
        //     return response()->json(["error" => $ex->getMessage()], 400);
        // }

        try {
            $payment->create(Paypalpayment::apiContext('Ad5RiMWicwk216caOKzyebHmWNlnrJ1jFPhfWTXegflQpTNdJIO9ywdP4EMkhrgIU1NYc5vdH3S2YkW-','EHC03gZUL-XjXqQVhcYxCXh_-cDuEA4oEeSLNEingCE8bOgyOGL7ijtpkfDhTqYBzdoGDvW8DFvFpgYp'));
        } catch (PayPal\Exception\PayPalConnectionException $ex) {
            echo $ex->getCode(); // Prints the Error Code
            echo $ex->getData(); // Prints the detailed error message
            die($ex);
        } catch (Exception $ex) {
            die($ex);
        }

        return response()->json([$payment->toArray()], 200);
    }

}
