<?php
// default values
$balance = 0;
$interest = 0;
// open lender csv file to retrive data 
$lenderCSV = fopen("lender.csv","r");
while(($line = fgetcsv($lenderCSV, 1000, ",")) !== FALSE){
    $balance = $line[0];
    $interest = $line[1];
}
fclose($lenderCSV);

// default values
$loanAmount = 0;
// open debtor csv file to retrive data
$debtorCSV = fopen("debtor.csv","r");
while(($line = fgetcsv($debtorCSV, 1000, ",")) !== FALSE){
    $loanAmount = $line[0];
}
fclose($debtorCSV);

class Lender{
    // two properties
    protected $balance;
    protected $interest;

    // setter (in order to set values outside the class w/ protected properties)
    public function setBalance($balance){
        $this->balance = $balance;
    }
    public function setInterest($interest){
        $this->interest = $interest;
    }
    // getter (return exptected values/info)
    public function getBalance(){
        return $this->balance;
    }
    public function getInterest(){
        return $this->interest;
    }
    // deposit an amount to the account
    public function depositAccount($depositAmount){
        $balanceTotal = $this->balance + $depositAmount;
        // open lender csv to write the new data
        $lenderCSV = fopen("lender.csv","w");
        $data = array($balanceTotal,$this->interest);
        fputcsv($lenderCSV,$data);
        fclose($lenderCSV);
    }
    //withdraw an amount to the account
    public function withdrawAccount($withdrawAmount){
        $balanceTotal = $this->balance - $withdrawAmount;
        // open lender csv to write the new data
        $lenderCSV = fopen("lender.csv","w");
        $data = array($balanceTotal,$this->interest);
        fputcsv($lenderCSV,$data);
        fclose($lenderCSV);
    }
    // update interest
    public function updateInterest($newInterest){
        // open csv
        $lenderCSV = fopen("lender.csv","w");
        $data = array($this->balance,$newInterest);
        fputcsv($lenderCSV,$data);
        fclose($lenderCSV);

    }
    // deduc the loan amount to the acc balance
    public function deducBalance($newLoan){
        $balanceTotal = $this->balance - $newLoan;
        // writes updated loan amount to csv
        $lenderCSV = fopen("lender.csv","w");
        $data = array($balanceTotal,$this->interest);
        fputcsv($lenderCSV,$data);
        fclose($lenderCSV);
    }
    // when debtor pays
    public function debtorPay($payLoan){
        $balanceTotal = $this->balance + $payLoan;
        // writes updated loan amount to csv
        $lenderCSV = fopen("lender.csv","w");
        $data = array($balanceTotal,$this->interest);
        fputcsv($lenderCSV,$data);
        fclose($lenderCSV);
    }

}
// inheritance: to access contents from Lender class
class Debtor extends Lender{
    // protected properties
    protected $loanAmount;

    // setter
    public function setLoanAmount($loanAmount){
        $this->loanAmount = $loanAmount;
    }
    // getter
    public function getLoanAmount(){
        return $this->loanAmount;
    }

    // make loan
    public function makeLoan($newLoan){
        $interestPercentage= $this->getInterest() / 100;
        $updatedLoan = ($interestPercentage * $newLoan)+ $newLoan;
        $loanTotal = $this->loanAmount + $updatedLoan;
        // writes updated loan amount to csv
        $debtorCSV = fopen("debtor.csv","w");
        $data = array($loanTotal);
        fputcsv($debtorCSV,$data);
        fclose($debtorCSV);
    }
    // pay loan
    public function payLoan($payLoan){
        $loanTotal = $this->loanAmount - $payLoan;
        // writes updated loan amount to csv
        $debtorCSV = fopen("debtor.csv","w");
        $data = array($loanTotal);
        fputcsv($debtorCSV,$data);
        fclose($debtorCSV);
    }

}

// instantiate
$info = new Debtor;
// set values for balance and interest
$info->setBalance($balance);
$info->setInterest($interest);
$info->setLoanAmount($loanAmount);

?>
