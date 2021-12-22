<?php 
  /* 2. Realizza due semplici classi PHP di esempio legate da un rapporto di ereditarietà. */
  
  class User {
    protected $first_name;
    protected $last_name;
    protected $username;
    protected $age;
    protected $discount;
    protected $total_spending;

    protected function setDiscount() {
      if($this->total_spending > 1000 && $this->total_spending < 2000) {
        $this->discount = 10;
      }
      elseif($this->total_spending >= 2000) {
        $this->discount = 20;
      }
      else $this->discount = 0;
    }

    public function getDiscount() {
      $this->setDiscount();
      return $this->discount;
    }
  }
  

  class PremiumUser extends User {
    private $extra_discount = 15;

    protected function setDiscount() {
      if($this->total_spending > 1000 && $this->total_spending < 2000) {
        $this->discount = 10 + $this->extra_discount;
      }
      elseif($this->total_spending >= 2000) {
        $this->discount = 20 + $this->extra_discount;
      }
      else $this->discount = 0 + $this->extra_discount;
    }
  }
?>