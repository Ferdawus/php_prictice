<?php 
    require_once './PaymentGateway/Stripe/Transaction.php';
    require_once './PaymentGateway/Paypal/Transaction.php';
    
    use PaymentGateway\Paypal\Transaction as PaypalTransaction;
    use PaymentGateway\Stripe\Transaction as StripeTransaction;
    class PaymentService
    {
        public function createTransaction($transactionMethod){
            if ($transactionMethod == 'Paypal') {
                $transaction = new PaypalTransaction();
            }elseif($transactionMethod == "Stripe"){
                $transaction = new StripeTransaction();
            }
        }
    }

?>