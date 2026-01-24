<?php


namespace App\View\Components;

use App\Models\PortoCart;
use App\Models\Product;
use Closure;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class navbar extends Component
{

   public $carts;
   public $num_cart;

   public $num_products;

    /**
     * Create a new component instance.
     */

    public function __construct()
    {
        $this->num_products = Product::all("name" , "id");
        if(Auth::guard("web")->check()){
            $user_id = Auth::guard('web')->user()->id;
            $this->carts = PortoCart::where("user_id" , $user_id)->with("product.image")->get();
            $this->num_cart = PortoCart::where("user_id" , $user_id)->sum("count");
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
