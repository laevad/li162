<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{

    use WithPagination;

    public $isOpen = false;
    public $isEdit = false;

    public $productState = [];

    public $product;

    public function render()
    {
        $products = Product::where('user_id', '=', Auth::user()->id)->latest()->paginate(5);

        return view('livewire.products', [
            'products' => $products,
        ]);
    }

    public function openModal()
    {
        $this->productState = []; // to clear
        $this->isOpen = true;

    }

    public function closeModal()
    {
        $this->isOpen = false;
        $this->isEdit = false;
    }


    public function store()
    {
        $this->productState['user_id'] = Auth::user()->id;
        $validatedData = Validator::make($this->productState, [
            'name' => 'required',
            'price' => 'required',
            'user_id' => 'required',
            'description' => '',
        ])->validate();
        Product::create($validatedData);
        $this->isOpen = false;
    }

    public function edit(Product $product)
    {
        $this->productState = $product->toArray();
        $this->product = $product;
        $this->isEdit = true;
        $this->isOpen = true;
    }

    public function update()
    {
        $validatedData = Validator::make($this->productState, [
            'name' => 'required',
            'price' => 'required',
            'user_id' => 'required',
            'description' => '',
        ])->validate();
        $this->product->update($validatedData);
        $this->closeModal();
    }

    public function delete($productId)
    {
        $product = Product::findOrFail($productId);
        $product->delete();
    }
}
