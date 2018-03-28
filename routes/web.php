<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'Website@index');

// Auth::routes();

Route::get('/steam', 'AuthController@handle');
Route::get('/signin', 'AuthController@redirectToSteam');

Route::get('/payments/success', 'Website@success');
Route::get('paypal/express-checkout', 'PaypalPaymentController@expressCheckout')->name('paypal.express-checkout');
Route::get('paypal/express-checkout-success', 'PaypalPaymentController@expressCheckoutSuccess');
Route::post('paypal/notify', 'PaypalPaymentController@notify');

Route::get('/payments', function()
{
    return view('paypal');
});
//  A21AAFlJBJTns-Gyi8O28L9fZaFEzru_FQICB9EOb3r4wzd9SX6Ceasgx3XHxK_cq29RgzygFrUdwUCY3bCDYBOPbX1-egqMA
//  curl -v https://api.sandbox.paypal.com/v1/payments/payment \
//   -H "Content-Type: application/json" \
//   -H "Authorization: Bearer A21AAFlJBJTns-Gyi8O28L9fZaFEzru_FQICB9EOb3r4wzd9SX6Ceasgx3XHxK_cq29RgzygFrUdwUCY3bCDYBOPbX1-egqMA" \
//   -d '{
//   "intent": "sale",
//   "redirect_urls": {
//     "return_url": "https://example.com/your_redirect_url.html",
//     "cancel_url": "https://example.com/your_cancel_url.html"
//   },
//   "payer": {
//     "payment_method": "paypal"
//   },
//   "transactions": [{
//     "amount": {
//       "total": "7.47",
//       "currency": "USD"
//     }
//   }]
// }'
