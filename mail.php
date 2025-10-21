<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "manaammammaruchulu@gmail.com";
    $subject = "New Order Received - Mana Ammamma Ruchulu";

    $name = $_POST["form_name"];
    $phone = $_POST["phone"];
    $product = $_POST["product"];
    $quantity = $_POST["quantity"];

    $message = "New order details:\n\n";
    $message .= "Name: $name\n";
    $message .= "Phone: $phone\n";
    $message .= "Product: $product\n";
    $message .= "Quantity: $quantity gms\n\n";
    $message .= "Please follow up with the customer on WhatsApp.";

    $headers = "From: no-reply@manaammammaruchulu.in\r\n";
    $headers .= "Reply-To: $to\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    mail($to, $subject, $message, $headers);
    echo "Mail sent successfully.";
} else {
    echo "Invalid request.";
}
?>
