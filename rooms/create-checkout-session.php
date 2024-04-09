<?php
require_once '../config/config.php'; // Include your config file

\Stripe\Stripe::setApiKey('sk_test_51Nk14gSIndbbMeUt8OocXoPYKutWfImi7X5GRJtePfhu4rMAfbNAUlqgkwzwS0LdYhogQ0MnBjSrDRrdKom5VmFH00DfBj2oEu');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost/hotel-booking'; // Change this to your actual domain

$checkout_session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => [[
        'price_data' => [
            'currency' => 'usd',
            'product_data' => [
                'name' => 'Room Booking', // Customize as needed
            ],
            'unit_amount' => $_SESSION['price'] * 100, // Convert to cents
        ],
        'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => $YOUR_DOMAIN . '/success.html', // Customize as needed
    'cancel_url' => $YOUR_DOMAIN . '/cancel.html', // Customize as needed
]);

echo json_encode(['id' => $checkout_session->id]);
